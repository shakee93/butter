var gulp = require('gulp');
var sass = require('gulp-sass');
var webpack = require('gulp-webpack');

var resourceDir = './resources/';
var publicDir = './public/';


gulp.task('scripts', function () {
    return gulp.src(resourceDir + '/js/app.js')
        .pipe(webpack( require('./webpack.config.js')  ) )
        .pipe(gulp.dest(publicDir + "/js"))
});


gulp.task('default', ['scripts']);

gulp.task('watch' , function () {
    gulp.watch([
        resourceDir + 'js/**/*.js',
        resourceDir + 'js/**/*.vue',
        resourceDir + 'sass/**/*.scss'
    ], ['scripts']);
});