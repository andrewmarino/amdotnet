<?php

return function($site, $pages, $page, $kirby) {
  $shared = $kirby->controller('site' , compact('site', 'pages', 'page', 'kirby'));

  $data = [];
  $data['notes'] = page('notes')
    ->children()
    ->listed()
    ->flip();

  return a::merge($shared, $data);
};
