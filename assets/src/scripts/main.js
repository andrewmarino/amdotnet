// import external dependencies
import 'lazysizes';
import 'picturefill';

// import local dependencies
import Router from './util/Router';
import Routes from './routes/index';

/**
 * Populate Router instance with DOM routes
 * @type {Router}
 */
const routes = new Router(Routes);

document.addEventListener('DOMContentLoaded', routes.loadEvents());
