<?php

/*
 * HiDev config for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-hisite
 * @package   hidev-hisite
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'hisite' => [
                'class' => 'hidev\hisite\controllers\HiSiteController',
            ],
            'include' => [
                '@hidev/hisite/config.yml',
            ],
            'views' => [
                '@hidev/hisite/views',
            ],
        ],
    ],
];