
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
	css    : ['../../public/css/main.css'],
	stylus : [ 'stylus/main.styl'],
};

//rutas de destino
var destino = {
	css  : '../../public/css'
};


//tarea para compilar stylus
gulp.task('stylus', function()
{
	gulp.src(busqueda.stylus)
		.pipe(cached('stylus'))
		.pipe(stylus())
		.pipe(remember('stylus'))
		.pipe(gulp.dest(destino.css));
});


//tarea para los files de css
gulp.task('css', function()
{
	gulp.src(busqueda.css)
		.pipe(cached('css'))
		.pipe(minifycss({keepBreaks:false}))
		.pipe(remember('css'))
		.pipe(concat('styles.min.css'))
		.pipe(gulp.dest(destino.css))
		.pipe(notify('file css compressed!!!'))
		.pipe(liveReload());
});


//tarea para escuchar los cambios que se hagan
gulp.task('watch', function()
{
	liveReload.listen();
	gulp.watch(busqueda.stylus, ['stylus']);
	gulp.watch(busqueda.css, ['css']);
});

//tareas que se ejecutaran por defecto
gulp.task('default', ['watch']);