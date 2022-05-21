<?php

declare(strict_types=1);

/*
 * This file is part of Jarek Pietrasina.
 *
 * (c) Jarek Pietrasina.
 *
 * @license proprietary
 */

use Contao\Config;

return [
    'label' => [
        'Benachrichtigungsleiste',
        'Banner - notification bar',
    ],
    'types' => ['module'],
    'moduleCategory' => 'yatelier',
    'standardFields' => ['cssID'],
    'fields' => [
        'image' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['singleSRC'],
            'inputType' => 'fileTree',
            'eval' => [
                'filesOnly' => true,
                'fieldType' => 'radio',
                'tl_class' => 'w50',
                'extensions' => Config::get('validImageTypes'),
            ],
        ],
        'color' => [
            'label' => [
                'en' => ['Color', 'CDE7FF Standard'],
                'de' => ['Farbe', 'CDE7FF Standard'],
            ],
            'inputType' => 'text',
            'eval' => [
                'maxlength' => 6,
                'multiple' => false,
                'size' => 1,
                'colorpicker' => true,
                'mandatory' => true,
                'isHexColor' => true,
                'decodeEntities' => true,
                'tl_class' => 'w50 wizard',
            ],
            'sql' => "varchar(64) NOT NULL default ''",
        ],
        'text' => [
            'label' => ['Banner Text', ''],
            'inputType' => 'textarea',
            'eval' => [
                'rte' => 'tinyMCE',
                'tl_class' => 'clr',
                'mandatory' => true,
                'maxlength' => 255,
            ],
        ],
        'inverted' => [
            'label' => ['Weiße Schrift', ''],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50 m12'],
            'default' => 0,
        ],
        'url' => [
            'label' => $GLOBALS['TL_LANG']['MSC']['url'],
            'inputType' => 'url',
            'eval' => ['tl_class' => 'clr w50 wizard'],
        ],
        'target' => [
            'label' => $GLOBALS['TL_LANG']['MSC']['target'],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50 m12'],
        ],
        'linkTitle' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['linkTitle'],
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
        ],
        'titleText' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['titleText'],
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
        ]
    ],
];
