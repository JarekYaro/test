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
        'en' => ['Teaser-Cards', 'Creates boxes with image and text displayed side by side'],
        'de' => ['Teaser-Cards', 'Erzeugt nebeneinander dargestellte Boxen mit Bild und Text'],
    ],
    'types' => ['content'],
    'standardFields' => ['cssID'],
    'contentCategory' => 'yatelier',
    'fields' => [
        'theme' => [
            'label' => [
                'en' => ['Theme'],
                'de' => ['Theme', ''],
            ],
            'inputType' => 'select',
            'options' => [
                '',
                'story-teaser',
                'story-short',
            ],
            'reference' => [
                '' => ['en' => 'Default', 'de' => 'Default'],
                'story-teaser' => ['en' => 'Story Teaser', 'de' => 'Story Teaser'],
                'story-short' => ['en' => 'Sort Story', 'de' => 'Sort Story'],
            ],
            'eval' => ['tl_class' => 'w50'],
        ],
        'columns' => [
            'label' => ['Elemente in der Reihe', 'Gibt die Gesamtzahl der Elemente in der Reihe an'],
            'inputType' => 'select',
            'options' => [
                'cols-2' => '2 je Spalte',
                'cols-3' => '3 je Spalte',
                'cols-4' => '4 je Spalte',
                'cols-6' => '6 je Spalte',
            ],
            'eval' => ['tl_class' => 'w50'],
        ],
        'size' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'w50'],
        ],
        'boxes' => [
            'label' => [
                'en' => ['Teaser-Cards', ''],
                'de' => ['Teaser-Cards', ''],
            ],
            'elementLabel' => 'Teaser-Card %s',
            'inputType' => 'list',
            'fields' => [
                'align' => [
                    'label' => ['Anordnung Desktop', ''],
                    'inputType' => 'select',
                    'options' => [
                        't-i' => 'Text | Image',
                        'i-t' => 'Image | Text',
                        't-t' => 'Text on top (center)',
                        't-b' => 'Text on bottom (center)',
                    ],
                    'eval' => ['tl_class' => 'w50 clr'],
                ],
                'alignMobil' => [
                    'label' => ['Anordnung Mobil', ''],
                    'inputType' => 'select',
                    'options' => [
                        'm-i-t' => 'Image | Text',
                        'm-t-i' => 'Text | Image',
                        'm-t-t' => 'Text on top (center)',
                        'm-t-b' => 'Text on bottom (center)',
                    ],
                    'eval' => ['tl_class' => 'w50'],
                ],

                'ratio' => [
                    'label' => ['Größe', 'Gibt die Gesamtzahl der Elemente in der Reihe an'],
                    'inputType' => 'select',
                    'options' => [
                        '' => '1 zu 1 (quadrat)',
                        'r1to2' => '1 zu 2 (hochformat)',
                        'r2to1' => '2 zu 1 (querformat)',
                    ],
                    'eval' => ['tl_class' => 'w50'],
                ],


                'logo' => [
                    'label' => [
                        'en' => ['Logo', ''],
                        'de' => ['Logo', ''],
                    ],
                    'inputType' => 'fileTree',
                    'eval' => [
                        'tl_class' => 'clr ',
                        'fieldType' => 'radio',
                        'filesOnly' => true,
                        'extensions' => Config::get('validImageTypes'),
                    ],
                ],

                'tagline' => [
                    'label' => [
                        'en' => ['Tagline', ''],
                        'de' => ['Tagline', ''],
                    ],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50'],
                ],

                'claim' => [
                    'label' => [
                        'en' => ['Claim', 'Beispiel: Nike - Just do it. (optional)'],
                        'de' => ['Claim', 'Beispiel: Nike - Just do it. (optional)'],
                    ],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50'],
                ],

                'description' => [
                    'label' => [
                        'en' => ['Description', ''],
                        'de' => ['Beschreibung', ''],
                    ],
                    'inputType' => 'textarea',
                    'eval' => ['rte' => 'tinyMCE', 'mandatory' => false, 'tl_class' => ' clr'],
                ],

                'price' => [
                    'label' => [
                        'en' => ['Price', ''],
                        'de' => ['Preis', ''],
                    ],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50'],
                ],

                'linkLabel' => [
                    'label' => [
                        'en' => ['Link-Text', 'optional'],
                        'de' => ['Link-Text', 'optional'],
                    ],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50'],
                ],

                'backgroundColor' => [
                    'label' => ['Hintergrund-Farbe', ''],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50 clr ', 'colorpicker' => true],
                ],

                'accentColor' => [
                    'label' => ['Accent-Farbe', '#ffffff | Primäre: 0D061D'],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50', 'colorpicker' => true],
                ],

                'backgroundImage' => [
                    'label' => [
                        'en' => ['Background-Image', ''],
                        'de' => ['Hintergrund-Bild', ''],
                    ],
                    'inputType' => 'fileTree',
                    'eval' => [
                        'tl_class' => 'clr w50',
                        'fieldType' => 'radio',
                        'filesOnly' => true,
                        'extensions' => Config::get('validImageTypes'),
                    ],
                ],

                'image' => [
                    'label' => [
                        'en' => ['Image', ''],
                        'de' => ['Bild', ''],
                    ],
                    'inputType' => 'fileTree',
                    'eval' => [
                        'tl_class' => 'w50',
                        'fieldType' => 'radio',
                        'filesOnly' => true,
                        'extensions' => Config::get('validImageTypes'),
                    ],
                ],

                'linkType' => [
                    'label' => ['Link-Typ', 'Gibt die Gesamtzahl der Elemente in der Reihe an'],
                    'inputType' => 'select',
                    'options' => [
                        'no-link' => 'kein Link',
                        'link' => 'Link',
                        'modal' => 'Modal',
                    ],
                    'eval' => ['tl_class' => 'w50 clr'],
                ],

                'modalHeadline' => [
                    'dependsOn' => [
                        'field' => 'linkType', // Name des Feldes das geprüft werden soll
                        'value' => 'modal',
                    ],
                    'label' => [
                        'en' => ['Headline', ''],
                        'de' => ['Überschrift', ''],
                    ],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w100 clr'],
                ],

                'modalText' => [
                    'dependsOn' => [
                        'field' => 'linkType', // Name des Feldes das geprüft werden soll
                        'value' => 'modal',
                    ],
                    'label' => [
                        'en' => ['Description', ''],
                        'de' => ['Beschreibung', ''],
                    ],
                    'inputType' => 'textarea',
                    'eval' => ['rte' => 'tinyMCE', 'tl_class' => ''],
                ],

                'linkUrl' => [
                    'dependsOn' => [
                        'field' => 'linkType', // Name des Feldes das geprüft werden soll
                        'value' => 'link',
                    ],
                    'label' => [
                        'en' => ['Link-Adresse', ' '],
                        'de' => ['Link-Adresse', ' '],
                    ],
                    'inputType' => 'url',
                    'eval' => ['tl_class' => 'w50 crl'],
                ],

                'newWindow' => [
                    'dependsOn' => [
                        'field' => 'linkType', // Name des Feldes das geprüft werden soll
                        'value' => 'link',
                    ],
                    'label' => $GLOBALS['TL_LANG']['MSC']['target'],
                    'inputType' => 'checkbox',
                    'eval' => ['tl_class' => 'w50 m12 cbx'],
                ]
            ],
        ],
    ],
];
