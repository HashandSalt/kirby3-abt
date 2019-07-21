<?php

require_once __DIR__ . '/functions/index.php';

Kirby::plugin('hashandsalt/abt', [

    'routes' => [
      [
          'pattern' => '(:any)',
          'action'  => function ($id) {
          if (visitorgroup('a') === true) {
              return page($id);
            } else {
              if ($page = page($id)->find('b')) {
                  return page($page->id());
              } else {
                  return page($id);
                }
            }
          }
        ]
    ],

]);
