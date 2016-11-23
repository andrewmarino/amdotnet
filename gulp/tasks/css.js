/**
 * css.js
 */
'use strict';

import gulp from 'gulp';
import postcss from 'gulp-postcss';
import cssnext from 'postcss-cssnext';
import atImport from 'postcss-import';
import cssnano from 'cssnano';
import config from '../config.js';
import handleErrors from '../util/handle-errors.js';
import rename from 'gulp-rename';
import browserSync from 'browser-sync';
import size from 'gulp-size';

gulp.task('css', () => {
  let pipeline = gulp.src(config.css.src)

    .pipe(postcss([
      atImport({ from: config.css.src }),
      cssnext({ browsers: ['last 2 version'] }),
      cssnano({ autoprefixer: false })
    ]))

    .pipe(rename({
      basename: config.css.basename,
      suffix: '.min'
    }))

    .pipe(gulp.dest(config.css.dest))

    .pipe(size({
      showFiles: config.size.showFiles,
      gzip: config.size.gzip,
      title: "CSS payload:"
    }))

    .pipe(browserSync.stream())

  return pipeline;

});
