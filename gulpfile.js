/* ---------------------------------------------------------------------------------------------

    Gulp.js - http://gulpjs.com
    Plugins - http://gulpjs.com/plugins
    Documentation: http://github.com/gulpjs/gulp/blob/master/docs/README.md
    1. If [package.json] with dependencies exist run: $ npm install
    2. Start gulp: $ gulp

--------------------------------------------------------------------------------------------- */

// Gulp with additional plugins
var gulp          = require('gulp'),                      // npm install gulp --save-dev
    uglify        = require('gulp-uglify-es').default,    // npm i gulp-uglify-es --save-dev
    plumber       = require('gulp-plumber'),              // npm install gulp-plumber --save-dev
    imagemin      = require('gulp-imagemin'),             // npm install gulp-imagemin --save-dev
    cleanCSS      = require('gulp-clean-css'),            // npm install gulp-clean-css --save-dev
    autoprefixer  = require('gulp-autoprefixer'),         // npm install gulp-autoprefixer --save-dev
    rename        = require('gulp-rename'),               // npm install gulp-rename --save-dev
    sass          = require('gulp-sass'),                 // npm install gulp-sass --save-dev
    sourcemaps    = require('gulp-sourcemaps'),           // npm install gulp-sourcemaps --save-dev
    sassGlob      = require('gulp-sass-glob'),            // npm install gulp-sass-glob --save-dev
    concat        = require('gulp-concat');               // npm install gulp-concat --save-dev

// Object
var paths = {
	styles : {
		scssInput 	: 'assets/scss/*.scss',
		modules 	  : 'components/**/*.scss',
		cssInput	  : 'assets/build/css/main.css',
		cssOutput	  : 'assets/build/css/'
	},
	scripts : {
		input			  : [ // list scripts in specific order
                // "assets/js/libs/jquery.min.js",
                // "assets/js/libs/bootstrap.min.js",
                "assets/js/libs/jquery.easing.min.js",
                // "assets/js/libs/scrollreveal.min.js",
                // "assets/js/libs/waypoints.min.js",
                "assets/js/libs/lity.min.js",
                "assets/js/libs/slick.min.js",
                "assets/js/*.js" 
    ],
		output			: 'assets/build/js/'
	},
  img : {
    input       : 'assets/img/**', // images in this directory or subdirectories
    output      : 'assets/build/img'
  }
};

// Error Log Function (Alternative to Plumber)
function errorLog(error) {
  console.error.bind(error);
  this.emit('end');
}

// Compress Images
gulp.task('image', function(){
  gulp.src(paths.img.input)
    .pipe(imagemin()) 
    .pipe(gulp.dest(paths.img.output)); // 'assets/build/img'
});

// Convert SCSS to CSS
gulp.task('sass', function (){
	return gulp.src(paths.styles.scssInput) // 'assets/scss/*.scss'
		.pipe(sassGlob())
    .pipe(sourcemaps.init())
  		.pipe(sass({
  			errLogToConsole: true,
  			outputStyle: 'expanded'
  		})).on('error', sass.logError)
		  .pipe(autoprefixer())
    .pipe(sourcemaps.write())
		.pipe(gulp.dest(paths.styles.cssOutput)); // 'assets/build/css'
});

// Compress CSS Styles
gulp.task('styles', function(){
  return gulp.src(paths.styles.cssInput) // 'assets/build/css/main.css'
  .pipe(cleanCSS({compatibility: 'ie8'}))
  .pipe(rename({suffix: '.min'}))
  .pipe(gulp.dest(paths.styles.cssOutput)); // 'assets/build/css/'
}); 

// Compresses Scripts
gulp.task('scripts', function(){
  gulp.src(paths.scripts.input) // 'assets/js/*.js' paths.scripts.input
    .pipe(plumber()) 
    .pipe(concat('main.js'))
    .pipe(gulp.dest(paths.scripts.output))
    .pipe(rename('main.min.js'))
    .pipe(uglify()) // Compress
    // .on('error', errorLog) Alternative to Plumber
    .pipe(gulp.dest(paths.scripts.output)); // 'assets/build/js'
});

// Watch for any updates
gulp.task('watch', function() {
  gulp.watch('assets/img/**', ['image']);
  gulp.watch(paths.styles.scssInput, ['sass']);       // 'assets/scss/*.scss'
  gulp.watch(paths.styles.modules, ['sass']);         // 'components/**/*.scss'
  gulp.watch(paths.styles.cssInput, ['styles']);  // 'assets/build/css/main.css'
  gulp.watch(paths.scripts.input, ['scripts']);       // 'assets/js/*.js'
});

// Run Gulp tasks
gulp.task('default', ['image', 'scripts', 'styles', 'sass', 'watch']);
