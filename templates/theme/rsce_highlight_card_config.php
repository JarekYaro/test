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
        'align' => [
            'label' => ['Anordnung Desktop', ''],
            'inputType' => 'select',
            'options' => [
                't-t' => 'Text on top (center)',
                't-b' => 'Text on bottom (center)',
            ],
            'eval' => ['tl_class' => 'w50 clr'],
        ],
        'inverted' => [
            'label' => ['Weiße Schrift', ''],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50 m12'],
            'default' => 0,
        ],
        'icon' => [
            'label' => [
                'en' => ['Icon', ''],
                'de' => ['Icon', ''],
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

    ],

];
