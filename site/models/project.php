<?php

class ProjectPage extends Page {
  /**
   * Return a provided cover image with fallback.
   */
  public function coverImage() {
    if (!$this->images()) {
      return;
    }

    return $this->content()->get('cover')->toFile() ?? $this->images()->sortBy('sort', 'asc')->first();
  }
}
