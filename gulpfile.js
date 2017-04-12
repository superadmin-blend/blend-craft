var gulp = require('gulp');
var $    = require('gulp-load-plugins')();

var sassPaths = [
  'public_html/assets/bower_components/normalize.scss/sass',
  'public_html/assets/bower_components/foundation-sites/scss',
  'public_html/assets/bower_components/motion-ui/src'
];

var assetsPath = 'public_html/assets';

gulp.task('sass', function() {
  return gulp.src(assetsPath + '/scss/app.scss')
    .pipe($.rename('app.css'))
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compact'
    }))
    .pipe(gulp.dest(assetsPath + '/css'))
    .pipe($.uncss({
            html: ['templates/**/*.html'],
            ignore: [
              new RegExp('^meta\..*'),
              new RegExp('^\.important-.*')
            ]
        }))
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
  return gulp.src([
    assetsPath + '/bower_components/jquery/dist/jquery.js',
    assetsPath + '/bower_components/foundation-sites/dist/js/foundation.js',
    assetsPath + '/bower_components/what-input/dist/what-input.js',
    assetsPath + '/src/**/*.js',
    assetsPath + '/bower_components/outdated-browser/outdatedbrowser/outdatedbrowser.min.js'
    ])
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