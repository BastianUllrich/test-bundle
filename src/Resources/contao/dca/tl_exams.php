<?php

/*
 * This file is part of ExamsBundle.
 *
 * (c) Bastian Ullrich
 *
 * @license LGPL-3.0-or-later
 */

$GLOBALS['TL_DCA']['tl_exams'] = array
(

    // Config
    'config' => array
    (
        'dataContainer' => 'Table',
        'sql' => array
        (
            'keys' => array
            (
                'exam_id' => 'primary'
            )
        )
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode' => 0,
            'fields' => array('exam_title')
        ),

        'label' => array
        (
            'fields' => array('exam_title'),
            'format' => '%s'
        ),

        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),

        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_news']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),

            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_news']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),

            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_news']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),

            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_news']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )

        )
    ),

    // Palettes
    'palettes' => array
    (
        'default' => '{examdetails_legend},exam_title,department,date,begin,regular_duration,allowed_auxiliaries,remarks;'
    ),

    // Fields
    'fields' => array
    (
        'exam_id' => array
        (
            'sql' => "int(11) unsigned NOT NULL auto_increment"
        ),

        'exam_title' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_exams']['exam_title'],
            'inputType' => 'text',
            'search' => 'true',
            'sorting' => 'true',
            'flag' => '1',
            'eval' => array('feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'maxlength'=>255),
            'sql' => "varchar(255) NOT NULL default ''"
        ),

        'exam_date' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_exams']['date'],
            'inputType' => 'text',
            'eval' => array('feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'rgxp'=>'date', 'datepicker'=>true),
            'sql' => "varchar(10) NOT NULL default ''"
        ),

        'exam_begin' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_exams']['begin'],
            'inputType' => 'text',
            'eval' => array('feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'rgxp'=>'time', 'maxlength'=>10),
            'sql' => "varchar(10) NOT NULL default ''"
        ),

        'exam_duration' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_exams']['regular_duration'],
            'inputType' => 'text',
            'eval' => array('feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'rgxp'=>'natural', 'maxlength'=>3),
            'sql' => "int(3) NOT NULL default ''"
        ),

        'exam_auxiliaries' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_exams']['allowed_auxiliaries'],
            'inputType' => 'text',
            'eval' => array('feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'maxlength'=>255),
            'sql' => "varchar(255) NOT NULL default ''"
        ),

        'exam_remarks' => array
        (
            'label' => &$GLOBALS['TL_LANG']['tl_exams']['remarks'],
            'inputType' => 'text',
            'eval' => array('feEditable'=>'true', 'feViewable'=>'true', 'maxlength'=>255),
            'sql' => "varchar(255) NOT NULL default ''"
        )

    )
);
