/**
* @copyright	Copyright (C) 2009-2012 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package		CSCOMMUNITY
* @contact 		team@readybytes.in
*/

if (typeof(cscommunity)=='undefined'){
	var cscommunity = {}
}

// all admin function should be in admin scope 
if(typeof(cscommunity.site)=='undefined'){
	cscommunity.site = {};
}

//all admin function should be in admin scope 
if(typeof(Joomla)=='undefined'){
	Joomla = {};
}


(function($){
// START : 	
// Scoping code for easy and non-conflicting access to $.
// Should be first line, write code below this line.

	
};
	
/*--------------------------------------------------------------
  on Document ready 
--------------------------------------------------------------*/
$(document).ready(function(){
	
});

//ENDING :
//Scoping code for easy and non-conflicting access to $.
//Should be last line, write code above this line.
})(cscommunity.jQuery);