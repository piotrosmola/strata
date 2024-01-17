const webpack = require('webpack')
const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const ESLintPlugin = require('eslint-webpack-plugin')

function resolve(dir) {
  return path.join(__dirname, '..', dir)
}

module.exports = {
  entry: {
    core: './src/js/core.js',
    style: './src/scss/style.scss'
  },
  output: {
    path: path.resolve(__dirname, '../dist'),
    filename: '[name].bundle.js',
    clean: true
  },
  resolve: {
    alias: {
      '@': resolve('src')
    }
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '../dist/[name].css',
      chunkFilename: '[id].css'
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jQuery',
      'window.jQuery': 'jquery'
    }),
    new ESLintPlugin({})
  ],
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.(woff|woff2|eot|ttf|svg|jpg|gif|png)$/,
        type: 'asset/resource'
      },
      {
        test: /\.css$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          'css-loader'
        ]
      },
      {
        test: /\.(scss)$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader'
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: [require('autoprefixer'), require('pixrem')]
              }
            }
          },
          {
            loader: 'sass-loader'
          }
        ]
      }
    ]
  }
}
