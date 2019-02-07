<?php

return function($site, $pages, $page) {
  $data = [];
  $data['projects'] = page('projects')
    ->children()
    ->visible();

  if ($type = param('type')) {
    $data['projects'] = $data['projects']->filterBy('type', $type, ',');
  }

  return $data;
};
