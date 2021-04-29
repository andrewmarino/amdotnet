import Tobii from '@midzer/tobii';
import icons from '../icons/icons';

export default {
  finalize() {
    const tobii = new Tobii({
      captionAttribute: 'data-caption',
      closeText: icons.tobi_close,
      docClose: false,
      draggable: false,
      nav: true,
      navText: [icons.tobi_prev, icons.tobi_next],
      zoom: false,
    });
  }
}
