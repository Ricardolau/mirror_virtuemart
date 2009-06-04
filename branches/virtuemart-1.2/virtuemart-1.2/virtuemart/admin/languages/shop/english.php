<?php
if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'ISO-8859-1',
	'VM_BROWSE_LBL' => 'Browse',
	'VM_BROWSE_VENDOR_LBL' => 'From ',
	'VM_FLYPAGE_LBL' => 'Product Details',
	'VM_PRODUCT_FORM_EDIT_PRODUCT' => 'Edit this product',
	'VM_DOWNLOADS_START' => 'Start Download',
	'VM_DOWNLOADS_INFO' => 'Please enter the Download-ID you\'ve got in the e-mail and click \'Start Download\'.',
	'VM_WAITING_LIST_MESSAGE' => 'Please enter your e-mail address below to be notified when this product comes back in stock. 
		We will not share, rent, sell or use this e-mail address for any other purpose other than to 
		tell you when the product is back in stock.<br /><br />Thank you!',
	'VM_WAITING_LIST_THANKS' => 'Thanks for waiting! <br />We will let you know as soon as we get our inventory.',
	'VM_WAITING_LIST_NOTIFY_ME' => 'Notify Me!',
	'VM_SEARCH_ALL_CATEGORIES' => 'Search All Categories',
	'VM_SEARCH_ALL_PRODINFO' => 'Search all product info',
	'VM_SEARCH_PRODNAME' => 'Product name only',
	'VM_SEARCH_MANU_VENDOR' => 'Manufacturer/Vendor only',
	'VM_SEARCH_DESCRIPTION' => 'Product description only',
	'VM_SEARCH_AND' => 'and',
	'VM_SEARCH_NOT' => 'not',
	'VM_SEARCH_TEXT1' => 'The first drop-down-list allows you to select a category to limit your search to. 
        The second drop-down-list allows you to limit your search to a particular piece of product information (e.g. Name). 
        Once you have selected these (or left the default ALL), enter the keyword to search for. ',
	'VM_SEARCH_TEXT2' => ' You can further refine your search by adding a second keyword and selecting the AND or NOT operator. 
        Selecting AND means both words must be present for the product to be displayed. 
        Selecting NOT means the product will be displayed only if the first keyword is present 
        and the second is not.',
	'VM_CONTINUE_SHOPPING' => 'Continue Shopping',
	'VM_AVAILABLE_IMAGES' => 'Available Images for',
	'VM_BACK_TO_DETAILS' => 'Back to Product Details',
	'VM_IMAGE_NOT_FOUND' => 'Image not found!',
	'VM_PARAMETER_SEARCH_TEXT1' => 'Do you wish to find products according to technical parameters?<BR>You can use any prepared form:',
	'VM_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'I am sorry. There is no category for the search.',
	'VM_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'I am sorry. There is no published Product Type with this name.',
	'VM_PARAMETER_SEARCH_IS_LIKE' => 'Is Like',
	'VM_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Is NOT Like',
	'VM_PARAMETER_SEARCH_FULLTEXT' => 'Full-Text Search',
	'VM_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'All Selected',
	'VM_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Any Selected',
	'VM_PARAMETER_SEARCH_RESET_FORM' => 'Reset Form',
	'VM_PRODUCT_NOT_FOUND' => 'Sorry, but the Product you\'ve requested wasn\'t found!',
	'VM_PRODUCT_PACKAGING1' => 'Number {unit}s in packaging:',
	'VM_PRODUCT_PACKAGING2' => 'Number {unit}s in box:',
	'VM_CART_PRICE_PER_UNIT' => 'Price per Unit',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Ask a question about this product',
	'VM_RECOMMEND_FORM_LBL' => 'Recommend this product to a friend',
	'VM_EMPTY_YOUR_CART' => 'Empty Cart',
	'VM_RETURN_TO_PRODUCT' => 'Return to product',
	'EMPTY_CATEGORY' => 'This Category is currently empty.',
	'ENQUIRY' => 'Enquiry',
	'NAME_PROMPT' => 'Enter your Name',
	'EMAIL_PROMPT' => 'E-mail Address',
	'MESSAGE_PROMPT' => 'Enter your Message',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Thank you for your Enquiry. We will contact you as soon as possible.',
	'PROMPT_CLOSE' => 'Close',
	'VM_RECOVER_CART_REPLACE' => 'Replace Cart with Saved Cart',
	'VM_RECOVER_CART_MERGE' => 'Add Saved Cart to Current Cart',
	'VM_RECOVER_CART_DELETE' => 'Delete Saved Cart',
	'VM_EMPTY_YOUR_CART_TIP' => 'Clear the cart of all contents',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>