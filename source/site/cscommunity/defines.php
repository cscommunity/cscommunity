<?php

/**
* @copyright	Copyright (C) 2009 - 2012 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package 		CSCOMMUNITY
* @contact		team@readybytes.in
*/

// no direct access
if(!defined( '_JEXEC' )){
	die( 'Restricted access' );
}

// If file is already included
if(defined('CSCOMMUNITY_SITE_DEFINED')){
	return;
}

//mark core loaded
define('CSCOMMUNITY_SITE_DEFINED', true);
define('CSCOMMUNITY_COMPONENT_NAME','cscommunity');


// define versions
define('CSCOMMUNITY_VERSION', '0.0.1');
define('CSCOMMUNITY_REVISION','v0.9.0-4-ga3793b7');

//shared paths
define('CSCOMMUNITY_PATH_CORE',				JPATH_SITE.'/components/com_cscommunity/cscommunity');
define('CSCOMMUNITY_PATH_CORE_MEDIA',			JPATH_ROOT.'/media/com_cscommunity');
define('CSCOMMUNITY_PATH_CORE_FORM',			CSCOMMUNITY_PATH_CORE.'/form');

// front-end
define('CSCOMMUNITY_PATH_SITE', 				JPATH_SITE.'/components/com_cscommunity');
define('CSCOMMUNITY_PATH_SITE_CONTROLLER',	CSCOMMUNITY_PATH_SITE.'/controllers');
define('CSCOMMUNITY_PATH_SITE_VIEW',			CSCOMMUNITY_PATH_SITE.'/views');
define('CSCOMMUNITY_PATH_SITE_TEMPLATE',		CSCOMMUNITY_PATH_SITE.'/templates');

// back-end
define('CSCOMMUNITY_PATH_ADMIN', 				JPATH_ADMINISTRATOR.'/components/com_cscommunity');
define('CSCOMMUNITY_PATH_ADMIN_CONTROLLER',	CSCOMMUNITY_PATH_ADMIN.'/controllers');
define('CSCOMMUNITY_PATH_ADMIN_VIEW',			CSCOMMUNITY_PATH_ADMIN.'/views');
define('CSCOMMUNITY_PATH_ADMIN_TEMPLATE',		CSCOMMUNITY_PATH_ADMIN.'/templates');

// Html => form + fields
define('CSCOMMUNITY_PATH_CORE_FORMS', 		CSCOMMUNITY_PATH_CORE.'/html/forms');
define('CSCOMMUNITY_PATH_CORE_FIELDS', 		CSCOMMUNITY_PATH_CORE.'/html/fields');

// object to identify extension, create once, so same can be consumed by constructors
Rb_Extension::getInstance(CSCOMMUNITY_COMPONENT_NAME, array('prefix_css'=>'cscommunity'));