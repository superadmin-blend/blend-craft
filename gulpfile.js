var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

var sassPaths = [
  'public/assets/bower_components/normalize.scss/sass',
  'public/assets/bower_components/foundation-sites/scss',
  'public/assets/bower_components/motion-ui/src'
];

var assetsPath = 'public/assets';

gulp.task('sass', function() {
  return gulp.src(assetsPath + '/scss/app.scss')
    .pipe($.rename('app.css'))
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compact'
    }))
    .pipe(gulp.dest(assetsPath + '/css'))
    .pipe($.rename('app.min.css'))
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest(assetsPath + '/css'))
    .pipe($.livereload());
});

gulp.task('scripts', function() {  
  return gulp.src(assetsPath + '/src/**/*.js')
    .pipe($.concat('app.js'))
    .pipe(gulp.dest(assetsPath + '/js'))
    .pipe($.rename('app.min.js'))
    .pipe($.uglify())
    .pipe(gulp.dest(assetsPath + '/js'))
    .pipe($.livereload());
});

gulp.task('default', ['sass', 'scripts'], function() {
	$.livereload.listen();
  gulp.watch(assetsPath + '/scss/**/*.scss', ['sass']);
  gulp.watch(assetsPath + '/src/*.js', ['scripts']);
});