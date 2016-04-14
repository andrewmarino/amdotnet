/**
 * serve.js
 */
'use strict';

import gulp from 'gulp';
import config from '../config.js';
import browserSync from 'browser-sync';

gulp.task('serve', ['watch'], function() {

  browserSync.init(config.serve.options);

});
