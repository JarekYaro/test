<?php

return [
    'label' => [
        'en' => ['Highlight Card', ''],
        'de' => ['Highlight Card', ''],
    ],
    'types' => ['module', 'content'],
    'contentCategory' => 'yatelier',
    'moduleCategory' => 'yatelier',
    'standardFields' => ['cssID'],
    'fields' => [
        'size' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['size'],
            'inputType' => 'imageSize',
            'reference' => $GLOBALS['TL_LANG']['MSC'],
            'eval' => [
                'rgxp' => 'natural',
                'includeBlankOption' => true,
                'nospace' => true,
                'helpwizard' => true,
                'tl_class' => 'clr w50',
            ],
            'options' => Contao\System::getContainer()->get('contao.image.image_sizes')->getAllOptions(),
        ],

        'singleSRC' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['singleSRC'],
            'inputType' => 'fileTree',
            'eval' => [
                'filesOnly' => true,
                'fieldType' => 'radio',
                'mandatory' => false,
                'tl_class' => 'w50 clr',
                'extensions' => Contao\Config::get('validImageTypes'),
            ],
        ],
        'headline' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['headline'],
            'standardFields' => ['headline'],
            'inputType' => 'text',
            'eval' => [
                'tl_class' => 'w50 clr',
                'mandatory' => true
            ]
        ],
        'price' => [
            'label' => [
                'en' => ['Price', ''],
                'de' => ['Preis', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],
        'myColor' => [
            'label' => ['Farbauswähl', 'Standardmäßig grau von yatelier'],
            'inputType' => 'text',
            'eval' => [
                'maxlength' => 6,
                'multiple' => false,
                'size' => 2,
                'colorpicker' => true,
                'isHexColor' => true,
                'decodeEntities' => true,
                'tl_class' => 'w50 wizard'
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
    'grid_legend' => [
        'label' => ['Grid-Einstellungen', 'Für alle Elemente'],
        'inputType' => 'group',
    ],
    'grid_columns' => [
        'label' => &$GLOBALS['TL_LANG']['tl_content']['grid_columns'],
        'inputType' => 'select',
        'options_callback' => ['GridClass', 'getGridCols'],
        'eval' => [
            'mandatory' => false,
            'multiple' => true,
            'size' => 10,
            'tl_class' => 'clr w50 w50h autoheight',
            'chosen' => true,
        ],
        'default' => ['col-md-6'],
    ],
    'grid_options' => [
        'label' => &$GLOBALS['TL_LANG']['tl_content']['grid_options'],
        'inputType' => 'select',
        'options_callback' => ['GridClass', 'getGridOptions'],
        'eval' => [
            'mandatory' => false,
            'multiple' => true,
            'size' => 10,
            'tl_class' => 'w50 w50h autoheight',
            'chosen' => true,
        ],
    ],
];
