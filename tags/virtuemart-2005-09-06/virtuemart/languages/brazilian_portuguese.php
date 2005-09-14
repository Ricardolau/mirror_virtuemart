<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 


/**
* @version $Id: brazilian_portuguese.php,v 1.10 2005/03/31 14:00
* Tradutor: Alexandre C�mara www.oarquiteto.arq.br 
* @package mambo-phpShop
* @subpackage languages
*
* @copyright (C) 2004 Soeren Eberhardt
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* mambo-phpShop is Free Software.
* mambo-phpShop comes with absolute no warranty.
*
* www.mambo-phpshop.net
*/


class phpShopLanguage extends mosAbstractLanguage {

	/*####################
	GENERAL DEFINITIONS
	####################*/
	
	var $_PHPSHOP_MENU			= "Menu";
	var $_PHPSHOP_CATEGORY			= "Categoria";
	var $_PHPSHOP_CATEGORIES		= "Categorias";
	var $_PHPSHOP_SELECT_CATEGORY		= "Selecione uma categoria:";
	var $_PHPSHOP_ADMIN			= "Administra��o";
	var $_PHPSHOP_PRODUCT			= "Produto";
	var $_PHPSHOP_LIST			= "Listar";
	var $_PHPSHOP_ALL				= "Todos";
	var $_PHPSHOP_LIST_ALL_PRODUCTS	= "Todos os Produtos";
	var $_PHPSHOP_VIEW			= "Ver";
	var $_PHPSHOP_SHOW			= "Mostrar";
	var $_PHPSHOP_ADD				= "Adicionar";
	var $_PHPSHOP_UPDATE			= "Atualizar";
	var $_PHPSHOP_DELETE			= "Eliminar";
	var $_PHPSHOP_SELECT			= "Selecionar";
    var $_PHPSHOP_SUBMIT = "Submit";
	var $_PHPSHOP_RANDOM			= "Produtos ao acaso";
	var $_PHPSHOP_LATEST			= "�ltimos Produtos";
	
	/*#####################
	MODULE ACCOUNT
	#####################*/
	
	# Some LABELs
	var $_PHPSHOP_HOME_TITLE		= "In�cio";
	var $_PHPSHOP_CART_TITLE		= "Pedido";
	var $_PHPSHOP_CHECKOUT_TITLE		= "Concluir Pedido";
	var $_PHPSHOP_LOGIN_TITLE		= "Entrar";
	var $_PHPSHOP_LOGOUT_TITLE		= "Sair";
	var $_PHPSHOP_BROWSE_TITLE		= "Procurar Artigos";
	var $_PHPSHOP_SEARCH_TITLE		= "Procurar";
	var $_PHPSHOP_ACCOUNT_TITLE		= "Manuten��o da Conta de Usu�rio";
	var $_PHPSHOP_NAVIGATION_TITLE	= "Navega��o";
	var $_PHPSHOP_DEPARTMENT_TITLE	= "Departamento";
	var $_PHPSHOP_INFO			= "Informa��o";
	
	var $_PHPSHOP_BROWSE_LBL		= "Procurar Artigos";
	var $_PHPSHOP_PRODUCTS_LBL		= "Produtos";
	var $_PHPSHOP_PRODUCT_LBL		= "Produto";
	var $_PHPSHOP_SEARCH_LBL		= "Procurar";
	var $_PHPSHOP_FLYPAGE_LBL		= "Detalhe do Produto";
	var $_PHPSHOP_PRODUCT_SEARCH_LBL	= "Procurar Produto";
	
	var $_PHPSHOP_PRODUCT_NAME_TITLE		= "Nome do Produto";
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE	= "Categoria";
	var $_PHPSHOP_PRODUCT_DESC_TITLE		= "Descri��o";
	
	var $_PHPSHOP_CART_SHOW		= "Mostrar Pedido";
	var $_PHPSHOP_CART_ADD_TO	= "Adicionar ao Pedido";
	var $_PHPSHOP_CART_NAME		= "Nome";
	var $_PHPSHOP_CART_SKU		= "Ref.";
	var $_PHPSHOP_CART_PRICE	= "Pre�o";
	var $_PHPSHOP_CART_QUANTITY	= "Quantidade";
	var $_PHPSHOP_CART_SUBTOTAL	= "Subtotal";
	
	# Some messages
	var $_PHPSHOP_ADD_SHIPTO_1		= "Adicionar um novo";
	var $_PHPSHOP_ADD_SHIPTO_2		= "Endere�o para envio";
	var $_PHPSHOP_NO_SEARCH_RESULT	= "A sua busca n�o devolveu resultados.<BR>";
	var $_PHPSHOP_PRICE_LABEL		= "Pre�o: ";
	var $_PHPSHOP_ORDER_BUTTON_LABEL	= "Encomendar";
	var $_PHPSHOP_NO_CUSTOMER		= "Sentimos muito mas voc� n�o � um clinte registado.<BR>Por favor registar-se em nossa loja primeiro.<BR>Obrigado.";
	var $_PHPSHOP_DELETE_MSG		= "Tem a certeza que quer apagar esta entrada?";
	var $_PHPSHOP_THANKYOU			= "Obrigado pelo seu pedido.";
	var $_PHPSHOP_NOT_SHIPPED		= "Ainda n�o foi enviado.";
	var $_PHPSHOP_EMAIL_SENDTO		= "Um email de confirma��o foi enviado para";
	var $_PHPSHOP_NO_USER_TO_SELECT	= "Sentimos muito, mas n�o h� nenhum usu�rio que possa ser adicionado � lista de clientes com_phpshop";
	
	// Error messages
	
	var $_PHPSHOP_ERROR		= "ERRO";
	var $_PHPSHOP_MOD_NOT_REG	= "M�dulo n�o registado.";
	var $_PHPSHOP_MOD_ISNO_REG	= "n�o � um m�dulo phpShop v�lido.";
	var $_PHPSHOP_MOD_NO_AUTH	= "Voc� n�o tem permiss�o para aceder ao m�dulo requisitado.";
	var $_PHPSHOP_PAGE_404_1	= "A p�gina n�o existe";
	var $_PHPSHOP_PAGE_404_2	= "Este arquivo n�o existe. N�o � poss�vel encontrar o arquivo:";
	var $_PHPSHOP_PAGE_403		= "Previl�gios insuficientes";
	var $_PHPSHOP_FUNC_NO_EXEC	= "N�o tem previl�gios suficientes para executar ";
	var $_PHPSHOP_FUNC_NOT_REG	= "Fun��o n�o registada";
	var $_PHPSHOP_FUNC_ISNO_REG	= " n�o � uma fun��o do MOS_com_phpShop.";
	
	/*#####################
	MODULE ADMIN
	#####################*/
	
	# Some LABELs
	var $_PHPSHOP_ADMIN_MOD		= "Administra��o";
	
	
	// User Lista
	var $_PHPSHOP_USER_LIST_MNU		= "Listar usu�rios";
	var $_PHPSHOP_USER_LIST_LBL		= "Lista de usu�rios";
	var $_PHPSHOP_USER_LIST_USERNAME	= "Usu�rio";
	var $_PHPSHOP_USER_LIST_FULL_NAME	= "Nome completo";
	var $_PHPSHOP_USER_LIST_GROUP		= "Grupo";
	
	// User Form
	var $_PHPSHOP_USER_FORM_MNU			= "Adicionar usu�rio";
	var $_PHPSHOP_USER_FORM_LBL			= "Adicionar/Atualizar informa��o do usu�rio";
	var $_PHPSHOP_USER_FORM_BILLTO_LBL		= "Informa��o de conta A ";
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL		= "Endere�o de envio";
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL	= "Adicionar endere�o";
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL	= "Endere�o";
	var $_PHPSHOP_USER_FORM_FIRST_NAME		= "Primeiro nome";
	var $_PHPSHOP_USER_FORM_LAST_NAME		= "�ltimo nome";
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME		= "Nome do meio";
	var $_PHPSHOP_USER_FORM_TITLE			= "Cargo";
	var $_PHPSHOP_USER_FORM_USERNAME		= "Usu�rio";
	var $_PHPSHOP_USER_FORM_PASSWORD_1		= "Senha";
	var $_PHPSHOP_USER_FORM_PASSWORD_2		= "Confirmar senha";
	var $_PHPSHOP_USER_FORM_PERMS			= "Previl�gios";
	var $_PHPSHOP_USER_FORM_COMPANY_NAME	= "Empresa";
	var $_PHPSHOP_USER_FORM_ADDRESS_1		= "Endere�o 1";
	var $_PHPSHOP_USER_FORM_ADDRESS_2		= "Endere�o 2";
	var $_PHPSHOP_USER_FORM_CITY			= "Cidade";
	var $_PHPSHOP_USER_FORM_STATE			= "Estado";
	var $_PHPSHOP_USER_FORM_ZIP			= "C�digo postal";
	var $_PHPSHOP_USER_FORM_COUNTRY		= "Pa�s";
	var $_PHPSHOP_USER_FORM_PHONE			= "Telefone";
	var $_PHPSHOP_USER_FORM_FAX			= "Fax";
	var $_PHPSHOP_USER_FORM_EMAIL			= "Correio eletr�nico";
	
	// Module Lista
	
	var $_PHPSHOP_MODULE_LIST_MNU		= "Listar m�dulos";
	var $_PHPSHOP_MODULE_LIST_LBL		= "Rela��o de m�dulos";
	var $_PHPSHOP_MODULE_LIST_NAME	= "M�dulo";
	var $_PHPSHOP_MODULE_LIST_PERMS	= "Privil�gios";
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS	= "Fun��es";
	var $_PHPSHOP_MODULE_LIST_ORDER	= "Ordem";
	
	// Module Form
	
	var $_PHPSHOP_MODULE_FORM_MNU			= "Adicionar m�dulo";
	var $_PHPSHOP_MODULE_FORM_LBL			= "Informa��o";
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL	= "Etiqueta";
	var $_PHPSHOP_MODULE_FORM_NAME		= "Nome";
	var $_PHPSHOP_MODULE_FORM_PERMS		= "Previl�gios";
	var $_PHPSHOP_MODULE_FORM_HEADER		= "Cabe�alho";
	var $_PHPSHOP_MODULE_FORM_FOOTER		= "Rodap�";
	var $_PHPSHOP_MODULE_FORM_MENU		= "Menu?";
	var $_PHPSHOP_MODULE_FORM_ORDER		= "Encomendar";
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION	= "Descri��o";
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE	= "C�digo de idioma";
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file	= "Arquivo de idioma";
	
	// Function Lista
	
	var $_PHPSHOP_FUNCTION_LIST_MNU	= "Listar fun��es";
	var $_PHPSHOP_FUNCTION_LIST_LBL	= "Lista de fun��es";
	var $_PHPSHOP_FUNCTION_LIST_NAME	= "Nome";
	var $_PHPSHOP_FUNCTION_LIST_CLASS	= "Classe de nome";
	var $_PHPSHOP_FUNCTION_LIST_METHOD	= "Classe de m�todo";
	var $_PHPSHOP_FUNCTION_LIST_PERMS	= "Previl�gios";
	
	// Module Form
	
	var $_PHPSHOP_FUNCTION_FORM_MNU		= "Adicionar fun��o";
	var $_PHPSHOP_FUNCTION_FORM_LBL		= "Informa��o";
	var $_PHPSHOP_FUNCTION_FORM_NAME		= "Nome";
	var $_PHPSHOP_FUNCTION_FORM_CLASS		= "Classe de nome";
	var $_PHPSHOP_FUNCTION_FORM_METHOD		= "Classe de m�todo";
	var $_PHPSHOP_FUNCTION_FORM_PERMS		= "Previl�gios";
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION	= "Descri��o";
	
	// Moeda form and list
	
	var $_PHPSHOP_CURRENCY_LIST_MNU	= "Listar moedas";
	var $_PHPSHOP_CURRENCY_LIST_LBL	= "Lista de moedas";
	var $_PHPSHOP_CURRENCY_LIST_ADD	= "Adicionar moeda";
	var $_PHPSHOP_CURRENCY_LIST_NAME	= "Nome da moeda";
	var $_PHPSHOP_CURRENCY_LIST_CODE	= "C�digo da moeda";
	
	// Pa�s form and list
	var $_PHPSHOP_COUNTRY_LIST_MNU	= "Listar pa�ses";
	var $_PHPSHOP_COUNTRY_LIST_LBL	= "Lista de pa�ses";
	var $_PHPSHOP_COUNTRY_LIST_ADD	= "Adicionar pa�s";
	var $_PHPSHOP_COUNTRY_LIST_NAME	= "Nome do pa�s";
	var $_PHPSHOP_COUNTRY_LIST_3_CODE	= "c�digo pa�s (3)";
	var $_PHPSHOP_COUNTRY_LIST_2_CODE	= "c�digo pa�s (2)";
	
	/*#####################
	MODULE CHECKOUT
	#####################*/
	
	# Some LABELs
	var $_PHPSHOP_ADDRESS		= "Endere�o";
	var $_PHPSHOP_CONTINUE		= "Continuar";
	
	# Some messages
	var $_PHPSHOP_EMPTY_CART	= "O seu carrinho de compras encontra-se vazio no momento.";
	
	
	/*#####################
	MODULE ISShipping
	#####################*/
	
	# Some LABELs
	
	var $_PHPSHOP_ISSHIPPING_MOD		= "InterShipper";
	
	
	// Env�o Ping
	
	var $_PHPSHOP_ISSHIP_PING_MNU			= "Ping servidor InterShipper";
	var $_PHPSHOP_ISSHIP_PING_LBL			= "Servidor-InterShipper Ping ";
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL		= "Falha em Ping InterShipper";
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL		= "Resposta do Ping InterShipper";
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL	= "Carrier";
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL	= "Tempo de<BR>Resposta";
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL		= "seg.";
	
	// Env�o Lista
	
	var $_PHPSHOP_ISSHIP_LIST_MNU			= "Listar m�todos de envio";
	var $_PHPSHOP_ISSHIP_LIST_LBL			= "M�todo de envio atual";
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL	= "Metodo de envio";
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL	= "Ativo";
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL		= "Despesas de transporte";
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL		= "Tempo de entrega";
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL	= "tarifa plana";
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL	= "percentual";
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL		= "dias";
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL		= "Cargas pesadas";
	
	// Dynamic Env�o Form
	
	var $_PHPSHOP_ISSHIP_FORM_MNU			= "Configurar m�todo de envio";
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL		= "Adicionar m�todo de envio";
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL	= "Configurar m�todo de envio";
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL	= "Atualizar";
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL	= "M�todo de envio";
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL	= "Ativar";
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL	= "Despesas de transporte";
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL		= "Tempo de entrega";
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL	= "tarifa plana";
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL	= "porcento";
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL		= "dias";
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL		= "Cargas pesadas";
	
	
	
	/*#####################
	MODULE ORDER
	#####################*/
	
	
	# Some LABELs
	
	var $_PHPSHOP_ORDER_MOD = "Encomendas";
	
	// Some menu options
	
	var $_PHPSHOP_ORDER_CONFIRM_MNU	= "Confirmar encomenda";
	var $_PHPSHOP_ORDER_CANCEL_MNU	= "Cancelar encomenda";
	var $_PHPSHOP_ORDER_PRINT_MNU		= "Imprimir encomenda";
	var $_PHPSHOP_ORDER_DELETE_MNU	= "Apagar encomenda";
	
	// Orden Lista
	
	var $_PHPSHOP_ORDER_LIST_MNU		= "Listar encomendas";
	var $_PHPSHOP_ORDER_LIST_LBL		= "Lista de encomendas";
	var $_PHPSHOP_ORDER_LIST_ID		= "N�mero de encomendas";
	var $_PHPSHOP_ORDER_LIST_CDATE	= "Data";
	var $_PHPSHOP_ORDER_LIST_MDATE	= "�ltima modifica��o";
	var $_PHPSHOP_ORDER_LIST_STATUS	= "Situa��o";
	var $_PHPSHOP_ORDER_LIST_TOTAL	= "SubTotal";
	var $_PHPSHOP_ORDER_ITEM		= "Artigos";
	
	// Orden print
	
	var $_PHPSHOP_ORDER_PRINT_PO_LBL			= "Ordem de compra";
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER			= "N�mero da encomenda";
	var $_PHPSHOP_ORDER_PRINT_PO_DATE			= "Data";
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS			= "Situa��o";
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL		= "Informa��o do cliente";
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL	= "Informa��o de cobran�a";
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL	= "Informa��o de envio";
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL		= "Cobrar A";
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL		= "Enviar A";
	var $_PHPSHOP_ORDER_PRINT_NAME			= "Nome";
	var $_PHPSHOP_ORDER_PRINT_COMPANY			= "Empresa";
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1			= "Endere�o 1";
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2			= "Endere�o 2";
	var $_PHPSHOP_ORDER_PRINT_CITY			= "Cidade";
	var $_PHPSHOP_ORDER_PRINT_STATE			= "Estado";
	var $_PHPSHOP_ORDER_PRINT_ZIP				= "C�digo postal";
	var $_PHPSHOP_ORDER_PRINT_COUNTRY			= "Pa�s";
	var $_PHPSHOP_ORDER_PRINT_PHONE			= "Telefone";
	var $_PHPSHOP_ORDER_PRINT_FAX				= "Fax";
	var $_PHPSHOP_ORDER_PRINT_EMAIL			= "Email";
	var $_PHPSHOP_ORDER_PRINT_ITEMs_LBL			= "Ordenar artigos";
	var $_PHPSHOP_ORDER_PRINT_QUANTITY			= "Quantidade";
	var $_PHPSHOP_ORDER_PRINT_QTY				= "Quantidade";
	var $_PHPSHOP_ORDER_PRINT_SKU				= "SKU";
	var $_PHPSHOP_ORDER_PRINT_PRICE			= "Pre�o";
	var $_PHPSHOP_ORDER_PRINT_TOTAL			= "Total";
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL			= "SubTotal";
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX			= "Total de IVA";
	var $_PHPSHOP_ORDER_PRINT_SHIPPING			= "Envio";
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX		= "IVA";
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL		= "M�todo de pagamento";
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME		= "Nome da conta";
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER		= "N�mero da conta";
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE		= "Data de vencimento";
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL		= "Registo de pagamento";
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL		= "Informa��o de envio";
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL		= "Informac�o de pagamento";
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL	= "Carrier";
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL	= "Modo de envio";
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL	= "Data de envio";
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL	= "Pre�o de envio";
	
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU			= "Listar as situa��es das encomendas";
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU			= "Adicionar situa��o da encomenda";
	
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE		= "C�digo da situa��o da encomenda";
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME		= "Nome da situa��o da encomenda";
	
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL			= "Situa��o da encomenda";
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE		= "C�digo da situa��o da encomenda";
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME		= "Nome da situa��o da encomenda";
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER	= "Listar encomendas";
	
	
	/*#####################
	MODULE PRODUCT
	#####################*/
	
	# Some LABELs
	
	var $_PHPSHOP_PRODUCT_MOD	= "Produtos";
	
	var $_PHPSHOP_CURRENT_PRODUCT	= "Produto atual";
	var $_PHPSHOP_CURRENT_ITEM	= "Artigo atual";
	
	// Produto Inventory
	
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL		= "Invent�rio de produtos";
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU		= "Ver invent�rio";
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE	= "Pre�o";
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK	= "N�mero";
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT	= "Peso";
	
	// Produto Lista
	
	var $_PHPSHOP_PRODUCT_LIST_MNU	= "Listar produtos";
	var $_PHPSHOP_PRODUCT_LIST_LBL	= "Lista de produtos";
	var $_PHPSHOP_PRODUCT_LIST_NAME	= "Nome";
	var $_PHPSHOP_PRODUCT_LIST_SKU	= "SKU";
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH	= "Publicar";
	
	// Produto Form
	
	var $_PHPSHOP_PRODUCT_FORM_MNU				= "Adicionar produto";
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT			= "Editar este produto";
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE			= "Ver prospectos dos produtos desta loja";
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU			= "Adicionar artigo";
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU		= "Adicionar outro artigo";
	
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL		= "Novo produto";
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL		= "Atualizar produto";
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL		= "Informa��o do produto";
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL		= "Situa��o";
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL	= "Dimens�es e peso";
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL		= "Imagens";
	
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL		= "Novo artigo";
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL	= "Atualizar artigo";
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL		= "Informa��o";
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL	= "Situa��o";
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL	= "Dimens�es e peso";
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL	= "Imagens";
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL		= "Regressar ao produto parente";
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL	= "Para atualizar a imagem atual, v� ao diret�rio e insira a nova imagem.";
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL	= "Escreva \"none\" para apagar a atual.";
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL	= "Artigos";
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL	= "Qualidades";
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG	= "Tem a certeza que quer apagar este produto\\ne e todos os artigos relacionados com ele?";
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG	= "Tem a certeza que quer apagar este artigo?";
	var $_PHPSHOP_PRODUCT_FORM_VENDOR			= "Fornecedor";
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER		= "Fabricante";
	var $_PHPSHOP_PRODUCT_FORM_SKU		= "SKU";
	var $_PHPSHOP_PRODUCT_FORM_NAME		= "Nome";
	var $_PHPSHOP_PRODUCT_FORM_URL		= "URL";
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY		= "Categoria";
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS	= "Pre�o do produto (Bruto)";
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET	= "Pre�o do produto(L�quido)";
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION	= "Descri��o";
	var $_PHPSHOP_PRODUCT_FORM_S_DESC		= "Pequena descri��o";
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK		= "Em Invent�rio";
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER		= "Em Encomenda";
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE	= "Data de disponibilidade";
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL		= "Em especial";
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE	= "Tipo de desconto";
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH		= "Publicar?";
	var $_PHPSHOP_PRODUCT_FORM_LENGTH		= "Tamanho";
	var $_PHPSHOP_PRODUCT_FORM_WIDTH		= "Largura";
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT		= "Altura";
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM	= "Unidade de medida";
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT		= "Peso";
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM	= "Unidade de medida";
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE	= "Pequena imagem";
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE	= "Imagem completa";
	
	// Produto Display
	
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL		= "Resultados de adicionar produto";
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL	= "Resultados de atualizar produto";
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL		= "Resultados de adicionar art�culo";
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL		= "Resultados de atualizar art�culo";
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD				= "Carregar CSV";
	var $_PHPSHOP_PRODUCT_FOLDERS					= "Diret�rios de produtos";
	
	// Produto Categoria Lista
	
	var $_PHPSHOP_CATEGORY_LIST_MNU	 = "Lista de categorias";
	var $_PHPSHOP_CATEGORY_LIST_LBL	 = "Categorias";
	
	// Produto Categoria Form
	
	var $_PHPSHOP_CATEGORY_FORM_MNU		= "Adicionar categoria";
	var $_PHPSHOP_CATEGORY_FORM_LBL		= "Informa��o";
	var $_PHPSHOP_CATEGORY_FORM_NAME		= "Nome";
	var $_PHPSHOP_CATEGORY_FORM_PARENT		= "Pai";
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION	= "Descri��o da categoria";
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH		= "Publicar?";
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE		= "Prospecto da categoria";
	
	// Produto Cualidad Lista
	
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU	= "Listar atributos";
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL	= "Listar atributos para o";
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME	= "Nome atributos";
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER	= "Listar encomendas";
	
	// Produto Cualidad Form
	
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU			= "Adicionar atributos";
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL			= "Formul�rio atributos";
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT	= "Novo atributo do produto";
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT	= "Atualizar atributos de produto";
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM		= "Novo atributo do produto";
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM	= "Atualizar atributos do produto";
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME			= "Nome atributo";
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER			= "Listar encomendas";
	
	// Produto Precio Lista
	
	var $_PHPSHOP_PRICE_LIST_MNU			= "Listar categorias";
	var $_PHPSHOP_PRICE_LIST_LBL			= "Lista de pre�os";
	var $_PHPSHOP_PRICE_LIST_FOR_LBL		= "Pre�os por";
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME		= "Grupo";
	var $_PHPSHOP_PRICE_LIST_PRICE		= "Pre�o";
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY		= "Moeda";
	
	// Produto Precio Form
	
	var $_PHPSHOP_PRICE_FORM_MNU				= "Adicionar pre�o";
	var $_PHPSHOP_PRICE_FORM_LBL				= "Informa��o";
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT		= "Novo pre�o de produto";
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT	= "Atualizar pre�o de produto";
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM		= "Novo pre�o de produto";
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM		= "Atualizar pre�o de produto";
	var $_PHPSHOP_PRICE_FORM_PRICE			= "Pre�o";
	var $_PHPSHOP_PRICE_FORM_CURRENCY			= "Moeda";
	var $_PHPSHOP_PRICE_FORM_GROUP			= "Grupo do cliente";
	
	
	/*#####################
	MODULE REPORT BASIC
	#####################*/
	
	# Some LABELs
	
	var $_PHPSHOP_REPORTBASIC_MOD		= "Relat�rios";
	var $_PHPSHOP_RB_INDIVIDUAL		= "Lista individual de produtos";
	var $_PHPSHOP_RB_SALE_TITLE		= "Relat�rio de vendas";
	
	/* labels por rpt_sales */
	var $_PHPSHOP_RB_SALES_PAGE_TITLE		= "Atividade de vendas";
	var $_PHPSHOP_RB_INTERVAL_TITLE		= "Escrever intervalo";
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE	= "Mensal";
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE	= "Semanal";
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE	= "Di�rio";
	
	var $_PHPSHOP_RB_THISMONTH_BUTTON	= "Este m�s";
	var $_PHPSHOP_RB_LASTMONTH_BUTTON	= "�ltimo m�s";
	var $_PHPSHOP_RB_LAST60_BUTTON	= "�ltimos 60 dias";
	var $_PHPSHOP_RB_LAST90_BUTTON	= "�ltimos 90 dias";
	
	var $_PHPSHOP_RB_START_DATE_TITLE	= "Come�ar em";
	var $_PHPSHOP_RB_END_DATE_TITLE	= "Acabar em";
	var $_PHPSHOP_RB_SHOW_SEL_RANGE	= "Mostrar a gama selecionada";
	var $_PHPSHOP_RB_REPORT_FOR		= "Relatar para ";
	var $_PHPSHOP_RB_DATE			= "Data";
	var $_PHPSHOP_RB_ORDERS			= "Ordens";
	var $_PHPSHOP_RB_TOTAL_ITEMS		= "Total de artigos vendidos";
	var $_PHPSHOP_RB_REVENUE		= "Ganhos";
	var $_PHPSHOP_RB_PRODLIST		= "Lista de produtos";
	
	
	
	/*#####################
	MODULE SHOP
	#####################*/
	
	# Some LABELs
	var $_PHPSHOP_SHOP_MOD			= "Loja";
	var $_PHPSHOP_PRODUCT_THUMB_TITLE	= "Imagem pequena";
	var $_PHPSHOP_PRODUCT_PRICE_TITLE	= "Pre�o";
	var $_PHPSHOP_ORDER_STATUS_P		= "Pendente";
	var $_PHPSHOP_ORDER_STATUS_C		= "Confirmado";
	var $_PHPSHOP_ORDER_STATUS_X		= "Cancelado";
	
	
	# Some messages
	
	var $_PHPSHOP_ORDER_BUTTON	= "Ordenar";
	
	
	/*#####################
	MODULE SHOPPER
	#####################*/
	
	# Some LABELs
	
	var $_PHPSHOP_SHOPPER_MOD	= "Cliente";
	
	
	// Cliente Lista
	
	var $_PHPSHOP_SHOPPER_LIST_MNU		= "Listar clientes";
	var $_PHPSHOP_SHOPPER_LIST_LBL		= "Lista de clientes";
	var $_PHPSHOP_SHOPPER_LIST_USERNAME		= "Usu�rio";
	var $_PHPSHOP_SHOPPER_LIST_NAME		= "Nome completo";
	var $_PHPSHOP_SHOPPER_LIST_GROUP		= "Grupo";
	
	// Cliente Form
	
	var $_PHPSHOP_SHOPPER_FORM_MNU			= "Adicionar cliente";
	var $_PHPSHOP_SHOPPER_FORM_LBL			= "Informa��o";
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL		= "Informa��o de cobrar A";
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL	= "Informa��o";
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL		= "Informa��o de envio";
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL		= "Adicionar endere�o";
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL		= "Endere�o 2";
	var $_PHPSHOP_SHOPPER_FORM_USERNAME			= "Usu�rio";
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME		= "Primeiro nome";
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME		= "Ultimo nome";
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME		= "Nome do meio";
	var $_PHPSHOP_SHOPPER_FORM_TITLE			= "T�tulo";
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME		= "Nome do cliente";
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1		= "Senha";
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2		= "Confirmar senha";
	var $_PHPSHOP_SHOPPER_FORM_GROUP			= "Grupo";
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME		= "Nome da empresa";
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1		= "Endere�o 1";
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2		= "Endere�o 2";
	var $_PHPSHOP_SHOPPER_FORM_CITY			= "Cidade";
	var $_PHPSHOP_SHOPPER_FORM_STATE			= "Estado";
	var $_PHPSHOP_SHOPPER_FORM_ZIP			= "C�digo postal";
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY			= "Pa�s";
	var $_PHPSHOP_SHOPPER_FORM_PHONE			= "Telefone";
	var $_PHPSHOP_SHOPPER_FORM_FAX			= "Fax";
	var $_PHPSHOP_SHOPPER_FORM_EMAIL			= "Email";
	
	// Cliente Grupo Lista
	
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU		= "Listar grupos de clientes";
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL		= "Lista de grupos de clientes";
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME		= "Nome";
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION	= "Descri��o";
	
	
	// Cliente Grupo Form
	
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL	= "Formul�rio de grupos de clientes";
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU	= "Adicionar grupo de clientes";
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME	= "Nome";
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC	= "Descri��o";
	
	
	
	
	/*#####################
	MODULE SHOPPER
	#####################*/
	
	# Some LABELs
	
	var $_PHPSHOP_STORE_MOD	= "Loja";
	
	
	// Tenda Form
	
	var $_PHPSHOP_STORE_FORM_MNU			= "Editar loja";
	var $_PHPSHOP_STORE_FORM_LBL			= "Informa��es sobre a loja";
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL	= "Informa��o do contato";
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE		= "Imagem";
	var $_PHPSHOP_STORE_FORM_UPLOAD		= "Enviar imagem para o servidor";
	var $_PHPSHOP_STORE_FORM_STORE_NAME		= "Nome da loja";
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME	= "Nome da empresa";
	var $_PHPSHOP_STORE_FORM_ADDRESS_1		= "Endere�o 1";
	var $_PHPSHOP_STORE_FORM_ADDRESS_2		= "Endere�o 2";
	var $_PHPSHOP_STORE_FORM_CITY			= "Cidade";
	var $_PHPSHOP_STORE_FORM_STATE		= "Estado";
	var $_PHPSHOP_STORE_FORM_COUNTRY		= "Pa�s";
	var $_PHPSHOP_STORE_FORM_ZIP			= "C�digo postal";
	var $_PHPSHOP_STORE_FORM_PHONE		= "Telefone";
	var $_PHPSHOP_STORE_FORM_CURRENCY		= "Moeda";
	var $_PHPSHOP_STORE_FORM_CATEGORY		= "Categoria";
	var $_PHPSHOP_STORE_FORM_LAST_NAME		= "Ultimo nome";
	var $_PHPSHOP_STORE_FORM_FIRST_NAME		= "Primeiro nome";
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME	= "Nome do meio";
	var $_PHPSHOP_STORE_FORM_TITLE		= "T�tulo";
	var $_PHPSHOP_STORE_FORM_PHONE_1		= "Telefone 1";
	var $_PHPSHOP_STORE_FORM_PHONE_2		= "Telefone 2";
	var $_PHPSHOP_STORE_FORM_FAX			= "Fax";
	var $_PHPSHOP_STORE_FORM_EMAIL		= "Email";
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH		= "Diret�rio para a imagem";
	var $_PHPSHOP_STORE_FORM_DESCRIPTION	= "Descri��o";
	
	
	var $_PHPSHOP_PAYMENT		= "Pagamento";
	
	// Pagamento M�todo Lista
	
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU			= "Listar m�todos de pagamento";
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL			= "Lista de m�todos de pagamento";
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME			= "Nome";
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE			= "C�digo";
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT		= "Desconto";
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP		= "Grupo de clientes";
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR	= "Cybercash";
	
	// Pagamento M�todo Form
	
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU			= "Adicionar m�todo de pagamento";
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL			= "Formul�rio m�todo de pagamento";
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME			= "Nome do formul�rio de pagamento";
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP		= "Grupo de cliente";
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT		= "Desconto";
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE			= "C�digo";
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER		= "Listar encomendas";
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR	= "Usar Cybercash";
	
	
	/*#####################
	MODULE TAX
	#####################*/
	
	
	# Some LABELs
	
	var $_PHPSHOP_TAX_MOD	= "IVA";
	
	// User Lista
	
	var $_PHPSHOP_TAX_RATE			= "Tarifas de encomenda";
	var $_PHPSHOP_TAX_LIST_MNU		= "Listar tarifas de IVA";
	var $_PHPSHOP_TAX_LIST_LBL		= "Lista tarifas de imposto";
	var $_PHPSHOP_TAX_LIST_STATE		= "Impostos por estado ou regi�o";
	var $_PHPSHOP_TAX_LIST_COUNTRY	= "Impostos no pa�s";
	var $_PHPSHOP_TAX_LIST_RATE		= "Tarifas de imposto";
	
	// User Form
	
	var $_PHPSHOP_TAX_FORM_MNU		= "Adicionar taxa de imposto";
	var $_PHPSHOP_TAX_FORM_LBL		= "Adicionar informa��o de imposto";
	var $_PHPSHOP_TAX_FORM_STATE		= "Imposto por Estado ou regi�o";
	var $_PHPSHOP_TAX_FORM_COUNTRY	= "Imposto do pa�s";
	var $_PHPSHOP_TAX_FORM_RATE		= "Tarifas de imposto";
	
	
	
	
	/*#####################
	MODULE VENDOR
	#####################*/
	
	
	# Some LABELs
	
	var $_PHPSHOP_VENDOR_MOD	= "Vendedor";
	var $_PHPSHOP_VENDOR_ADMIN	= "Vendedores";
	
	
	// Vendedor Lista
	
	var $_PHPSHOP_VENDOR_LIST_MNU			= "Lista de vendedores";
	var $_PHPSHOP_VENDOR_LIST_LBL			= "Lista de vendedores";
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME	= "Nome";
	var $_PHPSHOP_VENDOR_LIST_ADMIN		= "Admin";
	
	// Vendedor Form
	
	var $_PHPSHOP_VENDOR_FORM_MNU			= "Adicionar vendedor";
	var $_PHPSHOP_VENDOR_FORM_LBL			= "Adicionar informa��o";
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL		= "Informa��o";
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL	= "Contato para informa��o";
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE	= "Imagem";
	var $_PHPSHOP_VENDOR_FORM_UPLOAD		= "Enviar imagem para o servidor";
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME	= "Nome do vendedor da loja";
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME	= "Nome do vendedor da empresa";
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1		= "Endere�o 1";
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2		= "Endere�o 2";
	var $_PHPSHOP_VENDOR_FORM_CITY		= "Cidade";
	var $_PHPSHOP_VENDOR_FORM_STATE		= "Estado";
	var $_PHPSHOP_VENDOR_FORM_COUNTRY		= "Pa�s";
	var $_PHPSHOP_VENDOR_FORM_ZIP			= "C�digo postal";
	var $_PHPSHOP_VENDOR_FORM_PHONE		= "Telefone";
	var $_PHPSHOP_VENDOR_FORM_CURRENCY		= "Moeda";
	var $_PHPSHOP_VENDOR_FORM_CATEGORY		= "Categoria";
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME		= "�ltimo nome";
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME	= "Primeiro nome";
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME	= "Nome do meio";
	var $_PHPSHOP_VENDOR_FORM_TITLE		= "T�tulo";
	var $_PHPSHOP_VENDOR_FORM_PHONE_1		= "Telefone 1";
	var $_PHPSHOP_VENDOR_FORM_PHONE_2		= "Telefone 2";
	var $_PHPSHOP_VENDOR_FORM_FAX			= "Fax";
	var $_PHPSHOP_VENDOR_FORM_EMAIL		= "Email";
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH	= "Diret�rio de imagens";
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION	= "Descri��o";
	
	
	// Vendedor Categoria Lista
	
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU		= "Lista de categorias de vendedor";
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL		= "Lista da categoria de vendedores";
	var $_PHPSHOP_VENDOR_CAT_NAME			= "Nome da categoria";
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION	= "Descri��o";
	var $_PHPSHOP_VENDOR_CAT_VENDORS		= "Vendedores";
	
	// Vendedor Categoria Form
	
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU		= "Adicionar categoria de vendedor";
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL		= "Formul�rio de categoria de vendedor";
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL	= "Informa��o";
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME		= "Nome da Categoria";
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION	= "Descri��o";
	
	
	/*#####################
	MODULE MANUFACTURER
	#####################*/
	
	# Some LABELs
	
	var $_PHPSHOP_MANUFACTURER_MOD	= "Fabricante";
	var $_PHPSHOP_MANUFACTURER_ADMIN	= "Fabricantes";
		
	// Manufacturer List
	
	var $_PHPSHOP_MANUFACTURER_LIST_MNU				= "Listar fabricantes";
	var $_PHPSHOP_MANUFACTURER_LIST_LBL				= "Listar fabricante";
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME	= "Nome";
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN			= "Administra��o";
	
	// Manufacturer Form
	
	var $_PHPSHOP_MANUFACTURER_FORM_MNU			= "Adicionar fabricante";
	var $_PHPSHOP_MANUFACTURER_FORM_LBL			= "Adiocionar informa��o";
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL		= "Informa��es";
	var $_PHPSHOP_MANUFACTURER_FORM_NAME		= "Nome do fabricante";
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY		= "Categoria";
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL		= "Email";
	var $_PHPSHOP_MANUFACTURER_FORM_URL			= "P�gina do fabricante";
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION	= "Descri��o";
	
	
	// Manufacturer Category List
	
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU		= "Listar as categorias do fabricante";
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL		= "Listar a categoria do fabricante";
	var $_PHPSHOP_MANUFACTURER_CAT_NAME			= "Nome da Categoria";
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION	= "Descri��o da Categoria";
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS	= "Fabricantes";
	
	// Manufacturer Category Form
	
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU		= "Adicionar Categoria de fabricante";
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL		= "Detalhes da Categoria de fabricante";
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL	= "Informa��o da categoria";
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME		= "Nome da categoria";
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION	= "Descri��o";
		
	
	/*#####################
	Modulo Help
	#####################*/
	
	var $_PHPSHOP_HELP_MOD		= "Ajuda";
	
	// 210104 start
	
	var $_PHPSHOP_CART_ACTION	= "A��es";
	var $_PHPSHOP_CART_UPDATE	= "Atualizar";
	var $_PHPSHOP_CART_DELETE	= "Apagar";
	
	//shopbrowse form
	
	var $_PHPSHOP_PRODUCT_PRICETAG	= "Pre�o";
	var $_PHPSHOP_PRODUCT_CALL		= "Chamar para saber o pre�o";
	var $_PHPSHOP_PRODUCT_PREVIOUS	= "Anterior";
	var $_PHPSHOP_PRODUCT_NEXT		= "Seguinte";
	
	//ro_basket
	
	var $_PHPSHOP_CART_TAX			= "Imposto";
	var $_PHPSHOP_CART_SHIPPING		= "Envio";
	var $_PHPSHOP_CART_TOTAL		= "Total";
	
	//CHECKOUT.INDEX
	
	var $_PHPSHOP_CHECKOUT_NEXT		= "Pr�ximo";
	var $_PHPSHOP_CHECKOUT_REGISTER	= "Registar-se";
	
	//CHECKOUT.CONFIRM
	
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO		= "Informa��o de pagamento";
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY			= "Empresa";
	var $_PHPSHOP_CHECKOUT_CONF_NAME			= "Nome";
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS			= "Endere�o";
	var $_PHPSHOP_CHECKOUT_CONF_PHONE			= "Telefone";
	var $_PHPSHOP_CHECKOUT_CONF_FAX			= "Fax";
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL			= "Email";
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO		= "Informa��o de envio";
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY	= "Empresa";
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME		= "Nome";
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS	= "Endere�o";
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE	= "Telefone";
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX		= "Fax";
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO			= "Informa��o de pagamento";
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD	= "Nome no cart�o";
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD	= "M�todo de pagamento";
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM		= "N�mero de cart�o de cr�dito";
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE	= "Data de validade";
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER	= "Completar a encomenda";
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO	= "Informa��o requerida quando Pagamento via cart�o de cr�dito � selecionada";
	
	
	var $_PHPSHOP_ZONE_MOD			= "Envio por zonas";
	
	var $_PHPSHOP_ZONE_LIST_MNU		= "Listar zonas";
	var $_PHPSHOP_ZONE_FORM_MNU		= "Adicionar zona";
	var $_PHPSHOP_ZONE_ASSIGN_MNU		= "Atribuir zona";
	
	// assign zone List
	
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL	= "Pa�s";
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL	= "Zona atual";
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL	= "Atribuir zona";
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL	= "Atualizar";
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL		= "Atribuir zonas";
	
	// zone Form
	
	var $_PHPSHOP_ZONE_FORM_NAME_LBL		= "Nome da zona";
	var $_PHPSHOP_ZONE_FORM_DESC_LBL		= "Descri��o da zona";
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL	= "Custo por zona por artigo";
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL	= "Limite de custo da zona";
	
	// List of zones
	
	var $_PHPSHOP_ZONE_LIST_LBL			= "Lista das zonas";
	var $_PHPSHOP_ZONE_LIST_NAME_LBL		= "Nome da zona";
	var $_PHPSHOP_ZONE_LIST_DESC_LBL		= "Descri��o da zona";
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL	= "Custo da zona por artigo";
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL	= "Limite de custo da zona";
	
	var $_PHPSHOP_LOGIN_FIRST		= "Por favor, primeiro identifique-se ou registe-se na loja.<br>Obrigado.";
	var $_PHPSHOP_STORE_FORM_TOS		= "Termos do servi�o";
	var $_PHPSHOP_AGREE_TO_TOS		= "Por favor, primeiro concorde com os Termos de servi�o.";
	var $_PHPSHOP_I_AGREE_TO_TOS		= "Concordo com os Termos de servi�o";
	
	var $_PHPSHOP_LEAVE_BLANK		= "(deixar em BRANCO se n�o tiver<br />nenhum arquivo php individual)";
	var $_PHPSHOP_RETURN_LOGIN		= "� cliente registado? Por favor identifique-se"; 
	var $_PHPSHOP_NEW_CUSTOMER		= "Novo(a) cliente? Por favor disponibilize os dados para fatura"; 
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT	= "Conta do cliente:"; 
	var $_PHPSHOP_ACC_ORDER_INFO		= "Informa��o da encomenda"; 
	var $_PHPSHOP_ACC_UPD_BILL		= "Aqui pode encontrar os dados do faturamento."; 
	var $_PHPSHOP_ACC_UPD_SHIP		= "Aqui pode adicionar ou atualizar o endere�o para envio."; 
	var $_PHPSHOP_ACC_ACCOUNT_INFO	= "Informa��o de conta"; 
	var $_PHPSHOP_ACC_SHIP_INFO		= "Informa��o de envio"; 
	var $_PHPSHOP_ACC_NO_ORDERS		= "N�o h� encomendas para mostrar"; 
	var $_PHPSHOP_ACC_BILL_DEF		= "- Por padr�o (igual ao de faturamento)"; 
	var $_PHPSHOP_SHIPTO_TEXT		= "Voc� pode adicionar endere�os de envio � sua conta. Por favor pense num apelido ou c�digo para o endere�o que selecionar abaixo."; 
	var $_PHPSHOP_CONFIG			= "Configura��o"; 
	var $_PHPSHOP_USERS			= "Usu�rios"; 
	var $_PHPSHOP_IS_CC_PAYMENT		= "� pago com cart�o de cr�dito?"; 
	
	/*#####################################################
	 MODULE SHIPPING
	#######################################################*/
	
	var $_PHPSHOP_SHIPPING_MOD			= "Ger�ncia de entregas";
	var $_PHPSHOP_SHIPPING_MENU_LABEL		= "Transportes";
	
	var $_PHPSHOP_CARRIER_LIST_MNU		= "Transportador";
	var $_PHPSHOP_CARRIER_LIST_LBL		= "Lista de transportadores";
	var $_PHPSHOP_RATE_LIST_MNU			= "Taxas de transporte";
	var $_PHPSHOP_RATE_LIST_LBL			= "Lista de taxas de transporte";
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL		= "Nome";
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL	= "Ordem de listagem (n�mero)";
	
	var $_PHPSHOP_CARRIER_FORM_MNU		= "Novo transportador";
	var $_PHPSHOP_CARRIER_FORM_LBL		= "Editar/Criar transportador";
	var $_PHPSHOP_RATE_FORM_MNU			= "Nova Taxa de transporte";
	var $_PHPSHOP_RATE_FORM_LBL			= "Editar/Criar taxa de transporte";
	
	var $_PHPSHOP_RATE_FORM_NAME			= "Descri��o";
	var $_PHPSHOP_RATE_FORM_CARRIER		= "Transportador";
	var $_PHPSHOP_RATE_FORM_COUNTRY		= "Pa�s";
	var $_PHPSHOP_RATE_FORM_ZIP_START		= "In�cio do intervalo de c�digos postais";
	var $_PHPSHOP_RATE_FORM_ZIP_END		= "Fim do intervalo de c�digos postais";
	var $_PHPSHOP_RATE_FORM_WEIGHT_START	= "Peso minimo";
	var $_PHPSHOP_RATE_FORM_WEIGHT_END		= "Peso m�ximo";
	var $_PHPSHOP_RATE_FORM_VALUE			= "Taxa";
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE		= "A taxa da sua encomenda";
	var $_PHPSHOP_RATE_FORM_CURRENCY		= "Moeda";
	var $_PHPSHOP_RATE_FORM_VAT_ID		= "VAT Id";
	var $_PHPSHOP_RATE_FORM_LIST_ORDER		= "Ordem de listagem (n�mero)";
	
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL	= "Transportador";
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME	= "Descri��o da taxa de transporte";
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART	= "Peso a partir de ...";
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND	= "... at�";
	var $_PHPSHOP_CARRIER_FORM_NAME			= "Empresa transportadora";
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER		= "Ordem de listagem (n�mero)";
	
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST		= "ERRO: Transportador ID j� existe.";
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ	= "ERRO: Escolha um transportador.";
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE		= "ERRO: Pelo menos uma taxa de transporte existe, apague as taxas posteriores ao transportador";
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND	= "ERRO: N�o foi encontrado nenhum transportador com este ID.";
	
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ		= "ERRO: Escolha um transportador.";
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV		= "ERRO: N�o foi encontrado nenhum transportador com este ID.";
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ			= "ERRO: � obrigat�ria uma descri��o da taxa.";
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV	= "ERRO: O Pa�s de destino � inv�lido. Se optou por escolher mais de um pa�s, por favor separe-os com um espa�o";
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ	= "ERRO: � obrigat�rio apresentar um peso m�nimo";
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ		= "ERRO: � obrigat�rio apresentar um peso m�ximo";
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV	= "ERRO: O peso mais baixo deve ser mais pequeno que o peso mais alto";
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ	= "ERRO: � obrigat�rio apresentar uma taxa de transporte";
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV	= "ERRO: Escolha uma moeda";
	
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ		= "ERRO: � obrigat�rio apresentar uma taxa de transporte";
	
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT	= "Por favor escolha";
	var $_PHPSHOP_INFO_MSG_CARRIER		= "Transportador";
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD	= "Taxa de Transporte";
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE	= "Pre�o";
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL		= "0 (-nenhum-)";
	
	
	/*#####################################################
	 END: MODULE SHIPPING
	#######################################################*/
	
	var $_PHPSHOP_PAYMENT_FORM_CC			= "Cart�o de cr�dito";
	var $_PHPSHOP_PAYMENT_FORM_USE_PP		= "Usar Processo de pagamento";
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT	= "D�bito banc�rio";
	var $_PHPSHOP_PAYMENT_FORM_AO			= "Apenas no endere�o";
	var $_PHPSHOP_CHECKOUT_MSG_2			= "Por favor escolha um endere�o de entrega!";
	var $_PHPSHOP_CHECKOUT_MSG_3			= "Por favor escolha um m�todo de entrega!";
	var $_PHPSHOP_CHECKOUT_MSG_4			= "Por favor escolha um m�todo de pagamento!";
	var $_PHPSHOP_CHECKOUT_MSG_99			= "Por favor verifique os dados introduzidos e confirme a encomenda!";
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP		= "Por favor escolha um m�todo de entrega.";
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP	= "Por favor escolha outro m�todo de entrega.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM		= "Por favor escolha um m�todo de pagamento.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR		= "Por favor escreva o seu n�mero de cart�o de cr�dito.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME	= "Por favor escreva o nome que est� escrito no cart�o de cr�dito.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE	= "O n�mero de cart�o de cr�dito n�o � v�lido.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON		= "Por favor escreva o m�s da data de expira��o do cart�o de cr�dito.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR	= "Por favor escreva o ano da data de expira��o do cart�o de cr�dito.";
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV	= "A data de expira��o � inv�lida.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO	= "Por favor escolha um endere�o para entrega.";
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV	= "N�mero de conta inv�lida.";
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART	= "N�o h� nada no seu carrinho de compras!";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR		= "ERRO: Por favor escolha um transportador!";
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND		= "ERRO: A taxa de transporte n�o foi encontrada!";
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND	= "ERRO: O seu endere�o de entrega n�o foi encontrado!";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA		= "ERRO: N�o existem dados sobre o cart�o de cr�dito....";
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND		= "ERRO: N�mero de Cart�o de Cr�dito n�o encontrado!";
	var $_PHPSHOP_CHECKOUT_ERR_TEST			= "Desculpe, mas o n�mero de cart�o de cr�dito que introduziu � um n�mero de teste!";
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA		= "O user_id n�o foi encontrado na base de dados!";
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME	= "Ainda n�o foi fornecido um nome de titular da sua conta banc�ria.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN		= "Ainda n�o forneceu o seu IBAN (N�mero de Conta Bancaria Internacional).";
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM	= "Ainda n�o foi fornecido um n�mero de conta banc�ria.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT	= "You have actually not provided your bank sort code.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME	= "Ainda n�o foi fornecido o nome do seu banco.";
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP	= "Foi executado um passo inv�lido para efetuar o CheckOut!";
	
	var $_PHPSHOP_CHECKOUT_MSG_LOG		= "A informa��o sobre o pagamento foi guardada para processamento posterior.<BR>";
	
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV		= "Ainda n�o atingiu o valor m�nimo para efectuar a sua compra..";
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2		= "O nosso valor minimo para efetuar uma compra � de:";
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC		= "Pagamento com cart�o de cr�dito";
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER	= "outros m�todos de pagamento";
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT	= "Por favor escolha um m�todo de pagamento:";
	
	var $_PHPSHOP_STORE_FORM_MPOV				= "Valor m�nimo para efetuar uma compra na nossa loja";
	var $_PHPSHOP_ACCOUNT_BANK_TITLE			= "Informa��o da conta banc�ria";
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR		= "N�mero de conta banc�ria";
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE		= "N�mero de c�digo do seu banco";
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME			= "Nome do banco";
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN			= "IBAN";
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER	= "Titular da conta";
	
	var $_PHPSHOP_MODULES				= "M�dulos";
	var $_PHPSHOP_FUNCTIONS				= "Fun��es";
	var $_PHPSHOP_SPECIAL_PRODUCTS		= "Produtos especiais";
	
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE	= "Por favor deixe uma nota juntamente com a sua encomenda se achar necess�rio";
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE	= "Nota do cliente";
	var $_PHPSHOP_INCLUDING_TAX			= "(Incluindo \$tax % tax)";
	var $_PHPSHOP_PLEASE_SEL_ITEM			= "Por favor escolha um �tem";
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL		= "�tem";
	
	// DOWNLOADS
	
	var $_PHPSHOP_DOWNLOADS_TITLE		= "�rea de download";
	var $_PHPSHOP_DOWNLOADS_START		= "Iniciar download";
	var $_PHPSHOP_DOWNLOADS_INFO		= "Por favor escreva o Download-ID que recebeu no seu email e carregue em 'Iniciar download'.";
	var $_PHPSHOP_DOWNLOADS_ERR_EXP	= "Desculpe, mas o seu download expirou";
	var $_PHPSHOP_DOWNLOADS_ERR_MAX	= "Desculpe, mas j� atingiu o n�mero m�ximo de downloads";
	var $_PHPSHOP_DOWNLOADS_ERR_INV	= "Download-ID Inv�lido!";
	var $_PHPSHOP_DOWNLOADS_ERR_SEND	= "N�o foi poss�vel enviar uma mensagem a ";
	var $_PHPSHOP_DOWNLOADS_SEND_MSG	= "Mensagem enviada a  ";
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ	= "Informa��o do download";
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1	= "o(s) ficheiro(s) que encomendou est�o prontos para download";
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2	= "Por favor escreva os seguinte(s) Download-ID(s) na nossa �rea de downloads: ";
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3	= "o n�mero m�ximo de downloads para cada ficheiro � de: ";
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4	= "Tem de fazer o download at� \$expire dias ap�s o primeiro download";
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5	= "Quest�es? Problemas?";
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6	= "Informa��o de Download para "; // ex. Download-Info por "Storename"
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE	= "produto sujeiro a download?"; 
	
	var $_PHPSHOP_PAYPAL_THANKYOU	= "Obrigado pelo seu pagamento. A transa��o foi um sucesso. Voc� receber� um e-mail de confirma��o da transa��o pela PayPal. Voc� pode agora continuar ou entrar em <a href=http://www.paypal.com>www.paypal.com</a> para ver os detalhes da transa��o.";
	var $_PHPSHOP_PAYPAL_ERROR	= "Um erro ocorreu enquanto processava sua transa��o. A situa��o de seu pedido n�o pode ser atualizada.";
	
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1	= "Obrigado pela sua encomenda.  Seguem suas informa��es do pedido.";
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2	= "Obrigado pelo seu patroc�nio.";
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3	= "Quest�es? Problemas?";
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4	= "A encomenda foi recebida.";
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5	= "Para ver a encomenda selecione o atalho.";
	
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE		= "Quantidades negativas n�o permitidas.";
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY	= "Por favor introduza uma quantidade valida para este produto.";
		
	var $_PHPSHOP_CART_STOCK_1		= "A quantidade selecionada excede o estoque. ";
	var $_PHPSHOP_CART_STOCK_2		= "Atualmente temos \$product_in_stock produtos dispon�veis. ";
	var $_PHPSHOP_CART_STOCK_3		= "Clique aqui para ir para lista de espera.";
	var $_PHPSHOP_CART_SELECT_ITEM	= "or favor selecione um �tem especial da p�gina de detalhes!";
		
	var $_PHPSHOP_REGISTRATION_FORM_NONE	= "nenhum";
	var $_PHPSHOP_REGISTRATION_FORM_MR		= "Sr.";
	var $_PHPSHOP_REGISTRATION_FORM_MRS		= "Sra.";
	var $_PHPSHOP_REGISTRATION_FORM_DR		= "Dr.";
	var $_PHPSHOP_REGISTRATION_FORM_PROF	= "Prof.";
	var $_PHPSHOP_DEFAULT				= "Padr�o";
	
	 /*#####################################################
		MODULE AFFILIATE
	  #######################################################*/
	
	var $_PHPSHOP_AFFILIATE_MOD		= "Administra��o de Afinidade";
		
		// Affiliate List
	
	var $_PHPSHOP_AFFILIATE_LIST_MNU			= "Lista afiliados";
	var $_PHPSHOP_AFFILIATE_LIST_LBL			= "Lista de afiliados";
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME	= "Nome do afilidado";
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE	= "Ativo";
	var $_PHPSHOP_AFFILIATE_LIST_RATE			= "Avalia��o";
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL		= "Total mensal";
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION	= "Comiss�o mensal";
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS 		= "Lista de pedidos";
		
		// Affiliate Email
	
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU		= "Email Afiliados";
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL		= "Email Afiliados";
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO		= "A quem enviar(* = TODOS)";
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT	= "Seu Email";
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT	= "Assunto";
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS		= "Incluir estat�sticas atuais";
		
		// Affiliate Form
	
	var $_PHPSHOP_AFFILIATE_FORM_RATE		= "Taxa de comiss�o (percentual)";
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE		= "Ativo?";
		
	var $_PHPSHOP_DELIVERY_TIME 			= "Prazo de entrega (aprox.)";
	var $_PHPSHOP_DELIVERY_INFORMATION 		= "Detalhes entrega";
	var $_PHPSHOP_MORE_CATEGORIES 		= "mais categorias";
	var $_PHPSHOP_AVAILABILITY 			= "Disponibilidade";
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE	= "Produto indispon�vel no momento.";
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN	= "Disponivel em: ";
		
	var $_PHPSHOP_STATISTIC_SUMMARY 		= "Sum�rio";
	var $_PHPSHOP_STATISTIC_STATISTICS		= "Estatisticas";
	var $_PHPSHOP_STATISTIC_CUSTOMERS		= "Clientes";
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS	= "Produtos ativos";
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS	= "Produtos inativos";
	var $_PHPSHOP_STATISTIC_SUM			= "Soma";
	var $_PHPSHOP_STATISTIC_NEW_ORDERS		= "Novas encomendas";
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS	= "Novos clientes";
		
		
		//Waiting list : file /administrator/components/com_phpshop/html/shop.waiting_list.php
	
	var $_PHPSHOP_WAITING_LIST_MESSAGE		= "Por favor introduza o seu e-mail, voc� ser� avisado logo que o produto entre em estoque. O seu endere�o de e-mail ser� apenas utilizado para este fim.<br /><br />Obrigado!";
	var $_PHPSHOP_WAITING_LIST_THANKS		= "Obrigado por aguardar! <br />Voc� ser� avisado logo que entrar em estoque.";
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME	= "Avisar!";
		
		//Checkout : file /administrator/components/com_phpshop/html/checkout.thankyou.php
	
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW	= "Vers�o para impress�o";
	
		/**************************Admin.show_cfg.php in apparition order ;-)**************************************/
		
		/* PAGE 1 */
	
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH	= "Por favor escolha ENTRE Authorize.net OU CyberCash";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS			= "Condi��o do arquivo de configura��o:";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE	= "grav�vel";
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE	= "n�o grav�vel";
		
	var $_PHPSHOP_ADMIN_CFG_GLOBAL			= "Global";
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL			= "Caminho & URL";
	var $_PHPSHOP_ADMIN_CFG_SITE				= "Site";
	var $_PHPSHOP_ADMIN_CFG_SHIPPING			= "Entregas";
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT			= "Processo";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS			= "Downloads";
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS			= "Pagamentos";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE		= "Usar somente como cat�logo";
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN	= "Se marcardo, desabilita todas as funcionalidades para compra.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES				= "Mostrar pre�os";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX		= "Mostrar pre�os com taxa��o?";
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN	= "Defina a op��o onde os compradores v�m pre�os com taxas inclu�das  ou n�o.";
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN		= "Marque para mostrar pre�os. Alguns n�o gostam de mostrar pre�os quando  usado como modo de cat�logo.";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX				= "Taxa Virtual";
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN		= "Determina se �tens com peso zero � taxado ou n�o. Modifique ps_checkout.php->calc_order_taxable() para personalizar.";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE		= "Modo de taxa��o:";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP	= "Baseado no endere�o do comprador";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR	= "Baseado no endere�o do vendedor";
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN	= "Determina qual valor � usado para o c�lculo de taxas:<br /> <ul><li>Estadual/Nacional referente ao vendedor</li><br/> <li>ou referente ao local do comprador.</li></ul>";
	
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE			= "Habilita m�ltipla taxa��o?";
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN		= "Marque, se voc� tem produtos com diferentes taxas (ex. 7% para livros e comida, 16% para outros)";
	
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE	= "Subtrai desconto do pagamento antes de taxa/envio?";
	var $_PHPSHOP_ADMIN_CFG_REVIEW				= "Habilita sistema de Cr�tica/Avalia��o";
	
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN	= "Se habilitado, voc� permite aos clientes <strong>avaliar os produtos</strong> e <strong>escrever cr�ticas</strong> sobre eles. <br /> Assim os clientes podem escrever aos outros clientes sobre suas experi�ncias com o produto.<br />";
	
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN	= "Define a op��o para subtrair o disconto da forma de pagamento ANTES (marcado) ou AP�S as taxas e entrega.";
	
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK		= "Clientes podem dixar informa��es de contas banc�rias?";
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN	= "Marque se voc� quer que seus clientes possam entrar com suas informa��es banc�rias quando registrarem-se para uma compra.";
	
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE			= "Clientes podem selecionar um estado/regi�o?";
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN	= "Marque se voc� quer que seua clientes possam selecionar seus estados/regi�es quando registrarem-se a uma compra.";
	
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS				= "Deve concordar com os Termos de servi�o?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN		= "Marque se voc� quer que seus clientes concordem com os Termos de servi�o antes de se registrarem na loja.";
	
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK				= "Verifica Estoque?";
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN		= "Define se deve ser verificado o estoque quando o cliente adiciona um �tem ao carrinho de compras. Se definido, n�o permique que clientes adicionem mais �tem que os dispon�veis no estoque.";
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE			= "Habilita Programa de fidelidade?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN	= "Habilita a varredura de fidelidade na vitrine da loja. Habilite se voc� adicionou o programa no backend.";
	
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT			= "Formato da carta de pedido:";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT		= "Texto";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML		= "HTML";
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN	= "Determina como voc� define as cartas de confirma��o de pedido:<br /> <ul><li>como email de texto simples</li> <li>ou como email em html com imagens.</li></ul>";
	
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN		= "Permite administra��o para usu�rios n�o administrativos?";
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN	= "Com esta op��o marcada voc� pode habilitar o painel de administra��o para usu�rios 'administradores de loja', mas que n�o possam acessar o Backend do Mambo (ex. Registrado / Editor).";
		
		/* PAGE 2 */
	
	var $_PHPSHOP_ADMIN_CFG_URL				= "URL";
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN			= "URL do seu site. Normalmente id�ntico a URL do Mambo (com barra invertida no final!)";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE			= "URLSEGURA";
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN		= "URL segura ao seu site. (https - com barra invertida no final!)";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT		= "COMPONENTURL";
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN	= "URL para o componente mambo-phpShop. (com barra invertida no final!)";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE			= "IMAGEURL";
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN		= "A URL ao diret�rio do componente de imagem do mambo-phpShop (com barra invertida no final!).";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH			= "ADMINPATH";
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN		= "Caminho ao diret�rio de componente mambo-phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH			= "CLASSPATH";
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN		= "Caminho ao diret�rio de classes do phpShop.";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH			= "PAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN		= "Caminho ao diret�rio phpShop html.";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH			= "IMAGEPATH";
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN		= "Caminho ao diret�rio do phpShop shop_image.";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE			= "HOMEPAGE";
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN		= "P�gina que ser� carregada por padr�o.";	
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE			= "ERRORPAGE";
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN		= "P�gina padr�o para mostrar mensages de erro.";	
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE			= "DEBUGPAGE";
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN		= "P�gina padr�o para mostrar mensagens de debug.";
	var $_PHPSHOP_ADMIN_CFG_DEBUG				= "DEBUG ?";
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN		= "Liga a sa�da de debug. Causa a exibi��o da DEBUGPAGE no parte de baixo de cada p�gina. Muito �til durante o desenvolvimento do site j� que mostra o conte�do dos pedidos, campo de formul�rios, etc.";
	
	
	/* PAGE 3 */
	
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE			= "FLYPAGE";
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN		= "P�gina padr�o para mostrar os detalhes dos produtos.";
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE		= "Modelo de Categoria";
	
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN	= "Define o modelo padr�o de categoria para mostrar produtos numa categoria.<br /> Voc� pode criar novos modelos editando os arquivos de modelo existentes <br /> (que se encontra no diret�rio <strong>COMPONENTPATH/html/templates/	</strong> e come�a com browse_)";
	
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW			= "N�mero padr�o para produtos em uma coluna";
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN	= "Define o n�mero de produtos em uma coluna. <br /> Ex: Se voc� defin�-lo para 4, o modelo de categoria ir� mostrar 4 produtos por coluna";
	
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE			= "\"sem a imagem\" imagem";
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN	= "Esta imagem ser� mostrada quando nenhuma imagem de produto estiver dispon�vel.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS			= "PROCURA COLUNAS";
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN	= "Determina o n�mero de colunas por p�gina quando o resultado de busca	for mostrado em uma lista.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1		= "PROCURA COR 1";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN	= "Especifica a cor das colunas impares em uma lista de resultado	de busca.";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2		= "PROCURA COR 2";
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN	= "Especifica a cor das colunas pares em uma lista de resultado de busca.";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS				= "M�XIMO COLUNAS";
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN		= "Define o n�mero de colunas a ser mostrado em uma caixa de sele��o de listagem de ordem.";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION		= "Mostrar rodap� \"powered by mambo-phpShop\" ?";
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN	= "Mostra a imagem powered-by-mambo-phpShop no rodap�.";
		
		
		/* PAGE 4 */
	
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD			= "Escolha o m�todo de entrega de sua loja";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD	= "M�dulo de entrega padr�o com configura��es individuais para o transportador. <strong>RECOMENDADO !</strong>";
	
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE		= "Zone Shipping Module Country Version 1.0<br />Para mais informa��es sobre este m�dulo por favor visite <a href=\"http://ZephWare.com\">http://ZephWare.com</a><br /> para detalhes ou contato <a href=\"mailto:zephware@devcompany.com\"> ZephWare.com </a> <br /> Marque para habilitar o m�dulo de zone shipping";
	
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS				= "Ferramenta de c�lculo de entrega da UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE		= "C�digo de acesso UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN	= "Seu c�digo de acesso UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID			= "UPS user id";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN		= "The user ID you got from UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD			= "Senha UPS";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN	= "A senha para sua conta UPS";
		  
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER	= "M�dulo InterShipper. Marque somente se voc� tem uma conta Intershipper.com";
	
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE		= "Desabilita a sele��o de m�todo de entrega. Escolha se seus clientes compram produtos que n�o precisam ser enviados.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD		= "Senha InterShipper";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN 	= "A senha para sua conta intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL			= "InterShipper email";
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN	= "Seu endere�o de email para sua conta intershipper.";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY				= "CHAVE CODIFICADA";
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN			= "Usado para encriptar informa��es guardadas em banco de dados com esta chave. Significa que este arquivo deve sempre ser protegido de ser visualisado.";
	
		/* PAGE 5 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR		= "Habilita a barra de verifica��o";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN	= "Marque se quiser que a 'barra de verifica��o' seja mostrada ao cliente durante o processo (1 - 2 - 3 - 4 com gr�ficos).";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS			= "Escolha o processo de verifica��o do seu site";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD	= "<strong>Padr�o :</strong><br/>
			1. Requisi��o do endere�o de envio<br />
			2. Requisi��o do m�todo de envio<br />
			3. Requisi��o do m�todo de pagamento<br />
			4. Completar pedido";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2		= "<strong>Processo 2:</strong><br/>
			1. Requisi��o do endere�o de envio<br />
			2. Requisi��o do m�todo de pagamento<br />
			3. Completar pedido";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3		= "<strong>Processo 3:</strong><br/>
			1. Requisi��o do m�todo de envio<br />
			2. Requisi��o do m�todo de pagamento<br />
			3. Completar pedido";
	
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4		= "<strong>Processo 4:</strong><br/>
			1. Requisi��o do m�todo de pagamento<br />
			2. Completar pedido";
	
	
		/* PAGE 6 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS			= "Habilita Downloads";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN	= "Marque para habilitar a capacidade de download. Somente se voc� vende produtos descarreg�veis.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS			= "A situa��o do pedido que habilita download";
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN	= "Selecione a situa��o do pedido no qual o cliente � notificado sobre o download via e-mail.";
	
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS			= "Situa��o do pedido que desabilita downloads";
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN	= "Defina o situa��o do pedido que desabilita o download para o cliente.";
	
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT		= "DOWNLOADROOT";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN	= "O caminho f�sico para ao arquivos de download do cliente. (barra invertida no final!)<br> <span class=\"message\">Para seguran�a de sua loja: Se poss�vel, por favor use um diret�rio EM QUALQUER LUGAR FORA DO WEBROOT</span>";
		
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX		= "Download M�ximo";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN	= "define o n�mero de downloads que pode ser feito com um Download-ID, (para cada fatura)";
		
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE		= "Vencimento do Download";
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN	= "Defina o intervalo de tempo <strong>em segundos</strong> no qual o download esta dispon�vel para o cliente. Este intervalo come�a	 com o primeiro download! Quando o intervalo vencer, o download-ID � desabilitado.<br />Nota : 86400s=24h.";
	
		/* PAGE 7 */
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL			= "Habilita pagamento IPN via PayPal?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN		= "Marque para permitir que seus clientes usem o sistema de pagamento da PayPal.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL			= "Email de pagamento PayPal:";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN		= "Your business email address for PayPal payments. Also used as receiver_email.";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS		= "Order Status for successful transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN	= "Select the order status to which the actual order is set, if the PayPal IPN was successful. If using download selling options: select the status which enables the download (then the customer is instantly notified about the download via e-mail).";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED		= "Order Status for failed transactions";
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN	= "Select an order status for failed PayPal transactions.";
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE			= "Enable Payments via PayMate?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN		= "Check to let your customers use the Australian PayMate payment system.";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME			= "PayMate username:";
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN	= "Your user account for PayMate.";
		
	
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET			= "Enable Authorize.net payment?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN		= "Check to use Authorize.net with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE		= "Modo de testes ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN	= "Selecione 'Sim' enquanto testa. Selecione 'N�o' para habilitar transa��es reais.";
	var $_PHPSHOP_ADMIN_CFG_YES	= "Sim";
	var $_PHPSHOP_ADMIN_CFG_NO	= "N�o";
		
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME				= "Authorize.net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN			= "This is your Authorize.Net Login ID";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY					= "Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN				= "This is your Authorize.net Transaction Key";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE			= "Authentication Type";
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN	= "This is the Authorize.Net authentication type.";
		
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH				= "Enable CyberCash?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN		= "Check to use CyberCash with phpShop.";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND			= "CyberCash MERCHANT";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN		= "CC_MERCHANT is the CyberCash Merchant ID";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY			= "CyberCash Merchant Key";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN	= "CyberCash Merchant Key is the Merchant Provided by CyberCash";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL				= "CyberCash PAYMENT URL";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN			= "CyberCash PAYMENT URL is the URL provided by Cybercash for secure payment";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE		= "CyberCash AUTH TYPE";
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN	= "CyberCash AUTH TYPE is the Cybercash authentication type provided by Cybercase";
		
	
		/** Advanced Search feature ***/
	
	var $_PHPSHOP_ADVANCED_SEARCH		="Procura Avan�ada";
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES	= "Procurar todas as categorias";
	var $_PHPSHOP_SEARCH_ALL_PRODINFO	= "Procurar todos os detalhes produto";
	var $_PHPSHOP_SEARCH_PRODNAME		= "Apenas Produto";
	var $_PHPSHOP_SEARCH_MANU_VENDOR	= "Apenas Marca/Vendedor";
	var $_PHPSHOP_SEARCH_DESCRIPTION	= "Apenas Descri��o Produto";
	var $_PHPSHOP_SEARCH_AND		= "e";
	var $_PHPSHOP_SEARCH_NOT		= "n�o";
	var $_PHPSHOP_SEARCH_TEXT1	= "A primeira lista permite selecionar uma categoria a fim de limitar a procura. A segunda lista permite limitar os detalhes do produto (ex. Nome). Uma vez estas selecionadas (ou deixadas por defeito), introduza a palavras-chave. ";
	var $_PHPSHOP_SEARCH_TEXT2	= " Pode adicionar mais palavras-chave e operadores como AND ou NOT. Selecionando AND significa que ambas as palavras tem de estar presentes para o produto ser apresentado. Selecionando NOT signitica que a primeira palavra tem de estar presente e a segunda n�o poder� existir para o produto ser apresentado.";
	var $_PHPSHOP_ORDERBY		= "Ordenar Por";
		
		/*** Review feature ***/
	
	var $_PHPSHOP_CUSTOMER_RATING		= "M�dia de votos";
	var $_PHPSHOP_TOTAL_VOTES		= "Total de votos";
	var $_PHPSHOP_CAST_VOTE			= "Por favor submeta o seu voto";
	var $_PHPSHOP_RATE_BUTTON		= "votar";
	var $_PHPSHOP_RATE_NOM			= "Vota��o";
	var $_PHPSHOP_REVIEWS			= "Coment�rios de clientes";
	var $_PHPSHOP_NO_REVIEWS		= "N�o existe qualquer coment�rio a este produto.";
	var $_PHPSHOP_WRITE_FIRST_REVIEW	= "Seja o primeiro a fazer um coment�rio...";
	var $_PHPSHOP_REVIEW_LOGIN		= "Por favor fa�a o seu LogIn para escrever um coment�rio.";
	var $_PHPSHOP_REVIEW_ERR_RATE		= "Por Favor Vote o produto para completar o seu coment�rio!";
	var $_PHPSHOP_REVIEW_ERR_COMMENT1	= "Por favor esvreva mais algumas palavras no seu coment�rio. N� min. de letras: 100";
	var $_PHPSHOP_REVIEW_ERR_COMMENT2	= "Por favor reduza o seu coment�tio. N� max. de letras: 2000";
	var $_PHPSHOP_WRITE_REVIEW		= "Fa�a um coment�rio a este produto!";
	var $_PHPSHOP_REVIEW_RATE		= "Primeiro: Vote o produto. Selecione de 0 (pior) a 5 estrelas (melhor).";
	var $_PHPSHOP_REVIEW_COMMENT		= "Agora escreva um (pequeno) coment�rio....(min. 100, max. 2000 letras) ";
	var $_PHPSHOP_REVIEW_COUNT		= "N� de letra escritas: ";
	var $_PHPSHOP_REVIEW_SUBMIT		= "Gravar coment�rio";
	var $_PHPSHOP_REVIEW_ALREADYDONE	= "J� escreveu anteriormente um coment�rio para este produto. Obrigado.";
	var $_PHPSHOP_REVIEW_THANKYOU		= "Obrigado pelo seu coment�rio.";
	var $_PHPSHOP_COMMENT			= "Coment�tio";
	
	var $_PHPSHOP_CREDITCARD_FORM_LBL	= "Adiciona/Edita tipos de Cart�o de cr�dito";
	var $_PHPSHOP_CREDITCARD_NAME		= "Nome do cart�o de cr�dito";
	var $_PHPSHOP_CREDITCARD_CODE		= "Cart�o de cr�dito - Cod. Curto";
	var $_PHPSHOP_CREDITCARD_TYPE		= "Tipo do cart�o de cr�dito";
		
	var $_PHPSHOP_CREDITCARD_LIST_LBL	= "Listagem dos Cart�es de cr�dito";
	var $_PHPSHOP_UDATE_ADDRESS		= "Atualizar endere�o";
	var $_PHPSHOP_CONTINUE_SHOPPING	= "Continuar comprando";
	
	var $_PHPSHOP_THANKYOU_SUCCESS	= "Seu pedido foi encaminhado com sucesso!";
	var $_PHPSHOP_ORDER_LINK		= "Siga este atalho para ver os detalhes do pedido.";
	
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ	= "Situa��o do pedido foi modificada: Seu pedido {order_id}";
	var $_PHPSHOP_ORDER_LIST_NOTIFY			= "Notifica o cliente?";
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR			= "Por favor primeiro modifique a situa��o do pedido!";
		
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1	= "a situa��o do seu pedido de N� {order_id} foi modificado.";
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2	= "A nova situa��o �:";
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3	= "Para ver detalhes do pedido , por favor siga o atalho (ou copie-o para seu navegador):";
		
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT		= "Desconto para o grupo de compradores padr�o (em %)";
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP	= "Uma quantidade X positiva significa: Se o produto n�o tiver pre�o especificado para ESTE grupo de compradores, o pre�o padr�o � decrescido em X %. Um valor negativo tem o efeito oposto";
		
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL			= "Desconto do produto";
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL		= "Lista de descontos dos produtos";
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT		= "Adiciona/Edita descontos de produtos";
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT		= "Valor";
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP		= "Entre com a quantia do desconto";
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE		= "Tipo";
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT		= "Percentual";
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL		= "Total";
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP	= "A quantidade deve ser percentual ou total?";
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE		= "Data de in�cio";
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP	= "Especifica o dia em que o desconto come�a";
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE		= "Data limite";
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP	= "Especifica o dia em que o desconto � suspen�o";
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP	= "Voc� pode usar o formul�rio de desconto do produto para adicionar descontos!";
	
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE		= "Voc� economiza";
	
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE		= "Ver Imagem em tamanho real";
		
	/*********************
	Currency Display Style 
	***********************/
	
	var $_PHPSHOP_CURRENCY_DISPLAY			= "Modo de apresenta��o monet�ria";
	var $_PHPSHOP_CURRENCY_SYMBOL				= "S�mbolo monet�rio";
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP		= "Voc� tamb�m pode usar tags HTML aqui(ex. &amp;euro;,&amp;pound &amp;yen;,...)";
	var $_PHPSHOP_CURRENCY_DECIMALS			= "Decimais";
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP		= "N�mero de decimais mostrados (pode ser 0)<br><b>Faz arredondamentos se os valores t�m diferentes n�meros de decimais</b>";
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL		= "S�mbolo Decimal";
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP	= "Caractere usado para s�mbolo decimal";
	var $_PHPSHOP_CURRENCY_THOUSANDS			= "Separador de milhar";
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP		= "Caractere usado para separar milhar (pode ficar vazio)";
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY		= "Formato positivo";
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP	= "Exibe formato usado para mostrar valores positivos.<br>(Symb stands for currency symbol)";
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY		= "Formato negativo";
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP	= "Exibe formato usado para mostrar valores negativos.<br>(Symb stands for currency symbol)";
		
	var $_PHPSHOP_OTHER_LISTS	= "Outras listas de produtos";
	
	
	/**************
	Multiple Images 
	****************/
	
	var $_PHPSHOP_MORE_IMAGES		= "Ver mais imagems";
	var $_PHPSHOP_AVAILABLE_IMAGES	= "Imagens dispon�veis para";
	var $_PHPSHOP_BACK_TO_DETAILS		= "Retorna para detalhes do produto";
		
		/* FILEMANAGER */
	
	var $_PHPSHOP_FILEMANAGER			= "Gerenciador de arquivos";
	var $_PHPSHOP_FILEMANAGER_LIST		= "Gerenciador de arquivos::Lista de produtos";
	var $_PHPSHOP_FILEMANAGER_ADD			= "Adicionar Imagem/Arquivo";
	var $_PHPSHOP_FILEMANAGER_IMAGES		= "Imagens designadas";
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE	= "Descarreg�vel?";
	var $_PHPSHOP_FILEMANAGER_FILES		= "Arquivos designados (Datasheets,...)";
	var $_PHPSHOP_FILEMANAGER_PUBLISHED		= "Publicado?";
		
		/* FILE LIST */
	
	var $_PHPSHOP_FILES_LIST			= "Gerenciador de arquivos::Lista Imagem/Arquivos para";
	var $_PHPSHOP_FILES_LIST_FILENAME		= "Nome";
	var $_PHPSHOP_FILES_LIST_FILETITLE		= "T�tulo do arquivo";
	var $_PHPSHOP_FILES_LIST_FILETYPE		= "Tipo";
	var $_PHPSHOP_FILES_LIST_EDITFILE		= "Editar entrada do arquivo";
	var $_PHPSHOP_FILES_LIST_FULL_IMG		= "Imagem completa";
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG	= "Imagem Thumbnail";
		
		
		/* FILE FORM */
	
	var $_PHPSHOP_FILES_FORM				= "Carregar arquivo para";
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE		= "Arquivo corrente";
	var $_PHPSHOP_FILES_FORM_FILE				= "Arquivo";
	var $_PHPSHOP_FILES_FORM_IMAGE			= "Imagem";
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO			= "Carregar para";
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH		= "caminho padr�o para as imagens de produtos";
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH		= "Especifique o local do arquivo";
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH	= "Caminho do download (ex. para venda de descarreg�veis!)";
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL		= "Auto-Gerar Thumbnail?";
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED		= "Arquivo publicado?";
	var $_PHPSHOP_FILES_FORM_FILE_TITLE			= "T�tulo do arquivo (o que o cliente l�)";
	var $_PHPSHOP_FILES_FORM_FILE_DESC			= "Descri��o do arquivo";
	var $_PHPSHOP_FILES_FORM_FILE_URL			= "URL do arquivo (opcional)";
		
		/* FILE & IMAGE PROCESSING */
	
	var $_PHPSHOP_FILES_PATH_ERROR		= "Favor entre um caminho v�lido!";
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS	= "A imagem Thumbnail foi criada com sucesso!";
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE	= "N�O foi poss�vel criar a imagem Thumbnail!";
	var $_PHPSHOP_FILES_UPLOAD_FAILURE		= "Erro de carregamento de Arquivo/Imagem";
		
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE	= "N�o foi poss�vel apagar o arquivo de imagem.";
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS	= "Imagem criada com sucesso.";
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE	= "N�o foi poss�vel apagar o arquivo de imagem Thumbnail (talvez n�o exista): ";
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS	= "Imagem Thumbnail apagada com sucesso.";
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE		= "N�o foi poss�vel apagar o arquivo.";
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS		= "Arquivo apagado com sucesso.";
		
	var $_PHPSHOP_FILES_NOT_FOUND		= "Desculpe, mas o arquivo requerido n�o foi achado!";
	var $_PHPSHOP_IMAGE_NOT_FOUND		= "A image n�o foi encontrada!";
	
	
		/*#####################
		MODULE COUPON
		#####################*/
	
	var $_PHPSHOP_COUPON_MOD			= "Cupom";
	var $_PHPSHOP_COUPONS				= "Cupons";
	var $_PHPSHOP_COUPON_LIST			= "Lista de Cupom";
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED	= "O cupom j� foi compensado.";
	var $_PHPSHOP_COUPON_REDEEMED			= "Cupom compensado! Obrigado.";
	var $_PHPSHOP_COUPON_ENTER_HERE		= "Se voc� tem o c�digo do cupom, favor inserir abaixo:";
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON		= "Enviar";
	var $_PHPSHOP_COUPON_CODE_EXISTS		= "Este cupom j� existe. Por favor tente novamente.";
	var $_PHPSHOP_COUPON_EDIT_HEADER		= "Atualizar cupom";
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT		= "Aperte sobre o c�digo do cupom para edit�-lo, ou para apag�-lo, selecione-o e aperte Apagar:";
	var $_PHPSHOP_COUPON_CODE_HEADER		= "C�digo";
	var $_PHPSHOP_COUPON_PERCENT_TOTAL		= "Percentual ou Total";
	var $_PHPSHOP_COUPON_TYPE			= "Tipo de Cupom";
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP		= "Um cupom de presente � apagado ap�s ser usado como desconto ou pedido. Cupom permanente pode ser usado enquanto o cliente desejar.";
	var $_PHPSHOP_COUPON_TYPE_GIFT		= "Cupom presente";
	var $_PHPSHOP_COUPON_TYPE_PERMANENT		= "Cupom permanente";
	var $_PHPSHOP_COUPON_VALUE_HEADER		= "Valor";
	var $_PHPSHOP_COUPON_DELETE_BUTTON		= "Apagar c�digo";
	var $_PHPSHOP_COUPON_CONFIRM_DELETE		= "Tem certeza que quer apagar este c�digo de cupom?";
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS	= "Favor, complete todos os campos.";
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER	= "C�digo do cupom deve ser um n�mero.";
	var $_PHPSHOP_COUPON_NEW_HEADER		= "Novo Cupom";
	var $_PHPSHOP_COUPON_COUPON_HEADER		= "C�digo do Cupom";
	var $_PHPSHOP_COUPON_PERCENT			= "Percentual";
	var $_PHPSHOP_COUPON_TOTAL			= "Total";
	var $_PHPSHOP_COUPON_VALUE			= "Valor";
	var $_PHPSHOP_COUPON_CODE_SAVED		= "C�digo de cupom guardado.";
	var $_PHPSHOP_COUPON_SAVE_BUTTON		= "Guardar Cupom";
	var $_PHPSHOP_COUPON_DISCOUNT			= "Disconto do Cupom";
	var $_PHPSHOP_COUPON_CODE_INVALID		= "C�digo do cupom n�o foi encontrado. Favor tente novamente.";
	var $_PHPSHOP_COUPONS_ENABLE			= "Habilita uso de cupons";
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN	= "Se habilitar o uso de cupons, permite aos clientes preencher o n�mero de um cupom para ganhar discontos em suas compras.";
	
		/* Free Shipping */
	
	var $_PHPSHOP_FREE_SHIPPING				= "Entrega gr�tis";
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT		= "A entrega � gratuita neste pedido!";
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT			= "Valor m�nimo para entrega gratis";
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP	= "O montante (TAXAS INCLUSIVE!) � o m�nimo para entrega gratis (ex: <strong>50</strong> significa Entrega gratis quando o cliente concluir a compra com \$50 (mais taxas) ou mais.";
	var $_PHPSHOP_YOUR_STORE				= "Sua loja";
	var $_PHPSHOP_CONTROL_PANEL				= "Painel de controle";
	
		/* Configuration Additions */
	
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON				= "Bot�o - PDF";
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN		= "Mostra ou esconde o bot�o PDF na loja.";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER		= "Deve-se concordar com Termos de Servi�o em CADA ORDEM?";
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN	= "Marque se voc� quer que seu comprador concorde com seu termo de servi�o em CADA PEDIDO (antes de inici�-lo).";
	
		// We need this for eCheck.net Payments
	
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE				= "Tipo de conta banc�ria";
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING			= "Conferindo";
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING	= "Business Checking";
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS			= "Salvando";
		
	var $_PHPSHOP_PAYMENT_AN_RECURRING			= "Fatura parcelada?";
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP	= "Define se voc� quer faturamento parcelado.";
		
	var $_PHPSHOP_INTERNAL_ERROR			= "Erro interno ao processar a solicita��o";
	var $_PHPSHOP_PAYMENT_ERROR			= "Falhou ao processar o pagamento";
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS	= "Pagamento processado com sucesso";
		
		/* UPS Shipping Module */
	
	var $_PHPSHOP_UPS_RESPONSE_ERROR			= "UPS was not able to process the Shipping Rate Request.";
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS	= "Guaranteed Day(s) To Delivery";
	var $_PHPSHOP_UPS_PICKUP_METHOD			= "M�todo de busca UPS";
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP		= "Como voc� entrega os pacotes a UPS?";
	var $_PHPSHOP_UPS_PACKAGE_TYPE			= "UPS Packaging?";
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP		= "Selecione o tipo padr�o de embalagens.";
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL			= "Entrega residencial?";
	var $_PHPSHOP_UPS_RESIDENTIAL				= "Residencial (RES)";
	var $_PHPSHOP_UPS_COMMERCIAL				= "Entrega Comercial (COM)";
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP		= "Quote for Residential (RES) or Commercial Delivery (COM).";
	var $_PHPSHOP_UPS_HANDLING_FEE			= "Despesa de embalagem";
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP		= "Sua despesa de embalagem para este tipo de envio.";
	var $_PHPSHOP_UPS_TAX_CLASS				= "Classe de taxa��o";
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP			= "Use a seguinte classe de taxa��o para despesas de envio.";
		
	var $_PHPSHOP_ERROR_CODE	= "C�digo do erro";
	var $_PHPSHOP_ERROR_DESC	= "Descri��o do erro";
		
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY	= "Mostrar/Mudar a chave de transa��o";
	var $_PHPSHOP_CHANGE_PASSKEY_FORM		= "Mostrar/Mudar a chave de senha/Transa��o";
	var $_PHPSHOP_TYPE_PASSWORD			= "Por favor digite sua senha";
	var $_PHPSHOP_CURRENT_PASSWORD		= "Senha corrente";
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY	= "Chave de transa��o corrente";
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS	= "A chave de transa��o foi mudada com sucesso.";
		
	var $_PHPSHOP_PAYMENT_CVV2			= "Requisita/Captura c�digos do cart�o de cr�dito (CVV2/CVC2/CID)";
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP		= "Verifica a validade do valor de CVV2/CVC2/CID (n�mero de tr�s ou quadro d�gitos no verso do cart�o de cr�dito, na frente se cart�es American Express)?";
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP		= "Por favor digite o n�mero de tr�s ou quadro d�gitos que esta no verso do seu cart�o de cr�dito (Na frente se Cart�o American Express)";
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR		= "Voc� deve entrar com o c�digo do cart�o de cr�dito para proceguir.";
		
	var $_PHPSHOP_PRODUCT_FORM_FILENAME			= "OU preencha um Nome de arquivo";
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP	= "NOTA: Aqui voc� pode preencher o Nome do arquivo. <strong>Se voc� preencher um Nome de arquivo, nenhum arquivo ser� caregado!!! Voc� ter� que carreg�-lo manualmente via FTP!</strong>.";
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD			= "OU carregue um novo arquivo";
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP	= "Voc� pode carregar um arquivo local. Este arquivo ser� o produto � vender. Uma arquivo existente ser� atualizado.";
		
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1	= "Preencha qualquer texto que ser� mostrado na p�gina do produto. <br />e.g.: 24h, 48 horas, 3 - 5 dias, No pedido.....";
	
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2	= "OU selecione uma imagem a ser mostrada na p�gina de detalhes (pag. do produto).<br />A imagem reside no diret�rio <i>/components/com_phpshop/shop_image/availability</i><br />";
	
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST			= "Lista de atributos";
	
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES	= "<h4>Exemplos do formato de lista de atributos:</h4> 
			<pre>Tamanho,XL[+1.99],M,S[-2.99];Cor,Verm.,Verde,Amarelo,CorExpressiva[=24.00];E Por Ai Vai,..,..</pre>
			<h4>Ajuste de pre�os Inline para usar com as modifica��es de atributos avan�adas:</h4>
			<pre>
			&#43; == Adicione este valor ao pre�o configurado.<br />
			&#45; == Subtraia este valor do pre�o configurado.<br />
			&#61; == Defina o pre�o do produto para este valor.
			</pre>";
	
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST		= "Lista de atributos personalizavel";
	
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES	= "<h4>Exemplos para o formato de lista de atributos personalizavel:</h4> <span class=\"sectionname\"> <strong>Nome;Extras;</strong>...</span>";
			
	var $_PHPSHOP_MULTISELECT					= "Para escolha m�ltipla pressione <i>Control</i> e com o mouse escolha as categorias respectivas";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN				= "Habilita pagamento com eProcessingNetwork.com?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN		= "Marque para usar eProcessingNetwork.com com o phpShop.";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE		= "Modo de testes ?";
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN	= "Selecione 'Sim' enquanto testa. Selecione 'N�o' para habilitar transa��es reais.";
	
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME			= "eProcessingNetwork.com Login ID";
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN		= "Este � sua ID de identifica��o junto ao eProcessingNetwork.com.";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY				= "Chave de transa��o do eProcessingNetwork.com";
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN			= "Esta � sua chave de transa��o junto ao eProcessingNetwork.com.";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE		= "Tipo de autentica��o";
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN	= "Este � o tipo de autentica��o junto ao eProcessingNetwork.com.";

    var $_PHPSHOP_RELATED_PRODUCTS			= "Produtos relacionados";
    var $_PHPSHOP_RELATED_PRODUCTS_TIP		= "Voc� pode criar rela��o entre pordutos atravez desta lista. Apenas selecione aqui um ou mais produtos e estes se torna��o <strong>Produtos Relacionados</strong>.";
    
    var $_PHPSHOP_RELATED_PRODUCTS_HEADING	= "Voc� tamb�m pode estar interessado neste(s) produto(s)";
    
    var $_PHPSHOP_IMAGE_ACTION	= "Image Action";
    var $_PHPSHOP_NONE			= "nenhum";
    
    var $_PHPSHOP_ORDER_HISTORY = "Order History";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT = "Comment";
    var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = "Comments on your Order";
    var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = "Include this comment?";
    var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = "Date Added";
    var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = "Customer Notified?";
    var $_PHPSHOP_ORDER_STATUS_CHANGE = "Order Status Change";
	
    /** Changed Product Type - Begin*/
    /*** Product Type ***/
    var $_PHPSHOP_PARAMETERS_LBL = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_LBL = "Product Type";
    var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = "Product Type List";
    var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = "Add/Edit Product Type";
    // Product - Product Product Type list
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = "Product Type List for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = "List Product Types";
    // Product - Product Product Type form
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = "Add Product Type for";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = "Add Product Type";
    var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = "Product Type";
    // Product - Product Type form
    var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = "Product Type Name";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = "Product Type Description";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = "Parameters";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = "Product Type Information";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = "Publish?";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = "Product Type Browse Page";
    var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = "Product Type Flypage";
    // Product - Product Type Parameter list
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = "Parameters of Product Type";
    // Product - Product Type Parameter form
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = "Parameter Information";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = "Product Type not found!";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = "Parameter Name";
    VAR $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = "This name will be column name of table. Must be unicate and without space.<BR>For example: main_material";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = "Parameter Label";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = "Parameter Description";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = "Parameter Type";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = "Integer";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = "Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = "Short Text";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = "Float";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = "Char";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = "Date & Time";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = "Date";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = "YYYY-MM-DD";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = "Time";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = "HH:MM:SS";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = "Break Line";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = "Multiple Values";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = "Possible Values";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = "Show Possible Values as Multiple select?";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = "<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><BR><span class=\"sectionname\">Steel;Wood;Plastic;...</span>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = "Default Value";
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = "For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>";
    var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = "Unit";
    
	/************************* FrontEnd ***************************/
	/** shop.parameter_search.php */
	var $_PHPSHOP_PARAMETER_SEARCH = "Advanced Search according to Parameters";
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = "Parameters Search";
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = "Do you will find products according to technical parametrs?<BR>You can used any prepared form:";
// 	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "There's no result matching your query.";
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = "I am sorry. There is no category for search.";
	/** shop.parameter_search_form.php */
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = "I am sorry. There is no published Product Type with this name.";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = "Is Like";
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = "Is NOT Like";
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = "Full-Text Search";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = "All Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = "Any Selected";
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = "Reset Form";	
	/** shop.browse.php */
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = "Search in Category";
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = "Change Parameters";
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = "Descending order";
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = "Ascending order";
	/** shop.product.detail */
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = "Parameters of Category";
	/** Changed Product Type - End*/
	
    // State form and list
    var $_PHPSHOP_STATE_LIST_MNU = "List State";
    var $_PHPSHOP_STATE_LIST_LBL = "State List for: ";
    var $_PHPSHOP_STATE_LIST_ADD = "Add/Update a State";
    var $_PHPSHOP_STATE_LIST_NAME = "State Name";
    var $_PHPSHOP_STATE_LIST_3_CODE = "State Code (3)";
    var $_PHPSHOP_STATE_LIST_2_CODE = "State Code (2)";
    
    // Opposite of Discount!
    var $_PHPSHOP_FEE = "Fee";
    
    var $_PHPSHOP_PRODUCT_CLONE = "Clone Product";
	
    var $_PHPSHOP_CSV_SETTINGS = "Settings";
    var $_PHPSHOP_CSV_DELIMITER = "Delimiter";
    var $_PHPSHOP_CSV_ENCLOSURE = "Field Enclosure Char";
    var $_PHPSHOP_CSV_UPLOAD_FILE = "Upload a CSV File";
    var $_PHPSHOP_CSV_SUBMIT_FILE = "Submit CSV File";
    var $_PHPSHOP_CSV_FROM_DIRECTORY = "Load from directory";
    var $_PHPSHOP_CSV_FROM_SERVER = "Load CSV File from Server";
    var $_PHPSHOP_CSV_EXPORT_TO_FILE = "Export to CSV File";
    var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = "Choose Field Ordering Type";
    var $_PHPSHOP_CSV_DEFAULT_ORDERING = "Default Ordering";
    var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = "My customized Ordering";
    var $_PHPSHOP_CSV_SUBMIT_EXPORT = "Export all Products to CSV File";
    var $_PHPSHOP_CSV_CONFIGURATION_HEADER = "CSV Import / Export Configuration";
    var $_PHPSHOP_CSV_SAVE_CHANGES = "Save Changes";
    var $_PHPSHOP_CSV_FIELD_NAME = "Field Name";
    var $_PHPSHOP_CSV_DEFAULT_VALUE = "default Value";
    var $_PHPSHOP_CSV_FIELD_ORDERING = "Field Ordering";
    var $_PHPSHOP_CSV_FIELD_REQUIRED = "Field Required?";
    var $_PHPSHOP_CSV_IMPORT_EXPORT = "Import/Export";
    var $_PHPSHOP_CSV_NEW_FIELD = "Add a new Field";
    var $_PHPSHOP_CSV_DOCUMENTATION = "Documentation";
    
    var $_PHPSHOP_PRODUCT_NOT_FOUND = "Sorry, but the Product you've requested wasn't found!";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = "Show Products that are out of Stock";
    var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = "When enabled, Products that are currently not in Stock are displayed. Otherwise such Products are hidden.";
	
}
/** @global phpShopLanguage $PHPSHOP_LANG */
$PHPSHOP_LANG =& new phpShopLanguage();
?>
