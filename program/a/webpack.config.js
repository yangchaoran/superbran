module.exports = {
    entry: './src/js/index.js',
    output:{
        path:'dist',
        filename:'index.js'
    },
    loaders:[
        {test:/\.css$/,loader: 'style!css',exclude:'/node_modules/'},
        {test:/\.jsx?$/,
            exclude:'/node_modules/',
            loader:'babel-loader',
            query:{
                presets:['react','es2015']
            }
        }
    ]
};