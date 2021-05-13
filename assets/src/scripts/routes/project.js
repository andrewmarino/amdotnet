import Parvus from 'parvus';

export default {
  finalize() {
    const prvs = new Parvus({
      docClose: false,
      gallerySelector: '.macy',
      swipeClose: false,
    });
  }
}
