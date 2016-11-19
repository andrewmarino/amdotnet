/**
 * config.js
 */
'use strict';

import pkg from '../package.json';

const dest = './app';
const src = './src';
const assets = dest + '/assets'

module.exports = {

  pkg: pkg,
  dest: dest,
  src: src,

  css: {
    src: src + '/css/main.css',
    dest: assets + '/css/',
    basename: 'styles',
    watch: src + '/css/**/*',
    autoprefixer: {
      browsers: [
        'last 2 version'
      ]
    }
  },
  js: {
    dest: assets + '/js',
    outputFilename: 'scripts.min.js',
    browserify: {
      entries: [
        src + '/js/app.js'
      ],
      debug: true
    }
  },
  images: {
    srcRaster: src + '/img/{./,**/}*.{jpg,jpeg,png,gif}',
    srcSvg: src + '/img/{./,**/}*.svg',
    dest: assets + '/img'
  },
  templates: {
    srcTemplates: dest + '/site/templates/*.php',
    srcSnippets: dest + '/site/snippets/*.php'
  },
  serve: {
    options: {
      proxy: 'local.am.dev',
      open: true,
      port: 1337,
      https: false,
      notify: false,
      logLevel: 'info',
      reloadOnRestart: true,
      ui: {
        port: 8889
      }
    }
  },
  clean: {
    assets: [
      assets + '/css/*',
      assets + '/img/*',
      assets + '/js/*'
    ]
  },
  size: {
    showFiles: true,
    gzip: true
  }
}
