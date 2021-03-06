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

if(!defined('RB_FRAMEWORK_LOADED')){
	JLog::add('RB Frameowork not loaded',JLog::ERROR);
}

require_once JPATH_SITE.'/components/com_cscommunity/cscommunity/includes.php';

// find the controller to handle the request
$option	= 'com_cscommunity';
$view	= 'dashboard';
$task	= null;
$format	= 'html';

$controllerClass = CSCommunityHelper::findController($option,$view, $task,$format);


$controller = CSCommunityFactory::getInstance($controllerClass, 'controller', 'CSCommunityadmin');

// execute task
try{
	$controller->execute($task);
}catch(Exception $e){
	CSCommunityHelper::handleException($e);
}

// lets complete the task by taking post-action
$controller->redirect();
