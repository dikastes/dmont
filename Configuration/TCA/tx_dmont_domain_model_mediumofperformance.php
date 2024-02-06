<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrumentation',
        'label' => 'has_orchestra',
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
        'searchFields' => 'instrumental_soloists,vocal_soloists',
        'iconfile' => 'EXT:dmont/Resources/Public/Icons/tx_publisherdb_domain_model_mvdbinstrumentation.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, has_orchestra, has_choir, instrumental_soloists, vocal_soloists, instrument',
    ],
    'types' => [
        '1' => ['showitem' => 'has_orchestra, has_choir, instrumental_soloists, vocal_soloists, instrument, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_publisherdb_domain_model_mvdbinstrumentation',
                'foreign_table_where' => 'AND {#tx_publisherdb_domain_model_mvdbinstrumentation}.{#pid}=###CURRENT_PID### AND {#tx_publisherdb_domain_model_mvdbinstrumentation}.{#sys_language_uid} IN (-1,0)',
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

        'has_orchestra' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrumentation.has_orchestra',
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
        'has_choir' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrumentation.has_choir',
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
        'instrumental_soloists' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrumentation.instrumental_soloists',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'vocal_soloists' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrumentation.vocal_soloists',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'instrument' => [
            'exclude' => true,
            'label' => 'LLL:EXT:dmont/Resources/Private/Language/locallang_db.xlf:tx_publisherdb_domain_model_mvdbinstrumentation.instrument',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_publisherdb_domain_model_mvdbinstrument',
                'MM' => 'tx_publisherdb_mvdbinstrumentation_mvdbinstrument_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
    
    ],
];
