var gulp       = require('gulp'),
  browserSync  = require('browser-sync'),
  pngquant     = require('imagemin-pngquant'),
  autoprefixer = require('gulp-autoprefixer'),
  compass      = require('gulp-compass'),
  concat       = require('gulp-concat'),
  gulpif       = require('gulp-if'),
  imagemin     = require('gulp-imagemin'),
  jshint       = require('gulp-jshint'),
  minhtml      = require('gulp-minify-html'),
  rename       = require('gulp-rename'),
  size         = require('gulp-size'),
  uglify       = require('gulp-uglify'),
  util         = require('gulp-util'),
  pjson        = require('./package.json'),
  reload       = browserSync.reload;

// paths to resources
var paths = {
  scss: 'src/scss/style.scss',
  scripts: 'src/js/**/*.js',
  main: 'src/js/main.js',
  images: 'src/img/**/*',
  php: '**/*.php',
  css: '**/*.css',
  js: 'js/**/*.js'
}

// destinations for resources
var dest = {
  css: '',
  php: '',
  scripts: 'js',
  images: 'img'
}

// environment variables
var env,
    outputDir,
    sassStyle,
    currentProj;

//***** UPDATE THIS FOR EACH PROJECT *****
currentProj = 'ku';

// build per environment
env = process.env.NODE_ENV || 'development';

if (env==='development') { 
  sassStyle = 'expanded';
} else {
  sassStyle = 'compressed';
}

// BROWSER-SYNC
gulp.task('browser-sync', function() {
  // watch files
  var files = [
    paths.php,
    paths.css,
    paths.js,
    paths.images
  ];
  // initialize browsersync
  browserSync.init(files, {
    // browsersync with a php server
    proxy: 'http://localhost:8888/' + currentProj + '/',
    notify: false
  });
});

// COMPASS
gulp.task('compass', function() {
  return gulp.src(paths.scss)
    .pipe(compass({
      style: sassStyle,
      css: '',
      sass: 'src/scss',
      image: 'img'
    }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest(dest.css))
    .pipe(size())
    .pipe(reload({stream:true}));
});

// JAVASCRIPT
gulp.task('js', function() {
  return gulp.src(paths.scripts)
    .pipe(concat('main.js'))
    .pipe(gulp.dest(dest.scripts))
    .pipe(size())
    .pipe(gulpif(env==='production', uglify()))
    .pipe(gulpif(env==='production', rename('main.min.js')))
    .pipe(gulpif(env==='production', gulp.dest(dest.scripts)))
    .pipe(gulpif(env==='production', size()));
});

// IMAGES
gulp.task('img', function () {
  return gulp.src(paths.images)
    .pipe(gulpif(env==='production', imagemin({
      progressive: true,
      svgoPlugins: [{removeViewBox: false}],
      use: [pngquant()]
    })))
    .pipe(gulpif(env==='production', gulp.dest(dest.images)))
    .pipe(size());
});

// DEFAULT
gulp.task('default', ['browser-sync', 'compass', 'js', 'img'], function(){
  gulp.watch(paths.scss, ['compass']);
  gulp.watch(paths.js, ['js']);
  gulp.watch(paths.images, ['img']);
});