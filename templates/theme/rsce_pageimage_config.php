<?php

return [
    'label' => [
        'en' => ['Pageheadline', 'Create a pageheadline with separator line'],
        'de' => ['Pageheadline', 'Erzeugt ein Pageheadline mit Trennline'],
    ],
    'types' => ['content', 'module'],
    'contentCategory' => 'yatelier',
    'moduleCategory' => 'yatelier',
    'standardFields' => ['cssID'],
    'fields' => [
        'topline' => [
            'label' => ['Topline', 'Text wird senkrecht mit Großbuchstaben geschrieben'],
            'standardFields' => ['headline'],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50']
        ],
        'headline' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['headline'],
            'standardFields' => ['headline'],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50 clr']
        ],
        'description' => [
            'label' => ['Beschreibung', 'Klein Teasertext darunter'],
            'standardFields' => ['headline'],
            'inputType' => 'textarea',
            'eval' => ['rte' => 'tinyMCE', 'tl_class' => 'clr'],
        ],
        'color' => [
            'label' => ['Farbe'],
            'inputType' => 'select',
            'options' => [
                'green' => 'Grün',
                'lilac' => 'Lila',
                'pink' => 'Rosa',
                'yellow' => 'Gelb',
                'orange-light' => 'Orange'],
            'eval' => ['tl_class' => 'w50 clr'],
        ],
        'singleSRC' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['singleSRC'],
            'inputType' => 'fileTree',
            'eval' => [
                'filesOnly' => true,
                'fieldType' => 'radio',
                'mandatory' => true,
                'tl_class' => 'w50 clr',
                'extensions' => Contao\Config::get('validImageTypes'),
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
    ],
];
