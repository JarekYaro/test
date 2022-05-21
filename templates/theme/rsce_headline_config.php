<?php

return [
    'label' => [
        'en' => ['Custom Headline', 'Create a pageheadline with separator line'],
        'de' => ['Custom Headline', 'Erzeugt ein Pageheadline mit Trennline'],
    ],
    'types' => ['content', 'module'],
    'contentCategory' => 'yatelier',
    'moduleCategory' => 'yatelier',
    'standardFields' => ['cssID'],
    'fields' => [
        'topline' => [
            'label' => ['Topline', 'Text wird obendrauf großgeschrieben'],
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
    ],
];
