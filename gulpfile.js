var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var concat = require('gulp-concat');
var cleancss = require('gulp-clean-css');
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
// var uncss = require('gulp-uncss');

var reload = browserSync.reload;

gulp.task('browser-sync', function() {
    var files = [
        'build/js/*.js',
        'build/css/*.css',
        './style.css',
        './*.php'
    ];
    
    browserSync.init(files, {
        port: 8081,     // available port for c9
        notify: false   // disable notification
    });
});

gulp.task('build-css', function() {
    return gulp.src('src/sass/*.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'Android < 4.4'],
            cascade: false
        }))
        .pipe(concat('themestyle.min.css'))
        .pipe(cleancss())
        .pipe(gulp.dest('build/css/'))
        .pipe(reload({stream: true}));
});

gulp.task('build-js', function() {
    return gulp.src('src/js/*.js')
        .pipe(concat('themescript.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('build/js/'))
        .pipe(reload({stream: true}));
});

gulp.task('dev', ['build-css', 'build-js', 'browser-sync'], function() {
    gulp.watch('src/**/*.scss', ['build-css']);
    gulp.watch('src/**/*.js', ['build-js']);
    gulp.watch('./style.css').on('change', reload);
});