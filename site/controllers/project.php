<?php

return function($site, $pages, $page, $kirby) {
  $shared = $kirby->controller('site' , compact('site', 'pages', 'page', 'kirby'));

  $data = [
    'photos' => $page->images()->sortBy('sort', 'asc'),
  ];

  return a::merge($shared, $data);
};
