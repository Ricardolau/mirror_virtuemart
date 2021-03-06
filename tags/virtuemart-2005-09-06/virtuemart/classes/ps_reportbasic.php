<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
* @version $Id: ps_reportbasic.php,v 1.4 2005/07/19 20:18:46 soeren_nb Exp $
* @package mambo-phpShop
* @copyright nhyde
* Conversion to Mambo and the rest:
* 	@copyright (C) 2004-2005 Soeren Eberhardt
*
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/

class nh_report {
  var $classname = "nh_report";
  
  /**************************************************************************
  ** name: make_date_popups
  ** created by: nhyde
  ** description: prints month, day, and year popups
  ** parameters: menu_name string to append to select names
  **             sel_date int in YYYYMMDD format
  ** returns: True
  ***************************************************************************/  
  
  function make_date_popups ($menu_name='', $sel_date = '') {
  // prepare vars for printing select menus
	$yr = date("Y");
  $eta_year = "";
  
	$popup = '<select name="'. $menu_name . 'month">';
	// BEGIN print month popup
		for ($i = 1; $i <= 12; $i++) {
			$t_month = sprintf("%02d", $i);
			$popup .= "\n\t".'<option value="'.$t_month.'"';
			if ($t_month == $sel_date["month"]) { $popup .= " selected='selected'"; }
			$popup .= '>'.date("F", mktime(0,0,0,$t_month,01,$eta_year));
		}
		$popup .= "\n";
	// end print month popup

	$popup .= "</select>\n\t".'<select name="'. $menu_name . 'day">';
		for ($i=1;$i<=31;$i++) {
			$t_day = sprintf("%02d", $i);
			$popup .= "\n\t<option value=\"".$t_day.'"';
			if ($t_day == $sel_date["day"]) { $popup .= ' selected="selected"'; }
			$popup .= '>'.$i;
		}
		$popup .= "\n";
	$popup .= "</select>\n\t".'<select name="'. $menu_name . 'year">';
		for ($i = -3; $i<=0; $i++) {
			$print_year = ($yr+$i);
			$popup .= "\n\t".'<option value="'.$print_year.'"';
			if ($print_year == $sel_date["year"]) { $popup .= ' selected="selected"'; }
			$popup .= '>'.$print_year;
		}
		$popup .= "\n";
	$popup .= '</select><br/>';
	echo $popup;
  return True;
  }
}

?>
