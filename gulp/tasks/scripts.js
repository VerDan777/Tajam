const gulp = require('gulp');
const webpack = require('webpack-stream');


const config = {
    entry: './src/js/app.js',
    output: {
        filename: 'app.js'
    },
    module : {
        loaders: [{
            loader: 'babel-loader',
            query: {
                presets: ['es2015']
            },
            test: /\.js$/,
            exclude: /node_modules/
        }]
    }
}

gulp.task('scripts', ()=> { 
    return gulp.src('./src/js/app.js')
    .pipe(webpack(config))
    .on('error', function(errorInfo) {
        console.log(errorInfo.toString());
        this.emit('end');
    })
    .pipe(gulp.dest('./src/dist/'))
})