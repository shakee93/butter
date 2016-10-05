module.exports = {
    entry: './resources/js/app.js',
    output: {
        path: '/public/js',
        filename: 'app.bundle.js'
    },
    module: {
        loaders: [
            {
                test: /\.js$/, exclude: /node_modules/, loader: "babel-loader"
            },
            {
                test: /\.vue$/,
                loader: 'vue'
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