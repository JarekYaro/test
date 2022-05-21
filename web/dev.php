<?php

declare(strict_types=1);

use Contao\ManagerBundle\ContaoManager\Plugin;
use Contao\ManagerBundle\HttpKernel\ContaoKernel;
use FOS\HttpCache\TagHeaderFormatter\TagHeaderFormatter;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\TerminableInterface;

// Suppress error messages (see #1422)
@ini_set('display_errors', '0');

// Disable the phar stream wrapper for security reasons (see #105)
if (\in_array('phar', stream_get_wrappers(), true)) {
    stream_wrapper_unregister('phar');
}

/** @var Composer\Autoload\ClassLoader */
$loader = require __DIR__.'/../vendor/autoload.php';

$projectDir = \dirname(__DIR__);
$env = 'dev';

// Handle the request
$request = Request::createFromGlobals();

// Create kernel
Request::enableHttpMethodParameterOverride();
Plugin::autoloadModules($projectDir.'/../system/modules');
ContaoKernel::setProjectDir($projectDir);
Debug::enable();
$kernel = new ContaoKernel($env, true);

$response = $kernel->handle($request);

// Force no-cache on all responses in the preview front controller
$response->headers->set('Cache-Control', 'no-store');

// Strip all tag headers from the response
$response->headers->remove(TagHeaderFormatter::DEFAULT_HEADER_NAME);
$response->send();

if ($kernel instanceof TerminableInterface) {
    $kernel->terminate($request, $response);
}
