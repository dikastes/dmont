<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre',
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
        'searchFields' => 'name,gnd_id,mapped_ids',
        'iconfile' => 'EXT:dmont/Resources/Public/Icons/tx_publisherdb_domain_model_mvdbgenre.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, gnd_id, base_level, root, mapped_ids, linked, chamber_music, super_genre',
    ],
    'types' => [
        '1' => ['showitem' => 'name, gnd_id, base_level, root, mapped_ids, linked, chamber_music, super_genre, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_publisherdb_domain_model_mvdbgenre',
                'foreign_table_where' => 'AND {#tx_publisherdb_domain_model_mvdbgenre}.{#pid}=###CURRENT_PID### AND {#tx_publisherdb_domain_model_mvdbgenre}.{#sys_language_uid} IN (-1,0)',
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
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'gnd_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.gnd_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'base_level' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.base_level',
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
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.root',
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
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.mapped_ids',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'linked' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.linked',
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
        'chamber_music' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.chamber_music',
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
        'super_genre' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbgenre.super_genre',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_publisherdb_domain_model_mvdbgenre',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],
            
        ],
    
    ],
];
