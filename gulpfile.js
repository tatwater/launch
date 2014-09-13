// Gulp
var gulp = require('gulp');

// Sass/CSS
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');

// JavaScript
var uglify = require('gulp-uglify');

// Images
var svgmin = require('gulp-svgmin');
var imagemin = require('gulp-imagemin');



// Compile Sass
  gulp.task('sass', function () {
    gulp.src(['./dev/scss/*.scss', '!./dev/scss/helpers/_variables.scss'])
      .pipe(sass({
        includePaths: ['./dev/scss'],
        outputStyle: 'expanded'
      }))
      .pipe(prefix(
        "last 1 version", "> 1%", "ie 8", "ie 7"
        ))
      .pipe(gulp.dest('./'))
      .pipe(minifycss())
      .pipe(gulp.dest('./'));
  });

// Uglify JS
  gulp.task('uglify', function() {
    gulp.src('./dev/js/*.js')
      .pipe(uglify())
      .pipe(gulp.dest('./js'));
  });

// Images
  gulp.task('svgmin', function() {
    gulp.src('./dev/img/**/*.svg')
    .pipe(svgmin())
    .pipe(gulp.dest('./dev/img'))
    .pipe(gulp.dest('./img'));
  });

  gulp.task('imagemin', function () {
    gulp.src('./dev/img/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./dev/img'))
    .pipe(gulp.dest('./img'));
  });



gulp.task('default', function() {
  // Sass
  gulp.watch("./dev/scss/**/*.scss", function(event){
    gulp.run('sass');
  });
  // JavaScript
  gulp.watch("./dev/js/**/*.js", function(event){
    gulp.run('uglify');
  });
  // Images
  gulp.watch("./dev/img/**/*", function(event){
    gulp.run('imagemin');
    gulp.run('svgmin');
  });
});