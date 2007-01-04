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
	var $_PHPSHOP_CATEGORY = 'Catégorie';
	var $_PHPSHOP_CATEGORIES = 'Catégories';
	var $_PHPSHOP_SELECT_CATEGORY = 'Sélectionner une Catégorie :';
	var $_PHPSHOP_ADMIN = 'Administration';
	var $_PHPSHOP_PRODUCT = 'Produit';
	var $_PHPSHOP_LIST = 'Liste';
	var $_PHPSHOP_ALL = 'Tous';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Lister Tous les Produits';
	var $_PHPSHOP_VIEW = 'Voir';
	var $_PHPSHOP_SHOW = 'Afficher';
	var $_PHPSHOP_ADD = 'Ajouter';
	var $_PHPSHOP_UPDATE = 'Mettre à jour';
	var $_PHPSHOP_DELETE = 'Effacer';
	var $_PHPSHOP_SELECT = 'Sélectionner';
	var $_PHPSHOP_SUBMIT = 'Soumettre';
	var $_PHPSHOP_RANDOM = 'Produits Aléatoires';
	var $_PHPSHOP_LATEST = 'Derniers Produits';
	var $_PHPSHOP_HOME_TITLE = 'Accueil';
	var $_PHPSHOP_CART_TITLE = 'Votre panier';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Commander';
	var $_PHPSHOP_LOGIN_TITLE = 'Connexion';
	var $_PHPSHOP_LOGOUT_TITLE = 'Déconnexion';
	var $_PHPSHOP_BROWSE_TITLE = 'Parcourir';
	var $_PHPSHOP_SEARCH_TITLE = 'Rechercher';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Votre compte';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Navigation';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Département';
	var $_PHPSHOP_INFO = 'Information';
	var $_PHPSHOP_BROWSE_LBL = 'Parcourir';
	var $_PHPSHOP_PRODUCTS_LBL = 'Produits';
	var $_PHPSHOP_PRODUCT_LBL = 'Produit';
	var $_PHPSHOP_SEARCH_LBL = 'Rechercher';
	var $_PHPSHOP_FLYPAGE_LBL = 'Détails du produit';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Recherche Produit';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Nom du produit';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Catégorie du produit';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Description du produit';
	var $_PHPSHOP_CART_SHOW = 'Voir le panier';
	var $_PHPSHOP_CART_ADD_TO = 'Ajouter au panier';
	var $_PHPSHOP_CART_NAME = 'Nom';
	var $_PHPSHOP_CART_SKU = 'Ref.';
	var $_PHPSHOP_CART_PRICE = 'Prix';
	var $_PHPSHOP_CART_QUANTITY = 'Quantité';
	var $_PHPSHOP_CART_SUBTOTAL = 'Sous-Total';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Ajouter une nouvelle';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Adresse d\'expédition';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Aucun produit n\'a été trouvé.<BR>';
	var $_PHPSHOP_PRICE_LABEL = 'Prix : ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Commander';
	var $_PHPSHOP_NO_CUSTOMER = 'Vous n\'êtes pas encore un(e) client(e) enregistré(e). Veuillez fournir vos informations de facturation en vous enregistrant. Merci.';
	var $_PHPSHOP_DELETE_MSG = 'Etes-vous sur(e) de vouloir supprimer cet article ?';
	var $_PHPSHOP_THANKYOU = 'Merci pour votre commande.';
	var $_PHPSHOP_NOT_SHIPPED = 'Pas encore expédiée';
	var $_PHPSHOP_EMAIL_SENDTO = 'Un email de confirmation vous a été envoyé à ';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Désolé, il n\'y a aucun utilisateur valide que vous pourriez ajouter à la liste des acheteurs.';
	var $_PHPSHOP_ERROR = 'ERREUR';
	var $_PHPSHOP_MOD_NOT_REG = 'Module non enregistré.';
	var $_PHPSHOP_MOD_ISNO_REG = 'n\'est pas un module VirtueMart valide.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Vous n\'avez pas l\'autorisation d\'accéder à ce module.';
	var $_PHPSHOP_PAGE_404_1 = 'La page n\'existe pas ou plus.';
	var $_PHPSHOP_PAGE_404_2 = 'Le fichier n\'existe pas. Fichier introuvable :';
	var $_PHPSHOP_PAGE_403 = 'Droits d\'Accès Insuffisants';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Vous n\'avez pas la permission d\'exécuter ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Fonction Non Enregistrée';
	var $_PHPSHOP_FUNC_ISNO_REG = ' n\'est pas une fonction VirtueMart valide.';
	var $_PHPSHOP_ADMIN_MOD = 'Configuration générale';
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
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Prénom';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = '2ème prénom';
	var $_PHPSHOP_USER_FORM_TITLE = 'Civilité';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Nom d\'utilisateur';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Mot de passe';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Confirmer le mot de passe';
	var $_PHPSHOP_USER_FORM_PERMS = 'Autorisations';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Numéro de Client';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Nom de la société';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Ville';
	var $_PHPSHOP_USER_FORM_STATE = 'Etat/Province/Région';
	var $_PHPSHOP_USER_FORM_ZIP = 'Code postal';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_USER_FORM_PHONE = 'Téléphone';
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
	var $_PHPSHOP_MODULE_FORM_HEADER = 'En-Tête du Module';
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
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Méthode de la Classe';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Permissions';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Ajouter une Fonction';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Information de la Fonction';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Nom de la Fonction';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Nom de la Classe';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Méthode de la Classe';
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
	var $_PHPSHOP_STATE_LIST_ADD = 'Ajouter/Mettre à jour un Etat';
	var $_PHPSHOP_STATE_LIST_NAME = 'Nom Etat';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Code Etat (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Code Etat (2)';
	var $_PHPSHOP_ADDRESS = 'Adresse';
	var $_PHPSHOP_CONTINUE = 'Continuer';
	var $_PHPSHOP_EMPTY_CART = 'Votre panier est actuellement vide.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Ping sur le serveur InterShipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Ping Serveur InterShipper ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Ping sur InterShipper Echoué';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Ping sur InterShipper Réussi';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Transporteur';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Temps de<BR>Réponse';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'sec.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Lister les Méthodes de Livraison';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Méthodes de Livraison Actives';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Moyen de Transport';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Actif';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Coût du Transport';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Délai de Livraison';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'taux forfaitaire';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'pourcentage';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'jours';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Charges Lourdes';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Configurer les Méthodes de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Configurer les Méthode de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Configurer la Méthode de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Actualiser';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Méthode de Livraison';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Activer';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Frais De Manutention';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Délai de Livraison';
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
	var $_PHPSHOP_ORDER_LIST_ID = 'Numéro de Commande';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Date de Commande';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Modifiée le';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Statut';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Sous-Total';
	var $_PHPSHOP_ORDER_ITEM = 'Eléments Commandés';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Ordre d\'Achat';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Numero de Commande';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Date de Commande';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Statut de la Commande';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Information Client';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Information de Facturation';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Information d\'Expédition';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Facturée à';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Livrée à';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Nom';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Société';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Ville';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Etat/Province/Région';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Code postal';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Pays';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Téléphone';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Fax';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Eléments de la Commande';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Quantité';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Qté';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Ref.';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Prix';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Total';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Sous-Total';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Total des Taxes';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Livraison et Frais de Manutention';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Taxes Livraison';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Méthode de Paiement';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Nom du Compte';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Numéro de Compte';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Date d\'Expiration';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Historique des Paiements';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Information de Livraison';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Information de Paiement';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Transporteur';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Méthode de Livraison';
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
	var $_PHPSHOP_CURRENT_ITEM = 'Elément En Cours';
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
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modifié';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'avec prix modifié';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'sans prix';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'Après';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Avant';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Ajouter un Produit';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Editer ce Produit';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Prévisualiser le Produit en boutique';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Ajouter un Élément';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Ajouter un Autre Elément';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Nouveau Produit';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Mettre à jour le Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Informations Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Statut du Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Dimensions et Poids du Produit';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Images du Produit';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Nouvel élément';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Mettre à jour l\'Elément';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Information de l\'Elément';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Statut de l\'Elément';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Dimensions et Poids de l\'Elément';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Images de l\'Elément';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Retour au Produit Parent';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Pour mettre à jour l\'image actuelle, saisissez le chemin de la nouvelle image.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Taper \'none\' pour effacer les images courantes.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Eléments du Produit';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Attributs de l\'Elément';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Etes-vous certain(e) de vouloir effacer ce produit<br> et les éléments qui lui sont associés ?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Etes-vous certain(e) de vouloir effacer cet Elément ?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Vendeur';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Fabricant';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Ref.';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Nom';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Catégorie';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Prix de Vente';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Prix Produit (Net)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Description Complète';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Description Résumée';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'En Stock';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Sur Commande';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Date de Disponibilité';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Prix Spécial';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Type de Remise';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Publier ?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Longueur';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Largeur';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Hauteur';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Unité de Mesure';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Poids';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Unité de Mesure';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Vignette';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Image Grande Taille';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'kg';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'cm';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unité';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'pièce';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Nombre de pièces dans l\'emballage';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Préciser le nombre de pièces dans l\'emballage. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Nombre de pièces dans le Lot';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Préciser le nombre de pièces dans le lot. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Résultats Produit Ajouté';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Résultats Produit Mis à Jour';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Résultats Elément Ajouté';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Résultats Elément Mis à Jour';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Utiliser Envoi de CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Dossiers de Produit';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Lister les Catégories';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Arborescence des Catégories';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Ajouter une Catégorie';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Information sur la Catégorie';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Nom de la Catégorie';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Parent';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Description de la Catégorie';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Publier ?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Page d\'Accueil de la Catégorie';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Lister les Attributs';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Liste d\'Attributs pour';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Nom de l\'Attribut';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Ajouter un Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Formulaire d\'Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Nouvel Attribut pour le Produit';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Mettre à jour l\'Attribut pour ce Produit';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Nouvel Attribut pour Elément';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Mettre à jour l\'Attribut pour cet Elément';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Nom de l\'Attribut';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Lister les Catégories';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Arborescence des Prix';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Prix pour';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Nom du groupe';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Prix';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Devise';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Ajouter un Prix';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Information de Prix';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Nouveau Prix pour ce Produit';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Mettre à jour le Prix pour ce Produit';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Nouveau Prix pour cet Elément';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Mettre à jour le Prix pour cet Elément';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Prix';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Groupe Client';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Rapports de Base';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Listes de Produits Individuels';
	var $_PHPSHOP_RB_SALE_TITLE = 'Rapport des Ventes';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Vue d\'ensemble d\'Activité des Ventes';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Régler Intervalle';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Mensuel';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Hebdomadaire';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Quotidien';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Ce Mois';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Mois Dernier';
	var $_PHPSHOP_RB_LAST60_BUTTON = '60 Derniers jours';
	var $_PHPSHOP_RB_LAST90_BUTTON = '90 Derniers jours';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Débute le';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Termine le';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Afficher le rapport pour la période choisie';
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
	var $_PHPSHOP_ORDER_STATUS_C = 'Confirmée';
	var $_PHPSHOP_ORDER_STATUS_X = 'Annulée';
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
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Prénom';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = '2ème Prénom';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Civilité';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Nom dans la Boutique';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Mot de Passe';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Confirmer le Mot de Passe';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Groupe de Client';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Nom de la Société';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Ville';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Etat/Province/Région';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Code Postal';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Téléphone';
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
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Nom de la Société Boutique';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Ville';
	var $_PHPSHOP_STORE_FORM_STATE = 'Etat/Province/Région';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Code Postal';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Téléphone';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Catégorie de la Boutique';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Prénom';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = '2ème Prénom';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Civilité';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Téléphone 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Téléphone 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Fax';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Chemin de l\'Image';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Description';
	var $_PHPSHOP_PAYMENT = 'Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Lister les Méthodes de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Liste des Méthodes de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Nom';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Remise';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Groupe de Client';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Activer Type Méthode de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Ajouter une Méthode Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Formulaire de Méthode de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Nom de la Méthode de Paiement';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Groupe de Client';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Remise';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Code';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Activer Type Méthode de Paiement';
	var $_PHPSHOP_TAX_MOD = 'Taxes';
	var $_PHPSHOP_TAX_RATE = 'Taux de Taxes';
	var $_PHPSHOP_TAX_LIST_MNU = 'Lister les Taux de Taxes';
	var $_PHPSHOP_TAX_LIST_LBL = 'Liste des Taux de Taxes';
	var $_PHPSHOP_TAX_LIST_STATE = 'Taxes par Etat ou Région';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Taxes par Pays';
	var $_PHPSHOP_TAX_LIST_RATE = 'Taux de Taxe';
	var $_PHPSHOP_TAX_FORM_MNU = 'Ajouter un Taux de Taxe';
	var $_PHPSHOP_TAX_FORM_LBL = 'Ajouter des Informations sur la Taxe';
	var $_PHPSHOP_TAX_FORM_STATE = 'Taxe par Etat ou Région';
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
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Nom de la Société du Vendeur';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Adresse 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Adresse 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Ville';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Etat/Province/Région';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Code Postal';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Téléphone';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Catégorie du Vendeur';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Nom';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Prénom';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = '2ème Prénom';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Civilité';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Téléphone 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Téléphone 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Fax';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Chemin de l\'Image';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Description';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Lister les<br>Catégories<br>de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Liste des Catégories de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Nom de la Catégorie';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Description de la Catégorie';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Ajouter une<br>Catégorie<br>de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Formulaire des Catégories de Vendeurs';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Information de la Catégorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Nom de la Catégorie';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Description de la Catégorie';
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
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Catégorie de Fabricant';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Adresse du Site Web du Fabricant';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Description';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Lister les<br>Catégories<br>de Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Liste des Catégories de Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Nom de la Catégorie';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Description Catégorie';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Ajouter une Catégorie de Fabricants';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Formulaire Catégorie Fabricant';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Information de la Catégorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Nom de la Catégorie';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Description de la Catégorie';
	var $_PHPSHOP_HELP_MOD = 'Aide';
	var $_PHPSHOP_CART_ACTION = 'Mettre à Jour';
	var $_PHPSHOP_CART_UPDATE = 'Mettre à Jour la Quantité dans le Panier';
	var $_PHPSHOP_CART_DELETE = 'Supprimer le Produit du Panier';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Prix';
	var $_PHPSHOP_PRODUCT_CALL = 'Contactez-nous pour une Tarification';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Précédent';
	var $_PHPSHOP_PRODUCT_NEXT = 'Suivant';
	var $_PHPSHOP_CART_TAX = 'Taxe';
	var $_PHPSHOP_CART_SHIPPING = 'Transport et Frais de Manutention';
	var $_PHPSHOP_CART_TOTAL = 'Total';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Suivant';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'ENREGISTRER';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Information de Facturation';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Société';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Nom';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Téléphone';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Information d\'Expédition';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Société';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Nom';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Adresse';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Téléphone';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Fax';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Information de Paiement';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Nom sur la Carte';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Méthode de Paiement';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Numéro de Carte de Crédit';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Date d\'Expiration';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Passer la Commande';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Information Requise quand vous choisissez le Paiement par Carte Bancaire';
	var $_PHPSHOP_ZONE_MOD = 'Zone d\'Expédition';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Liste des Zones';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Ajouter une Zone';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Assigner des Zones';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Pays';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Zone En Cours';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Assigner à la Zone';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Mettre à Jour';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Assigner Zones';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Nom de la Zone';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Description de la Zone';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Coût Zone par Article';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Coût Limite Zone';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Liste Zone';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Nom Zone';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Description de la Zone';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Coût Zone par Article';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Coût Limite Zone';
	var $_PHPSHOP_LOGIN_FIRST = 'Veuillez d\'abord vous identifier ou créér un compte sur ce site.<br>Merci';
	var $_PHPSHOP_STORE_FORM_TOS = 'Conditions d\'Utilisation';
	var $_PHPSHOP_AGREE_TO_TOS = 'Veuillez d\'abord accepter nos conditions d\'utilisation SVP.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'J\'accepte les Conditions d\'Utilisation';
	var $_PHPSHOP_LEAVE_BLANK = '(laisser VIDE si vous n\'avez pas <br />de fichier php individuel pour cet article !)';
	var $_PHPSHOP_RETURN_LOGIN = 'Espace Client : veuillez vous Identifier';
	var $_PHPSHOP_NEW_CUSTOMER = 'Nouveau Client ? Veuillez fournir vos Informations de Facturation';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Compte Client :';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Information de Commande';
	var $_PHPSHOP_ACC_UPD_BILL = 'Ici vous pouvez mettre à jour vos informations de facturation.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Ici vous pouvez ajouter et mettre à jour vos adresses d\'expédition.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Information de Compte';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Information d\'Expédition';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Aucune Commande à Afficher';
	var $_PHPSHOP_ACC_BILL_DEF = '- Par Défaut (Identique à la Facturation)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Vous pouvez ajouter des adresses d\'expédition dans votre compte. Pensez à utiliser un nom ou un code approprié pour l\'adresse d\'expédition ci-dessous.';
	var $_PHPSHOP_CONFIG = 'Configuration';
	var $_PHPSHOP_USERS = 'Utilisateurs';
	var $_PHPSHOP_IS_CC_PAYMENT = 'est un paiment par Carte de Crédit ?';
	var $_PHPSHOP_SHIPPING_MOD = 'Expéditions';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Expédition';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Expéditeur';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Liste des Expéditeurs';
	var $_PHPSHOP_RATE_LIST_MNU = 'Taux Expéditions';
	var $_PHPSHOP_RATE_LIST_LBL = 'Liste des Taux d\'Expéditions';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Nom';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Ordre dans la liste';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Créer Expéditeur';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Créer/Éditer Expéditeur';
	var $_PHPSHOP_RATE_FORM_MNU = 'Créer Taux Expédition';
	var $_PHPSHOP_RATE_FORM_LBL = 'Créer/Éditer Taux Expédition';
	var $_PHPSHOP_RATE_FORM_NAME = 'Description Taux Expédition';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Expéditeur';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Pays';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Fourchette de Codes Postaux commence à';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Fourchette de Codes Postaux termine à';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Poids Minimum';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Poids Maximum';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Frais';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Vos Frais d\'Emballage';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Devise';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'N° TVA';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Expéditeur';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Description Taux Expédition';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Poids à partir de ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... jusqu\'à';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Société Expéditrice';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Ordre dans la liste';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ERREUR : Cet expéditeur existe déjà.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ERREUR : Veuillez sélectionner un expéditeur.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ERREUR : Au moins un taux d\'expédition existe, effacez le taux avant l\'expéditeur';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ERREUR : Impossible de trouver l\'expéditeur.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ERREUR : Veuillez choisir un expéditeur.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ERREUR : Impossible de trouver un expéditeur portant ce No.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ERREUR : Une description de taux est requise.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ERREUR : Le pays de destination n\'est pas valide. Info  : vous pouvez sélectionner plus d\'un pays en les séparant d\'un point-virgule : \';\'';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ERREUR : Un poids minimal est requis';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ERREUR : Un poids maximal est requis';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ERREUR : Le poids minimal doit être inférieur au poids maximal';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ERREUR : Des frais d\'expédition sont requis';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ERREUR : Veuillez choisir une devise';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ERREUR : Un taux d\'expédition est demandé';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Veuillez sélectionner';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Expéditeur';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Taux d\'Expédition';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Prix';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-aucun-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Carte de Crédit';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Utiliser un Terminal de Paiement';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Virement Bancaire';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Adresse Seulement / Paiement à la Livraison';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Veuillez choisir une Adresse d\'Expédition !';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Veuillez choisir une Méthode d\'Expédition !';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Veuillez choisir une Méthode de Paiement !';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Veuillez vérifier vos informations et passer votre commande !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Veuillez choisir une Méthode d\'Expédition.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Veuillez choisir une autre Méthode d\'Expédition.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Veuillez choisir une Méthode de Paiement.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Veuillez saisir votre Numéro de Carte de Crédit.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Veuillez saisir le Nom du Porteur de la Carte.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Le Numéro de Carte saisi n\'est pas valide.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Veuillez saisir le Mois d\'Expiration de la Carte.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Veuillez saisir l\'Année d\'Expiration de la Carte.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'La date d\'expiration n\'est pas valide.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Veuillez choisir un Transporteur pour l\'Expédition.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Numéro de Compte non valide.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Votre panier est vide !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ERREUR : Veuillez choisir un Transporteur pour l\'Expédition !';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ERREUR : Les Taux d\'Expédition pour ce Transporteur n\'ont pas été trouvés !';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ERREUR : Votre Adresse de Livraison n\'a pas été trouvée !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ERREUR : Il n\'y a aucune donnée à propos de votre carte de crédit...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ERREUR : Le Numéro de carte de crédit n\'a pas été trouvé !';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Désolé, mais le Numéro de Carte de Crédit que vous avez utilisé est un Numéro de test !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'L\'identifiant unique de l\'utilisateur n\'a pas été trouvé dans la base de donnée !';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Vous n\'avez pas fourni de nom de bénéficiaire pour votre compte bancaire.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Vous n\'avez pas fourni votre numéro IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Vous n\'avez pas fourni votre numéro de compte bancaire.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Vous n\'avez pas fourni votre code banque (code BIC).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Vous n\'avez pas fourni le nom de votre banque.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Passer commande nécessite que les différentes étapes du processus soient validées!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Information bancaire saisie pour un traitement ultérieur.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Le montant minimum du panier pour passer commande n\'est pas encore atteint.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Notre montant minimum pour passer commande est :';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Paiement par Carte de Crédit';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'autre Méthodes de Paiements';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Veuillez choisir une Méthode de Paiement :';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Le montant minimum du panier pour passer commande dans votre boutique est';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Informations de Compte Bancaire';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Numéro de Compte';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Code Banque (code BIC)';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Nom de la Banque';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Bénéficiaire du Compte';
	var $_PHPSHOP_MODULES = 'Modules';
	var $_PHPSHOP_FUNCTIONS = 'Fonctions';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Produits spéciaux';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Vous pouvez nous laisser une remarque avec votre commande si vous le souhaitez';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Remarque Client';
	var $_PHPSHOP_INCLUDING_TAX = '(Taxes $tax % comprises)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Veuillez sélectionner un article';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Article';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Zone de Téléchargement';
	var $_PHPSHOP_DOWNLOADS_START = 'Démarrer le Téléchargement';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Veuillez saisir le Numéro de téléchargement qui vous a été communiqué par email, puis cliquez sur "Démarrer le téléchargement".';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Désolé, mais votre téléchargement a expiré';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Désolé, mais vous avez atteint le nombre maximal de téléchargements possibles';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Numéro de Téléchargement Non Valide !';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Impossible d\'envoyer un message à ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Message envoyé à ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Information-Téléchargement';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Le(s)) fichier(s)) que vous avez commandé(s)) est(sont)) prêt(s)) pour le téléchargement';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Veuillez saisir ce Numéro de Téléchargement dans le champ prévu à cet effet : ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Le nombre maximal de téléchargements pour chaque fichier est : ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Votre accès au fichier expire {expire} jours après le premier téléchargement';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Questions ? Problèmes ?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Informations de Téléchargement de ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'produit téléchargeable ?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Merci pour votre règlement. 
            La transaction a été traitée avec succès. Vous allez recevoir une confirmation de règlement de la part de Pay-Pal par email.
            Vous pouvez maintenant continuer ou vous connecter sur <a href=\'http://www.paypal.com\'>www.paypal.com</a> pour voir le détail de la transaction.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Une erreur est survenue durant le traitement de la transaction. Le statut de votre commande ne peut être mis à jour.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Nous vous remercions de la confiance que vous nous avez témoignée. Les informations concernant votre commande se trouvent ci-dessous.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Merci de faire partie de notre clientèle.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Questions ? Problèmes ?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'La commande suivante à été reçue.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Vous avez accès aux informations concernant votre commande en suivant le lien ci-dessous.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Les quantités négatives ne sont pas autorisées.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Veuillez saisir une quantité valide pour cet article.';
	var $_PHPSHOP_CART_STOCK_1 = 'La quantitée sélectionnée dépasse les stocks disponibles. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Actuellement nous avons $product_in_stock produit(s) disponible(s). ';
	var $_PHPSHOP_CART_STOCK_3 = 'Cliquez-ici pour vous inscrire sur notre liste d\'attente.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Veuillez sélectionner un article dans la page de description du produit!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'Aucune';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Mr';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Mme';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Mlle';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Autre';
	var $_PHPSHOP_DEFAULT = 'Civilité';
	var $_PHPSHOP_AFFILIATE_MOD = 'Administration Affiliés';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Lister les Affiliés';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Liste des Affiliés';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Nom Affilié';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Actif';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Taux';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Total Mensuel';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Commissions Mensuelles';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Liste des Commandes';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Affiliés';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Affiliés';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'A qui envoyer le mail (* = TOUS)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Votre Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Le Sujet';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Inclure les Statistiques en cours';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Taux de Commission (pourcentage)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Actif ?';
	var $_PHPSHOP_DELIVERY_TIME = 'Actuellement livré en';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Informations de Livraison';
	var $_PHPSHOP_MORE_CATEGORIES = 'Plus de Catégories';
	var $_PHPSHOP_AVAILABILITY = 'Disponibilité';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Ce produit n\'est pas disponible actuellement.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Il devrait être disponible à nouveau le : ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Résumé';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Statistiques';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Clients';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Produits actifs';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Produits inactifs';
	var $_PHPSHOP_STATISTIC_SUM = 'Somme';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Nouvelles Commandes';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Nouveaux Clients';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Veuillez saisir votre adresse email pour être prévenu(e) dès que ce produit sera de nouveau disponible en stock. 
Votre adresse email ne sera en aucune manière cédée, vendue ou partagée de quelques manière que ce soit autre que pour vous avertir lors de nos rétablissements de stocks.<br /><br />Merci !';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Merci pour votre patience! <br />Nous vous ferons savoir dès que ce produit sera à nouveau disponible en stock.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'M\'informer !';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Imprimer le document';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Veuillez choisir ENTRE Authorize.net ET CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Statut du fichier de configuration :';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'Lecture/Ecriture';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'En Lecture Seule';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Global';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Chemins & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Site';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Expédition';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Commande';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Téléchargements';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Paiements';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Utiliser comme catalogue uniquement';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Cocher pour désactiver les fonctions de panier.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Afficher les prix';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Les prix affichés sont TTC ?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Si la case est cochée, les prix sont affichés taxes incluses.  Sinon ils sont affichés sans les taxes.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Cocher pour afficher les prix. Si vous utilisez comme catalogue uniquement, vous pouvez ne pas afficher les prix.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Taxe Virtuelle';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Précise si un produit ayant un poids à 0 se voit appliquer une taxe ou non. Modifier le fichier ps_checkout.php->calc_order_taxable() pour personnaliser cela.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Calcul des taxes :';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Basées sur l\'adresse de livraison';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Basées sur l\'adresse du vendeur';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Fixe le taux de taxe à appliquer en fonction de la provenance :<br />
                                                <ul><li>Celui pour la région / pays de provenance du propriétaire de la boutique</li><br/>
                                                <li>Ou celui pour la région / pays de provenance du client.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Activer les taux de taxes multiples ?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Cocher si vos produits peuvent être avoir différents taux de taxes (ex. 5.5% pour les livres et l\'alimentaire, 19.6% pour les cd)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Soustraire les remises avant d\'appliquer taxes et frais ?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Activer le Système de Notation/Appréciation des Clients';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Si activé, vous autorisez vos clients à <strong>noter les produits</strong> et <strong>écrire des appréciations</strong> sur ces produits. <br />
                                                                                De cette manière les clients partagent leurs avis et expériences avec les autres clients.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Cocher pour soustraire remises et promotions du règlement AVANT application des taxes et frais d\'expédition. Ne pas cocher, si le calcul doit se faire APRES.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Les clients peuvent laisser leurs coordonnées bancaires ?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Cocher si vous désirez laisser la possibilité à vos clients de laisser leurs coordonnées bancaires lorsqu\'ils s\'enregistrent.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Les clients peuvent-ils sélectionner leurs état / région ?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Cocher pour permettre aux clients de sélectionner leur lieu de provenance lorsqu\'ils s\'enregistrent.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Les clients doivent-ils accepter les Conditions d\'Utilisation ?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Cocher si le client doit accepter les Conditions d\'Utilisation avant de s\'enregistrer sur la boutique.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Vérifier les Stocks ?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Cocher pour activer la gestion des stocks, et pour empêcher toute commande si l\'article n\'est pas (ou plus) disponible.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Activer le Programme d\'Affiliation ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Active le suivi d\'affiliation sur la vitrine de la boutique. Activer le si vous avez ajouté des affiliés dans votre gestion de boutique.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Format Email de Commande :';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Email Texte';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'Email HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Précise quel type de message est envoyé au client suite à une commande :<br />                                                                                      <ul><li>comme un simple mail au format texte</li>                                                                                        <li>ou un mail comportant des balises au format HTML (Attention certains clients mail ne permettent pas la visualisation d\'emails au format HTML)</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Autoriser une Administration sur la Vitrine du Site pour les Utilisateurs n\'ayant pas accès à la Zone Admin ?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Avec ce réglage vous activez l\'Administration du Site côté Vitrine pour les utilisateurs de type responsables de boutique, mais qui ne peuvent pas accéder à la Zone Admin du Site (Backend) (ex. Enregistrés / Editeurs).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'L\'adresse de votre site. Habituellement la même que celle de votre site Joomla! (avec le / à la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'URL Sécurisée';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Adresse URL sécurisée de votre site. (https - avec le / à la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'URL du Composant';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'L\'adresse du composant VirtueMart. (avec le / à la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'URL des Images';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'L\'adresse du répertoire des images pour VirtueMart.(avec le / à la fin ! )';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Chemin pour l\'Administration';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Le chemin du répertoire d\'administration de VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'Chemin des Classes';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Le chemin du répertoire classes de VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Chemin des Pages';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Le chemin du répertoire des pages html de VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Chemin des Images';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Le chemin du répertoire images pour VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Page d\'Accueil';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'La page qui sera affichée par défaut.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Page d\'Erreur';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'C\'est la page qui sera utilisée pour afficher les erreurs.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'Page de Debuggage';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'La page qui sera affichée pour les messages de debuggage.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'Debuggage ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Active le debuggage.  La page de débuggage sera ajoutée à la suite de toutes les pages de la boutique. Une aide précieuse pour les développeurs, puisqu\'elle montre le contenu du panier, les valeurs de champs, les paramètres, etc.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Page de Détail';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Nom de la page qui sera utilisée par défaut pour afficher les détails de votre produit.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Modèle Catégorie';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Nom du fichier Modèle, qui sera utilisé par défaut pour afficher les produits d\'une catégorie.<br />                                                                                                     Vous pouvez créer de nouveaux modèles en personnalisant les fichiers de modèles existants.Ces fichiers sont dans le répertoire <strong>COMPONENTPATH/html/templates/browse</strong> et commence par le mot "browse".<br />
                                                                                                      ';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Nombre par défaut de produits sur une ligne';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Nombre de produits à afficher sur une ligne. <br />                                                           Exemple : Si vous réglez à 4, le modèle catégorie affichera 4 produits par ligne';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Image \'aucune image\'';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'C\'est l\'image de substitution utilisée si vous ne proposez pas d\'image pour le produit.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Lignes de Recherche';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Le nombre de lignes retournées dans une liste après une recherche.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Couleur de Recherche 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Spécifie la couleur des lignes impaires des résultats.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Couleur de Recherche 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Spécifie la couleur des lignes paires des résultats.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Lignes maxi';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Règle le nombre de lignes à afficher dans la boite de sélection de Tri.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Afficher la version de VirtueMart en pied-de-page ?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Affiche le numéro de version de VirtueMART en bas de chaque page.  Utlisé pour les démonstrations, mais pas en production.  Habituellement non activé.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Choisisir votre méthode d\'expédition';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Module standard, avec frais et transporteur indépendant. <strong>RECOMMANDÉ !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Module d\'expédition par Zone/Pays Version 1.0<br />
                                                              Pour plus d\'informations, visiter <a href=\'http://ZephWare.com\'>ZephWare.com</a><br />
                                                              pour les détails ou contact <a href=\'mailto:zephware@devcompany.com\'>Mail ZephWare.com</a><br /> Cocher pour activer ce module';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href=\'http://www.ups.com\' target=\'_blank\'>UPS Online(R) Tools</a> Calcul de Transport';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Code d\'Accès UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Votre Code d\'Accès à UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'ID Utilisateur UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Le ID Utilisateur obtenu de la part d\'UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Mot de Passe UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Le mot de passe de votre compte UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Module InterShipper. Cocher si vous avez un compte <a href=\'http://www.intershipper.com\' target=\'_blank\'>Intershipper.com</a> ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Désactiver les  <strong>livraisons</strong>. Cocher si vos produits sont téléchageables uniquement.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Mot de passe InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Le mot de passe de votre compte intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'Email InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Votre adresse email pour le compte intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Clé de Cryptage';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Cette clé secrète est utlisée pour coder les données contenues dans la base de données.  Cela implique de protéger ce fichier à la vue de quiconque.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Activer la Progression de Commande';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Cocher pour avoir une progression graphique lors du processus de commande ( 1 - 2 - 3 - 4  avec images).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Sélectionner le type de processus de commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Standard :</strong><br/>
              1. Adresse de livraison<br />
              2. Méthode d\'expédition<br />
              3. Méthode de paiement<br />
              4. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Processus 2 :</strong><br/>
              1. Adresse de livraison<br />
              2. Méthode de paiement<br />
              3. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Processus 3 :</strong><br/>
              1. Méthode d\'expédition<br />
              2. Méthode de paiement<br />
              3. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Processus 4 :</strong><br/>
              1. Méthode de paiement<br />
              2. Validation de la commande';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Activer les Téléchargements';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Cocher pour activer les téléchargements. Seulement si vos produits peuvent être téléchargés.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Statut des commandes permettant le téléchargement';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Sélectionner le statut de commande pour lequel un email est envoyé au client pour l\'avertir que son téléchargement est disponible.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Statut des commandes interdisant le téléchargement';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Sélectionner le statut de commande pour lequel les téléchargements sont interdits au client.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Racine des Fichiers en Téléchargement';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Le chemin physique où sont stockés les fichiers téléchargeables. (avec / à la fin!)<br>
        <span class="message">Attention sécurité : Veuillez utiliser un répertoire situé EN DEHORS DE VOTRE RACINE DE SITE.</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Téléchargement Maximum';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Saisir le nombre maximal de téléchargements possibles avec la même clé de téléchargement (pour une commande)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Expiration du téléchargement';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Saisir le laps de temps <b>en secondes</b> pendant lequel le fichier est disponible pour le client. 
                  Le décompte commence après le premier téléchargement! Quand le laps de temps expire, la clé de téléchargement n\'est plus valable.<br />Nota : 86400s=24h.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Activer le paiement via IPN PayPal ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Permet aux clients de payer via le système PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'Email PayPal :';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Votre adresse email PayPal. Aussi utilisée pour recevoir les messages.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Statut des commandes pour transaction accepté';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Sélectionner le statut des commandes pour un paiement PayPal accepté. Si vous utilisez le sytème de téléchargement pour vos produits : 
          Sélectionnez le statut qui autorise le téléchargement pour le client. (ainsi le client recevra immédiatement un email avec sa clé de téléchargement).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Statut des commandes pour transaction refusé';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Sélectionner le statut des commandes pour un paiement PayPal refusé.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Activer le paiement par PayMate ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Cocher pour permettre aux clients de payer par le système australien PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Nom d\'Utilisateur PayMate :';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Votre compte utilisateur pour PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Activer le paiement par Authorize.net ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Cocher pour utiliser Authorize.net sur votre boutique.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Mode Test ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Sélectionner \'Oui\' pour les tests, ou  \'Non\' pour établir des paiements réels.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Oui';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Non';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Identifiant Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'C\'est votre Identifiant Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'clé de Transaction Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'C\'est votre clé secrète pour effectuer des transactions avec Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Type d\'Authentification';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'C\'est le type d\'authentification Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Activer CyberCash ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Cocher pour utiliser CyberCash sur votre boutique.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'Commerçant CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'C\'est votre Identifiant Commerçant CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Clé du Commerçant CyberCash ';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'C\'est votre clé d\'identification Commerçant fournie par CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'URL de Paiement CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'C\'est l\'adresse sécurisée que vous a fournie CyberCash pour les paiements';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = ' AUTH TYPE CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'C\'est le type d\'authentification utilisé pour se connecter à CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Recherche Avancée';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Chercher dans Toutes les Catégories';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Chercher dans Toutes les Informations Produits';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Seulement les Noms de Produits';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Seulement les Fabricants/Vendeurs';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Seulement les Descriptions Produits';
	var $_PHPSHOP_SEARCH_AND = 'ET';
	var $_PHPSHOP_SEARCH_NOT = 'PAS';
	var $_PHPSHOP_SEARCH_TEXT1 = 'La première liste déroulante vous permet de sélectionner une catégorie pour limiter votre recherche. La seconde liste déroulante vous permet de limiter votre recherche à une information particulière du produit (ex. Nom). 
           Une fois sélectionnée (ou laissée par défaut sur \'TOUS\'), saisissez votre mot-clé pour lancer la recherche. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Vous pourrez ensuite affiner votre recherche en ajoutant des mots-clés et les opérateurs ET, PAS. 
           Choisir ET permet d\'obtenir des résultats contenant TOUS les mots-clés. 
           Choisir PAS permet d\'obtenir des résultats contenant les mots-clés du premier champ SAUF (à l\'exception de) ceux du second champ.';
	var $_PHPSHOP_ORDERBY = 'Trié Par';
	var $_PHPSHOP_CUSTOMER_RATING = 'Note Moyenne des Clients';
	var $_PHPSHOP_TOTAL_VOTES = 'Total Votes';
	var $_PHPSHOP_CAST_VOTE = 'Veuillez valider votre vote';
	var $_PHPSHOP_RATE_BUTTON = 'Note';
	var $_PHPSHOP_RATE_NOM = 'Noter';
	var $_PHPSHOP_REVIEWS = 'Avis des Clients';
	var $_PHPSHOP_NO_REVIEWS = 'Il n\'y a pas encore de commentaire sur ce produit.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Soyez le premier à donner votre avis...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Veuillez vous identifier pour poster un commentaire.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Veuillez noter le produit pour compléter votre commentaire !';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Vous pouvez ajouter quelques mots de plus. Nombre de caractères minimum autorisés : 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Veuillez raccourcir votre commentaire. Nombre de caractères maximum autorisés : 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Donnez votre avis sur ce produit !';
	var $_PHPSHOP_REVIEW_RATE = 'Premièrement : Notez le produit. Sélectionnez une note comprise entre 0 (Très mauvais) et 5 étoiles (Excellent).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Veuillez saisir un (court) commentaire....(min. 100, max. 2000 caractères) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Caractères saisis : ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Poster Commentaire';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Vous avez déjà écrit un commentaire pour ce produit. Merci.';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Merci pour votre commentaire.';
	var $_PHPSHOP_COMMENT = 'Commentaire';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Ajouter/Editer les Types de Cartes de Crédit';
	var $_PHPSHOP_CREDITCARD_NAME = 'Nom Carte de Crédit';
	var $_PHPSHOP_CREDITCARD_CODE = 'Carte de Crédit - Code Court';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Type Carte de Crédit';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Liste des Cartes de Crédit';
	var $_PHPSHOP_UDATE_ADDRESS = 'Mettre à jour l\'Adresse';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Continuer Achats';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Votre commande a été prise en compte avec succès!';
	var $_PHPSHOP_ORDER_LINK = 'Suivez ce lien pour voir les Détails de la Commande.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Le Statut de votre Commande No. {order_id} a été modifié.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Le nouveau statut est :';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Pour voir les Détails de la Commande, veuillez SVP suivre ce lien (ou le copier dans votre navigateur) :';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Modification du Statut de Commande : Votre Commande {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Avertir le Client ?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Commencer par modifier le Statut de la Commande !';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Remise sur Prix dans le Groupe des Acheteurs par défaut (en %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Un montant positif de X veut dire : si le Produit n\'a aucun prix affecté à CE groupe d\'acheteurs, le prix par défaut est diminué de X %. Un montant négatif a l\'effet inverse';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Remise Produit';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Liste des Remises Produits';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Ajouter/Editer Remise Produit';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Montant remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Entrer le montant de la remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Type de Remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Pourcentage';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Total';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Le montant sera un pourcentage ou un total ?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Date Début Remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Spécifier le jour à partir duquel la remise s\'applique';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Date Fin Remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Spécifier le dernier jour de la remise';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Vous pouvez utiliser le Formulaire de Remises Produits pour ajouter des remises !';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Remise';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Agrandir l\'image';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Style Affichage Monnaie';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Symbole monétaire';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Vous pouvez aussi utiliser les balises HTML (ex. €,£,¥,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Décimales';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Nombre de décimales affichées (peut être 0)<br><b>Opération d\'arrondi si la valeur a un nombre de décimales différent</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Symbole décimal';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Caractère utilisé comme symbole décimal';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Séparateur de milliers';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Caractère utilisé pour séparer les milliers (peut être vide)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Format Positif';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Format d\'affichage utilisé pour les valeurs positives.<br>(Symb est là pour le symbole de monnaie)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Format Négatif';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Format d\'affichage utilisé pour les valeurs négatives.<br>(Symb est là pour le symbole de monnaie)';
	var $_PHPSHOP_OTHER_LISTS = 'Listes Autres Produits';
	var $_PHPSHOP_MORE_IMAGES = 'Voir Plus d\'Images';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Images disponibles pour';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Retour aux Détails Produit';
	var $_PHPSHOP_FILEMANAGER = 'Gestionnaire de fichiers';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Gestionnaire de fichiers::Liste Produits';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Ajouter Image/Fichier';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Images Affectées';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Est Téléchargeable ?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Fichiers Affectés (Feuilles de calcul,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Publié ?';
	var $_PHPSHOP_FILES_LIST = 'Gestionnaire de fichiers::Liste Image/Fichier pour';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Nom de Fichier';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Titre du Fichier';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Type de Fichier';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Editer Entrée Fichier';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Image Complète';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Image Vignette';
	var $_PHPSHOP_FILES_FORM = 'Envoyer un fichier pour';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Fichier en cours';
	var $_PHPSHOP_FILES_FORM_FILE = 'Fichier';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Image';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Envoyer vers';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Chemin par défaut des Images Produit';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Spécifier l\'emplacement du fichier';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Chemin Téléchargement (ex. pour les ventes téléchargeables!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Auto-Création Vignette ?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Fichier est Publié ?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Titre Fichier (ce que le client voit)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Description Fichier';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL Fichier (optionnel)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Veuillez fournir un chemin valide !';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'L\'Image Vignette a été créée avec succès!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'IMPOSSIBLE de créer l\'Image Vignette !';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Erreur à l\'envoi Fichier/Image';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Impossible d\'effacer le fichier d\'Image Complète.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Image Complète effacée avec succès.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Impossible d\'effacer le fichier d\'Image Vignette (n\'existe peut être pas) : ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Image Vignette effacée avec succès.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Impossible d\'effacer le Fichier.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Fichier effacé avec succès.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Désolé, mais le fichier demandé n\'a pas été trouvé !';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Image non trouvée !';
	var $_PHPSHOP_COUPON_MOD = 'Chèque Boutique';
	var $_PHPSHOP_COUPONS = 'Chèques Boutique';
	var $_PHPSHOP_COUPON_LIST = 'Liste Chèques Boutique';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Le Chèque Boutique a déjà été dépensé.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Chèque Boutique dépensé ! Merci.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Si vous avez un code Chèque Boutique, veuillez le saisir ci-dessous :';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Soumettre';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Ce code Chèque Boutique existe déjà. Veuillez essayer de nouveau.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Mise à Jour Chèque Boutique';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Cliquer sur un code Chèque Boutique pour l\'éditer, ou pour supprimer un code Chèque Boutique, sélectionnez-le et cliquer sur Effacer :';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Code';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Pourcent ou Total';
	var $_PHPSHOP_COUPON_TYPE = 'Type Chèque Boutique';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Un Chèque Boutique Cadeau est effacé après avoir été utilisé comme remise sur une commande. Un Chèque Boutique permanent peut être utilisé à loisir par le client.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Chèque Boutique Cadeau';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Chèque Boutique Permanent';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Valeur';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Effacer Code';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Etes-vous sur(e) de vouloir effacer ce code chèque boutique ?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Veuillez compléter tous les champs.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'La valeur du Chèque Boutique doit être un nombre.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Nouveau Chèque Boutique';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Code Chèque Boutique';
	var $_PHPSHOP_COUPON_PERCENT = 'Pourcentage';
	var $_PHPSHOP_COUPON_TOTAL = 'Total';
	var $_PHPSHOP_COUPON_VALUE = 'Valeur';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Code Chèque Boutique sauvegardé.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Sauver Chèque Boutique';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Remise Chèque Boutique';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Code Chèque Boutique non trouvé. Veuillez essayer de nouveau.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Activer Utilisation Chèque Boutique';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Si vous activez l\'utilisation des Chèques Boutique, vous autorisez vos clients à utiliser des codes Chèque Boutique pour obtenir des remises sur leurs achats.';
	var $_PHPSHOP_FREE_SHIPPING = 'Franco de Port';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Cette Commande est Franco de Port !';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Montant Minimal pour un Franco de Port';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Le montant minimum - TAXES COMPRISES ! - réprésentant le minimum pour un franco de port
                                                (exemple : <strong>50</strong> indique que le client ne paiera pas de transport pour toute commande
                                                de 50 euros (taxes comprises) et plus.';
	var $_PHPSHOP_YOUR_STORE = 'Votre Boutique';
	var $_PHPSHOP_CONTROL_PANEL = 'Panneau de Contrôle';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'Bouton - PDF';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Affiche ou masque le bouton PDF sur la Vitrine de la Boutique';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Doit accepter les Conditions Générales de Vente pour CHAQUE COMMANDE ?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Cocher si vous voulez que chaque client soit obligé d\'accepter les Conditions Générales de Vente lors de CHAQUE COMMANDE (avant d\'émettre toute commande).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Type Compte Bancaire';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Compte Chèque';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Compte Chèque Entreprise';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Compte de Placement';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Facturations Récurentes ?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Définir si vous désirez des facturations qui se répètent périodiquement.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Erreur Interne au Traitement de la Demande de';
	var $_PHPSHOP_PAYMENT_ERROR = 'Echec dans le Traitement du Règlement';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Règlement Traité avec Succès';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS n\'a pas pu traiter la Demande de Coût de Livraison.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Jour(s) Garanti(s) pour la Livraison';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'Méthode d\'Enlèvement UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Comment confiez-vous vos colis à UPS ?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Emballage UPS ?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Sélectionnez le Type d\'Emballage par défaut.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Livraison Résidentielle ?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Résidentiel (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Livraison Commerciale (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Note pour Livraison Résidentielle (RES) ou pour Livraison Commerciale (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Frais de manutention';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Vos Frais de manutention pour cette méthode de livraison.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Classe de Taxes';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Utiliser la classe de taxes suivante sur les frais de transport.';
	var $_PHPSHOP_ERROR_CODE = 'Code Erreur';
	var $_PHPSHOP_ERROR_DESC = 'Description Erreur';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Afficher / Modifier la Clé de Transaction';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Afficher/Modifier les Mot de Passe/Clé de Transaction';
	var $_PHPSHOP_TYPE_PASSWORD = 'Veuillez saisir votre Mot de Passe Utilisateur';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Mot de Passe en cours';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Clé de Transaction en cours';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'La Clé de Transaction a été modifiée avec succès.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Demande/Capture Cryptograme Sécurité Carte de Crédit (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Demander la valeur CVV2/CVC2/CID valide (trois -ou quatre- chiffres à l\'arrière de la carte de crédit, sur l\'avant des Cartes American Express) ?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Veuillez saisir les trois -ou quatre- chiffres à l\'arrière de votre carte de crédit (sur l\'avant pour les Cartes American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Vous devez saisir le Cryptograme Sécurité Carte de Crédit avant de continuer.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'SOIT Saisir un Nom de Fichier';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'NOTE : Vous pouvez saisir un Nom de Fichier à cet endroit. <strong>Si vous saisissez un nom de fichier ici, aucun fichier ne sera envoyé !!! Vous devrez l\'envoyer à la main via FTP !</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'SOIT Envoyer un Nouveau Fichier';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Vous pouvez envoyer un fichier local. Ce fichier sera le produit que vous vendez. Tout fichier existant sera remplacé.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Saisir ici tout texte qui sera affiché au client sur la flypage produit.<br />ex. : 24 h, 48 heures, 3 à 5 jours, Sur Commande.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'OU sélectionner une Image à afficher sur la Page des Détails (flypage).<br />Les images se trouvent dans le répertoire <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Liste des Attributs';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemples pour le Formatage de la Liste des Attributs :</h4>
        <pre>Taille,XL[+1.99],M,S[-2.99];Couleur,Rouge,Vert,Jaune,CouleurPrécieuse[=24.00];Etc,..,..</pre>
        <h4>Inclusion d\'ajustements de prix à utiliser dans les modifications des Attributs Avancés :</h4>
        <span class=\'sectionname\'>
        <strong>+</strong> == Ajoute ce montant au prix fixé.<br />
        <strong>-</strong> == Soustrait ce montant au prix fixé.<br />
        <strong>=</strong> == Fixe le prix global du produit à ce montant.
      </span>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Liste des Attributs Personnalisés';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Exemples pour le Formatage de la Liste des Attributs Personnalisés :</h4>
        <pre>Nom;Options;...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Multisélection : utiliser la touche Ctrl + clic souris';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Activer paiement par eProcessingNetwork.com ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Utiliser eProcessingNetwork.com avec VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Mode test ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Sélectionner \'Oui\' durant les tests. Sélectionner \'Non\' pour autoriser les transactions réelles.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'ID Login eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'C\'est votre ID Login eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Clé de Transanction eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'C\'est votre Clé de Transanction eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Type Authentification';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'C\'est le Type d\'Authentification eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Produits Complémentaires';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Vous pouvez construire des Relations entre Produits en utilisant cette liste. Sélectionner simplement un ou plusieurs produit(s) à cet endroit et vous obtiendrez des <strong>Produits Complémentaires</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Vous pourriez être également interressé(e) par un de ces produits';
	var $_PHPSHOP_IMAGE_ACTION = 'Action Image';
	var $_PHPSHOP_NONE = 'aucune';
	var $_PHPSHOP_ORDER_HISTORY = 'Historique Commande';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Commentaire';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Commentaires sur votre Commande';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Inclure ce commentaire ?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Date Ajoutée';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Avertir Client ?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Statut de Commande Modifié';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Paramètres';
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
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Paramètres';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Information Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Publier ?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Page Parcourir Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Flypage Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Paramètres de Type Produit';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Information Paramètre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Type Produit non trouvé !';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Nom Paramètre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Ce nom sera le nom de la colonne de la table. Doit être unique et sans espace.<BR>Par exemple : materiel_principal';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Etiquette Paramètre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Description Paramètre';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Type Paramètre';
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
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Ligne Séparation';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Valeurs Multiples';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Valeurs Possibles';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Afficher Valeurs Possibles en sélection multiple ?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Si Valeurs Possibles est choisi, le Paramètre ne peut avoir seulement que ces valeurs. Exemple pour Valeurs Possibles :</strong><BR><span class="sectionname">Acier;Bois;Plastique;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Valeur par Défaut';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Comme Valeur par Défaut du Paramètre utiliser ce format :<ul><li>Date : AAAA-MM-JJ</li><li>Heure : HH:MM:SS</li><li>Date & Heure : AAAA-MM-JJ HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Unité';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Recherche Avancée avec sélection de critères de Recherche';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Paramètres de Recherche';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Voulez-vous trouver des produits en rapport avec leurs paramètres techniques ?<BR>Vous pouvez utiliser un formulaire adéquat :';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Désolé. Il n\'y a pas de catégorie à chercher.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Désolé.Il n\'y a pas de Produits avec ce nom.
';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Contient';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Ne Contient PAS';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Recherche Texte Entier';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Tout Sélectionner';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Quelques';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Effacer Formulaire';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Recherche dans une Catégorie';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Modifier les Paramètres';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Ordre Descendant';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Ordre Ascendant';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Paramètres de Catégorie';
	var $_PHPSHOP_FEE = 'Montant';
	var $_PHPSHOP_PRODUCT_CLONE = 'Cloner Produit';
	var $_PHPSHOP_CSV_SETTINGS = 'Paramètres';
	var $_PHPSHOP_CSV_DELIMITER = 'Délimiteur';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Caractère de Clôture Des champs';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Envoyer un Fichier CSV';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Soumettre un Fichier CSV';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Charger depuis un répertoire';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Charger un Fichier CSV depuis le Serveur';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Exporter vers un Fichier CSV';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Choisissez un Type de Classement des Champs';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Classement par Défaut';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Mon Classement personnalisé';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Exporter tous les Produits vers un Fichier CSV';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Configuration Import / Export CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Sauvegarder Changements';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Nom du hamp';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Valeur par défaut';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Classement du champ';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Champ Exigé ?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Importer/Exporter';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Ajouter un nouveau champ';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Documentation';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Désolé, mais le produit que vous avez demandé n\'a pas été trouvé !';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Afficher les Produits qui ne sont pas en stock';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Si activé, les Produits qui ne sont pas actuellement en Stock sont affichés. Autrement, ces Produits sont masqués.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Nombre de {unit}s dans l\'emballage';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Nombre de {unit}s dans le lot';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Ne pas afficher le nombre de produits en stock';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Caractéristiques & Remises des Produits';
	var $_PHPSHOP_FEATURED = 'Caractéristiques';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Retour vers le pays';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Retour vers le gestionnaire de fichier';
	var $_PHPSHOP_ADD_STATE = 'Ajouter un état';
	var $_PHPSHOP_LIST_STATES = 'Lister les états';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'caractéristiques ET réductions';
	var $_PHPSHOP_SHOW_FEATURED = 'caractéristiques des produits';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'remises sur les produits';
	var $_PHPSHOP_FILTER = 'Filtre';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Retour vers le Site Principal';
	var $_PHPSHOP_EXPAND_TREE = 'Agrandir l\'Arbre';
	var $_PHPSHOP_COLLAPSE_TREE = 'Réduire l\'Arbre';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Prix Réduit';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Soit vous précisez le type de remise (champ ci dessus), et le prix réduit est calculé automatiquement. Soit vous spécifiez dans ce champ un montant, la remise est alors calculée automatiquement, et la liste des remises est mise à jour .';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Prix à l\'Unité';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Boutique Hors Service?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Si la case est cochée, la Boutique affiche le Message Hors Service.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Message Hors Service';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Préfixe  des Tables de la Boutique';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'C\'est <strong>vm</strong> par défaut.';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Affiche la Navigation Par Page en haut de la liste des Produits?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Affichage ou non de la Navigation sur la Page situé en haut de la liste des Produits sur la Vitrine. ';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Affiche le  Nombre de Produits?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Affiche le nombre de Produits dans une Catégorie (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Style du bouton Ajouter au Panier';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Active la Création Automatique de Vignette?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Cocher pour la création automatique de vignette. Toutes les images Vignettes sont redimensionnées aux valeurs fournies ci dessous en utilisant les fonctions GD2 de PHP. (Pour vérifier si ces fonctions sont disponibles, aller dans le menu "Help//System/System Info" et chercher la fonction GD. La qualité des vignettes créées est meilleure que celle des vignettes redimensionnées automatiquement par le navigateur. Les nouvelles images créées sont stockées dans le répertoire /shop_image/product/resized. Si une vignette existe déjà, elle sera affichée. Il n\'y a pas de nouvelle création de vignette.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Largeur de la Vignette';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = '<strong>"Largeur"</strong> de la Vignette créée.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Hauteur de la vignette';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = '<strong>Hauteur</strong> de la Vignette créee.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Merci de sélectionner au moins une méthode d\'Expédition!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Configuration des Prix';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Choix du groupe pour l\'affichage des prix';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Les prix seront affichés pour les membres du groupe sélectionné et pour ceux ayant un droit d\'accès plus élevé.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Affiche "(Taxes XX% comprises)" quand possible?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Cocher si vous voulez que le texte "(Taxes XX% comprises)" soit affiché avec le prix.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Affiche le prix par emballage?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Cocher si le prix affiché est fonction du prix unitaire et du prix par emballage :<br /><strong>Prix Unitaire (10 pièces)</strong>.<br />Si la case n\'est pas cochée, le prix affiché est comme d\'habitude : <strong>Prix : xx.xx </strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Paramètres Principaux (suite)';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Paramètres Principaux';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Fonctionnalités de la Vitrine';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Configuration des Taxes';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Début Quantité';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Fin Quantité';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Paramètres d\'Enregistrement des Utilisateurs';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Enregistrement des utilisateurs autorisé?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Utiliser l\'activation des comptes?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Utiliser l\'inscription silencieuse (caché)?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Si activé, les clients n\'ont pas besoin de fournir un nom d\'utilisateur et mot de passe. A la place,  l\'adresse email est utilisé comme nouveau compte, et un mot de passe aléatoire est généré. Les détails de l\'inscription sont envoyés par mail au client.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Bonjour %s,
Merci de vous être enregistré(e) sur %s. Votre compte client a été créé.
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
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Sélectionner \'Yes\' pendant les phases de test. Sélectionner \'No\' pour activer les transactions réelles.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
	var $_VM_TAXDETAILS_LABEL = 'Le total des taxes contient';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Produit classé par défaut';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Défini par quel champ sont classé les produits par défaut sur la page de navigation';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Champs "Classé par" disponible';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Choisi les champs "Classé par" pour la page de navigation. Chacun défini une méthode de tri pour la page de navigation des produits. Si vous déselectionnez tout, les outils pour le classement et le tri ne seront pas affichés.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Afficher un rappel succint de vos "Conditions d\'annulation et de retour" sur le page de confirmation d\'une commande ?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'Dans la plupart des pays européen, les propriétaires de commerce ont l\'obligation d\'informer clairement leurs clients sur les conditions de retour et d\'annulation d\'une commande. Cette fonction devrait donc être activée dans la plupart des cas.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Mentions légales (version courte).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Ce texte explique succintement à vos clients vos conditions de retour et d\'annulation d\'une commande. Il est affiché sur la page de récapitulatif des informations de commande, juste avant le bouton "Confirmer la commande".';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Version détaillé des conditions d\'annulation et de retour(lié à un article).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Merci d\'ajouter un nouvel article sur les détails de vos conditions de retour et d\'annulation d\'une commande.
Après vous pourrez le sélectionner ici.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Conditions d\'annulation et de retour</h5>
Vous pouvez annuler cette commande jusqu\'à deux semaines après que nous l\'ayons reçu.
Vous avez deux semaines pour renvoyer un article neuf et encore emballé à partir du moment où vous l\'avez reçu. L\'article doit être renvoyé dans son emballage d\'origine.
Pour plus d\'information sur l\'annulation d\'une commande et le retour d\'un article, consultez <a href="%s" onclick="%s" target="_blank">Nos conditions d\'annulation et de retour</a> page.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Mode union européenne';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Les droits d\'accès du répertoire devant enregistrer les données de session ne permettent pas de le faire. Merci de corriger ces droits d\'accès ou contacter votre hébergeur.';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Les droits d\'accès du dossier %s ne permettent pas d\'y enregistrer les sessions. Merci de corriger ces droits d\'accès ! En attendant, virtuemart essaie d\'utiliser le dossier %s à la place.\'';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Votre navigateur n\'accepte pas les cookies. Si vous désirez ajouter des articles à votre panier et les acheter en ligne sur notre site, votre navigateur doit accepter les cookies de notre site.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Ne pas tenir compte de la première ligne';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Ne pas tenir compte des valeurs par défaut';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Ecraser les données existantes';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Inclure l\'en-tête des colonnes';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Paramètres d\'importation';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Champs disponibles';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'message d\'importation CSV :';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Count';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Total';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'Fichier CSV importé';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Mis à jour';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Supprimé';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Ajouté';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Passé';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Incorrecte';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Les champs suivant sont disponibles pour vos importations et vos exportations.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'Les champs obligatoires sont product_sku, product_name et category_path.<br /.>Seul product_sku doit être unique (référence d\'un produit), les autres champs peuvent être identique.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'Référence unique d\'un produit.<br /.>Valeur :<ul><li>Numérique</li><li>Lettre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'Le nom du produit.<br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'Le champ product_delete est particulier. Ce champ détermine si un produit pourra être supprimé ou pas.<br />Utilisation :<ol><li>Ajouter "product_delete" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y. Si le champ contient une autre valeur, le produit ne pourra pas être supprimé.</li></ol><br /.>Valeur :<ul><li>Y : Oui, le produit pourra être supprimé</li><li>N : Non, le produit ne pourra pas être supprimé.</li><li>Champ vide : Aucune valeur, le produit ne pourra pas être supprimé.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Description détaillé du produit.<br />Valeur :<ul><li>Texte : vous pouvez mettre du code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Description courte du produit.<br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'Défini si le produit dera publié ou pas.<br />Valeur :<ul><li>Y : oui, le produit est publié</li><li>N : Non, le produit n\'est pas publié</li><li>Champ vide : Aucune valeur, le produit est publié.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'Largeur du produit.<br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'Hauteur du produit.<br />Valeur :<ul><li>Numérique</li></ul>';
	var $PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'Longueur du produit.<br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'Date à partir de laquelle le produit est disponible. La date doit être sous la forme : jour/mois/années ou jour-mois-année. Sur les système d\exploitation windows, la date va jusqu\'en 19/01/2038.<br />Utilisation :<ol><li>Ajouter "product_available_date" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec une date. Si le champ contient autre chose qu\'une date, alors il sera ignoré.</li></ol><br />Valeur :<ul><li>Date : jour/mois/année ou jour-mois-année</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'Quantité en stock.<br /><br />Utilisation :<ol><li>Ajouter "product_in_stock" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec la quantité. Si le champ contient une valeur autre que numérique alors la valeur par défaut sera utilisée.</li></ol><br />Valeur :<ul><li>Nombre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'Les différentes options qu\'a un produit. Utiliser ceci pour donner à un même produit différentes spécifications. Par exemple pour un t-shirt dont vous vendez différents coloris et différentes tailles. Vous pouvez spécifier les différentes tailles et les couleurs comme ceci : Taille,XL[+1.99],M,S[-2.99];Couleur,Rouge,Vert,Jaune[=24.00];etc,..,..<br /><br />Vous pouvez ajuster le prix pour chaque attribut en utilisant les options suivantes :<ul><li>+ : ajoute le montant qui suit au prix par défaut du produit.</li><li>- : enlève le montant qui suit au prix par défaut du produit.</li><li>= : le montant qui suit remplace le prix par défaut du produit.</li></ul><br />Utilisation :<ol><li>Ajouter "attribute" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec les spécifications du produit.</li></ol><br /.>Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Affiche la disponibilité du produit. Cette valeur peut-être un texte ou un nom de fichier image. Si c\'est une image, elle doit être placée dans le dossier "shop_image/availability/".<br />Utilisation :<ol><li>Ajouter "product_availability" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'Le nom du fichier de l\'image du produit dans le dossier "shop_image/product/". Le nom de fichier peut aussi être une URL.<br />NOTE : Même si vous avez le redimensionnement automatique activé, il faut quand même une valeur dans ce champ : VirtueMart redimensionnera l\'image spécifié dans ce champ.<br/><br />Utilisation :<ol><li>Ajouter "product_full_image" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'Le nom du fichier de l\'image miniature (vignette) du produit dans le dossier "shop_image/product/resized/". Le nom de fichier peut aussi être une URL.<br />NOTE : Même si vous avez le redimensionnement automatique activé, il faut quand même une valeur dans ce champ : VirtueMart redimensionnera l\'image spécifié dans ce champ.<br /><br />Utilisation :<ol><li>Ajouter "product_thumb_image" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'Un attribut personnalisé ajoutera un champ à la page produit qui contiendra une description de l\'attribut fourni. Les attributs personnalisés sont spécifiés comme ceci : Noms;Extras;...<br />Utilisation :<ol><li>Ajouter "custom_attribute" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec le texte de l\'attribut.</li></ol><br /.>Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Spécifie le nombre d\'article dans l\'emballage.<br />Utilisation :<ol><li>Ajouter "product_packaging" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec le nombre d\'article dans l\'emballage.</li></ol><br /.>Valeur :<ul><li>Nombre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Spécifie le nombre d\'article dans le lot.<br />Utilisation :<ol><li>Ajouter "product_box" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter une colonne dans votre fichier CSV avec le nombre d\'article dans le lot.</li></ol><br /.>Valeur :<ul><li>Nombre</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Spécifie le montant ou le pourcentage de réduction qu\'a le produit. Aucun calcul n\'est effectué, la valeur entrée doit être exacte. C\'est la même chose que si vous créez une réduction depuis la liste de réduction de produit. Si la réduction existe déjà, elle ne sera pas ajoutée à la base de données mais le produit sera liée à la réduction existante. Pour déterminer si la réduction existe déjà, les valeurs suivantes doivent être exactement les mêmes :<ol><li>Montant (peut-être un total ou un pourcentage)</li><li>Date de début</li><li>Date de fin</li></ol>Ceci évite de remplir inutilement la base de donnée avec une quantité de chiffres concernant la même réduction.<br /><br />Utilisation :<ol><li>Ajouter "product_discount" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>En option : Ajouter "product_discount_date_start" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>En option : Ajouter "product_discount_date_end" dans la page de configuration. IMPORTANT : respecter bien l\'orthographe et la casse (minuscule).</li><li>Ajouter les colonnes choisis à votre fichier CSV avec les valeurs correspondantes.</li></ol><br /.>Valeur :<ul><li>product_discount</li><ul><li>Nombre<br />exemple : 10</li><li>Pourcentage : doit inclure le symbôle % <br />exemple : 10%</li></ul><li>product_discount_date_start</li><ul><li>Date : jour/mois/années ou jour-mois-année<br />Les jours et les mois peuvent être sous forme de 1 ou 2 chiffres.<br />Les années peuvent être sous forme de 2 ou 4 chiffres.</li></ul><li>product_discount_date_end</li><ul><li>Date : jour/mois/années ou jour-mois-année<br />Les jours et les mois peuvent être sous forme de 1 ou 2 chiffres.<br />Les années peuvent être sous forme de 2 ou 4 chiffres.</li></ul></ul>';
	
	var $_ITEM_PREVIOUS = 'précédent';
	var $_ITEM_NEXT = 'suivant';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Continuer';
	var $_CMN_CANCEL = 'Annuler';
	var $_BUTTON_SEND_REG = 'Send Registration';
	var $_CONTACT_FORM_NC = 'Merci de vérifier si le formulaire est correctement complété.';
	var $_CMN_REQUIRED = 'Obligatoire';
	var $_CMN_NEW = 'Nouveau';
	var $_CMN_SAVE = 'Enregistrer';
	var $_CMN_NEW_ITEM_LAST = 'New items default to the last place. Ordering can be changed after this item is saved.';
	var $_CMN_OPTIONAL = 'En option';
	var $_E_APPLY = 'Appliquer';
	var $_E_IMAGES = 'Images';
	var $_URL = 'URL :';
	var $_SEL_CATEGORY = 'Sélectionner une catégorie';
	var $_E_REMOVE = 'Enlever';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Page';
	var $_PN_OF = 'sur';
	var $_PN_START = 'Début';
	var $_PN_PREVIOUS = 'Précédent';
	var $_PN_NEXT = 'Suivant';
	var $_PN_END = 'Fin';
	var $_PN_DISPLAY_NR = 'Afficher #';
	var $_PN_RESULTS = 'Résultats';
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
	var $_SEND_SUB = 'Détail du compte de %s sur %s';
	var $_ASEND_MSG = 'Bonjour %s,
	
	Un nouvel utilisateur s\'est enregistré sur %s.
	Ce mail contient ses informations :
	
	Nom - %s
	e-mail - %s
	Identifiant - %s
	
	Merci de ne pas répondre à ce mail car il a été envoyé automatiquement à titre d\'information seulement.';
	var $_REG_COMPLETE = '<div class="componentheading">Enregistrement terminé !</div><br />Vous pouvez vous connecter à votre compte dès maintenant.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Enregistrement terminé !</div><br />Votre compte a été créé avec succès. Un mail contenant un lien d\'activation vous a été envoyé à l\'adresse que vous nous avez donné. Vous devez maintenant activer votre compte en cliquant sur le lien d\'activation contenu dans le mail que vous allez recevoir. Vous pourrez ensuite vous connecter à votre compte.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Dernière mise à jour';
	var $_NOT_AUTH = 'Vous n\'êtes pas autorisé à accéder à cette page.';
	var $_DO_LOGIN = 'Vous devez vous connecter.';
	var $_VALID_AZ09 = 'Merci de choisir un %s valide : pas d\'espaces, plus de 6 caractères parmis 0-9, a-z, A-Z.';
	var $_CMN_PUBLISHED = 'Publié';
	var $_CMN_UNPUBLISHED = 'Dépublié';
	var $_MORE = 'Plus...';
	var $_EMPTY_CATEGORY = 'Cette catégorie est actuellement vide.';
	var $_BUTTON_LOGOUT = 'Déconnection';
	var $_NO_ACCOUNT = 'Pas encore de compte ?';
	var $_CREATE_ACCOUNT = 'Créer un compte';
	var $_REGWARN_PASS = 'Merci de choisir un mot de passe valide : pas d\'espaces, plus de 6 caractères parmis 0-9, a-z, A-Z.';
	var $_REGWARN_VPASS1 = 'Merci de vérifier votre mot de passe.';
	var $_REGWARN_VPASS2 = 'Le mot de passe ne correspond pas, merci de recommencer.';
	var $_USEND_MSG_ACTIVATE = 'Bonjour %s,

Merci de vous êtes enregistré sur %s. Votre a été crée avec succès et doit maintenant être activer pour pouvoir l\'utiliser.
Pour activer votre compte, cliquez sur le lien suivant ou copier le dans votre navigateur :
%s

Après l\'activation vous pourrez vous connecter à %s en utilisant l\'identifiant et le mot de passe suivant :

Identifiant - %s
Mot de passe - %s';
	var $_USEND_MSG = 'Bonjour %s,

Merci pour votre enregistrement sur %s.

vous pouvez vous connecter à %s en utilisant l\'identifiant et le mot de passe avec lesquels vous vous êtes enregistré.';
	var $_PROMPT_PASSWORD = 'Mot de passe perdu ?';
	var $_HI = 'Hi';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Nouvel utilisateur';
	var $_NEW_USER_MESSAGE = 'Bonjour %s,


Un administrateur vous a créé un compte en tant qu\'utilisateur sur %s.

Ce mail contient votre identifiant et votre mot de passe pour vous connecter à votre compte sur %s

Identifiant - %s
Mot de passe - %s


Merci de ne pas répondre à ce mail car il a été envoyé automatiquement à titre d\'information seulement.';
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
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Utiliser les en-têtes des colonnes comme configuration';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Collecter les informations de debuggage';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'voir l\'aperçu';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Importation normal';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Importation de type de produit';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Importation de paramètres de type de produit';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Product type cross reference upload';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Importation de détail de type de produit';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Vider la base de données';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Continuer l\'importation';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Annuler l\'importation';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Etapes pour importer un fichier CSV</span>
										<ol>
										<li>Créer une liste de produit dans un fichier CSV avec des colonne avec ou sans en-tête .
										<br />Pour délimiter du texte, utiliser le symbôle ~ et pour délimiter les champs, utiliser le symbôle ^ .
										<br /><span style="font-weight: bold;">Exemple de fichier :</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5\~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>Paramétrer les champs dans la page de "Configuration" dans le même ordre que dans votre fichier CSV. Les champs doivent être exactement à la même place que dans le fichier CSV.
										<br />Exemple : product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">Les champs obligatoire pour ajouter un produit sont :</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> est le chemin vers la catégorie : les catégories sont séparées par le symbôle / et commence par la catégorie principale puis suivent les diverses sous-catégories. Exemple : <br />
										<div class="quote">category/sub-category_1/sub_category_2</div>
										<br />
										Lorsque le produit doit être assigné à plus d\'une catégorie, vous pouvez
										fournir toute les catégories,<br />
										délimité par le symbôle <span style="font-weight: bold;">|</span>
										<div class="quote">Category/Sub-category_1/Sub_category_2|Category2/Subcategory22|Category3/Subcategory33</div>
										</li>
										<li>Choisir les délimiteurs dans l\'onglet "Importer/Exporter".</li>
										<li>Choisir les paramètres d\'importation dans l\'onglet "Importer/Exporter".</li>
										<li>Choisir si le fichier est importé de votre ordinateur (Soumettre un Fichier CSV) ou depuis votre serveur (Charger un Fichier CSV depuis le Serveur).</li>
										<li>L\'importation démarre.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Type de produit</span><br /><br />
													Pour ajouter des types de produit, vous avez besoin de 4 fichiers CSV. Chaque fichier CSV représente une partie du type de produit.
													<ul>
													<li><span style="font-weight: bold;">Les types de produit</span><br />
													Ce fichier CSV contient les types de produit principaux et doit ressembler à ça :
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Music track</td><td>Track</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Album</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Artist</td><td>Y</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Paramètres des types de produit</span><br />
													Ce fichier CSV contient les paramètres par type de produit et doit ressembler à ça :
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Music artist</td><td>Name</td><td>Name</td><td>Artist Name</td><td>1</td><td>I</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music artist</td><td>Birth</td><td>Birth</td><td>Artist Birth</td><td>2</td><td>D</td><td>&nbsp;</td><td>N</td><td>&nbsp;</td><td>&nbsp;</td></tr>
													<tr><td>Music album</td><td>Duration</td><td>Duration</td><td>Duration of album</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>minutes</td></tr>
													</table>
													</div>
													<br />
													Les paramètres de type de produit peuvent avoir plusieurs valeurs, les voici :
													<ul>
													<li>I : Integer</li>
													<li>T : Text</li>
													<li>S : Short Text</li>
													<li>F : Float</li>
													<li>C : Char</li>
													<li>D : Date & heure</li>
													<li>M : Durée</li>
													<li>V : Multiple Values</li>
													<li>B : Break Line</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">Article par nom de type de produit</span><br />
													Ce fichier CSV contient les détails par type de produit et doit ressembler à ça :
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Music artist</td><td>Singing Star</td><td>1975</td></tr>
													<tr><td>5678</td><td>Music artist</td><td>Rocking Band</td><td>1980</td></tr>
													</table><br />
													Vous devez avoir des fichier CSV séparé par nom de type de produit. Ceci est du au fait que les noms de colonnes sont différents pour chaque fichier CSV à cause du réglage des paramètres de type de produit.
													</li><br />
													<li><span style="font-weight: bold;">Correspondance de la référence du type de produit avec la référence du produit (SKU)</span><br />
													Ce fichier CSV contient le lien entre un type de produit et un référence produit (SKU) et doit ressembler à ceci :
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>Music artist</td></tr>
													<tr><td>5678</td><td>Music artist</td></tr>
													</table>
													</li>
													</ul><br />
													Procédure :<br />
													<ol>
													<li>Importer un fichier CSV de type de produit</li>
													<li>Importer un fichier CSV de paramètres de type de produit</li>
													<li>Importer un fichier CSV de détails de type de produit</li>
													<li>Importer un fichier CSV de correspondance des références de type de produit</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Vider la base de données</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">A UTILISER AVEC PRECAUTION !!! PAS DE RETOUR EN ARRIERE POSSIBLE !!!</span><br /><br />
													 Vider la base de données enlèvera TOUTES les données des tables suivantes dans votre base de données  :
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
													 Tous les fabricants sont supprimés sauf le premier :
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 Les tables suivantes sont complétement supprimées :
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 Le x représente le numéro de la table. Ce numéro est lié aux différents types de produits qui étaient définis. Puisque la table des types de produit est complétement vide, ces tables sont supprimées. Importer de nouveau types de produit recréera les tables.<br /><br />
													 Procédure :
													 <ol>
													 <li>Choisir "Vider la base de données" dans le menu déroulant des paramètres d\'importation</li>
													 <li>Cocher "Collecter les informations de debuggage" si vous voulez des informations supplémentaires sur le résultats de la procédure</li>
													 <li>Cliquer sur "Soumettre un Fichier CSV" ou "Charger un Fichier CSV depuis le Serveur". Pas besoin de taper un nom de fichier.</li>
													 <li>Il vous est demandé si vous êtes sûr de vouloir vider votre base de données. cliquer sur OK si vous êtes sûr sinon cliquer sur Annuler</li>
													 <li>Suivant votre choix sur l\'écran précédant, soit la base de données sera vidé soit vous retournerez à la page principale</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Importation de prix multiple</span><br /><br />
														    Procédure :
														    <ol>
														    <li>Créer un fichier CSV qui contient les champs suivant :
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    Reportez vous à l\'onglet "Champs disponibles" pour savoir quelle genre d\'information peuvent contenir chacun de ces champs. Si vous voulez utiliser les en-têtes des colonnes comme configuration, remplissez la première ligne avec le nom des en-têtes des colonne.
														    </li>
														    <li>Paramétrer les champs dans l\'onglet "Configuration" comme mentionné au point 1 ou bien faites le en ajoutant le nom de ces champs dans les en-têtes de colonnes de votre fichier CSV et sélectionner dans ce cas "Utiliser les en-têtes des colonnes comme configuration" dans les paramétrages d\'importation.
														    </li>
														    <li>Sélectionner "Importation de prix multiple" dans les paramétrages d\'importation.</li>
														    <li>En option, choisissez "Voir un aperçu" et/ou "Collecter les informations de debuggage".</li>
														    <li>Sélectionner un fichier à importer depuis votre ordinateur ou à charger depuis un dossier sur votre serveur.</li>
														    <li>Sélectionner "Soumettre un Fichier CSV" ou "Charger un Fichier CSV depuis le Serveur" suivant si vous importez un fichier depuis votre ordinateur ou si vous le charger depuis un dossier sur votre serveur.</li>
														    <li>Les prix vont maintenant être importés.</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Supprimmer un prix</span><br />
														    Il est possible d\'utiliser l\'importation de prix multiple pour supprimer des prix. Un prix est supprimé lorsque les champs suivants correspondent aux données inscrites dans la base de données :
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'Prix du produit sans devise.<br /><br />Utilisation :<ol><li>Sélectionner "product_price" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec un prix.</li></ol><br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'Longueur du produit.<br /><br />Utilisation :<ol><li>Sélectionner "product_length" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur numérique.</li></ol><br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'Unité de la longueur, de la largeur et de la hauteur du produit.A vous de définir l\'unité qui vous convient (cm,m...).<br /><br />Utilisation :<ol><li>Sélectionner "product_lwh_uom" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'Le poids du produit.<br /><br />Utilisation :<ol><li>Sélectionner "product_weight" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur numérique.</li></ol><br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'Unité du poids du produit. A vous de définir l\'unité qui vous convient (g, kg...).<br /><br />Utilisation :<ol><li>Sélectionner "product_weight_uom" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Les attributs font partie intégrante d\'un produit et sont utilisés par les produits enfants pour leur apporter des spécifications.<br />Utilisation :<ol><li>Sélectionner "attributes" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV contenant les noms d\'attributs (texte).</li></ol><br />Valeur :<ul><li>Texte sans code html.<br />Les différentes valeurs d\'attributs seront séparées par le symbôle | . Exemple : attribute_name::list_order|attribute_name::list_order</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Les valeurs d\'attribut sont les valeurs des produits enfants qui sont liées aux attributs du produit parent.<br />Utilisation :<ol><li>Sélectionner "custom_attribute" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV contenant les attributs (texte).</li></ol><br />Valeur :<ul><li>Texte sans code html.<br />Les différentes valeurs d\'attributs seront séparées par le symbôle | .Exemple : attribute_name::attribute_value|attribute_name::attribute_value</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'Date à laquelle commence une promotion sur un produit. Pour plus d\'informations voir "product_discount".<br /><br />Utilisation :<ol><li>Sélectionner "product_discount_date_start" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne à votre fichier CSV avec la date.</li></ol><br />Valeur :<ul><li>product_discount_date_start</li><ul><li>Date : jour/mois/années ou jour-mois-année<br />Les jours et les mois peuvent être sous forme de 1 ou 2 chiffres.<br />Les années peuvent être sous forme de 2 ou 4 chiffres.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'Date à laquelle se termine une promotion sur un produit. Pour plus d\'informations voir "product_discount".<br /><br />Utilisation :<ol><li>Sélectionner "product_discount_date_end" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne à votre fichier CSV avec la date.</li></ol><br />Valeur :<ul><li>product_discount_date_end</li><ul><li>Date : jour/mois/années ou jour-mois-année<br />Les jours et les mois peuvent être sous forme de 1 ou 2 chiffres.<br />Les années peuvent être sous forme de 2 ou 4 chiffres.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Ne pas tenir compte de la première ligne</span><br />Si le fichir CSV commence par une ligne d\'en-tête, choisissez cette option pour ne pas prendre en compte cette ligne. Cela évitera que cette en-tête soit enregistrée dans votre base de données.</li><li><span style="font-weight: bold;">Ecraser les données existantes</span><br />Lors de l\'ajout de nouveau produit à votre base de données, décocher cette option évitera que des données existantes pour des produits déjà présents dans votre base de données soit remplacées. Par défaut, si cette option n\'est pas décoché, les données d\'un produit existant seront mises à jour.</li><li><span style="font-weight: bold;">Ne pas tenir compte des valeurs par défaut</span><br />Sur la page de configuration, une valeur par défaut peut-être spécifiée dans le cas où le champ est vide dans le fichier CSV. En activant cette option, l\'importation ne mettra pas à jour un champ vide dans le fichier CSV.</li><li><span style="font-weight: bold;">Importer seulement une liste de prix</span><br />L\'importation d\èune liste de prix est utilisée si vous souhaitez ne mettre à jour que les prix de vos produits avec votre fichier CSV. Votre fichier CSV ne contiendra donc plus que 2 colonne :<ol><li>product_sku</span></li><li>product_price</li></ol></li>Dans ce cas, les informations figurant la page de configuration ne seront pas prises en compte.<li><span style="font-weight: bold;">Utiliser les en-têtes des colonnes comme configuration</span><br />Si le fichier CSV a des en-têtes de colonnes sur sa première ligne, alors cette option vous permet d\'utiliser ces en-têtes comme configuration. Les en-têtes de colonnes doivent être valide : les en-têtes utilisable sont décrites dans l\'onglet "Champs disponibles". La configuration est créée à partir du fichier CSV, elle ne sera donc pas sauvegardée. Les valeurs par défaut ne peuvent pas être utilisées avec cette option.</li><li><span style="font-weight: bold;">Voir un aperçu</span><br />Affiche un aperçu de 5 lignes du fichier qui va être importé. L\'importation peut alors être annulée ou continuée.</li><li><span style="font-weight: bold;">Collecter les informations de debuggage</span><br />Dans le cas de problèmes, utiliser cette option pour voir ce qu\'il se passe pendant l\'importation. A la fin de l\importation un rapport sera généré contenant les étapes et les requêtes effectués pendant l\'importation.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'Le nom du fabricant qui est lié au produit. Il est utilisé en association avec l\'ID du fabricant. Si aucun ID n\'est spécifié, seul le nom sera pris en compte. Les nouveaux ID des fabricants seront créés par incrémentation. Le processus d\'ajout/mis à jour des fabricants suit cette structure :<ol><li>Le nom existe, l\'ID existe --> l\'ID est mis à jour s\'il est différent</li><li>Le nom existe, l\'ID n\'existe pas --> un nouveau fabricant est créé avec un nouvel ID</li><li>Le nom n\'existe pas, l\'ID existe --> Le nom est ajouté avec l\'ID existant</li><li>Le nom n\'existe pas, l\'ID n\'existe pas --> Il ne se passera rien</li></ol>Utilisation :<ol><li>Sélectionner "manufacturer_name" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec le nom du fabricant.</li></ol><br />Valeur :<ul><li>Texte sans code html.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'l\'ID d\'un fabricant qui est lié au produit et doit être unique. Il est utilisé en association avec le nom du fabricant. Si aucun nom de fabricant n\'est spécifié seul le lien du fabricant du produit sera ajouté/mis à jour. Ajouter/Mettre à jours les fabricants suit le processus suivant :<ol><li>Le nom existe, l\'ID existe --> l\'ID est mis à jour s\'il est différent</li><li>Le nom existe, l\'ID n\'existe pas --> un nouveau fabricant est créé avec un nouvel ID</li><li>Le nom n\'existe pas, l\'ID existe --> Le nom est ajouté avec l\'ID existant</li><li>Le nom n\'existe pas, l\'ID n\'existe pas --> Il ne se passera rien</li></ol>Lorsqu\'aucun nom ou ID de fabricant existent, rien ne peut empêcher d\'ajouter des noms de fabricants.<br /><br />Utilisation :<ol><li>Sélectionner "manufacturer_id" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec l\'ID du fabricant.</li></ol><br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'L\'URL vers une image ou une page web du produit. Quand le produit est lié à une image, celle-ci sera affichée dans la description du produit.<br /><br />Utilisation :<ol><li>Sélectionner "product_url" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'Le nombre de produits qui ont été vendus.<br /><br />Utilisation :<ol><li>Sélectionner "product_sales" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur numérique.</li></ol><br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'Lorsqu\'un produit est paramétré comme "Prix Spécial" il sera visible dans le module "featured product" si activé.<br />Utilisation :<ol><li>Sélectionner "product_special" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y.</li></ol><br />Valeur :<ul><li>Y : Oui, le produit a un "Prix Spécial"</li><li>N : Non, le produit n\'a pas de "Prix Spécial"</li><li>Champ vide : Aucune valeur, le produit n\'a pas de "Prix Spécial"</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'L\'unité de vente du produit. I.e. boîte, sac, etc.<br />Utilisation :<ol><li>Sélectionner "product_unit" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV  pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Les produits parent sont classés selon leur catégorie. Permet de spécifier à quelle catégorie appartient le produit. Cela n\'est pris en compte que pour les produits parents, pas pour les produits enfants puisque ceux-ci sont rattachés à leur parent, et pas à une catégorie. Pour les produits enfants, ce champ doit être laissé vide. Le champ product_parent_sku doit resté vide pour les produits principaux puisqu\'ils ne sont liés à aucun autre produit parent.<br /><br />Utilisation :<ol><li>Sélectionner "category_path" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec le chemin.</li></ol><br />Valeur :<ul><li>Texte sans code html<br />Le chemin vers une catégorie doit être séparé par le symbôle / . Exemple : Furniture/Chairs/Teak</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'La référence du produit parent est nécessaire pour identifier le produit parent d\'un produit enfant. NOTE : le champ "category_path" DOIT ETRE VIDE sinon le produit sera considéré comme produit parent.<br />Utilisation :<ol><li>Sélectionner "category_path" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur product_sku du produit parent.</li></ol><br />Valeur :<ul><li>Numérique</li><li>Lettres</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'L\'ID du taux de taxe que vous désirez appliquer au produit<br />Utilisation :<ol><li>Sélectionner "product_tax_id" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur product_tax_id de la taxe appropriée.</li></ol><br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'Une devise différente peut-être spécifiée par produit.<br />Utilisation :<ol><li>Sélectionner "product_currency" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur de la nouvelle devise.</li></ol><br />Valeur :<ul><li>Texte sans code html<br />Exemple : EUR, USD,...</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'Page personnalisée pour l\'affichage des types de produit. Laisser VIDE si vous n\'avez pas de fichier php individuel pour cet affichage.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_browsepage" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'Description de votre type de produit.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_description" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte pouvant contenir du code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'Page personnalisée pour l\'affichage des types de produit. Laisser VIDE si vous n\'avez pas de fichier php individuel pour cet affichage.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_flypage" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Text :<ul><li>Pas de code html</li><li>URL prise en compte.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'Le nom du type de produit. Ce nom doit être unique et sans espaces.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_name" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'Valeur par défaut à afficher lorsque rien n\'est rempli  pour ce paramètre.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_default" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'Une description pour votre paramètre de type de produit.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_description" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte pouvant contenir du code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'Le nom de votre paramètre.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_label" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Spécifie dans quel ordre les paramètres du produits sont affichés.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_list_order" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec un nombre.</li></ol><br />Valeur :<ul><li>Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Mettre à oui pour montrer les valeurs possibles lors de sélections multiples<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_list_multiselect" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y or N.</li></ol><br />Valeur :<ul><li>Y : Oui, les valeurs peuvent avoir des choix multiples</li><li>N : Non, les valeurs n\'ont pas de choix multiple</li><li>Champ vide : Aucune valeur, the values are not multi select</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'Le nom du paramètre du type de produit. Ce nom doit être unique et sans espaces puisqu\'il sera le nom de la colonne pour les détails du paramètre.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_type" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'Définit le type de paramètre qui sera utilisé. Il y a énormément de valeurs différentes qui peuvent être utilisées.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_type" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur.</li></ol><br />Valeur :<ul><li>Texte :<ul>
													<li>I: Integer</li>
													<li>T: Text</li>
													<li>S: Short Text</li>
													<li>F: Float</li>
													<li>C: Char</li>
													<li>D: Date & Heure</li>
													<li>M: Durée</li>
													<li>V: Multiple Values</li>
													<li>B: Break Line</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'L\'unité du paramètre choisi.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_unit" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Texte sans code html</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'Ce sont les valeurs du paramètre, elle doivent êtres en adéquation avec le type de paramètre choisi.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_parameter_values" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>This depends on the type set in the product_type_parameter_type field. All values have to be semi-colon (;) seperated.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'Définit si le type de produit sera publié ou pas.<br /><br />Utilisation :<ol><li>Sélectionner "product_type_publish" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV pouvant contenir du texte.</li></ol><br />Valeur :<ul><li>Y : Oui, le type de produit sera publié</li><li>N : Non, le type de produit ne sera pas publié</li><li>Champ vide : Aucune valeur, le type de produit sera publié.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'Le champ price_delete est particulier. Ce champ est utilisé pour déterminer si le prix d\'un produit pourra être supprimé ou pas. Ce champ est utilisé lorsqu\'on importe plusieurs prix (prix multiple). Pour que le prix puisse être effacé, les champs suivants doivent être identiques :<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Utilisation :<ol><li>Sélectionner "price_delete" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec la valeur Y. Si le champ contient une autre valeur, le produit ne sera pas supprimé.</li></ol><br />Valeur :<ul><li>Y : Oui, le prix pourra être supprimé</li><li>N : Non, le prix ne pourra pas être supprimé</li><li>Champ vide : Aucune valeur, le prix ne pourra pas être supprimé</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'La quantité est disponible au prix mentionné.<br /><br />Utilisation :<ol><li>Sélectionner "price_quantity_start" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur numérique.</li></ol><br />Valeur : Numérique</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'La quantité n\'est pas disponible au prix mentionné.<br /><br />Utilisation :<ol><li>Sélectionner "price_quantity_end" dans le menu déroulant de la page de configuration.</li><li>Ajouter une colonne dans votre fichier CSV avec une valeur numérique.</li></ol><br />Valeur : Numérique</li></ul>';
        
}
class phpShopLanguage extends vmLanguage { }
/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>