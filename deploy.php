<?php

namespace Deployer;

$composerHome = getenv("COMPOSER_HOME") ?: getenv("HOME").'/.composer';
include $composerHome . '/vendor/autoload.php';

require_once 'recipe/symfony4.php';
require_once 'recipe/contao.php';
require_once 'recipe/deploy/gitlab_ci.php';

/*
 * Deploy Configuration
 */
set('local/bin/composer', './composer.phar');
inventory('deploy.yml');
set('default_stage', 'dev');
set('keep_releases', 2);
set('shared_files', ['config/parameters.yml']);
set('update_shared_parameters_target', 'config/parameters.yml');

add('exclude_paths', ['files/theme/src']);

set('clear_shared_dirs', ['files/theme', 'templates/theme']);
before('deploy:update_shared_dirs', 'deploy:clear_shared_dirs');

task(
    'symlink:nutshell',
    function () {
        run("rm -f {{release_path}}/files/nutshell");
        run(
            "cd {{release_path}} && {{bin/symlink}} {{release_path}}/vendor/erdmannfreunde/euf_nutshell/files/nutshell files/nutshell"
        );
    }
);
before('deploy:vendors', 'symlink:nutshell');

/*
 * Build node js
 */
task(
    'build',
    function () {
        invoke('build:composer');
        run('npm cache verify');
        run('npm install');
        run('node node_modules/.bin/gulp deploy');
    }
)->local()->desc('Build of project');

/*
 * Contao Configuration
 */

// Contao update shared dirs + parameters from repo
before('deploy:shared', 'deploy:update_shared_dirs');
after('deploy:shared', 'deploy:update_shared_parameters');

// Contao database backup
add('shared_dirs', ['var/db_backups']);
before('deploy:symlink', 'contao:database:backup');

// Contao database migration
after('contao:database:backup', 'contao:migrate');

// Enable/Disable  maintenance mode
after('deploy:vendors', 'maintenance:enable');
after('deploy:symlink', 'maintenance:disable');
before('deploy:clear_shared_dirs', 'maintenance:enable:previous_release');
