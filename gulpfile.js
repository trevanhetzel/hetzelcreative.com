var gulp = require('gulp'),
    sass = require('gulp-sass'),
    prefix = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    minifyCSS = require('gulp-minify-css');

var paths = {
    styles: 'css/**/*.scss',
    scripts: [
        
    ]
};

gulp.task('styles', function () {
    gulp.src('./css/*.scss')
        .pipe(sass())
        .pipe(prefix('last 2 version', 'ie 8', 'ie 9'))
        .pipe(minifyCSS())
        .pipe(gulp.dest('./css'))
});

gulp.task('scripts', function () {
    gulp.src(paths.scripts)
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./js'));
});

gulp.task('copyBk', function () {
    gulp.src('./node_modules/barekit/js/barekit.min.js').pipe(gulp.dest('./js/lib'));
});

gulp.task('watch', function () {
    gulp.watch(paths.styles, ['styles']);
    gulp.watch(paths.scripts, ['scripts']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', [
    'styles',
    'scripts'
]);