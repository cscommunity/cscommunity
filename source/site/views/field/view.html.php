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

/** 
 * Profile Html View
* @author CodeSparks
 */
require_once dirname(__FILE__).'/view.php';
class CSCommunitySiteViewProfile extends CSCommunitySiteBaseViewProfile
{	
	public function display()
	{		
		return true;
	}

	public function _basicFormSetup()
	{
		return true;
	}
}
