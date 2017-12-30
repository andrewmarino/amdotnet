import Cookies from 'js-cookie';

export default {
  finalize() {
    // Theme switchin' for night mode.
    var themer = document.getElementById('themer'),
      body = document.querySelector('body');

    themer.checked = Cookies.getJSON('theme-inverted');

    themer.addEventListener('change', () => {
      body.classList.toggle('inverted');
      Cookies.set('theme-inverted', JSON.stringify(themer.checked));
    });
  }
};
