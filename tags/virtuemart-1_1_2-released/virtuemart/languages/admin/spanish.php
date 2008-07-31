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
	'PHPSHOP_USER_LIST_LBL' => 'Lista de Usuarios',
	'PHPSHOP_USER_LIST_USERNAME' => 'Nombre',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Nombre Completo',
	'PHPSHOP_USER_LIST_GROUP' => 'Grupo',
	'PHPSHOP_USER_FORM_LBL' => 'Informaci�n de Usuario',
	'PHPSHOP_USER_FORM_PERMS' => 'Permisos',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'Customer Number / ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Lista de Modulos',
	'PHPSHOP_MODULE_LIST_NAME' => 'Modulo',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Permisos',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funciones',
	'PHPSHOP_MODULE_FORM_LBL' => 'Informaci�n',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Etiqueta',
	'PHPSHOP_MODULE_FORM_NAME' => 'Nombre',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Permisos',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Encabezado',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Pie',
	'PHPSHOP_MODULE_FORM_MENU' => 'Menu?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Pedido',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Descripci�n',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'C�digo de Idioma',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Language File',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Lista de Funciones',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Nombre',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Nombre de clase',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'M�todo de Clase',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Permisos',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Informaci�n',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Nombre',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Nombre de Calse',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'M�todo de Clase',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Permisos',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Descripci�n',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Lista de monedas',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Nombre de moneda',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'C�digo de moneda',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Lista de Pa�ses',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Nombre de Pa�s',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'c�digo de Pa�s (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'c�digo de Pa�s (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'List State',
	'PHPSHOP_STATE_LIST_LBL' => 'State List for: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Add/Update a State',
	'PHPSHOP_STATE_LIST_NAME' => 'State Name',
	'PHPSHOP_STATE_LIST_3_CODE' => 'State Code (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'State Code (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Global',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Sitio',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Env�o',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Finalizaci�n de pedido',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Descargar',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Utilize s�lo como cat�logo',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Si marca esto, se inhabilitan todos los funcionamientos del carro.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Muestra precios',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Compruebe los precios marcados. Si utiliza catalogo funcional, algunos no quieren mostrar los precios en la p�gina.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Impuesto Virtual',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Esto determina que si los productos con el peso 0  tienen impuestos o no. Modifique ps_checkout.php->calc_order_taxable() para adaptarlo.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'modo de Impuesto:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Basado en la direcci�n del env�o',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Basado en la direcci�n del vendedor',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Aqu� se determina que tarifa de impuesto se aplica.:<br />
              		<ul><li>Los del pa�s de la tienda</li><br/>
                    <li>Los del lugar del comprador.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Permitir m�ltiples tarifas de impuestos?',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Marque esto si tiene productos que tienen la distinta tarifa de impuesto (e.j. 7% para  libros y comidas, 16% para otra cosa)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Restar el descuento del pago antes de IVA / Env�o?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Permitir Revisi�n de Cliente/Sistema de Valoraci�n',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Si es posible, permite clientes a <strong>Valorar productos</strong> y <strong>escribir revisiones</strong> sobre ellos. <br />
                                                                                as� como que clientes puedan escribir sus experiencias con el producto para otros clientes.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Pone la bandera restar el descuento para el pago seleccionado ANTES(revisado) o DESPU�S de impuesto y env�o.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => 'Tiene que estar de acuerdo con los condiciones del servicio?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Revisar si quiere que un comprador est� de acuerdo con sus condiciones de servicio antes de registrarse a la tienda.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => 'Comprobar el Stock?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Marcar si comprueba el nivel de stock cuando un usario agrega un articulo a la cesta de compra.
                                                                                          Si est� marcado, no se permitir� al usario a agregar m�s articulos en su cesta que est�n disponible en stock.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => 'Permite el programas de afiliados?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Esto permite el tracking de afiliados en shop-frontend. Permite si ha a�adido afiliados en backend..',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'formato del pedido en mail:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'Texto mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'HTML mail',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Esto se determina en que formato se env�an sus correos de confirmaci�n del pedido:<br />
                                                                                        <ul><li>email en texto plano</li>
                                                                                        <li>email html con imagenes.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Permita Administraci�n en el front-end para usarios de non-backend.',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Con este ajuste usted puede permitir Fronted-Administraci�n para usarios que son
                                                                                              storeadmins, pero no pueden acceder a Mambo Backend (e.j. Registrado / Editor).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'URL seguro para su sitio. (https - con / en el final!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'HOMEPAGE',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Est� es la p�gina que ser� cargada por defecto.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'ERRORPAGE',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Est� es la pag�na del defecto para mostrar el mensaje de error.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => 'DEBUG ?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => 'DEBUG?  	   	Enciende debug output. Esto hace para mostrar DEBUGPAGE en el fondo de cada p�gina. Es muy util durante el desarrollo de la tienda porque le ense�a el contenido de carros, forma los values del campo, etc.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'Detalles',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Est� es la p�gina del defecto para mostrar los detalles de productos.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Plantilla del Categor�a',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Esto define la plantilla de la categor�a del defecto para mostrar productos en categor�a.<br />
                                                                                                      Puede crear nueva plantilla por by customizing existing template files <br />
                                                                                                      (which reside in the directory <strong>COMPONENTPATH/html/templates/</strong> and begin with browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'El n�mero defectuoso de productos en bajo',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Esto define el n�mero de productos en fila. <br />
                                                                                                      Ejempro: Si usted pone 4, plantilla de categor�a mostrar� 4 productos por fila',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"no image" image',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Saldr� esta imagen cuando no hay imagen de producto disponible.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Muestre el pie  ',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Muestre la imagen del pie de powered-by-mambo-phpShop.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'modulo est�ndar del env�o con configurado individual transporte y tarifa. <strong>RECOMENDADO !</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => '  	modulo zona del env�o versi�n del pa�s 1.0<br />
                                                                                                            Para m�s informaci�n sobre este modulo por favor visite <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            para detalles o contacto <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Check this to enable the zone shipping module',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Inhabilite la selecci�n del m�todo del env�o. Elije si sus clientes compran los productos descargable que no necesitan a mandar.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Permita la barra de Finalizar Compra',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Compruebelo, si quiere mostrar \'checkout-bar\' para los clientes durante el proceso de terminar ( 1 - 2 - 3 - 4 con gr�ficos).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Elije el proceso de Finalizar Compra para su tienda.',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Activar Descargas',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Marque para permitir la capacidad de descargar. S�lo cuando quiere vender los productos que se pueden descargar.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Estado del pedido que permite descargar.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Seleccione el estado del pedido cual avisa al cliente sobre la desgarga v�a e-mail.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Estado de pedido que inhabilita las desgargas.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Ajuste el estado del pedido que la descarga est� incapacitada para el cliente.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'DOWNLOADROOT',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'La ruta f�sica a los archivos de la desbarga de clientes. (/ al final!)<br>
        <span class="message">Para la seguridad de su tienda: Si puede, por favor,  utilize el directorio dondequiera fuera de WEBROOT</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'M�xima Descarga',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Coloque el n�mero de descargas que est� hecho con un ID de descargar, (Para un pedido)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'La descarga caduca',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Ajuste el tiempo <strong>in seconds</strong> durante el cual se permite el cliente a descargar.
  Esta intervalo empieza con la primera descarga! Cuando se ha acabado el tiempo, el download-ID est� invalido.<br />Note : 86400s=24h.',
	'PHPSHOP_COUPONS' => 'Cupones',
	'PHPSHOP_COUPONS_ENABLE' => 'Permite el uso del cup�n',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Si usted permite el uso del cup�n, permite sus clientes a completar los n�meros del cup�n para aumentar descuentos de los pedidos.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'PDF - Bot�n',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Mostrar o oclutar PDF - Bot�n en la tienda.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => 'Debe ponerse de auerdo con condiciones de servicio en CADA PEDIDO?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Comprueba si quiere el comprador que se ponga de acuerdo con su condiciones de servicio en CADA PEDIDO (antes del pedido).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Show Products that are out of Stock',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => 'Shop is offline?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'If you check this, the Shop will display an Offline Message.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Offline Message',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Table Prefix for Shop Tables',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'This is <strong>vm</strong> per default',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => 'Show Page Navigation at the Top of the Product Listing?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Switches On or Off the Display of Page Navigation at the Top of the Product Listings in the Frontend.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => 'Show the Number of Products?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Show the Number of Products in a Category like Category (4)?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => 'Enable Dynamic Thumbnail Resizing?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'If checked, you enable dynamic Image Resizing. This means that all Thumbnail Images are resized to fit the Sizes you provide below,
        using PHP\'s GD2 functions (you can check if you have GD2 support by browsing to "System" -> "System Info" -> "PHP Info" -> gd. 
        The Thumbnail Image quality is much better than Images which were "resized" by the browser. The newly generated Images are put into the directory /shop_image/prduct/resized. If the Image has already been resized, this copy will be send to the browser, so no image is resized again and again.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Thumbnail Image Width',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'The target <strong>width</strong> of the resized Thumbnail Image.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Thumbnail Image Height',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'The target <strong>height</strong> of the resized Thumbnail Image.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Please select at least one Checkbox in the Shipping Configuration!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Price Configuration',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Membergroup to show prices to',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'The selected membergroup and all groups with higher permissions will be able to see the product prices.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => 'Show "(including XX% tax)" when applicable?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'When checked, users will see the text "(including xx% tax)" when prices are shown incl. tax.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => 'Show the price label for packaging?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'When checked, the price label is derived from the product\'s unit and packaging values:
<strong>Price per Unit (10 pieces)<strong><br/>
When not checked, price labels look just as usual: <strong>Price: $xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'more Core Settings',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Core Settings',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Frontend Features',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Tax Configuration',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'User Registration Settings',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => 'User registration allowed?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => 'New account activation necessary?',
	'VM_FIELDMANAGER_NAME' => 'Field name',
	'VM_FIELDMANAGER_TITLE' => 'Field title',
	'VM_FIELDMANAGER_TYPE' => 'Field type',
	'VM_FIELDMANAGER_REQUIRED' => 'Required',
	'VM_FIELDMANAGER_PUBLISHED' => 'Published',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Show in registration form',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Show in account maintenance',
	'VM_USERFIELD_FORM_LBL' => 'Add / Edit User Fields',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Default product sort order',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Defines by which field products are ordered by default on the browse pages',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Available "Sort-by" fields',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Choose the "Sort-by" fields for the browse page. Each one defines a sort method for the product browse page. If you deselect all, the Order-By-Form will not be shown.',
	'VM_GENERALLY_PREVENT_HTTPS' => 'Generally prevent https connections?',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'When checked, the shopper is redirected to the <strong>http</strong> URL when not browsing in those shop areas, which are forced to use https.',
	'VM_MODULES_FORCE_HTTPS' => 'Shop areas which must use https',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Here you can use a comma-separated list of shop core modules (See "Admin" => "List Modules"), which will be using https connections.',
	'VM_SHOW_REMEMBER_ME_BOX' => 'Show the "Remember me" checkbox on login?',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'When checked, the "remember me" box is shown on checkout. Not recommended when using shared ssl, because the customer could choose not to get a user cookie -  but that user cookie is required to keep the user logged in on both domains.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Comment Minimum Length',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'This is the amount of characters that MUST at least be written by a customer before the review can be submitted.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Comment Maximum Length',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'This is the maximum amount of characters that can be written by a customer in a comment.
',
	'VM_ADMIN_SHOW_EMAILFRIEND' => 'Show the "Recommend to a friend" link?',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'When enabled, a small link is displayed that allows the customer to send a recommendation email for a specific product.',
	'VM_ADMIN_SHOW_PRINTICON' => 'Show the "Print View" link?',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'When enabled, a small link is displayed that opens the current page in a new popup for printing it out.',
	'VM_REVIEWS_AUTOPUBLISH' => 'Auto-Publish Reviews?',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'If checked, reviews are automatically published after being posted. If not, the administrator must approve/publish them.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Global Proxy Settings',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL of the proxy server',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Example: <strong>http://10.42.21.1</strong>.<br />
Leave empty if you\'re not sure.</strong> This value will be used to connect to the internet from the shop server (e.g. when fetching shipping rates from UPS/USPS).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Proxy Port',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'The port used for communication with the proxy server (mostly <b>80</b> or <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Proxy username',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'If the proxy requires authentication please fill in your username here.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Proxy password',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'If the proxy requires authentication please fill in the correct password here.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => 'Show information about "Return Policy" on the order confirmation page?',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'Store owners are required by law to inform their customers about return and order cancellation policies in most european countries. So this should be enabled in most cases.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Legal information text (short version).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Link to the long version the return policy.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Please add a new content item about the details of your return and order cancellation policy.
Afterwards you can select it here.',
	'VM_SELECT_THEME' => 'Select the theme for your Shop',
	'VM_SELECT_THEME_TIP' => 'Themes allow styling and customizing your shop. <br />If no other themes than the "default" one are present you haven\'t installed more themes.',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => 'Enable content mambots / plugins in descriptions?',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'If enabled, product and category descriptions are parsed by all published content mambots/plugins.',
	'VM_CFG_CURRENCY_MODULE' => 'Select a currency converter module',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'This allows you to select a certain currency converter module. Such modules fetch exchange rates from a server and convert one currency into another.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'European Union mode',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => 'Keep Product Stock Level on Purchase?',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'When enabled, the stock level for a downloadable product is not lowered although it was purchased by customers.',
	'VM_USERGROUP_FORM_LBL' => 'Add/Edit a User Group',
	'VM_USERGROUP_NAME' => 'User Group Name',
	'VM_USERGROUP_LEVEL' => 'User Group Level',
	'VM_USERGROUP_LEVEL_TIP' => 'Important! A bigger number means <b>less</b> permissions. The <b>admin</b> group is <em>level 0</em>, storeadmin is level 250, users are level 500.',
	'VM_USERGROUP_LIST_LBL' => 'User Group List',
	'VM_ADMIN_CFG_COOKIE_CHECK' => 'Enable the Cookie Check?',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'If enabled, VirtueMart checks wether the browser of the customer accepts cookies or not. This is user-friendly, but it can have negative consequences on the Search-Engine-Friendlyness of your shop.',
	'VM_CFG_REGISTRATION_TYPE' => 'User Registration Type',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Choose the type of User Registration for your store!<br />
<strong>Normal Registration</strong><br />
This is the standard registration type where the customer must register and choose an username and password<br /><br />
<strong>Silent Registration</strong><br />
Silent Registration means the customer doesn\'t need to choose username and password, but those are created automatically during registration and sent to the provided email address.
<br /><br />
<strong>Optional Registration</strong><br />
Opotional Registration let\'s the customer choose wether he/she wants to create an account or not. If the customer wants to create an account, a username and password must be chosen.
<br /><br />
<strong>No Registration</strong><br />
Customers don\'t need to and are not able to register in this type of registration.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Normal Account Creation',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Silent Account Creation',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'Optional Account Creation',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'No Account Creation',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'Feed Configuration',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Enable Product Feeds',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'If enabled, customers can subscribe to a feed that provides the latest products (of all or of a certain category) in your store.',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Feed Cache Settings',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => 'Enable Cache?',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Cache Time (seconds)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'Caching speeds up the feed delivery and reduces the server load, because the feed is only created once and saved to a file.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => 'Include the Product Price into the description?',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'If enabled, the standard Product Price will be added to the Product Description',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => 'Include the Product Description?',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'If enabled, the Product Description will be added to the feed item',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => 'Include Images into the feed?',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'If enabled, the thumb images will be included with the feed item.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Type of Product Description',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Choose the type of product description that will be included with the feed.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => 'Limit the Description?',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Maximum Description Length',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'This is the maximum length of the product description for each feed item.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'Title of the Feed (the placeholder {storename} holds the name of your store)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'Title of a Category Feed (\'{catname}\' is the placeholder for the category name, {storename} holds the name of your store)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'Feed Title',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'Feed Title for Categories',
	'VM_ADMIN_SECURITY' => 'Security',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Security Settings',
	'VM_CFG_ENABLE_FEATURE' => 'Enable this Feature',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Here you can enable, disable and reorder certain Checkout Steps. You can show multiple Steps on one Page by giving them the same Step Number.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Flex Shipping. Fixed shipping cost to set base value of order with percentage of total sale above base value',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Shipping based on order totals. Fixed shipping costs based on values entered in configuration.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Show on Step: %s of the Checkout Process.',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Encryption Key',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'Used to safely store and retrieve sensible data (like credit card information) encrypted in the database.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => 'Store Credit Card Information?',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart stores the Credit Card Information of Customers encrypted in the database. This is done even if the Credit Card Information is processed by an external  server. <strong>If you don\'t need to process Credit Card Information manually after the order has been placed, you should turn this option off.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'URL only',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Hypertext and URL',
	'VM_FIELDS_TEXTFIELD' => 'Text Field',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Check Box (Single)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Check Box (Muliple)',
	'VM_FIELDS_DATE' => 'Date',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Drop Down (Single Select)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Drop Down (Multi-Select)',
	'VM_FIELDS_EMAIL' => 'Email Address',
	'VM_FIELDS_EUVATID' => 'EU VAT ID',
	'VM_FIELDS_EDITORAREA' => 'Editor Text Area',
	'VM_FIELDS_TEXTAREA' => 'Text Area',
	'VM_FIELDS_RADIOBUTTON' => 'Radio Button',
	'VM_FIELDS_WEBADDRESS' => 'Web Address',
	'VM_FIELDS_DELIMITER' => '=== Fieldset delimiter ===',
	'VM_FIELDS_NEWSLETTER' => 'Newsletter Subscription',
	'VM_USERFIELDS_READONLY' => 'Read-Only',
	'VM_USERFIELDS_SIZE' => 'Field Size',
	'VM_USERFIELDS_MAXLENGTH' => 'Max Length',
	'VM_USERFIELDS_DESCRIPTION' => 'Description, field-tip: text or HTML',
	'VM_USERFIELDS_COLUMNS' => 'Columns',
	'VM_USERFIELDS_ROWS' => 'Rows',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Move the customer into the following shopper group upon successful validation of the EU VAT ID',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Use the table below to add new values.',
	'VM_ADMIN_CFG_DISPLAY' => 'Display',
	'VM_ADMIN_CFG_LAYOUT' => 'Layout',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Theme Settings',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Parameters',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Encryption Function',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Here you can select the encryption function used to encrypt sensible information before being stored in the database. AES_ENCRYPT is recommended, because it is very secure. ENCODE doesn\'t provide real encryption.',
	'SAVE_PERMISSIONS' => 'Save Permissions',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'The configuration file for this template does not exist and can\'t be created. Configuration is not possible',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'The theme "{theme}" does not exist.',
	'VM_USERFIELDS_ADDVALUE' => 'Add a Value',
	'VM_USERFIELDS_TITLE' => 'Title',
	'VM_USERFIELDS_VALUE' => 'Value',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Never',
	'VM_USER_FORM_TAB_GENERALINFO' => 'General User Information',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'User Details',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Parameters',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Contact Information',
	'VM_USER_FORM_NAME' => 'Name',
	'VM_USER_FORM_USERNAME' => 'Username',
	'VM_USER_FORM_EMAIL' => 'Email',
	'VM_USER_FORM_NEWPASSWORD' => 'New Password',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Verify Password',
	'VM_USER_FORM_GROUP' => 'Group',
	'VM_USER_FORM_BLOCKUSER' => 'Block User',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Receive System Emails',
	'VM_USER_FORM_REGISTERDATE' => 'Register Date',
	'VM_USER_FORM_LASTVISITDATE' => 'Last Visit Date',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'No Contact details linked to this User:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'See \'Components -> Contact -> Manage Contacts\' for details.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Name',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Position',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Telephone',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Change Contact Details',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Logfile Configuration',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Enable logging?',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'If disabled, a "null" logger will be instantiated instead, so that the vmFileLogger can still be invoked without error.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Logfile Name',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Path to logfile. Must be reachable and writeable.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Logging level',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Log messages above this priority threshold will be ignored.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'TIP - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'DEBUG - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'INFO - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'NOTICE - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'WARNING - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'ERROR - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'CRITICAL - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'ALERT - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'EMERGENCY - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Logfile format',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Format for individual logfile line entries.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Logfile format fields can include any of the following: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'Cannot create or access log file.  Please contact the system or website administrator.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => 'Enable DEBUG mode?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => 'Limit by IP address?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => 'Limit debugging output to a specific client IP address?',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'Client IP address',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'If you enable this option and enter an IP address here, then debug output will be enabled ONLY for this client IP address.  Other clients will not see the debugging output.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Show in shipping form',
	'VM_USER_NOSHIPPINGADDR' => 'No shipping addresses.',
	'VM_UPDATE_CHECK_LBL' => 'VirtueMart Update Check',
	'VM_UPDATE_CHECK_VERSION_INSTALLED' => 'VirtueMart Version installed here',
	'VM_UPDATE_CHECK_LATEST_VERSION' => 'Latest VirtueMart Version',
	'VM_UPDATE_CHECK_CHECKNOW' => 'Check now!',
	'VM_UPDATE_CHECK_DLUPDATE' => 'Download Update',
	'VM_UPDATE_CHECK_CHECKING' => 'Checking...',
	'VM_UPDATE_CHECK_CHECK' => 'Check',
	'VM_UPDATE_NOTDOWNLOADED' => 'The Update Package could not be downloaded.',
	'VM_UPDATE_PREVIEW_LBL' => 'VirtueMart Update Preview',
	'VM_UPDATE_WARNING_TITLE' => 'General Warning',
	'VM_UPDATE_WARNING_TEXT' => 'Installing an Update for VirtueMart using a Patch Package can cause damage on your site 
if you have already modified some files of the VirtueMart component. The Patching Process will overwrite all the files listed below - it won\'t just apply smaller changes (diff), but replace the existing file with the new one. If you have modified VirtueMart files on your own, this can lead to inconsistent files and missing class/function dependencies.',
	'VM_UPDATE_PATCH_DETAILS' => 'Patch Details',
	'VM_UPDATE_PATCH_DESCRIPTION' => 'Description',
	'VM_UPDATE_PATCH_DATE' => 'Release Date',
	'VM_UPDATE_PATCH_FILESTOUPDATE' => 'Files to be updated',
	'VM_UPDATE_PATCH_STATUS' => 'Status',
	'VM_UPDATE_PATCH_WRITABLE' => 'Writable',
	'VM_UPDATE_PATCH_UNWRITABLE' => 'File/Directory not writable',
	'VM_UPDATE_PATCH_QUERYTOEXEC' => 'Queries to be executed on the Database',
	'VM_UPDATE_PATCH_CONFIRM_TEXT' => 'I have read the <a href="#warning">Warning</a> and I\'m sure to apply the Patch Package to my VirtueMart Installation now.',
	'VM_UPDATE_PATCH_APPLY' => 'Apply Patch now',
	'VM_UPDATE_PATCH_ERR_UNWRITABLE' => 'Not all files/directories which need to be updated are writable. Please correct the permissions first.',
	'VM_UPDATE_PATCH_PLEASEMARK' => 'Please mark the checkbox before you apply the Patch.',
	'VM_UPDATE_RESULT_TITLE' => 'Currently Installed Version',
	'VM_FIELDS_CAPTCHA' => 'Captcha Field (using com_securityimages)',
	'VM_FIELDS_AGEVERIFICATION' => 'Age Verification (Date Select Fields)',
	'VM_FIELDS_AGEVERIFICATION_MINIMUM' => 'Specify the minimum Age'
); $VM_LANG->initModule( 'admin', $langvars );
?>