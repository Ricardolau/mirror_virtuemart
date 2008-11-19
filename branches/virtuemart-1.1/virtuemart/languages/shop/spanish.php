<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
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
	'PHPSHOP_BROWSE_LBL' => 'Escoger',
	'PHPSHOP_FLYPAGE_LBL' => 'Detalles producto',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Editar este producto',
	'PHPSHOP_DOWNLOADS_START' => 'Empezar descarga',
	'PHPSHOP_DOWNLOADS_INFO' => 'Por favor, introduzca el ID de descarga que ha recibido en el email y haga clic en \'Empezar descarga\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Por favor, introduzca su email abajo para ser avisado cuando el producto vuelva a estar en stock. No vamos a compartir, alquilar, vender ni utilizar esta direcci�n de correo para ning�n otro prop�sito que no sea avisarte cuando el producto vuelva a estar en stock.<br /><br />�Gracias!',
	'PHPSHOP_WAITING_LIST_THANKS' => '�Gracias por esperar!<br />Te avisaremos tan pronto como tengamos el producto en stock.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => '�Av�same!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Buscar en todas las categor�as',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Buscar en todas las caracter�sticas de producto',
	'PHPSHOP_SEARCH_PRODNAME' => 'Buscar en nombre de producto s�lo',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Fabricante/Vendedor s�lo',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'S�lo en la descripci�n del producto',
	'PHPSHOP_SEARCH_AND' => 'y',
	'PHPSHOP_SEARCH_NOT' => 'no',
	'PHPSHOP_SEARCH_TEXT1' => 'La primera drop-down-lista permite usted a seleccionar categor�a para limitar su b�squedad a.
        la segunsa drop-down-lista permite usted a limitar su b�squedad  para el pedazo particular de infoemaci�n del producto (e.j. Nombre).
        una vez usted ha seleccionado estos (o dejan el defecto TODO), insertar la palabra clave a b�squedad. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Puede refinar m�s su b�squedad por a�adiendo la segunda palabra clave y seleccionando Y o NO operador.
        Seleccionando Y significa ambos palabras deben presentar para el producto para que se muestre.
        Selecccionando NO significa el producto estar� mostrado s�lo cuando la primera plabra clave est� presente
        y la segunda no est�. ',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Continuar comprando',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Disponible imagen para',
	'PHPSHOP_BACK_TO_DETAILS' => 'Volver a los detalles del producto',
	'PHPSHOP_IMAGE_NOT_FOUND' => '�Imagen no encontrada!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => '�Encontrar�s productos acorde a los par�metros t�cnicos?<BR>Puedes usar cualquir formulario preparado:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Lo sentimos. No hay categor�a en la cual buscar.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Lo sentimos. No hay tipo de producto publicado con este nombre.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Es como',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'No es como',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'B�squeda en todo el texto',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Todo seleccionado',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Cualquiera seleccionado',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Restablecer formulario',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Lo sentimos, �pero el producto que has solicitado no ha sido encontrado!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Number {unit}s in packaging:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Number {unit}s in box:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Precio por unidad',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Haz una pregunta sobre este producto',
	'VM_RECOMMEND_FORM_LBL' => 'Recomienda este producto a un amigo',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Cesta vac�a',
	'VM_RETURN_TO_PRODUCT' => 'Volver al producto',
	'EMPTY_CATEGORY' => 'Esta categor�a est� actualmente vac�a.',
	'ENQUIRY' => 'Consulta',
	'NAME_PROMPT' => 'Introduze tu nombre',
	'EMAIL_PROMPT' => 'Introduze tu direcci�n email',
	'MESSAGE_PROMPT' => 'Introduze tu consulta',
	'SEND_BUTTON' => 'Enviar',
	'THANK_MESSAGE' => 'Gracias por tu consulta. Responderemos lo antes posible.',
	'PROMPT_CLOSE' => 'Cerrar',
	'VM_RECOVER_CART_REPLACE' => 'Reemplazar cesta con cesta guardada',
	'VM_RECOVER_CART_MERGE' => 'A�adir cesta guardada a la actual cesta',
	'VM_RECOVER_CART_DELETE' => 'Eliminar cesta guardada',
	'VM_EMPTY_YOUR_CART_TIP' => 'Limpiar cesta de todo contenido',
	'VM_SAVED_CART_TITLE' => 'Cesta guardada',
	'VM_SAVED_CART_RETURN' => 'Volver'
); $VM_LANG->initModule( 'shop', $langvars );
?>
