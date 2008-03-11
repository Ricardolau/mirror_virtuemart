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
	'PHPSHOP_MODULE_LIST_ORDER' => 'Encomendar',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Invent�rio de Produtos',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'N�mero',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Peso',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Publicar',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Search Product',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'modyfied',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'with price modyfied',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'without price',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'After',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Before',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Ver flyer de Produtos nesta loja',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Novo Produto',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Informa��o do Produto',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Estado',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Dimens�es e Peso',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Imagens',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Actualizar Artigo',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Informa��o',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Estado',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Dimens�es e Peso',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Imagens',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Para actualizar a imagem actual, v� ao directorio e insira a nova imagem.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Escreva ',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Artigos',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Qualidades',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Tem a certeza que quer apagar este produto\ne e todos os artigos relacionados com ele?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Tem a certeza que quer apagar este Artigo?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Fabricante',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'SKU',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Nome',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Categoria',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Data de disponibilidade',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Em especial',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Tipo de Desconto',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Publicar?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Tamanho',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Largura',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Altura',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Unidade de Medida',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Unidade de Medida',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Imagem Completa',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'pounds',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'inches',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Units in Packaging',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Here you can fill in a number unit in packaging. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Units in Box',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Here you can fill in a number unit in box. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Resultados de Adicionar Produto',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Resultados de Actualizar Produto',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Resultados de Adicionar Art�culo',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Resultados de Actualizar Art�culo',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Informa��o',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Nome',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Parente',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Descri��o da Categoria',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Publicar?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Flypage da Categoria',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Listar Atributos por',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Nome Atributos',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Listar Encomenda',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Formulario Atributos',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Novo Atributo de Produto',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Actualizar Atributos de Produto',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Novo Atributo de Produto',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Actualizar Atributos de Produto',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Nome Atributo',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Listar Encomendas',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Pre�os por',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Grupo',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Pre�o',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Moeda',
	'PHPSHOP_PRICE_FORM_LBL' => 'Informa��o',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Novo Pre�o de Produto',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Actualizar Pre�o de Produto',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Novo Pre�o de Produto',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Actualizar Pre�o de Produto',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Pre�o',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Moeda',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Grupo de Cliente',
	'PHPSHOP_LEAVE_BLANK' => '(deixar em BRANCO se n�o tiver<br />nenhum arquivo php individual)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Item',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Startdate of discount',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Specifies the day when the discount begins',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'End date of discount',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Specifies the day when the discount ends',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Published?',
	'PHPSHOP_FILES_LIST' => 'FileManager::Image/File List for',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Filename',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'File Title',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'File Type',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Full Image',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Thumbnail Image',
	'PHPSHOP_FILES_FORM' => 'Upload a File for',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Current File',
	'PHPSHOP_FILES_FORM_FILE' => 'File',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Image',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Upload to',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'default Product Image Path',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Specify the file location',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Download Path (e.g. for selling downloadables!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Auto-Create Thumbnail?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'File is published?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'File Title (what the Customer sees)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'File URL (optional)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Examples for the Custom attribute List Format:</h4>
        <span class="sectionname"><strong>Name;Extras;</strong>...</span>',
	'PHPSHOP_IMAGE_ACTION' => 'Image Action',
	'PHPSHOP_PARAMETERS_LBL' => 'Parameters',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Product Type',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Product Type List for',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Add Product Type for',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Product Type',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Product Type Name',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Product Type Description',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Parameters',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Product Type Information',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Publish?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Product Type Browse Page',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Product Type Flypage',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Parameters of Product Type',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Parameter Information',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Product Type not found!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Parameter Name',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'This name will be column name of table. Must be unicate and without space.<br/>For example: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parameter Label',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Integer',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Short Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Float',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Char',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Date & Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Date',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Break Line',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Multiple Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Possible Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Show Possible Values as Multiple select?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>If Possible Values are set, Parameter can have only this values. Example for Possible Values:</strong><br/><span class="sectionname">Steel;Wood;Plastic;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Default Value',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'For Parameter Default Value use this format:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Unit',
	'PHPSHOP_PRODUCT_CLONE' => 'Clone Product',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Hide out of stock products',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Featured & Discounted Products',
	'PHPSHOP_FEATURED' => 'Featured',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'featured AND discounted',
	'PHPSHOP_SHOW_DISCOUNTED' => 'discounted products',
	'PHPSHOP_FILTER' => 'Filter',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Discounted Price',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Here you can override the discount setting fill in a special discount price for this product.<br/>
The Shop will create a new discount record from the discounted price.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Quantity Start',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Quantity End',
	'VM_PRODUCTS_MOVE_LBL' => 'Move products from one category to another',
	'VM_PRODUCTS_MOVE_LIST' => 'You have chosen to move the following %s products',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Move to the following category',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Select a product category to reorder products in a category',
	'VM_REVIEW_FORM_LBL' => 'Add Review',
	'PHPSHOP_REVIEW_EDIT' => 'Add/Edit a Review',
	'SEL_CATEGORY' => 'Select a category',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Minimum Purchase Quantity',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Maximum Purchase Quantity',
	'VM_DISPLAY_TABLE_HEADER' => 'Display Table Header',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Link to child product from list',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Include Product Type With Child',
	'VM_DISPLAY_USE_LIST_BOX' => 'Use List box for child products',
	'VM_DISPLAY_LIST_STYLE' => 'List Style',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Use Parent Settings:',
	'VM_DISPLAY_LIST_TYPE' => 'List:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Quantity:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Drop Down Box Values',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Display Child Description',
	'VM_DISPLAY_DESC_WIDTH' => 'Child Description Width',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Child Attribute Width',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Child Class Suffix',
	'VM_INCLUDED_PRODUCT_ID' => 'Product IDs to include',
	'VM_EXTRA_PRODUCT_ID' => 'Extra IDs',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Use Radio Box',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Display Options',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Override Child products Display Values and use parents',
	'PHPSHOP_DISPLAY_NORMAL' => 'Standard Quantity Box',
	'PHPSHOP_DISPLAY_HIDE' => 'Hide Quantity Box',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Use Dropdown Box',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Use Check Box',
	'PHPSHOP_DISPLAY_ONE' => 'One Add to Cart Button',
	'PHPSHOP_DISPLAY_MANY' => 'Add to Cart Button for each Child',
	'PHPSHOP_DISPLAY_START' => 'Start Value',
	'PHPSHOP_DISPLAY_END' => 'End Value',
	'PHPSHOP_DISPLAY_STEP' => 'Step Value',
	'PRODUCT_WAITING_LIST_TAB' => 'Waiting List',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Users waiting to be notified when this product is back in stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Notify these users now (when you have updated the number of products stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'notified',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Select Image',
	'VM_PRODUCT_RELATED_SEARCH' => 'Search for Products or Categories here:',
	'VM_FILES_LIST_ROLE' => 'Role',
	'VM_FILES_LIST_UP' => 'Up',
	'VM_FILES_LIST_GO_UP' => 'Go Up',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Show x products per row',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Category Browse Page',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Clone Product Otions',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Also clone these Child Items',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Name/Date',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Select one or more Products',
	'VM_PRODUCT_SEARCHING' => 'Searching...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Examples for the Attribute List Format:</h4>
Title = Color, Property = Red ; Click on New Property to add a new color: Green ; Then click on New attribute to add a new attribute, and so on.
<h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
Price = +10 to add this amount to the configured price.<br />  Price = -10 to subtract this amount from the configured price.<br />  Price = 10 to set the product\'s price to this amount.'
); $VM_LANG->initModule( 'product', $langvars );
?>