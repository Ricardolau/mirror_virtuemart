<?php

/**
 *
 * Data module for shop credit cards
 *
 * @package    VirtueMart
 * @subpackage CreditCard
 * @author RickG
 * @author Valerie Isaksen, Max Milbers
 * @link https://virtuemart.net
 * @copyright Copyright (c) 2004 - 2019 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id$
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

/**
 * Model class for shop credit cards
 *
 * @package    VirtueMart
 * @subpackage CreditCard
 * @author RickG
 * @author Valérie Isakesn
 */
class Creditcard {
	/**
	 * Validates the Payment Method (Credit Card Number)
	 * Adapted From CreditCard Class
	 * Copyright (C) 2002 Daniel Frï¿½z Costa
	 *
	 * Documentation:
	 *
	 * Card Type                   Prefix           Length     Check digit
	 * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	 * MasterCard                  51-55            16         mod 10
	 * Visa                        4                13, 16     mod 10
	 * AMEX                        34, 37           15         mod 10
	 * Dinners Club/Carte Blanche  300-305, 36, 38  14         mod 10
	 * Discover                    6011             16         mod 10
	 * enRoute                     2014, 2149       15         any
	 * JCB                         3                16         mod 10
	 * JCB                         2131, 1800       15         mod 10
	 *
	 * More references:
	 * http://www.beachnet.com/~hstiles/cardtype.hthml.
	 * http://www.braemoor.co.uk/software/creditcard.shtml
	 * http://en.wikipedia.org/wiki/Credit_card_number
	 *
	 * @param string $creditcard_code
	 * @param string $cardnum
	 * @return boolean
	 */
	static function validate_credit_card_number($creditcard_code, $cardnum) {
		$cardnum = str_replace(" ", "", $cardnum);
		$matches = array();
		$regex = '/^[0-9]{11,19}$/';

		if(!preg_match ($regex, $cardnum, $matches)){
			return false;
		}
		$number = self::_strtonum($cardnum);

		if (empty($number) || !self::mod10($number)) {
			return false;
		}

		return true;
	}

	/*
	 * _strtonum private method
	 *   return formated string - only digits
	 */

	static function _strtonum($string) {
		$nstr = "";
		for ($i = 0; $i < strlen($string); $i++) {
			if (!is_numeric($string[$i]))
				continue;
			$nstr = "$nstr" . $string[$i];
		}
		return $nstr;
	}

	/*
	 * mod10 method - Luhn check digit algorithm
	 *   return 0 if true and !0 if false
	 */

	static function mod10($card_number) {

		$digit_array = array();
		$cnt = 0;

		//Reverse the card number
		$card_temp = strrev($card_number);

		//Multiple every other number by 2 then ( even placement )
		//Add the digits and place in an array
		for ($i = 1; $i <= strlen($card_temp) - 1; $i = $i + 2) {
			//multiply every other digit by 2
			$t = substr($card_temp, $i, 1);
			$t = $t * 2;
			//if there are more than one digit in the
			//result of multipling by two ex: 7 * 2 = 14
			//then add the two digits together ex: 1 + 4 = 5
			if (strlen($t) > 1) {
				//add the digits together
				$tmp = 0;
				//loop through the digits that resulted of
				//the multiplication by two above and add them
				//together
				for ($s = 0; $s < strlen($t); $s++) {
					$tmp = substr($t, $s, 1) + $tmp;
				}
			} else { // result of (* 2) is only one digit long
				$tmp = $t;
			}
			//place the result in an array for later
			//adding to the odd digits in the credit card number
			$digit_array [$cnt++] = $tmp;
		}
		$tmp = 0;

		//Add the numbers not doubled earlier ( odd placement )
		$l = strlen($card_temp);
		for ($i = 0; $i < $l; $i = $i + 2) {
			$tmp = substr($card_temp, $i, 1) + $tmp;
		}

		//Add the earlier doubled and digit-added numbers to the result
		$result = $tmp + array_sum($digit_array);

		//Check to make sure that the remainder
		//of dividing by 10 is 0 by using the modulas
		//operator
		return ($result % 10 == 0);
	}

	/*
	 * validate_credit_card_cvv
	 * The three- or four-digit number on the back of a credit card (on the front for American Express).
	 * @author Valerie Isaksen
	 */
	static function validate_credit_card_cvv($creditcard_type,  $cvv, $required = true, $creditcard_number='') {

		if ($required and empty($cvv)) return false;
		if (empty($creditcard_number)) return true; // for BC reasons
		$firstnumber = substr($creditcard_number, 0, 1);

		switch (strtoupper($firstnumber)) {
			case '3':
				$cvv_digits = 4;
				break;
			default:
				$cvv_digits = 3;
		}

		if (strlen($cvv) == $cvv_digits
			&& strspn($cvv, '0123456789') == $cvv_digits) {
			return true;
		}

		return false;

	}


	/**
	 * @param $creditcard_type
	 * @param $month
	 * @param $year
	 * @return bool
	 * @author valerie isaksen
	 */
	static function validate_credit_card_date($creditcard_type, $month, $year) {
		$expires = DateTime::createFromFormat('mY', $month.$year);
		$now     = new DateTime('first day of this month');
		if ($expires < $now) {
			return false;
		} else {
			return true;
		}

	}

}

// pure php no closing tag