var gulp = require('gulp'),
uglify = require ('gulp-uglify'),
sass = require('gulp-ruby-sass');

// Scripts Task 
// Uglifies
gulp.task('scripts', function(){
  gulp.src('js/*.js')
  .pipe(uglify())
  .pipe(gulp.dest('minjs'));
});

// Styles Task 
// Compiles SASS into CSS
gulp.task('styles', function(){
  gulp.src('scss/*.scss')
  .pipe(sass())
  .pipe(gulp.dest('css'));
});


// Watch Task 
// Watches JS
gulp.task('watch', function(){
  gulp.watch('js/*.js', ['scripts']);
});
// Default Tasks

gulp.task('default', ['scripts', 'styles', 'watch']);