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
	'CHARSET' => 'ISO-8859-15',
	'PHPSHOP_MODULE_LIST_ORDER' => 'Ordre d\'affichage',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Inventaire des produits',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'Nombre',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Poids',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Publier',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Rechercher produit',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'modifi�',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'avec prix modifi�',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'sans prix',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Apr�s',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Avant',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Pr�visualiser le produit en boutique',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Nouveau produit',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Informations produit',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Statut du produit',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Dimensions et poids du produit',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Images du produit',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Mettre � jour l\'�l�ment',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Information de l\'�l�ment',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Statut de l\'�l�ment',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Dimensions et poids de l\'�l�ment',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Images de l\'�l�ment',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Pour mettre � jour l\'image actuelle, saisissez le chemin de la nouvelle image.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Taper \'none\' pour effacer les images courantes.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'El�ments du Produit',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Attributs de l\'�l�ment',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Etes-vous certain(e) de vouloir effacer ce produit<br/> et les �l�ments qui lui sont associ�s ?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Etes-vous certain(e) de vouloir effacer cet �l�ment ?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Fabricant',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'Ref.',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Nom',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Cat�gorie',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Date de disponibilit�',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Prix sp�cial',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Type de remise',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Publier ?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Longueur',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Largeur',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Hauteur',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Unit� de mesure',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Unit� de Mesure',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Image grande taille',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'livres',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'pouces',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Nombre de pi�ces dans l\'emballage',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Pr�ciser le nombre de pi�ces dans l\'emballage. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Nombre de pi�ces le Lot',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Pr�ciser le nombre de pi�ces dans le lot. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'R�sultats produit ajout�',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'R�sultats produit mis � jour',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'R�sultats �l�ment ajout�',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'R�sultats �l�ment mis � Jour',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Information sur la cat�gorie',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Nom de la cat�gorie',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Parent',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Description de la cat�gorie',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Publier ?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Page d\'accueil de la cat�gorie',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Liste d\'attributs pour',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Nom de l\'attribut',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Ordre d\'affichage',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Formulaire d\'Attribut',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Nouvel attribut pour le produit',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Mettre � jour l\'attribut pour ce produit',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Nouvel attribut pour �l�ment',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Mettre � jour l\'attribut pour cet �l�ment',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Nom de l\'attribut',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Ordre d\'affichage',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Prix pour',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Nom du groupe',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Prix',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Devise',
	'PHPSHOP_PRICE_FORM_LBL' => 'Information de prix',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Nouveau prix pour ce produit',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Mettre � jour le prix pour ce produit',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Nouveau prix pour cet �l�ment',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Mettre � jour le prix pour cet �l�ment',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Prix',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Devise',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Groupe client',
	'PHPSHOP_LEAVE_BLANK' => '(laisser VIDE si vous n\'avez pas <br />de fichier php individuel pour cet article !)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Article',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Date d�but remise',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Sp�cifier le jour � partir duquel la remise s\'applique',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'Date fin remise',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Sp�cifier le dernier jour de la remise',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Publi� ?',
	'PHPSHOP_FILES_LIST' => 'Gestionnaire de fichiers::Liste Image/Fichier pour',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Nom de fichier',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'Titre du fichier',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'Type de fichier',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Image compl�te',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Image vignette',
	'PHPSHOP_FILES_FORM' => 'Envoyer un fichier pour',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Fichier en cours',
	'PHPSHOP_FILES_FORM_FILE' => 'Fichier',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Image',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Envoyer vers',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'Chemin par d�faut des Images produit',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Sp�cifier l\'emplacement du fichier',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Chemin T�l�chargement (ex. pour les ventes t�l�chargeables!)',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Auto-cr�ation vignette ?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Fichier est publi� ?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Titre Fichier (ce que le client voit)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'URL Fichier (optionnel)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Saisir ici tout texte qui sera affich� au client sur la fiche produit.<br />ex.: 24 h, 48 heures, 3 � 5 jours, Sur Commande.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'OU s�lectionner une image � afficher sur la fiche produit(flypage).<br />Les images se trouvent dans le r�pertoire <i>%s</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Exemples pour le formatage de la Liste des Attributs Personnalis�s:</h4>
        <pre>Nom;Options;...</pre>',
	'PHPSHOP_IMAGE_ACTION' => 'Action image',
	'PHPSHOP_PARAMETERS_LBL' => 'Param�tres',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Type produit',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Liste type produit pour',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Ajouter un type produit pour',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Type produit',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Nom type produit',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Description type produit',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Param�tres',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Information type produit',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Publier ?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Page parcourir type produit',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Flypage type produit',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Param�tres de type produit',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Information param�tre',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Type produit non trouv� !',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Nom param�tre',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Ce nom sera le nom de la colonne de la table. Doit �tre unique et sans espace.<br/>Par exemple: materiel_principal',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Etiquette param�tre',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Entier',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Texte',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Texte court',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Virgule flot.',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Caract.',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Date & Heure',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Date',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Heure',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Ligne s�paration',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Valeurs multiples',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Valeurs possibles',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Afficher valeurs possibles en s�lection multiple ?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Si Valeurs Possibles est choisi, le Param�tre ne peut avoir seulement que ces valeurs. Exemple pour Valeurs Possibles :</strong><br/><span class="sectionname">Acier;Bois;Plastique;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Valeur par d�faut',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'Comme Valeur par D�faut du Param�tre utiliser ce format:<ul><li>Date: AAAA-MM-JJ</li><li>Heure: HH:MM:SS</li><li>Date & Heure: AAAA-MM-JJ HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Unit�',
	'PHPSHOP_PRODUCT_CLONE' => 'Cloner produit',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Ne pas afficher le nombre de produits en stock',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Caract�ristiques & Remises des produit',
	'PHPSHOP_FEATURED' => 'Caract�ristiques',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'caract�ristiques ET r�ductions',
	'PHPSHOP_SHOW_DISCOUNTED' => 'remises sur les produits',
	'PHPSHOP_FILTER' => 'Filtre',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Prix R�duit',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Soit vous pr�cisez le type de remise (champ ci dessus), et le prix r�duit est calcul� automatiquement. Soit vous sp�cifiez dans ce champ un montant, la remise est alors calcul�e automatiquement, et la liste des remises est mise � jour .',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'D�but quantit�',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Fin quantit�',
	'VM_PRODUCTS_MOVE_LBL' => 'D�placer des produits d\'une cat�gorie � une autre',
	'VM_PRODUCTS_MOVE_LIST' => 'Vous avez choisi de d�placer %s produits',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Passer � la cat�gorie suivante',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Choisir une cat�gorie de produits pour r�ordonner les produits dans une cat�gorie',
	'VM_REVIEW_FORM_LBL' => 'Ajouter commentaire',
	'PHPSHOP_REVIEW_EDIT' => 'Ajouter /�diter commentaire',
	'SEL_CATEGORY' => 'S�lectionner cat�gorie',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Quantit� d\'achat minimum',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Quantit� d\'achat maximum',
	'VM_DISPLAY_TABLE_HEADER' => 'Affiche ent�te du tableau',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Lien vers le produit � partir de la liste des enfants',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Inclure le type de produit avec un enfant',
	'VM_DISPLAY_USE_LIST_BOX' => 'Use List box for child products',
	'VM_DISPLAY_LIST_STYLE' => 'Style dela liste',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Utilisez les param�tres de parent:',
	'VM_DISPLAY_LIST_TYPE' => 'Liste:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Quantit�:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Valeur liste d�roulante',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Affichage description enfant',
	'VM_DISPLAY_DESC_WIDTH' => 'Description enfant avec',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Attribut enfant avec',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Suffixe de la classe enfant',
	'VM_INCLUDED_PRODUCT_ID' => 'IDs des produits � inclure',
	'VM_EXTRA_PRODUCT_ID' => 'IDs suppl�mentaires',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Utliser les cases radio',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Affiche les options',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Efface les valeurs  d\'affichage des produits enfants et utlise les parents',
	'PHPSHOP_DISPLAY_NORMAL' => 'Case quantit� standard',
	'PHPSHOP_DISPLAY_HIDE' => 'Cacher la case quantit�',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Utilisez une liste d�roulante',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Utilisez la case � cocher',
	'PHPSHOP_DISPLAY_ONE' => 'Un bouton "ajouter au panier"',
	'PHPSHOP_DISPLAY_MANY' => 'Bouton "ajouter au panier "pour chaque enfant',
	'PHPSHOP_DISPLAY_START' => 'Valeur d�part',
	'PHPSHOP_DISPLAY_END' => 'Valeur final',
	'PHPSHOP_DISPLAY_STEP' => 'Valeur du pas',
	'PRODUCT_WAITING_LIST_TAB' => 'Liste d\'attente',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Des utilisateurs attendent d\'�tre averti d�s que ce produit est � nouveau en stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Informer ces utilisateurs maintenant (si vous avez mis � jour le nombre de produits de stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'Inform�e',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'S�lectionnez une image',
	'VM_PRODUCT_RELATED_SEARCH' => 'Trouver des produits ou des cat�gories ici:',
	'VM_FILES_LIST_ROLE' => 'Role',
	'VM_FILES_LIST_UP' => 'Haut',
	'VM_FILES_LIST_GO_UP' => 'Vers le haut',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Affiche x produits par ligne',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Page de navigation cat�gorie',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Cloner les options du produit',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Cloner aussi les elements enfant',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Nom/Date',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'S�lectionnez un ou plusieurs produits',
	'VM_PRODUCT_SEARCHING' => 'Recherche...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Examples for the Attribute List Format:</h4>
Title = Color, Property = Red ; Click on New Property to add a new color: Green ; Then click on New attribute to add a new attribute, and so on.
<h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
Price = +10 to add this amount to the configured price.<br />  Price = -10 to subtract this amount from the configured price.<br />  Price = 10 to set the product\'s price to this amount.',
	'VM_FILES_FORM_PRODUCT_IMAGE' => 'Product Image (full and thumb)',
	'VM_FILES_FORM_DOWNLOADABLE' => 'Downloadable Product File (to be sold!)',
	'VM_FILES_FORM_RESIZE_IMAGE' => 'Resize Full Image File?'
); $VM_LANG->initModule( 'product', $langvars );
?>