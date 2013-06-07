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

// if CSCOMMUNITY already loaded, then do not load it again
if(defined('CSCOMMUNITY_CORE_LOADED')){
	return;
}

define('CSCOMMUNITY_CORE_LOADED', true);

// include defines
include_once dirname(__FILE__).'/defines.php';

//load core
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/base',		     '',		 'CSCommunity');

Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/models',		'Model',	 'CSCommunity');
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/models',		'Modelform', 'CSCommunity');

Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/tables',		'Table',	 'CSCommunity');
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/libs',			'',			 'CSCommunity');
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/helpers',		'Helper',	 'CSCommunity');
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/payment',		'',	 		 'CSCommunity');

//html
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/html/html',		'Html',		 'CSCommunity');
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_CORE.'/html/fields',	'FormField', 'CSCommunity');

// site
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_SITE.'/controllers',	'Controller',		'CSCommunitySite');
Rb_HelperLoader::addAutoLoadViews(CSCOMMUNITY_PATH_SITE.'/views', RB_REQUEST_DOCUMENT_FORMAT,  'CSCommunitySite');

// admin
Rb_HelperLoader::addAutoLoadFolder(CSCOMMUNITY_PATH_ADMIN.'/controllers',	'Controller',		'CSCommunityAdmin');
Rb_HelperLoader::addAutoLoadViews(CSCOMMUNITY_PATH_ADMIN.'/views', RB_REQUEST_DOCUMENT_FORMAT, 'CSCommunityAdmin');