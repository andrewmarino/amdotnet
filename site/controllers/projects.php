<?php

return function($site, $pages, $page) {
  $data = [];
  $data['projects'] = page('projects')
    ->children()
    ->listed();

  if ($type = param('type')) {
    $data['projects'] = $data['projects']->filterBy('type', $type, ',');
  }

  return $data;
};
