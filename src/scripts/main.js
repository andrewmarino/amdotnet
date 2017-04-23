/** import external dependencies */
import jQuery from 'jquery';
import lazysizes from 'lazysizes';

/** import local dependencies */
import Router from './util/Router';
import common from './routes/common';
import project from './routes/project';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  common,
  project,
});

/** Load Events */
jQuery(document).ready(() => routes.loadEvents());
