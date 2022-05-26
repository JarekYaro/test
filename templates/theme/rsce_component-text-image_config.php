<?php

declare(strict_types=1);

/*
 * This file is part of Eikona Media.
 *
 * (c) eikona-media.de
 *
 * @license proprietary
 */

use Contao\Config;

return [
    'label' => [
        'Text-Image Component',
        '',
    ],
    'types' => ['module', 'content'],
    'contentCategory' => 'yatelier',
    'moduleCategory' => 'yatelier',
    'standardFields' => ['cssID'],
    'fields' => [
        'layout' => [
            'label' => ['Layout'],
            'inputType' => 'select',
            'options' => [
                'default' => 'Default',
                'stage' => 'Stage',
            ],
            'eval' => ['tl_class' => 'w50 clr'],
        ],

        'align' => [
            'label' => ['Anordnung Desktop', ''],
            'inputType' => 'select',
            'options' => [
                't-i' => 'Text | Image',
                'i-t' => 'Image | Text',
            ],
            'eval' => ['tl_class' => 'w50 clr'],
        ],

        'alignMobil' => [
            'label' => ['Anordnung Mobil', ''],
            'inputType' => 'select',
            'options' => [
                'm-i-t' => 'Image | Text',
                'm-t-i' => 'Text | Image',
            ],
            'eval' => ['tl_class' => 'w50'],
        ],

        'paddingTop' => [
            'label' => ['Abstand oben'],
            'inputType' => 'select',
            'options' => [
                'p-t-1' => 'S',
                'p-t-2' => 'M',
                'p-t-3' => 'L',
                'p-t-0' => 'none'
            ],
            'eval' => ['tl_class' => 'w50 clr'],
        ],

        'paddingBottom' => [
            'label' => ['Abstand unten'],
            'inputType' => 'select',
            'options' => [
                'p-b-1' => 'S',
                'p-b-2' => 'M',
                'p-b-3' => 'L',
                'p-b-0' => 'none'
            ],
            'eval' => ['tl_class' => 'w50'],
        ],

        'tagline' => [
            'label' => ['Tagline', ''],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'clr'],
        ],

        'headline' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['headline'],
            'standardFields' => ['headline'],
            'inputType' => 'text',
            'eval' => [
                'tl_class' => 'clr',
                'allowHtml' => true,
            ],
        ],

        'hTag' => [
            'label' => ['h-tag'],
            'inputType' => 'select',
            'options' => [
                'h2' => 'h2',
                'h3' => 'h3',
                'h4' => 'h4',
            ],
            'eval' => ['tl_class' => 'w50 clr'],
        ],

        'hSize' => [
            'label' => ['h-size'],
            'inputType' => 'select',
            'options' => [
                '' => 'default',
                'heading--1' => '.h1',
                'heading--2' => '.h2',
                'heading--3' => '.h3',
                'heading--4' => '.h4',
            ],
            'eval' => ['tl_class' => 'w50'],
        ],

        'text' => [
            'label' => ['Text', ''],
            'inputType' => 'textarea',
            'eval' => [
                'rte' => 'tinyMCE',
                'tl_class' => 'clr',
                'mandatory' => 'true',
                ],
        ],

        'image' => [
            'label' => ['Image', ''],
            'inputType' => 'fileTree',
            'eval' => [
                'tl_class' => 'clr',
                'fieldType' => 'radio',
                'mandatory' => 'true',
                'filesOnly' => true,
                'extensions' => Config::get('validImageTypes'),
            ],
        ],



        'links' => [
            'label' => [
                'en' => ['Button Links', ''],
                'de' => ['Button Links', ''],
            ],
            'elementLabel' => 'Button %s',
            'inputType' => 'list',
            'maxItems' => 2,
            'fields' => [
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
                ],
                'buttonType' => [
                    'label' => ['Button-Type'],
                    'inputType' => 'select',
                    'options' => [
                        'btn--primary' => 'Primary',
                        'btn--secondary' => 'Secondary',
                        'btn--inverted' => 'Inverted',
//                        '-dark' => 'Dark',
//                        '-light' => 'Light',
//                        '-link' => 'Link',
                    ],
                    'eval' => ['tl_class' => 'w50 clr'],
                ],
                'ArrowIcon' => [
                    'label' => ['Button mit Pfeil'],
                    'inputType' => 'checkbox',
                    'eval' => ['tl_class' => 'w50 m12'],
                ],
            ],
        ],
    ],
];
