<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: global.php,v 1.15 2005/06/04 07:42:57 soeren_nb Exp $
* @package mambo-phpShop
* @subpackage Core
* Contains code from PHPShop(tm):
* 	@copyright (C) 2000 - 2004 Edikon Corporation (www.edikon.com)
* Conversion to Mambo and the rest:
* 	@copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/
mm_showMyFileName( __FILE__ );

global $header_bgcolor, $leftbar_title_bgcolor, $leftbar_font_color,$vendor_image,$vendor_country_2_code ,$vendor_country_3_code ,
        $vendor_image_url, $vendor_name, $vendor_address, $vendor_city,$vendor_country,$vendor_mail,$vendor_store_name,
        $vendor_state, $vendor_zip, $vendor_phone, $vendor_currency, $vendor_store_desc, $vendor_freeshipping,
        $module_description, $PHPSHOP_LANG, $vendor_currency_display_style, $vendor_full_image;

# Global links
$search_box_title = $PHPSHOP_LANG->_PHPSHOP_SEARCH_TITLE;

# Some database values we will need throughout
# Get Vendor Information
$q = "SELECT * FROM #__pshop_vendor, #__pshop_country";
if( defined( "_PSHOP_ADMIN") || @$_REQUEST['pshop_mode'] == "admin"  ) {
    $q .= ", #__pshop_shopper_vendor_xref WHERE #__pshop_vendor.vendor_id = #__pshop_shopper_vendor_xref.vendor_id ";
    $q .= "AND #__pshop_shopper_vendor_xref.user_id ='".$my->id."' AND ";
}
else {
    $q .= " WHERE vendor_id='1' AND ";
}
$q .= "(vendor_country=country_2_code OR vendor_country=country_3_code)";

$db->query($q);
$db->next_record();

$ps_vendor_id = $db->f("vendor_id");
if( !empty( $ps_vendor_id ))
    $_SESSION["ps_vendor_id"] = $ps_vendor_id;
else
    // Prevent Users from belonging to no vendor
    $_SESSION["ps_vendor_id"] = $ps_vendor_id = 1;

$_SESSION['minimum_pov'] = $db->f("vendor_min_pov"); 
$vendor_name = $db->f("vendor_name");
$vendor_store_name = $db->f("vendor_store_name");
$vendor_mail = $db->f("contact_email");
$vendor_freeshipping = $db->f("vendor_freeshipping");
$vendor_image = "<img border=\"0\" src=\"" .IMAGEURL ."vendor/" . $db->f("vendor_full_image") . "\" />";
$vendor_full_image = $db->f("vendor_full_image");
$vendor_image_url = IMAGEURL."vendor/".$db->f("vendor_full_image");
$vendor_address = $db->f("vendor_address_1");
$vendor_city = $db->f("vendor_city");
$vendor_state = $db->f("vendor_state");
$vendor_state = empty($vendor_state) ? "" : $db->f("vendor_state");
$vendor_country = $db->f("vendor_country");
$vendor_country_2_code = $db->f("country_2_code");
$vendor_country_3_code = $db->f("country_3_code");
$vendor_zip = $db->f("vendor_zip");
$vendor_phone = $db->f("vendor_phone");
$vendor_store_desc = $db->f("vendor_store_desc");
$vendor_currency = $db->f("vendor_currency");
$vendor_currency_display_style = $db->f("vendor_currency_display_style");
$_SESSION["vendor_currency"] = $vendor_currency;
?>
