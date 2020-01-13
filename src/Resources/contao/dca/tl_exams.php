<?php

/*
 * This file is part of ExamsBundle.
 *
 * (c) Bastian Ullrich
 *
 * @license LGPL-3.0-or-later
 */

//Palette definieren
$GLOBALS['TL_DCA']['tl_exams']['palettes'] =
    '{examdetails_legend},exam_title,department,date,begin,regular_duration,allowed_auxiliaries,remarks;{lecturer_legend},lecturer_title,prename,lastname,university_mail,mobile;';

//Tabellenkonfiguration definieren

$GLOBALS['TL_DCA']['tl_exams']['config'] = [
    'datacontainer' => 'Table',
    'sql' => [
        'keys' => [
            'exam_id' => 'primary',
        ]
    ]
];

//DCAs definieren

$GLOBALS['TL_DCA']['tl_exams']['fields']['exam_title'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_exams']['exam_title'],
        'explanation' => &$GLOBALS['TL_LANG']['tl_exams']['exam_title_explanation'],
        'inputType' => 'text',
        'search' => 'true',
        'sorting' => 'true',
        'flag' => '1',
        'eval' => ['feGroup'=>'study', 'feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'maxlength'=>255],
        'sql' => "varchar(255) NOT NULL default ''"
    );
$GLOBALS['TL_DCA']['tl_exams']['fields']['exam_date'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_exams']['date'],
        'inputType' => 'text',
        'eval' => ['feGroup'=>'study', 'feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'rgxp'=>'date', 'datepicker'=>true],
        'sql' => "varchar(10) NOT NULL default ''"
    );
$GLOBALS['TL_DCA']['tl_exams']['fields']['exam_begin'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_exams']['begin'],
        'inputType' => 'text',
        'eval' => ['feGroup'=>'study', 'feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'rgxp'=>'time', 'maxlength'=>10],
        'sql' => "varchar(10) NOT NULL default ''"
    );
$GLOBALS['TL_DCA']['tl_exams']['fields']['exam_duration'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_exams']['regular_duration'],
        'inputType' => 'text',
        'eval' => ['feGroup'=>'study', 'feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'rgxp'=>'natural', 'maxlength'=>3],
        'sql' => "int(3) NOT NULL default ''"
    );
$GLOBALS['TL_DCA']['tl_exams']['fields']['exam_auxiliaries'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_exams']['allowed_auxiliaries'],
        'inputType' => 'text',
        'eval' => ['feGroup'=>'study', 'feEditable'=>'true', 'feViewable'=>'true', 'mandatory'=>'true', 'maxlength'=>255],
        'sql' => "varchar(255) NOT NULL default ''"
    );
$GLOBALS['TL_DCA']['tl_exams']['fields']['exam_remarks'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_exams']['remarks'],
        'inputType' => 'text',
        'eval' => ['feGroup'=>'study', 'feEditable'=>'true', 'feViewable'=>'true', 'maxlength'=>255],
        'sql' => "varchar(255) NOT NULL default ''"
    );
