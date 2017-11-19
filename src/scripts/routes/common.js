import FontFaceObserver from 'fontfaceobserver';

export default {
  init() {},
  finalize() {
    var barlow = new FontFaceObserver('Barlow');

    barlow.load().then(function() {
      document.documentElement.classList.add('fonts-loaded');
    });
  }
};
