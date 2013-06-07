<?php

/**
* @copyright	Copyright (C) 2009 - 2012 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package 		CSCOMMUNITY
* @subpackage	Front-end
* @contact		team@readybytes.in
*/

// no direct access
if(!defined( '_JEXEC' )){
	die( 'Restricted access' );
}

/** 
 * Factory
 * @author CodeSparks
 */
class CSCommunityFactory extends Rb_Factory
{
	static function getInstance($name, $type='', $prefix='CSCommunity', $refresh=false)
	{
		return parent::getInstance($name, $type, $prefix, $refresh);
	}
}
