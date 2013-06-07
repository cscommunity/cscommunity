<?php
/**
* @copyright		CodeSparks
* @license			GNU GPL 3
* @package			cscommunity
* @subpackage		Backend
* @contact			@contact@
*/

// no direct access
if(!defined( '_JEXEC' )){
	die( 'Restricted access' );
}

if(!defined('RB_FRAMEWORK_LOADED')){
	JLog::add('RB Frameowork not loaded',JLog::ERROR);
}

require_once  dirname(__FILE__).'/cscommunity/includes.php';
$option	= 'com_cscommunity';
$view	= 'dashboard';
$task	= null;
$format	= 'html';

$controllerClass = CSCommunityHelper::findController($option, $view, $task, $format);

$controller =  CSCommunityFactory::getInstance($controllerClass, 'controller', 'CSCommunitysite');

// execute task
$controller->execute($task);

// lets complete the task by taking post-action
$controller->redirect();
