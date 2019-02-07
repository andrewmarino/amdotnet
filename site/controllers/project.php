<?php

return function($site, $pages, $page) {
  $data = [];
  $data['photos'] = $page->images()
    ->sortBy('sort', 'asc');

  return $data;
};
