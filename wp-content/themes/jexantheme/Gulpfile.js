var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var cssmin = require('gulp-cssmin');
var uglify = require('gulp-uglify');
var del = require('del');


var paths = {
    styles: {
        src: ['src/scss/main.scss'],
        dest: 'assets/css/'
    },
    scripts: {
        src: 'src/js/**/*.js',
        dest: 'assets/js/'
    }
}

/**
 * Clean up the optimized css from assets directory
 */
gulp.task('cleancss', function() {
    del.sync(['assets/css/*.css', '!assets/css']);
});

/**
 * Transpile scss into css. Minify and concat the output css
 */
gulp.task('styles', ['cleancss'], function () {
    gulp.src(paths.styles.src)
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(concat('main.min.css'))
        /*.pipe(cssmin())*/
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.styles.dest));
});

/**
 * Clean up the optimized javascript from assets directory
 */
gulp.task('cleanjs', function() {
    del.sync(['assets/js/*.js', '!assets/js']);
});

/**
 * Transpile ES6 into plain javascript. Minify and concat the output javascript
 */
gulp.task('scripts', ['cleanjs'] ,function () {
    gulp.src(paths.scripts.src, { sourcemaps: true })
        .pipe(babel())
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest(paths.scripts.dest));
});

/**
 * Default task. Clean up the optimized css and jasvascript and executes the styles and scripts tasks in parallel
 */
gulp.task('default', ['styles', 'scripts']);

/**
 * Watch task to automatically create css and js optimized files
 */
gulp.watch(['src/scss/**/*.scss', 'src/js/**/*.js'], ['default']);
