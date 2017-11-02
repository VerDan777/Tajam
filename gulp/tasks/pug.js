const gulp = require('gulp');
const pug = require('gulp-pug2');
const notify = require('gulp-notify');

gulp.task('pugRender', ()=> {
    return gulp.src('./src/**/*.pug')
    .pipe(pug())
    .on('error', notify.onError(function(error) {
        return {
            title: 'Pug',
            message: error.message
        }
    }))
    .pipe(gulp.dest('./src/dist'))
});