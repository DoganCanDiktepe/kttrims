'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var prettify = require('gulp-prettify');
var minifyCss = require("gulp-minify-css");
var rename = require("gulp-rename");
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var autoprefixer = require('gulp-autoprefixer');
var util = require('gulp-util');


console.log(util.env.production);

var config = {

    /* Watch Path */
    CssWebWatchPath: 'assets/css/*.css',
    JsWebWatchPath: 'assets/js/*.js',

    /* Public Path */
    WebPath: 'bundle/dist/',
    ManagePath: 'bundle/manage/dist/',
    production: !!util.env.production,

    /* CSS Files */
    /*
    ManageCssFiles: [
      'manage/css/'
    ],*/
    /* JS Files */
    WebJsFiles: [
        'assets/js/jquery.min.js',
        'assets/js/master.min.js',
        'assets/js/function.js'
    ],

    ManageJsfiles: [
        'assets/manage/plugins/pace/pace.min.js',
        'assets/manage/plugins/jquery/jquery-1.11.1.min.js',
        'assets/manage/plugins/modernizr.custom.js',
        'assets/manage/plugins/jquery-ui/jquery-ui.min.js',
        'assets/manage/plugins/boostrapv3/js/bootstrap.min.js',
        'assets/manage/plugins/jquery/jquery-easy.js',
        'assets/manage/plugins/jquery-unveil/jquery.unveil.min.js',
        'assets/manage/plugins/jquery-bez/jquery.bez.min.js',
        'assets/manage/plugins/jquery-ios-list/jquery.ioslist.min.js',
        'assets/manage/plugins/jquery-actual/jquery.actual.min.js',
        'assets/manage/plugins/jquery-scrollbar/jquery.scrollbar.min.js',
        'assets/manage/plugins/bootstrap-select2/select2.min.js',
        'assets/manage/plugins/classie/classie.js',
        'assets/manage/plugins/switchery/js/switchery.min.js',
        'assets/manage/plugins/summernote/js/summernote.min.js',
        'assets/manage/pages/js/pages.min.js',
        'assets/manage/js/form_elements.js',
        'assets/manage/plugins/jquery-validation/js/jquery.validate.min.js',
        'assets/manage/js/jquery.iframe-transport.js',
        'assets/manage/js/jquery.fileupload.js',
        'assets/manage/js/scripts.js'
    ],


    ManageSassfiles:"assets/manage/pages/scss/pages.scss",
    ManageCssFiles: [
        'assets/manage/plugins/pace/pace-theme-flash.css',
        'assets/manage/plugins/boostrapv3/css/bootstrap.min.css',
        'assets/manage/plugins/font-awesome/css/font-awesome.css',
        'assets/manage/plugins/jquery-scrollbar/jquery.scrollbar.css',
        'assets/manage/plugins/bootstrap-select2/select2.css',
        'assets/manage/plugins/switchery/css/switchery.min.css',
        'assets/manage/plugins/summernote/css/summernote.css',
        'assets/manage/css/jquery.fileupload.css',
        'assets/manage/pages/css/pages-icons.css',
    ]
};

gulp.task('manageSass', function () {
    gulp.src(config.ManageSassfiles)
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(config.production ? minifyCss({keepSpecialComments: 0}) : util.noop())
        .pipe(gulp.dest(config.ManagePath))
        .pipe(browserSync.stream());
});

gulp.task('managecss', function () {
    gulp.src(config.ManageCssFiles)
        .pipe(concatCss('plugin.css'))
        .pipe(autoprefixer())
        .pipe(config.production ? minifyCss({keepSpecialComments: 0}) : util.noop())
        .pipe(gulp.dest(config.ManagePath))
        .pipe(browserSync.stream());
});



gulp.task('css', function () {
    gulp.src(config.CssWebWatchPath)
        .pipe(concatCss('web.css'))
        .pipe(autoprefixer())
        .pipe(config.production ? minifyCss({keepSpecialComments: 0}) : util.noop())
        .pipe(gulp.dest(config.WebPath))
        .pipe(browserSync.stream());
});


gulp.task('managejs', function () {
    gulp.src(config.ManageJsfiles)
        .pipe(concat('manage.js'))
        .pipe(config.production ? uglify() : util.noop())
        .pipe(gulp.dest(config.ManagePath))
        .pipe(browserSync.stream());
});

gulp.task('webjs', function () {
    gulp.src(config.WebJsFiles)
        .pipe(concat('web.js'))
        .pipe(config.production ? uglify() : util.noop())
        .pipe(gulp.dest(config.WebPath))
        .pipe(browserSync.stream());
});

gulp.task('serve', ['css', 'manageSass', 'managejs', 'webjs', 'managecss'], function () {
    browserSync.init({
        proxy: "http://dev.kttrims/"
    });

    gulp.watch(config.CssWebWatchPath, ['css']);
    gulp.watch(config.ManageSassfiles, ['manageSass']);
    gulp.watch(config.ManageCssFiles, ['managecss']);
    gulp.watch(config.ManageJsfiles, ['managejs']);
    gulp.watch(config.JsWebWatchPath, ['webjs']);

    gulp.watch(['*.html', '*.php']).on('change', reload);
});

gulp.task('default', ['serve']);
