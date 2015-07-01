<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package   aggregator 
 * @author    Johannes Terhürne
 * @license   MIT License
 * @copyright Johannes Terhürne 2014 
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['aggregator'] = '{type_legend},type,headline;{aggregatorContent_legend},channels;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['channels'] = array(
	'label'     		=> &$GLOBALS['TL_LANG']['tl_aggregator']['channels'],
	'inputType' 		=> 'checkbox',
	'options_callback' 	=> array('AggregatorEngine', 'getAllChannels'),
	'eval'				=> array(
								'mandatory'	=>	true,
								'multiple' 	=> 	true,
							),
	'sql'				=> "blob NULL"
);