<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,gnd_id,shorthand,mapped_ids',
        'iconfile' => 'EXT:publisher_db/Resources/Public/Icons/tx_publisherdb_domain_model_mvdbinstrument.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, gnd_id, shorthand, base_level, root, mapped_ids, linked, ensemble, voice, ignore_in_name, super_instrument',
    ],
    'types' => [
        '1' => ['showitem' => 'name, gnd_id, shorthand, base_level, root, mapped_ids, linked, ensemble, voice, ignore_in_name, super_instrument, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_publisherdb_domain_model_mvdbinstrument',
                'foreign_table_where' => 'AND {#tx_publisherdb_domain_model_mvdbinstrument}.{#pid}=###CURRENT_PID### AND {#tx_publisherdb_domain_model_mvdbinstrument}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'gnd_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.gnd_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'shorthand' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.shorthand',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'base_level' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.base_level',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'root' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.root',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'mapped_ids' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.mapped_ids',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'linked' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.linked',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ensemble' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.ensemble',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'voice' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.voice',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'ignore_in_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.ignore_in_name',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'super_instrument' => [
            'exclude' => true,
            'label' => 'LLL:EXT:publisher_db/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrument.super_instrument',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_publisherdb_domain_model_mvdbinstrument',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
    
    ],
];
