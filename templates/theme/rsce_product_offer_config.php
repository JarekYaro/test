<?php

return [
    'label' => [
        'en' => ['Product Offer', ''],
        'de' => ['Product Offer', ''],
    ],
    'types' => ['module', 'content'],
    'contentCategory' => 'yatelier',
    'moduleCategory' => 'yatelier',
    'standardFields' => ['cssID'],
    'fields' => [

        [
            'inputType' => 'group',
            'label' => [
                'en' => ['Main Info'],
                'de' => ['Allgemein'],
            ],
        ],
        'productName' => [
            'label' => [
                'en' => ['product name', ''],
                'de' => ['Produktname', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50',
                        'mandatory' => true,],
        ],

        'price' => [
            'label' => [
                'en' => ['price', ''],
                'de' => ['Preis', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],
        'priceDetails' => [
            'label' => [
                'en' => ['price details', 'e.g. inkl. MwSt. or 20 ml / 0.68 oz'],
                'de' => ['Details zum Preis', 'z.B. inkl. MwSt. oder 20 ml / 0.68 oz'],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],

        'uponRequest' => [
            'label' => ['auf Anfrage', ''],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50'],
            'default' => 0,
        ],
        'soldOut' => [
            'label' => ['Sold Out', ''],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50'],
            'default' => 0,
        ],

        'collection' => [
            'label' => [
                'en' => ['collection', ''],
                'de' => ['Kollektion', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],

        'formId' => [
            'label' => [
                'en' => ['Form ID', ''],
                'de' => ['Formular-ID', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],

        [
            'inputType' => 'group',
            'label' => [
                'en' => ['Header'],
                'de' => ['Header'],
            ],
        ],
        'inverted' => [
            'label' => ['Weiße Schrift', ''],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50'],
            'default' => 0,
        ],

        'headerTagline' => [
            'label' => [
                'en' => ['Tagline', ''],
                'de' => ['Tagline', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],

        'headerDescription' => [
            'label' => [
                'en' => ['Description', ''],
                'de' => ['Beschreibung', ''],
            ],
            'inputType' => 'textarea',
            'eval' => ['rte' => 'tinyMCE', 'mandatory' => false, 'tl_class' => ' clr'],
        ],

        'headerBackgroundImage' => [
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
        'headerSize' => [
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

        'buyButtonUrl' => [
            'label' => $GLOBALS['TL_LANG']['MSC']['url'],
            'inputType' => 'url',
            'eval' => ['tl_class' => 'clr w50 wizard'],
        ],
        'buyButtonTarget' => [
            'label' => $GLOBALS['TL_LANG']['MSC']['target'],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50 m12'],
        ],
        'buyButtonLinkTitle' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['linkTitle'],
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
        ],
        'buyButtonTitleText' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['titleText'],
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
        ],
        'buyButtonType' => [
            'label' => ['Button-Type'],
            'inputType' => 'select',
            'options' => [
                'btn--primary' => 'Primary',
                'btn--secondary' => 'Secondary',
                'btn--inverted' => 'Inverted',
            ],
            'eval' => ['tl_class' => 'w50 clr'],
        ],

        'shopifyPlugin' => [
            'label' => ['shopify Plugin', ''],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'w50 m12'],
            'default' => 0,
        ],

        'headerShopifyButton' => [
            'dependsOn' => [
                'field' => 'shopifyPlugin', // Name des Feldes das geprüft werden soll
                'value' => true,
            ],
            'label' => [
                'en' => ['Shopify Button', ''],
                'de' => ['Shopify Button', ''],
            ],
            'inputType' => 'textarea',
            'eval' => ['rte' => 'tinyMCE', 'mandatory' => false, 'tl_class' => ' clr'],
        ],

        [
            'inputType' => 'group',
            'label' => [
                'en' => ['Details'],
                'de' => ['Details'],
            ],
        ],

        'detailsTagline' => [
            'label' => [
                'en' => ['Tagline', ''],
                'de' => ['Tagline', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],

        'detailsHeadline' => [
            'label' => [
                'en' => ['Claim', ''],
                'de' => ['Claim', ''],
            ],
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50'],
        ],

        'detailsDescription' => [
            'label' => [
                'en' => ['Description', ''],
                'de' => ['Beschreibung', ''],
            ],
            'inputType' => 'textarea',
            'eval' => ['rte' => 'tinyMCE', 'mandatory' => false, 'tl_class' => ' clr'],
        ],

        'detailsImage' => [
            'label' => [
                'en' => ['Image', ''],
                'de' => ['Bild', ''],
            ],
            'inputType' => 'fileTree',
            'eval' => [
                'tl_class' => 'clr w50',
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => Config::get('validImageTypes'),
            ],
        ],

        'detailsSize' => [
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
