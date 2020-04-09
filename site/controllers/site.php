<?php

return function ($page) {
  $body_class = [];
  $body_class[] = $page->template();

  $allowed = ['projects', 'project'];

  if (in_array($page->template(), $allowed)) {
    $body_class[] = 'macy-layout';
  }

  return compact('body_class');
};
