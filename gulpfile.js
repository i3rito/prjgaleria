const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');

gulp.task('styles', () => {
	return gulp.src([
		'node_modules/bootstrap/dist/css/bootstrap.min.css',
		'src/scss/main.scss',
	])
		.pipe(concat('styles.min.css'))
		.pipe(sass({
			outputStyle: 'compressed'
		})).on('error', sass.logError)
		.pipe( gulp.dest('./assets/css/') );
});

gulp.task('js', function() {
	return gulp.src([
		'node_modules/jquery/dist/jquery.min.js',
		'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
	])
		.pipe(concat('scripts.min.js'))
		//.pipe(uglify())
		.pipe(gulp.dest('./assets/js/'))
		;

});

gulp.task('default', gulp.series(['js', 'styles']));

// Watcher.
gulp.task('watch', function () {
    //gulp.watch("./src/js/**/*.js", gulp.series('js'));
    gulp.watch("./src/scss/**/*.scss", gulp.series('styles'));
});
