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
use Contao\System;

return [
    'label' => [
        'Hero',
        '',
    ],
    'types' => ['content'],
    'standardFields' => ['cssID'],
    'contentCategory' => 'yatelier',
    'fields' => [
        'singleSRC' => [
            'label' => $GLOBALS['TL_LANG']['tl_content']['singleSRC'],
            'inputType' => 'fileTree',
            'eval' => [
                'filesOnly' => true,
                'fieldType' => 'radio',
                'tl_class' => 'w50',
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
            'options' => System::getContainer()->get('contao.image.image_sizes')->getAllOptions(),
        ],
        'topline' => [
            'label' => ['Topline', 'Optional'],
            'inputType' => 'text',
            'eval' => ['maxlength' => 255, 'tl_class' => 'w50 clr'],
        ],
        'headline' => [
            'label' => ['Überschrift'],
            'inputType' => 'text',
            'eval' => [
                'maxlength' => 255,
                'tl_class' => 'clr w50',
                'mandatory' => false,
                'allowHtml' => true,
            ],
        ],
        'text' => [
            'label' => ['Text', ''],
            'inputType' => 'textarea',
            'eval' => ['rte' => 'tinyMCE', 'mandatory' => false, 'tl_class' => ' clr'],
        ],
        'grid_legend' => [
            'label' => ['Grid-Einstellungen'],
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
