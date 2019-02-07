<?php

return function($site, $pages, $page) {
  $data = [];
  $data['notes'] = page('notes')
    ->children()
    ->visible()
    ->flip();

  return $data;
};
