const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify-es').default;
const imagemin = require('gulp-imagemin');
const pngcrush = require('imagemin-pngcrush');
const include = require('gulp-include');
const autoprefixer = require('gulp-autoprefixer');
const notify = require('gulp-notify');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const concat = require('gulp-concat');
const replace = require('gulp-replace');

const themePath = 'files/theme/';

// browser sync proxy url: e.g. a vhost-based url,
// see also: https://www.browsersync.io/docs/options#option-proxy
const bsProxy       = 'http://appserver';
const bsDomain      = 'https://yatel-contao-dev.lndo.site';

const paths = {
    src: {
        styles: [themePath + 'src/scss/default.scss', themePath + 'src/scss/tinymce.scss', themePath + 'src/css/**/*.css'],
        styleUrls: themePath + 'src/',
        scripts: themePath + 'src/js/**/*.js',
        images: themePath + 'src/img/**/*',
        fonts: themePath + 'src/fonts/**/*'
    },
    dist: {
        styles: themePath + 'dist/css',
        styleUrls: '../',
        scripts: themePath + 'dist/js',
        scriptsFile: 'main.js',
        images: themePath + 'dist/img',
        fonts: themePath + 'dist/fonts',
    },
    watch: {
        styles:     themePath + 'src/scss/**/*.scss',
        scripts:    themePath + 'src/js/**/*.js',
        images:     themePath + 'src/img/**/*',
        templates:  'templates/**/*'
    },
};

// reading your sass files, add autoprefixer options, create sourcemaps, generate css file, inject css via browser-sync
const styles = function() {
    return gulp.src(paths.src.styles)
        .pipe(plumber({errorHandler: notify.onError('Error: <%= error.message %>')}))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(replace('/' + paths.src.styleUrls, paths.dist.styleUrls))
        .pipe(replace(paths.src.styleUrls, paths.dist.styleUrls))
        .pipe(sourcemaps.write('../maps'))
        .pipe(gulp.dest(paths.dist.styles))
        .pipe(browserSync.stream({ match: '**/*.css' }));
};
exports.styles = styles;

// nearly the same that ['styles'] does, but minify css via cleanCSS
const minifyCss = function() {
    return gulp.src(paths.src.styles)
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(replace('/' + paths.src.styleUrls, paths.dist.styleUrls))
        .pipe(replace(paths.src.styleUrls, paths.dist.styleUrls))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.dist.styles));
};
exports.minify_css = minifyCss;

// read, combine and uglyify js
const scripts = function() {
    return gulp.src(paths.src.scripts)
        .pipe(include())
        .pipe(uglify())
        .pipe(concat(paths.dist.scriptsFile))
        .pipe(gulp.dest(paths.dist.scripts));
};
exports.scripts = scripts;

// read and optimize images
const images = function () {
    return gulp.src(paths.src.images)
        .pipe(imagemin({
            progressive: true,
        }))
        .pipe(gulp.dest(paths.dist.images));
};
exports.images = images;

// copy static files from src to dist
const copy = function() {
    return gulp.src(paths.src.fonts)
        .pipe(gulp.dest(paths.dist.fonts));
};
exports.copy = copy;

const reload = function() {
    browserSync.reload();
};

const watch = function(done) {
    gulp.watch(paths.watch.styles, {usePolling: true}, gulp.series([styles]));
    gulp.watch(paths.watch.templates, {usePolling: true}).on('change', reload);
    gulp.watch(paths.watch.scripts, {usePolling: true}, gulp.series([scripts])).on('change', reload);
    done();
};

const serve = function(done) {
    browserSync.init({
        proxy: bsProxy,
        open: false,
        injectNotification: 'overlay',
        socket: {
            domain: bsDomain,
            port: 80 // NOT the 3000 you might expect.
        },
        logConnections: true
    }, () => {
        done();
    });
};
exports.serve = serve;

exports.default = gulp.parallel([serve, watch]);
exports.deploy = gulp.series([minifyCss, scripts, images, copy]);
