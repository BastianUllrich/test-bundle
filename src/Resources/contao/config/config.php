<?php
// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'Baul\TestBundle\Module\HelloWorldModule';

//Backend modules
$GLOBALS['BE_MOD']['examia']['meinModul'] = [
    'tables' => ['tl_meinModul'],
    'callback' => 'Baul\TestBundle\MyClass'
];
