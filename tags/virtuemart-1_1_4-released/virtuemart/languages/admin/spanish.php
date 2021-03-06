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
	'PHPSHOP_USER_LIST_LBL' => 'Lista de usuarios',
	'PHPSHOP_USER_LIST_USERNAME' => 'Nombre de usuario',
	'PHPSHOP_USER_LIST_FULL_NAME' => 'Nombre completo',
	'PHPSHOP_USER_LIST_GROUP' => 'Grupo',
	'PHPSHOP_USER_FORM_LBL' => 'Informaci�n de usuario',
	'PHPSHOP_USER_FORM_PERMS' => 'Permisos',
	'PHPSHOP_USER_FORM_CUSTOMER_NUMBER' => 'N�mero de cliente/ID',
	'PHPSHOP_MODULE_LIST_LBL' => 'Lista de modulos',
	'PHPSHOP_MODULE_LIST_NAME' => 'Modulo',
	'PHPSHOP_MODULE_LIST_PERMS' => 'Permisos de m�dulo',
	'PHPSHOP_MODULE_LIST_FUNCTIONS' => 'Funciones',
	'PHPSHOP_MODULE_FORM_LBL' => 'Informaci�n de m�dulo',
	'PHPSHOP_MODULE_FORM_MODULE_LABEL' => 'Etiqueta del m�dulo',
	'PHPSHOP_MODULE_FORM_NAME' => 'Nombre del m�dulo',
	'PHPSHOP_MODULE_FORM_PERMS' => 'Permisos del m�dulo',
	'PHPSHOP_MODULE_FORM_HEADER' => 'Encabezado del m�dulo',
	'PHPSHOP_MODULE_FORM_FOOTER' => 'Pie del m�dulo',
	'PHPSHOP_MODULE_FORM_MENU' => '�Mostrar m�dulo en el men� de administraci�n?',
	'PHPSHOP_MODULE_FORM_ORDER' => 'Mostrar pedido',
	'PHPSHOP_MODULE_FORM_DESCRIPTION' => 'Descripci�n del m�dulo',
	'PHPSHOP_MODULE_FORM_LANGUAGE_CODE' => 'C�digo de idioma',
	'PHPSHOP_MODULE_FORM_LANGUAGE_FILE' => 'Archivo de idioma',
	'PHPSHOP_FUNCTION_LIST_LBL' => 'Lista de funciones',
	'PHPSHOP_FUNCTION_LIST_NAME' => 'Nombre de funci�n',
	'PHPSHOP_FUNCTION_LIST_CLASS' => 'Nombre de clase',
	'PHPSHOP_FUNCTION_LIST_METHOD' => 'M�todo de clase',
	'PHPSHOP_FUNCTION_LIST_PERMS' => 'Permisos',
	'PHPSHOP_FUNCTION_FORM_LBL' => 'Informaci�n de funci�n',
	'PHPSHOP_FUNCTION_FORM_NAME' => 'Nombre de funci�n',
	'PHPSHOP_FUNCTION_FORM_CLASS' => 'Nombre de clase',
	'PHPSHOP_FUNCTION_FORM_METHOD' => 'M�todo de clase',
	'PHPSHOP_FUNCTION_FORM_PERMS' => 'Permisos de funci�n',
	'PHPSHOP_FUNCTION_FORM_DESCRIPTION' => 'Descripci�n de funci�n',
	'PHPSHOP_CURRENCY_LIST_LBL' => 'Lista de monedas',
	'PHPSHOP_CURRENCY_LIST_NAME' => 'Nombre de moneda',
	'PHPSHOP_CURRENCY_LIST_CODE' => 'C�digo de moneda',
	'PHPSHOP_COUNTRY_LIST_LBL' => 'Lista de pa�ses',
	'PHPSHOP_COUNTRY_LIST_NAME' => 'Nombre de pa�s',
	'PHPSHOP_COUNTRY_LIST_3_CODE' => 'C�digo de pa�s (3)',
	'PHPSHOP_COUNTRY_LIST_2_CODE' => 'C�digo de pa�s (2)',
	'PHPSHOP_STATE_LIST_MNU' => 'Lista de estado',
	'PHPSHOP_STATE_LIST_LBL' => 'Lista de estado para: ',
	'PHPSHOP_STATE_LIST_ADD' => 'Agregar/Actualizar estado',
	'PHPSHOP_STATE_LIST_NAME' => 'Nombre de estado',
	'PHPSHOP_STATE_LIST_3_CODE' => 'C�digo de estado (3)',
	'PHPSHOP_STATE_LIST_2_CODE' => 'C�digo de estado (2)',
	'PHPSHOP_ADMIN_CFG_GLOBAL' => 'Global',
	'PHPSHOP_ADMIN_CFG_SITE' => 'Sitio',
	'PHPSHOP_ADMIN_CFG_SHIPPING' => 'Env�o',
	'PHPSHOP_ADMIN_CFG_CHECKOUT' => 'Finalizaci�n de pedido',
	'PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS' => 'Descargar',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE' => 'Utilizar s�lo como cat�logo',
	'PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN' => 'Si marca esta opci�n, se inhabilitan todos los funcionamientos de la cesta de compras.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES' => 'Mostrar Precios',
	'PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN' => 'Marcar para mostrar precios. Si utiliza el cat�logo, algunos no quieren mostrar los precios en la p�gina.',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX' => 'Impuesto Virtual',
	'PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN' => 'Esto determina que si los productos con el peso cero tienen impuestos o no. Modifique ps_checkout.php->calc_order_taxable() para adaptarlo.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE' => 'Modo de Impuesto:',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP' => 'Basado en la direcci�n del env�o',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR' => 'Basado en la direcci�n del vendedor',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN' => 'Aqu� se determina que tarifa de impuesto se aplica.:<br />
              		<ul><li>Los del pa�s de la tienda</li><br/>
                    <li>Los del lugar del comprador.</li></ul>',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE' => 'Permitir m�ltiples tarifas de impuestos',
	'PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN' => 'Marque esto si tiene productos que tienen distinta tarifa de impuesto (e.j. 7% para  libros y comidas, 16% para otra cosa)',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE' => 'Restar el descuento del pago antes de IGV / Env�o?',
	'PHPSHOP_ADMIN_CFG_REVIEW' => 'Permitir revisi�n de cliente/sistema de valoraci�n',
	'PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN' => 'Si es posible, permite clientes a <strong>valorar productos</strong> y <strong>escribir revisiones</strong> sobre ellos. <br />
As� como, que clientes puedan escribir sus experiencias con el producto para otros clientes.<br />',
	'PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN' => 'Pone la marca restar el descuento para el pago seleccionado ANTES(revisado) o DESPU�S de impuesto y env�o.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS' => '�Tiene que estar de acuerdo con los condiciones del servicio?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN' => 'Revisar si quiere que un comprador est� de acuerdo con sus condiciones de servicio antes de registrarse a la tienda.',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK' => '�Comprobar el stock?',
	'PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN' => 'Marcar si comprueba el nivel de stock cuando un usuario agrega un articulo a la cesta de compras.
	Si est� marcado, no se permitir� al usuario agregar m�s articulos en su cesta de compras que esten disponibles en stock.',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE' => '�Permite el programa de afiliados?',
	'PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN' => 'Esto permite el tracking de afiliados en el frente de tienda. Permite si ha agregado afiliados en la administraci�n de la tienda..',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT' => 'Formato del pedido en E-mail:',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT' => 'E-mail de texto',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML' => 'E-mail HTML',
	'PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN' => 'Esto determina en que formato se env�an sus correos de confirmaci�n del pedido:<br />
                                                                                        <ul><li>E-mail en texto plano</li>
                                                                                        <li>E-mail html con im�genes.</li></ul>',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN' => 'Permite administraci�n en el frente de tienda para usuarios de NO-administraci�n.',
	'PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN' => 'Con este ajuste usted puede permitir administraci�n en el frente de tienda para usuarios que son Administradores de Tienda, pero no pueden acceder a la Administraci�n del Portal (e.j. Registrado / Editor).',
	'PHPSHOP_ADMIN_CFG_URLSECURE' => 'SECUREURL',
	'PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN' => 'URL seguro para su sitio. (https - con / en el final!)',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE' => 'P�gina de Inicio',
	'PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN' => 'Est� es la p�gina que ser� cargada por defecto.',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE' => 'P�gina de Error',
	'PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN' => 'Est� es la pag�na del defecto para mostrar el mensaje de error.',
	'PHPSHOP_ADMIN_CFG_DEBUG' => '�Depurar?',
	'PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN' => '�Depurar? Enciende el depurador. Esto se hace para mostrar P�gina de Depuraci�n en el fondo de cada p�gina. Es muy �til durante el desarrollo de la tienda porque le ense�a el contenido de cestas, forma los valores del campo, etc.',
	'PHPSHOP_ADMIN_CFG_FLYPAGE' => 'Detalles',
	'PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN' => 'Esta es la p�gina predeterminada para mostrar los detalles de productos.',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE' => 'Plantilla de categor�a',
	'PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN' => 'Esto define la plantilla de la categor�a predterminada para mostrar productos en categor�as.<br />
Puede crear nueva plantilla personalizando los archivos de la plantilla existente <br />
(Alojados en el directorio<strong>COMPONENTPATH/html/templates/</strong> y empiezan con browse_)',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW' => 'El n�mero predeterminado de productos en la fila',
	'PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN' => 'Esto define el n�mero de productos en fila. <br />
Ejemplo: Si usted pone 4, la plantilla de categor�a mostrar� 4 productos por fila',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE' => '"no image" imagen',
	'PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN' => 'Saldr� esta imagen cuando no hay imagen de producto disponible.',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION' => 'Mostrar el pi� de p�gina  ',
	'PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN' => 'Mostrar la imagen del pi� de p�gina de Patrocinado por VirtueMart.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD' => 'M�dulo est�ndar del env�o con configuraci�n individual de transporte y tarifa. <strong>�RECOMENDADO!</strong>',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE' => 'M�dulo de zona del env�o versi�n del pa�s 1.0<br />
                                                                                                            Para m�s informaci�n sobre este m�dulo por favor visite <a href="http://ZephWare.com">http://ZephWare.com</a><br />
                                                                                                            para detalles o contacto <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> POnha un check a esto para habilitar el m�dulo de zonas',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE' => 'Inhabilite la selecci�n del m�todo del env�o. Elija si sus clientes compran los productos descargables que no necesitan a mandar.',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR' => 'Permita la barra de Finalizar compra',
	'PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN' => 'Marque, si quiere mostrar \'checkout-bar\' para los clientes durante el proceso de terminar ( 1 - 2 - 3 - 4 con gr�ficos).',
	'PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS' => 'Elija el proceso de Finalizar compra para su tienda.',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS' => 'Activar descargas',
	'PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN' => 'Marque para permitir la capacidad de descargar. S�lo cuando quiere vender los productos que se pueden descargar.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS' => 'Estado del pedido que permite descargar.',
	'PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN' => 'Seleccione para habilitar capacidad de descarga. Solo si va a vender productos descargables.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS' => 'Estado del pedido que inhabilita las desgargas.',
	'PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN' => 'Ajuste el estado del pedido que la descarga est� incapacitada para el cliente.',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT' => 'Ruta de descarga',
	'PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN' => 'La ruta f�sica a los archivos de la descarga de clientes. (/ al final!)<br>
        <span class="message">Para la seguridad de su tienda: Si puede, por favor,  utilize el directorio donde quiera, fuera de WEBROOT</span>',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX' => 'Descarga m�xima',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN' => 'Coloque el n�mero de descargas que est� hecho con un ID de descarga, (Para un pedido)',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE' => 'La descarga caduca',
	'PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN' => 'Ajuste el tiempo <strong>en segundos</strong> durante el cual se permite el cliente a descarga.
  �Este intervalo empieza con la primera descarga! Cuando se ha acabado el tiempo, el download-ID es inv�lido.<br />Nota : 86400s=24h.',
	'PHPSHOP_COUPONS' => 'Cupones',
	'PHPSHOP_COUPONS_ENABLE' => 'Permite el uso del cup�n',
	'PHPSHOP_COUPONS_ENABLE_EXPLAIN' => 'Si usted permite el uso del cup�n, permite que sus clientes completen los n�meros del cup�n para aumentar descuentos de los pedidos.',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON' => 'Bot�n PDF',
	'PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN' => 'Mostrar o ocultar Bot�n PDF en la tienda.',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER' => '�Debe ponerse de acuerdo con condiciones de servicio en CADA PEDIDO?',
	'PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN' => 'Comprueba si quiere el comprador que se ponga de acuerdo con su condiciones de servicio en CADA PEDIDO (antes del pedido).',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS' => 'Mostrar productos sin stock',
	'PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN' => 'Si esta habilitado, Los productos sin stock son mostrados. De lo contrario est�n ocultos.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE' => '�La tienda est� desactivada?',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP' => 'Si pone un check a esto, la tienda mostrar� un mensaje de DESACTIVADA.',
	'PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG' => 'Mensaje de desactivaci�n',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX' => 'Prefijo de tabla para tablas de la tienda',
	'PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP' => 'Muestra esto <strong>vm</strong> por defecto',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP' => '�Mostrar navegaci�n de p�gina en el encabezado de la lista del producto?',
	'PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP' => 'Inicia o termina de mostrar navegaci�n de p�gina en el encabezado de la lista del producto.',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT' => '�Mostrar el n�mero de productos?',
	'PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP' => 'Mostrar el n�mero de productos en la categor�a como categor�a (4)?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING' => '�Habilitar el cambio de tama�o din�mico de la imagen en miniatura?',
	'PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP' => 'Si esta marcado, usted habilita el cambio de tama�o de la imagen en miniatura. Esto significa que usted ajustar� todas la im�genes en miniatura al tama�o especificado abajo,
        usiando PHP\'s GD2 funciones (Puede marcarlo si tene soporte GD2 explorando en "System" -> "System Info" -> "PHP Info" -> gd. 
        La calidad de la imagen en miniatura es mejor que las im�genes que fuern cambiadas de tama�o por el explorador. la im�genes resultantes son guardadas en el directorio /shop_image/prduct/resized. Si la imagen ya fue cambiada de tama�o, esta copia sera enviada al servidor, as� ninguna imagen es cambiada una y otra vez.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH' => 'Ancho de la imagen en miniatura',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP' => 'El <strong>ancho /strong> resultante de la imagen en miniatura.',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT' => 'Alto de la imagen en miniatura',
	'PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP' => 'El <strong>alto</strong> resultante de la imagen en miniatura.',
	'PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION' => 'Por favor seleccione al menos una casilla en la configuraci�n de env�o!',
	'PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION' => 'Configuraci�n de precio',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL' => 'Grupo de miembros al cual mostrar el precio',
	'PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP' => 'El grupo de miembros seleccionado y todos los grupos con permisos mayores podr�n ver los precios del producto.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX' => '�Mostrar "(incluye XX% de impuesto)" cuando se necesite?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP' => 'Cuando esta marcado, los usuarios ver�n el texto "(incluye xx% de impuesto)" cuando los precios muestran inc. impto.',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL' => '�Mostrar la etiqueta de precio para el empaque?',
	'PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP' => 'Cuando esta marcado, la etiqueta del precio es derivada de la unidad del producto y valor del empaquetamiento:
<strong>Precio por Unidad (10 piezas)<strong><br/>
Cuando no esta marcado, la estiquetas de precio se ven como siempre: <strong>Precio: $xx.xx</strong>',
	'PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS' => 'Mas configuraciones b�sicas',
	'PHPSHOP_ADMIN_CFG_CORE_SETTINGS' => 'Configuraciones b�sicas',
	'PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES' => 'Caracter�sticas de la tienda',
	'PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION' => 'Configuraci�n de la tienda',
	'PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS' => 'Configuraci�n de registro de usuario',
	'PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION' => '�Permite el registro de usuarios?',
	'PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION' => '�Activaci�n de nueva cuenta necesaria?',
	'VM_FIELDMANAGER_NAME' => 'Nombre de campo',
	'VM_FIELDMANAGER_TITLE' => 'T�tulo de campo',
	'VM_FIELDMANAGER_TYPE' => 'Tipo de campo',
	'VM_FIELDMANAGER_REQUIRED' => 'Requerido',
	'VM_FIELDMANAGER_PUBLISHED' => 'Publicado',
	'VM_FIELDMANAGER_SHOW_ON_REGISTRATION' => 'Mostrar en el formulario de registro',
	'VM_FIELDMANAGER_SHOW_ON_ACCOUNT' => 'Mostrar en el mantenimiento de cuenta',
	'VM_USERFIELD_FORM_LBL' => 'Agregar/Editar campos de usuario',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL' => 'Orden predeterminado de ordenamiento de producto',
	'VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP' => 'Define por que campo seran ordenados los productos de forma predeterminada en la pagina del explorador',
	'VM_BROWSE_ORDERBY_FIELDS_LBL' => 'Campos disponibles de  "Ordenar por" ',
	'VM_BROWSE_ORDERBY_FIELDS_LBL_TIP' => 'Escoja los campos de "Ordenar por" para la exploraci�n de la p�gina. Cada una especifica un m�todo de ordenamiento para el producto. Si deselecciona todos, el formulario de Ordenar por.. no ser� mostrado.',
	'VM_GENERALLY_PREVENT_HTTPS' => '�Prevenir conexiones htpps?',
	'VM_GENERALLY_PREVENT_HTTPS_TIP' => 'Cuando esta seleccionado, el comprador es redirigido a un URL <strong>http</strong> cuando no estan explorando area de las tiendas, que son forzadas a usar https.',
	'VM_MODULES_FORCE_HTTPS' => 'Areas de la tienda que deben de usar https',
	'VM_MODULES_FORCE_HTTPS_TIP' => 'Aqui puede utilizar una lista de m�dulos b�sicos de tienda por separador de comas (Vea "Admin" => "Lista M�dulos"), que ussara conexiones https .',
	'VM_SHOW_REMEMBER_ME_BOX' => '�Mostrar la casilla "Recordarme" en el ingreso de usuario?',
	'VM_SHOW_REMEMBER_ME_BOX_TIP' => 'Cuando esta marcado, la casilla "Recordarme" es mostrada en la salida. No es recomendado cuando se usa una ssl compartida, porque el usuario pude escojer no utilizar una cookie -  Pero esa cookie es necesaria para mantener al usuario inresado en el dominio.',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH' => 'Tama�o m�nimo del comentario',
	'VM_ADMIN_CFG_REVIEW_MINIMUM_COMMENT_LENGTH_TIP' => 'Este es el n�mero de caracteres que DEBEN ser escritos por el cliente antes de de poder enviar un comentario o revisi�n.',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH' => 'Tama�o m�ximo del comentario',
	'VM_ADMIN_CFG_REVIEW_MAXIMUM_COMMENT_LENGTH_TIP' => 'Este es el n�mero de caracteres que DEBEN ser escritos por el cliente antes de de poder enviar un comentario o revisi�n.',
	'VM_ADMIN_SHOW_EMAILFRIEND' => '�Mostrar enlace "Recomendar a un amigo"?',
	'VM_ADMIN_SHOW_EMAILFRIEND_TIP' => 'Cuando esta habilitado, un enlace peque�o es mostrado que permite al usuario mandar un e-mail con el producto mostrado.',
	'VM_ADMIN_SHOW_PRINTICON' => '�Mostrar el enlace "Vista de impresi�n"?',
	'VM_ADMIN_SHOW_PRINTICON_TIP' => 'Cuando esta habilitado, un enlace peque�o es mostrado que abre la p�gina actual en una nueva ventana para ser impresa.',
	'VM_REVIEWS_AUTOPUBLISH' => '�Auto-Publicar revisiones?',
	'VM_REVIEWS_AUTOPUBLISH_TIP' => 'Cuando esta habilitado, Las revisiones son publicadas de forma inmediata luego de ser enviadas. Si no, el administrador debe aprobarlas y/o publicarlas.',
	'VM_ADMIN_CFG_PROXY_SETTINGS' => 'Configuraci�n Global del Proxy',
	'VM_ADMIN_CFG_PROXY_URL' => 'URL del servidor Poxy',
	'VM_ADMIN_CFG_PROXY_URL_TIP' => 'Ejemplo: <strong>http://10.42.21.1</strong>.<br />
Deje en blanco si no est� seguro.</strong> Este valor ser� usado para conectar a internet desde el servidor de la tienda (e.j. cuando busque precios de env�o de servicios externos como UPS/DHL).',
	'VM_ADMIN_CFG_PROXY_PORT' => 'Puerto Proxy',
	'VM_ADMIN_CFG_PROXY_PORT_TIP' => 'El puerto es usado para la comunicaci�n con el puerto proxy (mostly <b>80</b> or <b>8080</b>).',
	'VM_ADMIN_CFG_PROXY_USER' => 'Nombre de Usuario Proxy',
	'VM_ADMIN_CFG_PROXY_USER_TIP' => 'Si el Proxy requiere autentificaci�n por favor ingrese su nombre de usuario aqu�.',
	'VM_ADMIN_CFG_PROXY_PASS' => 'Contrase�a Proxy',
	'VM_ADMIN_CFG_PROXY_PASS_TIP' => 'Si el Proxy requiere autentificaci�n por favor ingrese su contrase�a correcta aqu�.',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO' => '�Mostrar informaci�n acerca de "Pol�tica de Devoluciones" en la p�gina de confirmaci�n de la orden?',
	'VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP' => 'Los due�os de tienda estan obligados por ley de informar a sus clientes acerca de las pol�ticas de devoluciones y cancelaci�n en muchos pa�ses de Europa. As� que esto debe estar activado en muchos casos.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT' => 'Texto de Informaci�n Legal (versi�n corta).',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP' => 'Este texto instruye a sus clientes acerca de su pol�tica de devoluci�n y cancelaciones. es mostrada en la �ltima p�gina de la orden, justo encima del bot�n "Confirmar Orden".',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK' => 'Enlace a la versi�n extendida de la pol�tica de devoluciones.',
	'VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP' => 'Por favor agregue un nuevo contenido para la pol�tica de cancelaci�n y devoluciones.
Despu�s podr� seleccionarlo aqu�.',
	'VM_SELECT_THEME' => 'Seleccione la plantilla para su tienda',
	'VM_SELECT_THEME_TIP' => 'Las plantillas permiten personalizar su tienda. <br />Si no hay m�s plantillas que "predeterminada" usted no ha instalado m�s plantillas.',
	'VM_CFG_CONTENT_PLUGINS_ENABLE' => '�Habilitar plugins de contenido en las descripciones?',
	'VM_CFG_CONTENT_PLUGINS_ENABLE_TIP' => 'Si esta habilitado, las descripciones de productos y categor�as son pasadas por todos los plugins instalados.',
	'VM_CFG_CURRENCY_MODULE' => 'Seleccione un m�dulo de conversi�n de moneda',
	'VM_CFG_CURRENCY_MODULE_TIP' => 'Esto le permite seleccionar alg�n m�dulo de conversi�n de moneda. Estos m�dulos buscan una conversi�n de un servidor para publicarlo en otro.',
	'PHPSHOP_ADMIN_CFG_TAX_MODE_EU' => 'Modo de Uni�n Europea',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL' => '�Mantener el nivel de stock en la compra?',
	'VM_ADMIN_CFG_DOWNLOAD_KEEP_STOCKLEVEL_TIP' => 'Cuando esta activado, el nvel de stock para un producto descargable no es reducido cuando sea comprado por un cliente.',
	'VM_USERGROUP_FORM_LBL' => 'Agregar/Editar un grupo de usuario',
	'VM_USERGROUP_NAME' => 'Nombre de grupo de usuario',
	'VM_USERGROUP_LEVEL' => 'Nivel de grupo de usuario',
	'VM_USERGROUP_LEVEL_TIP' => '�Importante! un n�mero grande significa <b>menos</b> permisos. El grupo <b>admin</b> es <em>nivel 0</em>, storeadmin es nivel 250, usuarios son nivel 500.',
	'VM_USERGROUP_LIST_LBL' => 'Lista de grupos de usuarios',
	'VM_ADMIN_CFG_COOKIE_CHECK' => '�Habilitar la verificaci�n de Cookie?',
	'VM_ADMIN_CFG_COOKIE_CHECK_EXPLAIN' => 'Si esta habilitado, VirtueMart verifica si el navegador del cliente acepta cookies o no. esto es usuario amigable, pero puede tener consecuencias negativas en el motor de b�squeda de su tienda.',
	'VM_CFG_REGISTRATION_TYPE' => 'Tipo de registro de usuario',
	'VM_CFG_REGISTRATION_TYPE_TIP' => 'Escoja el tipo de registro de usuario de su tienda!<br />
<strong>Registro normal</strong><br />
Este es el tipo de registro en donde el cliente debe registrarse y escoger un nombre de usuario y contrase�a<br /><br />
<strong>Registro silencioso</strong><br />
El usuario no necesita escoger un nombre de usuario y contrase�a, pero estos son creados auom�ticamente y enviados al correo electr�nico del indicado en el registro.
<br /><br />
<strong>Registro opcional</strong><br />
Permite al usuario escoger si desea crear una cuenta o no.
<br /><br />
<strong>Sin Registro</strong><br />
Los clientes no necesitan ni pueden registrarse en esta opci�n.',
	'VM_CFG_REGISTRATION_TYPE_NORMAL_REGISTRATION' => 'Creaci�n normal de cuenta',
	'VM_CFG_REGISTRATION_TYPE_SILENT_REGISTRATION' => 'Creaci�n silenciosa de cuenta',
	'VM_CFG_REGISTRATION_TYPE_OPTIONAL_REGISTRATION' => 'Creaci�n opcional de cuenta',
	'VM_CFG_REGISTRATION_TYPE_NO_REGISTRATION' => 'Sin creaci�n de cuenta',
	'VM_ADMIN_CFG_FEED_CONFIGURATION' => 'Configuraci�n de notificaciones',
	'VM_ADMIN_CFG_FEED_ENABLE' => 'Habilitar notificaci�n de productos',
	'VM_ADMIN_CFG_FEED_ENABLE_TIP' => 'Si esta habilitado, el cliente se puede suscribir a una notificaci�n que provee los ultimos productos agregados (de todos o algunas categor�as) de la tienda.',
	'VM_ADMIN_CFG_FEED_CACHE' => 'Notificaci�n de configuraci�n de Cache',
	'VM_ADMIN_CFG_FEED_CACHE_ENABLE' => '�Habilitar Cache?',
	'VM_ADMIN_CFG_FEED_CACHETIME' => 'Tiempo de Cache (segundos)',
	'VM_ADMIN_CFG_FEED_CACHE_TIP' => 'El cache minimiza el tiempo de carga del servidor, porque la notificaci�n es creada solo una vez y guardada en un archivo log.',
	'VM_ADMIN_CFG_FEED_SHOWPRICES' => '�Incluir el precio del producto en la descripci�n?',
	'VM_ADMIN_CFG_FEED_SHOWPRICES_TIP' => 'Cuando esta habilitado, El precio del producto ser� agregado a ala descripci�n del mismo',
	'VM_ADMIN_CFG_FEED_SHOWDESC' => '�Incluir descripci�n del producto?',
	'VM_ADMIN_CFG_FEED_SHOWDESC_TIP' => 'Cuando est� habilitado, la descpci�n del producto sera agregada al art�culo de notificaci�n',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES' => '�Incluir im�genes en la notificaci�n?',
	'VM_ADMIN_CFG_FEED_SHOWIMAGES_TIP' => 'Cuando esta habilitado, las im�genes en miniatura sean incluidas en la notificaci�n.',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE' => 'Tipo de descripci�n del producto',
	'VM_ADMIN_CFG_FEED_DESCRIPTION_TYPE_TIP' => 'Escoja el tipo de descripci�n del producto que sera incluida con la notificaci�n.',
	'VM_ADMIN_CFG_FEED_LIMITTEXT' => '�Limitar la descripci�n?',
	'VM_ADMIN_CFG_FEED_MAX_TEXT_LENGTH' => 'Tama�o m�ximo para la descripci�n',
	'VM_ADMIN_CFG_MAX_TEXT_LENGTH_TIP' => 'Este es el tama�o m�ximo para la descripci�n en cada art�culo de notificaci�n.',
	'VM_ADMIN_CFG_FEED_TITLE_TIP' => 'T�iulo de la notificaci�n (el localizador {storename} mantiene el nombre de su tienda)',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES_TIP' => 'T�tulo de la categor�a de la notificaci�n (\'{catname}\' es el localizador para el nombre de la categor�a, {storename} mantiene el nombre de su tienda)',
	'VM_ADMIN_CFG_FEED_TITLE' => 'T�tulo de Notificaci�n',
	'VM_ADMIN_CFG_FEED_TITLE_CATEGORIES' => 'T�tulo de notificaci�n para categor�as',
	'VM_ADMIN_SECURITY' => 'Seguridad',
	'VM_ADMIN_SECURITY_SETTINGS' => 'Configuraci�n de Seguridad',
	'VM_CFG_ENABLE_FEATURE' => 'Habilitar esta opci�n',
	'VM_CFG_CHECKOUT_SHOWSTEP_TIP' => 'Aqui puede usted habiltar, deshabilitar y reordenar algunos pasos para la compra. Puede mostrar pasos m�ltiples en una p�gina simplemente d�ndoles el mismo n�mero de paso.',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_FLEX' => 'Env�o FLEX. Costo fijo de env�o para dar el precio base de la orden con porcentaje de venta total encima del valor base',
	'PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_SHIPVALUE' => 'Env�o basado en los totales de la orden. Valores fijos de env�o son ingresados en la configuraci�n.',
	'VM_CFG_CHECKOUT_SHOWSTEPINCHECKOUT' => 'Mostrar en el Paso: %s del Proceso de Compra.',
	'VM_ADMIN_ENCRYPTION_KEY' => 'Llave Encriptada',
	'VM_ADMIN_ENCRYPTION_KEY_TIP' => 'Usada para guardar y recibir informaci�n sensible (como informaci�n de tarjetas de cr�dito) encriptadas en la base de datos.',
	'VM_ADMIN_STORE_CREDITCARD_DATA' => '�Guardar informaci�n de tarjetas de cr�dito?',
	'VM_ADMIN_STORE_CREDITCARD_DATA_TIP' => 'VirtueMart guarda la informaci�n de las tarjetas de cr�dito de los clientes en su base de datos de manera encripatada. Esto se realiza inclusive si la transacci�n de la tarjeta de cr�dito es procesada por servidores externos. <strong>Si no necesita procesar de manera manual informaci�n de la tareta de cre�dito despu�s de ser procesada la orden, deber�a apagar esta opci�n.</strong>',
	'VM_USERFIELDS_URL_ONLY' => 'solo URL',
	'VM_USERFIELDS_HYPERTEXT_URL' => 'Hypertexto y URL',
	'VM_FIELDS_TEXTFIELD' => 'Campo de Texto',
	'VM_FIELDS_CHECKBOX_SINGLE' => 'Casilla de Verificaci�n (Unica)',
	'VM_FIELDS_CHECKBOX_MULTIPLE' => 'Casilla de Verificaci�n (M�ltiple)',
	'VM_FIELDS_DATE' => 'Fecha',
	'VM_FIELDS_DROPDOWN_SINGLE' => 'Lista Despegable (Unica Selecci�n)',
	'VM_FIELDS_DROPDOWN_MULTIPLE' => 'Lista Despegable (Multi-Selecci�n)',
	'VM_FIELDS_EMAIL' => 'Direcci�n E-mail',
	'VM_FIELDS_EUVATID' => 'EU VAT ID',
	'VM_FIELDS_EDITORAREA' => 'Editor de area de texto',
	'VM_FIELDS_TEXTAREA' => 'Area de Texto',
	'VM_FIELDS_RADIOBUTTON' => 'Bot�n de Radio',
	'VM_FIELDS_WEBADDRESS' => 'Direcci�n Web',
	'VM_FIELDS_DELIMITER' => '=== delimitador de campo ===',
	'VM_FIELDS_NEWSLETTER' => 'Suscripci�n al bolet�n de noticias',
	'VM_USERFIELDS_READONLY' => 'Solo Lectura',
	'VM_USERFIELDS_SIZE' => 'Tama�o de Campo',
	'VM_USERFIELDS_MAXLENGTH' => 'Tama�o M�ximo',
	'VM_USERFIELDS_DESCRIPTION' => 'Descripci�n, ayuda de campo: texto o HTML',
	'VM_USERFIELDS_COLUMNS' => 'Columnas',
	'VM_USERFIELDS_ROWS' => 'Filas',
	'VM_USERFIELDS_EUVATID_MOVESHOPPER' => 'Mover al cliente al siguiente grupo de compradores despu� dela verificaci�n exitosa de EU VAT ID',
	'VM_USERFIELDS_ADDVALUES_TIP' => 'Use la tabla debajo para agregar nuevos valores.',
	'VM_ADMIN_CFG_DISPLAY' => 'Mostrar',
	'VM_ADMIN_CFG_LAYOUT' => 'Estilo',
	'VM_ADMIN_CFG_THEME_SETTINGS' => 'Configuraci�n de PLantilla',
	'VM_ADMIN_CFG_THEME_PARAMETERS' => 'Parametros',
	'VM_ADMIN_ENCRYPTION_FUNCTION' => 'Funci�n de encripci�n',
	'VM_ADMIN_ENCRYPTION_FUNCTION_TIP' => 'Aqui puede seleccionar la funci�n de encripci�n usada pata encriptar la informaci�n sensible antes de ser guardada en la base de datos.. AES_ENCRYPT is recommendada, porque es muy segura. ENCODE dno provee una encriptaci�n real.',
	'SAVE_PERMISSIONS' => 'Guardar Permisos',
	'VM_ADMIN_THEME_CFG_NOT_EXISTS' => 'El archivo de confiuraci�n para esta plantilla no existe y no puede ser creado. No es posible la configuraci�n',
	'VM_ADMIN_THEME_NOT_EXISTS' => 'La plantilla "{theme}" no existe.',
	'VM_USERFIELDS_ADDVALUE' => 'Agregar un valor',
	'VM_USERFIELDS_TITLE' => 'T�tulo',
	'VM_USERFIELDS_VALUE' => 'Valor',
	'VM_USER_FORM_LASTVISIT_NEVER' => 'Nunca',
	'VM_USER_FORM_TAB_GENERALINFO' => 'Informaci�n general del usuario',
	'VM_USER_FORM_LEGEND_USERDETAILS' => 'Detalles del usuario',
	'VM_USER_FORM_LEGEND_PARAMETERS' => 'Parametros',
	'VM_USER_FORM_LEGEND_CONTACTINFO' => 'Informaci�n del contacto',
	'VM_USER_FORM_NAME' => 'Nombre',
	'VM_USER_FORM_USERNAME' => 'Nombre de usuario',
	'VM_USER_FORM_EMAIL' => 'E-mail',
	'VM_USER_FORM_NEWPASSWORD' => 'Nueva contrase�a',
	'VM_USER_FORM_VERIFYPASSWORD' => 'Verificar contrase�a',
	'VM_USER_FORM_GROUP' => 'Grupo',
	'VM_USER_FORM_BLOCKUSER' => 'Bloquear usuario',
	'VM_USER_FORM_RECEIVESYSTEMEMAILS' => 'Recibir E-mails del sistema',
	'VM_USER_FORM_REGISTERDATE' => 'Fecha de registro',
	'VM_USER_FORM_LASTVISITDATE' => 'Fecha de su �ltima visita',
	'VM_USER_FORM_NOCONTACTDETAILS_1' => 'No hay detalles de contacto enlazados con este usuario:',
	'VM_USER_FORM_NOCONTACTDETAILS_2' => 'Ver \'Componentes -> Contactos -> Manejar Contactos\' para detalles.',
	'VM_USER_FORM_CONTACTDETAILS_NAME' => 'Nombre',
	'VM_USER_FORM_CONTACTDETAILS_POSITION' => 'Cargo',
	'VM_USER_FORM_CONTACTDETAILS_TELEPHONE' => 'Tel�fono',
	'VM_USER_FORM_CONTACTDETAILS_FAX' => 'Fax',
	'VM_USER_FORM_CONTACTDETAILS_CHANGEBUTTON' => 'Editar detalles del contacto',
	'VM_ADMIN_CFG_LOGFILE_HEADER' => 'Configuraci�n del archivo log',
	'VM_ADMIN_CFG_LOGFILE_ENABLED' => 'Habilitar logging?',
	'VM_ADMIN_CFG_LOGFILE_ENABLED_EXPLAIN' => 'Si esta desabilitado, un "null" logger sera iniciado, asi que cuando vmFileLogger pueda ser invocado sin errores.',
	'VM_ADMIN_CFG_LOGFILE_NAME' => 'Nombre de archivo log',
	'VM_ADMIN_CFG_LOGFILE_NAME_EXPLAIN' => 'Ruta al archivo log. Debe ser alcanzable y escribible.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL' => 'Nivel de log',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EXPLAIN' => 'Mensajes log por encima de esteo seran ignorados.',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_TIP' => 'DATO - 8',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_DEBUG' => 'DEPURAR - 7',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_INFO' => 'INFO - 6',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_NOTICE' => 'EVENTO - 5',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_WARNING' => 'ADVERTENCIA - 4',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ERR' => 'ERROR - 3',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_CRIT' => 'CRITICA - 2',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_ALERT' => 'ALERTA - 1',
	'VM_ADMIN_CFG_LOGFILE_LEVEL_EMERG' => 'EMERGENCIA - 0',
	'VM_ADMIN_CFG_LOGFILE_FORMAT' => 'Formato de archivo log',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN' => 'Formato de entradas individuales del archivo log.',
	'VM_ADMIN_CFG_LOGFILE_FORMAT_EXPLAIN_EXTRA' => 'Campos del archivo log pueden incluir cualquiera de los siguientes: %{timestamp} %{ident} [%{priority}] [%{remoteip}] [%{username}] %{message} %{vmsessionid}.',
	'VM_ADMIN_CFG_LOGFILE_ERROR' => 'No puede crear o accesar al archivo log.  Cont�ctese con el administrador del sistema.',
	'VM_ADMIN_CFG_DEBUG_MODE_ENABLED' => '�Habilitar modo de DEPURACION?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED' => '�Limitar por direcci�n IP?',
	'VM_ADMIN_CFG_DEBUG_IP_ENABLED_EXPLAIN' => '�Limitar depuraci�n por direcci�n IP?',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS' => 'Direcci�n IP del cliente',
	'VM_ADMIN_CFG_DEBUG_IP_ADDRESS_EXPLAIN' => 'Si habilita esta opci�n y excribe una direcci�n IP aqui, entonces el depurador ser� activado solo para esta direcci�n IP.  Otros clientes no veran el DEPURADOR.',
	'VM_FIELDMANAGER_SHOW_ON_SHIPPING' => 'Mostrar en el formulario de env�o',
	'VM_USER_NOSHIPPINGADDR' => 'No hay direcciones de env�o.',
	'VM_UPDATE_CHECK_LBL' => 'VirtueMart verficaci�n de actualizaci�n',
	'VM_UPDATE_CHECK_VERSION_INSTALLED' => 'versi�n de VirtueMart instalada aqui',
	'VM_UPDATE_CHECK_LATEST_VERSION' => 'Ultima versi�n de VirtueMart',
	'VM_UPDATE_CHECK_CHECKNOW' => 'Verificar ahora!',
	'VM_UPDATE_CHECK_DLUPDATE' => 'Actualizaci�n de descarga',
	'VM_UPDATE_CHECK_CHECKING' => 'Verificando...',
	'VM_UPDATE_CHECK_CHECK' => 'Verificar',
	'VM_UPDATE_NOTDOWNLOADED' => 'El paquete de verificaci�n no pudo ser descargdo.',
	'VM_UPDATE_PREVIEW_LBL' => 'Vista Previa de Verificaci�n de VirtueMart',
	'VM_UPDATE_WARNING_TITLE' => 'Advertencia General',
	'VM_UPDATE_WARNING_TEXT' => 'Instalar una actualizaci�n de VirtueMart usando un paquete de actualizaci�n puede causar da�os a sus sitio si ya ha modificado componentes de VirtueMart.',
	'VM_UPDATE_PATCH_DETAILS' => 'Detalles del Parche',
	'VM_UPDATE_PATCH_DESCRIPTION' => 'Descripci�n',
	'VM_UPDATE_PATCH_DATE' => 'Fecha de Publicaci�n',
	'VM_UPDATE_PATCH_FILESTOUPDATE' => 'Archivos a ser actualizados',
	'VM_UPDATE_PATCH_STATUS' => 'Estado',
	'VM_UPDATE_PATCH_WRITABLE' => 'Escribible',
	'VM_UPDATE_PATCH_UNWRITABLE' => 'Archivo/Directorio no escribible',
	'VM_UPDATE_PATCH_QUERYTOEXEC' => 'Consultas a ser ejecutadas en la base de datos',
	'VM_UPDATE_PATCH_CONFIRM_TEXT' => 'He le�do <a href="#warning">Warning</a> y estoy seguro de aplicar el parche de actualizaci�n a mi instalaci�n de VirtueMart ahora.',
	'VM_UPDATE_PATCH_APPLY' => 'Aplicar parche ahora',
	'VM_UPDATE_PATCH_ERR_UNWRITABLE' => 'No todos los archivos/directorios son escribibles. Por favor corrija primero los permisos necesarios.',
	'VM_UPDATE_PATCH_PLEASEMARK' => 'Por favor marque la casilla de verificaci�n antes de aplicar el parche.',
	'VM_UPDATE_RESULT_TITLE' => 'Versi�n Instalada Actual',
	'VM_FIELDS_CAPTCHA' => 'Campo Captcha (usando com_securityimages)',
	'VM_FIELDS_AGEVERIFICATION' => 'Verificaci�n de Edad (Selector de Campo de Fecha)',
	'VM_FIELDS_AGEVERIFICATION_MINIMUM' => 'Especifique la edad m�nima'
); $VM_LANG->initModule( 'admin', $langvars );
?>
