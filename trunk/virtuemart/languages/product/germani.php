<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @version : germani.php 1071 2007-12-03 08:42:28Z thepisu $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 soeren - All rights reserved.
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
$VM_LANG->initModule('product',array (
	'CHARSET' => 'ISO-8859-1',
	'PHPSHOP_MODULE_LIST_ORDER' => 'Reihenfolge',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Produktinventar',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'Anzahl',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Gewicht',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Ver�ffentlicht',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Produkt suchen',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'ge�ndert',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'mit Preis ge�ndert',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'ohne Preis',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Nach',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Vor',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Produkt-Detailseite im shop zeigen',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Neues Produkt',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Produktinformation',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Produktstatus',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Produktdimensionen und -gewicht',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Produktbilder',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Artikel aktualisieren',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Artikelinformation',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Artikelstatus',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Artikel Dimensionen und Gewicht',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Artikelbilder',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Um das aktuelle Bild zu aktualisieren, bitte Pfad zum neuen Bild angeben.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Das aktuelle Bild l�schen.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Produkt-Artikel',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Artikelattribute',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Soll dieses Produkt\\\\nund die damit verbundenen Artikel wirklich gel�scht werden?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Soll dieser Artikel wirklich gel�scht werden?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Hersteller',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'Artikelnummer',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Name',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Kategorie',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Verf�gbarkeitsdatum',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Aktionsprodukt?',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Discounttyp',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Ver�ffentlichen?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'L�nge',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Breite',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'H�he',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Ma�einheit',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Ma�einheit',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Gro�es Bild',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'Kilogramm',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'Meter',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Einheiten pro Verpackung',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Anzahl der Einzeleinheiten pro Verpackung. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Einheiten pro Paket',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Anzahl der Einheiten pro Paket. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Resultate: Produkt hinzuf�gen',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Resultate: Produkt aktualisieren',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Resultate: neuer Artikel',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Resultate: Artikel aktualisieren',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Kategorie Information',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Kategoriename',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Elternprodukt',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Kategoriebeschreibung',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Ver�ffentlichen?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Kategorie-�bersichtsseite',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Attributliste f�r',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Attributname',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Reihenfolge',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Attributformular',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Neues Attribut f�r Produkt',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Attribut f�r Produkt aktualisieren',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Neues Attribut f�r Artikel',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Attribute f�r Artikel aktualisieren',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Attributname',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Reihenfolge',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Preis f�r',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Gruppenname',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Preis',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'W�hrung',
	'PHPSHOP_PRICE_FORM_LBL' => 'Preisinformation',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Preis f�r Produkt hinzuf�gen',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Preis f�r Produkt aktualisieren',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Neuen Preis f�r Artikel',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Preis f�r Artikel aktualisieren',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Preis',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'W�hrung',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Kundengruppe',
	'PHPSHOP_LEAVE_BLANK' => '(Bitte nichts eintragen, bevor<br />keine abweichende Detail-php-seite erstellt wurde!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Artikel',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Anfangsdatum des Rabattes',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Bestimmt den Tag, ab dem der Rabatt g�ltig ist.',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Enddatum des Rabattes',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Bestimmt den Tag, bis zu dem der Rabatt g�ltig ist.',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Ver�ffentlicht?',
	'PHPSHOP_FILES_LIST' => 'Datei-Manager::Bild-/Dateiliste f�r',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Dateiname',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Datei - Titel',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Dateityp',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Vollbild',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'kleines Bild',
	'PHPSHOP_FILES_FORM' => 'Datei hinzuf�gen/aktualisieren f�r',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Derzeitige Datei',
	'PHPSHOP_FILES_FORM_FILE' => 'Datei',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Bild',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Speichern in...',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'Standard-Produktbildpfad',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Pfad angeben',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Download Verzeichnis (z.B. f�r Downloadbare G�ter)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Automatisch kleines Bild erzeugen?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Datei ver�ffntlicht?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Datei-Titel (Anzeige f�r den Kunden)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'Datei - URL (optional)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Gib hier Text ein, der dem Kunden zur Verf�gbarkeit der Produktes angezeit wird.<br />z.B.: 24h, 48 Stunden, 3 - 5 Tage, auf Anfrage.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'Order w�hle ein Bild, um die Verf�gbarkeit visuell darzustellen.<br />Die Bilder hier sind eine automatische Auflistung aller vorhandenen Bilder im Verzeichnis <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Beispiel f�r das Attributslisten-Format:</h4>
        <pre>Gr��e,XL[+1.99],M,S[-2.99];Farbe,Rot,Gr�n,Gelb,TeureFarbe[=24.00];WeiteresAttribut,..,..</pre>
        <h4>Preisanpassungen/-abweichungen sind m�glich:</h4>
        <span class="sectionname">
        <strong>+</strong> bedeutet: Den angegebenen Betrag zum Preis hinzuf�gen.<br />
        <strong>-</strong> bedeutet: Den angegebenen Betrag zum Preis abzuziehen.<br />
        <strong>=</strong> bedeutet: Ersetze den Preis mit dem angegebenen Betrag.
      </span>',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Beispiel f�r die Individual-Attributsliste:</h4>
        <pre>Name;Spruch;Extras;...</pre>',
	'PHPSHOP_IMAGE_ACTION' => 'Bild �ndern?',
	'PHPSHOP_PARAMETERS_LBL' => 'Parameter',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Produkttyp',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Produkttyp-Liste f�r',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Produkttyp hinzuf�gen f�r',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Produkttyp',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Produkttyp - Name',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Produkttyp - Beschreibung',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Parameter',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Produkttyp - Information',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Ver�ffentlicht?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Produkttyp - �bersichtsseite',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Produkttyp - Detailseite',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Parameter dieses Produkttyps',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Parameter Information',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Produkttyp nicht gefunden!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Parametername',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Dies wird der Name der neu anzulegenden Tabelle in der Datenbank sein. Must also einmalig und ohne Leerzeichen sein.<br/>Beispiel: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parameterlabel',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'ganze Zahl',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Kurztext',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Flie�kommazahl',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Buchstaben',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Datum & Zeit',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Datum',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Zeit',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Break Line',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'mehrere Werte',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'm�gliche Werte',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'die m�glichen Werte als Mehrfachauswahl anzeigen?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Wenn m�gliche Werte eingetragen sind, k�nnen die Parameter nur diese Werte haben. Beispiel f�r m�gliche Werte:</strong><br/><span class="sectionname">Stahl;Holz;Plastik;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Standard-Wert',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'Beispiel f�r den Parameter Standard-Wert:<ul><li>Datum: YYYY-MM-DD</li><li>Zeit: HH:MM:SS</li><li>Datum & Zeit: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Einheit',
	'PHPSHOP_PRODUCT_CLONE' => 'Produkt klonen',
	'PHPSHOP_CSV_SETTINGS' => 'Einstellungen',
	'PHPSHOP_CSV_DELIMITER' => 'Trennzeichen',
	'PHPSHOP_CSV_ENCLOSURE' => 'Feldbegrenzer',
	'PHPSHOP_CSV_UPLOAD_FILE' => 'Eine CSV Datei hochladen',
	'PHPSHOP_CSV_SUBMIT_FILE' => 'CSV Datei absenden',
	'PHPSHOP_CSV_FROM_DIRECTORY' => 'aus Verzeichnis laden',
	'PHPSHOP_CSV_FROM_SERVER' => 'CSV Datei vom Server laden',
	'PHPSHOP_CSV_EXPORT_TO_FILE' => 'CSV-Datei Export',
	'PHPSHOP_CSV_SELECT_FIELD_ORDERING' => 'Feld-Reihenfolge ausw�hlen:',
	'PHPSHOP_CSV_DEFAULT_ORDERING' => 'Standard-Reihenfolge',
	'PHPSHOP_CSV_CUSTOMIZED_ORDERING' => 'eigene, angepasste Reihenfolge',
	'PHPSHOP_CSV_SUBMIT_EXPORT' => 'Alle Produkte in eine CSV-Datei exportieren',
	'PHPSHOP_CSV_CONFIGURATION_HEADER' => 'CSV Import / Export Konfiguration',
	'PHPSHOP_CSV_SAVE_CHANGES' => '�nderungen speichern',
	'PHPSHOP_CSV_FIELD_NAME' => 'Feldname',
	'PHPSHOP_CSV_DEFAULT_VALUE' => 'Standardwert',
	'PHPSHOP_CSV_FIELD_ORDERING' => 'Reihenfolge',
	'PHPSHOP_CSV_FIELD_REQUIRED' => 'Pflichtfeld?',
	'PHPSHOP_CSV_IMPORT_EXPORT' => 'Import/Export',
	'PHPSHOP_CSV_NEW_FIELD' => 'Ein neues Feld anf�gen',
	'PHPSHOP_CSV_DOCUMENTATION' => 'Dokumentation',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'vergriffene Produkte verstecken',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Aktionsprodukte & Rabattierte Produkte',
	'PHPSHOP_FEATURED' => 'Aktionsprodukte',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'Aktionsprodukte UND rabattierte Produkte',
	'PHPSHOP_SHOW_DISCOUNTED' => 'Rabattierte Produkte',
	'PHPSHOP_FILTER' => 'Filter',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'rabattierter Preis',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Hier kann ein rabattierter Endpreis angegeben werden. Es wird beim Speichern aus dem Rabattpreis automatisch ein Rabatt erzeugt und diesem Produkt zugewiesen.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Startanzahl',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Endanzahl',
	'VM_PRODUCTS_MOVE_LBL' => 'Move products from one category to another',
	'VM_PRODUCTS_MOVE_LIST' => 'You have chosen to move the following %s products',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Move to the following category',
	'VM_CSV_UPLOAD_SIMULATION_RESULTS_LBL' => 'CSV Upload Simulation Results',
	'VM_CSV_UPLOAD_IMPORTNOW' => 'Import Now!',
	'VM_CSV_UPLOAD_START_AT' => 'Start reading from line',
	'VM_CSV_UPLOAD_LINES_TO_PROCESS' => 'No. of lines to import',
	'VM_CSV_UPLOAD_NO_ERRORS' => 'No errors found during CSV import simulation.',
	'VM_CSV_UPLOAD_TOTAL_LINES' => 'Total lines found',
	'VM_CSV_UPLOAD_FIRST_LINE' => 'First line read',
	'VM_CSV_UPLOAD_FIELD_EXPLANATION' => 'Field Ordering used => Values found',
	'VM_PRODUCT_IMPORT_LOG' => 'Product Import Log',
	'VM_CSV_UPLOAD_DETAILS_ANALYSIS' => 'CSV Upload Details / Analysis',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Select a product category to reorder products in a category',
	'VM_REVIEW_FORM_LBL' => 'Add Review',
	'PHPSHOP_REVIEW_EDIT' => 'Add/Edit a Review',
	'SEL_CATEGORY' => 'Select a category',
	'PHPSHOP_CSV_SKIP_FIRST_LINE' => 'Skip first line',
	'PHPSHOP_CSV_SKIP_DEFAULT_VALUE' => 'Skip default value',
	'PHPSHOP_CSV_OVERWRITE_EXISTING_DATA' => 'Overwrite existing data',
	'PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS' => 'Include column headers',
	'PHPSHOP_CSV_UPLOAD_SETTINGS' => 'Upload Settings',
	'PHPSHOP_CSV_AVAILABLE_FIELDS_USE' => 'The following fields are available for your use to import or export.',
	'PHPSHOP_CSV_MINIMAL_FIELDS' => 'The minimal required fields are product_sku, product_name and category_path. Except for the product_sku, the other two fields are not unique.',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU' => 'The unique identifier for a product.<br /.>Values:<ul><li>Number</li><li>Letters</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME' => 'The name of the product.Values:<ul><li>Text: No HTML code allowed.</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE' => 'The product_delete field is a special field. This field is used to determine if a product should be deleted or not.<br />Usage:<ol><li>Add the the name "product_delete" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the value Y. If the field contains any other value, the product will not be deleted.</li></ol><br /.>Values:<ul><li>Y: Yes, the product is to be deleted</li><li>N: No, the product is not to be deleted</li><li>Empty: Empty value, the product is not to be deleted</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC' => 'Long description for the product.<br />Values:<ul><li>Text: HTML code allowed.</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC' => 'Short description for the product.<br />Values:<ul><li>Text: No HTML code allowed.</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH' => 'The status if a product is published or not.<br />Values:<ul><li>Y: Yes, the product is published</li><li>N: No, the product is not published</li><li>Empty: Empty value, the product is published.</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH' => 'The width of the product.<br />Values:<ul><li>Number</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT' => 'The height of the product.<br />Values:<ul><li>Number</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH' => 'The length of the product.<br />Values:<ul><li>Number</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE' => 'The date a product will become availabable. For import the date should be in the format of day/month/year or day-month-year. On Windows systems the date goes until 19/01/2038.<br />Usage:<ol><li>Add the the name "product_available_date" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a date value. If the field contains any other value, the data will be ignored.</li></ol><br />Values:<ul><li>Date: day/month/year or day-month-year</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK' => 'The number of articles that you have in stock.<br /><br />Usage:<ol><li>Add the the name "product_in_stock" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a numeric value. If the field contains any other value, the default value will be used.</li></ol><br />Values:<ul><li>Number</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_ATTRIBUTE' => 'The different choices a product has. Use this to give a product different specifications. For example a t-shirt that comes in different sizes and colours. You can specify the sizes and colours like this: Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..<br /><br />You can adjust the prices per attribute by using the following options:<ul><li>+: Add this amount to the configured price.</li><li>-: Subtract this amount from the configured price.</li><li>=: Set the product\'s price to this amount.</li></ul><br />Usage:<ol><li>Add the the name "attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY' => 'This shows when the product is available. The value can be a descriptive text or the name of an image filename. Images must be placed in "shop_image/availability/".<br />Usage:<ol><li>Add the the name "product_availability" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text: No HTML code allowed.</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE' => 'The filename of the image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, you need to fill the "product_thumb_image" field. VirtueMart resizes the image specified there.<br/><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE' => 'The filename of the thumbnail image as located in the "shop_image/product/" folder. The filename can also be a URL.<br />NOTE: If you have dynamic resizing enabled, there still needs to be a value in this field. VirtueMart resizes the image that is specified here.<br /><br />Usage:<ol><li>Add the the name "product_full_image" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with a text value.</li></ol><br />Values:<ul><li>Text:<ul><li>No HTML code allowed</li><li>URL\'s are allowed.</li></ul></li></ul>',
	'PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE' => 'A custom attribute will add an input field to the product page with the description of the attribute supplied. Custom attributes are specified like this: Name;Extras;...<br />Usage:<ol><li>Add the the name "custom_attribute" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the attribute text.</li></ol><br /.>Values:<ul><li>Text: No HTML code allowed.</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING' => 'Specify the number of items in the package.<br />Usage:<ol><li>Add the the name "product_packaging" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the package.</li></ol><br /.>Values:<ul><li>Number</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX' => 'Specify the number of items in the box.<br />Usage:<ol><li>Add the the name "product_box" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add a column to your CSV file with the number of items in the box.</li></ol><br /.>Values:<ul><li>Number</li></ul>',
	'PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT' => 'Specify the amount or percentage of discount the product has. The values entered are exact values, no calculation is made. This is the same as if you are filling in a discount via the Product Discount List. If the discount already exists, it will not be added to the database but the product will be linked to the existing discount. The criteria for determining if a discount already exists the following values have to be exactly the same:<ol><li>Amount, be it a total or percentage</li><li>Start date</li><li>End date</li></ol>This prevents from filling the database with a huge number of the same discounts.<br /><br />Usage:<ol><li>Add the the name "product_discount" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_start" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Optional: Add the the name "product_discount_date_end" to the configuration screen. The name is case sensitive and should be lowercase.</li><li>Add the chosen columns to your CSV file with the corresponding values.</li></ol><br /.>Values:<ul><li>product_discount</li><ul><li>Number<br />e.g. 10</li><li>Percentage: Must include the % sign<br />e.g. 10%</li></ul><li>product_discount_date_start</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul><li>product_discount_date_end</li><ul><li>Date: day/month/year or day-month-year<br />Day and month can be a 1 or 2 digit notation.<br />Year can be a 2 or 4 digit notation.</li></ul></ul>',
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
	'VM_PRODUCT_RELATED_SEARCH' => 'Search for Products or Categories here:'
	));
?>