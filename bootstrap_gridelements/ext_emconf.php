<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap Gridelements',
    'description' => 'Build grids easy with Bootstrap 4 & Gridelements.',
    'category' => 'plugin',
    'author' => 'Julian Seidl',
    'author_email' => 'support@koerbler.com',
    'author_company' => 'Koerbler. - Digital Erfolgreich!',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'gridelements' => '8.0.0-9.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
