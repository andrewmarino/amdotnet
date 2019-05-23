import FontFaceObserver from 'fontfaceobserver';

export default {
  init() {
    document.documentElement.className = document.documentElement.className.replace(
      /\bno-js\b/,
      'js'
    );

    if (
      !document.cookie
        .split(';')
        .filter(item => item.includes('fonts-loaded=true')).length
    ) {
      let observer = new FontFaceObserver('source_serif_prosemibold');

      observer.load().then(() => {
        window.document.documentElement.className += ' fonts-loaded';
        document.cookie = 'fonts-loaded=true';
      });
    }
  },
  finalize() {
    document.addEventListener('lazyloaded', e => {
      e.target.parentNode.classList.remove('loading');
    });
  },
};
