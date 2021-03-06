<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
* @version: swedish.php 10:49 2009-07-22
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translators Stefan Gagner, Mei Ya E-service, http://www.mei-ya.se and Mia Steen, First Solution, http://www.1solution.se
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices och details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'UTF-8',
	'PHPSHOP_MODULE_LIST_ORDER' => 'Sortering',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Varulager',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'Antal',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Vikt',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Aktivera',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Sök produkt',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'ändrad',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'med ändrat pris',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'utan pris',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Efter',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Före',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Visa aktuell produktsida i butiken',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Ny produkt',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Produktinformation',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Produktstatus',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Storlek o Vikt',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Produktbilder',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Uppdatera artikel',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Artikelinformation',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Artikelstatus',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Storlek o Vikt',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Artikelbilder',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'För att uppdatera aktuell bild, ange sökväg till ny bild.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Ta bort aktuell bild.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Produktartiklar',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Artikelattribut',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Vill du verkligen ta bort denna produkt och de artiklar relaterade till den?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Vill du verkligen ta bort denna artikel?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Tillverkare',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'Artnr',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Namn',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Kategori',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Tillgänglig från',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Kampanj',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Rabattyp',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Aktivera?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Längd',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Bredd',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Höjd/Tjocklek',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Dimensionsenhet',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Måttenhet',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Bild',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'Kg',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'mm',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Enhet per förpackning',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Här kan du ange hur många enheter som finns i en förpackning. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Enhet per Kartong',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Här kan du ange antal förpackningsenheter som finns i en kartong. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Resultat av Ny Produkt',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Produktens uppdateringsresultat',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Resultat av Ny Artikel',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Artikelns uppdateringsresultat',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Kategoriinformation',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Kategorinamn',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Överordnad',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Kategoribeskrivning',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Publicera?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Kategorisida',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Attributlista för',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Attributnamn',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Sortering',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Attributdata',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Nytt attribut för produkt',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Uppdatera attribut för produkt',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Nytt attribut för artikel',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Uppdatera attribut för artikel',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Attributnamn',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Sortering',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Pris för',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Gruppnamn',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Pris',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Valuta',
	'PHPSHOP_PRICE_FORM_LBL' => 'Prisinformation',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Nytt Pris för produkt',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Uppdatera Pris för produkt',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Nytt Pris för Artikel',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Uppdatera Pris för artikel',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Pris',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Valuta',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Kundgrupp',
	'PHPSHOP_LEAVE_BLANK' => '(lämna TOMT om du inte har <br />en egen php-fil för den!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Artikel',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Startdatum för rabatt',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Anger vilken dag rabatten träder i kraft',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Slutdatum för rabatt',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Anger vilken dag rabatten upphör',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Publicerad?',
	'PHPSHOP_FILES_LIST' => 'Filhanterare::Bild/Fillista för',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Filnamn',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Filrubrik',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Filtyp',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Full bild',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Minibild',
	'PHPSHOP_FILES_FORM' => 'Ladda upp Fil till',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Aktuell fil',
	'PHPSHOP_FILES_FORM_FILE' => 'extra fil',
	'PHPSHOP_FILES_FORM_IMAGE' => 'extra bild',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Ladda upp till',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'standardsökväg till bild',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Ange filens plats',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Nedladdningssökväg (ex. för nedladdningsbara produkter!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Ska minibild skapas automatiskt?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Filen är publicerad?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Filrubrik (som kunden ser)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'Fil-URL (valfri)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Fyll i en text som kunden ser på produktsidan.<br />ex.: 24tim, 48 timmar, 3 - 5 dagar, Omgående.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'ELLER välj en bild att vissas på detaljsidan (flypage).<br />Bilderna finns i mappen <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Exempel på format för anpassade attribut:</h4><pre>Namn;Extra;</strong>...</pre>',
	'PHPSHOP_IMAGE_ACTION' => 'Bildaktivitet',
	'PHPSHOP_PARAMETERS_LBL' => 'Parametrar',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Produkttyp',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Produkttyplista för',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Ny produkttyp för',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Produkttyp',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Produkttypnamn',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Produkttypbeskrivning',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Parametrar',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Produkttypinformation',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Publicera?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Produkttypens sida',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Produkttypens visningssida',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Parametrar för produkttyp',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Parameterinformation',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Produkttypen ej funnen!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Parameternamn',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Detta namn blir också tabellens kolumnnamn. Inga udda tecken eller mellanslag.<br/>Till exempel: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parameteretikett',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Integer',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Kort Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Flyttal',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Char',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Datum & Tid',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Datum',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Tid',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Radbrytning',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Multipla värden',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Möjliga värden',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Visa möjliga värden som multipla val?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Om möjliga värden är satta, kan parametrar endast ha dessa värden. Exempel för möjliga värden:</strong><br/><span class="sectionname">Stål;Trä;Plast;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Standardvärde',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'För Parametrars standardvärden använd formatet:<ul><li>Datum: YYYY-MM-DD</li><li>Tid: HH:MM:SS</li><li>Datum & Tid: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Enhet',
	'PHPSHOP_PRODUCT_CLONE' => 'Kopiera produkt',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Göm produkter som är slut på lager',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Kampanj & Rabatterade Produkter',
	'PHPSHOP_FEATURED' => 'Kampanj',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'Kampanj och Rabatterade',
	'PHPSHOP_SHOW_DISCOUNTED' => 'Rabatterade produkter',
	'PHPSHOP_FILTER' => 'Filter',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Rabatterat pris',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Här kan du åsidosätta rabatter genom att fylla i ett särskilt rabattpris för denna produkt.<br/>Butiken skapar en ny rabattpost för den rabatterade produkten.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Antal Start',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Antal Slut',
	'VM_PRODUCTS_MOVE_LBL' => 'Flytta produkter från en Kategori till en annan',
	'VM_PRODUCTS_MOVE_LIST' => 'Du har valt att flytta följande %s produkter',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Flytta till Kategorin',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Välj en produktkategori för omsortering av produkter i kategorin',
	'VM_REVIEW_FORM_LBL' => 'Ny recension',
	'PHPSHOP_REVIEW_EDIT' => 'Ny/Ändra en recension',
	'SEL_CATEGORY' => 'Välj en kategori',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Minimal inköpskvantitet',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Maximal inköpskvantitet',
	'VM_DISPLAY_TABLE_HEADER' => 'Visa tabellhuvud',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Länka till Underordnade produkt från lista',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Inkludera produkttyp med Underordnade',
	'VM_DISPLAY_USE_LIST_BOX' => 'Använd Listruta för Underordnade produkter',
	'VM_DISPLAY_LIST_STYLE' => 'ListStil',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Använd överordnade inställningar:',
	'VM_DISPLAY_LIST_TYPE' => 'Lista:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Antal:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Värden i rullgardinsmeny',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Visa Underordnade beskrivning',
	'VM_DISPLAY_DESC_WIDTH' => 'Bredd på Underordnade beskrivning',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Bredd på Underordnade attribut',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Underordnade Klass-Suffix',
	'VM_INCLUDED_PRODUCT_ID' => 'Produkt-ID att inkludera',
	'VM_EXTRA_PRODUCT_ID' => 'Extra ID',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Använd Radioknappar',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Visningsval',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Åsidosätt underordnade produkters värden och använd Överordnade',
	'PHPSHOP_DISPLAY_NORMAL' => 'Standard Kvantitetsruta',
	'PHPSHOP_DISPLAY_HIDE' => 'Göm Kvantitetsruta',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Använd Rullgardinsmeny',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Använd kryssruta',
	'PHPSHOP_DISPLAY_ONE' => 'En knapp för Lägg i varukorg',
	'PHPSHOP_DISPLAY_MANY' => 'Knapp för Lägg i varukorg för varje Underordnade',
	'PHPSHOP_DISPLAY_START' => 'Startvärde',
	'PHPSHOP_DISPLAY_END' => 'Slutvärde',
	'PHPSHOP_DISPLAY_STEP' => 'Stegvärde',
	'PRODUCT_WAITING_LIST_TAB' => 'Väntelista',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Kunder väntar på att få meddelande när denna produkt åter är på lager',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Meddela dessa kunder nu (när du har uppdaterat antalet produkter på lager)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'meddelat',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Välj bild',
	'VM_PRODUCT_RELATED_SEARCH' => 'Sök efter produkter eller Kategorier här:',
	'VM_FILES_LIST_ROLE' => 'Roll',
	'VM_FILES_LIST_UP' => 'Upp',
	'VM_FILES_LIST_GO_UP' => 'Gå Upp',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Visa x produkter per rad',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Kategorins Visningssida',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Kopiera Produktinställningar',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Kopiera dessa Underordnade artiklar',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Namn/Datum',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Välj en eller fler produkter',
	'VM_PRODUCT_SEARCHING' => 'Söker...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Exempel på format för Attributlista:</h4>
Rubrik = Färg, Värde = Röd ; Klicka på Nytt värde för att lägga till ny färg: Grön ; Klicka sedan på Nytt attribut för att lägga till ett nytt attribut, och så vidare.
<h4>Integrerad prisjustering genom avancerade Attribut:</h4>
Pris = +10 för att addera detta värde till inställt pris.<br />  Pris = -10 för att subtrahera värdet från det inställda priset.<br />  Pris = 10 för att sätta produktpriset till detta värde.',
	'VM_FILES_FORM_PRODUCT_IMAGE' => 'Produktbild',
	'VM_FILES_FORM_DOWNLOADABLE' => 'Nedladdningsbar produktfil',
	'VM_FILES_FORM_RESIZE_IMAGE' => 'Omskalad Stor bildfil?'
); $VM_LANG->initModule( 'product', $langvars );
?>