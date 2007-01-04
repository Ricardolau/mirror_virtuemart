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
	var $_PHPSHOP_CATEGORY = 'Cat�gorie';
	var $_PHPSHOP_CATEGORIES = 'Cat�gories';
	var $_PHPSHOP_SELECT_CATEGORY = 'S�lectionner une Cat�gorie :';
	var $_PHPSHOP_ADMIN = 'Administration';
	var $_PHPSHOP_PRODUCT = 'Produit';
	var $_PHPSHOP_LIST = 'Liste';
	var $_PHPSHOP_ALL = 'Tous';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Lister Tous les Produits';
	var $_PHPSHOP_VIEW = 'Voir';
	var $_PHPSHOP_SHOW = 'Afficher';
	var $_PHPSHOP_ADD = 'Ajouter';
	var $_PHPSHOP_UPDATE = 'Mettre � jour';
	var $_PHPSHOP_DELETE = 'Effacer';
	var $_PHPSHOP_SELECT = 'S�lectionner';
	var $_PHPSHOP_SUBMIT = 'Soumettre';
	var $_PHPSHOP_RANDOM = 'Produits Al�atoires';
	var $_PHPSHOP_LATEST = 'Derniers Produits';
	var $_PHPSHOP_HOME_TITLE = 'Accueil';
	var $_PHPSHOP_CART_TITLE = 'Votre panier';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Commander';
	var $_PHPSHOP_LOGIN_TITLE = 'Connexion';
	var $_PHPSHOP_LOGOUT_TITLE = 'D�connexion';
	var $_PHPSHOP_BROWSE_TITLE = 'Parcourir';
	var $_PHPSHOP_SEARCH_TITLE = 'Rechercher';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Votre compte';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigation';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'D�partement';
	var $_PHPSHOP_INFO = 'Information';
	var $_PHPSHOP_BROWSE_LBL = 'Parcourir';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produits';
	var $_PHPSHOP_PRODUCT_LBL = 'Produit';
	var $_PHPSHOP_SEARCH_LBL = 'Rechercher';
	var $_PHPSHOP_FLYPAGE_LBL = 'D�tails du produit';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Recherche Produit';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nom du produit';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Cat�gorie du produit';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Description du produit';
	var $_PHPSHOP_CART_SHOW = 'Voir le panier';
	var $_PHPSHOP_CART_ADD_TO = 'Ajouter au panier';
	var $_PHPSHOP_CART_NAME = 'Nom';
	var $_PHPSHOP_CART_SKU = 'Ref.';
	var $_PHPSHOP_CART_PRICE = 'Prix';
	var $_PHPSHOP_CART_QUANTITY = 'Quantit�';
	var $_PHPSHOP_CART_SUBTOTAL = 'Sous-Total';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Ajouter une nouvelle';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Adresse d\'exp�dition';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Aucun produit n\'a �t� trouv�.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Prix : ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Commander';
	var $_PHPSHOP_NO_CUSTOMER = 'Vous n\'�tes pas encore un(e) client(e) enregistr�(e). Veuillez fournir vos informations de facturation en vous enregistrant. Merci.';
	var $_PHPSHOP_DELETE_MSG = 'Etes-vous sur(e) de vouloir supprimer cet article ?';
	var $_PHPSHOP_THANKYOU = 'Merci pour votre commande.';
	var $_PHPSHOP_NOT_SHIPPED = 'Pas encore exp�di�e';
	var $_PHPSHOP_EMAIL_SENDTO = 'Un email de confirmation vous a �t� envoy� � ';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'D�sol�, il n\'y a aucun utilisateur valide que vous pourriez ajouter � la liste des acheteurs.';
	var $_PHPSHOP_ERROR = 'ERREUR';
	var $_PHPSHOP_MOD_NOT_REG = 'Module non enregistr�.';
	var $_PHPSHOP_MOD_ISNO_REG = 'n\'est pas un module VirtueMart valide.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Vous n\'avez pas l\'autorisation d\'acc�der � ce module.';
	var $_PHPSHOP_PAGE_404_1 = 'La page n\'existe pas ou plus.';
	var $_PHPSHOP_PAGE_404_2 = 'Le fichier n\'existe pas. Fichier introuvable :';
	var $_PHPSHOP_PAGE_403 = 'Droits d\'Acc�s Insuffisants';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Vous n\'avez pas la permission d\'ex�cuter ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Fonction Non Enregistr�e';
	var $_PHPSHOP_FUNC_ISNO_REG = ' n\'est pas une fonction VirtueMart valide.';
	var $_PHPSHOP_ADMIN_MOD = 'Configuration g�n�rale';
	var $_PHPSHOP_USER_LIST_MNU = 'Lister les utilisateurs';
	var $_PHPSHOP_USER_LIST_LBL = 'Liste des utilisateurs';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Nom d\'utilisateur';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Nom complet';
	var $_PHPSHOP_USER_LIST_GROUP = 'Groupe';
	var $_PHPSHOP_USER_FORM_MNU = 'Ajouter un Utilisateur';
	var $_PHPSHOP_USER_FORM_LBL = 'Ajouter des Informations';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Information de Facturation';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Adresses de Livraison';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Ajouter une Adresse';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Aucune adresse de livraison.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Nom de l\'adresse';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Pr�nom';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = '2�me pr�nom';
	var $_PHPSHOP_USER_FORM_TITLE = 'Civilit�';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nom d\'utilisateur';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Mot de passe';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirmer le mot de passe';
	var $_PHPSHOP_USER_FORM_PERMS = 'Autorisations';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Num�ro de Client';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Nom de la soci�t�';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Ville';
	var $_PHPSHOP_USER_FORM_STATE = 'Etat/Province/R�gion';
	var $_PHPSHOP_USER_FORM_ZIP = 'Code postal';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_USER_FORM_PHONE = 'T�l�phone';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Portable';
	var $_PHPSHOP_USER_FORM_FAX = 'Fax';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Lister les modules';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Liste des modules';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Nom du module';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Permissions du module';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Fonctions';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Ajouter un Module';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Information du Module';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Etiquette du Module (pour Topmenu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Nom du Module';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Permissions du Module';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'En-T�te du Module';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Pied de page du Module';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Afficher le Module dans le Menu Admin ?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Ordre d\'affichage';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Description du Module';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Code de Langue';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Fichier de Langue';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Lister les Fonctions';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Liste des Functions';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Nom de la Fonction';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Nom de la Classe';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'M�thode de la Classe';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permissions';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Ajouter une Fonction';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Information de la Fonction';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nom de la Fonction';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nom de la Classe';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'M�thode de la Classe';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Autorisations de la Fonction';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Description de la Fonction';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Lister les Devises';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Liste des Devises';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Ajouter une Devise';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Nom de la Devise';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Code de la Devise';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Lister les Pays';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Liste des Pays';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Ajouter un Pays';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Nom du Pays';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Code du Pays (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Code du Pays (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Etat Liste';
	var $_PHPSHOP_STATE_LIST_LBL = 'Etat Liste pour : ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Ajouter/Mettre � jour un Etat';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nom Etat';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Code Etat (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Code Etat (2)';
	var $_PHPSHOP_ADDRESS = 'Adresse';
	var $_PHPSHOP_CONTINUE = 'Continuer';
	var $_PHPSHOP_EMPTY_CART = 'Votre panier est actuellement vide.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping sur le serveur InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Ping Serveur InterShipper ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Ping sur InterShipper Echou�';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Ping sur InterShipper R�ussi';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transporteur';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Temps de<BR>R�ponse';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Lister les M�thodes de Livraison';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'M�thodes de Livraison Actives';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Moyen de Transport';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Actif';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Co�t du Transport';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'D�lai de Livraison';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'taux forfaitaire';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'pourcentage';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'jours';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Charges Lourdes';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configurer les M�thodes de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Configurer les M�thode de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configurer la M�thode de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Actualiser';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'M�thode de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Activer';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Frais De Manutention';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'D�lai de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'taux forfaitaire';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'pourcentage';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'jours';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Charges Lourdes';
	var $_PHPSHOP_ORDER_MOD = 'Commandes';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Confirmer la Commande';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Annuler la Commande';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Imprimer la Commande';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Supprimer la Commande';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Lister les Commandes';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Liste des Commandes';
	var $_PHPSHOP_ORDER_LIST_ID = 'Num�ro de Commande';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Date de Commande';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Modifi�e le';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Statut';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Sous-Total';
	var $_PHPSHOP_ORDER_ITEM = 'El�ments Command�s';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordre d\'Achat';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Numero de Commande';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Date de Commande';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Statut de la Commande';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Information Client';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Information de Facturation';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Information d\'Exp�dition';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Factur�e �';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Livr�e �';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nom';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Soci�t�';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Ville';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Etat/Province/R�gion';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Code postal';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Pays';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'T�l�phone';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'El�ments de la Commande';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Quantit�';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Qt�';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Ref.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Prix';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Sous-Total';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Total des Taxes';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Livraison et Frais de Manutention';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Taxes Livraison';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'M�thode de Paiement';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nom du Compte';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Num�ro de Compte';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Date d\'Expiration';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Historique des Paiements';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Information de Livraison';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Information de Paiement';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Transporteur';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'M�thode de Livraison';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Date de Livraison';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Prix de Livraison';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Lister les Types de Statuts de Commande';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Ajouter un Type de Statut de Commande';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Code du Statut de Commande';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Nom du Statut de Commande';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Statut de la Commande';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Code du Statut de Commande';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Nom du Statut de Commande';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_PRODUCT_MOD = 'Produits';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Produit En Cours';
	var $_PHPSHOP_CURRENT_ITEM = 'El�ment En Cours';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Inventaire des Produits';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Voir Inventaire';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Prix';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Nombre';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Poids';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Lister les Produits';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Liste des Produits';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Nom du Produit';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Publier';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Rechercher Produit';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modifi�';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'avec prix modifi�';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'sans prix';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Apr�s';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Avant';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Ajouter un Produit';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editer ce Produit';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Pr�visualiser le Produit en boutique';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Ajouter un �l�ment';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Ajouter un Autre El�ment';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nouveau Produit';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Mettre � jour le Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informations Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Statut du Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimensions et Poids du Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Images du Produit';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nouvel �l�ment';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Mettre � jour l\'El�ment';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Information de l\'El�ment';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Statut de l\'El�ment';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimensions et Poids de l\'El�ment';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Images de l\'El�ment';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Retour au Produit Parent';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Pour mettre � jour l\'image actuelle, saisissez le chemin de la nouvelle image.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Taper \'none\' pour effacer les images courantes.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'El�ments du Produit';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Attributs de l\'El�ment';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Etes-vous certain(e) de vouloir effacer ce produit<br> et les �l�ments qui lui sont associ�s ?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Etes-vous certain(e) de vouloir effacer cet El�ment ?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Vendeur';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Fabricant';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nom';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Cat�gorie';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Prix de Vente';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Prix Produit (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Description Compl�te';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Description R�sum�e';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'En Stock';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Sur Commande';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Date de Disponibilit�';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Prix Sp�cial';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Type de Remise';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publier ?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Longueur';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Largeur';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Hauteur';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unit� de Mesure';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Poids';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unit� de Mesure';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Vignette';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Image Grande Taille';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'cm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit�';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'pi�ce';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Nombre de pi�ces dans l\'emballage';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Pr�ciser le nombre de pi�ces dans l\'emballage. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Nombre de pi�ces dans le Lot';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Pr�ciser le nombre de pi�ces dans le lot. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'R�sultats Produit Ajout�';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'R�sultats Produit Mis � Jour';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'R�sultats El�ment Ajout�';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'R�sultats El�ment Mis � Jour';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Utiliser Envoi de CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Dossiers de Produit';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Lister les Cat�gories';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Arborescence des Cat�gories';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Ajouter une Cat�gorie';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Information sur la Cat�gorie';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nom de la Cat�gorie';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Parent';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Description de la Cat�gorie';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publier ?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Page d\'Accueil de la Cat�gorie';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Lister les Attributs';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Liste d\'Attributs pour';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nom de l\'Attribut';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Ajouter un Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formulaire d\'Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nouvel Attribut pour le Produit';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Mettre � jour l\'Attribut pour ce Produit';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nouvel Attribut pour El�ment';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Mettre � jour l\'Attribut pour cet El�ment';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nom de l\'Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Lister les Cat�gories';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Arborescence des Prix';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Prix pour';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nom du groupe';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Prix';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Devise';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Ajouter un Prix';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Information de Prix';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nouveau Prix pour ce Produit';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Mettre � jour le Prix pour ce Produit';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nouveau Prix pour cet El�ment';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Mettre � jour le Prix pour cet El�ment';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Prix';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Groupe Client';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Rapports de Base';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Listes de Produits Individuels';
	var $_PHPSHOP_RB_SALE_TITLE = 'Rapport des Ventes';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Vue d\'ensemble d\'Activit� des Ventes';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'R�gler Intervalle';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mensuel';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Hebdomadaire';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Quotidien';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Ce Mois';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Mois Dernier';
	var $_PHPSHOP_RB_LAST60_BUTTON = '60 Derniers jours';
	var $_PHPSHOP_RB_LAST90_BUTTON = '90 Derniers jours';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'D�bute le';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Termine le';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Afficher le rapport pour la p�riode choisie';
	var $_PHPSHOP_RB_REPORT_FOR = 'Rapport pour ';
	var $_PHPSHOP_RB_DATE = 'Date';
	var $_PHPSHOP_RB_ORDERS = 'Commandes';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Total des Articles vendus';
	var $_PHPSHOP_RB_REVENUE = 'Chiffre d\'Affaire';
	var $_PHPSHOP_RB_PRODLIST = 'Liste Produit';
	var $_PHPSHOP_SHOP_MOD = 'Boutique';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Image Vignette';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Prix';
	var $_PHPSHOP_ORDER_STATUS_P = 'En Attente';
	var $_PHPSHOP_ORDER_STATUS_C = 'Confirm�e';
	var $_PHPSHOP_ORDER_STATUS_X = 'Annul�e';
	var $_PHPSHOP_ORDER_BUTTON = 'Commander';
	var $_PHPSHOP_SHOPPER_MOD = 'Clients';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Lister les Clients';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Liste des Clients';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Nom d\'Utilisateur';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Nom Complet';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Groupe';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Ajouter un Client';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Information Client';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Information de Facturation';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Adresse de Facturation';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Adresses de Livraison';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Ajouter une Adresse';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Nom de l\'Adresse';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Nom d\'Utilisateur';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Pr�nom';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = '2�me Pr�nom';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Civilit�';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nom dans la Boutique';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Mot de Passe';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirmer le Mot de Passe';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Groupe de Client';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nom de la Soci�t�';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Ville';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Etat/Province/R�gion';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Code Postal';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'T�l�phone';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Portable';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Fax';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Oui';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Non';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Lister les Groupes de Clients';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Liste des Groupes de Clients';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Nom du Groupe';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Description du Groupe';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Formulaire du Groupe de Clients';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Ajouter un Groupe de Clients';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Nom du Groupe';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Description du Groupe';
	var $_PHPSHOP_STORE_MOD = 'Boutique';
	var $_PHPSHOP_STORE_FORM_MNU = 'Editer la Boutique';
	var $_PHPSHOP_STORE_FORM_LBL = 'Informations sur la Boutique';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Informations de Contact';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Image Grande Taille';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Envoyer une Image';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Nom de la Boutique';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nom de la Soci�t� Boutique';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Ville';
	var $_PHPSHOP_STORE_FORM_STATE = 'Etat/Province/R�gion';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Code Postal';
	var $_PHPSHOP_STORE_FORM_PHONE = 'T�l�phone';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Cat�gorie de la Boutique';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Pr�nom';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = '2�me Pr�nom';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Civilit�';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'T�l�phone 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'T�l�phone 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Chemin de l\'Image';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Description';
	var $_PHPSHOP_PAYMENT = 'Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Lister les M�thodes de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Liste des M�thodes de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nom';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Remise';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Groupe de Client';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Activer Type M�thode de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Ajouter une M�thode Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formulaire de M�thode de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nom de la M�thode de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Groupe de Client';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Remise';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Activer Type M�thode de Paiement';
	var $_PHPSHOP_TAX_MOD = 'Taxes';
	var $_PHPSHOP_TAX_RATE = 'Taux de Taxes';
	var $_PHPSHOP_TAX_LIST_MNU = 'Lister les Taux de Taxes';
	var $_PHPSHOP_TAX_LIST_LBL = 'Liste des Taux de Taxes';
	var $_PHPSHOP_TAX_LIST_STATE = 'Taxes par Etat ou R�gion';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Taxes par Pays';
	var $_PHPSHOP_TAX_LIST_RATE = 'Taux de Taxe';
	var $_PHPSHOP_TAX_FORM_MNU = 'Ajouter un Taux de Taxe';
	var $_PHPSHOP_TAX_FORM_LBL = 'Ajouter des Informations sur la Taxe';
	var $_PHPSHOP_TAX_FORM_STATE = 'Taxe par Etat ou R�gion';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Taxe par Pays';
	var $_PHPSHOP_TAX_FORM_RATE = 'Taux de Taxe (pour 19.6% => remplissez 0.196)';
	var $_PHPSHOP_VENDOR_MOD = 'Vendeurs';
	var $_PHPSHOP_VENDOR_ADMIN = 'Administration des Vendeurs';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Lister les Vendeurs';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Liste des Vendeurs';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Nom du Vendeur';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Ajouter un Vendeur';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Ajouter des Informations';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Information du Vendeur';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Information de Contact';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Image Grande Taille';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Envoyer une Image';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Nom de la Boutique du Vendeur';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nom de la Soci�t� du Vendeur';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Ville';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Etat/Province/R�gion';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Code Postal';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'T�l�phone';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Cat�gorie du Vendeur';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Pr�nom';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = '2�me Pr�nom';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Civilit�';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'T�l�phone 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'T�l�phone 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Chemin de l\'Image';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Description';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Lister les<br>Cat�gories<br>de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Liste des Cat�gories de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nom de la Cat�gorie';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Description de la Cat�gorie';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Ajouter une<br>Cat�gorie<br>de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formulaire des Cat�gories de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Information de la Cat�gorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nom de la Cat�gorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Description de la Cat�gorie';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Fabricants';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Administration des Fabricants';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Lister les Fabricants';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Liste des Fabricants';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Nom du Fabricant';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Admin';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Ajouter un Fabricant';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Ajouter une Information';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Information du Fabricant';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Nom du Fabricant';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Cat�gorie de Fabricant';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Adresse du Site Web du Fabricant';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Description';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Lister les<br>Cat�gories<br>de Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Liste des Cat�gories de Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nom de la Cat�gorie';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Description Cat�gorie';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Ajouter une Cat�gorie de Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Formulaire Cat�gorie Fabricant';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Information de la Cat�gorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nom de la Cat�gorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Description de la Cat�gorie';
	var $_PHPSHOP_HELP_MOD = 'Aide';
	var $_PHPSHOP_CART_ACTION = 'Mettre � Jour';
	var $_PHPSHOP_CART_UPDATE = 'Mettre � Jour la Quantit� dans le Panier';
	var $_PHPSHOP_CART_DELETE = 'Supprimer le Produit du Panier';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Prix';
	var $_PHPSHOP_PRODUCT_CALL = 'Contactez-nous pour une Tarification';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Pr�c�dent';
	var $_PHPSHOP_PRODUCT_NEXT = 'Suivant';
	var $_PHPSHOP_CART_TAX = 'Taxe';
	var $_PHPSHOP_CART_SHIPPING = 'Transport et Frais de Manutention';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Suivant';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'ENREGISTRER';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Information de Facturation';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Soci�t�';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nom';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'T�l�phone';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Information d\'Exp�dition';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Soci�t�';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nom';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'T�l�phone';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Information de Paiement';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nom sur la Carte';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'M�thode de Paiement';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Num�ro de Carte de Cr�dit';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Date d\'Expiration';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Passer la Commande';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Information Requise quand vous choisissez le Paiement par Carte Bancaire';
	var $_PHPSHOP_ZONE_MOD = 'Zone d\'Exp�dition';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Liste des Zones';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Ajouter une Zone';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Assigner des Zones';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Pays';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zone En Cours';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Assigner � la Zone';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Mettre � Jour';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Assigner Zones';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nom de la Zone';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Description de la Zone';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Co�t Zone par Article';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Co�t Limite Zone';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Liste Zone';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nom Zone';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Description de la Zone';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Co�t Zone par Article';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Co�t Limite Zone';
	var $_PHPSHOP_LOGIN_FIRST = 'Veuillez d\'abord vous identifier ou cr��r un compte sur ce site.<br>Merci';
	var $_PHPSHOP_STORE_FORM_TOS = 'Conditions d\'Utilisation';
	var $_PHPSHOP_AGREE_TO_TOS = 'Veuillez d\'abord accepter nos conditions d\'utilisation SVP.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'J\'accepte les Conditions d\'Utilisation';
	var $_PHPSHOP_LEAVE_BLANK = '(laisser VIDE si vous n\'avez pas <br />de fichier php individuel pour cet article !)';
	var $_PHPSHOP_RETURN_LOGIN = 'Espace Client : veuillez vous Identifier';
	var $_PHPSHOP_NEW_CUSTOMER = 'Nouveau Client ? Veuillez fournir vos Informations de Facturation';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Compte Client :';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Information de Commande';
	var $_PHPSHOP_ACC_UPD_BILL = 'Ici vous pouvez mettre � jour vos informations de facturation.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Ici vous pouvez ajouter et mettre � jour vos adresses d\'exp�dition.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Information de Compte';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Information d\'Exp�dition';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Aucune Commande � Afficher';
	var $_PHPSHOP_ACC_BILL_DEF = '- Par D�faut (Identique � la Facturation)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Vous pouvez ajouter des adresses d\'exp�dition dans votre compte. Pensez � utiliser un nom ou un code appropri� pour l\'adresse d\'exp�dition ci-dessous.';
	var $_PHPSHOP_CONFIG = 'Configuration';
	var $_PHPSHOP_USERS = 'Utilisateurs';
	var $_PHPSHOP_IS_CC_PAYMENT = 'est un paiment par Carte de Cr�dit ?';
	var $_PHPSHOP_SHIPPING_MOD = 'Exp�ditions';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Exp�dition';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Exp�diteur';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Liste des Exp�diteurs';
	var $_PHPSHOP_RATE_LIST_MNU = 'Taux Exp�ditions';
	var $_PHPSHOP_RATE_LIST_LBL = 'Liste des Taux d\'Exp�ditions';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nom';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Ordre dans la liste';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Cr�er Exp�diteur';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Cr�er/�diter Exp�diteur';
	var $_PHPSHOP_RATE_FORM_MNU = 'Cr�er Taux Exp�dition';
	var $_PHPSHOP_RATE_FORM_LBL = 'Cr�er/�diter Taux Exp�dition';
	var $_PHPSHOP_RATE_FORM_NAME = 'Description Taux Exp�dition';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Exp�diteur';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Fourchette de Codes Postaux commence �';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Fourchette de Codes Postaux termine �';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Poids Minimum';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Poids Maximum';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Frais';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Vos Frais d\'Emballage';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'N� TVA';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Exp�diteur';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Description Taux Exp�dition';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Poids � partir de ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... jusqu\'�';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Soci�t� Exp�ditrice';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERREUR : Cet exp�diteur existe d�j�.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERREUR : Veuillez s�lectionner un exp�diteur.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERREUR : Au moins un taux d\'exp�dition existe, effacez le taux avant l\'exp�diteur';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERREUR : Impossible de trouver l\'exp�diteur.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERREUR : Veuillez choisir un exp�diteur.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERREUR : Impossible de trouver un exp�diteur portant ce No.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERREUR : Une description de taux est requise.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERREUR : Le pays de destination n\'est pas valide. Info  : vous pouvez s�lectionner plus d\'un pays en les s�parant d\'un point-virgule : \';\'';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERREUR : Un poids minimal est requis';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERREUR : Un poids maximal est requis';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERREUR : Le poids minimal doit �tre inf�rieur au poids maximal';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERREUR : Des frais d\'exp�dition sont requis';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERREUR : Veuillez choisir une devise';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERREUR : Un taux d\'exp�dition est demand�';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Veuillez s�lectionner';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Exp�diteur';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Taux d\'Exp�dition';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Prix';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-aucun-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Carte de Cr�dit';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Utiliser un Terminal de Paiement';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Virement Bancaire';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Adresse Seulement / Paiement � la Livraison';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Veuillez choisir une Adresse d\'Exp�dition !';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Veuillez choisir une M�thode d\'Exp�dition !';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Veuillez choisir une M�thode de Paiement !';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Veuillez v�rifier vos informations et passer votre commande !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Veuillez choisir une M�thode d\'Exp�dition.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Veuillez choisir une autre M�thode d\'Exp�dition.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Veuillez choisir une M�thode de Paiement.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Veuillez saisir votre Num�ro de Carte de Cr�dit.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Veuillez saisir le Nom du Porteur de la Carte.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Le Num�ro de Carte saisi n\'est pas valide.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Veuillez saisir le Mois d\'Expiration de la Carte.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Veuillez saisir l\'Ann�e d\'Expiration de la Carte.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'La date d\'expiration n\'est pas valide.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Veuillez choisir un Transporteur pour l\'Exp�dition.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Num�ro de Compte non valide.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Votre panier est vide !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERREUR : Veuillez choisir un Transporteur pour l\'Exp�dition !';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERREUR : Les Taux d\'Exp�dition pour ce Transporteur n\'ont pas �t� trouv�s !';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERREUR : Votre Adresse de Livraison n\'a pas �t� trouv�e !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERREUR : Il n\'y a aucune donn�e � propos de votre carte de cr�dit...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERREUR : Le Num�ro de carte de cr�dit n\'a pas �t� trouv� !';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'D�sol�, mais le Num�ro de Carte de Cr�dit que vous avez utilis� est un Num�ro de test !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'L\'identifiant unique de l\'utilisateur n\'a pas �t� trouv� dans la base de donn�e !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Vous n\'avez pas fourni de nom de b�n�ficiaire pour votre compte bancaire.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Vous n\'avez pas fourni votre num�ro IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Vous n\'avez pas fourni votre num�ro de compte bancaire.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Vous n\'avez pas fourni votre code banque (code BIC).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Vous n\'avez pas fourni le nom de votre banque.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Passer commande n�cessite que les diff�rentes �tapes du processus soient valid�es!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Information bancaire saisie pour un traitement ult�rieur.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Le montant minimum du panier pour passer commande n\'est pas encore atteint.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Notre montant minimum pour passer commande est :';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Paiement par Carte de Cr�dit';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'autre M�thodes de Paiements';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Veuillez choisir une M�thode de Paiement :';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Le montant minimum du panier pour passer commande dans votre boutique est';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informations de Compte Bancaire';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Num�ro de Compte';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Code Banque (code BIC)';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nom de la Banque';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'B�n�ficiaire du Compte';
	var $_PHPSHOP_MODULES = 'Modules';
	var $_PHPSHOP_FUNCTIONS = 'Fonctions';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produits sp�ciaux';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Vous pouvez nous laisser une remarque avec votre commande si vous le souhaitez';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Remarque Client';
	var $_PHPSHOP_INCLUDING_TAX = '(Taxes $tax % comprises)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Veuillez s�lectionner un article';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Article';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Zone de T�l�chargement';
	var $_PHPSHOP_DOWNLOADS_START = 'D�marrer le T�l�chargement';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Veuillez saisir le Num�ro de t�l�chargement qui vous a �t� communiqu� par email, puis cliquez sur "D�marrer le t�l�chargement".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'D�sol�, mais votre t�l�chargement a expir�';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'D�sol�, mais vous avez atteint le nombre maximal de t�l�chargements possibles';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Num�ro de T�l�chargement Non Valide !';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Impossible d\'envoyer un message � ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Message envoy� � ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Information-T�l�chargement';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Le(s)) fichier(s)) que vous avez command�(s)) est(sont)) pr�t(s)) pour le t�l�chargement';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Veuillez saisir ce Num�ro de T�l�chargement dans le champ pr�vu � cet effet : ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Le nombre maximal de t�l�chargements pour chaque fichier est : ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Votre acc�s au fichier expire {expire} jours apr�s le premier t�l�chargement';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Questions ? Probl�mes ?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informations de T�l�chargement de ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'produit t�l�chargeable ?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Merci pour votre r�glement. 
            La transaction a �t� trait�e avec succ�s. Vous allez recevoir une confirmation de r�glement de la part de Pay-Pal par email.
            Vous pouvez maintenant continuer ou vous connecter sur <a href=\'http://www.paypal.com\'>www.paypal.com</a> pour voir le d�tail de la transaction.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Une erreur est survenue durant le traitement de la transaction. Le statut de votre commande ne peut �tre mis � jour.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Nous vous remercions de la confiance que vous nous avez t�moign�e. Les informations concernant votre commande se trouvent ci-dessous.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Merci de faire partie de notre client�le.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Questions ? Probl�mes ?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'La commande suivante � �t� re�ue.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Vous avez acc�s aux informations concernant votre commande en suivant le lien ci-dessous.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Les quantit�s n�gatives ne sont pas autoris�es.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Veuillez saisir une quantit� valide pour cet article.';
	var $_PHPSHOP_CART_STOCK_1 = 'La quantit�e s�lectionn�e d�passe les stocks disponibles. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Actuellement nous avons $product_in_stock produit(s) disponible(s). ';
	var $_PHPSHOP_CART_STOCK_3 = 'Cliquez-ici pour vous inscrire sur notre liste d\'attente.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Veuillez s�lectionner un article dans la page de description du produit!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'Aucune';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Mr';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Mme';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Mlle';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Autre';
	var $_PHPSHOP_DEFAULT = 'Civilit�';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administration Affili�s';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Lister les Affili�s';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Liste des Affili�s';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nom Affili�';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Actif';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Taux';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total Mensuel';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Commissions Mensuelles';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Liste des Commandes';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Affili�s';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Affili�s';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'A qui envoyer le mail (* = TOUS)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Votre Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Le Sujet';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Inclure les Statistiques en cours';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Taux de Commission (pourcentage)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Actif ?';
	var $_PHPSHOP_DELIVERY_TIME = 'Actuellement livr� en';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informations de Livraison';
	var $_PHPSHOP_MORE_CATEGORIES = 'Plus de Cat�gories';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilit�';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Ce produit n\'est pas disponible actuellement.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Il devrait �tre disponible � nouveau le : ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'R�sum�';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistiques';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clients';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Produits actifs';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Produits inactifs';
	var $_PHPSHOP_STATISTIC_SUM = 'Somme';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nouvelles Commandes';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nouveaux Clients';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Veuillez saisir votre adresse email pour �tre pr�venu(e) d�s que ce produit sera de nouveau disponible en stock. 
Votre adresse email ne sera en aucune mani�re c�d�e, vendue ou partag�e de quelques mani�re que ce soit autre que pour vous avertir lors de nos r�tablissements de stocks.<br /><br />Merci !';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Merci pour votre patience! <br />Nous vous ferons savoir d�s que ce produit sera � nouveau disponible en stock.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'M\'informer !';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Imprimer le document';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Veuillez choisir ENTRE Authorize.net ET CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Statut du fichier de configuration :';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'Lecture/Ecriture';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'En Lecture Seule';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Chemins & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Exp�dition';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Commande';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'T�l�chargements';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Paiements';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Utiliser comme catalogue uniquement';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Cocher pour d�sactiver les fonctions de panier.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Afficher les prix';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Les prix affich�s sont TTC ?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Si la case est coch�e, les prix sont affich�s taxes incluses.  Sinon ils sont affich�s sans les taxes.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Cocher pour afficher les prix. Si vous utilisez comme catalogue uniquement, vous pouvez ne pas afficher les prix.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Taxe Virtuelle';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Pr�cise si un produit ayant un poids � 0 se voit appliquer une taxe ou non. Modifier le fichier ps_checkout.php->calc_order_taxable() pour personnaliser cela.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Calcul des taxes :';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Bas�es sur l\'adresse de livraison';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Bas�es sur l\'adresse du vendeur';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Fixe le taux de taxe � appliquer en fonction de la provenance :<br />
                                                <ul><li>Celui pour la r�gion / pays de provenance du propri�taire de la boutique</li><br/>
                                                <li>Ou celui pour la r�gion / pays de provenance du client.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Activer les taux de taxes multiples ?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Cocher si vos produits peuvent �tre avoir diff�rents taux de taxes (ex. 5.5% pour les livres et l\'alimentaire, 19.6% pour les cd)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Soustraire les remises avant d\'appliquer taxes et frais ?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Activer le Syst�me de Notation/Appr�ciation des Clients';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Si activ�, vous autorisez vos clients � <strong>noter les produits</strong> et <strong>�crire des appr�ciations</strong> sur ces produits. <br />
                                                                                De cette mani�re les clients partagent leurs avis et exp�riences avec les autres clients.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Cocher pour soustraire remises et promotions du r�glement AVANT application des taxes et frais d\'exp�dition. Ne pas cocher, si le calcul doit se faire APRES.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Les clients peuvent laisser leurs coordonn�es bancaires ?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Cocher si vous d�sirez laisser la possibilit� � vos clients de laisser leurs coordonn�es bancaires lorsqu\'ils s\'enregistrent.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Les clients peuvent-ils s�lectionner leurs �tat / r�gion ?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Cocher pour permettre aux clients de s�lectionner leur lieu de provenance lorsqu\'ils s\'enregistrent.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Les clients doivent-ils accepter les Conditions d\'Utilisation ?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Cocher si le client doit accepter les Conditions d\'Utilisation avant de s\'enregistrer sur la boutique.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'V�rifier les Stocks ?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Cocher pour activer la gestion des stocks, et pour emp�cher toute commande si l\'article n\'est pas (ou plus) disponible.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Activer le Programme d\'Affiliation ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Active le suivi d\'affiliation sur la vitrine de la boutique. Activer le si vous avez ajout� des affili�s dans votre gestion de boutique.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Format Email de Commande :';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Email Texte';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'Email HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Pr�cise quel type de message est envoy� au client suite � une commande :<br />                                                                                      <ul><li>comme un simple mail au format texte</li>                                                                                        <li>ou un mail comportant des balises au format HTML (Attention certains clients mail ne permettent pas la visualisation d\'emails au format HTML)</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Autoriser une Administration sur la Vitrine du Site pour les Utilisateurs n\'ayant pas acc�s � la Zone Admin ?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Avec ce r�glage vous activez l\'Administration du Site c�t� Vitrine pour les utilisateurs de type responsables de boutique, mais qui ne peuvent pas acc�der � la Zone Admin du Site (Backend) (ex. Enregistr�s / Editeurs).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'L\'adresse de votre site. Habituellement la m�me que celle de votre site Joomla! (avec le / � la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'URL S�curis�e';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Adresse URL s�curis�e de votre site. (https - avec le / � la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'URL du Composant';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'L\'adresse du composant VirtueMart. (avec le / � la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL des Images';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'L\'adresse du r�pertoire des images pour VirtueMart.(avec le / � la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Chemin pour l\'Administration';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Le chemin du r�pertoire d\'administration de VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'Chemin des Classes';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Le chemin du r�pertoire classes de VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Chemin des Pages';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Le chemin du r�pertoire des pages html de VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Chemin des Images';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Le chemin du r�pertoire images pour VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Page d\'Accueil';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'La page qui sera affich�e par d�faut.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Page d\'Erreur';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'C\'est la page qui sera utilis�e pour afficher les erreurs.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'Page de Debuggage';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'La page qui sera affich�e pour les messages de debuggage.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'Debuggage ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Active le debuggage.  La page de d�buggage sera ajout�e � la suite de toutes les pages de la boutique. Une aide pr�cieuse pour les d�veloppeurs, puisqu\'elle montre le contenu du panier, les valeurs de champs, les param�tres, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Page de D�tail';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Nom de la page qui sera utilis�e par d�faut pour afficher les d�tails de votre produit.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Mod�le Cat�gorie';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Nom du fichier Mod�le, qui sera utilis� par d�faut pour afficher les produits d\'une cat�gorie.<br />                                                                                                     Vous pouvez cr�er de nouveaux mod�les en personnalisant les fichiers de mod�les existants.Ces fichiers sont dans le r�pertoire <strong>COMPONENTPATH/html/templates/browse</strong> et commence par le mot "browse".<br />
                                                                                                      ';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Nombre par d�faut de produits sur une ligne';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Nombre de produits � afficher sur une ligne. <br />                                                           Exemple : Si vous r�glez � 4, le mod�le cat�gorie affichera 4 produits par ligne';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Image \'aucune image\'';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'C\'est l\'image de substitution utilis�e si vous ne proposez pas d\'image pour le produit.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Lignes de Recherche';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Le nombre de lignes retourn�es dans une liste apr�s une recherche.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Couleur de Recherche 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Sp�cifie la couleur des lignes impaires des r�sultats.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Couleur de Recherche 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Sp�cifie la couleur des lignes paires des r�sultats.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Lignes maxi';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'R�gle le nombre de lignes � afficher dans la boite de s�lection de Tri.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Afficher la version de VirtueMart en pied-de-page ?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Affiche le num�ro de version de VirtueMART en bas de chaque page.  Utlis� pour les d�monstrations, mais pas en production.  Habituellement non activ�.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Choisisir votre m�thode d\'exp�dition';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Module standard, avec frais et transporteur ind�pendant. <strong>RECOMMAND� !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Module d\'exp�dition par Zone/Pays Version 1.0<br />
                                                              Pour plus d\'informations, visiter <a href=\'http://ZephWare.com\'>ZephWare.com</a><br />
                                                              pour les d�tails ou contact <a href=\'mailto:zephware@devcompany.com\'>Mail ZephWare.com</a><br /> Cocher pour activer ce module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href=\'http://www.ups.com\' target=\'_blank\'>UPS Online(R) Tools</a> Calcul de Transport';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Code d\'Acc�s UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Votre Code d\'Acc�s � UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'ID Utilisateur UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Le ID Utilisateur obtenu de la part d\'UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Mot de Passe UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Le mot de passe de votre compte UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Module InterShipper. Cocher si vous avez un compte <a href=\'http://www.intershipper.com\' target=\'_blank\'>Intershipper.com</a> ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'D�sactiver les  <strong>livraisons</strong>. Cocher si vos produits sont t�l�chageables uniquement.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Mot de passe InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Le mot de passe de votre compte intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'Email InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Votre adresse email pour le compte intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Cl� de Cryptage';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Cette cl� secr�te est utlis�e pour coder les donn�es contenues dans la base de donn�es.  Cela implique de prot�ger ce fichier � la vue de quiconque.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Activer la Progression de Commande';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Cocher pour avoir une progression graphique lors du processus de commande ( 1 - 2 - 3 - 4  avec images).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'S�lectionner le type de processus de commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
              1. Adresse de livraison<br />
              2. M�thode d\'exp�dition<br />
              3. M�thode de paiement<br />
              4. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Processus 2 :</strong><br/>
              1. Adresse de livraison<br />
              2. M�thode de paiement<br />
              3. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Processus 3 :</strong><br/>
              1. M�thode d\'exp�dition<br />
              2. M�thode de paiement<br />
              3. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Processus 4 :</strong><br/>
              1. M�thode de paiement<br />
              2. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Activer les T�l�chargements';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Cocher pour activer les t�l�chargements. Seulement si vos produits peuvent �tre t�l�charg�s.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Statut des commandes permettant le t�l�chargement';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'S�lectionner le statut de commande pour lequel un email est envoy� au client pour l\'avertir que son t�l�chargement est disponible.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Statut des commandes interdisant le t�l�chargement';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'S�lectionner le statut de commande pour lequel les t�l�chargements sont interdits au client.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Racine des Fichiers en T�l�chargement';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Le chemin physique o� sont stock�s les fichiers t�l�chargeables. (avec / � la fin!)<br>
        <span class="message">Attention s�curit� : Veuillez utiliser un r�pertoire situ� EN DEHORS DE VOTRE RACINE DE SITE.</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'T�l�chargement Maximum';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Saisir le nombre maximal de t�l�chargements possibles avec la m�me cl� de t�l�chargement (pour une commande)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Expiration du t�l�chargement';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Saisir le laps de temps <b>en secondes</b> pendant lequel le fichier est disponible pour le client. 
                  Le d�compte commence apr�s le premier t�l�chargement! Quand le laps de temps expire, la cl� de t�l�chargement n\'est plus valable.<br />Nota : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Activer le paiement via IPN PayPal ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Permet aux clients de payer via le syst�me PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'Email PayPal :';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Votre adresse email PayPal. Aussi utilis�e pour recevoir les messages.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Statut des commandes pour transaction accept�';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'S�lectionner le statut des commandes pour un paiement PayPal accept�. Si vous utilisez le syt�me de t�l�chargement pour vos produits : 
          S�lectionnez le statut qui autorise le t�l�chargement pour le client. (ainsi le client recevra imm�diatement un email avec sa cl� de t�l�chargement).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Statut des commandes pour transaction refus�';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'S�lectionner le statut des commandes pour un paiement PayPal refus�.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Activer le paiement par PayMate ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Cocher pour permettre aux clients de payer par le syst�me australien PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Nom d\'Utilisateur PayMate :';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Votre compte utilisateur pour PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Activer le paiement par Authorize.net ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Cocher pour utiliser Authorize.net sur votre boutique.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Mode Test ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'S�lectionner \'Oui\' pour les tests, ou  \'Non\' pour �tablir des paiements r�els.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Oui';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Non';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Identifiant Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'C\'est votre Identifiant Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'cl� de Transaction Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'C\'est votre cl� secr�te pour effectuer des transactions avec Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Type d\'Authentification';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'C\'est le type d\'authentification Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Activer CyberCash ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Cocher pour utiliser CyberCash sur votre boutique.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'Commer�ant CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'C\'est votre Identifiant Commer�ant CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Cl� du Commer�ant CyberCash ';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'C\'est votre cl� d\'identification Commer�ant fournie par CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'URL de Paiement CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'C\'est l\'adresse s�curis�e que vous a fournie CyberCash pour les paiements';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = ' AUTH TYPE CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'C\'est le type d\'authentification utilis� pour se connecter � CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Recherche Avanc�e';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Chercher dans Toutes les Cat�gories';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Chercher dans Toutes les Informations Produits';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Seulement les Noms de Produits';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Seulement les Fabricants/Vendeurs';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Seulement les Descriptions Produits';
	var $_PHPSHOP_SEARCH_AND = 'ET';
	var $_PHPSHOP_SEARCH_NOT = 'PAS';
	var $_PHPSHOP_SEARCH_TEXT1 = 'La premi�re liste d�roulante vous permet de s�lectionner une cat�gorie pour limiter votre recherche. La seconde liste d�roulante vous permet de limiter votre recherche � une information particuli�re du produit (ex. Nom). 
           Une fois s�lectionn�e (ou laiss�e par d�faut sur \'TOUS\'), saisissez votre mot-cl� pour lancer la recherche. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Vous pourrez ensuite affiner votre recherche en ajoutant des mots-cl�s et les op�rateurs ET, PAS. 
           Choisir ET permet d\'obtenir des r�sultats contenant TOUS les mots-cl�s. 
           Choisir PAS permet d\'obtenir des r�sultats contenant les mots-cl�s du premier champ SAUF (� l\'exception de) ceux du second champ.';
	var $_PHPSHOP_ORDERBY = 'Tri� Par';
	var $_PHPSHOP_CUSTOMER_RATING = 'Note Moyenne des Clients';
	var $_PHPSHOP_TOTAL_VOTES = 'Total Votes';
	var $_PHPSHOP_CAST_VOTE = 'Veuillez valider votre vote';
	var $_PHPSHOP_RATE_BUTTON = 'Note';
	var $_PHPSHOP_RATE_NOM = 'Noter';
	var $_PHPSHOP_REVIEWS = 'Avis des Clients';
	var $_PHPSHOP_NO_REVIEWS = 'Il n\'y a pas encore de commentaire sur ce produit.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Soyez le premier � donner votre avis...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Veuillez vous identifier pour poster un commentaire.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Veuillez noter le produit pour compl�ter votre commentaire !';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Vous pouvez ajouter quelques mots de plus. Nombre de caract�res minimum autoris�s : 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Veuillez raccourcir votre commentaire. Nombre de caract�res maximum autoris�s : 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Donnez votre avis sur ce produit !';
	var $_PHPSHOP_REVIEW_RATE = 'Premi�rement : Notez le produit. S�lectionnez une note comprise entre 0 (Tr�s mauvais) et 5 �toiles (Excellent).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Veuillez saisir un (court) commentaire....(min. 100, max. 2000 caract�res) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Caract�res saisis : ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Poster Commentaire';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Vous avez d�j� �crit un commentaire pour ce produit. Merci.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Merci pour votre commentaire.';
	var $_PHPSHOP_COMMENT = 'Commentaire';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Ajouter/Editer les Types de Cartes de Cr�dit';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nom Carte de Cr�dit';
	var $_PHPSHOP_CREDITCARD_CODE = 'Carte de Cr�dit - Code Court';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Type Carte de Cr�dit';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Liste des Cartes de Cr�dit';
	var $_PHPSHOP_UDATE_ADDRESS = 'Mettre � jour l\'Adresse';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continuer Achats';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Votre commande a �t� prise en compte avec succ�s!';
	var $_PHPSHOP_ORDER_LINK = 'Suivez ce lien pour voir les D�tails de la Commande.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Le Statut de votre Commande No. {order_id} a �t� modifi�.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Le nouveau statut est :';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Pour voir les D�tails de la Commande, veuillez SVP suivre ce lien (ou le copier dans votre navigateur) :';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Modification du Statut de Commande : Votre Commande {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Avertir le Client ?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Commencer par modifier le Statut de la Commande !';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Remise sur Prix dans le Groupe des Acheteurs par d�faut (en %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Un montant positif de X veut dire : si le Produit n\'a aucun prix affect� � CE groupe d\'acheteurs, le prix par d�faut est diminu� de X %. Un montant n�gatif a l\'effet inverse';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Remise Produit';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Liste des Remises Produits';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Ajouter/Editer Remise Produit';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Montant remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Entrer le montant de la remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Type de Remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Pourcentage';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Total';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Le montant sera un pourcentage ou un total ?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Date D�but Remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Sp�cifier le jour � partir duquel la remise s\'applique';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Date Fin Remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Sp�cifier le dernier jour de la remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Vous pouvez utiliser le Formulaire de Remises Produits pour ajouter des remises !';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Remise';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Agrandir l\'image';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Style Affichage Monnaie';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Symbole mon�taire';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Vous pouvez aussi utiliser les balises HTML (ex. �,�,�,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'D�cimales';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Nombre de d�cimales affich�es (peut �tre 0)<br><b>Op�ration d\'arrondi si la valeur a un nombre de d�cimales diff�rent</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Symbole d�cimal';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Caract�re utilis� comme symbole d�cimal';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'S�parateur de milliers';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Caract�re utilis� pour s�parer les milliers (peut �tre vide)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Format Positif';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Format d\'affichage utilis� pour les valeurs positives.<br>(Symb est l� pour le symbole de monnaie)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Format N�gatif';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Format d\'affichage utilis� pour les valeurs n�gatives.<br>(Symb est l� pour le symbole de monnaie)';
	var $_PHPSHOP_OTHER_LISTS = 'Listes Autres Produits';
	var $_PHPSHOP_MORE_IMAGES = 'Voir Plus d\'Images';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Images disponibles pour';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Retour aux D�tails Produit';
	var $_PHPSHOP_FILEMANAGER = 'Gestionnaire de fichiers';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Gestionnaire de fichiers::Liste Produits';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Ajouter Image/Fichier';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Images Affect�es';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Est T�l�chargeable ?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Fichiers Affect�s (Feuilles de calcul,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publi� ?';
	var $_PHPSHOP_FILES_LIST = 'Gestionnaire de fichiers::Liste Image/Fichier pour';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nom de Fichier';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Titre du Fichier';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Type de Fichier';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Editer Entr�e Fichier';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Image Compl�te';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Image Vignette';
	var $_PHPSHOP_FILES_FORM = 'Envoyer un fichier pour';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Fichier en cours';
	var $_PHPSHOP_FILES_FORM_FILE = 'Fichier';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Image';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Envoyer vers';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Chemin par d�faut des Images Produit';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Sp�cifier l\'emplacement du fichier';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Chemin T�l�chargement (ex. pour les ventes t�l�chargeables!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Auto-Cr�ation Vignette ?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Fichier est Publi� ?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Titre Fichier (ce que le client voit)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Description Fichier';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL Fichier (optionnel)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Veuillez fournir un chemin valide !';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'L\'Image Vignette a �t� cr��e avec succ�s!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'IMPOSSIBLE de cr�er l\'Image Vignette !';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Erreur � l\'envoi Fichier/Image';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Impossible d\'effacer le fichier d\'Image Compl�te.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Image Compl�te effac�e avec succ�s.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Impossible d\'effacer le fichier d\'Image Vignette (n\'existe peut �tre pas) : ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Image Vignette effac�e avec succ�s.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Impossible d\'effacer le Fichier.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Fichier effac� avec succ�s.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'D�sol�, mais le fichier demand� n\'a pas �t� trouv� !';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Image non trouv�e !';
	var $_PHPSHOP_COUPON_MOD = 'Ch�que Boutique';
	var $_PHPSHOP_COUPONS = 'Ch�ques Boutique';
	var $_PHPSHOP_COUPON_LIST = 'Liste Ch�ques Boutique';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Le Ch�que Boutique a d�j� �t� d�pens�.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Ch�que Boutique d�pens� ! Merci.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Si vous avez un code Ch�que Boutique, veuillez le saisir ci-dessous :';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Soumettre';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Ce code Ch�que Boutique existe d�j�. Veuillez essayer de nouveau.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Mise � Jour Ch�que Boutique';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Cliquer sur un code Ch�que Boutique pour l\'�diter, ou pour supprimer un code Ch�que Boutique, s�lectionnez-le et cliquer sur Effacer :';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Code';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Pourcent ou Total';
	var $_PHPSHOP_COUPON_TYPE = 'Type Ch�que Boutique';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Un Ch�que Boutique Cadeau est effac� apr�s avoir �t� utilis� comme remise sur une commande. Un Ch�que Boutique permanent peut �tre utilis� � loisir par le client.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Ch�que Boutique Cadeau';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Ch�que Boutique Permanent';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valeur';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Effacer Code';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Etes-vous sur(e) de vouloir effacer ce code ch�que boutique ?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Veuillez compl�ter tous les champs.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'La valeur du Ch�que Boutique doit �tre un nombre.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nouveau Ch�que Boutique';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Code Ch�que Boutique';
	var $_PHPSHOP_COUPON_PERCENT = 'Pourcentage';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Valeur';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Code Ch�que Boutique sauvegard�.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Sauver Ch�que Boutique';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Remise Ch�que Boutique';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Code Ch�que Boutique non trouv�. Veuillez essayer de nouveau.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Activer Utilisation Ch�que Boutique';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Si vous activez l\'utilisation des Ch�ques Boutique, vous autorisez vos clients � utiliser des codes Ch�que Boutique pour obtenir des remises sur leurs achats.';
	var $_PHPSHOP_FREE_SHIPPING = 'Franco de Port';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Cette Commande est Franco de Port !';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Montant Minimal pour un Franco de Port';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Le montant minimum - TAXES COMPRISES ! - r�pr�sentant le minimum pour un franco de port
                                                (exemple : <strong>50</strong> indique que le client ne paiera pas de transport pour toute commande
                                                de 50 euros (taxes comprises) et plus.';
	var $_PHPSHOP_YOUR_STORE = 'Votre Boutique';
	var $_PHPSHOP_CONTROL_PANEL = 'Panneau de Contr�le';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Bouton - PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Affiche ou masque le bouton PDF sur la Vitrine de la Boutique';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Doit accepter les Conditions G�n�rales de Vente pour CHAQUE COMMANDE ?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Cocher si vous voulez que chaque client soit oblig� d\'accepter les Conditions G�n�rales de Vente lors de CHAQUE COMMANDE (avant d\'�mettre toute commande).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Type Compte Bancaire';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Compte Ch�que';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Compte Ch�que Entreprise';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Compte de Placement';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Facturations R�curentes ?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'D�finir si vous d�sirez des facturations qui se r�p�tent p�riodiquement.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Erreur Interne au Traitement de la Demande de';
	var $_PHPSHOP_PAYMENT_ERROR = 'Echec dans le Traitement du R�glement';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'R�glement Trait� avec Succ�s';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS n\'a pas pu traiter la Demande de Co�t de Livraison.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Jour(s) Garanti(s) pour la Livraison';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'M�thode d\'Enl�vement UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Comment confiez-vous vos colis � UPS ?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Emballage UPS ?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'S�lectionnez le Type d\'Emballage par d�faut.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Livraison R�sidentielle ?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'R�sidentiel (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Livraison Commerciale (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Note pour Livraison R�sidentielle (RES) ou pour Livraison Commerciale (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Frais de manutention';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Vos Frais de manutention pour cette m�thode de livraison.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Classe de Taxes';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Utiliser la classe de taxes suivante sur les frais de transport.';
	var $_PHPSHOP_ERROR_CODE = 'Code Erreur';
	var $_PHPSHOP_ERROR_DESC = 'Description Erreur';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Afficher / Modifier la Cl� de Transaction';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Afficher/Modifier les Mot de Passe/Cl� de Transaction';
	var $_PHPSHOP_TYPE_PASSWORD = 'Veuillez saisir votre Mot de Passe Utilisateur';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Mot de Passe en cours';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Cl� de Transaction en cours';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'La Cl� de Transaction a �t� modifi�e avec succ�s.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Demande/Capture Cryptograme S�curit� Carte de Cr�dit (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Demander la valeur CVV2/CVC2/CID valide (trois -ou quatre- chiffres � l\'arri�re de la carte de cr�dit, sur l\'avant des Cartes American Express) ?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Veuillez saisir les trois -ou quatre- chiffres � l\'arri�re de votre carte de cr�dit (sur l\'avant pour les Cartes American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Vous devez saisir le Cryptograme S�curit� Carte de Cr�dit avant de continuer.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'SOIT Saisir un Nom de Fichier';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTE : Vous pouvez saisir un Nom de Fichier � cet endroit. <strong>Si vous saisissez un nom de fichier ici, aucun fichier ne sera envoy� !!! Vous devrez l\'envoyer � la main via FTP !</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'SOIT Envoyer un Nouveau Fichier';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Vous pouvez envoyer un fichier local. Ce fichier sera le produit que vous vendez. Tout fichier existant sera remplac�.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Saisir ici tout texte qui sera affich� au client sur la flypage produit.<br />ex. : 24 h, 48 heures, 3 � 5 jours, Sur Commande.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OU s�lectionner une Image � afficher sur la Page des D�tails (flypage).<br />Les images se trouvent dans le r�pertoire <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Liste des Attributs';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemples pour le Formatage de la Liste des Attributs :</h4>
        <pre>Taille,XL[+1.99],M,S[-2.99];Couleur,Rouge,Vert,Jaune,CouleurPr�cieuse[=24.00];Etc,..,..</pre>
        <h4>Inclusion d\'ajustements de prix � utiliser dans les modifications des Attributs Avanc�s :</h4>
        <span class=\'sectionname\'>
        <strong>+</strong> == Ajoute ce montant au prix fix�.<br />
        <strong>-</strong> == Soustrait ce montant au prix fix�.<br />
        <strong>=</strong> == Fixe le prix global du produit � ce montant.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Liste des Attributs Personnalis�s';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemples pour le Formatage de la Liste des Attributs Personnalis�s :</h4>
        <pre>Nom;Options;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Multis�lection : utiliser la touche Ctrl + clic souris';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Activer paiement par eProcessingNetwork.com ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Utiliser eProcessingNetwork.com avec VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Mode test ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'S�lectionner \'Oui\' durant les tests. S�lectionner \'Non\' pour autoriser les transactions r�elles.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'ID Login eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'C\'est votre ID Login eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Cl� de Transanction eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'C\'est votre Cl� de Transanction eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Type Authentification';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'C\'est le Type d\'Authentification eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Produits Compl�mentaires';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Vous pouvez construire des Relations entre Produits en utilisant cette liste. S�lectionner simplement un ou plusieurs produit(s) � cet endroit et vous obtiendrez des <strong>Produits Compl�mentaires</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Vous pourriez �tre �galement interress�(e) par un de ces produits';
	var $_PHPSHOP_IMAGE_ACTION = 'Action Image';
	var $_PHPSHOP_NONE = 'aucune';
	var $_PHPSHOP_ORDER_HISTORY = 'Historique Commande';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Commentaire';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Commentaires sur votre Commande';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Inclure ce commentaire ?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Date Ajout�e';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Avertir Client ?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Statut de Commande Modifi�';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Identifiant that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Mot de passe that you received from registering at USPS.com.';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Param�tres';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Liste Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Ajouter/Editer Type Produit';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Liste Type Produit pour';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Liste Types Produits';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Ajouter un Type Produit pour';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Ajouter Type Produit';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Nom Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Description Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Param�tres';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Information Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publier ?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Page Parcourir Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Flypage Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Param�tres de Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Information Param�tre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Type Produit non trouv� !';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nom Param�tre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Ce nom sera le nom de la colonne de la table. Doit �tre unique et sans espace.<BR>Par exemple : materiel_principal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiquette Param�tre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Description Param�tre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Type Param�tre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Entier';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Texte';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Texte Court';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Virgule Flot.';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Caract.';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Date & Heure';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Date';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'AAAA-MM-JJ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Heure';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Ligne S�paration';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Valeurs Multiples';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valeurs Possibles';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Afficher Valeurs Possibles en s�lection multiple ?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Si Valeurs Possibles est choisi, le Param�tre ne peut avoir seulement que ces valeurs. Exemple pour Valeurs Possibles :</strong><BR><span class="sectionname">Acier;Bois;Plastique;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valeur par D�faut';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Comme Valeur par D�faut du Param�tre utiliser ce format :<ul><li>Date : AAAA-MM-JJ</li><li>Heure : HH:MM:SS</li><li>Date & Heure : AAAA-MM-JJ HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unit�';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Recherche Avanc�e avec s�lection de crit�res de Recherche';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Param�tres de Recherche';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Voulez-vous trouver des produits en rapport avec leurs param�tres techniques ?<BR>Vous pouvez utiliser un formulaire ad�quat :';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'D�sol�. Il n\'y a pas de cat�gorie � chercher.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'D�sol�.Il n\'y a pas de Produits avec ce nom.
';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Contient';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Ne Contient PAS';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Recherche Texte Entier';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Tout S�lectionner';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Quelques';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Effacer Formulaire';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Recherche dans une Cat�gorie';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Modifier les Param�tres';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Ordre Descendant';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ordre Ascendant';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Param�tres de Cat�gorie';
	var $_PHPSHOP_FEE = 'Montant';
	var $_PHPSHOP_PRODUCT_CLONE = 'Cloner Produit';
	var $_PHPSHOP_CSV_SETTINGS = 'Param�tres';
	var $_PHPSHOP_CSV_DELIMITER = 'D�limiteur';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Caract�re de Cl�ture Des champs';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Envoyer un Fichier CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Soumettre un Fichier CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Charger depuis un r�pertoire';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Charger un Fichier CSV depuis le Serveur';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exporter vers un Fichier CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Choisissez un Type de Classement des Champs';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Classement par D�faut';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Mon Classement personnalis�';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exporter tous les Produits vers un Fichier CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Configuration Import / Export CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Sauvegarder Changements';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nom du hamp';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valeur par d�faut';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Classement du champ';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Champ Exig� ?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importer/Exporter';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Ajouter un nouveau champ';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentation';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'D�sol�, mais le produit que vous avez demand� n\'a pas �t� trouv� !';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Afficher les Produits qui ne sont pas en stock';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Si activ�, les Produits qui ne sont pas actuellement en Stock sont affich�s. Autrement, ces Produits sont masqu�s.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Nombre de {unit}s dans l\'emballage';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Nombre de {unit}s dans le lot';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Ne pas afficher le nombre de produits en stock';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Caract�ristiques & Remises des Produits';
	var $_PHPSHOP_FEATURED = 'Caract�ristiques';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Retour vers le pays';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Retour vers le gestionnaire de fichier';
	var $_PHPSHOP_ADD_STATE = 'Ajouter un �tat';
	var $_PHPSHOP_LIST_STATES = 'Lister les �tats';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'caract�ristiques ET r�ductions';
	var $_PHPSHOP_SHOW_FEATURED = 'caract�ristiques des produits';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'remises sur les produits';
	var $_PHPSHOP_FILTER = 'Filtre';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Retour vers le Site Principal';
	var $_PHPSHOP_EXPAND_TREE = 'Agrandir l\'Arbre';
	var $_PHPSHOP_COLLAPSE_TREE = 'R�duire l\'Arbre';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Prix R�duit';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Soit vous pr�cisez le type de remise (champ ci dessus), et le prix r�duit est calcul� automatiquement. Soit vous sp�cifiez dans ce champ un montant, la remise est alors calcul�e automatiquement, et la liste des remises est mise � jour .';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Prix � l\'Unit�';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Boutique Hors Service?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Si la case est coch�e, la Boutique affiche le Message Hors Service.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Message Hors Service';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Pr�fixe  des Tables de la Boutique';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'C\'est <strong>vm</strong> par d�faut.';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Affiche la Navigation Par Page en haut de la liste des Produits?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Affichage ou non de la Navigation sur la Page situ� en haut de la liste des Produits sur la Vitrine. ';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Affiche le  Nombre de Produits?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Affiche le nombre de Produits dans une Cat�gorie (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Style du bouton Ajouter au Panier';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Active la Cr�ation Automatique de Vignette?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Cocher pour la cr�ation automatique de vignette. Toutes les images Vignettes sont redimensionn�es aux valeurs fournies ci dessous en utilisant les fonctions GD2 de PHP. (Pour v�rifier si ces fonctions sont disponibles, aller dans le menu "Help//System/System Info" et chercher la fonction GD. La qualit� des vignettes cr��es est meilleure que celle des vignettes redimensionn�es automatiquement par le navigateur. Les nouvelles images cr��es sont stock�es dans le r�pertoire /shop_image/product/resized. Si une vignette existe d�j�, elle sera affich�e. Il n\'y a pas de nouvelle cr�ation de vignette.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Largeur de la Vignette';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = '<strong>"Largeur"</strong> de la Vignette cr��e.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Hauteur de la vignette';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = '<strong>Hauteur</strong> de la Vignette cr�ee.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Merci de s�lectionner au moins une m�thode d\'Exp�dition!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configuration des Prix';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Choix du groupe pour l\'affichage des prix';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Les prix seront affich�s pour les membres du groupe s�lectionn� et pour ceux ayant un droit d\'acc�s plus �lev�.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Affiche "(Taxes XX% comprises)" quand possible?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Cocher si vous voulez que le texte "(Taxes XX% comprises)" soit affich� avec le prix.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Affiche le prix par emballage?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Cocher si le prix affich� est fonction du prix unitaire et du prix par emballage :<br /><strong>Prix Unitaire (10 pi�ces)</strong>.<br />Si la case n\'est pas coch�e, le prix affich� est comme d\'habitude : <strong>Prix : xx.xx </strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Param�tres Principaux (suite)';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Param�tres Principaux';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Fonctionnalit�s de la Vitrine';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configuration des Taxes';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'D�but Quantit�';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Fin Quantit�';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Param�tres d\'Enregistrement des Utilisateurs';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Enregistrement des utilisateurs autoris�?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Utiliser l\'activation des comptes?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Utiliser l\'inscription silencieuse (cach�)?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Si activ�, les clients n\'ont pas besoin de fournir un nom d\'utilisateur et mot de passe. A la place,  l\'adresse email est utilis� comme nouveau compte, et un mot de passe al�atoire est g�n�r�. Les d�tails de l\'inscription sont envoy�s par mail au client.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Bonjour %s,
Merci de vous �tre enregistr�(e) sur %s. Votre compte client a �t� cr��.
Vous pouvez vous connectez sur %s en utilisant le nom d\'utilisateur et mot de passe suivant :
Nom d\'Utilisateur - %s
Mot de passe - %s
';
	var $_PEAR_LOG_CRIT = 'Critique';
	var $_PEAR_LOG_ERR = 'Erreur';
	var $_PEAR_LOG_WARNING = 'Avertissement';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Alerte';
	var $_PEAR_LOG_EMERG = 'Urgence';
	var $_PEAR_LOG_NOTICE = 'Notification';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Activer le paiement PayFlow Pro ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Cocher pour utiliser VeriSign\'s PayFlow Pro avec VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'mode test ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'S�lectionner \'Yes\' pendant les phases de test. S�lectionner \'No\' pour activer les transactions r�elles.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'Le total des taxes contient';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Produit class� par d�faut';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'D�fini par quel champ sont class� les produits par d�faut sur la page de navigation';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Champs "Class� par" disponible';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Choisi les champs "Class� par" pour la page de navigation. Chacun d�fini une m�thode de tri pour la page de navigation des produits. Si vous d�selectionnez tout, les outils pour le classement et le tri ne seront pas affich�s.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Afficher un rappel succint de vos "Conditions d\'annulation et de retour" sur le page de confirmation d\'une commande ?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'Dans la plupart des pays europ�en, les propri�taires de commerce ont l\'obligation d\'informer clairement leurs clients sur les conditions de retour et d\'annulation d\'une commande. Cette fonction devrait donc �tre activ�e dans la plupart des cas.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Mentions l�gales (version courte).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Ce texte explique succintement � vos clients vos conditions de retour et d\'annulation d\'une commande. Il est affich� sur la page de r�capitulatif des informations de commande, juste avant le bouton "Confirmer la commande".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Version d�taill� des conditions d\'annulation et de retour(li� � un article).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Merci d\'ajouter un nouvel article sur les d�tails de vos conditions de retour et d\'annulation d\'une commande.
Apr�s vous pourrez le s�lectionner ici.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Conditions d\'annulation et de retour</h5>
Vous pouvez annuler cette commande jusqu\'� deux semaines apr�s que nous l\'ayons re�u.
Vous avez deux semaines pour renvoyer un article neuf et encore emball� � partir du moment o� vous l\'avez re�u. L\'article doit �tre renvoy� dans son emballage d\'origine.
Pour plus d\'information sur l\'annulation d\'une commande et le retour d\'un article, consultez <a href="%s" onclick="%s" target="_blank">Nos conditions d\'annulation et de retour</a> page.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Mode union europ�enne';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Les droits d\'acc�s du r�pertoire devant enregistrer les donn�es de session ne permettent pas de le faire. Merci de corriger ces droits d\'acc�s ou contacter votre h�bergeur.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Les droits d\'acc�s du dossier %s ne permettent pas d\'y enregistrer les sessions. Merci de corriger ces droits d\'acc�s ! En attendant, virtuemart essaie d\'utiliser le dossier %s � la place.\'';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Votre navigateur n\'accepte pas les cookies. Si vous d�sirez ajouter des articles � votre panier et les acheter en ligne sur notre site, votre navigateur doit accepter les cookies de notre site.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Ne pas tenir compte de la premi�re ligne';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Ne pas tenir compte des valeurs par d�faut';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Ecraser les donn�es existantes';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Inclure l\'en-t�te des colonnes';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Param�tres d\'importation';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Champs disponibles';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'message d\'importation CSV :';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Count';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Total';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'Fichier CSV import�';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Mis � jour';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Supprim�';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Ajout�';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Pass�';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Incorrecte';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Les champs suivant sont disponibles pour vos importations et vos exportations.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'Les champs obligatoires sont product_sku, product_name et category_path.<br /.>Seul product_sku doit �tre unique (r�f�rence d\'un produit), les autres champs peuvent �tre identique.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'R�f�rence unique d\'un produit.<br /.>Valeur :<ul><li>Num�rique</li><li>Lettre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'Le nom du produit.<br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'Le champ product_delete est particulier. Ce champ d�termine si un produit pourra �tre supprim� ou pas.<br />Utilisation :<ol><li>Ajouter "product_delete" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y. Si le champ contient une autre valeur, le produit ne pourra pas �tre supprim�.</li></ol><br /.>Valeur :<ul><li>Y : Oui, le produit pourra �tre supprim�</li><li>N : Non, le produit ne pourra pas �tre supprim�.</li><li>Champ vide : Aucune valeur, le produit ne pourra pas �tre supprim�.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Description d�taill� du produit.<br />Valeur :<ul><li>Texte : vous pouvez mettre du code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Description courte du produit.<br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'D�fini si le produit dera publi� ou pas.<br />Valeur :<ul><li>Y : oui, le produit est publi�</li><li>N : Non, le produit n\'est pas publi�</li><li>Champ vide : Aucune valeur, le produit est publi�.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'Largeur du produit.<br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'Hauteur du produit.<br />Valeur :<ul><li>Num�rique</li></ul>';
	var $PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'Longueur du produit.<br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'Date � partir de laquelle le produit est disponible. La date doit �tre sous la forme : jour/mois/ann�es ou jour-mois-ann�e. Sur les syst�me d\exploitation windows, la date va jusqu\'en 19/01/2038.<br />Utilisation :<ol><li>Ajouter "product_available_date" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec une date. Si le champ contient autre chose qu\'une date, alors il sera ignor�.</li></ol><br />Valeur :<ul><li>Date : jour/mois/ann�e ou jour-mois-ann�e</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'Quantit� en stock.<br /><br />Utilisation :<ol><li>Ajouter "product_in_stock" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec la quantit�. Si le champ contient une valeur autre que num�rique alors la valeur par d�faut sera utilis�e.</li></ol><br />Valeur :<ul><li>Nombre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'Les diff�rentes options qu\'a un produit. Utiliser ceci pour donner � un m�me produit diff�rentes sp�cifications. Par exemple pour un t-shirt dont vous vendez diff�rents coloris et diff�rentes tailles. Vous pouvez sp�cifier les diff�rentes tailles et les couleurs comme ceci : Taille,XL[+1.99],M,S[-2.99];Couleur,Rouge,Vert,Jaune[=24.00];etc,..,..<br /><br />Vous pouvez ajuster le prix pour chaque attribut en utilisant les options suivantes :<ul><li>+ : ajoute le montant qui suit au prix par d�faut du produit.</li><li>- : enl�ve le montant qui suit au prix par d�faut du produit.</li><li>= : le montant qui suit remplace le prix par d�faut du produit.</li></ul><br />Utilisation :<ol><li>Ajouter "attribute" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec les sp�cifications du produit.</li></ol><br /.>Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Affiche la disponibilit� du produit. Cette valeur peut-�tre un texte ou un nom de fichier image. Si c\'est une image, elle doit �tre plac�e dans le dossier "shop_image/availability/".<br />Utilisation :<ol><li>Ajouter "product_availability" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'Le nom du fichier de l\'image du produit dans le dossier "shop_image/product/". Le nom de fichier peut aussi �tre une URL.<br />NOTE : M�me si vous avez le redimensionnement automatique activ�, il faut quand m�me une valeur dans ce champ : VirtueMart redimensionnera l\'image sp�cifi� dans ce champ.<br/><br />Utilisation :<ol><li>Ajouter "product_full_image" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'Le nom du fichier de l\'image miniature (vignette) du produit dans le dossier "shop_image/product/resized/". Le nom de fichier peut aussi �tre une URL.<br />NOTE : M�me si vous avez le redimensionnement automatique activ�, il faut quand m�me une valeur dans ce champ : VirtueMart redimensionnera l\'image sp�cifi� dans ce champ.<br /><br />Utilisation :<ol><li>Ajouter "product_thumb_image" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'Un attribut personnalis� ajoutera un champ � la page produit qui contiendra une description de l\'attribut fourni. Les attributs personnalis�s sont sp�cifi�s comme ceci : Noms;Extras;...<br />Utilisation :<ol><li>Ajouter "custom_attribute" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec le texte de l\'attribut.</li></ol><br /.>Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Sp�cifie le nombre d\'article dans l\'emballage.<br />Utilisation :<ol><li>Ajouter "product_packaging" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec le nombre d\'article dans l\'emballage.</li></ol><br /.>Valeur :<ul><li>Nombre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Sp�cifie le nombre d\'article dans le lot.<br />Utilisation :<ol><li>Ajouter "product_box" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec le nombre d\'article dans le lot.</li></ol><br /.>Valeur :<ul><li>Nombre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Sp�cifie le montant ou le pourcentage de r�duction qu\'a le produit. Aucun calcul n\'est effectu�, la valeur entr�e doit �tre exacte. C\'est la m�me chose que si vous cr�ez une r�duction depuis la liste de r�duction de produit. Si la r�duction existe d�j�, elle ne sera pas ajout�e � la base de donn�es mais le produit sera li�e � la r�duction existante. Pour d�terminer si la r�duction existe d�j�, les valeurs suivantes doivent �tre exactement les m�mes :<ol><li>Montant (peut-�tre un total ou un pourcentage)</li><li>Date de d�but</li><li>Date de fin</li></ol>Ceci �vite de remplir inutilement la base de donn�e avec une quantit� de chiffres concernant la m�me r�duction.<br /><br />Utilisation :<ol><li>Ajouter "product_discount" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>En option : Ajouter "product_discount_date_start" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>En option : Ajouter "product_discount_date_end" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter les colonnes choisis � votre fichier CSV avec les valeurs correspondantes.</li></ol><br /.>Valeur :<ul><li>product_discount</li><ul><li>Nombre<br />exemple : 10</li><li>Pourcentage : doit inclure le symb�le % <br />exemple : 10%</li></ul><li>product_discount_date_start</li><ul><li>Date : jour/mois/ann�es ou jour-mois-ann�e<br />Les jours et les mois peuvent �tre sous forme de 1 ou 2 chiffres.<br />Les ann�es peuvent �tre sous forme de 2 ou 4 chiffres.</li></ul><li>product_discount_date_end</li><ul><li>Date : jour/mois/ann�es ou jour-mois-ann�e<br />Les jours et les mois peuvent �tre sous forme de 1 ou 2 chiffres.<br />Les ann�es peuvent �tre sous forme de 2 ou 4 chiffres.</li></ul></ul>';
	
	var $_ITEM_PREVIOUS = 'pr�c�dent';
	var $_ITEM_NEXT = 'suivant';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Continuer';
	var $_CMN_CANCEL = 'Annuler';
	var $_BUTTON_SEND_REG = 'Send Registration';
	var $_CONTACT_FORM_NC = 'Merci de v�rifier si le formulaire est correctement compl�t�.';
	var $_CMN_REQUIRED = 'Obligatoire';
	var $_CMN_NEW = 'Nouveau';
	var $_CMN_SAVE = 'Enregistrer';
	var $_CMN_NEW_ITEM_LAST = 'New items default to the last place. Ordering can be changed after this item is saved.';
	var $_CMN_OPTIONAL = 'En option';
	var $_E_APPLY = 'Appliquer';
	var $_E_IMAGES = 'Images';
	var $_URL = 'URL :';
	var $_SEL_CATEGORY = 'S�lectionner une cat�gorie';
	var $_E_REMOVE = 'Enlever';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Page';
	var $_PN_OF = 'sur';
	var $_PN_START = 'D�but';
	var $_PN_PREVIOUS = 'Pr�c�dent';
	var $_PN_NEXT = 'Suivant';
	var $_PN_END = 'Fin';
	var $_PN_DISPLAY_NR = 'Afficher #';
	var $_PN_RESULTS = 'R�sultats';
	var $_CMN_PRINT = 'Imprimer';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Retour';
	var $_USERNAME = 'Identifiant';
	var $_PASSWORD = 'Mot de passe';
	var $_BUTTON_LOGIN = 'Connection';
	var $_REGISTER_UNAME = 'Identifiant';
	var $_REGISTER_EMAIL = 'Email';
	var $_REGWARN_NAME = 'Merci de taper votre nom.';
	var $_REGWARN_UNAME = 'Merci de choisir un identifiant.';
	var $_REGWARN_MAIL = 'Merci de taper une adresse e-mail valide.';
	var $_SEND_SUB = 'D�tail du compte de %s sur %s';
	var $_ASEND_MSG = 'Bonjour %s,
	
	Un nouvel utilisateur s\'est enregistr� sur %s.
	Ce mail contient ses informations :
	
	Nom - %s
	e-mail - %s
	Identifiant - %s
	
	Merci de ne pas r�pondre � ce mail car il a �t� envoy� automatiquement � titre d\'information seulement.';
	var $_REG_COMPLETE = '<div class="componentheading">Enregistrement termin� !</div><br />Vous pouvez vous connecter � votre compte d�s maintenant.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Enregistrement termin� !</div><br />Votre compte a �t� cr�� avec succ�s. Un mail contenant un lien d\'activation vous a �t� envoy� � l\'adresse que vous nous avez donn�. Vous devez maintenant activer votre compte en cliquant sur le lien d\'activation contenu dans le mail que vous allez recevoir. Vous pourrez ensuite vous connecter � votre compte.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Derni�re mise � jour';
	var $_NOT_AUTH = 'Vous n\'�tes pas autoris� � acc�der � cette page.';
	var $_DO_LOGIN = 'Vous devez vous connecter.';
	var $_VALID_AZ09 = 'Merci de choisir un %s valide : pas d\'espaces, plus de 6 caract�res parmis 0-9, a-z, A-Z.';
	var $_CMN_PUBLISHED = 'Publi�';
	var $_CMN_UNPUBLISHED = 'D�publi�';
	var $_MORE = 'Plus...';
	var $_EMPTY_CATEGORY = 'Cette cat�gorie est actuellement vide.';
	var $_BUTTON_LOGOUT = 'D�connection';
	var $_NO_ACCOUNT = 'Pas encore de compte ?';
	var $_CREATE_ACCOUNT = 'Cr�er un compte';
	var $_REGWARN_PASS = 'Merci de choisir un mot de passe valide : pas d\'espaces, plus de 6 caract�res parmis 0-9, a-z, A-Z.';
	var $_REGWARN_VPASS1 = 'Merci de v�rifier votre mot de passe.';
	var $_REGWARN_VPASS2 = 'Le mot de passe ne correspond pas, merci de recommencer.';
	var $_USEND_MSG_ACTIVATE = 'Bonjour %s,

Merci de vous �tes enregistr� sur %s. Votre a �t� cr�e avec succ�s et doit maintenant �tre activer pour pouvoir l\'utiliser.
Pour activer votre compte, cliquez sur le lien suivant ou copier le dans votre navigateur :
%s

Apr�s l\'activation vous pourrez vous connecter � %s en utilisant l\'identifiant et le mot de passe suivant :

Identifiant - %s
Mot de passe - %s';
	var $_USEND_MSG = 'Bonjour %s,

Merci pour votre enregistrement sur %s.

vous pouvez vous connecter � %s en utilisant l\'identifiant et le mot de passe avec lesquels vous vous �tes enregistr�.';
	var $_PROMPT_PASSWORD = 'Mot de passe perdu ?';
	var $_HI = 'Hi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Nouvel utilisateur';
	var $_NEW_USER_MESSAGE = 'Bonjour %s,


Un administrateur vous a cr�� un compte en tant qu\'utilisateur sur %s.

Ce mail contient votre identifiant et votre mot de passe pour vous connecter � votre compte sur %s

Identifiant - %s
Mot de passe - %s


Merci de ne pas r�pondre � ce mail car il a �t� envoy� automatiquement � titre d\'information seulement.';
	var $_REMEMBER_ME = 'Se souvenir de moi';
	var $_REGISTER_TITLE = 'Enregistrement';
	var $_JAN = 'Janvier';
	var $_FEB = 'Fevrier';
	var $_MAR = 'Mars';
	var $_APR = 'Avril';
	var $_MAY = 'Mai';
	var $_JUN = 'Juin';
	var $_JUL = 'Juillet';
	var $_AUG = 'Aout';
	var $_SEP = 'Septembre';
	var $_OCT = 'Octobre';
	var $_NOV = 'Novembre';
	var $_DEC = 'Decembre';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'A propos';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'importer seulement une liste de prix';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Importation de prix multiple';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Utiliser les en-t�tes des colonnes comme configuration';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Collecter les informations de debuggage';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'voir l\'aper�u';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Importation normal';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Importation de type de produit';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Importation de param�tres de type de produit';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Product type cross reference upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Importation de d�tail de type de produit';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Vider la base de donn�es';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continuer l\'importation';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Annuler l\'importation';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Etapes pour importer un fichier CSV</span>
										<ol>
										<li>Cr�er une liste de produit dans un fichier CSV avec des colonne avec ou sans en-t�te .
										<br />Pour d�limiter du texte, utiliser le symb�le ~ et pour d�limiter les champs, utiliser le symb�le ^ .
										<br /><span style="font-weight: bold;">Exemple de fichier :</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>Param�trer les champs dans la page de "Configuration" dans le m�me ordre que dans votre fichier CSV. Les champs doivent �tre exactement � la m�me place que dans le fichier CSV.
										<br />Exemple : product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">Les champs obligatoire pour ajouter un produit sont :</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> est le chemin vers la cat�gorie : les cat�gories sont s�par�es par le symb�le / et commence par la cat�gorie principale puis suivent les diverses sous-cat�gories. Exemple : <br />
										<div class="quote">category/sub-category_1/sub_category_2</div>
										<br />
										Lorsque le produit doit �tre assign� � plus d\'une cat�gorie, vous pouvez
										fournir toute les cat�gories,<br />
										d�limit� par le symb�le <span style="font-weight: bold;">|</span>
										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>
										</li>
										<li>Choisir les d�limiteurs dans l\'onglet "Importer/Exporter".</li>
										<li>Choisir les param�tres d\'importation dans l\'onglet "Importer/Exporter".</li>
										<li>Choisir si le fichier est import� de votre ordinateur (Soumettre un Fichier CSV) ou depuis votre serveur (Charger un Fichier CSV depuis le Serveur).</li>
										<li>L\'importation d�marre.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Type de produit</span><br /><br />
													Pour ajouter des types de produit, vous avez besoin de 4 fichiers CSV. Chaque fichier CSV repr�sente une partie du type de produit.
													<ul>
													<li><span style="font-weight: bold;">Les types de produit</span><br />
													Ce fichier CSV contient les types de produit principaux et doit ressembler � �a :
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Music track</td><td>Track</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Album</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Param�tres des types de produit</span><br />
													Ce fichier CSV contient les param�tres par type de produit et doit ressembler � �a :
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>
													</table>
													</div>
													<br />
													Les param�tres de type de produit peuvent avoir plusieurs valeurs, les voici :
													<ul>
													<li>I : Integer</li>
													<li>T : Text</li>
													<li>S : Short Text</li>
													<li>F : Float</li>
													<li>C : Char</li>
													<li>D : Date & heure</li>
													<li>M : Dur�e</li>
													<li>V : Multiple Values</li>
													<li>B : Break Line</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">Article par nom de type de produit</span><br />
													Ce fichier CSV contient les d�tails par type de produit et doit ressembler � �a :
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>
													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>
													</table><br />
													Vous devez avoir des fichier CSV s�par� par nom de type de produit. Ceci est du au fait que les noms de colonnes sont diff�rents pour chaque fichier CSV � cause du r�glage des param�tres de type de produit.
													</li><br />
													<li><span style="font-weight: bold;">Correspondance de la r�f�rence du type de produit avec la r�f�rence du produit (SKU)</span><br />
													Ce fichier CSV contient le lien entre un type de produit et un r�f�rence produit (SKU) et doit ressembler � ceci :
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>Music artist</td></tr>
													<tr><td>5678</td><td>Music artist</td></tr>
													</table>
													</li>
													</ul><br />
													Proc�dure :<br />
													<ol>
													<li>Importer un fichier CSV de type de produit</li>
													<li>Importer un fichier CSV de param�tres de type de produit</li>
													<li>Importer un fichier CSV de d�tails de type de produit</li>
													<li>Importer un fichier CSV de correspondance des r�f�rences de type de produit</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Vider la base de donn�es</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">A UTILISER AVEC PRECAUTION !!! PAS DE RETOUR EN ARRIERE POSSIBLE !!!</span><br /><br />
													 Vider la base de donn�es enl�vera TOUTES les donn�es des tables suivantes dans votre base de donn�es  :
													 <ul>
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
													 Tous les fabricants sont supprim�s sauf le premier :
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 Les tables suivantes sont compl�tement supprim�es :
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 Le x repr�sente le num�ro de la table. Ce num�ro est li� aux diff�rents types de produits qui �taient d�finis. Puisque la table des types de produit est compl�tement vide, ces tables sont supprim�es. Importer de nouveau types de produit recr�era les tables.<br /><br />
													 Proc�dure :
													 <ol>
													 <li>Choisir "Vider la base de donn�es" dans le menu d�roulant des param�tres d\'importation</li>
													 <li>Cocher "Collecter les informations de debuggage" si vous voulez des informations suppl�mentaires sur le r�sultats de la proc�dure</li>
													 <li>Cliquer sur "Soumettre un Fichier CSV" ou "Charger un Fichier CSV depuis le Serveur". Pas besoin de taper un nom de fichier.</li>
													 <li>Il vous est demand� si vous �tes s�r de vouloir vider votre base de donn�es. cliquer sur OK si vous �tes s�r sinon cliquer sur Annuler</li>
													 <li>Suivant votre choix sur l\'�cran pr�c�dant, soit la base de donn�es sera vid� soit vous retournerez � la page principale</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Importation de prix multiple</span><br /><br />
														    Proc�dure :
														    <ol>
														    <li>Cr�er un fichier CSV qui contient les champs suivant :
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    Reportez vous � l\'onglet "Champs disponibles" pour savoir quelle genre d\'information peuvent contenir chacun de ces champs. Si vous voulez utiliser les en-t�tes des colonnes comme configuration, remplissez la premi�re ligne avec le nom des en-t�tes des colonne.
														    </li>
														    <li>Param�trer les champs dans l\'onglet "Configuration" comme mentionn� au point 1 ou bien faites le en ajoutant le nom de ces champs dans les en-t�tes de colonnes de votre fichier CSV et s�lectionner dans ce cas "Utiliser les en-t�tes des colonnes comme configuration" dans les param�trages d\'importation.
														    </li>
														    <li>S�lectionner "Importation de prix multiple" dans les param�trages d\'importation.</li>
														    <li>En option, choisissez "Voir un aper�u" et/ou "Collecter les informations de debuggage".</li>
														    <li>S�lectionner un fichier � importer depuis votre ordinateur ou � charger depuis un dossier sur votre serveur.</li>
														    <li>S�lectionner "Soumettre un Fichier CSV" ou "Charger un Fichier CSV depuis le Serveur" suivant si vous importez un fichier depuis votre ordinateur ou si vous le charger depuis un dossier sur votre serveur.</li>
														    <li>Les prix vont maintenant �tre import�s.</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Supprimmer un prix</span><br />
														    Il est possible d\'utiliser l\'importation de prix multiple pour supprimer des prix. Un prix est supprim� lorsque les champs suivants correspondent aux donn�es inscrites dans la base de donn�es :
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'Prix du produit sans devise.<br /><br />Utilisation :<ol><li>S�lectionner "product_price" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec un prix.</li></ol><br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'Longueur du produit.<br /><br />Utilisation :<ol><li>S�lectionner "product_length" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur num�rique.</li></ol><br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'Unit� de la longueur, de la largeur et de la hauteur du produit.A vous de d�finir l\'unit� qui vous convient (cm,m...).<br /><br />Utilisation :<ol><li>S�lectionner "product_lwh_uom" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'Le poids du produit.<br /><br />Utilisation :<ol><li>S�lectionner "product_weight" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur num�rique.</li></ol><br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'Unit� du poids du produit. A vous de d�finir l\'unit� qui vous convient (g, kg...).<br /><br />Utilisation :<ol><li>S�lectionner "product_weight_uom" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Les attributs font partie int�grante d\'un produit et sont utilis�s par les produits enfants pour leur apporter des sp�cifications.<br />Utilisation :<ol><li>S�lectionner "attributes" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV contenant les noms d\'attributs (texte).</li></ol><br />Valeur :<ul><li>Texte sans code html.<br />Les diff�rentes valeurs d\'attributs seront s�par�es par le symb�le | . Exemple : attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Les valeurs d\'attribut sont les valeurs des produits enfants qui sont li�es aux attributs du produit parent.<br />Utilisation :<ol><li>S�lectionner "custom_attribute" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV contenant les attributs (texte).</li></ol><br />Valeur :<ul><li>Texte sans code html.<br />Les diff�rentes valeurs d\'attributs seront s�par�es par le symb�le | .Exemple : attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'Date � laquelle commence une promotion sur un produit. Pour plus d\'informations voir "product_discount".<br /><br />Utilisation :<ol><li>S�lectionner "product_discount_date_start" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne � votre fichier CSV avec la date.</li></ol><br />Valeur :<ul><li>product_discount_date_start</li><ul><li>Date : jour/mois/ann�es ou jour-mois-ann�e<br />Les jours et les mois peuvent �tre sous forme de 1 ou 2 chiffres.<br />Les ann�es peuvent �tre sous forme de 2 ou 4 chiffres.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'Date � laquelle se termine une promotion sur un produit. Pour plus d\'informations voir "product_discount".<br /><br />Utilisation :<ol><li>S�lectionner "product_discount_date_end" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne � votre fichier CSV avec la date.</li></ol><br />Valeur :<ul><li>product_discount_date_end</li><ul><li>Date : jour/mois/ann�es ou jour-mois-ann�e<br />Les jours et les mois peuvent �tre sous forme de 1 ou 2 chiffres.<br />Les ann�es peuvent �tre sous forme de 2 ou 4 chiffres.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Ne pas tenir compte de la premi�re ligne</span><br />Si le fichir CSV commence par une ligne d\'en-t�te, choisissez cette option pour ne pas prendre en compte cette ligne. Cela �vitera que cette en-t�te soit enregistr�e dans votre base de donn�es.</li><li><span style="font-weight: bold;">Ecraser les donn�es existantes</span><br />Lors de l\'ajout de nouveau produit � votre base de donn�es, d�cocher cette option �vitera que des donn�es existantes pour des produits d�j� pr�sents dans votre base de donn�es soit remplac�es. Par d�faut, si cette option n\'est pas d�coch�, les donn�es d\'un produit existant seront mises � jour.</li><li><span style="font-weight: bold;">Ne pas tenir compte des valeurs par d�faut</span><br />Sur la page de configuration, une valeur par d�faut peut-�tre sp�cifi�e dans le cas o� le champ est vide dans le fichier CSV. En activant cette option, l\'importation ne mettra pas � jour un champ vide dans le fichier CSV.</li><li><span style="font-weight: bold;">Importer seulement une liste de prix</span><br />L\'importation d\�une liste de prix est utilis�e si vous souhaitez ne mettre � jour que les prix de vos produits avec votre fichier CSV. Votre fichier CSV ne contiendra donc plus que 2 colonne :<ol><li>product_sku</span></li><li>product_price</li></ol></li>Dans ce cas, les informations figurant la page de configuration ne seront pas prises en compte.<li><span style="font-weight: bold;">Utiliser les en-t�tes des colonnes comme configuration</span><br />Si le fichier CSV a des en-t�tes de colonnes sur sa premi�re ligne, alors cette option vous permet d\'utiliser ces en-t�tes comme configuration. Les en-t�tes de colonnes doivent �tre valide : les en-t�tes utilisable sont d�crites dans l\'onglet "Champs disponibles". La configuration est cr��e � partir du fichier CSV, elle ne sera donc pas sauvegard�e. Les valeurs par d�faut ne peuvent pas �tre utilis�es avec cette option.</li><li><span style="font-weight: bold;">Voir un aper�u</span><br />Affiche un aper�u de 5 lignes du fichier qui va �tre import�. L\'importation peut alors �tre annul�e ou continu�e.</li><li><span style="font-weight: bold;">Collecter les informations de debuggage</span><br />Dans le cas de probl�mes, utiliser cette option pour voir ce qu\'il se passe pendant l\'importation. A la fin de l\importation un rapport sera g�n�r� contenant les �tapes et les requ�tes effectu�s pendant l\'importation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'Le nom du fabricant qui est li� au produit. Il est utilis� en association avec l\'ID du fabricant. Si aucun ID n\'est sp�cifi�, seul le nom sera pris en compte. Les nouveaux ID des fabricants seront cr��s par incr�mentation. Le processus d\'ajout/mis � jour des fabricants suit cette structure :<ol><li>Le nom existe, l\'ID existe --> l\'ID est mis � jour s\'il est diff�rent</li><li>Le nom existe, l\'ID n\'existe pas --> un nouveau fabricant est cr�� avec un nouvel ID</li><li>Le nom n\'existe pas, l\'ID existe --> Le nom est ajout� avec l\'ID existant</li><li>Le nom n\'existe pas, l\'ID n\'existe pas --> Il ne se passera rien</li></ol>Utilisation :<ol><li>S�lectionner "manufacturer_name" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec le nom du fabricant.</li></ol><br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'l\'ID d\'un fabricant qui est li� au produit et doit �tre unique. Il est utilis� en association avec le nom du fabricant. Si aucun nom de fabricant n\'est sp�cifi� seul le lien du fabricant du produit sera ajout�/mis � jour. Ajouter/Mettre � jours les fabricants suit le processus suivant :<ol><li>Le nom existe, l\'ID existe --> l\'ID est mis � jour s\'il est diff�rent</li><li>Le nom existe, l\'ID n\'existe pas --> un nouveau fabricant est cr�� avec un nouvel ID</li><li>Le nom n\'existe pas, l\'ID existe --> Le nom est ajout� avec l\'ID existant</li><li>Le nom n\'existe pas, l\'ID n\'existe pas --> Il ne se passera rien</li></ol>Lorsqu\'aucun nom ou ID de fabricant existent, rien ne peut emp�cher d\'ajouter des noms de fabricants.<br /><br />Utilisation :<ol><li>S�lectionner "manufacturer_id" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec l\'ID du fabricant.</li></ol><br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'L\'URL vers une image ou une page web du produit. Quand le produit est li� � une image, celle-ci sera affich�e dans la description du produit.<br /><br />Utilisation :<ol><li>S�lectionner "product_url" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'Le nombre de produits qui ont �t� vendus.<br /><br />Utilisation :<ol><li>S�lectionner "product_sales" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur num�rique.</li></ol><br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'Lorsqu\'un produit est param�tr� comme "Prix Sp�cial" il sera visible dans le module "featured product" si activ�.<br />Utilisation :<ol><li>S�lectionner "product_special" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y.</li></ol><br />Valeur :<ul><li>Y : Oui, le produit a un "Prix Sp�cial"</li><li>N : Non, le produit n\'a pas de "Prix Sp�cial"</li><li>Champ vide : Aucune valeur, le produit n\'a pas de "Prix Sp�cial"</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'L\'unit� de vente du produit. I.e. bo�te, sac, etc.<br />Utilisation :<ol><li>S�lectionner "product_unit" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV  pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Les produits parent sont class�s selon leur cat�gorie. Permet de sp�cifier � quelle cat�gorie appartient le produit. Cela n\'est pris en compte que pour les produits parents, pas pour les produits enfants puisque ceux-ci sont rattach�s � leur parent, et pas � une cat�gorie. Pour les produits enfants, ce champ doit �tre laiss� vide. Le champ product_parent_sku doit rest� vide pour les produits principaux puisqu\'ils ne sont li�s � aucun autre produit parent.<br /><br />Utilisation :<ol><li>S�lectionner "category_path" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec le chemin.</li></ol><br />Valeur :<ul><li>Texte sans code html<br />Le chemin vers une cat�gorie doit �tre s�par� par le symb�le / . Exemple : Furniture/Chairs/Teak</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'La r�f�rence du produit parent est n�cessaire pour identifier le produit parent d\'un produit enfant. NOTE : le champ "category_path" DOIT ETRE VIDE sinon le produit sera consid�r� comme produit parent.<br />Utilisation :<ol><li>S�lectionner "category_path" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur product_sku du produit parent.</li></ol><br />Valeur :<ul><li>Num�rique</li><li>Lettres</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'L\'ID du taux de taxe que vous d�sirez appliquer au produit<br />Utilisation :<ol><li>S�lectionner "product_tax_id" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur product_tax_id de la taxe appropri�e.</li></ol><br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'Une devise diff�rente peut-�tre sp�cifi�e par produit.<br />Utilisation :<ol><li>S�lectionner "product_currency" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur de la nouvelle devise.</li></ol><br />Valeur :<ul><li>Texte sans code html<br />Exemple : EUR, USD,...</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'Page personnalis�e pour l\'affichage des types de produit. Laisser VIDE si vous n\'avez pas de fichier php individuel pour cet affichage.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_browsepage" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'Description de votre type de produit.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_description" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte pouvant contenir du code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'Page personnalis�e pour l\'affichage des types de produit. Laisser VIDE si vous n\'avez pas de fichier php individuel pour cet affichage.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_flypage" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'Le nom du type de produit. Ce nom doit �tre unique et sans espaces.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_name" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'Valeur par d�faut � afficher lorsque rien n\'est rempli  pour ce param�tre.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_default" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'Une description pour votre param�tre de type de produit.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_description" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte pouvant contenir du code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'Le nom de votre param�tre.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_label" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Sp�cifie dans quel ordre les param�tres du produits sont affich�s.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_list_order" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec un nombre.</li></ol><br />Valeur :<ul><li>Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Mettre � oui pour montrer les valeurs possibles lors de s�lections multiples<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_list_multiselect" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y or N.</li></ol><br />Valeur :<ul><li>Y : Oui, les valeurs peuvent avoir des choix multiples</li><li>N : Non, les valeurs n\'ont pas de choix multiple</li><li>Champ vide : Aucune valeur, the values are not multi select</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'Le nom du param�tre du type de produit. Ce nom doit �tre unique et sans espaces puisqu\'il sera le nom de la colonne pour les d�tails du param�tre.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_type" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'D�finit le type de param�tre qui sera utilis�. Il y a �norm�ment de valeurs diff�rentes qui peuvent �tre utilis�es.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_type" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur.</li></ol><br />Valeur :<ul><li>Texte :<ul>
													<li>I: Integer</li>
													<li>T: Text</li>
													<li>S: Short Text</li>
													<li>F: Float</li>
													<li>C: Char</li>
													<li>D: Date & Heure</li>
													<li>M: Dur�e</li>
													<li>V: Multiple Values</li>
													<li>B: Break Line</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'L\'unit� du param�tre choisi.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_unit" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'Ce sont les valeurs du param�tre, elle doivent �tres en ad�quation avec le type de param�tre choisi.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_parameter_values" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>This depends on the type set in the product_type_parameter_type field. All values have to be semi-colon (;) seperated.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'D�finit si le type de produit sera publi� ou pas.<br /><br />Utilisation :<ol><li>S�lectionner "product_type_publish" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Y : Oui, le type de produit sera publi�</li><li>N : Non, le type de produit ne sera pas publi�</li><li>Champ vide : Aucune valeur, le type de produit sera publi�.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'Le champ price_delete est particulier. Ce champ est utilis� pour d�terminer si le prix d\'un produit pourra �tre supprim� ou pas. Ce champ est utilis� lorsqu\'on importe plusieurs prix (prix multiple). Pour que le prix puisse �tre effac�, les champs suivants doivent �tre identiques :<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Utilisation :<ol><li>S�lectionner "price_delete" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y. Si le champ contient une autre valeur, le produit ne sera pas supprim�.</li></ol><br />Valeur :<ul><li>Y : Oui, le prix pourra �tre supprim�</li><li>N : Non, le prix ne pourra pas �tre supprim�</li><li>Champ vide : Aucune valeur, le prix ne pourra pas �tre supprim�</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'La quantit� est disponible au prix mentionn�.<br /><br />Utilisation :<ol><li>S�lectionner "price_quantity_start" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur num�rique.</li></ol><br />Valeur : Num�rique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'La quantit� n\'est pas disponible au prix mentionn�.<br /><br />Utilisation :<ol><li>S�lectionner "price_quantity_end" dans le menu d�roulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur num�rique.</li></ol><br />Valeur : Num�rique</li></ul>';
        
}
class phpShopLanguage extends vmLanguage { }
/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>