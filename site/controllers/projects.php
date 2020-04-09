<?php

return function($site, $pages, $page, $kirby) {
  $shared = $kirby->controller('site' , compact('site', 'pages', 'page', 'kirby'));

  $data = [
    'projects' => page('projects')
      ->children()
      ->filterBy('type', '!=', 'web')
      ->listed()
  ];

  return a::merge($shared, $data);
};
