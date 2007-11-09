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
	var $_PHPSHOP_MENU = 'Меню';
	var $_PHPSHOP_CATEGORY = 'Категория';
	var $_PHPSHOP_CATEGORIES = 'Категории';
	var $_PHPSHOP_SELECT_CATEGORY = 'Изберете категория:';
	var $_PHPSHOP_ADMIN = 'Администрация';
	var $_PHPSHOP_PRODUCT = 'Продукт';
	var $_PHPSHOP_LIST = 'Списък';
	var $_PHPSHOP_ALL = 'Всички';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Списък на продуктите';
	var $_PHPSHOP_VIEW = 'Виж';
	var $_PHPSHOP_SHOW = 'Покажи';
	var $_PHPSHOP_ADD = 'Добави';
	var $_PHPSHOP_UPDATE = 'Обнови';
	var $_PHPSHOP_DELETE = 'Изтрий';
	var $_PHPSHOP_SELECT = 'Избери';
	var $_PHPSHOP_SUBMIT = 'Потвърди';
	var $_PHPSHOP_RANDOM = 'Случайни продукти';
	var $_PHPSHOP_LATEST = 'Последни продукти';
	var $_PHPSHOP_HOME_TITLE = 'Начало';
	var $_PHPSHOP_CART_TITLE = 'Кошница';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Плащане';
	var $_PHPSHOP_LOGIN_TITLE = 'Вход';
	var $_PHPSHOP_LOGOUT_TITLE = 'Изход';
	var $_PHPSHOP_BROWSE_TITLE = 'Каталог';
	var $_PHPSHOP_SEARCH_TITLE = 'Търси';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Лични данни';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Навигация';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Отдел';
	var $_PHPSHOP_INFO = 'Информация';
	var $_PHPSHOP_BROWSE_LBL = 'Разгледай';
	var $_PHPSHOP_PRODUCTS_LBL = 'Продукта';
	var $_PHPSHOP_PRODUCT_LBL = 'Продукт';
	var $_PHPSHOP_SEARCH_LBL = 'Търсене';
	var $_PHPSHOP_FLYPAGE_LBL = 'Информация за продукта';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Търси продукти';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Наименование';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Категория продукти';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Описание';
	var $_PHPSHOP_CART_SHOW = 'Виж кошницата';
	var $_PHPSHOP_CART_ADD_TO = 'Купи';
	var $_PHPSHOP_CART_NAME = 'Име';
	var $_PHPSHOP_CART_SKU = 'КОД';
	var $_PHPSHOP_CART_PRICE = 'Цена';
	var $_PHPSHOP_CART_QUANTITY = 'Количество';
	var $_PHPSHOP_CART_SUBTOTAL = 'Общо';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Добавете';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'адрес за доставка';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Не са намерени продукти с търсената от вас дума!<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Цена: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Купи';
	var $_PHPSHOP_NO_CUSTOMER = 'Ако още не сте регистриран потребител. Моля въведете информацията за себе си.';
	var $_PHPSHOP_DELETE_MSG = 'Сигурен ли сте, че желаете да изтриете този запис?';
	var $_PHPSHOP_THANKYOU = 'Благодарим Ви за поръчката.';
	var $_PHPSHOP_NOT_SHIPPED = 'Още не е доставено';
	var $_PHPSHOP_EMAIL_SENDTO = 'Необходимо е потвърждение, което можете да направите чрез изпратеното от системата писмо на Вашия е-мейл адрес';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Няма потребител в сайта, който може да бъде добавен към магазина.';
	var $_PHPSHOP_ERROR = 'ГРЕШКА';
	var $_PHPSHOP_MOD_NOT_REG = 'Модула не е регистриран.';
	var $_PHPSHOP_MOD_ISNO_REG = 'това не е валиден модул.';
	var $_PHPSHOP_MOD_NO_AUTH = 'Вие нямате права за този модул.';
	var $_PHPSHOP_PAGE_404_1 = 'Страницата не съществува';
	var $_PHPSHOP_PAGE_404_2 = 'Търсеният файл не съществува. Не може да бъде открит файл:';
	var $_PHPSHOP_PAGE_403 = 'Нямате достатъчно права';
	var $_PHPSHOP_FUNC_NO_EXEC = 'Вие нямате права за да изпълните ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Функцията не е регистрирана';
	var $_PHPSHOP_FUNC_ISNO_REG = ' не е валидна функция.';
	var $_PHPSHOP_ADMIN_MOD = 'Администриране';
	var $_PHPSHOP_USER_LIST_MNU = 'Списък на потребители';
	var $_PHPSHOP_USER_LIST_LBL = 'Списък на потребители';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Потребителско име';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Пълно име';
	var $_PHPSHOP_USER_LIST_GROUP = 'Група';
	var $_PHPSHOP_USER_FORM_MNU = 'Добави потребител';
	var $_PHPSHOP_USER_FORM_LBL = 'Добави / Обнови  информацията за потребителя';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Информация за потребителя';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Адреси за доставка';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Добави адрес';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Няма адреси за доставка.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Кратък адрес';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Име';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Презиме';
	var $_PHPSHOP_USER_FORM_TITLE = 'Вие сте';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Име';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Парола';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Потвърди паролата';
	var $_PHPSHOP_USER_FORM_PERMS = 'Права за достъп';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Клиентски номер / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Име на компанията';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Адрес';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Град';
	var $_PHPSHOP_USER_FORM_STATE = 'Регион';
	var $_PHPSHOP_USER_FORM_ZIP = 'Пощенски код';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Държава';
	var $_PHPSHOP_USER_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Мобилен телефон';
	var $_PHPSHOP_USER_FORM_FAX = 'Факс';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Е-мейл';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Списък на модулите';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Списък на модулите';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Име на модула';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Права върху модула';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Функции';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Подредба';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Добави модул';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Информация за модула';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Етикет на модула (за горното меню)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Име на модула';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Права върху модула';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Хедър на модула';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Футър на модула';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Да показва ли модулите в административното менюто?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Покажи поръчката';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Описание на модула';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Код на езика';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Езиков файл';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Списък на функциите';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Списък на функциита';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Име на функцията';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Име на клас';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Метод на класа';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Права';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Добави функция';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Информация за функцията';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Име на функцията';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Име на класа';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Метод на класа';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Права на функцията';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Описание на функцията';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Списък на валутите';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Валути';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Добави валута';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Име на валутата';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Код на валутата';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Списък на държавите';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Списък на държавите';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Добави държава';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Име на държавата';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Код на държавата(3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Код на държавата(2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Покажи регионите';
	var $_PHPSHOP_STATE_LIST_LBL = 'Покажи регионите за: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Добавяне/Обновяване на регион';
	var $_PHPSHOP_STATE_LIST_NAME = 'Име на региона';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Код на региона (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Код на региона (2)';
	var $_PHPSHOP_ADDRESS = 'Адрес ';
	var $_PHPSHOP_CONTINUE = 'Продължете';
	var $_PHPSHOP_EMPTY_CART = 'Нямате поръчани продукти.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'Вносител';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Пинг към сървъра на вносителя';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Пинг към сървъра на вносителя';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Грешка в пинга';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Пинга е успешен';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Куриер';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Отговор<br />Време';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'сек.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Списък на методите за доставка';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Активни методи за доставка';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Методи на доставка';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Активен';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Такса за доставка';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Време за доставка';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'Пропорционален';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'Процент';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'Дни';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Тежки товари';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Конфигуриране на методите за доставка';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Добави метод за доставка';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Настройка на метода за доставка';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Обновяване';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Начин на доставка';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Активирай!';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Транспортна такса';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Време за доставка';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'Пропорционален';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'Процент';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'Дни';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Тежки товари';
	var $_PHPSHOP_ORDER_MOD = 'Поръчки';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Потвърди поръчката';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Откажи поръчката';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Принтирай поръчката';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Изтрий поръчката';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Списък с поръчките';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Списък с поръчките';
	var $_PHPSHOP_ORDER_LIST_ID = 'Номер на поръчката';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Дата на поръчката';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Последна промяна';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Статус';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Общо';
	var $_PHPSHOP_ORDER_ITEM = 'Артикули в поръчката';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Поръчка за покупка';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Номер на поръчката';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Дата на поръчката';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Статус на поръчката';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Информация за потребителя';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Информация за плащането';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Информация за доставката';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Да се заплати от';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Да се достави на';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Име';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Компания';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Адрес';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Град';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Регион';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Пощенски код';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Държава';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Телефон';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Факс';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Е-мейл';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Поръчани стоки';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Количество';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Количество';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'КОД';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Цена';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Общо';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Общо';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'ДДС';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Цена за доставка';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Такса за доставка';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Метод за плащане';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Име на сметка';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Номер на сметка';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Изтича на дата';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'Дневник на плащане';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Информация за доставката';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Информация за плащането';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Куриер';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Метод на доставка';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Дата на доставка';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Цена на доставка';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Списък на статусите';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Добави статус';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Код за статус на поръчка';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Име за статус на поръчка';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Статус на поръчка';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Код за статус на поръчка';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Име за статус на поръчка';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Списък с поръчки';
	var $_PHPSHOP_PRODUCT_MOD = 'Продукти';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Публикуван продукт';
	var $_PHPSHOP_CURRENT_ITEM = 'Публикуван артикул';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Налични продукти';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Покажи наличностите';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Цена';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Брой';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Тегло';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Списък с продуктите';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Списък с продуктите';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Име на продукта';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'КОД';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Публикувай';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Търси продукт';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'променен';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'с променена цена';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'без цена';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'След';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Преди';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Добави продукт';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Редактирай продукта';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Преглед на продуктите в магазина';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Добави';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Добави още';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Нов продукт';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Обнови продукта';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Информация за продукта';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Статус на продуката';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Размери на продукта и тегло';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Снимки на продукта';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Артикул';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Обновен артикул';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Информация за артикула';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Статус на артикула';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Рамери и тегло на артикула';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Снимки на артикула';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Връщане към предишен продукт';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'За актуализиране на снимката, напишете пътя до новата.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Изтрий сегашната снимка.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Артикули от продукта';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Атрибути на продукта';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Сигурен ли сте, че желаете да изтриете този продукт\\и продуктите свързани с него?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Сигурен ли сте, че желаете да изтриете този артикул?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Доставчик';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Производител';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'КОД';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Име';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'Адрес';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Категория';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Цена (с ДДС)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Цена (без ДДС)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Описание на продукта';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Кратко описание';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'На склад';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'Поръчан';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Дата на наличност';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Специално';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Вид отстъпка';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Публикувай?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Дължина';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Височина';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Ширина';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Мерни единици';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Тегло';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Мерни единици';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Малка снимка';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Голяма снимка';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'килограма';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'сантиметра';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Брой';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'парче';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Брой в пакет';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Тук можете да попълните броя на единиците в пакет. (максимум 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Парчета в кашон';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Тук можете да попълните броя на единиците в кашон. (максимум 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Продукти и резултати';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Обновяване на резултатите за продукти';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Артикули и резултати';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Обновяване на резултатите за артикули';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Използвай CSV качване';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Карта на продуктите';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Списък на категориите';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Категории';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Добави категория';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Информация за категорията';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Име на категорията';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Подкатегория на';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Описание на категорията';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Публикувай?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Страница на категориите';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Списък с атрибутите';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Списък с атрибутите на';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Име на атрибута';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Списък с поръчки';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Атрибут';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Форма на атрибута';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Нов атрибут на продукта';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Обнови атрибут на продукт';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Нов атрибут на артикул';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Обновяване на атрибутите на артикул';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Име на атрибута';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Списък с поръчките';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Цени';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Ценова листа';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Цена за';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Име на групата';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Цена';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Валута';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Добави цена';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Информация за цената';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Нова цена за продукт';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Обнови на цена за продукта';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Нова цена за артикул';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Обнови цена за артикул';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Цена';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Валута';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Група клиенти';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Отчети';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Индивиуален продуктов списък';
	var $_PHPSHOP_RB_SALE_TITLE = 'Доклад за покупките';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Активност на продажбите';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Времеви период';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Месечно';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Седмично';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Дневно';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Този месец';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Последния месец';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Последните 60 дни';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Последните 90 дни';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Начална дата';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Крайна дата';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Покажи избрания период';
	var $_PHPSHOP_RB_REPORT_FOR = 'Доклад за ';
	var $_PHPSHOP_RB_DATE = 'Дата';
	var $_PHPSHOP_RB_ORDERS = 'Поръчки';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Общо продадени артикули';
	var $_PHPSHOP_RB_REVENUE = 'Приход';
	var $_PHPSHOP_RB_PRODLIST = 'Списък на продуктите';
	var $_PHPSHOP_SHOP_MOD = 'Магазин';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Снимка';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Цена';
	var $_PHPSHOP_ORDER_STATUS_P = 'Чакащ одобрение';
	var $_PHPSHOP_ORDER_STATUS_C = 'Потвърдена';
	var $_PHPSHOP_ORDER_STATUS_X = 'Отказана';
	var $_PHPSHOP_ORDER_BUTTON = 'Поръчка';
	var $_PHPSHOP_SHOPPER_MOD = 'Клиенти';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Списък на клиентите';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Списък на клиентите';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Потребителско име';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Пълно име';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Група';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Добави клиент';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Информация за клиента';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Информация за плащане';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Инфорамция';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Информация за доставките';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Добави адрес';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Съкратен адрес';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Потребителско име';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Първо име';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Презиме';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Вие сте';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Потребителско име';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Парола';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Потвърди паролата';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Група';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Име на компанията';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Адрес';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Град';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Регион';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Пощенски код';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Държава';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Мобилен телефон';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Факс';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Е-мейл';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Да';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Не';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'ААА';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'БББ';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'ВВВ';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Групи клиенти';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Групи клиенти';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Име на групата';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Описание на групата';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Добавяне на група клиенти';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Добави група клиенти';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Име на групата';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Описание на групата';
	var $_PHPSHOP_STORE_MOD = 'Магазин';
	var $_PHPSHOP_STORE_FORM_MNU = 'Редакция на магазина';
	var $_PHPSHOP_STORE_FORM_LBL = 'Информация за магазина';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Контактна информация';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Пълна снимка';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Изпрати снимка';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Име на магазина';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Име на компанията';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Адрес';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Град';
	var $_PHPSHOP_STORE_FORM_STATE = 'Регион';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Държава';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Пощенски код';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Валута';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Категория на магазина';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Име';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Презиме';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Вие сте';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Телефон';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Телефон 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Факс';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Е-мейл';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Път до снимката';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_PAYMENT = 'Метод за плащане';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Методи за плащане';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Списък с методите за плащане';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Име';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Код';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Отстъпка';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Група клиенти';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Метод за плащане';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Добавете метод за плащане';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Форма на метода за плащане';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Име на метода за плащане';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Група клиенти';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Отстъпка';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Код';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Списък с поръчките';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Видове методи за плащане';
	var $_PHPSHOP_TAX_MOD = 'Данъци';
	var $_PHPSHOP_TAX_RATE = 'Данъчни ставки';
	var $_PHPSHOP_TAX_LIST_MNU = 'Списък с данъците';
	var $_PHPSHOP_TAX_LIST_LBL = 'Списък с данъците';
	var $_PHPSHOP_TAX_LIST_STATE = 'Данъци по региони';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Данъци по държави';
	var $_PHPSHOP_TAX_LIST_RATE = 'Данъчна ставка';
	var $_PHPSHOP_TAX_FORM_MNU = 'Добави данъчна ставка';
	var $_PHPSHOP_TAX_FORM_LBL = 'Добави данъчна информация';
	var $_PHPSHOP_TAX_FORM_STATE = 'Данъчен регион';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Данъчна държава';
	var $_PHPSHOP_TAX_FORM_RATE = 'Данъчна ставка (за 16% => попълнете 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Доставчици';
	var $_PHPSHOP_VENDOR_ADMIN = 'Доставчици';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Списък на доставчиците';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Списък на доставчиците';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Име на доставчика';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Администратор';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Добави доставчик';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Добави информация';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Информация за доставчика';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Контактна информация';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Голяма снимка';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Качи снимка';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Име на магазина на доставчика';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Име на компанията';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Адрес';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Град';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Регион';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Държава';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Пощенски код';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Валута';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Категория доставчици';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Име';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Презиме';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Вие сте';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Телефон';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Телефон 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Факс';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Е-мейл';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Пътя до сниката';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Списък с категориите доставчици';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Списък с категориите доставчици';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Име на категорията';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Описание на категорията';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Доставчици';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Добави категория доставчици';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Форма на категорията доставчици';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Информация за категорията';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Име на категорията';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Описание на категорията';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Производители';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Производители';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Списък на производителите';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Списък на производителите';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Име';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Администратор';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Добави производител';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Добави информация';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Информация за производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Име на призводителя';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Категория на производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Е-мейл';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Връзка към страницата на производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Списък на категориите';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Категории производители';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Име на категорията';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Описание на категорията';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Производители';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Добави категория';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Форма на категорията производители';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Информация за категорията';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Име на категорията';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Описание на категорията';
	var $_PHPSHOP_HELP_MOD = 'Помощ';
	var $_PHPSHOP_CART_ACTION = 'Обновяване';
	var $_PHPSHOP_CART_UPDATE = 'Обновяване на количеството в кошницата';
	var $_PHPSHOP_CART_DELETE = 'Изтрийте продукт от кошницата';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Цена';
	var $_PHPSHOP_PRODUCT_CALL = 'Изпратете е-мейл с запитване за цена';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Предишен';
	var $_PHPSHOP_PRODUCT_NEXT = 'Следващ';
	var $_PHPSHOP_CART_TAX = 'Данък';
	var $_PHPSHOP_CART_SHIPPING = 'Цена за доставката';
	var $_PHPSHOP_CART_TOTAL = 'Крайна сума';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Следващ';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Регистриране';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Информация за плащане';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Компания';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Име';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Адрес';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Телефон';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Факс';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Е-мейл';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Информация за доставка';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Компания';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Име (МОЛ)';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Адрес';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Телефон';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Факс';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Информация за плащането';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Име върху картата';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Метод на плащане';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Номер на кредитната карта';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Валидна до';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Завърши поръчката';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Тази информация се изисква, когато е избрано плащане чрез кредитна карта';
	var $_PHPSHOP_ZONE_MOD = 'Доставка по зони';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Списък на зоните';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Добави зона';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Задай зони';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Държава';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Настояща зона';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Добавяне към зона';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Обновяване';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Зададени зони';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Име на зоната';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Описание на зоната';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Надбавка на артикул за зоната';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Ценови лимит за зоната';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Списък на зоните';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Име на зоната';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Описание на зоната';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Надбавка на артикул за зоната';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Ценови лимит за зоната';
	var $_PHPSHOP_LOGIN_FIRST = 'Моля, първо се идентифицирайте или се регистрирайте за този сайт. Благодаря Ви!';
	var $_PHPSHOP_STORE_FORM_TOS = 'Условия за ползване';
	var $_PHPSHOP_AGREE_TO_TOS = 'Моля, първо приемете условията за ползване.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Приемам условията';
	var $_PHPSHOP_LEAVE_BLANK = '(Оставете го празно ако <br />нямате индивидуален php-файл за него!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Регистрирани потребители: Моля идентифицирайте се';
	var $_PHPSHOP_NEW_CUSTOMER = 'Нов потребител? Моля регистрирайте се';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Информация за клиент:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Информация за поръчките';
	var $_PHPSHOP_ACC_UPD_BILL = 'Тук можете да редактирате вашата лична информация.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Тук можете да добавяте и редактирате адреси за доставка.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Информация за потребителя';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Информация за доставка';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Няма поръчки които да бъдат показани';
	var $_PHPSHOP_ACC_BILL_DEF = 'По подразбиране (Същата като информацията за плащане)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Можете да добавите адрес за доставка към вашата информация. Моля попълнете име за контакт и адрес за доставка.';
	var $_PHPSHOP_CONFIG = 'Настройки';
	var $_PHPSHOP_USERS = 'Потребители';
	var $_PHPSHOP_IS_CC_PAYMENT = 'е плащане с кредитна карта?';
	var $_PHPSHOP_SHIPPING_MOD = 'Доставки';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Доставка';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Куриер';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Списък с куриери';
	var $_PHPSHOP_RATE_LIST_MNU = 'Такси за доставка';
	var $_PHPSHOP_RATE_LIST_LBL = 'Списък с таксите за доставка';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Име';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Подредба';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Добави куриер';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Редактирай / Добави куриер';
	var $_PHPSHOP_RATE_FORM_MNU = 'Добави такса за доставка';
	var $_PHPSHOP_RATE_FORM_LBL = 'Добави / Редактирай такси за доставка';
	var $_PHPSHOP_RATE_FORM_NAME = 'Описание на таксата за доставка';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Куриер';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Държава';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Пощенски код започващ от';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Пощенски код завършващ до';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Минимално тегло';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Максимално тегло';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Цена';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Вашата отстъпка за количество';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Валута';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'ДДС';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Списък с поръчките';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Куриер';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Описание на видовете доставка';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Тегло от ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... до';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Куриер';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Списък';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'Грешка: Индетификатора на куриера съществува.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'Грешка: Изберете куриер.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'Грешка: Съществува поне една такса за доставка, изтрийте ставките преди добавяне.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'Грешка: Не мога да намеря куриер с този номер.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'Грешка: Изберете куриер.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'Грешка: Не мога да намеря куриер с този номер.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'Грешка: Липсва описание на таксата.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'Грешка: Държавата за доставка е невалидна. За повече от една страна ползвайте разделител \';\'.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'Грешка: Изисква се минимално тегло';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'Грешка: Изисква се максимално тегло';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'Грешка: Минималното тегло не може да е по голямо от максималното тегло';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'Грешка: Таксата за доставка е задължителна';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'Грешка: Изберете валута';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'Грешка: Попълнете такса за доставка';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Моля изберете';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Куриер';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Такса за доставка';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Цена';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-без ДДС-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Кредитна карта';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Използвай процесор за плащане';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Банкова сметка';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Само на адрес / Плащане при доставката';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Моля изберете адрес за доставка!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Моля изберете метод на доставка!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Моля изберете метод за плащане!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Моля проверете данните и потвърдете поръчката!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Моля изберете метод на доставка.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Моля изберете друг метод на доставка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Моля изберете методна плащане.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Моля въведете номера на своята кредитна карта.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Моля въведете името върху вашата кредитна карта.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Въведения номер на кредитна карта не е валиден.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Моля въведете месеца, до който е валидна лредитната карта.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Моля въведете годината, до която е валидна кредитната карта.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Датата на валидност е невалидна.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Моля изберете доставка до адрес.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Невалиден потребителски номер.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Няма нищо във Вашата кошница!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'Грешка: Моля изберете куриер!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'Грешка: Избраната такса за доставка не е намерена!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'Грешка: Вашият адрес за доставка не е намерен!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'Грешка: Няма информация за кредитната Ви карта...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'Грешка: Номера на кредитната карта не е намерен!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Съжаляваме, но номера на кредитната карта, която ползвате е тестов номер!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Потребителя не е намерен в базата!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Не сте добавили името но банката издала картата.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Не сте посочили Вашия IBAN.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Не сте въвели номера на Вашата банкова сметка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Не сте въвели Вашия Банков код.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Не сте въвели името на Вашата банка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'CheckOut се нуждае от валидна Стъпка!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Информацията е събрана за по-нататъчна обработка.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Минималната задължителна стойност за поръчка не е достигната.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Минималната стойност за поръчка е:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Плащане с кредитна карта';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Други методи за плащане';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Моля изберете метод за плащане:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Минимална стойност за поръчка във Вашия магазин';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Информация за банкова сметка';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Номер на сметка';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Банков код';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Банка';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Титуляр по сметка';
	var $_PHPSHOP_MODULES = 'Модули';
	var $_PHPSHOP_FUNCTIONS = 'Функции';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Специални продукти';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Ако имате допълнителни коментари и забележки';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Забележка от клиента';
	var $_PHPSHOP_INCLUDING_TAX = '(Цената е с включено $tax % ДДС)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Моля изберете артикул';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Артикул';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Зона за сваляне';
	var $_PHPSHOP_DOWNLOADS_START = 'Изтегли';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Моля въведете номера, който сте получили по е-мейл и натиснете <strong>Изтегли</strong>.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Съжаляваме, но времето за сваляне е изтекло';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Съжаляваме, но е достигнат максималния разрешен брой сваляния';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Невалиден номер!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Невъзможно изпращане на съобщение до ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Съобщението е изпратено до ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Информация';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'файловете, поръчани от Вас са налични за сваляне';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Моля въведете номера в зоната за сваляне: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Максималния брой за сваляне на всеки файл е: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Свалянето няма да е достъпено след {expire} дена след първото сваляне';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Въпроси? Проблеми?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Информация за сваляне от ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Продукти за сваляне?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Благодарим за Вашата поръчка. 
		Транзакцията е успешна. Ще получите подтвърдителен е-мейл за транзакцията през PayPal. 
		Можете да продължите или да влезете в <a href=http://www.paypal.com>www.paypal.com</a> за да видите детайлите по транзакцията.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Има грешка при плащането.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Благодарим Ви,
че пазарувате при нас. Информацията за поръчката е по долу.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Сайтът позволява да разгледате стоките и да осъществите личен контакт с производителя или търговеца!';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'За въпроси и уточнения какво представлява тази система и полученото от вас писмо, можете да се обърнете към администратора на сайта.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Поръчка по-долу беше получена.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Вижте поръчката като натиснете върху връзката по долу.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Негативни количества не са разрешени';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Моля въведете валидно количество';
	var $_PHPSHOP_CART_STOCK_1 = 'Избраното количество надвишава складовите ни наличности. ';
	var $_PHPSHOP_CART_STOCK_2 = 'В момента разполагаме с $product_in_stock на склад. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Моля натиснете тук за да ги добавите във вашия списък с поръчки.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Моля изберете определен артикул от страницата с детайли!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'без значение';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Господин';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Госпожа';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Доктор';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Професор';
	var $_PHPSHOP_DEFAULT = 'По подразбиране';
	var $_PHPSHOP_AFFILIATE_MOD = 'Администриране на съдружниците';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Списък на съдружниците';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Съдружници';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Име на съдружника';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Активен';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Тарифа';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Месечно общо';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Месечна комисионна';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Списък с продажбите';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Изпратете е-мейл на съдружниците';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Е-майл до съдружниците';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Е-майл до (* = ALL)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Вашият е-мейл';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Тема';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Включи настоящите статистики';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Комисионна по (проценти)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Активен?';
	var $_PHPSHOP_DELIVERY_TIME = 'Обикновенно се доставя за';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Информация за доставка';
	var $_PHPSHOP_MORE_CATEGORIES = 'още категории';
	var $_PHPSHOP_AVAILABILITY = 'Наличност';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'В момента този продукт не е наличен.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Той ще бъде наличен на: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Резюме';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Статистика';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Клиенти';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Активни продукти';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Неактивни продукти';
	var $_PHPSHOP_STATISTIC_SUM = 'Общо';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Нови поръчки';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Нови клиенти';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Моля въведете Вашия е-мейл адрес за да бъдете известени, когато продукта отново е наличен в нашия склад. 
										Ние няма да го  разпространяваме, продаваме и използваме за друга цел освен заявената тук - да ви кажем кога продукта е отново наличен в нашия склад.<br /><br />Благодарим Ви!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Благодарим Ви за чакането! <br />Ще Ви известим максимално бързо, след доставка на желания от Вас продукт в нашия склад.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Извести ме!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Преглед за печат';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Изберете Authorize.net или CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = 'Статус на конфигурационния файл:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'е с права';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'е без права';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Глобално';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Път и Адрес';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Сайт';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Доставка';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Кошница';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Сваляния';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Плащания';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Използвайте софтуера само като каталог';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Ако изберете това ще забраните всички функции по разплащания.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Показвай цените';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Показвай цените с включени данъци?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Задайте дали клиентите да виждат цените с включен данък или без него.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Включи показване на цените. Ако използвате само като каталог може да предпочетете да не се показват цени на страниците.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Виртуален данък';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Определя дали на артикулите с нулево тегло се начислява данък или не. Редактирайте ps_checkout.php->calc_order_taxable() за допълнителни промени.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Данъчен режим:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Базиран на адресите за доставка';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Базиран на адреса на търговеца';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Определя коя данъчна ставка се взема при изчисляване на данъците:<br />
												<ul><li>тази от държавата на магазина</li><br/>
												<li>или тази, откъдето е купувача.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Включи диференциирани данъци?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Включете това, ако имате продукти с различни данъци (например 7% за книги и храна, 16% за останалите продукти)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Включи отстъпката преди начисляване на данъка и стойността на доставката?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Разреши потребителски мнения, отзиви и рейтинг';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Ако това е включено, Вие разрешавате на Вашите потребители да <strong>гласуват за продуктите</strong> и да<strong> пишат коментари</strong> за тях. <br />
																				Така потребителите могат да описват своя опит с продукта на останалите потребители.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Определя дали отстъпката се дава ПРЕДИ (при отметка) или СЛЕД начислявяне на данък и сума на доставката.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Клиентите могат да оставят данни за банкова сметка?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Изберете, когато желаете клиентите да оставят данни за техните банкови сметки по време на регистрацията в магазина.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Потребителите могат да избират регион?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Когато е включено Вашите потребители ще могат да изберат региона по време на регистрация.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Трябва да приеме условията за ползване?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Отметнете, ако желаете клиента да се съгласи с Вашите Условия за ползване преди регистрация.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Проверка на склада?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Да се проверяват ли количествата на продуктите при добавяне от клиента в кошницата. 
																						  Ако е зададено, това няма да позволи добавяне в кошницата на повече стоки от наличните в момента.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Включи съдружниците?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Позволява Ви да ползвате програма за търговия със съдружници. Функцията работи ако имате добавени съдружници в администрацията.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Формат на писмата за поръчки:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Текстов формат';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML формат';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Определя настройките на Вашите писма за потвърждение на поръчките:<br />
																						<ul><li>като обикновен текст</li>
																						<li>или като html писмо с изображения.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Разреши администриране от сайта за потребители нямащи достъп до администрацията?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'С тази настройка Вие давате достъп от сайта на потребители, които са администратори на магазина, но нямат достъп до администраторския панел на Joomla (напр. Регистриран / Редактор).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'Адрес';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'Адресът на Вашия сайт. Обикновено идентичен с този на Вашия Joomla сайт (с наклонена черта накрая!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'Сигурен адрес';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Сигурния адрес на Вашия сайт. (https - с наклонена черта накрая!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'Адрес на компонента';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'Адрес на Вашия VirtueMart компонент. (с наклонена черта накрая!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Адрес на снимките';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'Адрес на директорията с изопбражения на VirtueMart.(с наклонена черта накрая!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Път до администрацията';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Пътят към директорията на Вашия VirtueMart компонент.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'Път към класовете';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Пътят към Вашата VirtueMart "classes" директория.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Път до HTML';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Пътят към Вашата VirtueMart "html" директория.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Път до shop_image';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Пътят към Вашата VirtueMart "shop_image" директория';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Начална страница';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Страницата която се зарежда първа по дефиниция';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Страница с грешка (404)';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Страницата която показва че има грешка.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'Страница за дебъг';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Страницата която показва че се осъществява дебъг.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'ДЕБЪГ ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'ДЕБЪГ? Ползвайте при разработване на магазина, за да показва евентуални грешки.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Страница с продукти';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Страница с детайли за продуктите';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Шаблон на категорията';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Шаблона който да ползвате при списъци с категории.';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Брой продукти на ред';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Задава броя на продуктите на един ред.';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '\'без снимка\'';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Изображението което да се показва когато продукта няма снимка';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Редове при търсене';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Колко реда на една страница да показва при търсене.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Цвят при търсене';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Цвят на редовете при търсене за нечетни редове';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Цвят при търсене';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Цвят на редовете при търсене за четни редове';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Максимум редове';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Брой ма редовете при падащо меню.';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Показване на лого?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Да се показва ли логото на VirtueMart?';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Изберете метод за доставка';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Стандартен метод за доставка.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Модул за доставяне по държави<br />За повече информация посетете <a href=\'http://ZephWare.com\'>http://ZephWare.com</a><br /> Отметнете за да включите модула.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href=\'http://www.ups.com\' target=\'_blank\'>UPS Online® Инструменти</a> Калкулиране на разходите по доставка';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS код за достъп';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Вашия код за достъп до UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS потребител (ID)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'Потребителко ID което сте получили от UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS парола';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Парола за Вашия достъп до UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Модул InterShipper. Отментнете ако имате достъп до <a href=\'http://www.intershipper.com\' target=\'_blank\'>Intershipper.com</a>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Спрете всички методи за доставка. Ползвайте, ако продуктите се свалят.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper парола';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Паролата Ви за intershipper достъп.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper е-мейл';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Вашия е-мейл за достъп до intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'ENCODE KEY';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Ползва се за криптиране на информацията.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Показвай стъпките за приключване на покупките';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Показвай стъпките 1 - 2 - 3 - 4 при приключване на покупките.';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Изберете метод за приключване на покупките';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Стандартно:</strong><br/>
1. Адрес за доставка<br />
2. Метод за доставка<br />
3. Метод за плащане<br />
4. Завършване на поръчката';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Метод 2:</strong><br/>
1. Адрес за доставка<br />
2. Метод за плащане<br />
3. Завършване на поръчката';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Метод 3:</strong><br/>
1. Метод за доставка<br />
2. Метод за плащане<br />
3. Завършване на поръчката';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Метод 4:</strong><br/>
1. Метод за плащане<br />
2. Завършване на поръчката';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Включи свалянията';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Включете възможността да продавате файлове във Вашия магазин.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Статус на поръчката който позволява сваляне';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Какъв е статуса на поръчката с който потребителите могат да свалят файлове.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Статус на поръчката който забранява сваляне';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Какъв е статуса на поръчката с който потребителите не могат да свалят файлове.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Директория с файлове';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Къде се намират файловете за сваляне';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Максимум сваляния';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Колко файла могат да се свалят с едно ID за сваляне (една поръчка).';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Изтичане на сваляне';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'След колко време да изтича достъпа за сваляне. Времето започва да тече след първото сваляне. В секунди.<br />Забележка : 86400с=24час.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Включете IPN плащания през PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Могат ли потребителите да ползват PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal е-мейл:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Вашия адрес за плащания през PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Статус за успешна транзакция';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Статуса с който плащането през PayPal IPN е успешно.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Статус за неуспешна транзакция';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Изберете статуса за неуспешна транзакция.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Плащания през PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Могат ли потребителите да ползват Австралийската система PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate потребител:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Потребителското Ви име';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Плащания през Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Могат ли потребителите да плащат през Authorize.net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Тестване ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Изберете \'Да\' ако в момента тествате системата.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Да';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Не';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Authorize.net ID';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'ID за услугите на Authorize.Net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Authorize.net Ключ за транзакции';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Вашия ключ за транзакции през Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Метод на идентификация';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Изберете метод за идентификация в Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Включи CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Използвайте CyberCash за плащания.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash Търговец';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_Търговец е CyberCash ID потребител';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Ключ на търговеца';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Ключ на търговеца е предоставен от CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash Адрес за плащания';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'Адреса предоставен Ви от CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash Идентификация';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Метода на идентификация предоставен Ви от CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Разширено търсене';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Търси във всички категории';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Търси в информацията за продуктите';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Само в името на продукта';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Само в името на производител/доставчик';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Само в описанието на продуктите';
	var $_PHPSHOP_SEARCH_AND = 'и';
	var $_PHPSHOP_SEARCH_NOT = 'не е';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Първото падащо меню Ви позволява да ограничите търсенето до една категория. Второто падащо меню Ви дава възможност да ограничите търсенето в определени полета.';
	var $_PHPSHOP_SEARCH_TEXT2 = 'Можете да направите търсенето по специфично, ако добавите и втора ключова дума и ползвате командите AND и NOT.';
	var $_PHPSHOP_ORDERBY = 'Подредени по';
	var $_PHPSHOP_CUSTOMER_RATING = 'Оценка на клиентите';
	var $_PHPSHOP_TOTAL_VOTES = 'Гласове';
	var $_PHPSHOP_CAST_VOTE = 'Моля гласувайте';
	var $_PHPSHOP_RATE_BUTTON = 'Оценка';
	var $_PHPSHOP_RATE_NOM = 'Рейтинг';
	var $_PHPSHOP_REVIEWS = 'Коментари на клиенти';
	var $_PHPSHOP_NO_REVIEWS = 'Няма коментари за този продукт.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Бъдете първия коментирал продукта...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Моля първо се идентифицирайте, за да публикувате коментар.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Моля оценете продукта, за да завършите коментара!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Моля, допълнете коментара. Минимума е 100 символа!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Коментара е прекалено дълъг. Максимума е 2000 символа!';
	var $_PHPSHOP_WRITE_REVIEW = 'Коментирайте продукта!';
	var $_PHPSHOP_REVIEW_RATE = 'Моля първо оценете продукта. 0 е най-слабата оценка, 5 е най-силната.';
	var $_PHPSHOP_REVIEW_COMMENT = 'Моля напишете кратък коментар (от 100 до 2000 символа) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Символи';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Публикувайте коментара';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Благадарим Ви, че коментирахте продукта! ';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Благодарим за коментара!';
	var $_PHPSHOP_COMMENT = 'Коментар';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Добави/Редактирай видове кредитни карти';
	var $_PHPSHOP_CREDITCARD_NAME = 'Вид на кредитната карта';
	var $_PHPSHOP_CREDITCARD_CODE = 'Кредитна карта - кратък код';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Вид кредитна карта';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Списък с кредитни карти';
	var $_PHPSHOP_UDATE_ADDRESS = 'Редактирай';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Върни се към продуктите';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Вашата поръчка е приета!';
	var $_PHPSHOP_ORDER_LINK = 'Натиснете тук, за да прегледате поръчката!';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Статуса на Вашата поръчка с номер {order_id} е променен.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Новият статус е:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'За да видите информацията за поръчката, моля, натиснете върху тази връзка или копирайте адреса в браузера си:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Промяна в статуса на поръчка номер: {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Извести клиента?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Моля първо променете статуса!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Отстъпка на групата по подразбиране (в проценти)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Положително число Х ще намали цената с Х процента. Негативно число ще има обратния ефект.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Отстъпка върху продукти';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Списък с отстъпките върху продукти';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Добави/Редактирай отстъпките върху продукти';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Отстъпка на стойност';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Въведете стойност на отстъпката';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Вид отстъпка';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Процент';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'ОБЩО';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Отстъпката в проценти ли да бъде или твърда сума?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Начална дата за отстъпката';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Изберете деня, в който отстъпката влиза в сила';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Крайна дата за отстъпката';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Изберете деня, в който отстъпката приключва';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Можете да използвате формата за продукти за отстъпка за да добавите отстъпки!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Спестявате';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Голямо изображение';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Стил за показване на валутата';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Символ на валутата';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Можете да използвате също така HTML променливи тук (например €,&#163;,&#165;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Символи след десетичната запетая';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Брой на символите след десетичната запетая. Може да бъде 0<br><b>Използва закръгляне</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Десетичен символ';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Символ използван за десетичен разделител';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Разделител на хилядите';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Символ използван за разделяне на хилядите (може да е празно)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Положителен формат';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Формат при показване на положителни стойности.';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Отрицателен формат';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Формат при показване на отрицателни стойности.';
	var $_PHPSHOP_OTHER_LISTS = 'Списък с други продукти';
	var $_PHPSHOP_MORE_IMAGES = 'Още снимки';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Налични снимки за';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Върни се към информацията за продукта';
	var $_PHPSHOP_FILEMANAGER = 'Управление на файлове';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Управление на файлове::Списък на продуктите';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Добави снимка/файл';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Добавени снимки';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'За сваляне?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Присъединени файлове (таблици,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Публикуване?';
	var $_PHPSHOP_FILES_LIST = 'Управление на файлове::снимка/файл за';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Име на файл';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Заглавие на файл';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Вид на файла';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Редактирай файла';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Голямо изображение';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Малко изображение';
	var $_PHPSHOP_FILES_FORM = 'Качи файл за';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Настоящ файл';
	var $_PHPSHOP_FILES_FORM_FILE = 'Файл';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Изображение';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Качи в';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Пътя до изображенията по подразбиране';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Изберете файла';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Пъта за сваляне (например за продажба на mp3 файлове!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Авотматично съдаване на малко изображение?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Файлът е публикуван?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Заглавие на файла (това което клиентите виждат)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Описание на файла';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'Адрес на файла (опционално)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Моля въведете коректен адрес!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Малкото изображение бе създадено успешно !';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Не създавай малко изображение!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Грршка при качването на файл/изображение';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Не можете да изтриете голямото изображение.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Голямото изображение е успешно изтрито.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Не мога да изтрия малкото изображение (може и да не съществува)';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Малкото избражение е изтрито успешно.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Файла не може да бъде изтрит.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Файлът е изтрит успешно.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Съжалявам, но търсенията файл не е намерен!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Изображението не е намерено!';
	var $_PHPSHOP_COUPON_MOD = 'Купон';
	var $_PHPSHOP_COUPONS = 'Купони';
	var $_PHPSHOP_COUPON_LIST = 'Списък с купоните';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Този купон вече е използван.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Купонът е приет! Благодарим ви.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Ако имате купонен за отстъпка, можете да го използвате:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Изпрати';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Този купон вече е ползван. Моля опитайте отново.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Обнови купон';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Натисни върху кода на купона за да го редактирате или за да го изтриете.';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Код';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Процент или общо';
	var $_PHPSHOP_COUPON_TYPE = 'Вид купон';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Купона подарък се изтрива след като бъде използван. Постоянния купон може да бъде използван за други цели.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Купон подарък';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Постоянен купон';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Стойност';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Изтрий кода';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Сигурни ли сте, че желаете да изтриете кода на купона?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Моля попълнете всички полета.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Купонната стойност трябва да бъде число.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Нов купон';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Код на купона';
	var $_PHPSHOP_COUPON_PERCENT = 'Процент';
	var $_PHPSHOP_COUPON_TOTAL = 'Общо';
	var $_PHPSHOP_COUPON_VALUE = 'Стойност';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Кода на купона е запазен успешно.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Запази купона';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Купон за отстъпка';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Кода на купона не е намерен. Моля опитайте отново.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Разреши използването на купони';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Ако разрешите използването на купони, разрешавате на Вашите клиенти на ползват купони за да спечелят отстъпки при техните покупки.';
	var $_PHPSHOP_FREE_SHIPPING = 'Безплатна доставка';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Доставката е безплатна за тази поръчка!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Мнимална стойност за безплатна доставка';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Стойността (с включени данъци) при която доставката е безплатна.';
	var $_PHPSHOP_YOUR_STORE = 'Магазин';
	var $_PHPSHOP_CONTROL_PANEL = 'Контролен панел';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - бутон';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Покажване на PDF-бутона в магазина (не работи на кирилица)';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Трябва ли потребителя аа приеме условията за ползване при всяка покупка?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Отметнете ако потребителите трябва да се съгласят с условията при всяка покупка.';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Вид на банковата сметка';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Проверка';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Бизнес проверка';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Запис';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Повторяеми сметки?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Искате ли да ползвате повторяеми сметки.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Грешка при обработване на';
	var $_PHPSHOP_PAYMENT_ERROR = 'Грешка при плащане';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Плащането е успешно обработено';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS не бе в състояние да отговори.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Гарантирани дни за доставка';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS метод на изпращане';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Как давате пакетите на UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'UPS пакети?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Изберете вида пакети по дефиниция.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Доставка до дома?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Доставка до дома (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Търговка доставка (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Каква да бъде доставката? До дома (RES) или търговска (COM)?';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Транспортна такса';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Такса за транспортиране при този метод на доставка';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Клас на данъка';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Използвайте следния данъчен клас при доставка';
	var $_PHPSHOP_ERROR_CODE = 'Грешка в кода';
	var $_PHPSHOP_ERROR_DESC = 'Грешка в описанието';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Покажи / Смени ключа на транзакцията';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Покажи/Промени Паролата/Ключа за транзакцията';
	var $_PHPSHOP_TYPE_PASSWORD = 'Моля въведете Вашата парола';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Настояща парола';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Настоящ транзакционен ключ';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Танзакционния ключ беше успешно сменен.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Изискване/Прихващане на кода на кредитната карта (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Проверка за валидна CVV2/CVC2/CID стойност (три или четри-цифров номер на гърба на кредитната карта, при American Express карти и отпред)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Моля напишете три или четри цифров номер от гърба на вашата кредитна карта (При American Express е отпред)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Моля въведете кода на кредитната Ви карта';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Моля въведете име на файла';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'ЗАБЕЛЕЖКА: Тук можете да попълните име на файла. При тази операция не се качва файл, това трябва да бъде осъществено ръчно!';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'или качете нов файл';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Тази опция Ви дава възможност да качите файл!';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Попълнете каквато и да е информация, която да се показва на страницата на продукта.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'или или изберете файл, който да се показва в страницата на продукта.<br />Изображението ще се намира в <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Списък с атрибути';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Примери за списъка с атрибути:</h4>		<pre>Големина,XL[+1.99],M,S[-2.99];Цвят,Червен,Зелен,Жълт,СкъпЦвят[=24.00];и други,..,..</pre>
		<h4>Коригиране на цени при атрибути:</h4>
		<pre>
		+ == Добави към цената.<br />
		- == Извади от цената.<br />
		= == Задай тази цена.
	  </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Допълнителни атрибути';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Пример за допълнителни атрибути:</h4>
		<pre>Име;Екстри;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'За да изберете повече от едно ползвайте клавиша CTRL и мишката';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Разрешаване на плащане през eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Избери за използване на eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Тестов режим ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Изберете \'Да\' докато тествате. Изберете \'Не\' за разрешаване на транзакции.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Това е Вашият код за влизане в eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com транзакционен ключ';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Това е вашият eProcessingNetwork.com транзакционен ключ';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Тип на идентификация';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Какъв да бъде типа на идентификация в eProcessingNetwork.com';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Свързани продукти';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Можете на направите продуктови зависимости използвайки този списък. Само изберете един или няколко продукта тук и след това <strong>Свързани продукти</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Може би се интересувате и от тези продукти';
	var $_PHPSHOP_IMAGE_ACTION = 'Действие на изображението';
	var $_PHPSHOP_NONE = 'няма';
	var $_PHPSHOP_ORDER_HISTORY = 'История на поръчките';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Коментар';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Коментар по Вашата поръчка';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Включи и коментара?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Дата на добавяне';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Известяване на потребителя?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Промяна на статуса на поръчката';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'USPS shipping username';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Username that you received from registering at USPS.com.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'USPS shipping password';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Password that you received from registering at USPS.com.';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Параметри';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Вид продукт';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Списък на видовете продукти';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Добави/Редактирай видове продукти';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Списък на видовете продукти за';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Покажи видовете продукти';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Добави вид продукт за';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Видове';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Вид продукт';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Име на вида продукт';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Описание на вида продукт';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Параметри';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Информация за вида продукт';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Публикуване?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Страница с преглед на видовете продукти';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Страница на видовете продукти';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Параметри на видовете продукти';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Информация за параметрите';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Не е открит такъв вид продукт!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Име на параметъра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Това име ще бъде колона от таблица. Трябва да е уникално и без интервали. На латиница.';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Етикет на параметъра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Описание на параметъра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Вид параметър';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'целочислен';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'текст';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Кратък текст';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Посока';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Символ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Дата и час';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Дата';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'DD.MM.YYYY';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Час';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'HH:MM:SS';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Линия за прекъсване';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Редица стойности';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Вероятни стойности';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Показвай вероятни стойности като редица стойности?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Ако вероятните стойности са зададени, параметъра може да има само тези стойности.Пример:</strong><BR><span class=\'sectionname\'>Стомана;Дърво;Пластмаса;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Стойност по подразбиране';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'За стойност на параметъра по подразбиране ползвайте:<ul><li>Дата: YYYY-MM-DD</li><li>Час: HH:MM:SS</li><li>Дата и час: YYYY-MM-DD HH:MM:SS</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Брой';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Разширено търсене по параметри';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Търсене по параметри';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Желаете ли да търсите продукти по техните технически параметри?<BR>Можете да използвате тази форма:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Съжаляваме. Няма категории за търсене.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Съжаляваме. Няма публикувани продукти в сайта с това име.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'е като';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Не е като';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Пълнотекстово търсене';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Всички избрани';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Някои избрани';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Изчисти';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Търсене в категория';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Променете параметрите';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'Низходящо подреждане';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'Възходящо подреждане';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Параметри на категорията';
	var $_PHPSHOP_FEE = 'Комисионна';
	var $_PHPSHOP_PRODUCT_CLONE = 'Клонирай продукт';
	var $_PHPSHOP_CSV_SETTINGS = 'Настройки';
	var $_PHPSHOP_CSV_DELIMITER = 'Разделител';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Ограждане на символа в полето';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Качи CSV файл';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Изпрати CSV файл';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Зареди от директория';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Качи CSV файл от сървър';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Експорт в CSV файл';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Изберете начина за подреждане';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Подреждане по подразбиране';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Подреждане по лични настройки';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Експорт на всички продукти в CSV файл';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Импорт / Експорт настройки';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Запази промените';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Име на полето';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Стойност по подразбиране';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Подреждане по';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Полето е задължително?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Импорт/Експорт';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Добавяне на ново поле';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Документация';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Съжаляваме, но поръчания от Вас продукт не е намерен!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Покажи продуктите, които не са налични на склад';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Когато е включено прудуктите, които не са на склад се показват. Когато е изключено са скрити.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Брой {unit} в пакет:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Брой {unit} в кашон:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Скрий продуктите, които не са налични';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'ВИП и продукти с намаление';
	var $_PHPSHOP_FEATURED = 'ВИП';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Назад';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Назад към управление на файлове';
	var $_PHPSHOP_ADD_STATE = 'Регион';
	var $_PHPSHOP_LIST_STATES = 'Списък';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'ВИП и продукти с намаление';
	var $_PHPSHOP_SHOW_FEATURED = 'ВИП продукти';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'Продукти с намаление';
	var $_PHPSHOP_FILTER = 'Филтър';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Назад към основния сайт';
	var $_PHPSHOP_EXPAND_TREE = 'Разгърни менюто';
	var $_PHPSHOP_COLLAPSE_TREE = 'Сгъни менюто';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Намалена цена';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Тук можете да въведете намалена цена за продукта.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Цена за брой';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Магазина е спрян?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Ако магазина е спрян, ще се покаже съобщение, че магазина е спрян';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Съобщение при спрян магазин';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Представка на компонента';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'Това е <strong>vm</strong> по подразбиране';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Показвай навигация при списъци с продукти?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Да се показва ли навигацията при разглеждане на продукти?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Показвай брой на продуктите?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Показвай броя на продуктите в категория?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Стил на бутона за добавяне към кошница';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Включи динамичен размер на изображенията?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Ако включите тази опция, изображения ще генерират автоматично малки изображения.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Широчина на малкото изображение';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'Колко да бъдат широки малките изображения.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Височина на малкото изображение';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'Колко да бъдат високи малките изображения.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Моля изберете поне един метод на доставка!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Настройки на цена';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Групи на които да се показват цените';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Избраната група и тези над нея ще могат да виждат цените!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Покажи \'(включен XX% данък)\' където е приложимо?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Покажи \'(включен XX% данък)\' където е приложимо?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Показвай цена за пакетиране?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Да се показва ли цената за пакетиране, когато продуктите са в комплект?';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'още настройки на ядрото';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Настройки на ядрото';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Сайт';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Данъци';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Начало на количества';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Край на количествата';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Настройка за регистрация на потребители';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Разрешено ли е потребителите да се регистрират?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Активация на новите потребители?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Скрита регистрация?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Ако е включено, потребителя използва е-мейл за потребителско име и генерирана от системата парола.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Здравей %s,

Благодарим Ви за регистрацията в %s. Можете да се идентифицирате с:

Потребител - %s
Парола - %s';
	var $_PEAR_LOG_CRIT = 'Критично';
	var $_PEAR_LOG_ERR = 'Грешка';
	var $_PEAR_LOG_WARNING = 'Внимание';
	var $_PEAR_LOG_INFO = 'Информация';
	var $_PEAR_LOG_TIP = 'Информация';
	var $_PEAR_LOG_ALERT = 'Предупреждение';
	var $_PEAR_LOG_EMERG = 'Спешност';
	var $_PEAR_LOG_NOTICE = 'Забележете';
	var $_PEAR_LOG_DEBUG = 'Дебъг';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Включи PayFlow Pro разплащания?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Отметнете за да ползвате VeriSign\'s PayFlow Pro.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Тестов режим ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Изберете \'Да\' ако разработвате магазина.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign с Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'Partner ID Ви позволява да ползвате услугите на PayFlow Pro';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro ID идентификация';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Вашието PayFlow Pro ID';
	var $_VM_TAXDETAILS_LABEL = 'Tax Total contains';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Default product sort order';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Defines by which field products are ordered by default on the browse pages';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Available "Sort-by" fields';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Choose the "Sort-by" fields for the browse page. Each one defines a sort method for the product browse page. If you deselect all, the Order-By-Form will not be shown.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Show a short note about your "Returns Policy" on the order confirmation page?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'In most european countries store owners are required by law to inform their customers about return and order cancellation policies. So this should be enabled in most cases.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Legal information text (short version).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'This text instructs your customers in short about your return and order cancellation policy. It is shown on the last page of checkout, just above the "Confirm Order" button.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Long version of the return policy (link to a content item).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Please add a new content item about the details of your return and order cancellation policy.
Afterwards you can select it here.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Returns Policy</h5>

You can cancel this order within two weeks after we have received it.
You can return new, unopened items from a cancelled order within 2 weeks after they have been 
delivered to you. Items should be returned in their original packaging.
For more information on cancelling orders and returning items, see the <a href="%s" onclick="%s" target="_blank">Our Returns Policy</a> page.';
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
	var $_VM_UPDATE_STATUS = 'Update Status';
	var $_PRODUCT_WAITING_LIST_EMAIL_SUBJECT = '%s Has Arrived!';
	var $_PRODUCT_WAITING_LIST_EMAIL_TEXT = 'Thank you for your patience.

Our %s  is now in stock and can be purchased by following this link:
%s

 This is a one time notice, you will not receive this e-mail again.';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>