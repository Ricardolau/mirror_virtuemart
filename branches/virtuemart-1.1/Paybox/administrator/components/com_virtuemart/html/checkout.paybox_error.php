<?php

/*
* @version $Id: checkout.paybox_result.php V 1.2
* @package VirtueMart
* @subpackage html
* @author Valerie Isaksen <valerie.isaksen@alatak.net>
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
*
*
*/
 
 


	echo "probl&eacute;me avec Paybox, erreur= ".$_REQUEST['NUMERR'];
$errors= array (
	'-1' => 'erreur de lecture des param&eacute;tres via stdin (m&eacute;thode POST) (erreur r&eacute;ception http).', 
'-2' => 'erreur d\\\'allocation m&eacute;moire. Pas assez de m&eacute;moire disponible sur le serveur commerce.',
'-3' => 'erreur de lecture des param&eacute;tres QUERY_STRING ou CONTENT_LENGTH. (erreur http).', 
'-4' => 'PBX_RETOUR, PBX_ANNULE, PBX_REFUSE ou PBX_EFFECTUE sont trop longs (<150 caract&eacute;res).',
'-5' => 'erreur ouverture de fichier (si PBX_MODE contient 3) : fichier local inexistant, non trouv&eacute; ou erreur d\\\'acc&eacute;s.', 
'-6' => 'erreur de format du fichier (si PBX_MODE contient 3) : fichier local mal form&eacute;, vide ou ligne mal format&eacute;e.',
'-7' => 'Il manque une variable obligatoire (PBX_SITE, PBX_RANG, PBX_IDENTIFIANT, PBX_TOTAL, PBX_CMD, ?).', 
'-8' => 'une des variables num&eacute;riques contient un caract&eacute;re non num&eacute;rique (site, rang, identifiant, montant, devise?)',
'-9' => 'PBX_SITE contient un num&eacute;ro de site qui ne fait pas exactement 7 caract&egrave;res.', 
'-10' => 'PBX_RANG contient un num&eacute;ro de rang qui ne fait pas exactement 2 caract&egrave;res.',
'-11' => 'PBX_TOTAL fait plus de 10 ou moins de 3 caract&eacute;res num&eacute;riques.', 
'-12' => 'PBX_RETOUR, PBX_ANNULE, PBX_REFUSE ou PBX_EFFECTUE sont trop longs (<150 caract&eacute;res).',
'-13' => 'PBX_CMD est vide ou contient une r&eacute;f&eacute;rence dont la longueur d&eacute;passe 250 caract&eacute;res.', 
'-14' => 'Non utilis&eacute;',
'-15' => 'Non utilis&eacute;', 
'-16' => 'PBX_PORTEUR ne contient pas une adresse e-mail valide.', 
'-16' => 'Erreur de coh&eacute;rence (multi-paniers) : R&eacute;serv&eacute; Usage Futur',
);
  
echo " ".$errors[$_REQUEST['NUMERR']]." <br />";
 
   ?> 	
