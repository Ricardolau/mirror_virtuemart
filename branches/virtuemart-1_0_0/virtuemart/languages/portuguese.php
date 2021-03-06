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
	var $_PHPSHOP_MENU = 'Menu';
	var $_PHPSHOP_CATEGORY = 'Categoria';
	var $_PHPSHOP_CATEGORIES = 'Categorias';
	var $_PHPSHOP_SELECT_CATEGORY = 'Seleccionar Categoria:';
	var $_PHPSHOP_ADMIN = 'Administra��o';
	var $_PHPSHOP_PRODUCT = 'Produto';
	var $_PHPSHOP_LIST = 'Listar';
	var $_PHPSHOP_ALL = 'Todos';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Todos os Produtos';
	var $_PHPSHOP_VIEW = 'Ver';
	var $_PHPSHOP_SHOW = 'Mostrar';
	var $_PHPSHOP_ADD = 'Adicionar';
	var $_PHPSHOP_UPDATE = 'Actualizar';
	var $_PHPSHOP_DELETE = 'Eliminar';
	var $_PHPSHOP_SELECT = 'Seleccionar';
	var $_PHPSHOP_SUBMIT = 'Submeter';
	var $_PHPSHOP_RANDOM = 'Produto aleat�rio';
	var $_PHPSHOP_LATEST = '�ltimos Produtos';
	var $_PHPSHOP_HOME_TITLE = 'In�cio';
	var $_PHPSHOP_CART_TITLE = 'Pedido';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Terminar Pedido';
	var $_PHPSHOP_LOGIN_TITLE = 'Autenticar';
	var $_PHPSHOP_LOGOUT_TITLE = 'Terminar sess�o';
	var $_PHPSHOP_BROWSE_TITLE = 'Procurar Artigos';
	var $_PHPSHOP_SEARCH_TITLE = 'Procurar';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Manuten��o da Conta de Utilizador';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navega��o';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Departamento';
	var $_PHPSHOP_INFO = 'Informa��o';
	var $_PHPSHOP_BROWSE_LBL = 'Procurar Artigos';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produtos';
	var $_PHPSHOP_PRODUCT_LBL = 'Produto';
	var $_PHPSHOP_SEARCH_LBL = 'Procurar';
	var $_PHPSHOP_FLYPAGE_LBL = 'Detalhe do Produto';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Procurar Produto';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nome do Produto';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Categoria';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Descri��o';
	var $_PHPSHOP_CART_SHOW = 'Ver total';
	var $_PHPSHOP_CART_ADD_TO = 'Adicionar';
	var $_PHPSHOP_CART_NAME = 'Nome';
	var $_PHPSHOP_CART_SKU = 'Ref.';
	var $_PHPSHOP_CART_PRICE = 'Pre�o';
	var $_PHPSHOP_CART_QUANTITY = 'Quantidade';
	var $_PHPSHOP_CART_SUBTOTAL = 'Sub total';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Adicionar ';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Morada para envio';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'A sua pesquisa n�o obteve resultados.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Pre�o: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Encomendar';
	var $_PHPSHOP_NO_CUSTOMER = 'Voc� n�o � um cliente registado.<BR>Por favor registe-se.<BR>Obrigado.';
	var $_PHPSHOP_DELETE_MSG = 'Tem a certeza que quer apagar esta entrada?';
	var $_PHPSHOP_THANKYOU = 'Obrigado pelo seu pedido.';
	var $_PHPSHOP_NOT_SHIPPED = 'Ainda n�o foi enviado.';
	var $_PHPSHOP_EMAIL_SENDTO = 'Um e-mail de confirma��o foi enviado para';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'N�o existe nenhum utilizador que possa ser adicionado � lista de utilizadores com_phpshop';
	var $_PHPSHOP_ERROR = 'ERRO';
	var $_PHPSHOP_MOD_NOT_REG = 'M�dulo N�o Registado.';
	var $_PHPSHOP_MOD_ISNO_REG = 'n�o � um m�dulo phpShop v�lido.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Voc� n�o tem permiss�o para aceder ao m�dulo requisitado.';
	var $_PHPSHOP_PAGE_404_1 = 'A p�gina n�o existe';
	var $_PHPSHOP_PAGE_404_2 = 'Este arquivo n�o existe. N�o � poss�vel encontrar o arquivo:';
	var $_PHPSHOP_PAGE_403 = 'Privil�gios Insuficientes';
	var $_PHPSHOP_FUNC_NO_EXEC = 'N�o tem privil�gios suficientes para executar ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Fun��o n�o Registada';
	var $_PHPSHOP_FUNC_ISNO_REG = ' n�o � uma fun��o de MOS_com_phpShop.';
	var $_PHPSHOP_ADMIN_MOD = 'Administra��o';
	var $_PHPSHOP_USER_LIST_MNU = 'Listar Utilizadores';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista de Utilizadores';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nome de Utilizador';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nome Completo';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_USER_FORM_MNU = 'Adicionar Utilizador';
	var $_PHPSHOP_USER_FORM_LBL = 'Adicionar/Actualizar Informa��o do Utilizador';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Informa��o de Conta';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Morada de Envio';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adicionar Morada';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Sem morada de envio.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Morada';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Empresa';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Ramo de Actividade';
	var $_PHPSHOP_USER_FORM_TITLE = 'Cargo';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Utilizador';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Palavra Passe';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirmar Palavra Passe';
	var $_PHPSHOP_USER_FORM_PERMS = 'Privil�gios';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Numero de cliente / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Empresa';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Morada';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Freguesia';
	var $_PHPSHOP_USER_FORM_CITY = 'Concelho';
	var $_PHPSHOP_USER_FORM_STATE = 'Distrito';
	var $_PHPSHOP_USER_FORM_ZIP = 'C�digo Postal';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Telem�vel';
	var $_PHPSHOP_USER_FORM_FAX = 'NIF';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Correio electr�nico';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Listar M�dulos';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Lista de M�dulos';
	var $_PHPSHOP_MODULE_LIST_NAME = 'M�dulo';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Privil�gios';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Fun��es';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Encomendas';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Adicionar M�dulo';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Informa��o';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etiqueta';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nome';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Privil�gios';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Cabe�alho';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Rodap�';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Menu';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Encomendar';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'C�digo de Idioma';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Arquivo de Idioma';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Listar Fun��es';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Lista de Fun��es';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Nome';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Classe de Nome';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Classe de M�todo';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Privil�gios';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Adicionar Fun��o';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Informa��o';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nome';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Classe de Nome';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Classe de M�todo';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Privil�gios';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Listar moedas';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Lista de moedas';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Adicionar moeda';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nome da moeda';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'C�digo da moeda';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Listar Pa�ses';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Lista de Pa�ses';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Adicionar Pa�s';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nome do Pa�s';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'C�digo Pa�s (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'C�digo Pa�s (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Lista de Distritos';
	var $_PHPSHOP_STATE_LIST_LBL = 'Lista de Distritos por: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Adicionar Distrito';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nome do Distrito';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'C�digo do Distrito (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'C�digo do Distrito (2)';
	var $_PHPSHOP_ADDRESS = 'Morada';
	var $_PHPSHOP_CONTINUE = 'Continuar';
	var $_PHPSHOP_EMPTY_CART = 'Carrinho de compras vazio.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping Servidor InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Servidor-InterShipper Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Falha em Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Resposta de Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Tempo de<BR>Resposta';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'Seg.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'M�todos de Envio';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'M�todo de Envio Actual';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'M�todo de Envio';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Activo';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Despesas de transporte';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Tempo de Entrega';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'Tarifa plana';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'percentagem';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dias';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configurar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Adicionar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configurar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Actualizar';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'M�todo de envio';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Activar';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Despesas de transporte';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Tempo de Entrega';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'percentagem';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dias';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ORDER_MOD = 'Encomendas';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Confirmar';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Cancelar Encomenda';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Imprimir Encomenda';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Apagar Encomenda';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Listar Encomendas';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Lista de Encomendas';
	var $_PHPSHOP_ORDER_LIST_ID = 'N�mero de Encomenda';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Data';
	var $_PHPSHOP_ORDER_LIST_MDATE = '�ltima Modifica��o';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Estado';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Sub total';
	var $_PHPSHOP_ORDER_ITEM = 'Artigos';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordem de Compra';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'N�mero de Encomenda';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Data';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Estado das encomendas';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informa��o do Cliente';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informa��o de Cobran�a';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informa��o de Envio';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Cobrar A';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Enviar A';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nome';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Empresa';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Morada 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Morada 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Cidade';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Distrito';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'C�digo Postal';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Pa�s';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefone';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'NIF';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Impress�o de Artigos';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Quantidade';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Qtd.';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Ref.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Pre�o';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Sub total';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Total de IVA';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'IVA';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'M�todo de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nome da Conta';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'N�mero da Conta';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Data de Expira��o';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Registo de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informa��o de Envio';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informa��o de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Transportadora';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'M�todo de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Data de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Pre�o de Envio';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Listar Estado de Encomendas';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Adicionar Estado de Encomenda';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'C�digo de Estado de Encomenda';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nome de Estado de Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Estado Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'C�digo de Estado de Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nome de Estado de Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Listar Encomendas';
	var $_PHPSHOP_PRODUCT_MOD = 'Produtos';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Produto Actual';
	var $_PHPSHOP_CURRENT_ITEM = 'Item Actual';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Invent�rio de Produtos';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Ver Invent�rio';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Pre�o';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'N�mero';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Listar Produtos';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Lista de Produtos';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publicar';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Pesquisar produto';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'alterado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'com pre�o alterado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'sem pre�o';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Depois';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Antes';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Adicionar Produto';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editar Produto';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Ver folheto de Produtos da loja';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Adicionar Artigo';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Adicionar Outro Artigo';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Novo Produto';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Actualizar Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informa��o do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Estado';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimens�es e Peso';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Imagens';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Novo Artigo';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Actualizar Artigo';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Estado';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimens�es e Peso';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Imagens';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Regressar ao produto relacionado';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Para actualizar a imagem actual, v� ao direct�rio e insira a nova imagem.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Escreva ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Artigos';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Qualidades';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Deseja realmente eliminar este produto \\ne todos os artigos com ele relacionados?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Deseja realmente eliminar este Artigo?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Fornecedor';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Fabricante';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Pre�o de Retalho';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Pre�o do produto (l�quido)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Pequena descri��o';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Em Invent�rio';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Em Encomenda';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Data de disponibilidade';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Em especial';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Tipo de Desconto';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Tamanho';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Largura';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Altura';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unidade de Medida';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unidade de medida';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Imagem Miniatura';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Imagem Grande';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'Kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'Cent�metros';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unidade';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'Unid.';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Unidades por Pacote';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Aqui pode inserir o n�mero de unidades no pacote. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Unidades por caixa';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Aqui pode inserir o n�mero de unidades na caixa. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Resultados de Adicionar Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Resultados de Actualizar Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Resultados de Adicionar Artigo';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Resultados de Actualizar Artigo';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Carregar CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Direct�rios de Produtos';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Lista de Categorias';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Categorias';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Adicionar Categoria';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informa��o';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nome';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Depend�ncia';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Folheto da Categoria';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Listar Atributos';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Listar Atributos por';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nome Atributos';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Listar Encomenda';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Adicionar Atributos';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formul�rio de Atributos';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Novo Atributo de Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Actualizar Atributos de Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Novo Atributo de Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Actualizar Atributos de Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nome Atributo';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Listar Encomendas';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Listar Categorias';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Lista de Pre�os';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Pre�os por';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Grupo';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Pre�o';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Moeda';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Adicionar Pre�o';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Informa��o';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Novo Pre�o de Produto';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Actualizar Pre�o de Produto';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Novo Pre�o de Produto';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Actualizar Pre�o de Produto';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Pre�o';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Relat�rio B�sico';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Lista Individual de Produtos';
	var $_PHPSHOP_RB_SALE_TITLE = 'Relat�rio de Vendas';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Actividade de Vendas';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Escrever Intervalo';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mensal';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Semanal';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Di�rio';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Este M�s';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = '�ltimo M�s';
	var $_PHPSHOP_RB_LAST60_BUTTON = '�ltimos 60 dias';
	var $_PHPSHOP_RB_LAST90_BUTTON = '�ltimos 90 dias';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Come�ar em';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Acabar em';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Mostrar a gama seleccionada';
	var $_PHPSHOP_RB_REPORT_FOR = 'Fazer Relat�rio de ';
	var $_PHPSHOP_RB_DATE = 'Data';
	var $_PHPSHOP_RB_ORDERS = 'Ordens';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Total de Artigos vendidos';
	var $_PHPSHOP_RB_REVENUE = 'Ganhos';
	var $_PHPSHOP_RB_PRODLIST = 'Lista de Produtos';
	var $_PHPSHOP_SHOP_MOD = 'Loja';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Imagem pequena';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Pre�o';
	var $_PHPSHOP_ORDER_STATUS_P = 'Pendente';
	var $_PHPSHOP_ORDER_STATUS_C = 'Confirmado';
	var $_PHPSHOP_ORDER_STATUS_X = 'Cancelado';
	var $_PHPSHOP_ORDER_BUTTON = 'Encomendar';
	var $_PHPSHOP_SHOPPER_MOD = 'Clientes';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Listar Clientes';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Lista de Clientes';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nome de utilizador';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nome Completo';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Adicionar Cliente';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informa��o';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Informa��o de Cobran�a';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informa��o de Envio';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adicionar Morada';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Morada 2';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nome de utilizador';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Nome';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Apelido';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Nome do meio';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nome do Cliente';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Palavra-passe';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirmar Palavra-passe';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Morada 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Morada 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Cidade';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Distrito';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'C�digo Postal';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Telem�vel';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'NIF';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Sim';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'N�o';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Listar Grupos de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Lista de Grupos de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nome do grupo';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Descri��o do grupo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formul�rio de Grupos de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Adicionar Grupo de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nome do grupo';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Descri��o do grupo';
	var $_PHPSHOP_STORE_MOD = 'Loja';
	var $_PHPSHOP_STORE_FORM_MNU = 'Editar Loja';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informa��o sobre a Loja';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informa��o de Contacto';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Imagem grande';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Carregar Imagem';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nome da Loja';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Morada 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Morada 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Cidade';
	var $_PHPSHOP_STORE_FORM_STATE = 'Distrito';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_STORE_FORM_ZIP = 'C�digo Postal';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Categoria da loja';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Apelido';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Primeiro nome';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Nomes do Meio';
	var $_PHPSHOP_STORE_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'NIF';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Caminho para a Imagem';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_PAYMENT = 'Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Listar M�todos de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Lista de M�todos de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nome';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Tipo de m�todo de pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Adicionar M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formul�rio de M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nome de M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Listar Encomendas';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Tipo de m�todo de pagamento';
	var $_PHPSHOP_TAX_MOD = 'IVA';
	var $_PHPSHOP_TAX_RATE = 'Taxas de IVA';
	var $_PHPSHOP_TAX_LIST_MNU = 'Listar Taxas de IVA';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_STATE = 'Imposto por Distrito ou Regi�o';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Imposto por Pa�s';
	var $_PHPSHOP_TAX_LIST_RATE = 'Lista de Taxas de IVA';
	var $_PHPSHOP_TAX_FORM_MNU = 'Adicionar Taxa de IVA';
	var $_PHPSHOP_TAX_FORM_LBL = 'Adicionar Informa��o sobre o Imposto';
	var $_PHPSHOP_TAX_FORM_STATE = 'Imposto por Distrito ou Regi�o';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Imposto do Pa�s';
	var $_PHPSHOP_TAX_FORM_RATE = 'Taxas de Imposto';
	var $_PHPSHOP_VENDOR_MOD = 'Vendedor';
	var $_PHPSHOP_VENDOR_ADMIN = 'Vendedores';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Listar Vendedores';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Lista de Vendedores';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nome';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Adicionar Vendedor';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Adicionar Informa��o';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Contacto para Informa��o';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Imagem';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Enviar imagem para o servidor';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nome do Vendedor da Loja';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nome do Vendedor da Empresa';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Morada 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Morada 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Cidade';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Distrito';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'C�digo Postal';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Apelido';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Primeiro Nome';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Nomes do Meio';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'NIF';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Caminho para Imagens';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Listar  Categorias de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista das Categorias de Vendedores';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendedores';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Adicionar Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formul�rio de Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Fabricante';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Listar Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Lista de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nome do Fabricante';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Administra��o';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Adicionar Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Adicionar informa��o';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Informa��o do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nome do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Categoria do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Site do Fabricante';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Listar Categorias de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Lista de Categorias de Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nome da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Fabricantes';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Adicionar Categoria de Fabricante';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Detalhes da Categoria de Fabricante';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Informa��o da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_HELP_MOD = 'Ajuda';
	var $_PHPSHOP_CART_ACTION = 'Actualizar';
	var $_PHPSHOP_CART_UPDATE = 'Actualizar quantidade no carrinho';
	var $_PHPSHOP_CART_DELETE = 'Apagar produto do carrinho';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Pre�o';
	var $_PHPSHOP_PRODUCT_CALL = 'Carregar para saber o Pre�o';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Anterior';
	var $_PHPSHOP_PRODUCT_NEXT = 'Seguinte';
	var $_PHPSHOP_CART_TAX = 'Imposto';
	var $_PHPSHOP_CART_SHIPPING = 'Portes e custos de envio';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Seguinte';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registar-se';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Informa��o de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Morada';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'NIF';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Informa��o de Envio';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Morada';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'NIF';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informa��o de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nome no cart�o';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'M�todo de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'N�mero de Cart�o de Cr�dito';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Data de validade';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Completar a Encomenda';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Informa��o requerida quando � escolhido o Pagamento por Cart�o de Cr�dito ';
	var $_PHPSHOP_ZONE_MOD = 'Envio por Zonas';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Listar Zonas';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Adicionar Zona';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Atribuir Zona';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Pa�s';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zona Actual';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Atribuir Zona';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Actualizar';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Atribuir Zonas';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Descri��o da Zona';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Custo por Zona Por Artigo';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limite de Custo da Zona';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista das Zonas';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Descri��o da Zona';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Custo da Zona por Artigo';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limite de Custo da Zona';
	var $_PHPSHOP_LOGIN_FIRST = 'Por favor, autentique-se ou inicie o registo na loja.<br>Obrigado.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Termos do Servi�o';
	var $_PHPSHOP_AGREE_TO_TOS = 'Por favor, concorde com os Termos de Servi�o primeiro.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Concordo com os Termos de Servi�o';
	var $_PHPSHOP_LEAVE_BLANK = '(deixar em BRANCO se n�o tiver<br />nenhum arquivo php individual)';
	var $_PHPSHOP_RETURN_LOGIN = '� cliente registado? Por favor identifique-se';
	var $_PHPSHOP_NEW_CUSTOMER = 'Novo(a) cliente? Por favor disponibilize os dados para factura��o';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Conta de Cliente:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informa��o de Encomenda';
	var $_PHPSHOP_ACC_UPD_BILL = 'Aqui encontra os dados de factura��o.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Aqui pode adicionar ou actualizar a morada para envio.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informa��o de Conta';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informa��o de Envio';
	var $_PHPSHOP_ACC_NO_ORDERS = 'N�o h� encomendas para exibir';
	var $_PHPSHOP_ACC_BILL_DEF = '- Por defeito igual � morada de factura��o';
	var $_PHPSHOP_SHIPTO_TEXT = 'Poder� adicionar moradas de envio � sua conta. Por favor pense num apelido ou c�digo para a morada que seleccionar em baixo.';
	var $_PHPSHOP_CONFIG = 'Configura��o';
	var $_PHPSHOP_USERS = 'Utilizadores';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Pagamento com cart�o de cr�dito?';
	var $_PHPSHOP_SHIPPING_MOD = 'Administra��o de Transportadores';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Transportadores';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Transportador';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista de Transportadores';
	var $_PHPSHOP_RATE_LIST_MNU = 'Portes de Transporte';
	var $_PHPSHOP_RATE_LIST_LBL = 'Lista de Portes de Transporte';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nome';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Ordem de Listagem (n�mero)';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Novo Transportador';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Editar/Criar Transportador';
	var $_PHPSHOP_RATE_FORM_MNU = 'Nova Taxa de Transporte';
	var $_PHPSHOP_RATE_FORM_LBL = 'Editar/Criar Taxa de Transporte';
	var $_PHPSHOP_RATE_FORM_NAME = 'Descri��o da Taxa de Transporte';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportador';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'In�cio do intervalo de C�digos Postais';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Fim do intervalo de C�digos Postais';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Peso m�nimo';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Peso m�ximo';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Custo';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'A taxa da sua encomenda';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Identifica��o de Imposto';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordem de Listagem (n�mero)';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Descri��o da taxa de Transporte';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Peso a partir de ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... at�';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Empresa Transportadora';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordem de Listagem (n�mero)';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERRO: ID de Transportador j� existe.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERRO: Escolha um transportador.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERRO: J� existe taxa de transporte. Elimine as taxas anteriores deste Transportador';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERRO: N�o foi encontrado nenhum transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERRO: Escolha um transportador.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERRO: N�o foi encontrado nenhum transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERRO: � obrigat�ria uma descri��o da taxa.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERRO: O Pa�s de destino � inv�lido. Se optou por escolher mais de um pa�s, por favor separe-os com um espa�o';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERRO: � obrigat�rio apresentar um peso m�nimo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERRO: � obrigat�rio apresentar um peso m�ximo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERRO: O peso mais baixo deve ser mais pequeno que o peso mais alto';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERRO: � obrigat�rio apresentar uma taxa de transporte';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERRO: Escolha uma moeda';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERRO: � obrigat�rio apresentar uma taxa de transporte';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Por favor escolha';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportador';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Portes de Transporte';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Pre�o';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nenhum-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Cart�o de Cr�dito';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Use um M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'D�bito Banc�rio';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Apenas a Morada';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Por favor, escolha uma morada de entrega!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Por favor, escolha um m�todo de entrega!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Por favor, escolha um m�todo de pagamento!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Por favor verifique os dados introduzidos e confirme a encomenda!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Por favor, escolha um m�todo de entrega.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Por favor, escolha outro m�todo de entrega.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Por favor, escolha um m�todo de pagamento.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Por favor, escreva o seu n�mero de cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Por favor, escreva o nome que est� escrito no cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'O n�mero de cart�o de cr�dito n�o � v�lido.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Por favor, escreva o m�s da data de expira��o do cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Por favor, escreva o ano da data de expira��o do cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'A data de expira��o � inv�lida.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Por favor escolha uma morada para entrega.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'N�mero de conta inv�lida.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'N�o existem artigos no seu carrinho de compras!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERRO: Por favor, escolha um transportador!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERRO: A taxa de transporte n�o foi encontrada!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERRO: O seu endere�o de entrega n�o foi encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERRO: N�o existem dados sobre o cart�o de cr�dito....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERRO: N�mero de Cart�o de Cr�dito n�o encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Desculpe, mas o n�mero de cart�o de cr�dito que introduziu � um n�mero de teste!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'O user_id n�o foi encontrado na base de dados!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Ainda n�o forneceu um nome de titular da sua conta banc�ria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Ainda n�o forneceu o seu IBAN (Numero de Conta Banc�ria Internacional).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Ainda n�o foi fornecido um n�mero de conta banc�ria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Ainda n�o forneceu os seus dados banc�rios.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Ainda n�o foi fornecido o nome do seu banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Foi executado um passo inv�lido para efectuar a confirma��o de compra!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'A informa��o sobre o pagamento foi guardada para processamento posterior.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Ainda n�o atingiu o valor minimo para efectuar a sua compra.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'O nosso valor m�nimo para efectuar uma compra � de:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pagamento por Cart�o de Cr�dito';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'outros m�todos de pagamento';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Por favor escolha um m�todo de pagamento:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Valor m�nimo para efectuar uma compra na nossa loja';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informa��o da conta banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'N�mero de Conta Banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'N�mero de C�digo do seu Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nome do Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Titular da Conta';
	var $_PHPSHOP_MODULES = 'M�dulos';
	var $_PHPSHOP_FUNCTIONS = 'Fun��es';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produtos Especiais';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Por favor, deixe uma nota � sua encomenda se achar necess�rio';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Nota do Cliente';
	var $_PHPSHOP_INCLUDING_TAX = '(Inclui $tax% IVA)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Por favor, escolha um item';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Item';
	var $_PHPSHOP_DOWNLOADS_TITLE = '�rea de Download';
	var $_PHPSHOP_DOWNLOADS_START = 'Iniciar Download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Por favor, escreva o Download-ID que recebeu no seu e-mail e carregue em \'Iniciar Download\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Desculpe, mas o seu download expirou';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Desculpe, mas j� atingiu o n�mero m�ximo de downloads';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Download-ID Inv�lido!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'N�o foi poss�vel enviar uma mensagem a ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Mensagem enviada a  ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informa��o do Download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'o(s) ficheiro(s) que encomendou est�o prontos para download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Por favor escreva os seguinte(s) Download-ID(s) na nossa �rea de Downloads: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'o n�mero m�ximo de downloads para cada ficheiro � de: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Tem de fazer o download at� $expire dias ap�s o primeiro download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Quest�es? Problemas?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informa��o de Download por  ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Produto sujeito a download?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Obrigado, o pagamento foi efectuado.
        A transac��o foi efectuada com sucesso. Ir� receber a confirma��o via e-mail da PayPal.
        Pode continuar ou efectuar a autentica��o <a href=http://www.paypal.com target="_blank">www.paypal.com</a> para ver os detalhes da transac��o.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Um erro ocorreu durante a sua transac��o. O estado da sua encomenda n�o pode ser actualizada.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Obrigado pela sua encomenda. Informa��o de encomenda foi enviada.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Obrigado pela sua preferencia.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Quest�es? Problemas?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'A encomenda foi recebida.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Para Ver a encomenda seleccione a hiperliga��o.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'As quantidades negativas n�o s�o permitidas.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Por favor, introduza uma quantidade v�lida para este produto.';
	var $_PHPSHOP_CART_STOCK_1 = 'A quantidade seleccionada excede o stock. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Actualmente temos $product_in_stock produtos dispon�veis. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Carregue aqui se desejar aguardar em lista de espera.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Por favor, seleccione um item especial para a p�gina de detalhes!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nenhum';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Sr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Sra.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Padr�o';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administra��o de Associados';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Listar Associados';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Lista de Associados';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nome de Associado';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Activo';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Avaliar';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total Mensal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Comiss�o Mensal';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Lista de encomendas';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-mail de Associados';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail de Associados';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'E-mail para quem(* = Todos)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'O seu e-mail';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Assunto';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Inclui estat�sticas actuais';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Taxa de comiss�o (percentagem)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Activar?';
	var $_PHPSHOP_DELIVERY_TIME = 'Prazo de Entrega (aprox.)';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Detalhes Entrega';
	var $_PHPSHOP_MORE_CATEGORIES = 'mais categorias';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilidade';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Produto n�o dispon�vel de momento.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Dispon�vel em: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Sum�rio';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Estat�sticas';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clientes';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Produtos activos';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Produtos inactivos';
	var $_PHPSHOP_STATISTIC_SUM = 'Soma';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Novas Encomendas';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Novos Clientes';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Por favor introduza o seu e-mail, ser� avisado logo que o produto volte a estar em stock.
                                          O seu endere�o de e-mail ser� utilizado apenas para este fim.<br />
                                          <br />Obrigado!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Obrigado por aguardar! <br />Ser� avisado logo que o artigo esteja em stock.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Notificar-me!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Pr�-visualizar impress�o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Por favor escolha Authorize.net ou CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Configura��o do estado do ficheiro:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'Edit�vel';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'N�o edit�vel';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Caminho & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Entregas';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Sa�da com compras';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloads';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Op��o de Pagamento';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Utilizar apenas como cat�logo';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Se seleccionar esta op��o, ir� desactivar as funcionalidades do Carrinho de Compras.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Mostrar pre�os';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Mostrar pre�os com IVA?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Escolher se pretende que os clientes vejam pre�o com ou sem IVA.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Confirmar para mostrar pre�os. Se est� a usar a funcionalidade de cat�logo, alguns n�o pretendem mostrar pre�os nas p�ginas.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Taxa virtual';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Aqui determina se os artigos sem peso s�o taxados ou n�o. Modifique ps_checkout.php->calc_order_taxable() para personalizar.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Modo de taxa��o:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Baseado no Endere�o de Envio';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Baseado no endere�o do vendedor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Esta op��o determina qual o valor utilizado para c�lculo das Taxas:<br />
                                                <ul><li>o de Distrito / Pa�s origem do dono da loja</li><br/>
                                                <li>ou o de origem do comprador.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Activar taxas m�ltiplas?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Confirme aqui, se tem produtos com diferentes tipos de taxas';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Subtrair o desconto antes de adicionar taxa?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Permitir a revis�o do cliente';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Se permitido, autoriza os clientes a <strong>avaliar os produtos</strong> e <strong>escrever coment�rios</strong> sobre os mesmos. <br />
                                                                                Assim os clientes poder�o divulgar as suas experi�ncias com o produto partilhando conhecimentos a outros clientes.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Escolher se pretender a subtra��o do desconto para o tipo de pagamento seleccionado ANTES (confirmado) ou DEPOIS do valor da taxa de entrega.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Clientes poder�o indicar os dados banc�rios?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Confirmar se os seus clientes devem ter a op��o de indicar os dados banc�rios quando os mesmos se encontrem registados na loja.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Clientes poder�o escolher um Distrito/Regi�o?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Confirmar se os seus clientes dever�o ter a op��o para seleccionar o seu distrito / regi�o quando os mesmos se encontrem registados na loja.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Dever� concordar com os termos de servi�o?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Confirmar se pretender que um cliente aceite os seus termos de servi�o antes do registo na loja.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Verificar Stock?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Verifica o stock dos produtos quando um cliente adiciona os mesmos ao seu carrinho de compras.
                                                                                          Se seleccionado, n�o ir� permitir ao cliente adicionar produtos ao carrinho de compras. se o produto em quest�o n�o existir em stock.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Accionar programa de afiliados?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Isto activa a pesquisa de afiliados na p�gina frontal da loja. Activado se possui afiliados na �rea de administra��o.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Formato de nota de encomenda por e-mail:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'E-mail em texto';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'E-mail em HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Aqui define a configura��o do formato dos e-mails de nota de encomenda:<br />
                                                                                        <ul><li>e-mail com texto</li>
                                                                                        <li>ou como HTML, em que poder�o ser inseridas imagens.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Autoriza a Administra��o frontal para utilizadores que n�o possuam a administra��o da �rea de Administra��o?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Aqui poder� autorizar os gestores de loja a ter acesso � administra��o frontal mesmo que n�o tenham
                                                                                              acesso � �rea de administra��o do Joomla (exemplo:  Registado / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'A URL para o seu site. Usualmente id�ntica � do seu JOOMLA (com barra invertida no fim!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'URL SEGURO';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'A URL segura para o seu site. (https - com barra invertida no fim!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'URL COMPONENTE';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'O URL para o componente VirtueMart. (com barra invertida no fim!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL IMAGEM';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'A URL para o direct�rio das imagens dos componentes do VirtueMart.(com barra invertida no fim!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'URL ADMIN';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Caminho para o direct�rio dos componentes do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'URL CLASSES';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Caminho para o direct�rio das classes do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'URL PAGINA';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Caminho para o direct�rio HTML do VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'URL IMAGEM';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Caminho para o direct�rio das imagens da loja VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'MONTRA';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Esta � a p�gina frontal padr�o.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'P�GINA DE ERROS';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Esta � a pagina padr�o para visualiza��o de mensagens de erro.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEPURAR P�GINA';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Esta � a p�gina padr�o para visualizar mensagens de erro.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEPURAR ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Depurar?  	   	Activa a sa�da de C�digos de erro. Implica a visualiza��o da p�gina de erros no fundo de cada p�gina. Muito �til no desenvolvimento da loja, uma vez que mostra os conte�dos do carrinho, conte�do dos campos, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Folheto';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Esta � a p�gina padr�o para mostrar os detalhes dos produtos.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Categoria do Tema';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Aqui defina a categoria do tema padr�o para mostrar os produtos de categoria.<br />
                                                                                                      Poder� criar novo tema personalizando os ficheiros de temas j� existentes. <br />
                                                                                                      (Que residem no direct�rio<strong>COMPONENTPATH/html/templates/</strong> e s�o iniciados por browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'N�mero de Produtos por Linha';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Defini��o do n�mero de produtos por linha. <br />
                                                                                                      Exemplo: Se seleccionar 4, a categoria ir� mostrar 4 produtos por linha';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Imagem "Sem Imagem"';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Imagem que aparece quando n�o existe uma imagem de produto.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Linhas numa Pesquisa';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determina o n�mero de linhas por p�gina quando os resultados da pesquisa forem visualizados numa lista.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Cor de pesquisa 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Especifica a cor para as linhas �mpares na lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Cor de pesquisa 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Especifica a cor para as linhas pares na lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'N�mero m�ximo de linhas';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Especifica o n�mero de linhas a mostrar na lista de encomenda da caixa seleccionada.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Mostrar rodap� ';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Mostra a imagem de rodap� �powered-by-VirtueMart� ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Escolha do m�todo de envio da sua loja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'M�dulo de Envio padr�o com configura��o individual de transportadoras e taxas. <strong>RECOMENDADO!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	M�dulo Zone Shipping Country Vers�o 1.0<br />
                                                                                                            Para mais informa��es acerca deste m�dulo por favor visite <a href="http://ZephWare.com" target="_blank">http://ZephWare.com</a><br />
                                                                                                            Para detalhes e contactos <a href="mailto:zephware@devcompany.com">ZephWare.com</a><br /> Confirme esta op��o para activar este m�dulo';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">Ferramentas online UPS</a> para c�lculo de transporte';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS c�digo de acesso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'O seu c�digo de acesso UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS identifica��o do utilizador';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'a identifica��o de utilizador fornecido pela UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'palavra-passe UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'A palavra-passe para a sua conta UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'M�dulo InterShipper. Seleccione apenas caso tenha uma conta Intershipper.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Desactivar a selec��o de m�todo de entregas. Escolha esta op��o se os seus clientes compram servi�os, j� que n�o necessitam de transporte.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Palavra-passe InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'A sua palavra-passe para a sua conta InterShipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'E-mail InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'O seu endere�o de e-mail para a sua conta InterShipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'CHAVE CODIFICADA';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Utilizada para a encripta��o de dados alojados na base de dados com esta chave. Significa que este ficheiro dever� ser protegido de visualiza��es permanentemente.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Activar a barra de Confirma��o de sa�da com compras';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Active esta op��o se pretende que a barra de confirm��o de sa�da com compras seja mostrada ao cliente durante o processo de sa�da ( 1 - 2 - 3 - 4 com gr�ficos).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Escolha para a sua loja o tipo de Processo de Confirma��o de Sa�da';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Processo padr�o :</strong><br/>
               1. Pedido de Endere�o de entrega<br />
              2. Pedido do m�todo de Entrega <br />
              3. Pedido do m�todo de Pagamento<br />
              4. Completar Encomenda';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Processo 2:</strong><br/>
               1. Pedido de Endere�o de entrega<br />
              2. Pedido do m�todo de Pagamento<br />
              3. Completar Encomenda';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Processo 3:</strong><br/>
               1. Pedido do m�todo de Entrega<br />
              2. Pedido do m�todo de Pagamento<br />
              3. Completar Encomenda';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Processo 4:</strong><br/>
               1. Pedido do m�todo de Pagamento<br />
              2. Completar Encomenda';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Activar Downloads';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Confirme para activar os downloads. Utilize apenas se pretende vender Servi�os ou itens atrav�s do sistema de download.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Estado do pedido que permite downloads';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Selecciona em que estado da encomenda o cliente � notificado, via e-mail, acerca do download .';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Estado do pedido que desactiva os downloads';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Permite selecionar o estado do pedido que desactiva a capacidade do cliente fazer downloads.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Direct�rio de Downloads';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'O caminho f�sico para os ficheiros autorizados ao cliente para efectuar download. (colocar barra(/) no final do URL!)<br>
        <span class="mensagem">para a seguran�a da sua loja: Se tiver possibilidade, por favor use um direct�rio FORA DO WEBROOT da loja</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'M�ximo de Downloads';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Especifica o n�mero de downloads que poder�o ser efectuados com apenas um ID de download, (para uma ordem)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Prazo de validade do Download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Especifica o tempo <strong>em segundos</strong>em que o download ir� ser permitido ao cliente.
  Este tempo � contado a partir do primeiro download! Quando o tempo expirar o ID de Download � desactivado.<br />Nota : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Permitir pagamento via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Seleccione esta op��o para permitir aos clientes utilizar o tipo de pagamento PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal e-mail de pagamento:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'E-mail da sua empresa para pagamentos atrav�s de PayPal.Tamb�m ser� utilizado para recep��es de e-mail.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Estado da ordem para transac��es com sucesso';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Selecciona o estado da ordem para a ordem configurada actualmente, Se a Transac��o PayPal IPN foi bem sucedida. Se estiver a utilizar Venda de Downloads:
  seleccione o estado que activa o download (Os clientes ser�o notificados instantaneamente acerca do download, atrav�s de e-mail).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Estado da ordem para transac��es falhadas';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Seleccione um estado de ordem para transac��es PayPal falhadas.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Permitir Pagamentos via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Seleccione esta op��o para autorizar os clientes a usar o sistema de pagamento Australiano PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate Nome de utilizador:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'A sua conta para PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Autoriza o tipo de pagamento Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Seleccione esta op��o para autorizar o Authorize.net no phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Modo de Teste ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Seleccionar \'sim\' durante o Teste. Seleccionar \'N�o\' para activar transac��es em tempo real.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Sim';
	var $_PHPSHOP_ADMIN_CFG_NO = 'N�o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Identifica��o de autentica��o Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Este � o seu ID para a Autentica��o em Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net palavra-passe de transac��o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Esta � a a sua palavra-passe para a transac��o Authorize.net Transaction';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Tipo de Autentica��o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Esta � a autentica��o do Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Activar CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Usar CyberCash com o phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT � a identifica��o do CyberCash Merchant';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant - palavra-passe';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant � o c�digo Merchant fornecido pela CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash URL de pagamento';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'A URL de pagamento do CyberCash � a URL fornecida pela Cybercash para pagamentos seguros';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash Tipo de autentica��o';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'O tipo de autentica��o da CyberCash � a autentica��o fornecida pela Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Procura Avan�ada';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Procurar todas as categorias';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Procurar todos os detalhes produto';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Apenas Produto';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Apenas Marca/vendedor';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Apenas Descri��o do Produto';
	var $_PHPSHOP_SEARCH_AND = 'E';
	var $_PHPSHOP_SEARCH_NOT = 'N�O';
	var $_PHPSHOP_SEARCH_TEXT1 = 'A primeira lista permite seleccionar uma categoria a fim de limitar a procura.
        A segunda lista permite limitar os detalhes do produto (ex. Nome).
        Uma vez estas seleccionadas (ou deixadas por defeito), introduza a palavra-chave. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Pode adicionar mais palavras-chave e operadores como AND ou NOT.
        Seleccionando E significa que ambas as palavras t�m de estar presentes para o produto ser apresentado.
        Seleccionando N�O significa que a primeira palavra tem de estar presente 
        e a segunda n�o poder� existir para o produto ser apresentado.';
	var $_PHPSHOP_ORDERBY = 'Ordenar Por';
	var $_PHPSHOP_CUSTOMER_RATING = 'M�dia de Votos';
	var $_PHPSHOP_TOTAL_VOTES = 'Total de votos';
	var $_PHPSHOP_CAST_VOTE = 'Por favor submeta o seu voto';
	var $_PHPSHOP_RATE_BUTTON = 'Avaliar';
	var $_PHPSHOP_RATE_NOM = 'Classifica��o';
	var $_PHPSHOP_REVIEWS = 'Coment�rios de Clientes';
	var $_PHPSHOP_NO_REVIEWS = 'N�o existe qualquer coment�rio a este produto.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Seja o primeiro a fazer um coment�rio...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Por favor fa�a o seu Login para escrever um coment�rio.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Por Favor Vote o produto para completar o seu coment�rio!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Por favor escreva mais algumas palavras no seu coment�rio. N� min. de letras: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Por favor reduza o seu coment�rio. N� max. de letras: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Fa�a um coment�rio a este produto!';
	var $_PHPSHOP_REVIEW_RATE = 'Primeiro: Avalie o produto. Seleccione de 0 (fraco) a 5 estrelas (bom).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Agora escreva um (pequeno) coment�rio....(m�nimo 100, m�ximo 2000 caracteres) ';
	var $_PHPSHOP_REVIEW_COUNT = 'N� de caracteres escritos: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Gravar coment�rio';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'J� escreveu anteriormente um coment�rio a este produto. Obrigado.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Obrigado pelo seu coment�rio.';
	var $_PHPSHOP_COMMENT = 'Coment�rio';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Adicionar/Editar tipos de cart�es de cr�dito';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nome de cart�o de cr�dito';
	var $_PHPSHOP_CREDITCARD_CODE = 'Cart�o de cr�dito - abreviatura de c�digo';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tipo de cart�o de cr�dito';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Lista de cart�es de cr�dito';
	var $_PHPSHOP_UDATE_ADDRESS = 'Actualizar morada';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Mais compras';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'A sua encomenda foi adicionada com sucesso!';
	var $_PHPSHOP_ORDER_LINK = 'Siga esta hiperliga��o para ver os detalhes da sua encomenda.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'A situa��o da sua encomenda N� {order_id} foi alterada.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'A nova situa��o �:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Para ver os detalhes da sua encomenda, por favor siga esta hiperliga��o (ou copie para o seu browser):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Situa��o do estado de encomenda: a sua encomenda {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Notificar cliente?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Por favor altere a situa��o de encomenda primeiro!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Pre�o de desconto padr�o para grupo de clientes (em %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Uma quantia positiva X significa: Se o produto n�o possui pre�o atribu�do para ESTE grupo de clientes, o pre�o padr�o � reduzido em X %. Um valor negativo tem o efeito oposto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Desconto do produto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista de produtos com desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Adicionar/Editar desconto do produto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Valor do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Introduza o valor de desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tipo de desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Percentagem';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Montante';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'O valor ser� uma percentagem ou um montante?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Data de Inicio do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Especifica o dia em que o desconto entra em vigor';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Fim de data do desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Especifica o dia em que o desconto termina';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Poder� utilizar o formul�rio de Descontos do Produto para adicionar descontos!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Guardar';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Visualizar imagem em tamanho grande';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Formato de exibi��o da Moeda';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'S�mbolo da Moeda';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Aqui poder� tamb�m utilizar entidades HTML (exemplo: &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimais';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'N�mero de casa decimais (pode ser 0)<br><b> Efectua arredondamentos se o valor tiver um n�mero de diferentes casas decimais</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Simbolo decimal';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Caracter utilizado como casa decimal';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Separador de milhares';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Caracteres utilizados para separa��o de milhares (poder� estar vazio)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Formato positivo';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Formato utilizado para mostrar valores positivos.<br>(Symb s�mbolo de moeda)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Formato negativo';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Formato utilizado para mostrar valores negativos.<br>(Symb s�mbolo de moeda)';
	var $_PHPSHOP_OTHER_LISTS = 'Outras listas de produtos';
	var $_PHPSHOP_MORE_IMAGES = 'Ver mais imagens';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Imagens dispon�veis para';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Regressar aos detalhes do produto';
	var $_PHPSHOP_FILEMANAGER = 'Gestor de ficheiros';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Gestor de ficheiros: Lista de produto';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Adicionar imagem/Ficheiro';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Imagens atribu�das';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Download autorizado?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Ficheiros atribu�dos (Folha de produto,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publicado?';
	var $_PHPSHOP_FILES_LIST = 'Gestor de ficheiros::Imagem/Lista de ficheiros para';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nome de Ficheiro';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'T�tulo de Ficheiro';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tipo de Ficheiro';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Editar entrada de Ficheiro';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Imagem completa';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Imagem miniatura';
	var $_PHPSHOP_FILES_FORM = 'Carregar Ficheiro para';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Ficheiro Actual';
	var $_PHPSHOP_FILES_FORM_FILE = 'Ficheiro';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Imagem';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Carregar para';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Caminho para a Imagem padr�o';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Especifique a localiza��o do Ficheiro';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Caminho de Download (para vender artigos por download!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Cria��o autom�tica de Miniatura de imagem?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Ficheiro est� publicado?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'T�tulo do Ficheiro(que ser� visualizado pelo Cliente)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Descri��o do Ficheiro';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL do Ficheiro (opcional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Por favor forne�a um caminho v�lido!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'A miniatura foi criada com sucesso!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'N�o foi poss�vel criar um imagem miniatura!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Erro no envio de Ficheiro/Imagem';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'N�o foi poss�vel eliminar a Imagem grande.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Imagem eliminada com sucesso.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'N�o foi poss�vel apagar o ficheiro de miniatura da imagem (talvez n�o existisse): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Imagem miniatura eliminada com sucesso.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'N�o foi poss�vel apagar o ficheiro.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Ficheiro eliminado com sucesso.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Pedimos desculpa, mas o ficheiro pretendido n�o foi encontrado!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Imagem n�o encontrada!';
	var $_PHPSHOP_COUPON_MOD = 'Cup�o';
	var $_PHPSHOP_COUPONS = 'Cup�es';
	var $_PHPSHOP_COUPON_LIST = 'Lista de Cup�es';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Cup�o j� foi descontado.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Cup�o descontado! Muito Obrigado.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Se possui um c�digo de cup�o de desconto, por favor insira-o em baixo:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Submeter';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Este c�digo de cup�o j� existe. Por favor tente novamente.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Actualiza��o de Cup�o';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Clique num c�digo de Cup�o para o editar ou eliminar:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'C�digo';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Percentagem ou Montante';
	var $_PHPSHOP_COUPON_TYPE = 'Tipo de Cup�o';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Um Cup�o de Oferta � eliminado depois do mesmo ser descontado. Um Cup�o permanente poder� ser utilizado quantas vezes o cliente pretender.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Cup�o de Oferta';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Cup�o Permanente';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valor';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Apagar c�digo';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Tem a certeza que pretende eliminar este c�digo de cup�o?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Por favor complete todos os campos.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'O valor do Cup�o dever� ser em n�meros.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Novo Cup�o';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'C�digo de Cup�o';
	var $_PHPSHOP_COUPON_PERCENT = 'Percentagem';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Valor';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'C�digo de Cup�o guardado.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Guardar Cup�o';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Desconto de Cup�o';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'O C�digo de Cup�o n�o foi encontrado. Por favor verifique os dados e tente novamente.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Utiliza��o de Cup�o activado';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Se activou a utiliza��o de Cup�o, permite aos clientes o preenchimento de valores para ganhar descontos com as suas compras.';
	var $_PHPSHOP_FREE_SHIPPING = 'Transporte gratuito';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Entrega gratuita para esta encomenda!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'M�nimo de valor obrigat�rio para entrega gratuita';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'O valor (Inclui IVA!) � o m�nimo para que obtenha entrega gratuita
                                                (exemplo: <strong>50</strong> significa Entrega gratuita quando o cliente efectua a confirma��o de sa�da
                                                com $50 (IVA inclu�do) ou mais.';
	var $_PHPSHOP_YOUR_STORE = 'A sua Loja';
	var $_PHPSHOP_CONTROL_PANEL = 'Painel de Controlo';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Bot�o PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Mostrar ou esconder o Bot�o PDF na Loja';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Dever� concordar com os Termos de Servi�o em cada encomenda?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Confirme se pretende que o cliente aceite os Termos de Servi�o em todas as encomendas (antes de colocar a encomenda).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Tipo de Conta Banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Confirmar';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Confirma��o do Neg�cio';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'A guardar...';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Factura parcelada?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define se pretende factura parcelada.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Erro interno ao processar o pedido';
	var $_PHPSHOP_PAYMENT_ERROR = 'Falha ao processar o pagamento';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Pagamento processado com sucesso';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS n�o conseguiu processar o pedido de taxa de transporte.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Dias garantidos para a Entrega';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS - Pesquisa';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Como voc� entrega os pacotes � UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Pacote UPS ?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Seleccione o tipo padr�o de embalagens.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Entrega Residencial?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residencial (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Entrega Comercial (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Valor para entrega residencial (RES) ou para comercial (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Despesa de embalagem';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'A sua despesa de embalagem para m�todo da entrega.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Classe de taxa��o';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Utilize a classe de taxa seguinte como taxa de envio.';
	var $_PHPSHOP_ERROR_CODE = 'C�digo de Erro';
	var $_PHPSHOP_ERROR_DESC = 'Descri��o de Erro';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Mostrar/ Alterar a Palavra-passe de transac��o';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Mostrar/ Alterar a Palavra-passe/ chave de transac��o';
	var $_PHPSHOP_TYPE_PASSWORD = 'Por favor insira a sua palavra-passe de utilizador';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Palavra-passe actual';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Chave actual de transac��o';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'A chave de Transac��o foi modificada com sucesso.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Pedido/Captura valor do c�digo de Cart�o de cr�dito (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Verificar um valor CVV2/CVC2/CID v�lido (tr�s ou quatro d�gitos do verso do cart�o de cr�dito ou da face do cart�o se for American Express)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Por favor digite os tr�s ou quatro n�meros do verso do seu cart�o de cr�dito (ou da face do cart�o se for American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Tem de inserir o c�digo do seu cart�o de cr�dito para prosseguir.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'INDIQUE um nome de ficheiro';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTA: Aqui poder� inserir um nome de ficheiro. <strong>Se inserir aqui um nome de ficheiro, n�o ir� ser efectuado o carregamento de nenhum ficheiro!!! Ter� de efectuar o carregamento manualmente atrav�s de FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OU efectuar o upload de novo ficheiro';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Poder� efectuar o carregamento de um ficheiro local. Este ficheiro ir� ser o produto que vende. Um ficheiro j� existente ir� ser substitu�do.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'O texto que aqui inserir ir� ser apresentado ao cliente no folheto do produto.<br />exemplo: 24 horas, 48 horas, 3 a 5 dias, por encomenda...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OU seleccione uma imagem para ser apresentada na p�gina de detalhes (folheto).<br />As imagens ser�o colocadas na directoria <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Lista de atributos';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos de formatos da lista de atributos:</h4>
        <pre>Tamanho,XL[+1.99],M,S[-2.99];Cor,Vermelho,Verde,Amarelo,Custodecor[=24.00];e adiante,..,..</pre>
        <h4>Ajustes de pre�os para utilizar a modifica��o avan�ada dos atributos:</h4>
        <pre>
        + == Adicione este valor ao pre�o configurado.<br />
        - == Subtraia este valor ao pre�o configurado.<br />
        = == Configure os pre�os dos produtos para este valor.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Lista de atributos personalizada';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos para o tipo de formato das listas dos atributos:</h4>
        <pre>Nome;Extras;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Escolha m�ltipla: mantenta a tecla CTRL pressionada ao escolher com o rato';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Activar o pagamento eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Confirmar para utilizar eProcessingNetwork.com com o Virtuemart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Modo Teste ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Seleccione \'Sim\' enquanto testa. Seleccione \'N�o\' para activar transac��es em tempo real.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'Identifica��o de autentica��o: eProcessingNetwork.com ';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Esta � a sua identifica��o de autentica��o para o eProcessingNetwork.com ';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Chave de transac��o eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Esta � a sua chave de transac��o para o eProcessingNetwork.com ';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Tipo de autentica��o';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Este � o tipo de autentica��o para o eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Produtos relacionados';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Poder� construir rela��es entre produtos se utilizar esta lista. Apenas ter� de seleccionar um ou mais produtos e assim eles ficar�o <strong>relacionados</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Tamb�m poder� ter interesse no(s) seguinte(s) produto(s)';
	var $_PHPSHOP_IMAGE_ACTION = 'Redimensionamento';
	var $_PHPSHOP_NONE = 'nenhum';
	var $_PHPSHOP_ORDER_HISTORY = 'Hist�rico da Encomenda';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Coment�rios';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Coment�rios na sua encomenda';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Incluir este coment�rio?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Data adicionada';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Cliente notificado?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Mudan�a do estado da encomenda';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS - Nome de utilizador na empresa transportadora';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'USPS Nome de utilizador que obteve no registo em www.usps.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS palavra-passe na empresa transportadora';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'USPS palavra-passe que obteve no registo em www.usps.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS servidor da empresa transportadora';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS servidor da empresa transportadora. Actualmente s� funciona num servidor online! Dever� ser production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS - caminho da transportadora';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS caminho da transportadora, dever� ser /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS Tamanho da embalagem';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'As escolhas s�o Regular, Grande e Muito grande. Esta configura��o deve ser feita para as suas encomendas mais habituais e s�o baseadas nas dimens�es do pacote. Padr�o � Regular';
	var $_PHPSHOP_USPS_PADDING = 'Percentagem a adicionar ao peso para pacote de envio. (Incluir %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Adaptar o peso para permitir o peso adicional do pacote e caixa de envio. Isto permite adicionar peso �s defini��es do peso dos itens.  � necess�rio incluir o sinal de percentagem (%).  Exemplo 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Taxa de manuseamento';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'A sua taxa de manuseamento para este m�todo de transporte.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Pretende cobrar um extra aos utilizadores para envios USPS? Em formato Euro 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'A sua taxa de manuseamento para Transportes internacionais USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Pretende cobrar um extra aos utilizadores de envio internacionais na USPS? Acresce �s taxas normais. Em formato Euro 2.00.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'A sua taxa por kilo para transportes internacionais USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'A sua taxa por kilo para transportes internacionais USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'Se forem utilizadas encomendas parceladas e for inferior a 1,7kg e acima de 16kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Este pacote pode ser gerido por uma m�quina?  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS Correio dom�stico';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS Correio expresso em m�o';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'USPS Correio expresso normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS Correio expresso em envelope de tarifa plana (31 x 24cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio expresso em envelope de tarifa plana. Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS Correio priorit�rio';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'USPS Correio priorit�rio normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'USPS Correio priorit�rio em envelope de taxa plana (31 x 24cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio priorit�rio em envelope de taxa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS Correio priorit�rio em caixa de tarifa plana (28.6 x 22.2 x 15.2cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio priorit�rio em caixa de tarifa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber na caixa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS Correio priorit�rio em caixa de tarifa plana (35 x 30 x 8.8cm)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio priorit�rio em caixa de tarifa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber na caixa.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS Correio de Primeira Classe (inferior a 390g.)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio de Primeira Classe.  Isto s� ser� exibido se o peso do pacote for inferior a 40kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS Envio de parcelas';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'USPS Correio parcelado normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS Conjunto de material impresso';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Seleccionar se pretende enviar via USPS Conjunto de material impresso.  Padr�o deve ser N�o a n�o ser que envie revistas ou jornais em grupos.  Limite s�o 6,8kg.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS Correio de Media';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio de Media.  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS Correio de biblioteca';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio de Biblioteca.  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS Correio internacional';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS Servi�o global expresso de documentos registados';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Seleccionar se pretende enviar via USPS Servi�o global expresso de documentos registados.  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS Servi�o global expresso de documentos n�o-registados';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Seleccionar se pretende enviar via USPS Servi�o global expresso de documentos n�o-registados.  Padr�o deve ser N�o.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS Correio expresso global (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'USPS Correio expresso global normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS Correio global priorit�rio em Envelope Grande de taxa plana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio global priorit�rio em Envelope grande de taxa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS Correio global priorit�rio em Envelope pequeno de taxa plana';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio global priorit�rio em Envelope pequeno de taxa plana.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS Correio de prioridade global - Peso vari�vel';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'USPS Correio priorit�rio global normal.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS Correio de carta por via a�rea';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio de carta por via a�rea.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS envio de parcela por via a�rea';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'USPS envio normal de parcela por via a�rea.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS Correio carta econ�mico';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Seleccionar se pretende enviar via USPS Correio carta econ�mico.  Padr�o deve ser N�o j� que pode ser mais barato que a tarifa actual mas pode n�o caber no envelope.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS envio econ�mico de parcela';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Correio parcelado normal econ�mico.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS n�o conseguiu processar o pedido de taxa de transporte.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Par�metros';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista de tipos de produto';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Adicionar/Editar tipo de produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'lista de tipos de produtos para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Listar tipos de produtos';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Adicionar tipo de produto para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Adicionar tipo de produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Nome do tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Descri��o do tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Par�metros';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informa��o do tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'P�gina para o tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Folheto de tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Par�metros do tipo de produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Par�metros de informa��o';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Tipo de produto n�o encontrado!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nome de par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Este nome ser� o nome da coluna da tabela. Dever� ser �nico e sem espa�os .<BR>Por exemplo: material_principal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiqueta do par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Descri��o do par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Tipo de par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Integrar';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Texto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Pequeno texto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Flutuar';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'caracteres';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Data e hora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Data';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'AAAA-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'hora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Quebra de p�gina';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Valores m�ltiplos';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valores poss�veis';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Mostrar valores poss�veis como selec��es m�ltiplas?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Valores programados, par�metros apenas poder�o ter estes valores. Exemplos de poss�veis valores:</strong><BR><span class="Nome de sec��o">A�o;Madeira;Plastico;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valor por defeito';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Para par�metros de defeito utilize o seguinte formato:<ul><li>Data: YYYY-MM-DD</li><li>Hora: HH:MM:SS</li><li>Data & Hora: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unidade';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Procura avan�ada de acordo com os par�metros';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Procura de par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Ir� encontrar produtos de acordo com os par�metros t�cnicos?<BR>Poder� utilizar um formul�rio j� existente:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Pedimos desculpa mas n�o existe uma categoria para procura.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Pedimos desculpa mas n�o existe nenhum tipo de produto com esta designa��o.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = '� id�ntico';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'N�o � id�ntico';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Procura por texto completo';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Todos os seleccionados';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Qualquer dos seleccionados';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Apagar formul�rio';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Procurar na categoria';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Alterar par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Ordem decrescente';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ordem crescente';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Par�metros da categoria';
	var $_PHPSHOP_FEE = 'Comiss�o';
	var $_PHPSHOP_PRODUCT_CLONE = 'Clonar produto';
	var $_PHPSHOP_CSV_SETTINGS = 'Configura��es';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimitador';
	var $_PHPSHOP_CSV_ENCLOSURE = 'S�mbolo identificador de campo';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Carregar (Upload) um ficheiro CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Submeter ficheiro CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Carregar de pasta';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Carregar ficheiro CSV do Servidor';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exportar para ficheiro CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Escolher tipo de ordena��o para os campos';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Ordena��o por defeito';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'A minha ordena��o personalizada';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exportar todos os produtos para um ficheiro CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Importa��o de CSV /Exportar Configura��o';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Guardar altera��es';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nome do Campo';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valor por defeito';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Campo de ordena��o';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Campo obrigat�rio?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importar/ Exportar';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Adicionar um novo campo';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documenta��o';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Pedimos desculpa mas o produto que procura n�o foi encontrado!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Mostrar produtos esgotados';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Quando activado, os produtos que n�o se encontram em stock s�o exibidos. Caso contr�rio os produtos ficar�o invis�veis.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Numero de unidades por embalagem:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Numero de unidades por caixa:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Ocultar os produtos esgotados';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Produtos em promo��o e com descontos';
	var $_PHPSHOP_FEATURED = 'Em destaque';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Voltar ao Pa�s';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Voltar ao gestor de ficheiros';
	var $_PHPSHOP_ADD_STATE = 'Adicionar um estado';
	var $_PHPSHOP_LIST_STATES = 'Listar estados';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'destaques E descontos';
	var $_PHPSHOP_SHOW_FEATURED = 'Produtos em destaque';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Produtos com desconto';
	var $_PHPSHOP_FILTER = 'Filtro';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Voltar � P�gina Frontal';
	var $_PHPSHOP_EXPAND_TREE = 'Expandir �rvore';
	var $_PHPSHOP_COLLAPSE_TREE = 'Encolher a �rvore';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Pre�o com desconto';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Aqui poder� superar o desconto normal com um desconto especial sobre o pre�o deste produto.<br/>
A loja ir� criar um novo desconto a partir do pre�o j� com desconto.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Pre�o Unit�rio';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'A Loja enconta-se Offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Se activado, A loja ir� mostrar uma mensagem de Offline.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Mensagem de offline';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefixo da tabela para tabelas de loja';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'ser� <strong>vm</strong> por defeito';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Mostrar p�gina de navega��o no topo da lista de produtos?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Acciona LIGADO ou DESLIGADO para mostrar a p�gina de navega��o no topo das listas de produtos na pagina frontal.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Mostrar n�mero de produtos?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Mostrar o n�mero de produto numa categoria como a categoria(4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Estilo do bot�o: Adicionar ao carrinho';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Activar o redimensionamento din�mico da imagem miniatura?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Se seleccionado, activa o redimensionamento din�mico da imagem. Significa que todas as imagens Miniatura ser�o redimensionadas para os tamanhos que mencionou em baixo,
        utilizando as fun��es PHP (poder� seleccionar se pretende o suporte GD2 procurando no "System" -> "Informa��o de sistema" -> "Informa��o de PHP" -> gd.
        A qualidade da imagem Miniatura � sempre melhor que imagens redimensionadas pelo browser. As imagens geradas s�o colocadas na directoria /shop_image/product/resized. Se as imagens que j� foram redimensionadas, a c�pia ir� ser enviada para o browser, para que a imagem n�o seja redimensionada consecutivamente.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Largura da imagem Miniatura';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'A <strong>largura</strong> da imagem Miniatura, redimensionada.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Altura da imagem Miniatura';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'a <strong>altura</strong> da imagem Miniatura, redimensionada.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Por favor, seleccione pelo menos uma Checkbox na configura��o do Transporte!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configura��o do Pre�o';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Mostrar pre�os ao(s) seguintes(s) Grupo(s) de Membros';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'O Grupo de Membros seleccionado e todos os outros grupos com Permiss�es altas est�o autorizados a ver os pre�os.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Mostrar "(inclui xx% IVA)" quando aplic�vel?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Quando activo, exibe o texto "(inclui xx% IVA)" quando os pre�os s�o mostrados com IVA inclu�do
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = Mostra a etiqueta com o pre�o do transporte?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Quando seleccionado, a etiqueta do pre�o � derivada a partir das unidades por embalagem do produto:
<strong>Pre�o Unit�rio (10 unidades)<strong><br/>
Quando n�o est� seleccionado, o pre�o aparecer� no formato: <strong>Pre�o: � xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'mais op��es de sistema';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Op��es de sistema';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Caracter�sticas da P�gina frontal';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configura��o da taxa';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantidade inicial';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantidade final';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Op��es de Registo do utilizador';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Registo do utilizador autorizado?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Necess�rio activa��o para nova conta?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Utilizar modo Silencioso no registo do utilizador?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Quando activado, os utilizadores n�o necessitam preencher o nome de utilizador nem a palavra-passe para criar nova conta. Em vez disto receber� um e-mail com uma palavra-passe gerada aleatoriamente. Os detalhes do registo ir�o ser enviados ao cliente.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Ol� %s,

Agradecemos o seu registo em %s. A sua conta de cliente foi criada.
Poder� efectuar a autentica��o para %s utilizando o nome de utilizador e palavra-passe:

Nome de utilizador - %s
Palavra-passe - %s
';
	var $_PEAR_LOG_CRIT = 'Cr�tico';
	var $_PEAR_LOG_ERR = 'Erro';
	var $_PEAR_LOG_WARNING = 'Aviso';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Informa��o';
	var $_PEAR_LOG_ALERT = 'Alerta';
	var $_PEAR_LOG_EMERG = 'Emerg�ncia';
	var $_PEAR_LOG_NOTICE = 'Notifica��o';
	var $_PEAR_LOG_DEBUG = 'Depurar';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Activar pagamento PayFlow Pro?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Activar para usar VeriSign\'s PayFlow Pro com a loja VM.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Modo de Teste ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Seleccione \'Sim\' Enquanto testa. Seleccione \'N�o\' para activar transac��es em tempo real.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign Processando ID de Parceiro';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'O ID de Parceiro fornecido pelo Distribuidor VeriSign que o registou no servi�o PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'Autentica��o para o PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Estes s�o os dados para autentica��o no servi�o PayFlow Pro';
	var $_VM_TAXDETAILS_LABEL = 'Total de taxas e impostos';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Ordena��o padr�o dos produtos';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Define o campo de ordena��o padr�o dos produtos ao serem visualizados';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Campos "Ordenar por" dispon�veis';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Escolha quais os campos "Ordenar por" que deseja. Cada um define um m�todo de ordena��o diferente segundo o crit�rio escolhido. Se n�o escolher nenhum, a op��o "Ordenar por" n�o ser� exibida.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Apresenta uma curta nota sobre a sua "pol�tica de devolu��es" na p�gina de confirma��o de encomenda?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'Na maior parte dos pa�ses europeus as lojas s�o obrigadas por lei a informar os seus clientes sobre a sua pol�tica de devolu��o, cancelamento de encomendas e resolu��o de contratos. Assim deve estar activado na maioria dos casos.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Informa��o legal (vers�o resumida).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Este texto informa os seus clientes sobre a sua pol�tica de devolu��o, cancelamento de encomendas e resolu��o de contratos. � exibido na �ltima p�gina da Sa�da com Compras, por cima do bot�o "Confirmar encomenda".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Vers�o completa da pol�tica de devolu��es (hiperliga��o para um artigo texto).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Por favor, crie primeiro um artigo texto com os detalhes da sua pol�tica de devolu��o, cancelamento de encomendas e resolu��o de contratos.
	 Depois deve indic�-lo aqui.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Pol�tica de devolu��es</h5>

Se o produto n�o corresponder �s suas expectativas, assiste-lhe o direito de resolver o contrato nos 7 dias ulteriores � entrega da mercadoria. Para o efeito, dever� proceder ao envio de carta registada com Aviso de Recep��o, comunicando ao vendedor a vontade de resolver o contrato.
O consumidor disp�e de um prazo de 15 dias �teis a contar da recep��o da mercadoria para devolver a mesma � entidade fornecedora, efectuando esta a sua troca ou reembolso. Esta garantia aplica-se a produtos em estado de novo, sem utiliza��es e na embalagem original.
No caso do direito de resolu��o ser utilizado, os montantes que j� tiverem sido pagos pelo consumidor ser�o reembolsados no prazo de 15 dias a contar da data da recep��o das mercadorias devolvidas. 
Para mais informa��es sobre cancelamento de encomendas e devolu��o de produtos, veja a p�gina <a href="%s" onclick="%s" target="_blank">A nossa pol�tica de devolu��es</a>.';
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
	var $_BUTTON_SEND_REG = 'Submeter Registo';
	var $_CONTACT_FORM_NC = 'Please make sure the form is complete and valid.';
	var $_CMN_REQUIRED = 'Obrigat�rio';
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
	var $_USERNAME = 'Utilizador';
	var $_PASSWORD = 'Palavra passe';
	var $_BUTTON_LOGIN = 'Entrar';
	var $_REGISTER_UNAME = 'Utilizador';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Por favor insira o seu nome.';
	var $_REGWARN_UNAME = 'Por favor insira o utilizador.';
	var $_REGWARN_MAIL = 'Por favor insira um e-mail v�lido.';
	var $_SEND_SUB = 'Detalhes da conta %s em %s';
	var $_ASEND_MSG = 'Ol� %s,
	
	Um novo utilizador foi registado em %s.
	Este email contem os seus dados:
	
	Nome - %s
	e-mail - %s
	Utilizador - %s
	
	Please do not respond to this message as it is automatically generated and is for information purposes only';
	var $_REG_COMPLETE = '<div class="componentheading">Registo Completo!</div><br />Pode agora autenticar-se.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Registration Complete!</div><br />Your account has been created and activation link has been sent to the e-mail address you entered. Note that you must activate the account by clicking on the activation link when you get the e-mail before you can login.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Last Updated';
	var $_NOT_AUTH = 'You are not authorized to view this resource.';
	var $_DO_LOGIN = 'Necessita de autenticar-se.';
	var $_VALID_AZ09 = 'Please enter a valid %s.  No spaces, more than %d characters and contain 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Published';
	var $_CMN_UNPUBLISHED = 'Unpublished';
	var $_MORE = 'More...';
	var $_EMPTY_CATEGORY = 'This Category is currently empty.';
	var $_BUTTON_LOGOUT = 'Terminar';
	var $_NO_ACCOUNT = 'N�o tem conta?';
	var $_CREATE_ACCOUNT = 'Registe-se';
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
	var $_PROMPT_PASSWORD = 'Perdeu a palavra passe?';
	var $_HI = 'Caro(a)';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Detalhes de novo utilizador';
	var $_NEW_USER_MESSAGE = 'Ol� %s,





foi adicionado como novo utilizador %s pelo Administrador.



Este email cont�m o seu Utlilizador e password ligar se autenticar em %s



Username - %s

Password - %s





Por favor n�o responda a esta mensagem pois foi gerada autom�ticamente e destina-se exclusivamente a si';
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