

module.exports = {
    entry: __dirname +'/resources/js/app.js',
    output: {
        path: __dirname  + '/public/js',
        filename: 'app.bundle.js'
    },
    devtool: "source-map",
    module: {
        loaders: [
            {
                test: /\.js$/, exclude: /node_modules/, loader: "babel-loader"
            },
            {
                test: /\.vue$/,
                loader: 'vue'
            },
            {
                test   : /\.css$/,
                loaders: ['style', 'css', 'resolve-url']
            },
            {
                test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/,
                loader: 'url-loader'
            },
            {
                test: /\.scss$/,
                loaders: ["style", "css?sourceMap", 'resolve-url', "sass?sourceMap"]
            }
        ]
    },
    resolve: {
        alias: {
            vue: 'vue/dist/vue.js'
        }
    },
    vue: {
        loaders: {
            js: 'babel'
        }
    }
};