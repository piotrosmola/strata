const path = require('path')
const { merge } = require('webpack-merge')
const baseWebpackConfig = require('./webpack.base.conf')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

const webpackConfig = merge(baseWebpackConfig, {
  mode: 'development',
  output: {
    path: path.resolve(__dirname, '../dist'),
    filename: '[name].bundle.js'
  },
  plugins: [
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3030,
      files: ['**/*.php'],
      proxy: 'http://strata:8889/'
    })
  ],
  watch: true,
  stats: 'errors-only'
})

module.exports = webpackConfig
