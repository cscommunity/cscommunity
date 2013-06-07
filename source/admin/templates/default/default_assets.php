<?php

/**
* @copyright	Copyright (C) 2009 - 2012 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package 		CSCOMMUNITY
* @subpackage	Back-end
* @contact		team@readybytes.in
*/

// no direct access
if(!defined( '_JEXEC' )){
	die( 'Restricted access' );
}

Rb_HelperTemplate::loadSetupEnv();
Rb_HelperTemplate::loadSetupScripts();

// load bootsrap css
Rb_Html::_('bootstrap.loadcss');

Rb_Html::script(CSCOMMUNITY_PATH_CORE_MEDIA.'/js/cscommunity.js');
Rb_Html::stylesheet(CSCOMMUNITY_PATH_CORE_MEDIA.'/css/cscommunity.css');

Rb_Html::script(dirname(__FILE__).'/_media/js/admin.js');
Rb_Html::stylesheet(dirname(__FILE__).'/_media/css/admin.css');
