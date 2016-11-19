/**
 * css.js
 */
'use strict';

import gulp from 'gulp';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import cssnano from 'cssnano';
import config from '../config.js';
import handleErrors from '../util/handle-errors.js';
import rename from 'gulp-rename';
import browserSync from 'browser-sync';

gulp.task('css', () => {
  let pipeline = gulp.src(config.css.src)

    .pipe(postcss([
      require('postcss-import')({ from: config.css.src }),
      autoprefixer(config.css.autoprefixer),
      cssnano()
    ]))
    .pipe(rename({ basename: config.css.basename, suffix: '.min' }))
    .pipe(gulp.dest(config.css.dest))

    .pipe(browserSync.stream())

  return pipeline;

});
