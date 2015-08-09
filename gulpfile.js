var gulp = require('gulp'),
concat = require('gulp-concat'),
stripDebug = require('gulp-strip-debug');
uglify = require('gulp-uglify');
uglify = require ('gulp-uglify'),
sass = require('gulp-ruby-sass');
autoprefix = require('gulp-autoprefixer');
minifyCSS = require('gulp-minify-css');
livereload = require('gulp-livereload');

// Scripts Task 
// Uglifies
gulp.task('scripts', function(){
  gulp.src('./js/*.js')
  .pipe(uglify())
  .pipe(gulp.dest('minjs'));
});

// Sass Task
// 


// Watch Task 
// Watches JS
gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('*.css', ['styles']);
});

// CSS concat, auto-prefix and minify
gulp.task('cssStyles', function() {
  gulp.src(['app.css'])
    .pipe(concat('app.css'))
    .pipe(autoprefix('last 2 versions'))
    .pipe(minifyCSS())
    .pipe(gulp.dest('css/min'));
});

// Default Tasks
gulp.task('default', ['scripts', 'cssStyles']);