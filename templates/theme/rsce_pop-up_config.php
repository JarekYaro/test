<?php

declare(strict_types=1);

use Contao\Config;
use Contao\System;

return [
    'label' => ['Kontakt-PopUp', ''],
    'types' => ['content', 'module'],
    'contentCategory' => 'yatelier',
    'moduleCategory' => 'yatelier',
    'standardFields' => ['cssID'],
    'fields' => [
        'size' => [
            'label' => ['Bildbreite und Bildhöhe', ''],
            'inputType' => 'imageSize',
            'options' => System::getContainer()->get('contao.image.image_sizes')->getAllOptions(),
            'reference' => &$GLOBALS['TL_LANG']['MSC'],
            'eval' => [
                'rgxp' => 'digit',
                'includeBlankOption' => true,
            ],
        ],
        'image' => [
            'label' => ['Profilbild', ''],
            'inputType' => 'fileTree',
            'eval' => [
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => Config::get('validImageTypes'),
            ],
        ],
        'headline' => [
            'label' => ['Überschrift', 'Hier können Sie dem Inhaltselement eine Überschrift hinzufügen.'],
            'inputType' => 'text',
        ],
        'linkUrl' => [
            'label' => [
                'en' => ['Button URL', 'Examples: {{link_url::pagealias}} (Alias, ID or other Insert tag), http://example.com'],
                'de' => ['Button-URL', 'Beispiele: {{link_url::seitenalias}} (Alias, ID oder anderer Inserttag), http://example.com'],
            ],
            'inputType' => 'url',
            'eval' => ['tl_class' => 'w50'],
        ],
    ],
];
