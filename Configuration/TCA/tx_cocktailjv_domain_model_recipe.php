<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe',
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
        'searchFields' => 'name,photos,nb_people,description,difficulty,prep_time,tags,steps,reviews,cocktail,utensils,quantities',
        'iconfile' => 'EXT:cocktail_jv/Resources/Public/Icons/tx_cocktailjv_domain_model_recipe.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, photos, nb_people, description, difficulty, prep_time, tags, steps, reviews, cocktail, utensils, quantities',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, photos, nb_people, description, difficulty, prep_time, tags, steps, reviews, cocktail, utensils, quantities, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
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
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cocktailjv_domain_model_recipe',
                'foreign_table_where' => 'AND tx_cocktailjv_domain_model_recipe.pid=###CURRENT_PID### AND tx_cocktailjv_domain_model_recipe.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'photos' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.photos',
            'config' => 
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'photos',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 5
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),

        ],
        'nb_people' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.nb_people',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required',
            ],
            
        ],
        'difficulty' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.difficulty',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'prep_time' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.prep_time',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'tags' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.tags',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_cocktailjv_domain_model_tag',
                'MM' => 'tx_cocktailjv_recipe_tag_mm',
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
        'steps' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.steps',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cocktailjv_domain_model_step',
                'foreign_field' => 'recipe',
                'foreign_sortby' => 'sorting',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'useSortable' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'reviews' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.reviews',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cocktailjv_domain_model_review',
                'foreign_field' => 'recipe',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'cocktail' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.cocktail',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_cocktailjv_domain_model_cocktail',
                'minitems' => 0,
                'maxitems' => 1,
            ],
        ],
        'utensils' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.utensils',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_cocktailjv_domain_model_utensil',
                'MM' => 'tx_cocktailjv_recipe_utensil_mm',
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
        'quantities' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cocktail_jv/Resources/Private/Language/locallang_db.xlf:tx_cocktailjv_domain_model_recipe.quantities',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cocktailjv_domain_model_quantity',
                'foreign_field' => 'recipe',
                'foreign_sortby' => 'sorting',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'useSortable' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
    ],
];
