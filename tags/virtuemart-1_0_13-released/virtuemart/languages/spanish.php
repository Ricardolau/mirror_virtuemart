<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id$
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
class vmLanguage extends vmAbstractLanguage {
	var $_PHPSHOP_MENU = 'Men�';
	var $_PHPSHOP_CATEGORY = 'Categor�a';
	var $_PHPSHOP_CATEGORIES = 'Categor�as';
	var $_PHPSHOP_SELECT_CATEGORY = 'Seleccione una categor�a:';
	var $_PHPSHOP_ADMIN = 'Administraci�n';
	var $_PHPSHOP_PRODUCT = 'Producto';
	var $_PHPSHOP_LIST = 'lista';
	var $_PHPSHOP_ALL = 'todos';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Listar Todos';
	var $_PHPSHOP_VIEW = 'vista';
	var $_PHPSHOP_SHOW = 'muestra';
	var $_PHPSHOP_ADD = 'a�adir';
	var $_PHPSHOP_UPDATE = 'actualizar';
	var $_PHPSHOP_DELETE = 'borrar';
	var $_PHPSHOP_SELECT = 'selecionar';
	var $_PHPSHOP_SUBMIT = 'Enviar';
	var $_PHPSHOP_RANDOM = 'Productos al Azar';
	var $_PHPSHOP_LATEST = '�ltimos Productos';
	var $_PHPSHOP_HOME_TITLE = 'Inicio';
	var $_PHPSHOP_CART_TITLE = 'Pedido';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Terminar Pedido';
	var $_PHPSHOP_LOGIN_TITLE = 'Ingresar';
	var $_PHPSHOP_LOGOUT_TITLE = 'Salir';
	var $_PHPSHOP_BROWSE_TITLE = 'Escoger Producto';
	var $_PHPSHOP_SEARCH_TITLE = 'Buscar';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Mantenimiento<BR>de Cuenta';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navegaci�n';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Departamento';
	var $_PHPSHOP_INFO = 'Informaci�n';
	var $_PHPSHOP_BROWSE_LBL = 'Escoger Producto';
	var $_PHPSHOP_PRODUCTS_LBL = 'Productos';
	var $_PHPSHOP_PRODUCT_LBL = 'Producto';
	var $_PHPSHOP_SEARCH_LBL = 'Buscar';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detalle de Productos';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Buscar Producto';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nombre';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Categor�a';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Descripci�n';
	var $_PHPSHOP_CART_SHOW = 'Mostrar carro';
	var $_PHPSHOP_CART_ADD_TO = 'A�adir al carro';
	var $_PHPSHOP_CART_NAME = 'Nombre';
	var $_PHPSHOP_CART_SKU = 'SKU';
	var $_PHPSHOP_CART_PRICE = 'Precio';
	var $_PHPSHOP_CART_QUANTITY = 'Cantidad';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotal';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'A�adir una nueva';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Direcci�n de env�o';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Su busqueda devolvi� 0 resultados.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Precio: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Pedido';
	var $_PHPSHOP_NO_CUSTOMER = 'Lo siento, pero usted no es un cliente registrado.<BR>Por favor, proceda a registrarse en nuestra tienda.<BR>Gracias.';
	var $_PHPSHOP_DELETE_MSG = 'Esta seguro que desea borrar esta entrada?';
	var $_PHPSHOP_THANKYOU = 'Gracias por su pedido.';
	var $_PHPSHOP_NOT_SHIPPED = 'No ha sido enviado a�n';
	var $_PHPSHOP_EMAIL_SENDTO = 'Un correo de confirmacion le ha sido enviado a';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Lo siento, no hay usuario que pueda a�adir a la lista de usuarios';
	var $_PHPSHOP_ERROR = 'ERROR';
	var $_PHPSHOP_MOD_NOT_REG = 'Modulo No Registrado.';
	var $_PHPSHOP_MOD_ISNO_REG = 'no es un modulo phpShop v�lido.';
	var $_PHPSHOP_MOD_NO_AUTH = 'No tiene permiso a acceder el m�dulo requerido.';
	var $_PHPSHOP_PAGE_404_1 = 'La p�gina no existe';
	var $_PHPSHOP_PAGE_404_2 = 'Este archivo no existe. No ha podido encontrar el archivo:';
	var $_PHPSHOP_PAGE_403 = 'Permisos Insuficientes';
	var $_PHPSHOP_FUNC_NO_EXEC = 'No tiene permiso para ejecutar ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Funci�n No Registrada';
	var $_PHPSHOP_FUNC_ISNO_REG = ' no es una funci�n de MOS_com_phpShop.';
	var $_PHPSHOP_ADMIN_MOD = 'Administraci�n';
	var $_PHPSHOP_USER_LIST_MNU = 'Listar Usuarios';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista de Usuarios';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nombre';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nombre Completo';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_USER_FORM_MNU = 'A�adir Usuario';
	var $_PHPSHOP_USER_FORM_LBL = 'Informaci�n de Usuario';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Informaci�n de Facturar A';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Direcci�n de Env�o';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'A�adir Direcci�n';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No hay direcciones de env�o.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Direcci�n 2';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Primer Nombre';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Apellidos';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Segundo Nombre';
	var $_PHPSHOP_USER_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nombre';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Contrase�a';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirmar Contrase�a';
	var $_PHPSHOP_USER_FORM_PERMS = 'Permisos';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'N�mero de cliente / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Nombre de Compa�ia';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Direcci�n 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Direcci�n 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Ciudad';
	var $_PHPSHOP_USER_FORM_STATE = 'Provincia';
	var $_PHPSHOP_USER_FORM_ZIP = 'Codigo Postal';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_USER_FORM_PHONE = 'Tel�fono';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Tel�fono M�vil';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Correo Electr�nico';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Listar Modulos';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista de Modulos';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Modulo';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Permisos';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Funciones';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Pedido';
	var $_PHPSHOP_MODULE_FORM_MNU = 'A�adir Modulo';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informaci�n';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etiqueta';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nombre';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Permisos';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Encabezado';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Pie';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Menu';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Pedido';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'C�digo de Idioma';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Archivo de Idioma';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Listar Funciones';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista de Funciones';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Nombre';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Nombre de clase';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'M�todo de Clase';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permisos';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'A�adir Funci�n';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informaci�n';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nombre';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nombre de Clase';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'M�todo de Clase';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Permisos';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Listar monedas';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista de monedas';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'A�adir moneda';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nombre de moneda';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'C�digo de moneda';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'listar Pa�ses';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista de Pa�ses';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'A�adir Pa�s';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nombre de Pa�s';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'c�digo de Pa�s (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'c�digo de Pa�s (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Lista de estados';
	var $_PHPSHOP_STATE_LIST_LBL = 'Lista de estados para: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'A�adir/Actualizar un estado';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nombre de estado';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'C�digo de estado (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'C�digo de estado (2)';
	var $_PHPSHOP_ADDRESS = 'Direcci�n';
	var $_PHPSHOP_CONTINUE = 'Continuar';
	var $_PHPSHOP_EMPTY_CART = 'Su Pedido est� actualmente vac�o.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping Servidor de InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Servidor-InterShipper Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Fallo de Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Respuesta de Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transporte';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Tiempo de<BR>Respuesta';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'seg.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Listar M�todo de Env�o';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'M�todo de Env�o Actual';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'M�todo de Env�o';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Activo';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Cargos por manejo';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Tiempo de Lead';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'porciento';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'd�as';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configurar M�todo de Env�o';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'A�adir M�todo de Env�o';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configurar M�todo de Env�o';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Refrescar';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'M�todo de env�o';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Activar';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Cargos por manejo';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'porciento';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'd�as';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ORDER_MOD = 'Pedido';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Confirmar Pedido';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Cancelar Pedido';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Imprimir Pedido';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Borrar Pedido';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Listar Pedidos';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Lista de Pedidos';
	var $_PHPSHOP_ORDER_LIST_ID = 'N�mero de Pedido';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Fecha';
	var $_PHPSHOP_ORDER_LIST_MDATE = '�ltima Modificaci�n';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Estado';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_ITEM = 'Art�culos';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Imprimir Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'N�mero de Pedido';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Fecha';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Estado';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informaci�n del Cliente';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informaci�n de la Factura';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informaci�n del Env�o';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Facturar A';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Enviar A';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nombre';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Compa�ia';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Direcci�n 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Direcci�n 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Ciudad';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Provincia';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Codigo Postal';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Pa�s';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Tel�fono';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Correo Electr�nico';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Elementos del pedido';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Cantidad';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Cantidad';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'SKU';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Precio';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Impuesto Total';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Porte';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Impuesto del Porte';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'M�todo de Pago';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nombre de Cuenta';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'N�mero de Cuenta';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Fecha de Caducidad';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Registro de Pago';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informaci�n de Env�o';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informaci�n de Pago';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Transporte';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Modo de Env�o';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Fecha de Env�o';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Precio de Env�o';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Listar Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'A�adir Estado de Pedido';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'C�digo de Pedido';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nombre de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'C�digo de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nombre de Pedido';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Lista de Pedido';
	var $_PHPSHOP_PRODUCT_MOD = 'Productos';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Producto Actual';
	var $_PHPSHOP_CURRENT_ITEM = 'Art�culo Actual';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Inventario de Productos';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Ver Inventario';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Precio';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'el stock';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Listar Productos';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Lista de Productos';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nombre';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'SKU';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publicar';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Buscar producto';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modificado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'con precio modificado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'sin precio modificado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Despu�s';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Antes';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'A�adir Producto';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editar este producto';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Ver Detalles de productos en esta tienda';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'A�adir Art�culo';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'A�adir Otro Art�culo';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nuevo Producto';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Actualizar Producto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informaci�n del Producto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Estado';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimensiones y Peso';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Imagenes';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nuevo Art�culo';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Actualizar Art�culo';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informaci�n';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Estado';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimensiones y Peso';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Imagenes';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Retornar a Producto Similar';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Para actualizar la imagen actual, ingrese el directorio a la nueva imagen.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Introduzca ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Art�culos';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Cualidades';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = '�Esta seguro de que desea borrar este producto\\ny los art�culos relacionados a el?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = '�Esta seguro de que desea borrar este art�culo?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Vendedor';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Fabricante';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'SKU';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nombre';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Categor�a';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Precio del producto (Bruto)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Precio del producto (Neto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Descripci�n Detallada';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Descripci�n Corta';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'En el stock';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'En Pedido';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Fecha de Disponibilidad';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Especial';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Tipo de Descuento';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = '�Publicar?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Longitud';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Anchura';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Altura';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unidad de Medida';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unidad de Medida';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Recuadro';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Imagen Completa';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'libras';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'pulgadas';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unidad';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'unidad';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Unidades en el paquete';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Aqu� puedes rellenar un n�mero de unidades en el paquete. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Unidades en la caja';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Aqu� puedes rellenar un n�mero de unidades en la caja. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Mostrar Producto A�adido';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Mostrar Producto Actualizado';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Mostrar Art�culo A�adido';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Mostrar Art�culo Actualizado';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Cargar CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Carpetas de Productos';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Listar Categorias';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Lista de Categor�as';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Formar Categor�a';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Formulario de Informaci�n';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nombre de Categor�a';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Pariente de Categor�a';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Descripci�n de Categor�a';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = '�Publicar?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Categor�a Detallada';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Listar Cualidades';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Lista de Cualidad por';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nombre de Cualidad';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Cualidad de Pedido';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Definir Cualidad';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formulario de Cualidad';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nueva Cualidad por Producto';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Cualidad Actualizada por Producto';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nueva Cualidad por Art�culo';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Cualidad Actualizada por Art�culo';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nombre de cualidad';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Cualidad de Pedido';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Listar Precio';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Lista de Precio';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Precios por';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Grupo de Lista del Precio';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Lista de Precio';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Moneda de Lista del Producto';
	var $_PHPSHOP_PRICE_FORM_MNU = 'A�adir  Precio';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informaci�n';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nuevo Precio por Producto';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Actualizar Precio por Producto';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nuevo Precio por Art�culo';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Actualizar Precio por Art�culo';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Precio';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Moneda';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Grupo de Compradores';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Informe B�sico';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Informe de Lista Individual de Productos';
	var $_PHPSHOP_RB_SALE_TITLE = 'Informe de Ventas';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Actividad de Ventas';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Ingresar Intervalo';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mensual';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Semanal';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Diario';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Este Mes';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = '�ltimo Mes';
	var $_PHPSHOP_RB_LAST60_BUTTON = '�ltimos 60 d�as';
	var $_PHPSHOP_RB_LAST90_BUTTON = '�ltimos 90 d�as';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Comenzar en';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Finalizar en';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Muestre la gama seleccionada';
	var $_PHPSHOP_RB_REPORT_FOR = 'Informe por ';
	var $_PHPSHOP_RB_DATE = 'Fecha';
	var $_PHPSHOP_RB_ORDERS = 'Pedidos';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Total Art�culos vendidos';
	var $_PHPSHOP_RB_REVENUE = 'Ganancias';
	var $_PHPSHOP_RB_PRODLIST = 'Listado de Productos';
	var $_PHPSHOP_SHOP_MOD = 'Tienda';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Recuadro';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Precio';
	var $_PHPSHOP_ORDER_STATUS_P = 'Pedido Pendiente';
	var $_PHPSHOP_ORDER_STATUS_C = 'Pedido Confirmado';
	var $_PHPSHOP_ORDER_STATUS_X = 'Pedido Cancelado';
	var $_PHPSHOP_ORDER_BUTTON = 'Pedido';
	var $_PHPSHOP_SHOPPER_MOD = 'Comprador';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Listar Compradores';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista de Compradores';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nombre';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nombre Completo';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'A�adir Comprador';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informaci�n';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Informaci�n Facturar A';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informaci�n de Direcci�n';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informaci�n de Env�o';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'A�adir Direcci�n de Env�o';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Direcci�n 2';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nombre';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Primer Nombre';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Apellidos';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Segundo Nombre';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nombre de Comprador';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Contrase�a';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirmar Contrase�a';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nombre de Compa�ia';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Direcci�n 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Direcci�n 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Ciudad';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Provincia';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Codigo Postal';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Tel�fono';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Tel�fono m�vil';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Correo Electr�nico';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Si';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'No';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Listar Grupo de Compradores';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista de Grupo de Compradores';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nombre';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formulario de Grupo de Compradores';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'A�adir Grupo de Compradores';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nombre';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Descripci�n';
	var $_PHPSHOP_STORE_MOD = 'Tienda';
	var $_PHPSHOP_STORE_FORM_MNU = 'Editar Tienda';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informaci�n de Tienda';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informaci�n de Contacto';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Imagen';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Subir Imagen';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nombre de Tienda';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nombre de Compa�ia de Tienda';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Direcci�n 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Direcci�n 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Ciudad';
	var $_PHPSHOP_STORE_FORM_STATE = 'Provincia';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Codigo Postal';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Tel�fono';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Moneda';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Categor�a';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Apellidos';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Primer Nombre';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Segundo Nombre';
	var $_PHPSHOP_STORE_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Tel�fono 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Tel�fono 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Correo Electr�nico';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Directorio a Imagen';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_PAYMENT = 'Pago';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Listar M�todos de Pago';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Lista de M�todos de Pago';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nombre';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Descuento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grupo de Comprador';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Cybercash';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'A�adir M�todo de Pago';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formulario de M�todo de Pago';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nombre de Forma de Pago';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grupo de Comprador';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Descuento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Lista de Compras';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Usar Cybercash';
	var $_PHPSHOP_TAX_MOD = 'Impuesto';
	var $_PHPSHOP_TAX_RATE = 'Tarifas de Impuesto';
	var $_PHPSHOP_TAX_LIST_MNU = 'Listar Tarifas de Impuesto';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista de Tarifas de Impuesto';
	var $_PHPSHOP_TAX_LIST_STATE = 'Impuestos por Provincia o Regi�n';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Impuestos de Pa�s';
	var $_PHPSHOP_TAX_LIST_RATE = 'Tarifas de Impuesto';
	var $_PHPSHOP_TAX_FORM_MNU = 'A�adir Tarifa de Impuesto';
	var $_PHPSHOP_TAX_FORM_LBL = 'A�adir Impuesto de Informaci�n';
	var $_PHPSHOP_TAX_FORM_STATE = 'Impuesto por Provincia o Regi�n';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Impuesto de Pa�s';
	var $_PHPSHOP_TAX_FORM_RATE = 'Tarifas de Impuesto';
	var $_PHPSHOP_VENDOR_MOD = 'Vendedor';
	var $_PHPSHOP_VENDOR_ADMIN = 'Vendedores';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Listar Vendedores';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista de Vendedores';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nombre';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Administraci�n';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'A�adir Vendedor';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'A�adir Informaci�n';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informaci�n';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Contacto de Informaci�n';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Imagen';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Subir Imagen';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nombre de Tienda de Vendedor';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nombre de Compa�ia de Vendedor';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Direcci�n 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Direcci�n 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Ciudad';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Provincia';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Codigo Postal';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Tel�fono';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Moneda';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Categor�a';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Apellidos';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Nombre';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Segundo Nombre';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Tel�fono 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Tel�fono 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Correo Electr�nico';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Directorio de Imagen';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Listar Categor�a de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista de Categor�a de Vendedores';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nombre de Categor�a';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendedores';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'A�adir Categor�a de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formulario de Categor�a de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informaci�n';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nombre de Categor�a';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Fabricante';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Listar Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nombre de Fabricante';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administraci�n';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'A�adir Fabricantes';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'A�adir Informaci�n';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informaci�n de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nombre de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Categor�a de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Correo Electr�nico';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'URL P�gina web de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Descripci�n';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Lista de Categor�a de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista de Categor�a de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nombre de Categor�a';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Descripci�n de Categor�a';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'A�adir Categor�a de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Categor�a de Fabricantes ';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informaci�n de Categor�a';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nombre de Categor�a';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Descripci�n de Categor�a';
	var $_PHPSHOP_HELP_MOD = 'Ayuda';
	var $_PHPSHOP_CART_ACTION = 'Acciones';
	var $_PHPSHOP_CART_UPDATE = 'Actualizar';
	var $_PHPSHOP_CART_DELETE = 'Borrar';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Precio';
	var $_PHPSHOP_PRODUCT_CALL = 'Llame para precio';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Previa';
	var $_PHPSHOP_PRODUCT_NEXT = 'PR�XIMA';
	var $_PHPSHOP_CART_TAX = 'Impuesto';
	var $_PHPSHOP_CART_SHIPPING = 'Porte (C/I.V.A.)';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Pr�ximo';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registrarse';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Informaci�n de Factura';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Compa��a';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nombre';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Direcci�n';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Tel�fono';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Correo Electr�nico';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Informaci�n del Env�o';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Compa�ia';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nombre';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Direcci�n';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Tel�fono';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informaci�n del pago';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nombre de la Tarjeta';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'M�todo de Pago';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'N�mero de Tarjeta de Cr�dito';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Fecha de Caducidad';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Pedido Completo';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Informaci�n requerida cuando Pago v�a Tarjeta de Cr�dito es seleccionada';
	var $_PHPSHOP_ZONE_MOD = 'Env�o por Zonas';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Listar Zonas';
	var $_PHPSHOP_ZONE_FORM_MNU = 'A�adir Zona';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Asignar Zona';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Pa�s';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zona Actual';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'destinar a Zona';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Actualizar';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Destinar Zonas';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nombre de Zona';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Descripci�n de Zona';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Costo por Zona por Art�culo';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limite de Costo de Zona';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista de Zones';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nombre de Zona';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Descripci�n de Zona';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Costo por Zona Por Art�culo';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'L�mite de Costo de Zona';
	var $_PHPSHOP_LOGIN_FIRST = 'Por Favor, Ingresar o Registrarse a esta Tienda (usar el m�dulo de Ingreso) Primero.<br>Gracias.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Condiciones de Servicio';
	var $_PHPSHOP_AGREE_TO_TOS = 'Por Favor, aprovar los condiciones de servicio primero.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Apruebo los condiciones de Servicio';
	var $_PHPSHOP_LEAVE_BLANK = '(dejar en BLANCO si usted tiene<br />no archivo php individual)';
	var $_PHPSHOP_RETURN_LOGIN = 'Clientes que vuelven: por favor Autentif�quense';
	var $_PHPSHOP_NEW_CUSTOMER = '�Nuevo(a)? Por favor, facil�te sus datos de facturaci�n';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Cuenta de Cliente:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informaci�n de Pedido';
	var $_PHPSHOP_ACC_UPD_BILL = 'Aqu� se pueden actualizar sus datos de facturaci�n.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Aqu� se pueden a�adir y mantener las direcciones de env�o.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informaci�n de Cuenta';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informaci�n de Env�o';
	var $_PHPSHOP_ACC_NO_ORDERS = 'No hay pedidos para mostrar';
	var $_PHPSHOP_ACC_BILL_DEF = '- Por defecto (igual que el de facturaci�n)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Puede a�adir direcciones de env�o a su cuenta. Por favor, piense en un sobrenombre o c�digo para la direcci�n que selecciona abajo.';
	var $_PHPSHOP_CONFIG = 'Configuraci�n';
	var $_PHPSHOP_USERS = 'Usuarios';
	var $_PHPSHOP_IS_CC_PAYMENT = '�Quiere pagar con tarjeta de cr�dito?';
	var $_PHPSHOP_SHIPPING_MOD = 'Administraci�n del Env�o';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Porte';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Transportista';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista de Transportistas';
	var $_PHPSHOP_RATE_LIST_MNU = 'Tarifas del Env�o';
	var $_PHPSHOP_RATE_LIST_LBL = 'Tarifas del Env�o';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nombre';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Orden en la lista';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Crear Transportista';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Editar / Crear Transportista';
	var $_PHPSHOP_RATE_FORM_MNU = 'Crear Tarifa del Env�o';
	var $_PHPSHOP_RATE_FORM_LBL = 'editar/crear tarifa del Env�o';
	var $_PHPSHOP_RATE_FORM_NAME = 'Descripci�n de Tarifa del Env�o';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportista';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Comenzar en gama de cod�go postal';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Finalizar en gama de cod�go postal';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Peso m�nimo';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Peso m�ximo';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Coste';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Coste de su paquete';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Moneda';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Identidad de Impuesto';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Lista de pedido';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportista';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Descripci�n de tarifa del Env�o';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Peso desde ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... hasta';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Compa��a de Transporte';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Orden en la lista';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERROR: existe la identificaci�n de transportista';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERROR: Elija a transportista.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERROR: existe una tarifa del Env�o por lo menos, borre las tarifas previas a Transportista.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERROR: No se encuentra transportista con este identificaci�n.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERROR: Elija a Transportista.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERROR: No encuentra la transportista con este identificaci�n.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERROR: Se requiere la tarifa descriptor.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERROR: El destino del pa�s no es v�lido. M�s de un pa�s se pod�a separar con \';\'.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERROR: Se requiere el m�nimo peso.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERROR: Se requiere el m�ximo peso.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERROR: El m�nimo peso no puede ser mas grande que el m�ximo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERROR: Se requiere el costo del  Env�o';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERROR: Elija a la moneda';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERROR: Se requiere la tarifa de Env�o';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Por favor seleccione';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportista';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Tipo de transporte';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'precio';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-gratis-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Tarjeta de Credito';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Utilize el proceso del pago';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Bank debit';
	var $_PHPSHOP_PAYMENT_FORM_AO = 's�lo direcci�n';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Seleccione una direcci�n del env�o';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Seleccione un m�todo del env�o';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Selecci�n un m�dio del pago';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Compruebe los datos y confirme el pedido';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Por favor, seleccione el m�todo de env�o.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Por favor, seleccione otro m�todo de env�o.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Por favor,  seleccione un m�todo de pago.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Por favor, introduzca su n�mero de tarjeta de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Por favor, introduzca el nombre de la tarjeta de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'No es v�lido el numero de la tarjeta de cr�dito que ha introducido Usted.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Por favor, introduzca el mes de la caducidad de su tarjeta de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Por favor, introduzca el a�o de la caducidad de su tarjeta de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'No es v�lido la fecha de la caducidad.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Por favor, seleccione el direcci�n del env�o.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'El n�mero de la cuenta no es v�lido.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'No hay nada en su cesta!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERROR: Por favor, seleccione el transporte!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERROR: No se encuentra la tarifa de env�o que ha seleccionado!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERROR: No se encuentra su direcci�n del env�o!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERROR: No hay dato de CC....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERROR: No se encuentra el n�mero de la tarjeta de cr�dito!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Lo siento, pero el n�mero de CC que ha utilizado usted es el n�meo de prueba!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'No se encuentra la identificaci�n del usario en el base de datos!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'No ha ofrecido actualmente el titulo de su cuenta bancaria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'No ha ofrecido actualmente su IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'No ha ofrecido actualmente su n�mero de cuenta bancaria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'No ha ofrecido actualmente el n�mero de la agencia del banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'No ha ofrecido actualmente el nombre del banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Finalizaci�n del pedido necesita un paso v�lido!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Informaci�n del pago ha captado para el proceso de mas adelante.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'a�n no ha llegado al m�nimo pedido.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Nuestro el m�nimo pedido es:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pago en tarjeta del cr�dito';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Otras formas del pago';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Por favor, seleccione forma del pago:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'el m�nimo pedido para su tienda';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informaci�n de la cuenta bancaria';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'el n�mero de la cuenta';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'el n�mero de agencia del banco.';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'el nombre del banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'el titulo de la cuenta';
	var $_PHPSHOP_MODULES = 'Modulos';
	var $_PHPSHOP_FUNCTIONS = 'Funciones';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'productos especiales';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Notas adicionales sobre el pedido.<br>';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Nota del cliente';
	var $_PHPSHOP_INCLUDING_TAX = '($tax % I.V.A. Inclu�do)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Por favor, seleccione un articlo';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'articulo';
	var $_PHPSHOP_DOWNLOADS_TITLE = '�rea de descarga';
	var $_PHPSHOP_DOWNLOADS_START = 'empezar a descargar';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Por favor, introduzca la identificaci�n de descarga que ha obtenido en e-mail y haga clic \'Start Download\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Lo siento, ha superado el tiempo para la descarga';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Lo siento, pero su m�ximo n�mero de descarga se ha alcanzado.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Identificaci�n de descargar inv�lido!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'No ha podido mandar el mensaje a';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'el mensage se ha mandado a';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informaci�n de descarga';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'El archivo(s) que ha pedido usted ya est� listo para descargar';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Por favor, introduzca el siguiente identificaci�n(es) de descarga en nuestra �rea de descarga: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'el m�ximo n�mero de descargas para cada archivo es: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Descargar hasta  {terminar} los d�as despu�s de la primera descarga';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Cuestiones? Problemas?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informaci�n de descarga por  ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'se puede descargar este producto?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Gracias por su pago. La transacci�n est� aceptada.  Recibir� un E-mail de confirmaci�n para la transacci�n de PayPal.
        ahora puede continuar o ingresar a  <a href=http://www.paypal.com>www.paypal.com</a> para ver el detalle de la transacci�n.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Ha ocurrido un error durante de su proceso de transacci�n. No ha podido actualizado su pedido.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Gracias por comprar con nosotros. Listamos a continuaci�n.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Gracias por su confianza.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Preguntas? Problemas?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Se ha recibido el siguiente pedido';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Vea el pedido siguiendo el enlace a continuaci�n.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Las cantidades negativas no est�n admitidas.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Por favor, introduzca la cantidad correcta para este articulo.';
	var $_PHPSHOP_CART_STOCK_1 = 'La cantidad seleccionada excede el stock disponible. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Actualmente tenemos $producto_en_stock articulos disponibles. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Haga Click sobre este enlace para ponerse en lista de espera. ';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Por favor, seleccione un articulo espacial desde la p�gina del detalle!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nada';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Sr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Sra.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Defecto';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administraci�n de afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Listar afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista de afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'el nombre del afiliado';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Activar';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Tarifa';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total del mes';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Comisi�n del mes';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Lista de pedidos';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'a quien mandar el correo(* = todos)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Su correo electr�nico';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'El t�tulo';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Incluido actual estad�stica';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Tarifa de comisi�n';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Activar?';
	var $_PHPSHOP_DELIVERY_TIME = 'Normalmente entrega por';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informaci�n de entrega';
	var $_PHPSHOP_MORE_CATEGORIES = 'm�s categor�as';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilidad';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Ultimamente este producto no est� disponible.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Estar� disponible otra vez: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Resumen';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Estad�stica';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clientes';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Productos activos';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Productos inactivos';
	var $_PHPSHOP_STATISTIC_SUM = 'Suma';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'nuevos Pedidos';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'nuevos Clientes';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Por favor, introduzca su correo abajo para avisarle cuando el producto vuelva en el stock.
                                                                        No vamos a compartir, alquiler, vender ni utilizar este correo para ningun propisito excepto
                                                                        para avisarle cuando el troducto vuelva a estar en stock.<br /><br />Gracias!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Gracias por esperar! ! <br />En cuanto tengamos en nuestro stock, se lo avisaremos.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Avisame!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Vista para impresi�n';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Por favor, elija ENTRE Authorize.net O CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Estado del archive de configuraci�n:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'es posible escribir';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'no es posible escribir';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Rutas & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Sitio';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Env�o';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Finalizaci�n de pedido';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Descargar';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Pago';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Utilize s�lo como cat�logo';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Si marca esto, se inhabilitan todos los funcionamientos del carro.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Muestra precios';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = '�Muestra precios con IVA?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Pone la bandera si los clientes ven los precios con IVA o sin IVA';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Compruebe los precios marcados. Si utiliza catalogo funcional, algunos no quieren mostrar los precios en la p�gina.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Impuesto Virtual';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Esto determina que si los productos con el peso 0  tienen impuestos o no. Modifique ps_checkout.php->calc_order_taxable() para adaptarlo.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'modo de Impuesto:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Basado en la direcci�n del env�o';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Basado en la direcci�n del vendedor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Aqu� se determina que tarifa de impuesto se aplica.:<br />
              		<ul><li>Los del pa�s de la tienda</li><br/>
                    <li>Los del lugar del comprador.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Permitir m�ltiples tarifas de impuestos?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Marque esto si tiene productos que tienen la distinta tarifa de impuesto (e.j. 7% para  libros y comidas, 16% para otra cosa)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Restar el descuento del pago antes de IVA / Env�o?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Permitir Revisi�n de Cliente/Sistema de Valoraci�n';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Si es posible, permite clientes a <strong>Valorar productos</strong> y <strong>escribir revisiones</strong> sobre ellos. <br />
                                                                                as� como que clientes puedan escribir sus experiencias con el producto para otros clientes.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Pone la bandera restar el descuento para el pago seleccionado ANTES(revisado) o DESPU�S de impuesto y env�o.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Los clientes pueden dejar los datos de la cuenta bancaria?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Marque si sus clientes tendr�n la capacidad para proporcionar sus datos de la cuenta bancaria cuando registrandose a la tienda.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Los clientes pueden seleccionar estado/regi�n?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Marque si sus clientes tendr�n la capacidad para seleccionar los datos de estado/regi�n cunado registrandose a la tienda.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Tiene que estar de acuerdo con los condiciones del servicio?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Revisar si quiere que un comprador est� de acuerdo con sus condiciones de servicio antes de registrarse a la tienda.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = '�Comprobar el Stock?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Marcar si comprueba el nivel de stock cuando un usario agrega un articulo a la cesta de compra.
                                                                                          Si est� marcado, no se permitir� al usario a agregar m�s articulos en su cesta que est�n disponible en stock.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = '�Permite el programa de afiliados?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Esto permite el tracking de afiliados en shop-frontend. Permite si ha a�adido afiliados en backend..';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'formato del pedido en mail:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Texto mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Esto se determina en que formato se env�an sus correos de confirmaci�n del pedido:<br />
                                                                                        <ul><li>email en texto plano</li>
                                                                                        <li>email html con imagenes.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Permita Administraci�n en el front-end para usarios de non-backend.';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Con este ajuste usted puede permitir Fronted-Administraci�n para usarios que son
                                                                                              storeadmins, pero no pueden acceder a Mambo Backend (e.j. Registrado / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL para su sitio. Normalmente identifique a su Joomla URL (con / en el final!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'URL seguro para su sitio. (https - con / en el final!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL para componente VirtueMart. (con / en el final!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL para componente VirtueMart imagen directorio.(con / en el final!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'La ruta del directorio del componente VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'La ruta del directorio de las clases mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'La ruta del directorio del html de VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'La ruta del directorio para las im�genes de su VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Est� es la p�gina que ser� cargada por defecto.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Est� es la pag�na del defecto para mostrar el mensaje de error.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Est� es la p�gina del defecto para mostrar el mensaje de debug.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?  	   	Enciende debug output. Esto hace para mostrar DEBUGPAGE en el fondo de cada p�gina. Es muy util durante el desarrollo de la tienda porque le ense�a el contenido de carros, forma los values del campo, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Detalles';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Est� es la p�gina del defecto para mostrar los detalles de productos.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Plantilla del Categor�a';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Esto define la plantilla de la categor�a del defecto para mostrar productos en categor�a.<br />
                                                                                                      Puede crear nueva plantilla personalizando las plantillas existentes <br />
                                                                                                      (que se encuentran en el directorio <strong>COMPONENTPATH/html/templates/</strong> )';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'El n�mero defectuoso de productos en bajo';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Esto define el n�mero de productos en fila. <br />
                                                                                                      Ejemplo: Si usted pone 4, plantilla de categor�a mostrar� 4 productos por fila';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '"no image" image';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Saldr� esta imagen cuando no hay imagen de producto disponible.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'BUSCAR FILAS';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determine el n�mero de filas por p�gina cuando los resultados de la busquedad esten mostrado en la lista..';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'SEARCH COLOR 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Especifique el color de las filas numeradas impares en una lista del resultado.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'SEARCH COLOR 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Especifique el color de las filas numeradas pares en una lista del resultado..';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'MAXIMAS FILAS';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Ajuste el n�mero de filas para mostrar en la lista de pedido de la caja seleccionada.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Muestre el pie  ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Muestre la imagen del pie de powered-by-VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Elija el m�todo del env�o de su tienda.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'modulo est�ndar del env�o con configurado individual transporte y tarifa. <strong>RECOMENDADO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	modulo zona del env�o versi�n del pa�s 1.0<br />
                                                                                                            Para m�s informaci�n sobre este modulo por favor visite <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            para detalles o contacto <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'Herramientas de c�lculo de env�o de UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS c�digo de acceso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Su UPS c�digo de acceso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS identidad del usario';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ID del usario que ha obtenido de UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS contrase�a';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'La contrase�a para su cuenta de UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper Modulo. Compruebe s�lo si usted tiene la cuenta de Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Inhabilite la selecci�n del m�todo del env�o. Elije si sus clientes compran los productos descargable que no necesitan a mandar.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Contrase�a';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Su contrase�a para la cuenta de intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Su direcci�n de email para la cuenta de intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Codifican los datos guardados en base de datos con este key. Esto sigunifica que este archivo se debe protejer contra vistas siempre.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Permita la barra de Finalizar Compra';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Compruebelo, si quiere mostrar \'checkout-bar\' para los clientes durante el proceso de terminar ( 1 - 2 - 3 - 4 con gr�ficos).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Elije el proceso de Finalizar Compra para su tienda.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Est�ndar :</strong><br/>
               1. Petici�n de la direcci�n del env�o<br />
              2. Petici�n del m�todo del env�o<br />
              3. Petici�n del m�todo del pago<br />
              4. Complete Pedido';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Proceso 2:</strong><br/>
               1. Petici�n de la direcci�n del env�o<br />
              2. Petici�n del m�todo del pago<br />
              3. Complete Pedido';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Proceso 3:</strong><br/>
               1. Petici�n del m�todo del env�o<br />
              2. Petici�n del m�todo del pago<br />
              3. Complete Pedido';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Proceso 4:</strong><br/>
               1. Petici�n del m�todo del pago<br />
              2. Complete Pedido';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Activar Descargas';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Marque para permitir la capacidad de descargar. S�lo cuando quiere vender los productos que se pueden descargar.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Estado del pedido que permite descargar.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Seleccione el estado del pedido cual avisa al cliente sobre la desgarga v�a e-mail.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Estado de pedido que inhabilita las descargas.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Ajuste el estado del pedido que la descarga est� incapacitada para el cliente.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'La ruta f�sica a los archivos de la desbarga de clientes. (/ al final!)<br>
        <span class="message">Para la seguridad de su tienda: Si puede, por favor,  utilize el directorio donde quiera fuera de WEBROOT</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'M�xima Descarga';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Coloque el n�mero de descargas que est� hecho con un ID de descargar, (Para un pedido)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'La descarga caduca';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Ajuste el tiempo <strong>in seconds</strong> durante el cual se permite el cliente a descargar.
  Esta intervalo empieza con la primera descarga! Cuando se ha acabado el tiempo, el download-ID est� invalidado.<br />Nota : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Permite el pago de IPN v�a PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Compruebe si sus clientes le dejan a utilizar el sistema del pago de PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal payment email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Su direcci�n de email del trabajo para el pago de PayPal. Tmanbi�n ha utilizado como receptor_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Estado de pedido para transacciones acertadas';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Seleccione el estado en el que se encuentra el pedido, si el PayPal IPN ha sido correcto. Si usa la opci�n de venta de descargas:
  seleccione el estado que habilite la descarga (despu�s el cliente es autom�ticamente notificado de la descarga v�a email).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Estado del pedido para transacciones fallidas';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Seleccione un estado del pedido para transacciones fallidas de PayPal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = '�Permite pagos v�a PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Compruebe si sus clientes le dejan a utilizar el sistema del pago de Australian PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'el nombre de usario de PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'su cuenta de usario para PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = '�Permite el pago de Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Compruebe el uso de Authorize.net con VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Modo de prueba?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Seleccione \'S�\' durante la prueba. Seleccione \'No\' para permitir transacciones en real.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'S�';
	var $_PHPSHOP_ADMIN_CFG_NO = 'No';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Ingresar ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Esto e su Authorize.Net Ingresar ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Esto es su Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tipo de la Autentificaci�n';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Esto es Authorize.Net tipo de la autentificaci�n.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = '�Permite CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Comprueba el uso de CyberCash con phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT es CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key es un comerciante proporcionado por CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL es  URL proporcionado por Cybercash para el pago del seguro.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE es Cybercash el tipo autentificaci�n proporcionado por Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'B�squeda Avanzada';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Buscar en todas las categor�as';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Buscar en todas las caracter�stiacas del producto';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Buscar en el nombre del producto';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = '--';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'S�lo en la descripci�n del producto';
	var $_PHPSHOP_SEARCH_AND = 'y';
	var $_PHPSHOP_SEARCH_NOT = 'no';
	var $_PHPSHOP_SEARCH_TEXT1 = 'la primera drop-down-lista permite usted a seleccionar categor�a para limitar su b�squedad a.
        la segunsa drop-down-lista permite usted a limitar su b�squedad  para el pedazo particular de infoemaci�n del producto (e.j. Nombre).
        una vez usted ha seleccionado estos (o dejan el defecto TODO), insertar la palabra clave a b�squedad. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Puede refinar m�s su b�squedad por a�adiendo la segunda palabra clave y seleccionando Y o NO operador.
        Seleccionando Y significa ambos palabras deben presentar para el producto para que se muestre.
        Selecccionando NO significa el producto estar� mostrado s�lo cuando la primera plabra clave est� presente
        y la segunda no est�. ';
	var $_PHPSHOP_ORDERBY = 'Pedido por';
	var $_PHPSHOP_CUSTOMER_RATING = 'Media de puntuacion de los usuarios';
	var $_PHPSHOP_TOTAL_VOTES = 'Votos totales';
	var $_PHPSHOP_CAST_VOTE = 'Por favor, valore este producto';
	var $_PHPSHOP_RATE_BUTTON = 'Porcentaje';
	var $_PHPSHOP_RATE_NOM = 'Porcentaje';
	var $_PHPSHOP_REVIEWS = 'Opiniones de los usuarios';
	var $_PHPSHOP_NO_REVIEWS = 'No hay opiniones para este producto.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Se el primero en escribir una opini�n...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Por favor, registrese para escribir una opini�n.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Por favor, puntuar el producto para terminar la revisi�n!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Por favor, escriba unas m�s palabras para su valoraci�n. M�nimos caracteres permitidas: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Por favor, acortese su revisi�n. M�xima caracteres permitidas: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Escriba una revisi�n para este producto!';
	var $_PHPSHOP_REVIEW_RATE = 'Primero: Puntuar el producto. Por favor, seleccione una puntuaci�n entre 0 (peor) a 5 estrellas (mejor).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Ahora por favor, escriba una (corta) valoraci�n....(m�n. 100, m�x. 2000 caracteres) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Caracteres escritos: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Env�ar la valoraci�n';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Usted ya ha escrito una valoraci�n para este producto. Gracias.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Gracias por su valoraci�n.';
	var $_PHPSHOP_COMMENT = 'Comentario';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'A�adir/Editar Tipos de la tarjeta de cr�dito.';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nombre de la tarjeta de cr�dito';
	var $_PHPSHOP_CREDITCARD_CODE = 'Tarjeta de Credito - c�gigo corto';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tipo de la Tarjeta de Credito';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Lista de la Tarjeta de Credito';
	var $_PHPSHOP_UDATE_ADDRESS = 'Actualizar Direcci�n';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continuar Comprando';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Se ha grabado correctamente su pedido';
	var $_PHPSHOP_ORDER_LINK = 'Pinche en este enlace para ver los detalles del pedido.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'el estado de su n�mero de pedido {pedido_id} ha cambiado.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'el nuevo estado es:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Para ver detalles del pedido, por favor, siga este enlace (o c�pielo en su navegador):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'El cambio del estado del pedido: Su Pedido {Pedido_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Notificar Clientes?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Por favor, cambie el estado del pedido primero!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Precio Descuento en defecto Grupo de Comprador(en %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Una cantidad positiva X significa: Si el producto no tiene ningun precio asignado a ESTE Grupo de Comprador, el precio defecto est� disminuido por X %. Una cantidad negativa tiene el efecto opuesto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Producto Descount';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista de Producto Descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'A�adir/Editar Producto Descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'La cantidad de Descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'insertar la cantidad de descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tipo de descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Porcentaje';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Total';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = '�La cantidad ser� el porcentaje o el total?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Fecha de comienzo del descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Especifique el d�a cuando empieze el descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Fecha final de descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Especifique el d�a que se acaba el descuento';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Puede utilizar el formulario del descuento del producto para a�adir descuentos!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Ahorro';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Ver imagen grande';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Formato de moneda.';
	var $_PHPSHOP_CURRENCY_SYMBOL = 's�mbolo de moneda';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Tambi�n puede utilizar Entidades HTML aqu� (e.j. &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimales';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'El n�mero de decimales mostrado (puede ser 0)<br><b>realiza redondeando si valor tiene el diferente n�mero de decimales</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'S�mbolo de decimales';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Caracter usado como el s�mbolo de decimales.';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Separador de los millares';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Caracter usado para separar millares (puede ser v�cio)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Formato Positivo';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Mostrar formato usado para mostorar valores positivos.<br>(S�mb stands for currency symbol)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'formato negativo';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Mostrar formato usado para mostorar valores negativos.<br>(Symb stands for currency symbol)';
	var $_PHPSHOP_OTHER_LISTS = 'Listas de otros productos';
	var $_PHPSHOP_MORE_IMAGES = 'Ver M�s Imagenes';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Disponible Imagenes para';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Volver a detalles del producto';
	var $_PHPSHOP_FILEMANAGER = 'FileManager';
	var $_PHPSHOP_FILEMANAGER_LIST = 'FileManager::Lista de producto';
	var $_PHPSHOP_FILEMANAGER_ADD = 'A�adir Imagen/Archivo';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Imagenes asignadas';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = '�Puede descargar?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Archivos asignados (hojas de dato,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = '�publicado?';
	var $_PHPSHOP_FILES_LIST = 'FileManager::Imagen/Lista del archivo para';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nombre del archivo';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Titulo del archivo';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tipo del archivo';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Editar la entradad del archivo';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Imagen Completa';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Thumbnail';
	var $_PHPSHOP_FILES_FORM = 'Subir archivo para';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Archivo actual';
	var $_PHPSHOP_FILES_FORM_FILE = 'Archivo';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Imagen';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Subir a';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'defecto Producto paso de Imagen';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Especifique la localizaci�n del archivo';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'paso de descargar (e.j. para vender descargas!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Auto-Crear Thumbnail?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Est� publicado el archivo?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Titulo del archivo (que ven los clientes)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Descripci�n del archivo';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Archivo URL (optional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Por favor, proporcione un paso v�lido!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'El Thumbnail se ha creado con �xito!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = '�NO ha podido crear el Thumbnail!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Archivo/Imagen Error de subir';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'No se puede borrar el archivo de la imagen completa.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Imagen completa se ha borrado con �xito.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'No se puede borrar el archivo de Thumbnail (a lo mejor no lo existe): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'El Thumbnail se ha borrado con �xito.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'no ha podido borrar el archivo.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'El archivo se ha borrado con �xito.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Lo siento, pero no ha encontrado el archivo solicitado!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'no ha encontrado la imagen!';
	var $_PHPSHOP_COUPON_MOD = 'Cup�n';
	var $_PHPSHOP_COUPONS = 'Cupones';
	var $_PHPSHOP_COUPON_LIST = 'Lista de cup�n';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'El cup�n ya ha caducado.';
	var $_PHPSHOP_COUPON_REDEEMED = 'El cup�n ha caducado! Gracias.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Si tiene el c�digo del cup�n, por favor, ins�rtarlo abajo:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Entregar';
	var $_PHPSHOP_COUPON_CODE_EXISTS = '�Existe este c�digo de cup�n? Por favor, int�ntalo otra vez.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Actualizar Cup�n';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Haga clic al c�digo del cup�n para editarlo, o para borrar al c�digo del cup�n, seleccionelo y haga clik Borrar:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'C�digo';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Porcentaje o Total';
	var $_PHPSHOP_COUPON_TYPE = 'Tipo de Cup�n';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'El cup�n del regalo se borra despu�s de que fue utilizado para descontar un pedido. El cup�n permanente se puede utilizar tan a menudo como el cliente desea.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Cup�n del regalo';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Cup�n permamente';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valor';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Borrar c�digo';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = '�Est� seguro de que quiere borrar este c�digo del cup�n?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Por favor, complete todos los campos.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'El valor de cup�n debe ser el n�mero.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nuevo Cup�n';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'c�digo de cup�n';
	var $_PHPSHOP_COUPON_PERCENT = 'Porcentaje';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Valor';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'c�digo de cup�n guardado.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Guardar Cup�n';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Descuento del cup�n';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'No se encuentra el c�digo del cup�n. Por favor, intentalo otra vez.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Permite el uso del cup�n';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Si usted permite el uso del cup�n, permite sus clientes a completar los n�meros del cup�n para aumentar descuentos de los pedidos.';
	var $_PHPSHOP_FREE_SHIPPING = 'Env�o gratuito';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Env�o gratuito con este pedido!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'M�nima cantidad para env�o gratuito';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'La cantidad (INCLUIDO IVA!) cual es m�nimo para env�o gratuito
                                                (ejemplo: <strong>50</strong> significa env�o gratuito cuando el cliente paga
                                                con 50� (incluido iva) o m�s.';
	var $_PHPSHOP_YOUR_STORE = 'Su Tienda';
	var $_PHPSHOP_CONTROL_PANEL = 'Panel de Control';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Bot�n';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Mostrar o ocultar PDF - Bot�n en la tienda.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = '�Debe ponerse de auerdo con condiciones de servicio en CADA PEDIDO?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Comprueba si quiere el comprador que se ponga de acuerdo con su condiciones de servicio en CADA PEDIDO (antes del pedido).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Tipo de la cuenta bancaria';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Cuenta corriente';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'cuenta corriente business';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Ahorro';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = '�Facturas recurrentes?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Defina si quiere facturas recurrentes.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Error Interno tramitaci�n la petici�n a';
	var $_PHPSHOP_PAYMENT_ERROR = 'Fallo en el pago del proceso';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'El pago ha procesado con �xito.';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS no pudo procesar la petici�n de la tarifa del env�o.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'D�a(s) garantizados para entregar';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS M�todo de recoger';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = '�C�mo se entrega un paquete a UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = '�Empaquetado UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Seleccione el tipo del defecto de empaquetado.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = '�Entrega residencial?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residencial (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Entrega Comercial (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Cotizaci�n para residencial(RES) o Entrega Comercial (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'costo de tramitaci�n';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'su costo de tramitaci�n para este m�todo.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Clase de impuesto';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Utilize la siguiente clase de impuesto para el costo de env�o.';
	var $_PHPSHOP_ERROR_CODE = 'C�digo de Error';
	var $_PHPSHOP_ERROR_DESC = 'Error Descripci�n';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Mostrar / Cambiar Clave Transacci�n';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Mostrar/Cambiar la contrase�a/Clave Transacci�n';
	var $_PHPSHOP_TYPE_PASSWORD = 'Por favor, inserte su contrase�a de usario';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Contrase�a actual';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Actual Clave Transacci�n';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Se ha cambiado la Clave Transacci�n con �xito.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Solicitar/Capturar el valor del c�digo de la tarjeta del credito (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Compruebe para v�lido  CVV2/CVC2/CID vale (tres- o cuatro-n�mero d�gito detras de la tarjeta del credito, en el frente de American Express Cards)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Por favor, escriba tres- o cuatro- n�mero d�gito detras de su tarjeta del credito (en el frente de American Express Cards)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'necesita insertar su c�digo de la tarjeta del credito para proceder.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'CUALQUIER Completar el nombre del archivo';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTA: Aqu� puede completar el nombre del archivo. <strong>si complete el nombre del archivo aqu�, ningun archivos podr�n subir!!! Usted debe subirlo v�a FTP manualmente!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'O Subir el nuevo archivo';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Puede subir un archivo local. Este archivo ser� el pruducto que vende usted. un archivo existente ser� substituido.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Completar cualquier texto aqu� que estar� mostrado para el cliente en el detalle del producto. <br />e.j.: 24h, 48 hours, 3 - 5 d�as, en el pedido.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'O seleccionar una Imagen para mostrar en la p�gina del detalle (flypage).<br />Las imagenes residen en el directorio <i>/componentes/com_phpshop/shop_imagen/disponibilidad</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Lista de la atributos';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Ejemplos para el formato de la lista de la atributos:</h4>
        <span class="sectionname"><strong>Talla</strong>,XL[+1.99],M,S[-2.99]<strong>;Color</strong>,Rojo,Verde,Amarillo,colorcostoso[=24.00]<strong>;ycontinua</strong>,..,..</span>
        <h4>Ajustes del precio en l�nea para utilizar la modificaci�n avanzada de las atrobuciones:</h4>
        <span class="sectionname">
        <strong>+</strong> == A�adir esta cantidad para precio configurado.<br />
        <strong>-</strong> == Restar esta cantidad desde el precio configurado.<br />
        <strong>=</strong> == Poner los precios del producto a esta cantidad.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Lista de las aduanas atributos';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Ejemplos para el formato de la lista de la aduana atributo:</h4>
        <span class="sectionname"><strong>Name;Extras;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = 'Multiselecci�n: utilize STRG-Key y Rat�n';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = '�Habilitar pago eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Comprueba para usar eProcessingNetwork.com con VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = '�Modo Test?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Seleccione \'Yes\' mientras testea. Seleccione \'No\' para habilitar las transacciones reales.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Este es su eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Esta es su eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Tipo de autentificaci�n';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Este es el tipo de autentificaci�n de eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Productos relacionados';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Tu puedes crear las relaciones entre productos usando esta lista. Selecciona uno o m�s productos aqu� y despu�s estar�n en <strong>Productos Relacionados</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Adem�s, puedes estar interesado en este/estos producto(s)';
	var $_PHPSHOP_IMAGE_ACTION = 'Acci�n de imagen';
	var $_PHPSHOP_NONE = 'none';
	var $_PHPSHOP_ORDER_HISTORY = 'Historial de pedidos';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Comentarios';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Comentarios en tu pedido';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = '�Incluir este comentario?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Fecha a�adida';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = '�Cliente notificado?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Cambio de estado del pedido';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Username that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Password that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS shipping server, currently only works on live server!  Should be production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS shipping path';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS shipping path, should be /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Package Size';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Choices are Regular, Large, and Oversize.  This should be set to what you mostly mail and is based on the dimensions of the package.  Normally just Regular.';
	var $_PHPSHOP_USPS_PADDING = 'Percent to pad weight for shipping package. (Include %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Pad the shipping weight to allow additional weight for shipping box and packing. Using this allows you to put actual weight in your items weight settings.  Requires you to have the % sign included.  Example 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Handling Fee';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Your Handling fee for this shipping method.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Do you want to charge extra for users to ship USPS?  In dollar format, example 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Your International Handling fee for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Do you want to charge extra for users to ship Internationally with USPS.  This is on top of the normal Handling Fee.  Example 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Your International per pound rate for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Your International per pound rate for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'If Parcel Post is used and package is under 6oz & over 35lbs.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Is this package able to be handled by a machine.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS Domestic Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS Express Mail PO to Addressee';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'Standard USPS Express Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS Express Mail Flat Rate Envelope (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Select this if you allow shipping via the USPS Express Mail Flat Rate Envelope. Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS Priority Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'Standard USPS Priority Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'USPS Priority Mail Flat Rate Envelope (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Envelope.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS Priority Mail Flat Rate Box (11.25" x 8.75" x 6")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Box.  Default should be No as it could come up cheaper than actual shipping and might not fit in the box.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS Priority Mail Flat Rate Box (14" x 12" x 3.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Select this if you allow shipping via the USPS Priority Mail Flat Rate Box.  Default should be No as it could come up cheaper than actual shipping and might not fit in the box.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS First Class (Under 14oz)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Select this if you allow shipping via USPS First Class Mail.  This will only be displayed if package weight is under .88 pounds.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS Parcel post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'Standard USPS Parcel Post Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS Bound Printed Matter';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Select this if you allow shipping via USPS Bound Printed Matter.  Default should be No unless you ship bound magazines or newspapers in groups.  15 pound limit.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS Media Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Select this if you allow shipping via USPS Media Mail.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS Library Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Select this if you allow shipping via USPS Library Mail.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS International Mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS Global Express Gauranteed Document Service';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Select this if you allow shipping via USPS Global Express Gauranteed Document Service.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS Global Express Gauranteed Non-Document Service';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Select this if you allow shipping via USPS Global Express Gauranteed Non-Document Service.  Default should be No.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS Global Express Mail (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'Standard USPS Global Express Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS Global Priority Mail Flat Envelope Large';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Select this if you allow shipping via USPS Global Priority Mail Flat Envelope Large.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS Global Priority Mail Flat Envelope Small';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Select this if you allow shipping via USPS Global Priority Mail Flat Envelope Large.  Default should be No as it could come up cheaper than actual shipping and might not fit in the envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS Global Priority Mail - Variable Weight';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'Standard USPS Global Priority Mail.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS Airmail Letter Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Select this if you allow shipping via USPS Airmail Letter Post.  Default should be No as it could come up cheaper than actual shipping and might not fit in the letter.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS Airmail Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'Standard USPS Airmail Parcel Post.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS Economy Letter Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Select this if you allow shipping via USPS Economy Letter Post.  Default should be No as it could come up cheaper than actual shipping and might not fit in the letter.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS Economy Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Standard Economy Parcel Post.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS was not able to process the Shipping Rate Request.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Parametros';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tipo de producto';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista de tipos de producto';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'A�adir/Editar Tipo de Producto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Lista de Tipos de Producto para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Lista de tipos de producto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'A�adir Tipo de producto para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'A�adir Tipo de producto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tipo de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Nombre del Tipo de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Descripci�n del Tipo de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Parametros';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informaci�n del Tipo de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = '�Publicado?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Navegador de Tipos de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Visor de Tipos de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Par�metros del Tipo de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Par�metros del Tipo de Producto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = '�Tipo de Producto no encontrado!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nombre del par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Este nombre ser� el nombre de la columna de la tabla. Debe ser �nico y sin espacios ni acentos.<BR>Por ejemplo: material_general';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiqueta del par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Descripci�n del par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Tipo del par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integer';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Short Text';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Float';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Date & Time';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Date';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'YYYY-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Time';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Salto de linea';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Valores m�ltiples';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valores posibles';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = '�Mostrar valores posibles como selector multiple?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Si los valores posibles est�n establecidos, los parametros solo podr�n tener estos valores. Ejemplo de posibles valores:</strong><BR><span class="sectionname">Aluminio;Madera;Pl�stico;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valor por defecto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Para el valor por defecto del par�metro usa este formato:<ul><li>Fecha: YYYY-MM-DD</li><li>Hora: HH:MM:SS</li><li>Fecha & Hora: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unidades';
	var $_PHPSHOP_PARAMETER_SEARCH = 'B�squeda avanzada con respecto a los par�metros';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'B�squeda de par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = '�Buscar�s productos con respecto a valores t�cnicos?<BR>Puedes usar cualquier formulario:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Lo siento, no hay n�nguna categor�a para buscar.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Lo siento, no hay n�ngun tipo de producto con este nombre.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Es como';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'No es como';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'B�squeda de texto completo';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Todos los seleccionados';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Cualquiera seleccionado';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Resetear Formulario';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Buscar en la categor�a';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Cambiar par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Orden descendente';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Orden ascendente';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Par�metros de la categor�a';
	var $_PHPSHOP_FEE = 'Fee';
	var $_PHPSHOP_PRODUCT_CLONE = 'Duplicar producto';
	var $_PHPSHOP_CSV_SETTINGS = 'Preferencias';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimitador';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Car�cter delimitador de campos';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Subir un fichero CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Enviar un fichero CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Cargar de un directorio';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Cargar un fichero CSV del servidor';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exportar a un fichero CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Elegir el tipo de ordenaci�n de campos';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Ordenaci�n por defecto';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Mi ordenaci�n personalizada';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exportar todos los productos a un fichero CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Importaci�n de CSV / Exportaci�n de configuraci�n';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Grabar cambios';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nombre del campo';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valor por defecto';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Ordenaci�n del campo';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = '�Campo obligatorio?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importaci�n/Exportaci�n';
	var $_PHPSHOP_CSV_NEW_FIELD = 'A�adir nuevo campo';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentaci�n';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = '�Lo siento, pero el producto que ha solicitado no se ha encontrado!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Mostrar los productos que est�n fuera de stock';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Cuando este habilitado, los productos que est�n actualmente fuera de stock son mostrados. Por lo contrario, si esta deshabilitado no se muestran.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'N�mero {unidad}es en el paquete:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'N�mero {unidad}es en la caja:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Ocultar productos fuera de stock';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Productos en oferta y descuento';
	var $_PHPSHOP_FEATURED = 'Ofertas';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Volver al pa�s';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Volver al File manager';
	var $_PHPSHOP_ADD_STATE = 'A�adir estado';
	var $_PHPSHOP_LIST_STATES = 'Listado de estados';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'ofertado y descontado';
	var $_PHPSHOP_SHOW_FEATURED = 'Productos en oferta';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'productos con descuento';
	var $_PHPSHOP_FILTER = 'Filtro';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Volver a la p�gina principal';
	var $_PHPSHOP_EXPAND_TREE = 'Expandir el �rbol';
	var $_PHPSHOP_COLLAPSE_TREE = 'Contraer el �rbol';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Precio con descuento';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Aqu�, puedes sobreescribir el descuento rellenando un descuento especial para este producto.<br/>
La tienda crear� un nuevo registro de descuento para el precio con descuento.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Precio unitario';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = '�La tienda est� offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Si marcas esto, la Tienda mostrar� el mensaje de Offline.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Mensaje Offline';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefijo de tablas de la Tienda';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Este es <strong>vm</strong> por defecto';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = '�Mostrar la p�gina de navegaci�n en parte superior de la lista de productos?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Habilita  On o Off la p�gina de navegaci�n en la parte superior de la lista de productos en la parte p�blica.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = '�Mostrar el n�mero de productos?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = '�Mostrar el n�mero de productos en la categor�a como Categor�a (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Estilo del bot�n a�adir al carrito';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = '�Habilitar el retama�eado autom�tico del Thumbnail?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Si est� chequeado, habilitas el retama�eo autom�tico. Esto significa que todos los Thumbnail son retama�eados para establecer sus tama�os a los abajo suministrados,
        usando funciones PHP\'s GD2 (puedes compribar si tienes soporte GD2 navegando por "Sistema" -> "Informaci�n del Sistema" -> "PHP Info" -> gd. 
        La calidad del Thumbnail es mucho mejor que las imagenes retama�eadas por el navegador. Las imagenes generadas son colocadas en el directorio /shop_image/product/resized. Si la imagen ya ha sido retama�eada, esta copia ser� enviada al navegador, as� que n�nguna imagen es retama�ea una y otra vez.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Ancho Thumbnail';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'El <strong>ancho</strong> deseado para el Thumbnail.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Alto Thumbnail';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'El <strong>alto</strong> deseado para el Thumbnail.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = '�Por favor, selecciona al menos un Checkbox en la configuraci�n de Env�o!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configuraci�n de Precio';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Grupos de usuarios a los que ense�ar los precios';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'El grupo de usuarios seleccionado y todos los grupos con permisos superiores podr�n ver los precios de los productos.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Mostrar "(incluye XX% impuesto)" cuando sea aplicable?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Cuando este chequeado, los usuarios ver�n el texto "(incluye xx% impuesto)" cuando los precios son mostrados incl. tax.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = '�Mostrar la etiqueta del precio para el paquete?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Cuando este chequeado, el precio viene del precio unitario y los valores del paquete:
<strong>Precio por unidad (10 unidades)<strong><br/>
Cuando no este chequeado, la etiqueta precio se mostrar� como siempre: <strong>Precio: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'm�s Preferencias del Sistema';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Preferencias del Sistema';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Caracter�sticas de la Parte P�blica';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configuraci�n de Impuestos';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Cantidad Inicial';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Cantidad Final';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Caracter�sticas del Registro de Usuarios';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = '�Permitido el Registro de Usuarios?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = '�Necesidad de Activaci�n de las nuevas Cuentas de Usuario?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Usar el modo silencioso de registro de usuarios (oculto)?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Cuando este habilitado, los usuarios no necetar�n rellenar un nombre de usuario y contrase�a para una nueva cuenta. Sin embargo el email ser� usado como nuevo usuario y la contrase�a ser� generada aleatoriamente. Los detalles del registro son enviados por correo electr�nico al cliente.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hola %s,

Gracias por registrarte en %s. Tu cuenta de cliente ha sido creada.
Debes validarte en %s usando el siguiente nombre de usuario y contrase�a:

Nombre de Usuario - %s
Contrase�a - %s
';
	var $_PEAR_LOG_CRIT = 'Critical';
	var $_PEAR_LOG_ERR = 'Error';
	var $_PEAR_LOG_WARNING = 'Warning';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Alert';
	var $_PEAR_LOG_EMERG = 'Emergency';
	var $_PEAR_LOG_NOTICE = 'Notice';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = '�Habilitar PayFlow Pro payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Comprobar para usar VeriSign\'s PayFlow Pro con VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = '�Modo de pruebas?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Seleccionar \'Si\' mientras se prueba. Seleccionar \'No\' para habilitar las transacciones reales.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'Tax Total contains';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Orden por defecto de los productos';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Define por que campo del producto son ordenados por defecto en las p�ginas de navegaci�n';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Campos "Ordenado por" disponibles';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Elige los campos "Ordenado por " de la p�gina de navegaci�n. Cada uno define el m�todo de ordenaci�n para la p�gina de navegaci�n de productos. Si deseleccionas todas, el formulario de ordenado por no ser� mostrado.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Show a short note about your "Returns Policy" on the order confirmation page?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'In most european countries store owners are required by law to inform their customers about return and order cancellation policies. So this should be enabled in most cases.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Legal information text (short version).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Long version of the return policy (link to a content item).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Please add a new content item about the details of your return and order cancellation policy.
Afterwards you can select it here.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Returns Policy</h5>

You can cancel this order within two weeks after we have received it.
You can return new, unopened items from a cancelled order within 2 weeks after they have been 
delivered to you. Items should be returned in their original packaging.
For more information on cancelling orders and returning items, see the <a href="%s" onclick="%s" target="_blank">Our Returns Policy</a> page.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'European Union mode';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'The directory to store session data is not writable. Please correct this or contact your provider.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.\'';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Your browser does not accept cookies. If you want to put products into your cart and purchase them you need to enable cookies.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Skip first line';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Skip default value';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Overwrite existing data';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Include column headers';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Upload Settings';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Available Fields';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV upload messages:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Count';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Total';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV File Imported';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Updated';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Deleted';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Added';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Skipped';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Incorrect';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'The following fields are available for your use to import or export.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'The minimal required fields are product_sku, product_name and category_path. Except for the product_sku, the other two fields are not unique.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'The unique identifier for a product.<br /.>Values:<ul><li>Number</li><li>Letters</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'The name of the product.Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Add the the name "product_delete" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br /.>Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Long description for the product.<br />Values:<ul><li>Text: HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Short description for the product.<br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'The status if a product is published or not.<br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'The width of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'The height of the product.<br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Add the the name "product_available_date" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'The number of articles that you have in stock.<br /><br />Usage:<ol><li>Add the the name "product_in_stock" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a numeric value. If the field contains any other value, the default value will be used.</li></ol><br />Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours. You can specify the sizes and colours like this: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\\\'s price to this amount.</li></ul><br />Usage:<ol><li>Add the the name "attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Add the the name "product_availability" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\\\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'A custom attribute will add an input field to the product page with the description of the attribute supplied. Custom attributes are specified like this: Name;Extras;...<br />Usage:<ol><li>Add the the name "custom_attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Specify the number of items in the package.<br />Usage:<ol><li>Add the the name "product_packaging" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the package.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Specify the number of items in the box.<br />Usage:<ol><li>Add the the name "product_box" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the box.</li></ol><br /.>Values:<ul><li>Number</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Add the the name "product_discount" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_start" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_end" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br /.>Values:<ul><li>product_discount</li><ul><li>Number<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>';
	var $_ITEM_PREVIOUS = 'previous';
	var $_ITEM_NEXT = 'next';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Continue';
	var $_CMN_CANCEL = 'Cancel';
	var $_BUTTON_SEND_REG = 'Send Registration';
	var $_CONTACT_FORM_NC = 'Please make sure the form is complete and valid.';
	var $_CMN_REQUIRED = 'Required';
	var $_CMN_NEW = 'New';
	var $_CMN_SAVE = 'Save';
	var $_CMN_NEW_ITEM_LAST = 'New items default to the last place. Ordering can be changed after this item is saved.';
	var $_CMN_OPTIONAL = 'Optional';
	var $_E_APPLY = 'Apply';
	var $_E_IMAGES = 'Images';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Select a category';
	var $_E_REMOVE = 'Remove';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Page';
	var $_PN_OF = 'of';
	var $_PN_START = 'Start';
	var $_PN_PREVIOUS = 'Prev';
	var $_PN_NEXT = 'Next';
	var $_PN_END = 'End';
	var $_PN_DISPLAY_NR = 'Display #';
	var $_PN_RESULTS = 'Results';
	var $_CMN_PRINT = 'Print';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Back';
	var $_USERNAME = 'Username';
	var $_PASSWORD = 'Password';
	var $_BUTTON_LOGIN = 'Login';
	var $_REGISTER_UNAME = 'Username';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Please enter your name.';
	var $_REGWARN_UNAME = 'Please enter a user name.';
	var $_REGWARN_MAIL = 'Please enter a valid e-mail address.';
	var $_SEND_SUB = 'Account details for %s at %s';
	var $_ASEND_MSG = 'Hello %s,
	
	A new user has registered at %s.
	This email contains their details:
	
	Name - %s
	e-mail - %s
	Username - %s
	
	Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REG_COMPLETE = '<div class="componentheading">Registration Complete!</div><br />You may now login.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registration Complete!</div><br />Your account has been created and activation link has been sent to the e-mail address you entered. Note that you must activate the account by clicking on the activation link when you get the e-mail before you can login.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Last Updated';
	var $_NOT_AUTH = 'You are not authorized to view this resource.';
	var $_DO_LOGIN = 'You need to login.';
	var $_VALID_AZ09 = 'Please enter a valid %s.  No spaces, more than %d characters and contain 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Published';
	var $_CMN_UNPUBLISHED = 'Unpublished';
	var $_MORE = 'More...';
	var $_EMPTY_CATEGORY = 'This Category is currently empty.';
	var $_BUTTON_LOGOUT = 'Logout';
	var $_NO_ACCOUNT = 'No account yet?';
	var $_CREATE_ACCOUNT = 'Register';
	var $_REGWARN_PASS = 'Please enter a valid password.  No spaces, more than 6 characters and contain 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Please verify the password.';
	var $_REGWARN_VPASS2 = 'Password and verification do not match, please try again.';
	var $_USEND_MSG_ACTIVATE = 'Hello %s,



Thank you for registering at %s. Your account is created and must be activated before you can use it.

To activate the account click on the following link or copy-paste it in your browser:

%s



After activation you may login to %s using the following username and password:



Username - %s

Password - %s';
	var $_USEND_MSG = 'Hello %s,



Thank you for registering at %s.



You may now login to %s using the username and password you registered with.';
	var $_PROMPT_PASSWORD = 'Lost your Password?';
	var $_HI = 'Hi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'New User Details';
	var $_NEW_USER_MESSAGE = 'Hello %s,





You have been added as a user to %s by an Administrator.



This email contains your username and password to log into the %s



Username - %s

Password - %s





Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REMEMBER_ME = 'Remember me';
	var $_REGISTER_TITLE = 'Registration';
	var $_JAN = 'January';
	var $_FEB = 'February';
	var $_MAR = 'March';
	var $_APR = 'April';
	var $_MAY = 'May';
	var $_JUN = 'June';
	var $_JUL = 'July';
	var $_AUG = 'August';
	var $_SEP = 'September';
	var $_OCT = 'October';
	var $_NOV = 'November';
	var $_DEC = 'December';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'About';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Price list upload only';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Multiple prices upload';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Use column headers as configuration';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Collect debug information';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Show preview';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Regular upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Product type upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Product type parameters upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Product type cross reference upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Product type detail upload';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Empty database';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continue upload';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Cancel upload';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Steps to upload a CSV file</span>

										<ol>

										<li>Create a product list as a CSV file either with or without column headers.

										<br />Recommended is to use the text delimiter ~ (tilde) and the field delimiter ^ (caret).

										<br /><span style="font-weight: bold;">Example File:</span><br />

										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~

~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~

~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>

										<li>Setup the fields on the "Configuration" tab in the same order as the CSV file. The fields must match the exact place in the CSV file.

										<br />E.g. product_sku, product_desc, product_price, category_path<br />

										<br /><span style="font-weight: bold;">Minimum required information to add a product is:</span><br />

										product_sku<br />

										product_name<br />

										category_path<br />

										<br /><span style="font-weight: bold;">category_path</span> is a slash delimited string which begins

										with a top-level category and follows with sub-categories, e.g. <br />

										<div class="quote">category/sub-category_1/sub_category_2</div>

										<br />

										When the product has to be assigned to more than one category, you can

										provide all categories,<br />

										delimited by a <span style="font-weight: bold;">|</span>

										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>

										</li>

										<li>Choose the delimiters on the "Import/Export" tab.</li>

										<li>Choose the upload settings on the "Import/Export" tab.</li>

										<li>Choose either to upload the file from your local computer (Submit CSV File) or to use a local file (Load CSV File from Server).</li>

										<li>The import starts.</li>

										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Product Types</span><br /><br />

													To add product types, you need 4 CSV files. Each CSV file represents a part of the product type.

													<ul>

													<li><span style="font-weight: bold;">Product types</span><br />

													This CSV file contains the main product types and should look like this:

													<table border="1">

													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>

													<tr><td>Music track</td><td>Track</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music album</td><td>Album</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													</table>

													</li><br />

													<li><span style="font-weight: bold;">Product type parameters</span><br />

													This CSV file contains the parameters per product type and should look like this:

													<div style="width: 50%; overflow: auto; height: 100px;">

													<table border="1">

													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>

													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>

													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>

													</table>

													</div>

													<br />

													The product type parameter type can have several values, they are:

													<ul>

													<li>I: Integer</li>

													<li>T: Text</li>

													<li>S: Short Text</li>

													<li>F: Float</li>

													<li>C: Char</li>

													<li>D: Date & Time</li>

													<li>M: Time</li>

													<li>V: Multiple Values</li>

													<li>B: Break Line</li>

													</ul>

													</li><br />

													<li><span style="font-weight: bold;">Items per product type name</span><br />

													This CSV file contains the details per product type parameter name and should look like this:

													<table border="1">

													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>

													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>

													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>

													</table><br />

													Per product type name you need a seperate CSV file. The reason for this is that the column names for each CSV file is different because of the set of product type parameters.

													</li><br />

													<li><span style="font-weight: bold;">Product type cross reference to product SKU</span><br />

													This CSV file contains the link between a product type and a product SKU and should look like this:

													<table border="1">

													<tr><td>product_sku</td><td>product_type_name</td></tr>

													<tr><td>1234</td><td>Music artist</td></tr>

													<tr><td>5678</td><td>Music artist</td></tr>

													</table>

													</li>

													</ul><br />

													Procedure:<br />

													<ol>

													<li>Upload Product Types CSV file</li>

													<li>Upload Product Type Parameters CSV file</li>

													<li>Upload Product Type Items CSV file</li>

													<li>Upload Product Type Cross Reference CSV file</li>

													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Empty Database</span><br /><br />

													 <span style="color: #FF0000; font-size: 2em;">USE WITH CAUTION !!! NO RESTORE !!!</span><br /><br />

													 Emptying the database will remove ALL data in your database from the following tables:

													 <ul>

													 <li>products</li>

													 <li>products</li>

													 <li>product_price</li>

													 <li>product_mf_xref</li>

													 <li>product_attribute</li>

													 <li>category</li>

													 <li>category_xref</li>

													 <li>product_attribute_sku</li>

													 <li>product_category_xref</li>

													 <li>product_discount</li>

													 <li>product_type</li>

													 <li>product_type_parameter</li>

													 <li>product_product_type_xref</li>

													 </ul>

													 All but the first manufacturer is removed:

													 <ul>

													 <li>manufacturer</li>

													 </ul>

													 The following tables are completely deleted:

													 <ul>

													 <li>product_type_x</li>

													 </ul>

													 The x represents the number of the table. This number relates to the product types that are in the system. Since the product types table is completely emptied, these tables are removed. Uploading new product types will recreate the tables.<br /><br />

													 Procedure:

													 <ol>

													 <li>Choose "Empty Database" from the dropdown on the Upload Settings</li>

													 <li>Check "Collect debug information" if you want additional result information</li>

													 <li>Click "Submit CSV File" or "Load CSV File from Server". No need to enter a filename.</li>

													 <li>You are asked if you are sure you want to empty your database. Click OK if you are sure otherwise click Cancel</li>

													 <li>The database is now emptied or you are returned to the main screen depending on your previous choice</li>

													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Multiple prices upload</span><br /><br />

														    Procedure:

														    <ol>

														    <li>Create a CSV file that contains the following fields:

														    	<ul>

															<li>product_sku</li>

															<li>product_price</li>

															<li>product_currency</li>

															<li>price_quantity_start</li>

															<li>price_quantity_end</li>

															<li>price_delete</li>

															</ul>

														    See the Available Fields tab for what information each field contains. If you want to use the column headers as configuration, fill the first line with the column headers name.

														    </li>

														    <li>Either set the configuration fields, as mentioned in point 1 on the Configuration tab or if you added column headers to your CSV file, select "Use column headers as configuration" at the Upload Settings.

														    </li>

														    <li>Select "Multiple Prices Upload" at the Upload Settings</li>

														    <li>Optionally, choose "Show preview" and/or "Collect debug information"</li>

														    <li>Select a file to upload or to load from directory</li>

														    <li>Select "Submit CSV File" or "Load CSV File from Server" depending if you are uploading a file or loading a file from a directory</li>

														    <li>The prices will now be imported</li>

														    </ol><br /><br />

														    <span style="font-weight: bold;">Price delete</span><br />

														    Using the multiple prices import it is also possible to delete prices. A price is deleted when the following fields in the CSV file match the data in the database:

														    <ul>

														    <li>product_sku</li>

														    <li>product_price</li>

														    <li>product_currency</li>

														    <li>price_quantity_start</li>

														    <li>price_quantity_end</li>

														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'The price for a product without currency denominator.<br /><br />Usage:<ol><li>Select the name "product_price" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a price value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'The length of the product.<br /><br />Usage:<ol><li>Select the name "product_length" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'The measurement of length, width and height of the product.This can be inches, centimeters, etc.<br /><br />Usage:<ol><li>Select the name "product_lwh_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'The weight of the product.<br /><br />Usage:<ol><li>Select the name "product_weight" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'The measurement of weight of the product.This can be pounds, kilo, etc.<br /><br />Usage:<ol><li>Select the name "product_weight_uom" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Attributes are part of a product and are used by the child products to give them specifications.<br />Usage:<ol><li>Select the name "attributes" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attributes text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Attribute values are the values of child products that are linked to the attributes of the parent product.<br />Usage:<ol><li>Select the name "custom_attribute" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the attribute value text.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.<br />The values must be seperated by a pipe symbol (|). E.g.: attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'The day the discount for a product starts. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_start" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'The day the discount for a product ends. For more information see "product_discount".<br /><br />Usage:<ol><li>Select the name "product_discount_date_end" from the dropdown menu on the configuration screen.</li><li>Add the chosen columns to your CSV file with the date value.</li></ol><br />Values:<ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Skip first line</span><br />If the CSV file has a header line at the beginning, choose this option to skip that line. This prevents the header from being added to your database.</li><li><span style="font-weight: bold;">Overwrite existing data</span><br />When adding new products to your database, unchecking this option prevents any existing data to be replaced for products that already exist in your database. Default is to update product data.</li><li><span style="font-weight: bold;">Skip default value</span><br />On the configuration page, a default value can be specified in case the field is empty in the CSV file. Enabling this option, the import will not include the field for updating if there is no value in the CSV file.</li><li><span style="font-weight: bold;">Price list upload only</span><br />The Price list upload only is to be used if you are updating the prices of your products. The layout of the CSV is expected to be 2 columns:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Please note that it does NOT take into account the settings on the configuration page.<li><span style="font-weight: bold;">Use column headers as configuration</span><br />If the CSV file has column headers on the first line, this option can be used to use the column headers as the current configuration. The column headers should match one of the column names defined on the Available Tabs page. This configuration is on a per use basis, nothing is saved. Default values cannot be used with this option.</li><li><span style="font-weight: bold;">Show preview</span><br />Shows a 5 line preview of the file to be imported. The import can then be either cancelled or continued.</li><li><span style="font-weight: bold;">Collect debug information</span><br />In case of problems, use this option to see what happens during the import. At the end of the import a report will be generated with the steps and queries done during the import.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'The name of the manufacturer that is related to the product. This is used in combination with the manufacturer ID. If no manufacturer ID is specified, only the name is checked. New manufacturers will be created wiht incremental IDs. The process of adding/updating manufacturers follows the following guidelines:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>Usage:<ol><li>Select the name "manufacturer_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer name.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'The ID of the manufacturer that is related to the product and must be unique. This is used in combination with the manufacturer name. If no manufacturer name is specified only, the product manufacturer link will be added/updated. Adding/updating manufacturers follows the following process:<ol><li>Name exists, ID exists --> ID is updated if different</li><li>Name exists, ID does not exist --> New manufacturer created with increment ID</li><li>Name does not exist, ID exists --> Generic name added with existing ID</li><li>Name does not exist, ID does not exist --> Do nothing</li></ol>When no name or ID exists nothing is done to prevent numerous generic name manufacturers from being added.<br /><br />Usage:<ol><li>Select the name "manufacturer_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the manufacturer ID.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'A URL to either a picture or webpage of the product. When linked to a picture, the picture will be shown on the product details page.<br /><br />Usage:<ol><li>Select the name "product_url" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'The number of products that have been sold.<br /><br />Usage:<ol><li>Select the name "product_sales" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'When a product is set to be "On Special" it will be featured in the Featured Products block.<br />Usage:<ol><li>Select the name "product_special" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y.</li></ol><br />Values:<ul><li>Y: Yes, the product is on special</li><li>N: No, the product is not on special</li><li>Empty: Empty value, the product is not on special</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'The unit of the product as it is sold. I.e. box, bag, etc.<br />Usage:<ol><li>Select the name "product_unit" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y.</li></ol><br />Values:<ul><li>Text: No HTML allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Parent products are categorized according to the category path. The category path specifies in which category a product belongs. This only counts for main products not for child products since child products relate to parent products, not to categories. For child products this field must be left empty. The product_parent_sku must be empty for main products since they do not relate to any other parent product.<br /><br />Usage:<ol><li>Select the name "category_path" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the path.</li></ol><br />Values:<ul><li>Text: No HTML allowed<br />The category path must be seperated by a forward slash (/). E.g.: Furniture/Chairs/Teak</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'The product parent sku is needed to identify the parent of child products. Please note: the "category_path" field MUST be empty otherwise the product will be treated as a parent product.<br />Usage:<ol><li>Select the name "category_path" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the product_sku value of the parent product.</li></ol><br />Values:<ul><li>Numeric</li><li>Letters</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'The ID of the tax rate that you want to apply to the product<br />Usage:<ol><li>Select the name "product_tax_id" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the product_tax_id value of the appropiate tax.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'A different currency can be specified on a per product basis.<br />Usage:<ol><li>Select the name "product_currency" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value of the new currency.</li></ol><br />Values:<ul><li>Text: No HTML allowed<br />E.g.: EUR, USD, IDR</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'This is a custom page to show your product types. Leave this BLANK if you have no individual php-file for it.<br /><br />Usage:<ol><li>Select the name "product_type_browsepage" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'A description for your product type.<br /><br />Usage:<ol><li>Select the name "product_type_description" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'This is a custom page to show your product types. Leave this BLANK if you have no individual php-file for it.<br /><br />Usage:<ol><li>Select the name "product_type_flypage" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'The name of the product type. This name must be unique and without spaces.<br /><br />Usage:<ol><li>Select the name "product_type_name" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'A default value to show when there is nothing else filled in for the parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_default" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'A description for your product type parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_description" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'A label for your product type parameter.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_label" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Specify in which order the product parameter is to be displayed.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_order" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Set to yes to show possible parameter values as multiple select items<br /><br />Usage:<ol><li>Select the name "product_type_parameter_list_multiselect" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y or N.</li></ol><br />Values:<ul><li>Y: Yes, the values are multi select</li><li>N: No, the values are not multi select</li><li>Empty: Empty value, the values are not multi select</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'The name of the product type parameter. This name must be unique and without spaces as it will be the column name for the parameter details.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_type" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'This sets the type of parameter that will be used. There are a number of different values that can be used.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_type" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value.</li></ol><br />Values:<ul><li>Text:<ul>

													<li>I: Integer</li>

													<li>T: Text</li>

													<li>S: Short Text</li>

													<li>F: Float</li>

													<li>C: Char</li>

													<li>D: Date & Time</li>

													<li>M: Time</li>

													<li>V: Multiple Values</li>

													<li>B: Break Line</li>

													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'The unit the product type parameter refers to.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_unit" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'These are the values for the parameter and have to meet the requirement set by the parameter type.<br /><br />Usage:<ol><li>Select the name "product_type_parameter_values" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>This depends on the type set in the product_type_parameter_type field. All values have to be semi-colon (;) seperated.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'The status if a product type is published or not.<br /><br />Usage:<ol><li>Select the name "product_type_publish" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Y: Yes, the product type is published</li><li>N: No, the product type is not published</li><li>Empty: Empty value, the product type is published.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'The price_delete field is a special field. This field is used to determine if a price for a product should be deleted or not. This field is used when doing a multiple price upload. Before a price is deleted it needs to match the following fields:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Usage:<ol><li>Select the name "price_delete" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br />Values:<ul><li>Y: Yes, the price is to be deleted</li><li>N: No, the price is not to be deleted</li><li>Empty: Empty value, the price is not to be deleted</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'The quantity at which the mentioned price is available.<br /><br />Usage:<ol><li>Select the name "price_quantity_start" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values: Numeric</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'The quantity at which the mentioned price is no longer available.<br /><br />Usage:<ol><li>Select the name "price_quantity_end" from the dropdown menu on the configuration screen.</li><li>Add a column to your CSV file with a numeric value.</li></ol><br />Values: Numeric</li></ul>';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>