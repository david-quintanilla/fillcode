
//dependencias
var gulp       = require('gulp');
var concat     = require('gulp-concat');
var uglify     = require('gulp-uglify');
var minifycss  = require('gulp-minify-css');
var liveReload = require('gulp-livereload');
var watch      = require('gulp-watch');
var nib        = require('nib');
var notify     = require('gulp-notify');
var stylus     = require('gulp-stylus');
var cached     = require('gulp-cached');
var remember   = require('gulp-remember');

//rutas de busqueda
var busqueda = {
	css    : '../../public/css/style.css',
	stylus : 'stylus/style.styl',
	js     : 'js/*'
};

//rutas de destino
var destino = {
	css       : '../../public/css',
	cssTheme  : '../../theme/css/',
	jsTheme   : '../../theme/js/'
};


//tarea para compilar stylus
gulp.task('stylus', function()
{
	gulp.src(busqueda.stylus)
		.pipe(stylus({ use : nib() }))
		.pipe(gulp.dest(destino.css));
});


//tarea para los files de css
gulp.task('css', function()
{
	gulp.src(busqueda.css)
		.pipe(cached('css'))
		.pipe(minifycss({keepBreaks:false}))
		.pipe(remember('css'))
		.pipe(concat('style.min.css'))
		.pipe(gulp.dest(destino.cssTheme))
		.pipe(notify('css success!!!'))
		.pipe(liveReload());
});

gulp.task('js', function()
{
	gulp.src(busqueda.js)
		.pipe(uglify())
		.pipe(concat('fillcode.min.js'))
		.pipe(gulp.dest(destino.jsTheme))
		.pipe(notify('script success!!!'));
});


//tarea para escuchar los cambios que se hagan
gulp.task('watch', function()
{
	liveReload.listen();
	gulp.watch(busqueda.stylus, ['stylus']);
	gulp.watch(busqueda.css, ['css']);
	gulp.watch(busqueda.js, ['js']);
});

//tareas que se ejecutaran por defecto
gulp.task('default', ['watch']);