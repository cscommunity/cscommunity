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
 * Invoice Html View
* @author CodeSparks
 */
require_once dirname(__FILE__).'/view.php';
class CSCommunityAdminViewInvoice extends CSCommunityAdminBaseViewInvoice
{	
	public function email()
	{
		// set by controller
		$invoice_id = $this->getModel()->getId();	
		
		if(!$this->get('confirmed')){
			$this->_setAjaxWinTitle(Rb_Text::_('COM_CSCOMMUNITY_INVOICE_EMAIL_WINDOW_TITLE'));
			$this->_setAjaxWinBody(Rb_Text::_('COM_CSCOMMUNITY_INVOICE_EMAIL_CONFIRM_MESSAGE'));
		
			$this->_addAjaxWinAction(Rb_Text::_('COM_CSCOMMUNITY_CONFIRM'), 'cscommunity.admin.invoice.email.send('.$invoice_id.');', 'btn btn-info', 'id="cscommunity-invoice-email-confirm-button"');
			$this->_addAjaxWinAction(Rb_Text::_('COM_CSCOMMUNITY_CLOSE'), 'rb.ui.dialog.close();', 'btn');
			$this->_setAjaxWinAction();		
		
			$ajax = Rb_Factory::getAjaxResponse();
			$ajax->sendResponse();
		}
		
		// get instance of front end email view
		$email_controller 	= CSCommunityFactory::getInstance('email', 'controller', 'CSCommunitysite');
		$email_view 		= $email_controller->getView();
		
		$rb_invoice =  $this->_helper->get_rb_invoice($invoice_id);
		$email_view->assign('rb_invoice', $rb_invoice);
		$email_view->assign('invoice', CSCommunityInvoice::getInstance($invoice_id)->toArray());
		
		$configData	= $this->getHelper('config')->get();
		$email_view->assign('config_data', $configData);
		
		$buyer	= $this->getHelper('buyer')->get($rb_invoice['buyer_id']);
		$email_view->assign('buyer', $buyer);
		
		//XITODO : Currency Symbol not shown in email template	
		//$currency = $this->getHelper('format')->getCurrency($rb_invoice['currency'], 'symbol');
		//$email_view->assign('currency', $currency);
		
		$discount	=  $this->_helper->get_discount($invoice_id);
		$tax		=  $this->_helper->get_tax($invoice_id);
		$subtotal	=  $this->_helper->get_subtotal($invoice_id);
		
		$email_view->assign('tax', $tax);
		$email_view->assign('discount', $discount);
		$email_view->assign('subtotal', $subtotal);
		
        // md5 key generated for authentication		
		$key	= md5($rb_invoice['created_date']);
		$url	= JUri::root().'index.php?option=com_cscommunity&view=invoice&invoice_id='.$invoice_id.'&key='.$key;
		$email_view->assign('pay_url', $url);
		
		// email content
		$body 	 = $email_view->loadTemplate('invoice');
		$subject = Rb_Text::_('COM_CSCOMMUNITY_INVOICE_SEND_EMAIL_SUBJECT');
		$user 	 = CSCommunityFactory::getUser($rb_invoice['buyer_id']);		
		
		$result = $this->getHelper('utils')->sendEmail($user->email, $subject, $body);
		$msg = Rb_Text::_('COM_CSCOMMUNITY_INVOICE_EMAIL_SENT');
		if(!$result){
			$msg = Rb_Text::_('COM_CSCOMMUNITY_INVOICE_ERROR_SEND_ERROR');						
		}
		elseif($result instanceof Exception){
			$msg  = Rb_Text::_('COM_CSCOMMUNITY_INVOICE_ERROR_SEND_ERROR');
			$msg .= "<br/><div class='alert alert-error'>".$result->getMessage()."</div>";
		}
		
		$this->_setAjaxWinTitle(Rb_Text::_('COM_CSCOMMUNITY_INVOICE_EMAIL_WINDOW_TITLE'));
		$this->_setAjaxWinBody($msg);
		
		$this->_addAjaxWinAction('close', 'rb.ui.dialog.close();', 'btn');
		$this->_setAjaxWinAction();		
		
		$ajax = Rb_Factory::getAjaxResponse();
		$ajax->sendResponse();
	}
}