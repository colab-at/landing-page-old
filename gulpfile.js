'use strict';

var gulp = require('gulp'),
		connect = require('gulp-connect');


// Default
gulp.task('default', ['build'], function () {});


// Build
gulp.task('build', function () { });


// Serve
gulp.task('serve', function () {
  connect.server({
  	port: 3000
  });
});
