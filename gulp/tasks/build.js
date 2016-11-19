/**
 * build.js
 */
'use strict';

import gulp from 'gulp';
import sequence from 'gulp-sequence';

gulp.task('build', sequence(['clean'], [
  'css',
  'images:build',
  'js'
]));
