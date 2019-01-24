<?php

/**
 * Extension Manager/Repository config file for ext "nichols_umc".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Nichols UMC',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'TheBigPicture\\NicholsUmc\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Brett Sanford',
    'author_email' => 'Brett@tbp.tv',
    'author_company' => 'The Big Picture',
    'version' => '1.0.0',
];
