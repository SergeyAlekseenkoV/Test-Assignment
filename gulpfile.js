'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var paths = {
   php:['./**/*.php']
};

gulp.task('php', function(){
  return gulp.src(paths.php)
  .pipe(reload({stream:true}));
});

gulp.task('browserSync', function() {
  browserSync({
    proxy: 'portal.loc'
  });
});

gulp.task('watch', function() {
  gulp.watch(paths.php, ['php']);
});

 
gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer({
       browsers: ['> 1%', 
       'last 2 versions', 
       'firefox >= 4', 
       'safari 7', 
       'safari 8', 
       'IE 8', 
       'IE 9', 
       'IE 10', 
       'IE 11'],
       cascade: false
    }))
    .pipe(gulp.dest('./css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', 'sass');
});
 
gulp.task('default', ['watch','browserSync','sass','php']);

//function defaultTask(cb) {
  // place code for your default task here
  //cb();
//}

// exports.default = defaultTask


