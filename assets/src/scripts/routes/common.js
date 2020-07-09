import LazyLoad from 'vanilla-lazyload';

export default {
  init() {
    document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');
  },
  finalize() {
    let lazyLoad = new LazyLoad({
      elements_selector: '.lazy',
      threshold: 10,
      callback_loaded: el => el.parentNode.classList.remove('loading'),
    });
  },
};
