const gulp = require('gulp');
const rename = require('gulp-rename');

gulp.task('copyPHP', ()=> {
    return gulp.src('./wp/*.php')
    .pipe(gulp.dest('/Applications/XAMPP/xamppfiles/htdocs/tajem/wp-content/themes/tajem/'));

});

gulp.task('copyCSS', ()=> {
    return gulp.src('./src/dist/styles.css')
    .pipe(rename('style.css'))
    .pipe(gulp.dest('/Applications/XAMPP/xamppfiles/htdocs/tajem/wp-content/themes/tajem/'));
})

gulp.task('copyJS',()=> {
    return gulp.src('./src/dist/app.js')
    .pipe(gulp.dest('/Applications/XAMPP/xamppfiles/htdocs/tajem/wp-content/themes/tajem/'));
})

gulp.task('copyImg',()=> {
    return gulp.src('./src/dist/img/*.*')
    .pipe(gulp.dest('/Applications/XAMPP/xamppfiles/htdocs/tajem/wp-content/themes/tajem/'));
})