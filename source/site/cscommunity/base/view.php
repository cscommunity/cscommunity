<?php

/**
 * @copyright	Copyright (C) 2009 - 2012 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * @package 	CSCOMMUNITY
 * @subpackage	Front-end
 * @contact		team@readybytes.in
 */

// no direct access
if(!defined( '_JEXEC' )){
	die( 'Restricted access' );
}

if(RB_REQUEST_DOCUMENT_FORMAT === 'ajax'){
	class CSCommunityViewbase extends Rb_ViewAjax{}
}elseif(RB_REQUEST_DOCUMENT_FORMAT === 'json'){
	class CSCommunityViewbase extends Rb_ViewJson{}
}else{
	class CSCommunityViewbase extends Rb_ViewHtml{}
}


/** 
 * Base View
* @author CodeSparks
 */
class CSCommunityView extends CSCommunityViewbase 
{
	public $_component = CSCOMMUNITY_COMPONENT_NAME;
	
	public function __construct($config = array())
	{
		parent::__construct($config);
		
		// intialize input
		$this->input = CSCommunityFactory::getApplication()->input;
		return $this;
	}
}
