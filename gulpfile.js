var gulp      = require('gulp'),
    gutil     = require('gulp-util'),
    prefix    = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    concat    = require('gulp-concat'),
    uglify    = require('gulp-uglify'),
    shell     = require('gulp-shell');

gulp.task('compass', function() {
  gulp.src('scss/**/*.scss')
          .pipe(shell([
            'compass watch'
          ]))
});

gulp.task('scripts', function() {
  gulp.src('js/*.js')
          .pipe(concat("scripts.js"))
          .pipe(uglify())
          .pipe(gulp.dest('public/js'))
});

gulp.task('minify', function() {
  gulp.src('css/*.css')
          .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
          .pipe(minifycss())
          .pipe(gulp.dest('public/css'))
});

gulp.task('watch', function() {
  gulp.watch('js/*.js', ['scripts']);
  gulp.watch('scss/**/*.scss', ['compass']);
  gulp.watch('css/*.css', ['minify']);
});

gulp.task('default', ['watch', 'compass']);