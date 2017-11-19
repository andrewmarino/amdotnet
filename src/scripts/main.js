// import external dependencies
import picturefill from 'picturefill';
import lazysizes from 'lazysizes';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';

/**
 * Populate Router instance with DOM routes
 * @type {Router} routes - An instance of our router
 */
const routes = new Router({
  common
});

jQuery(document).ready(() => routes.loadEvents());
