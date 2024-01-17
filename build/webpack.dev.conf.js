const path = require('path')
const { merge } = require('webpack-merge')
const baseWebpackConfig = require('./webpack.base.conf')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

const webpackConfig = merge(baseWebpackConfig, {
  mode: 'development',
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
