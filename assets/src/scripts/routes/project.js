import Tobi from 'rqrauhvmra__tobi';
import icons from '../icons/icons';

export default {
  finalize() {
    new Tobi({
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
