/**
 * watch.js
 *
 * Consult config.js for files being watched.
 * The only exception is the task 'js:watchify' which is handled by watchify
 * within the javascript tasks file.
 *
 */
'use strict';

import gulp from 'gulp';
import config from '../config.js';
import browserSync from 'browser-sync';

gulp.task('watch', () => {

  gulp.watch(config.css.watch, ['css']);

  gulp.watch([
    config.images.srcRaster,
    config.images.srcSvg
  ], ['images']);

  gulp.watch([
    config.templates.srcTemplates,
    config.templates.srcSnippets
  ])
  .on('change', browserSync.reload);

  // Watch tasks not directly watched by gulp.watch
  gulp.start(['js:watchify']);

});
