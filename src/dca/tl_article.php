<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ArticleAttribute
 * @author    EDsolution.si
 * @license   LGPL
 * @copyright 2015
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

/**
 * Modify palettes
*/
PaletteManipulator::create()
  ->addField('custom_attribute', 'customTpl')
  ->applyToPalette('default', 'tl_article')
;

// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['custom_attribute'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['custom_attribute'],
    'exclude'   => true,
    'filter'    => true,
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 255,
        'tl_class' => 'w50',
        'allowHtml' => true,
        'preserveTags' => true,
    ],
    'sql' => "varchar(255) NOT NULL default ''",
);