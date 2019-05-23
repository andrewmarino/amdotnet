import Macy from 'macy';

export default {
  init() {
    let macyInstance = Macy({
      breakAt: {
        768: {
          columns: 3,
        },
        992: {
          margin: 24,
        },
      },
      columns: 2,
      container: '.macy',
      margin: 16,
      mobileFirst: true,
      trueOrder: true,
    });

    macyInstance.runOnImageLoad(() => {
      macyInstance.recalculate(true);
    }, true);
  },
};
