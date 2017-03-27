var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var cleancss = require('gulp-clean-css');
var concat = require('gulp-concat-css');
var uncss = require('gulp-uncss');

var reload = browserSync.reload;

gulp.task('browser-sync', function() {
    var files = [
        'build/css/*.css',
        './style.css',
        './*.php'
    ];
    
    browserSync.init(files, {
        port: 8081,     // available port for c9
        notify: false   // disable notification
    });
    
});

gulp.task('build', function() {
    return gulp.src('src/sass/*.scss')
        .pipe(sass())
        .pipe(concat('main.css'))
        .pipe(cleancss())
        .pipe(gulp.dest('build/css/'))
        .pipe(reload({stream: true}));
});

gulp.task('dev', ['build', 'browser-sync'], function() {
    gulp.watch('src/**/*.scss', ['build']);
    gulp.watch('./style.css').on('change', reload);
});