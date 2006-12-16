<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: admin.martlanguages.php 466 2006-11-07 20:40:22 +0100 (Di, 07 Nov 2006) soeren_nb $
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
	var $_PHPSHOP_SELECT_CATEGORY = 'Selecione a Categoria:';
	var $_PHPSHOP_ADMIN = 'Administra��o';
	var $_PHPSHOP_PRODUCT = 'Produto';
	var $_PHPSHOP_LIST = 'Listar';
	var $_PHPSHOP_ALL = 'Todos';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Todos os Produtos';
	var $_PHPSHOP_VIEW = 'Ver';
	var $_PHPSHOP_SHOW = 'Mostrar';
	var $_PHPSHOP_ADD = 'Adicionar';
	var $_PHPSHOP_UPDATE = 'Atualizar';
	var $_PHPSHOP_DELETE = 'Eliminar';
	var $_PHPSHOP_SELECT = 'Selecionar';
	var $_PHPSHOP_SUBMIT = 'Submeter';
	var $_PHPSHOP_RANDOM = 'Produtos Aleat�rios';
	var $_PHPSHOP_LATEST = '�ltimos Produtos';
	var $_PHPSHOP_HOME_TITLE = 'In�cio';
	var $_PHPSHOP_CART_TITLE = 'Pedido';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Terminar Pedido';
	var $_PHPSHOP_LOGIN_TITLE = 'Login';
	var $_PHPSHOP_LOGOUT_TITLE = 'Logout';
	var $_PHPSHOP_BROWSE_TITLE = 'Procurar Artigos';
	var $_PHPSHOP_SEARCH_TITLE = 'Procurar';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Conta de Utilizador';
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
	var $_PHPSHOP_CART_SHOW = 'Mostrar Pedido';
	var $_PHPSHOP_CART_ADD_TO = 'Adicionar';
	var $_PHPSHOP_CART_NAME = 'Nome';
	var $_PHPSHOP_CART_SKU = 'Ref.';
	var $_PHPSHOP_CART_PRICE = 'Pre�o';
	var $_PHPSHOP_CART_QUANTITY = 'Quantidade';
	var $_PHPSHOP_CART_SUBTOTAL = 'Subtotal';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Adicionar uma nova';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Endere�o para envio';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'A procura devolveu 0 resultados.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Pre�o: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Encomendas';
	var $_PHPSHOP_NO_CUSTOMER = 'Lamentamos, mas n�o � um cliente
Registrado.<BR>Por favor, queira registar-se primeiro.<BR>Obrigado.';
	var $_PHPSHOP_DELETE_MSG = 'Deseja realmente eliminar esta entrada?';
	var $_PHPSHOP_THANKYOU = 'Obrigado pelo seu pedido.';
	var $_PHPSHOP_NOT_SHIPPED = 'Ainda n�o foi enviado.';
	var $_PHPSHOP_EMAIL_SENDTO = 'Um e-mail de confirma��o foi enviado para';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Lamentamos, mas n�o existem utilizadores
que possam ser adicionados � lista de utilizadores com_phpshop';
	var $_PHPSHOP_ERROR = 'ERRO';
	var $_PHPSHOP_MOD_NOT_REG = 'M�dulo n�o Registrado.';
	var $_PHPSHOP_MOD_ISNO_REG = 'n�o � um m�dulo phpShop v�lido.';
	var $_PHPSHOP_MOD_NO_AUTH = 'N�o tem permiss�o para aceder ao m�dulo
requisitado.';
	var $_PHPSHOP_PAGE_404_1 = 'A p�gina n�o existe';
	var $_PHPSHOP_PAGE_404_2 = 'O arquivo n�o existe. N�o foi possivel
encontrar:';
	var $_PHPSHOP_PAGE_403 = 'Privil�gios Insuficientes';
	var $_PHPSHOP_FUNC_NO_EXEC = 'N�o tem privil�gios suficientes para executar
';
	var $_PHPSHOP_FUNC_NOT_REG = 'Fun��o n�o Registrada';
	var $_PHPSHOP_FUNC_ISNO_REG = ' n�o � uma fun��o de VirtueMart.';
	var $_PHPSHOP_ADMIN_MOD = 'Administra��o';
	var $_PHPSHOP_USER_LIST_MNU = 'Listar Utilizadores';
	var $_PHPSHOP_USER_LIST_LBL = 'Lista de Utilizadores';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Utilizador';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nome Completo';
	var $_PHPSHOP_USER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_USER_FORM_MNU = 'Adicionar Utilizador';
	var $_PHPSHOP_USER_FORM_LBL = 'Adicionar/Atualizar Informa��o do
Utilizador';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Cobrar a ';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Endere�o de Envio';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Adicionar Endere�o';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'N�o existem Endere�os de
Envio.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Endere�o';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Primeiro Nome';
	var $_PHPSHOP_USER_FORM_LAST_NAME = '�ltimo Nome';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_USER_FORM_TITLE = 'Cargo';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Utilizador';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Password';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirmar Password';
	var $_PHPSHOP_USER_FORM_PERMS = 'Privil�gios';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'N�mero de Cliente/ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Empresa';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Endere�o 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Endere�o 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Cidade';
	var $_PHPSHOP_USER_FORM_STATE = 'Distrito';
	var $_PHPSHOP_USER_FORM_ZIP = 'CEP';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_USER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Telem�vel';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'E-mail';
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
	var $_PHPSHOP_MODULE_FORM_MENU = 'Menu?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Encomendas';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'C�digo de Idioma';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'arquivo de Linguagem';
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
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'c�digo Pa�s (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'c�digo Pa�s (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Listar Distritos';
	var $_PHPSHOP_STATE_LIST_LBL = 'Listar Distritos para: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Adicionar/Atualizar Distrito';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nome do Distrito';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'c�digo do Distrito (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'c�digo do Distrito (2)';
	var $_PHPSHOP_ADDRESS = 'Endere�o';
	var $_PHPSHOP_CONTINUE = 'Continuar';
	var $_PHPSHOP_EMPTY_CART = 'O seu carrinho est� vazio.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping Servidor InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Servidor-InterShipper Ping ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Falha em Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Resposta de Ping InterShipper';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Tempo de<BR>Resposta';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Listar M�todos de Envio';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'M�todo de Envio Actual';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'M�todo de Envio';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Activo';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Despesas de transporte';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Tempo de Entrega';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'porcento';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'dias';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configurar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Adicionar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configurar M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Atualizar';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'M�todo de Envio';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'AtImpostor';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Despesas de transporte';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Tempo de Entrega';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'tarifa plana';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'porcento';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'dias';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Cargas Pesadas';
	var $_PHPSHOP_ORDER_MOD = 'Encomendas';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Confirmar Encomenda';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Cancelar Encomenda';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Imprimir Encomenda';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Apagar Encomenda';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Listar Encomendas';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Lista de Encomendas';
	var $_PHPSHOP_ORDER_LIST_ID = 'N�mero de Encomenda';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Data';
	var $_PHPSHOP_ORDER_LIST_MDATE = '�ltima Modifica��o';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Estado';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_ITEM = 'Artigos';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordem de Compra';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'N�mero de Encomenda';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Data';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Estado das Encomendas';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Informa��o do Cliente';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Informa��o de Cobran�a';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Informa��o de Envio';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Cobrar a';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Enviar a';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nome';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Empresa';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Endere�o 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Endere�o 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Cidade';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Distrito';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'CEP';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Pa�s';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Telefone';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Ordenar Itens';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Quantidade';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Qtd';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Ref.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Pre�o';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'SubTotal';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Total de Imposto';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Imposto';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'M�todo de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nome da Conta';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'N�mero da Conta';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Data de Expira��o';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Registo de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Informa��o de Envio';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Informac�o de Pagamento';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Modo de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Data de Envio';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Pre�o de Envio';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Listar Estado das Encomendas';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Adicionar Estado da Encomenda';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'C�digo de Estado da Encomenda';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nome de Estado da Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Estado da Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'C�digo de Estado da Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nome de Estado da Encomenda';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Listar Encomendas';
	var $_PHPSHOP_PRODUCT_MOD = 'Produtos';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Produto Actual';
	var $_PHPSHOP_CURRENT_ITEM = 'Artigo Actual';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Invent�rio';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Ver Invent�rio';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Pre�o';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'N�mero';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Listar Produtos';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Lista de Produtos';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publicar';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Procurar produto';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'alterado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'com pre�o
alterado';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'sem pre�o';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Depois';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Antes';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Adicionar Produto';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editar Produto';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Ver Flyer de Produtos da Loja';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Adicionar Artigo';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Adicionar outro Artigo';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Novo Produto';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Atualizar Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informa��o do Produto';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Estado';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimens�es e Peso';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Imagens';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Novo Artigo';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Atualizar Artigo';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Estado';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimens�es e Peso';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Imagens';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Regressar a Produto Relacionado';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Para Atualizar a imagem
actual, v� � pasta e insira a nova imagem.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Escreva ';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Artigos';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Atributos';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Deseja realmente eliminar
este produto\\ne e todos os artigos relacionados com ele?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Deseja realmente eliminar
este Artigo?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Fornecedor';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Fabricante';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nome';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Pre�o Retalho';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Pre�o (s/ Imposto)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Descri��o curta';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'Em Invent�rio';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Em Encomenda';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Data de Disponibilidade';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Em promo��o (Produto Especial)';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Tipo de Desconto';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Tamanho';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Largura';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Altura';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unidade de Medida';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Peso';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unidade de Peso';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Imagem Pequena';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Imagem Grande';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'Quilos';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'Cent�metros';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unidade';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'Unid';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Unidades no Pacote';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Aqui pode inserir o
n�mero de unidades no pacote. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Unidades na Caixa';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Aqui pode inserir o n�mero de
unidades na caixa. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Resultados de Adicionar
Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Resultados de Atualizar
Produto';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Resultados de Adicionar
Artigo';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Resultados de Atualizar
Artigo';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Carregar CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Pastas de Produtos';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Lista de Categorias';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Categorias';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Adicionar Categoria';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Informa��o';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nome';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Relacionado';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Descri��o da Categoria';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Flypage da Categoria';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Listar Atributos';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Listar Atributos por';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nome dos Atributos';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Listar Encomenda';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Adicionar Atributos';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formul�rio de Atributos';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Novo Atributo de Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Atualizar Atributos de
Produto';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Novo Atributo de Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Atualizar Atributos de
Item';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nome de Atributo';
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
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Atualizar Pre�o de Produto';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Novo Pre�o de Item';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Atualizar Pre�o de Item';
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
	var $_PHPSHOP_RB_REPORT_FOR = 'Fazer Relat�rio para ';
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
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Utilizador';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nome Completo';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Adicionar Cliente';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Informa��o';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Informa��o de Cobrar a';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Informa��o de Envio';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Adicionar Endere�o';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Endere�o 2';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Utilizador';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Primeiro Nome';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = '�ltimo Nome';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nome do Cliente';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Password';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirmar Password';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Grupo';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Endere�o 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Endere�o 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Cidade';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Distrito';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'CEP';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Telem�vel';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
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
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nome';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formul�rio de Grupos de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Adicionar Grupo de Clientes';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nome';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Descri��o';
	var $_PHPSHOP_STORE_MOD = 'Loja';
	var $_PHPSHOP_STORE_FORM_MNU = 'Editar Loja';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informa��o sobre a Loja';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informa��o do Contacto';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Imagem';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Enviar Imagem para o servidor';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nome da Loja';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nome da Empresa';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Endere�o 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Endere�o 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Cidade';
	var $_PHPSHOP_STORE_FORM_STATE = 'Distrito';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_STORE_FORM_ZIP = 'CEP';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = '�ltimo Nome';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Primeiro Nome';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_STORE_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Pasta para a Imagem';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_PAYMENT = 'Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'M�todos Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Lista de M�todos de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nome';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Cybercash';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Adicionar M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formul�rio de M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nome de Formul�rio de Pagamento';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Grupo de Cliente';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Desconto';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'C�digo';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Listar Encomendas';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Usar Cybercash';
	var $_PHPSHOP_TAX_MOD = 'Imposto';
	var $_PHPSHOP_TAX_RATE = 'Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_MNU = 'Listar Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_LBL = 'Lista Taxas de Imposto';
	var $_PHPSHOP_TAX_LIST_STATE = 'Imposto por Distrito ou Regi�o';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Imposto no Pa�s';
	var $_PHPSHOP_TAX_LIST_RATE = 'Lista de Taxas de Imposto';
	var $_PHPSHOP_TAX_FORM_MNU = 'Adicionar Taxa de Imposto';
	var $_PHPSHOP_TAX_FORM_LBL = 'Adicionar Informa��o sobre o Imposto ';
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
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Endere�o 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Endere�o 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Cidade';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Distrito';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'CEP';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Telefone';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Categoria';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = '�ltimo Nome';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Primeiro Nome';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Nome do Meio';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'T�tulo';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Telefone 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Telefone 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Pasta de Imagens';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Listar Categorias de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Lista das Categorias de Vendedores';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendedores';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Adicionar Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formul�rio de Categoria de Vendedor';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Informa��o';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nome da Categoria';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Descri��o';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Fabricantes';
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
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'P�gina do Fabricante';
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
	var $_PHPSHOP_CART_ACTION = 'Executar';
	var $_PHPSHOP_CART_UPDATE = 'Atualizar';
	var $_PHPSHOP_CART_DELETE = 'Apagar';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Pre�o';
	var $_PHPSHOP_PRODUCT_CALL = 'Clicar para saber o Pre�o';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Anterior';
	var $_PHPSHOP_PRODUCT_NEXT = 'Seguinte';
	var $_PHPSHOP_CART_TAX = 'Imposto';
	var $_PHPSHOP_CART_SHIPPING = 'Envio';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Pr�ximo';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Registar-se';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Informa��o de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Endere�o';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Informa��o de Envio';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Empresa';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nome';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Endere�o';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Telefone';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Informa��o de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nome no cart�o';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'M�todo de Pagamento';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'N�mero de Cart�o de Cr�dito';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Data de Expira��o';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Completar a Encomenda';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Informa��o requerida quando o pagamento por Cart�o de Cr�dito � seleccionado.';
	var $_PHPSHOP_ZONE_MOD = 'Envio por Zonas';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Listar Zonas';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Adicionar Zona';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Atribuir Zona';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Pa�s';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zona Actual';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Atribuir Zona';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Atualizar';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Atribuir Zonas';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Descri��o da Zona';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Custo por Zona do Artigo';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Limite de Custo da Zona';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Lista das Zonas';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nome da Zona';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Descri��o da Zona';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Custo por Zona do Artigo';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Limite de Custo da Zona';
	var $_PHPSHOP_LOGIN_FIRST = 'Por favor, fa�a o Login ou registe-se primeiro.<br>Obrigado.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Termos do Servi�o';
	var $_PHPSHOP_AGREE_TO_TOS = 'Tem de concordar com os Termos do Servi�o.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Concordo com os Termos do Servi�o';
	var $_PHPSHOP_LEAVE_BLANK = '(deixar em BRANCO se n�o tiver<br />nenhum
arquivo php individual)';
	var $_PHPSHOP_RETURN_LOGIN = '� cliente Registrado? Por favor, fa�a o
Login';
	var $_PHPSHOP_NEW_CUSTOMER = 'Novo(a) cliente? Por favor, insira os seus
dados para factura��o';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Conta de Cliente:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Informa��o de Encomenda';
	var $_PHPSHOP_ACC_UPD_BILL = 'Aqui encontra os dados para factura��o.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Aqui adiciona ou actualiza a Endere�o para
envio.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Informa��o de Conta';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Informa��o de Envio';
	var $_PHPSHOP_ACC_NO_ORDERS = 'N�o h� encomendas para mostrar';
	var $_PHPSHOP_ACC_BILL_DEF = '- Por defeito (igual ao de factura��o)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Pode adicionar Endere�os de envio � sua conta.
Por favor, escolha um apelido ou c�digo para a Endere�o que Selecionar
abaixo.';
	var $_PHPSHOP_CONFIG = 'Configura��o';
	var $_PHPSHOP_USERS = 'Utilizadores';
	var $_PHPSHOP_IS_CC_PAYMENT = 'Paga com cart�o de cr�dito?';
	var $_PHPSHOP_SHIPPING_MOD = 'Transportadores';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Transportadores';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Lista de Transportadores';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Lista de Transportadores';
	var $_PHPSHOP_RATE_LIST_MNU = 'transportes de Transporte';
	var $_PHPSHOP_RATE_LIST_LBL = 'Lista de transportes de Transporte';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nome';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Ordem de Listagem (n�mero)';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Novo Transportador';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Editar/Criar Transportador';
	var $_PHPSHOP_RATE_FORM_MNU = 'Nova Taxa de Transporte';
	var $_PHPSHOP_RATE_FORM_LBL = 'Editar/Criar Taxa de Transporte';
	var $_PHPSHOP_RATE_FORM_NAME = 'Descri��o da Taxa de Transporte';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Transportador';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Pa�s';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'In�cio do intervalo de C�digos
Postais';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Fim do intervalo de C�digos Postais';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Peso m�nimo';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Peso m�ximo';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Valor';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Valor Nominal';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Moeda';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Imposto';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordem de Listagem (n�mero)';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Transportador';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Descri��o da Taxa';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Peso de ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... at�';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Empresa Transportadora';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordem de Listagem (n�mero)';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERRO: ID de Transportador j�
existe.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERRO: Escolha um transportador.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERRO: J� existe taxa de transporte.
Elimine as taxas anteriores deste Transportador.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERRO: N�o foi encontrado nenhum
transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERRO: Escolha um
transportador.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERRO: N�o foi encontrado
nenhum transportador com este ID.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERRO: � obrigat�ria uma descri��o da
taxa.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERRO: O Pa�s de destino �
inv�lido. Se optou por mais de um pa�s, Por favor separe-os com um espa�o';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERRO: � obrigat�rio
apresentar um peso m�nimo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERRO: � obrigat�rio apresentar
um peso m�ximo';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERRO: O peso mais baixo
deve ser mais pequeno que o peso mais alto';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERRO: � obrigat�rio
apresentar uma taxa de transporte';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERRO: Escolha uma moeda';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERRO: � obrigat�rio apresentar uma
taxa de transporte';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Por favor fa�a a sua escolha';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Transportador';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'transportes de Transporte';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Pre�o';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-nenhum-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Cart�o de Cr�dito';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Use um M�todo de Pagamento';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'D�bito Banc�rio';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Apenas a Endere�o';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Por favor escolha uma Endere�o de
entrega!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Por favor escolha um m�todo de entrega!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Por favor escolha um m�todo de pagamento!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Por favor verifique os dados introduzidos
e confirme a encomenda!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Por favor escolha um m�todo de
entrega.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Por favor escolha outro m�todo de
entrega.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Por favor escolha um m�todo de
pagamento.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Por favor escreva o seu n�mero de
cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Por favor escreva o nome que est�
escrito no cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'O n�mero de cart�o de cr�dito n�o �
v�lido.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Por favor escreva o m�s da data de
expira��o do cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Por favor escreva o ano da data de
expira��o do cart�o de cr�dito.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'A data de expira��o n�o �
v�lida.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Por favor escolha uma Endere�o para
entrega.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'N�mero de conta inv�lido.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'N�o h� nada no seu cesto de
compras!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERRO: Por favor escolha um
transportador!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERRO: A taxa de transporte n�o
foi encontrada!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERRO: O seu endere�o de
entrega n�o foi encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERRO: N�o existem dados sobre o
cart�o de cr�dito....';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERRO: N�mero de cart�o de
cr�dito n�o encontrado!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'O n�mero de cart�o de cr�dito que
introduziu � um n�mero de teste!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'O user_id n�o foi encontrado na
base de dados!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Ainda n�o forneceu um nome
de titular da sua conta banc�ria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Ainda n�o forneceu o seu IBAN (N�mero
de Conta Banc�ria Internacional).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Ainda n�o forneceu um n�mero de
conta banc�ria.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Ainda n�o forneceu o c�digo do
seu Banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Ainda n�o forneceu o nome do seu
Banco.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Foi executado um passo inv�lido
para efectuar o CheckOut!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'A informa��o sobre o pagamento foi
guardada para posterior processamento.<BR>';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Ainda n�o atingiu o valor m�nimo para
efectuar a sua compra.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'O valor m�nimo para efectuar compras
� de:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Pagamento por Cart�o de Cr�dito';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'outros m�todos de pagamento';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Por favor escolha um m�todo de
pagamento:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Valor m�nimo para efectuar uma compra na
nossa loja';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informa��o da conta banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'N�mero de Conta Banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'N�mero de C�digo do seu Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nome do Banco';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Titular da Conta';
	var $_PHPSHOP_MODULES = 'M�dulos';
	var $_PHPSHOP_FUNCTIONS = 'Fun��es';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produtos Especiais';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Por favor deixe uma nota juntamente
com a sua encomenda se achar necess�rio';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Nota do Cliente';
	var $_PHPSHOP_INCLUDING_TAX = '(Inclui $tax% Imposto)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Por favor escolha um item.';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Item';
	var $_PHPSHOP_DOWNLOADS_TITLE = '�rea de Download';
	var $_PHPSHOP_DOWNLOADS_START = 'Iniciar Download';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Por favor escreva o Download-ID que recebeu
no seu email e carregue em \'Iniciar Download\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Lamentamos, mas o seu download expirou';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Lamentamos, mas j� atingiu o n�mero
m�ximo de downloads.';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Download-ID Inv�lido!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'N�o foi poss�vel enviar a mensagem a ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Mensagem enviada a  ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Informa��o do Download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'o(s) arquivo(s) que encomendou est�o
prontos para download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Por favor escreva os seguinte(s)
Download-ID(s) na nossa �rea de Downloads: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'o n�mero m�ximo de downloads para
cada arquivo � de: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Tem de fazer o download at� $expire
dias ap�s o primeiro download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Quest�es? Problemas?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informa��o de Download por  ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Produto sujeito a download?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Thanks for your payment.
The transaction was successful. You will get a confirmation e-mail for the
transaction by PayPal.
You can now continue or log in at <a href=http://www.paypal.com>
www.paypal.com</a> to see the transaction details.';
	var $_PHPSHOP_PAYPAL_ERROR = 'An error occured while processing your
transaction. The status of your order could not be updated.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Obrigado pela sua
encomenda. Esta � a seguinte:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Obrigado pela sua
prefer�ncia.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Quest�es? Problemas?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'A encomenda foi recebida.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Para ver a encomenda
selecione o link.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Quantidades negativas n�o s�o
permitidas.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Por favor introduza uma
quantidade v�lida para este produto.';
	var $_PHPSHOP_CART_STOCK_1 = 'A quantidade selecionada excede o stock.';
	var $_PHPSHOP_CART_STOCK_2 = 'Actualmente temos $product_in_stock produtos
disponiveis. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Clique aqui se desejar aguardar em lista de
espera.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Por favor selecione um item especial da
p�gina de detalhes!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'nenhum';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Sr.';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Sra.';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Dr.';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Prof.';
	var $_PHPSHOP_DEFAULT = 'Por defeito';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administra��o de Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Lista de Afiliados';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Affiliates List';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nome do Afiliado';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Ativo';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Ratio';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total mensal';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Comiss�o mensal';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Lista de processos';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Afiliados';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Who to Email(* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Seu Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Assunto';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Include Current Statistics';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Commission Rate (percent)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Ativo?';
	var $_PHPSHOP_DELIVERY_TIME = 'Prazo de Entrega (aprox.)';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Detalhes da Entrega';
	var $_PHPSHOP_MORE_CATEGORIES = 'Categorias Relacionadas:';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilidade';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Produto de momento indisponivel.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Disponivel em: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Sum�rio';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Estat�sticas';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clientes';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Produtos Activos';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Produtos Inactivos';
	var $_PHPSHOP_STATISTIC_SUM = 'Soma';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Novas Encomendas';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Novos Clientes';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Por favor introduza o seu e-mail,
ser� avisado logo que o produto entre em stock.
                                                                        O
seu endere�o de e-mail ser� utilizado apenas para esse fim.<br /><br
/>Obrigado!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Obrigado por aguardar! <br />Ser�
avisado logo que haja em stock.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Avisar!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Vista de Impress�o';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Por favor escolha ENTRE
Authorize.net OU CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Estado do arquivo de Configura��o:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'DESBLOQUEADO';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'BLOQUEADO';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Caminho & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Envios';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Checkout';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Downloads';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Pagamentos';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Usar apenas como
cat�logo?';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Se escolher esta
op��o, desAtivar� todas as funcionalidades do Cesto de Compras.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Mostrar Pre�os';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Mostrar Pre�os com Imposto?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Activa a op��o para
visualizar os pre�os com ou sem Imposto.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Selecione para ver os pre�os
dos produtos. Na fun��o cat�logo, os pre�os permanecem ocultos.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Imposto Virtual';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Esta op��o determina se
itens com peso zero s�o taxados ou n�o. Modifique
ps_checkout.php->calc_order_taxable() para o efeito.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Modo de Taxa��o:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Baseado no endere�o para envio';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Baseado no endere�o do
vendedor';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Esta op��o determina qual o
modo de taxa��o a utilizar:<br />

<ul><li>o do Distrito / Pa�s do Comprador</li><br/>

<li>ou de origem do Vendedor.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Ativar m�ltiplas taxas de
imposto?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Selecione esta op��o, se
tiver itens com diferentes taxas de imposto (ex.: 12% alimenta��o, 21% tudo
o resto)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Subtrair o desconto
antes do Imposto/transportes?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Ativar o Sistema de Vota��o/Aprecia��o de
Produtos';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Quando activo, permite aos
clientes <strong>avaliar </strong> e <strong>escrever aprecia��es</strong>
dos produtos. <br />

Assim, podem relatar e partilhar as suas experi�ncias do produto.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Determina se o
desconto � subtra�do ANTES (a selecionar) ou DEPOIS do
Imposto/transportes.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Os clientes podem deixar a
sua informa��o banc�ria?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Selecione esta
op��o se desejar que os clientes deixem a sua informa��o banc�ria quando se
registam.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Os clientes podem selecionar um
Distrito/Regi�o?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Selecione esta op��o se
desejar que os clientes possam escolher o Distrito/Regi�o quando se
registam.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'S�o obrigados a aceitar os Termos do
Servi�o?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Selecione esta op��o se
desejar que os clientes aceitem sempre os Termos do Servi�o quando se
registam.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Verificar Stock?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Esta op��o for�a uma
verifica��o do stock sempre que um cliente adiciona um item ao cesto de
compras.

Quando selecionado, o cliente n�o poder� adicionar itens que n�o existam em
stock.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Ativar o Programa de
Afiliados?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Esta op��o activa o
Modo de Afiliados no shop-frontend. Active apenas se possuir afiliados no
backend.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Formato dos Mails das Encomendas:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Text mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Determina o formato dos
e-mails de confirma��o das encomendas:<br /> 

<ul><li>como e-mail de texto simples</li>

<li>ou como html com imagens.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Permitir Administra��o do Frontend
para Utilizadores non-Backend?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Esta op��o habilita a
Administra��o do Frontend para clientes

que s�o Administradores de Loja, mas que n�o podem aceder ao Mambo Backend
(ex: Registrado / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'Endere�o (URL)';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'O Endere�o (URL) do seu Site.
Id�ntico normalmente ao seu Mambo URL (Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'Endere�o (URL) Seguro';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'O Endere�o (URL) seguro para o
seu site. (https - Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'Endere�o (URL) do Componente';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'O Endere�o (URL) para o
componente mambo-phpShop. (Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Endere�o (URL) de Imagens';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'O Endere�o (URL) para a pasta
de imagens do componente mambo-phpShop.(Com (/) no final!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'O caminho para a pasta do
componente mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'O caminho para a pasta classes
do phpShop.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'O caminho para a pasta html do
phpShop.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'O caminho para a pasta
shop_image do phpShop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Esta � a p�gina pr�-definida do
phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Esta � a p�gina pr�-definida
para mensagens de erro.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Esta � a p�gina pr�-definida
para mensagens de debug.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'Fazer o DEBUG?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Activa uma DEBUGPAGE no limite
inferior de cada p�gina. � de grande ajuda para o desenvolvimento do site,
pois revela o conte�do do cesto de compras, os valores dos campos, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Esta � a p�gina pr�-definida
para mostrar os detalhes dos produtos.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Templates de Categoria';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Esta � a p�gina
pr�-definida para os templates de categoria (para mostrar produtos numa
categoria).<br />

� possivel criar novos templates por alterar arquivos de templates
existentes <br />

(existentes na pasta <strong>COMPONENTPATH/html/templates/</strong> e
come�ados por browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'N�mero de produtos por fila';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Define o n�mero de
produtos por fila. <br />

Exemplo: Se definido para 4, o template de categoria mostrar� 4 produtos por
fila';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'imagem "no image"';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Imagem que aparece quando
n�o existe uma imagem de produto disponivel.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Filas numa Procura';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Determina o n�mero de filas
por p�gina quando os resultados de uma procura s�o mostrados numa lista.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'C�r da Procura 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Especifica a c�r das filas
�mpares numa lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'C�r da Procura 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Especifica a c�r das filas
pares numa lista de resultados.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'N�mero m�ximo de filas';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Ajusta o n�mero de filas a
mostrar na lista de pedido da caixa selecionada.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Mostrar rodap�?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Mostra a imagem de
rodap� "powered-by-mambo-phpShop".';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Escolha o m�todo de envio
da sua loja';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'M�dulo de envio
standard com configura��o individual de transporte e tarifas.
<strong>RECOMENDADO !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '   M�dulo Zona de
Envio Vers�o do Pa�s 1.0<br />

Para mais informa��o sobre este m�dulo Por favor visite <a href="
http://ZephWare.com">http://ZephWare.com</a<http://zephware.com/">http://ZephWare.com</a>
>

para mais detalhes <br />ou contacte <a href="
mailto:zephware@devcompany.com">zephware@devcompany.com</a><br<zephware@devcompany.com">zephware@devcompany.com</a><br>/>
Escolha esta op��o para Ativar o m�dulo de zona de envio';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = 'UPS Tools Shipping
calculation';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS access
code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Your UPS access code';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS user id';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'The
user ID you got from UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS
password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'The
password for your UPS account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'InterShipper
Module. Check only if you have an Intershipper.com account';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Disable Shipping
method selection. Choose if your customers buy downloadable goods which
don\'t have to be shipped.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper Password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Your password for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper email';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Your email address for your intershipper account.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Used to encrypt data
stored in database with this key. This means that this file should be
protected from viewing at all times.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Ativar a barra de Checkout?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Escolha esta op��o,
se deseja mostrar a barra de Checkout durante o processo de checkout ( 1 - 2
- 3 - 4 com imagens).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Escolha o processo de Checkout
da sua loja';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard
:</strong><br/>
               1. Pedido de endere�o de envio<br />
              2. Pedido de m�todo de envio<br />
              3. Pedido de m�todo de pagamento<br />
              4. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Processo
2:</strong><br/>
               1. Pedido de m�todo de envio<br />
              2. Pedido de m�todo de pagamento<br />
              3. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Processo
3:</strong><br/>
               1. Pedido de m�todo de envio<br />
              2. Pedido de m�todo de pagamento<br />
              3. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Processo
4:</strong><br/>
               1. Pedido de m�todo de pagamento<br />
              2. Pedido completo';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Ativar Downloads';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Escolha esta op��o para
Ativar os downloads, se fizer venda de itens por download.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Estado do pedido que
permite fazer download';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Selecione o
estado do pedido pelo qual o cliente � notificado via e-mail do download.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Estado do pedido que
desactiva a capacidade de downloads';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Permite
selecionar o estado do pedido que desactiva a capacidade do cliente fazer
downloads.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'O caminho f�sico para os
arquivos de download. ((/) no final!)<br>
        <span class="message">Para a seguran�a da sua loja: Use uma pasta
fora do WEBROOT quando possivel</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Download M�ximo';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Determina o n�mero de
downloads permitidos para um determinado Download-ID (por pedido)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Prazo de validade do Download';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Ajusta o tempo
<strong>em segundos</strong> durante o qual o cliente pode fazer o download.
  O tempo come�a a contar no primeiro download! Quando o tempo expira, o
Download-ID � desabilitado.<br />Nota: 86400s=24h';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Enable IPN Payment via PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Check to let your
customers use the PayPal payment system.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal payment email:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Your business email address
for PayPal payments. Also used as receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Order Status for
successful transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Select the order
status to which the actual order is set, if the PayPal IPN was successful.
If using download selling options:
  select the status which enables the download (then the customer is
instantly notified about the download via e-mail).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Order Status for failed
transactions';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Select an order
status for failed PayPal transactions.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Enable Payments via PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Check to let your
customers use the Australian PayMate payment system.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate username:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Your user account for
PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Enable Authorize.netpayment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Check to use
Authorize.net with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Select
\'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Yes';
	var $_PHPSHOP_ADMIN_CFG_NO = 'No';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'This is your
Authorize.Net Login ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'This is your
Authorize.net Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Authentication
Type';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'This is
the Authorize.Net authentication type.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Enable CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Check to use CyberCash
with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT is the
CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash
Merchant Key is the Merchant Provided by CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash PAYMENT URL';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash PAYMENT URL is
the URL provided by Cybercash for secure payment';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH
TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash
AUTH TYPE is the Cybercash authentication type provided by Cybercase';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Procura Avan�ada';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Procurar todas as categorias';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Procurar todos os detalhes do
produto';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Apenas Produto';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Apenas Marca/Vendedor';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Apenas Descri��o do Produto';
	var $_PHPSHOP_SEARCH_AND = 'e';
	var $_PHPSHOP_SEARCH_NOT = 'n�o';
	var $_PHPSHOP_SEARCH_TEXT1 = 'A primeira lista permite selecionar uma
categoria a fim de limitar a procura.
        A segunda lista permite limitar os detalhes do produto (ex. Nome).
        Uma vez selecionadas (ou deixadas por defeito), introduza a
palavra-chave que deseja pesquisar. ';
	var $_PHPSHOP_SEARCH_TEXT2 = 'Pode adicionar mais palavras-chave e
operadores como E ou N�O.
        Selecionando E significa que ambas as palavras t�m de estar
presentes para o produto ser apresentado.
        Selecionando N�O signitica que a primeira palavra tem de estar
presente e a segunda n�o poder� existir para o produto for apresentado.';
	var $_PHPSHOP_ORDERBY = 'Ordenar por';
	var $_PHPSHOP_CUSTOMER_RATING = 'M�dia de Votos';
	var $_PHPSHOP_TOTAL_VOTES = 'Total de votos';
	var $_PHPSHOP_CAST_VOTE = 'Por favor submeta o seu voto';
	var $_PHPSHOP_RATE_BUTTON = 'Votar';
	var $_PHPSHOP_RATE_NOM = 'Vota��o';
	var $_PHPSHOP_REVIEWS = 'Coment�rios de Clientes';
	var $_PHPSHOP_NO_REVIEWS = 'N�o existe qualquer coment�rio a este
produto.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Seja o primeiro a fazer um
coment�rio...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Por favor fa�a o seu Login para escrever um
coment�rio.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Por favor vote no produto para completar o
seu coment�rio!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Por favor escreva mais algumas
palavras no seu coment�rio. N� min. de letras: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Por favor reduza o seu coment�rio. N�
m�x. de letras: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Fa�a um coment�rio a este produto!';
	var $_PHPSHOP_REVIEW_RATE = 'Primeiro: Vote no produto. Selecione de 0
(mau) a 5 estrelas (muito bom).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Agora escreva um (pequeno)
coment�rio....(min. 100, m�x. 2000 letras) ';
	var $_PHPSHOP_REVIEW_COUNT = 'N� de letra escritas: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Guardar coment�rio';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'J� escreveu anteriormente um coment�rio
para este produto. Obrigado.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Obrigado pelo seu coment�rio.';
	var $_PHPSHOP_COMMENT = 'Coment�rio';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Adicionar/Editar Tipos Cart�o Cr�dito';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nome de Cart�o de Cr�dito';
	var $_PHPSHOP_CREDITCARD_CODE = 'C�digo Curto do Cart�o de Cr�dito';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Tipo de Cart�o de Cr�dito';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Lista de Cart�es de Cr�dito';
	var $_PHPSHOP_UDATE_ADDRESS = 'Atualizar Endere�o';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continuar a Comprar';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'A sua encomenda foi efectuada com
sucesso!';
	var $_PHPSHOP_ORDER_LINK = 'Siga este link para ver os detalhes da sua
encomenda.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'o estado da sua encomenda
n. {order_id} foi alterado.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'O novo estado �:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Para ver os detalhes da
encomenda, siga Por favor este link (ou copie-o para o seu browser):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Altera��o do estado de
encomenda: Encomenda {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Avisar o cliente?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Por favor altere primeiro o estado
da encomenda!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Desconto por defeito para este
Grupo de Clientes (em %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Um valor positivo (X)
significa que: Se o produto n�o tiver pre�o pr�-definido para ESTE Grupo de
Clientes, o pre�o definido ser� acrescido de X %. Um valor negativo tem o
efeito oposto.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Produtos com Desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Lista de Produtos com Desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Adicionar/Editar Desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Valor do Desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Introduza o valor do
desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Tipo Desconto';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Percentagem';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Valor';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'O desconto � uma
percentagem ou um valor espec�fico?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Promo��o Inicia';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Especifique o dia em que a
promo��o come�a.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Promo��o Termina';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Especifique o dia em que a
promo��o termina.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Voce pode usar o seu
cupom de descomto - You can use the Product Discount Form to add
discounts!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Voce economiza';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Ver imagem grande';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Formato da Moeda';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'S�mbolo da Moeda';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Tamb�m pode usar valores em HTML
(ex: EUR (Euro), � (Libra), � (Ien)...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Decimais';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'N�mero de casas decimais (pode
ser 0)<br><b>Os valores ser�o arredondados consoante o n�mero de casas
decimais</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'S�mbolo para Decimal';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Caracter usado como S�mbolo
Decimal';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Separador de Milhares';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Caracter usado para separar os
milhares (pode ficar em branco)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Formato Positivo';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Tipo de formato a usar
para valores positivos.<br>(<strong>Symb</strong> significa simbolo da
moeda)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Formato Negativo';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Tipo de formato a usar
para valores negativos.<br>(<strong>Symb</strong> significa simbolo da
moeda)';
	var $_PHPSHOP_OTHER_LISTS = 'Listas de Outros Produtos';
	var $_PHPSHOP_MORE_IMAGES = 'Ver Mais Imagens';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Imagens dispon�veis para';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Voltar aos Detalhes do Produto';
	var $_PHPSHOP_FILEMANAGER = 'Ger�nciador de arquivos';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Ger�nciador de arquivos::Lista de
Produtos';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Adicionar Imagem/arquivo';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Atribuir Imagens';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = '� para Download?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Atribuir arquivos (Folhas de
C�lculo,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publicar?';
	var $_PHPSHOP_FILES_LIST = 'Ger�nciador de arquivos::Listar Imagem/arquivo
para';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nome do arquivo';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'T�tulo do arquivo';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Tipo do arquivo';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Editar entrada do arquivo';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Imagem grande';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Imagem pequena';
	var $_PHPSHOP_FILES_FORM = 'Carregar (upload) arquivo para';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'arquivo actual';
	var $_PHPSHOP_FILES_FORM_FILE = 'arquivo';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Imagem';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Carregar (Upload) para';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Caminho por defeito para a
imagem do produto';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Especifique a localiza��o do
arquivo';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Pasta de Downloads (ex:
para itens de compra por download!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Criar autom�ticamente imagem
pequena?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'O arquivo foi publicado?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'T�tulo do arquivo (o que o cliente
v�)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Descri��o do arquivo';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Caminho (URL) do arquivo (opcional)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Por favor providencie um caminho
v�lido!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'A imagem pequena foi criada com
sucesso!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'N�o foi possivel criar a imagem
pequena!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Erro de carregamento (upload) do
arquivo/Imagem';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'N�o foi possivel eliminar o
arquivo da imagem grande.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Imagem grande eliminada com
sucesso.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'N�o foi possivel eliminar a
imagem pequena (talvez n�o existisse): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Imagem pequena eliminada com
sucesso.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'N�o foi possivel eliminar o
arquivo.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'arquivo eliminado com sucesso.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Lamentamos, mas o arquivo solicitado n�o
foi encontrado!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Imagem n�o encontrada!';
	var $_PHPSHOP_COUPON_MOD = 'Cupom';
	var $_PHPSHOP_COUPONS = 'Cupons';
	var $_PHPSHOP_COUPON_LIST = 'Lista de Cupons';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Coupon has already been
redeemed.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Cupom aceito! Obrigado.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Se voce tem um cupom de desconto, por
favor preencha o campo com o c�d presente no cupom:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Submeter';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Este c�digo de cupom n�o � valido, por
favor tente novamente.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Cupom Update';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Click a coupon code to edit it, or
to delete a coupon code, select it and click Delete:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Cod';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Percentagem do Total';
	var $_PHPSHOP_COUPON_TYPE = 'Tipo de Cupom';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'A Gift Coupon is deleted after it was
used for discounting an order. A permanent coupon can be used as often as
the customer wants to.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Cupom de Presente';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Cupom Permanente';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valor';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Delete Cod';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Are you sure you want to delete this
coupon code?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Por favor preencha todos os
campos - Please complete all fields.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Coupon value must be a number.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Novo Cupom';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Cupom Cod';
	var $_PHPSHOP_COUPON_PERCENT = 'Percentagem';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Valor';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Cupom code salvo.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Salvar Cupom';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Cupom de Desconto';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Este c�d de cupom n�o � v�lido, por
favor tente novamente.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Abilitar o uso de Cupons';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Se Ativar esta op��o, permitir� aos
clientes inserir N�meros de Cupons para ganharem descontos nas compras.';
	var $_PHPSHOP_FREE_SHIPPING = 'transportes gratuitos';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Oferta dos transportes nesta
encomenda!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Valor m�nimo de encomenda para oferta
dos transportes';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'O valor m�nimo (INCLUINDO
Imposto) para oferta dos transportes de envio
                                                (exemplo:
<strong>50</strong> significa a oferta dos transportes quando o cliente faz
uma compra
                                                de EUR50 (incluindo Imposto)
ou mais.';
	var $_PHPSHOP_YOUR_STORE = 'A sua Loja';
	var $_PHPSHOP_CONTROL_PANEL = 'Painel de Controlo';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Bot�o - PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Mostra ou esconde o Bot�o -
PDF existente na loja';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'T�m de concordar com os
Termos de Servi�o em TODAS AS ENCOMENDAS?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Selecione esta
op��o, para que o cliente concorde com os Termos de Servi�o em TODAS AS
ENCOMENDAS.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Tipo de Conta Banc�ria';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Conta Corrente';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Conta Corrente
Empresarial';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Poupan�a';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Faturas Recorrentes?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Define o uso de Faturas
Recorrentes.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Ocorreu um erro interno ao processar o
pedido para';
	var $_PHPSHOP_PAYMENT_ERROR = 'Falha ao processar o pagamento';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Pagamento efectuado com
sucesso';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS was not able to process the
Shipping Rate Request.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Guaranteed Day(s) To
Delivery';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS Pickup Method';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'How do you give packages to
UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS Packaging?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Select the default Type of
Packaging.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Residential Delivery?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Residencial (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Comercial (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Quote for Residential (RES) or
Commercial Delivery (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Handling Fee';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Your Handling fee for this
shipping method.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Tax Class';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Use the following tax class on the
shipping fee.';
	var $_PHPSHOP_ERROR_CODE = 'Error Code';
	var $_PHPSHOP_ERROR_DESC = 'Error Description';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Show / Change the Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Show/Change the Password/Transaction
Key';
	var $_PHPSHOP_TYPE_PASSWORD = 'Please type in your User Password';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Current Password';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Current Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'The Transaction key was
successfully changed.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Request/Capture Credit Card Code Value
(CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Check for a valid CVV2/CVC2/CID value
(three- or four-digit number on the back of a credit card, on the Front of
American Express Cards)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Please type in the three- or
four-digit number on the back of your credit card (On the Front of American
Express Cards)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'You need to enter your Credit Card
Code to proceed.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Pode inserir o nome do arquivo';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTA: Aqui pode inserir o
nome de um arquivo. <strong>Se escolher esta op��o, nenhum arquivo ser�
carregado (uploaded)!!! Ter� que o fazer manualmente via FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'OU fa�a o Upload de um novo';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Pode fazer o upload de
qualquer arquivo. Esse ser� o seu produto para venda. Qualquer arquivo j�
existente ser� substituido.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Introduza o texto que
deseja que apare�a na P�gina de Detalhes (flypage).<br />ex: 24h, 48 horas,
3 - 5 dias, Em stock...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'Pode selecionar uma
imagem a apresentar na P�gina de Detalhes (flypage).<br />Estas imagens
encontram-se na pasta
<i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Lista de Atributos';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos para o
formato da Lista de Atributos:</h4>
        <span class="sectionname"><strong>Tamanho</strong>,XL[+1.99],M,S[-
2.99]<strong>;Cor</strong>,Vermelho,Verde,Amarelo,Cor_Especial[=24.00
]<strong>;etc.</strong>,..,..</span>
        <h4>� possivel ajustar pre�os usando Atributos Especiais:</h4>
        <span class="sectionname">
        <strong>+</strong> == Adicionar o valor deste atributo ao pre�o
configurado.<br />
        <strong>-</strong> == Subtrair o valor deste atributo ao pre�o
configurado.<br />
        <strong>=</strong> == Assumir o pre�o do atributo como pre�o final.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Lista de Atributos
Especiais';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemplos
para o formato da Lista de Atributos Especiais:</h4>
        <span class="sectionname"><strong>Nome;Extras;</strong>...</span>';
	var $_PHPSHOP_MULTISELECT = 'Para escolha m�ltipla pressione <i>Control</i>
e com o rato escolha os pa�ses respectivos';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Enable eProcessingNetwork.compayment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Check to use
eProcessingNetwork.com with phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Select \'Yes\' while
testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'This is your
eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'This is your
eProcessingNetwork.com Transaction Key';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Authentication Type';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'This is the
eProcessingNetwork.com authentication type.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Produtos Relacionados';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Pode estabelecer relacionamentos
entre produtos usando esta lista. Selecione um ou mais produtos e estes
tornam-se <strong>Produtos Relacionados</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Ser� que este(s) produto(s)
tamb�m lhe interessam?';
	var $_PHPSHOP_IMAGE_ACTION = 'Redimensionamento';
	var $_PHPSHOP_NONE = 'N�o realizar';
	var $_PHPSHOP_ORDER_HISTORY = 'Order History';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Comment';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Comments on your Order';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Include this comment?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Date Added';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Customer Notified?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Order Status Change';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS
shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'USPS
shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS
shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'USPS
shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS shipping
server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS
shipping server';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS shipping
path';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS
shipping path';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER = 'USPS
shipping container';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_CONTAINER_TOOLTIP = 'USPS shipping container';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS
Package Size';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'USPS Package Size';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID = 'USPS
Package ID (must be 0, does not support multiple packages)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGEID_TOOLTIP = 'USPS Package ID (must be 0, does not support multiple packages)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE = 'USPS
Shipping type (Express,First Class,Priority,Parcel,BPM,Library,Media)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIPSERVICE_TOOLTIP = 'USPS Shipping type (Express,First
Class,Priority,Parcel,BPM,Library,Media)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Handling
Fee';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Your Handling fee for this shipping
method.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Your Handling fee for this
shipping method.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Your
International Handling fee for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Your International Handling fee for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Your
International per pound rate for USPS shipments.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Your International per pound rate for USPS shipments.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS was not able to process the
Shipping Rate Request.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Par�metros';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Lista de Tipos de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Adicionar/Editar Tipos de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Lista de Tipos de Produto
para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Listar Tipos de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Adiciona Tipo de Produto
para';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Adicionar Tipo de Produto';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Descri��o do Tipo de
Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Par�metros';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Informa��o de Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publicar?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'P�gina de Navega��o de Tipo
de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Flypage de Tipo de Produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Par�metros de Tipo de
Produto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Informa��o do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Tipo de Produto n�o
encontrado!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nome do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Este nome
ser� o t�tulo da coluna na tabela. Dever� ser �nico e sem espa�os.<BR>Por
exemplo: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiqueta do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Descri��o do
Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Tipo do Par�metro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'N. Integro';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Texto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Texto Curto';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'N. Flutuante';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Char';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Data & Hora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Data';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'AAAA-MM-DD';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Hora';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Linha de Quebra';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Valores
M�ltiplos';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valores Poss�veis';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Mostrar valores
poss�veis como selec��o m�ltipla?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Se
forem selecionados valores poss�veis, o par�metro apenas pode ter esses
valores. Exemplo para valores poss�veis:</strong><BR><span
class="sectionname">Metal;Madeira;Pl�stico;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valor por defeito';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Para o
par�metro "Valor por defeito" use este formato:<ul><li>Data:
AAA-MM-DD</li><li>Hora: HH:MM:SS</li><li>Data & Hora: AAAA-MM-DD
HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unidade';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Procura Avan�ada segundo os Par�metros';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Procurar Par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Deseja encontrar produtos segundo
par�metros t�cnicos?<BR>Poder� usar qualquer formul�rio j� preparado:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'N�o existem quaisquer
resultados para a sua procura.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Lamentamos, mas n�o
existe Categoria para procurar.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = '� igual';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'N�O � igual';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Procura por texto completo';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Todos selecionados';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Nenhum selecionado';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Reiniciar formul�rio';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Procurar na Categoria';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Alterar Par�metros';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Ordem Descendente';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ordem Ascendente';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Par�metros da
Categoria';
	var $_PHPSHOP_FEE = 'Comiss�o';
	var $_PHPSHOP_PRODUCT_CLONE = 'Produto Clonado';
	var $_PHPSHOP_CSV_SETTINGS = 'Configura��es';
	var $_PHPSHOP_CSV_DELIMITER = 'Delimitador';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Campo Enclosure Char';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Carregar (Upload) um arquivo CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Submeter arquivo CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Carregar da pasta';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Carregar arquivo CSV do Servidor';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exportar para arquivo CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Selecionar Tipo de Campo para
Encomenda';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Encomenda Pr�-Definida';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'A minha Encomenda Pr�-Definida';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exportar todos os produtos para um
arquivo CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Importar/Exportar Configura��o de
CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Guardar altera��es';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nome do Campo';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valor Pr�-definido';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Campo para Encomenda';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = '� necess�rio campo?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importar/Exportar';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Adicionar novo Campo';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documenta��o';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Lamentamos, mas o produto que solicitou
n�o foi encontrado!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Mostrar produtos fora
de stock?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Quando
selecionado, s�o mostrados todos os produtos fora de stock. De outro modo,
esses produtos permanecem ocultos.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'N�mero {unidades} no pacote:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'N�mero {unidades} na caixa:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'N�o mostrar produtos sem stock';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Lista de Produtos Especiais';
	var $_PHPSHOP_FEATURED = 'Em destaque';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Voltar ao pa�s';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Voltar ao ger�nciador de arquivos';
	var $_PHPSHOP_ADD_STATE = 'Adicionar estado';
	var $_PHPSHOP_LIST_STATES = 'Listar Estados';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Em destaque e com desconto';
	var $_PHPSHOP_SHOW_FEATURED = 'Produtos em destaque';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Produtos com desconto';
	var $_PHPSHOP_FILTER = 'Filtro';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Voltar ao Site Principal';
	var $_PHPSHOP_EXPAND_TREE = 'Expandir Direct�rios';
	var $_PHPSHOP_COLLAPSE_TREE = 'Encolher Direct�rios';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Pre�o Descontado';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Aqui pode inserir um
novo desconto por cima do desconto j� inserido ao produto.<br/>
A Loja criar� um novo registo de desconto para o Pre�o Descontado.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Pre�o por Unidade';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Colocar a Loja Offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Quando ativado, apresentar� a
Mensagem Offline abaixo.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Mensagem Offline';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Prefixo de tabela para as tabelas da
Shop';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'O valor � <strong>vm</strong>
por pr�-defini��o.';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Mostrar o ecr� de navega��o de p�gina
no topo da Lista de Produtos?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Activado ou desativado o ecr� de
navega��o de p�gina no topo da Lista de Produtos no Frontend.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Mostrar o n�mero de
produtos?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Mostrar o n�mero de
produtos numa categoria (ex.: "Categoria(4)")?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Estilo do Bot�o
Adicionar-ao-Cesto';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Ativar
Redimensionamento din�mico de Imagens?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Quando ativo,
permite o redimensionamento din�mico de imagens. Significa que todas as
imagens pequenas s�o redimensionadas para as medidas provid�nciadas,
        usando as fun��es GD2 do PHP (para confirmar a operacionalidade
dessas fun��es v� a "System" -> "System Info" -> "PHP Info" -> gd.
        A qualidade desses redimensionamentos � melhor do que as de qualquer
browser. As novas imagens geradas s�o colocadas na pasta
/shop_image/prduct/resized.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Largura da imagem pequena';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Valor da
<strong>largura</strong> da imagem pequena a redimensionar.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Comprimento da imagem pequena';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Valor do
<strong>comprimento</strong> da imagem pequena a redimensionar.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Por favor selecione pelo
menos uma op��o na Configura��o de Envios!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configura��o de Pre�o';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Mostrar pre�os ao grupo';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'O grupo selecionado e
todos os outros com permiss�es mais elevadas poder�o ver os pre�os dos
produtos.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Mostrar "(inclui xx%
Imposto)" quando aplic�vel?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Quando ativo, mostra
o texto "(inclui xx% Imposto)" nos pre�os com taxa aplic�vel.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Mostrar
etiquetas para pacote?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Quando
ativo, a etiqueta originada tem este aspecto:
<strong>Pre�o por Unidade (10 pe�as)</strong><br/>
Quando inactivo, as etiquetas t�m o aspecto comum:<br/><strong>Pre�o: EUR
xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Defini��es de Core';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Defini��es Principais';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Op��es do Frontend';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configura��o de Imposto';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantidade Inicial';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantidade Final';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Defini��es de Registo
de Clientes';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = '� permitido o registo de
novos clientes?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = '� necess�rio a ativa��o de
novas contas?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Usar o Modo Sil�ncioso de
registo de clientes?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Quando activo, os
clientes n�o precisam inserir um Utilizador e Password para uma nova conta.
Em vez disso usam um endere�o de e-mail e recebem uma password gerada
aleat�riamente. Os dados de registo s�o enviados por e-mail ao cliente.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Ol� %s,

Obrigado por se registar na %s. A sua conta de cliente foi criada com
sucesso.
Pode fazer o login em nosso sistema %s utilizando os seguintes dados:

Utilizador - %s
Password - %s
';
	var $_PEAR_LOG_CRIT = 'Critico';
	var $_PEAR_LOG_ERR = 'Erro';
	var $_PEAR_LOG_WARNING = 'Aviso';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Informa��o';
	var $_PEAR_LOG_ALERT = 'Alerta';
	var $_PEAR_LOG_EMERG = 'Emerg�ncia';
	var $_PEAR_LOG_NOTICE = 'Notifica��o';
	var $_PEAR_LOG_DEBUG = 'Fazer o Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Habilitar PayFlow Pro payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Check to use VeriSign\'s
PayFlow Pro with VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Select \'Yes\' while
testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to
you by the authorized VeriSign Reseller that registered you for the PayFlow
Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro
Login ID';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Ordena��o por
defeito';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Define o crit�rio de
ordena��o por defeito dos produtos';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Campos "Ordenar por" dispon�veis';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Escolha quais os campos "Ordenar
por" que deseja. Cada um define um m�todo de ordena��o diferente segundo o
crit�rio escolhido.
Se n�o escolher nenhum, a op��o "Ordenar por" n�o aparecer�.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'European Union mode';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'The directory to store session data is not writable. Please correct this or contact your provider.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'The Session Save Path %s is not writable. Please correct this! The shop is temporarily trying to use the %s instead.\'';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Seu browser n�o aceita cookies. Se voc� quiser colocar produtos no carrinho e compr�-los, voc� dever� habilitar cookies.';
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
	var $PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'The length of the product.<br />Values:<ul><li>Number</li></ul>';
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