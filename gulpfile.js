'use strict';

var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function () {
    return gulp.src('/assets/css/src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('/assets/css/'));
});

gulp.task('watch', function () {
    gulp.watch('/assets/css/src/sass/**/*.scss', gulp.series('sass'));
});

gulp.task('default', gulp.series('sass', 'watch'));
