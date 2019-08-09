<?php

require_once __DIR__ . '/functions/index.php';

Kirby::plugin('hashandsalt/abt', [
    'routes' => [
        [
            'pattern' => '(:any)',
            'action' => function ($id) {
                if (visitorgroup('a') !== true) {
                    if ($pageB = page($id)->find('b')) {
                        return $pageB;
                    }
                }
                $this->next();
            }
        ]
    ],
]);
