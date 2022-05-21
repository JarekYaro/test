<?php

return [
    'label' => [
        'en' => ['Tiny Link', ''],
        'de' => ['Tiny Link', ''],
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
        'boxes' => [
            'label' => ['Links', ''],
            'elementLabel' => '%s. Link',
            'inputType' => 'list',
            'minItems' => 1,
            'fields' => [
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
                'description' => [
                    'label' => ['Beschreibung', 'Liste mit Punkten'],
                    'inputType'             => 'listWizard',
                    'eval'                  => ['allowHtml'=>true, 'tl_class'=>'clr'],
                ],
                'myColor' => [
                    'label'                 => ['Farbauswähl', 'Standardmäßig bitte rot vot von yatelutions verwenden: E7362B'],
                    'inputType'             => 'text',
                    'eval'                  => ['maxlength'=>6, 'multiple'=>false, 'size'=>2, 'colorpicker'=>true, 'isHexColor'=>true, 'decodeEntities'=>true, 'tl_class'=>'w50 wizard', 'placeholder' => 'E7362B'],
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
                'titleText' => [
                    'label' => $GLOBALS['TL_LANG']['tl_content']['titleText'],
                    'inputType' => 'text',
                    'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
                ],
                'linkText' => [
                    'label' => ['Bezeichnung der Verlinkung', 'Sichtbar auf der Homepage'],
                    'inputType' => 'text',
                    'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
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
    ],
];
