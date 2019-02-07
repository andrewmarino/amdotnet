import Macy from 'macy';
import Tobi from 'rqrauhvmra__tobi';
import icons from '../icons/icons';

export default {
  init() {
    let macyInstance = Macy({
      breakAt: {
        768: {
          columns: 3
        },
        992: {
          margin: 24
        }
      },
      columns: 2,
      container: '.macy',
      margin: 16,
      mobileFirst: true,
      trueOrder: true
    });

    macyInstance.runOnImageLoad(() => {
      macyInstance.recalculate(true);
    }, true);

    let tobiInstance = new Tobi({
      captionAttribute: 'data-caption',
      closeText: icons.tobi_close,
      docClose: false,
      draggable: true,
      navText: [icons.tobi_prev, icons.tobi_next],
      zoom: false
    });
  }
};
