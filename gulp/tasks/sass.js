/**
 * sass.js
 */
'use strict';

import gulp from 'gulp';
import sass from 'gulp-sass';
import config from '../config.js';
import handleErrors from '../util/handle-errors.js';
import cssnano from 'gulp-cssnano';
import autoprefixer from 'gulp-autoprefixer';
import rename from 'gulp-rename';
import size from 'gulp-size';
import browserSync from 'browser-sync';

gulp.task('sass', () => {

  let pipeline = gulp.src(config.sass.src)

    .pipe(sass({outputStyle: 'expanded'}).on('error', handleErrors))

    // autoprefix, minify, and rename
    .pipe(autoprefixer(config.sass.autoprefixer))
    .pipe(cssnano())
    .pipe(rename({ basename: config.sass.basename, suffix: '.min' }))
    .pipe(gulp.dest(config.sass.dest))

    .pipe(size({
      showFiles: config.size.showFiles,
      gzip: config.size.gzip,
      title: 'CSS size:'
    }))

    .pipe(browserSync.stream())

  return pipeline;

});
