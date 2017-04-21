var gulp = require('gulp');

var browserSync = require('browser-sync').create();


gulp.task('browser-sync', function() {
	"use strict";
    browserSync.init({
        proxy: "http://localhost/aaw-html"
    });
	gulp.watch(['./css/style.css', './*.php', './**/*.js']).on('change', browserSync.reload);

});
