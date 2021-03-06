const gulp = require('gulp');
const watch = require('gulp-watch');
const BrowserSync = require('browser-sync').create();

gulp.task('watch', function() {
    BrowserSync.init({
        server : {
            baseDir: './src/dist'
        },
        notify: {
            styles: {
                top: "auto",
                bottom: 0
            }
        }
    })
});
// pug
watch('./src/*.pug', function() {
    gulp.start('pugChanged');
});

// styles
watch('./src/scss/**/*.scss', function() {
    gulp.start('cssInject');
});


// js
watch("./src/js/**/*.js", function() {
    gulp.start("jsChanged");
});

// wordpress

watch('./wp/*.php', ()=> {
    gulp.start('copyPHP');
})

watch('./src/dist/styles.css', ()=> {
    gulp.start('copyCSS');
})

watch('./src/dist/*.js',()=> {
    gulp.start('copyJS');
})

watch('./src/dist/img/*.*', ()=> {
    gulp.start('copyImg');
})

gulp.task('pugChanged', ['pugRender'], function() {
    BrowserSync.reload();
});
gulp.task('cssInject', ['styles'], function() {
    gulp.src('./src/dist/styles.css')
    .pipe(BrowserSync.stream());
});

gulp.task('jsChanged',['scripts'],function() {
    BrowserSync.reload();
})


