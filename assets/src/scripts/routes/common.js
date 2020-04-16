import FontFaceObserver from 'fontfaceobserver';
import LazyLoad from 'vanilla-lazyload';

export default {
  init() {
    document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');

    let lazyLoadInstance = new LazyLoad({
      elements_selector: '.lazy',
    });
  },
  finalize() {
    let fontFamilies = {
      'Chivo': [
        {
          weight: 400,
        },
        {
          weight: 400,
          style: 'italic',
        },
        {
          weight: 700
        },
      ],
    }
    let fontObservers = [];

    Object.keys(fontFamilies).forEach((family) => {
      fontObservers.push(fontFamilies[family].map((config) => {
        return new FontFaceObserver(family, config);
      }));
    });

    Promise.all(fontObservers)
      .then(function() {
        document.body.classList.add('fonts-loaded');
      }, function() {
        console.log('Fonts not available.');
      });
  },
};
