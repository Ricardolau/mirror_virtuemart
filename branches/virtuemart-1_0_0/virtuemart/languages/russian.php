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
	var $_PHPSHOP_SELECT_CATEGORY = 'Выбор категории:';
	var $_PHPSHOP_ADMIN = 'Администрирование';
	var $_PHPSHOP_PRODUCT = 'Товар';
	var $_PHPSHOP_LIST = 'Список';
	var $_PHPSHOP_ALL = 'Все';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Все товары';
	var $_PHPSHOP_VIEW = 'Просмотр';
	var $_PHPSHOP_SHOW = 'Вид';
	var $_PHPSHOP_ADD = 'Создать';
	var $_PHPSHOP_UPDATE = 'Обновить';
	var $_PHPSHOP_DELETE = 'Удалить';
	var $_PHPSHOP_SELECT = 'Выбрать';
	var $_PHPSHOP_SUBMIT = 'пФРТБЧЙФШ';
	var $_PHPSHOP_RANDOM = 'Случайный товар';
	var $_PHPSHOP_LATEST = 'Новинки';
	var $_PHPSHOP_HOME_TITLE = 'Домой';
	var $_PHPSHOP_CART_TITLE = 'Корзина';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Оформление заказа';
	var $_PHPSHOP_LOGIN_TITLE = 'Вход';
	var $_PHPSHOP_LOGOUT_TITLE = 'Выход';
	var $_PHPSHOP_BROWSE_TITLE = 'Просмотр';
	var $_PHPSHOP_SEARCH_TITLE = 'Поиск';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Настройка аккаунта';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Навигация';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Отдел';
	var $_PHPSHOP_INFO = 'Информация';
	var $_PHPSHOP_BROWSE_LBL = 'Просмотр';
	var $_PHPSHOP_PRODUCTS_LBL = 'Товары';
	var $_PHPSHOP_PRODUCT_LBL = 'Товар';
	var $_PHPSHOP_SEARCH_LBL = 'Поиск';
	var $_PHPSHOP_FLYPAGE_LBL = 'Описание товара';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Поиск товара';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Название товара';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Категория товара';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Описание';
	var $_PHPSHOP_CART_SHOW = 'Показать корзину';
	var $_PHPSHOP_CART_ADD_TO = 'Добавить в корзину';
	var $_PHPSHOP_CART_NAME = 'Название';
	var $_PHPSHOP_CART_SKU = 'Артикул';
	var $_PHPSHOP_CART_PRICE = 'Цена';
	var $_PHPSHOP_CART_QUANTITY = 'Кол-во';
	var $_PHPSHOP_CART_SUBTOTAL = 'Сумма';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Новый';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Адрес доставки';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Нет записей.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Цена: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'В корзину!';
	var $_PHPSHOP_NO_CUSTOMER = 'Вы еще не зарегистрированы как покупатель. Пожалуйста, укажите Ваши платежные реквизиты.';
	var $_PHPSHOP_DELETE_MSG = 'Вы уверены, что следует удалить эту запись?';
	var $_PHPSHOP_THANKYOU = 'Спасибо за Ваш заказ!';
	var $_PHPSHOP_NOT_SHIPPED = 'Еще не отгружен';
	var $_PHPSHOP_EMAIL_SENDTO = 'Подтверждение заказа было отправлено по электронной почте в адрес';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Извините, нет ни одного пользователя, которого можно было бы добавить в список пользователей phpShop';
	var $_PHPSHOP_ERROR = 'ОШИБКА';
	var $_PHPSHOP_MOD_NOT_REG = 'Модуль не зарегистрирован.';
	var $_PHPSHOP_MOD_ISNO_REG = 'это не модуль phpShop.';
	var $_PHPSHOP_MOD_NO_AUTH = 'У Вас недостаточно прав для доступа к указанному модулю.';
	var $_PHPSHOP_PAGE_404_1 = 'Страницы не существует';
	var $_PHPSHOP_PAGE_404_2 = 'Запрошенный файл не найден:';
	var $_PHPSHOP_PAGE_403 = 'Недостаточно прав доступа';
	var $_PHPSHOP_FUNC_NO_EXEC = 'У Вас нет прав на выполнение ';
	var $_PHPSHOP_FUNC_NOT_REG = 'Функция не зарегистрирована';
	var $_PHPSHOP_FUNC_ISNO_REG = ' это не функция phpShop.';
	var $_PHPSHOP_ADMIN_MOD = 'Admin';
	var $_PHPSHOP_USER_LIST_MNU = 'Отобразить список пользователей ';
	var $_PHPSHOP_USER_LIST_LBL = 'Список пользователей';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Имя пользователя';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Полное имя';
	var $_PHPSHOP_USER_LIST_GROUP = 'Группа';
	var $_PHPSHOP_USER_FORM_MNU = 'Добавить пользователя';
	var $_PHPSHOP_USER_FORM_LBL = 'Добавить/обновить информацию о пользователе';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Адрес оплаты';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = ' Адреса доставки';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Добавить адрес';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'No shipping addresses.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Сокр. адрес ';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_USER_FORM_TITLE = 'Обращение';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Имя пользователя';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Пароль';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Подтверждение пароля';
	var $_PHPSHOP_USER_FORM_PERMS = 'Права';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Customer Number / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Название компании';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Адрес 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Город';
	var $_PHPSHOP_USER_FORM_STATE = 'Область/Район';
	var $_PHPSHOP_USER_FORM_ZIP = 'Почтовый индекс';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_USER_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Mobile Phone';
	var $_PHPSHOP_USER_FORM_FAX = 'Факс';
	var $_PHPSHOP_USER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Отобразить список модулей';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Список модулей';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Имя модуля';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Права модуля';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Функции';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Добавить модуль';
	var $_PHPSHOP_MODULE_FORM_LBL = ' Информация о модуле';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Метка модуля (для Topmenu)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Имя модуля';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Права модуля';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Шапка модуля';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Нижняя часть модуля';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Показать модуль в меню Админа?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Порядок отображения';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Описание модуля';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Языковой Код';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Языковой Файл';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Отобразить перечень функций';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Перечень функций';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Имя функции';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Имя класса';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Метод класса';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Права';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Добавить функцию';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Информация о функции';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Имя функции';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Имя класса';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Метод класса';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Права функции';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Описание функции';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Отобразить перечень валют';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Перечень валют';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Добавить валюту';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Название валюты';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Код валюты';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Отобразить перечень  стран';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Перечень стран';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Добавить страну';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Название страны';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Код страны  (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Код страны  (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Отобразить перечень штатов';
	var $_PHPSHOP_STATE_LIST_LBL = 'Преечень штатов для: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Добавить/изменить штат';
	var $_PHPSHOP_STATE_LIST_NAME = 'Название штата';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Код штата (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Код штата (2)';
	var $_PHPSHOP_ADDRESS = 'Адрес';
	var $_PHPSHOP_CONTINUE = 'Продолжить';
	var $_PHPSHOP_EMPTY_CART = 'Ваша корзина пуста.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'Перевозчик';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Пинговать сервер перевозчика';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Пинг сервера перевозчика ';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Пинг сервера перевозчика не прошел';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Пинг сервера перевозчика произведен';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'несущая';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Время<br/>ответа';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'сек.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Отобразить список способов доставки';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Доступные способы доставки';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Способы доставки';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Активные';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Плата за обработку груза';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'фиксированный тариф';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'процент';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'дней';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Тяжелые грузы';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Сконфигурировать способы доставки';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Добавить способы доставки';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Сконфигурировать способ доставки';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Обновить';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Способ доставки';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Активизировать';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Плата за обработку груза';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Lead Time';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'фиксированный тариф';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'процент';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'дней';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Тяжелые грузы';
	var $_PHPSHOP_ORDER_MOD = 'Заказы';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Подтвердить заказ';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Отменить заказ';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Распечатать заказ';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Удалить заказ';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Отобразить перечень заказов';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Перечень заказов';
	var $_PHPSHOP_ORDER_LIST_ID = 'Номер заказа';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Дата заказа';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Последнее изменение';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Статус';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Общая сумма';
	var $_PHPSHOP_ORDER_ITEM = 'Товар в заказе';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Оплатить заказ';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Номер заказа';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Дата заказа';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Статус заказа';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Информация о клиенте';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Платежная информация';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Информация о доставке';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Плательщик';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Адрес доставки';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Имя';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Наименование компании';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Адрес 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Город';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Область/Район';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Почтовый индекс';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Страна';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Телефон';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Факс';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'Email';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Товар в заказе';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Количество';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'Кол-во';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Артикул';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Цена';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Всего';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Подитог';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Сумма налога';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Доставка';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Налог на доставку';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Способ оплаты';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Наименование эккаунта';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Номер эккаунта';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Дата истечения срока';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'История платежей';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Информация по доставке';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Платежная информация';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Перевозчик';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Способ доставки';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Дата отгрузки';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Стоимость доставки';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Отобразить типы состояний заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Добавить тип состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Код состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Наименования состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Состояние заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Код состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Наименование состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_PRODUCT_MOD = 'Товары';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Текущий товар';
	var $_PHPSHOP_CURRENT_ITEM = 'Текущий обьект';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Ассортимент товаров';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Просмотр ассортимента';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Цена';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Номер';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Вес';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Отобразить товары';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Список товаров';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Наименование товара';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Артикул';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Опубликовать';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Search Product';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'with price modyfied';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'without price';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'After';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'Before';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Добавить товар';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Редактировать этот товар';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Просмотреть страницу информации о товаре в магазине';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Добавить объект';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Добавить другой объект';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Новый товар';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Обновить данные о товаре';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Информация о товаре';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Состояние товара';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Габариты товара и вес';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Изображения товара';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Новый объект';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Обновить объект';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Информация об объекте';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Состояние объекта';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Габариты и вес объекта';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Изображения объекта';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Вернуться к родительскому товару';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Чтобы обновить текущее изображение, введите путь к новому файлу';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Удалить текущее изображение.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Объекты товара';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Атрибуты объекта';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Вы уверены, что хотите удалить этот товар\\nи объект связанный с ним?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Вы уверены, что хотите удалить этот объект?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Поставщик';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Производитель';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Артикул';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Название';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Категория';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Цена товара (брутто)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Цена товара (нетто)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Описание товара';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Краткое описание';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'В наличии';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'По заказу';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Дата когда будет в наличии';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'По спец. условиям';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Тип скидки';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Опубликовать?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Длина';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Ширина';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Высота';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Ед. измерения';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Вес';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Ед. измерения';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Уменьшенное изображение';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Полноразмерное изображение';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'pounds';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'inches';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Unit';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'piece';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Units in Packaging';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Here you can fill in a number unit in packaging. (max. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Units in Box';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Here you can fill in a number unit in box. (max. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Результаты добавления товара';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Результаты обновления товара';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Результаты добавления объекта';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Результаты обновления объекта';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Использовать загрузку CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = '--Папки товара-- Список товаров в виде дерева';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Отобразить категории';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Дерево категорий';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Добавить категорию';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Информация о категории';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Наименование категории';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Родительская категория';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Опубликовать?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Страница информаци категории';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Отобразить свойства';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Список свойств для';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Наименование свойства';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Добавить свойство';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Форма атрибута';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Новое свойство для товара';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Обновить свойство товара';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Новое свойство объекта';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Обновить свойство объекта';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Наименование свойства';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Порядок отображения';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Отобразить цены';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Дерево цен';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Цена за';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Наименование группы';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Цена';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Валюта';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Добавить цену';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Информация о цене';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Новая цена товара';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Обновить цену товара';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Новая цена объекта';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Обновить цену отъекта';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Цена';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Группа покупателя';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Основной отчет';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Индивидуальные каталоги товара';
	var $_PHPSHOP_RB_SALE_TITLE = 'Отчет о продажах';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Обзор продаж';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Установить интервал';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'Ежемесячно';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'Еженедельно';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'Ежедневно';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'Текущий месяц';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'Последний месяц';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'Последние 60 дней';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'Последние 90 дней';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Начало';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Конец';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Показать выбранный дипазон';
	var $_PHPSHOP_RB_REPORT_FOR = 'Отчет по ';
	var $_PHPSHOP_RB_DATE = 'Дата';
	var $_PHPSHOP_RB_ORDERS = 'Заказы';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Общее кол-во проданных объектов';
	var $_PHPSHOP_RB_REVENUE = 'Прибыль';
	var $_PHPSHOP_RB_PRODLIST = 'Каталог товаров';
	var $_PHPSHOP_SHOP_MOD = 'Магазин';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Изображение';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Цена';
	var $_PHPSHOP_ORDER_STATUS_P = 'Незаконченный';
	var $_PHPSHOP_ORDER_STATUS_C = 'Потвержденный';
	var $_PHPSHOP_ORDER_STATUS_X = 'Отмененный';
	var $_PHPSHOP_ORDER_BUTTON = 'Заказ';
	var $_PHPSHOP_SHOPPER_MOD = 'Покупатель';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Отобразить покупателей';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Список покупателя';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Имя пользователя';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Полное имя';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Группа';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Добавить покупателя';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Информация о покупателе';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Платежная информация';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Информация';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Информация по доставке';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Добавить адрес';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Обозначение адреса';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Имя пользователя';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Обращение';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Имя покупателя';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Пароль';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Подтвердите пароль';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Группа покупателя';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Наименование компании';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Адрес 1';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Город';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Область/Район';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Почтовый индекс';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Mobile phone';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Факс';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Yes';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'No';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Отобразить группы покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Список групп покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Наименование группы';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Описание группы';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Форма группы покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Добавить группу покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Наименование группы';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Описание группы';
	var $_PHPSHOP_STORE_MOD = 'Магазин';
	var $_PHPSHOP_STORE_FORM_MNU = 'Редактировать магазин';
	var $_PHPSHOP_STORE_FORM_LBL = 'Информация о магазине';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Контактная информация';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Картинка-логотип';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Загрузить картинку';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Название магазина';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Название компании, которой принадлежит магазин';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Поле для адреса 1';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Поле для адреса 2';
	var $_PHPSHOP_STORE_FORM_CITY = 'Город';
	var $_PHPSHOP_STORE_FORM_STATE = 'Область/Район/Регион';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Почтовый индекс';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Категория магазина';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Титул';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Телефон 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Телефон 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Факс';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'Email';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Путь к картинке';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_PAYMENT = 'Оплата';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Список способов оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Список способов оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Название';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Код';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Скидка';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Группа покупателей';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Тип способа оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Добавить способ оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Форма способа оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Название способа оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Группа покупателей';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Скидка';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Код';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Порядок вывода';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Тип способа оплаты';
	var $_PHPSHOP_TAX_MOD = 'Налог';
	var $_PHPSHOP_TAX_RATE = 'Налоговые ставки';
	var $_PHPSHOP_TAX_LIST_MNU = 'Список налоговых ставок';
	var $_PHPSHOP_TAX_LIST_LBL = 'Список налоговых ставок';
	var $_PHPSHOP_TAX_LIST_STATE = 'Область/регион';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Страна';
	var $_PHPSHOP_TAX_LIST_RATE = 'Налоговая ставка';
	var $_PHPSHOP_TAX_FORM_MNU = 'Добавить налоговую ставку';
	var $_PHPSHOP_TAX_FORM_LBL = 'Добавить иноформацию о налоге';
	var $_PHPSHOP_TAX_FORM_STATE = 'Область/регион';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_TAX_FORM_RATE = 'Налоговая ставка (для 16% => укажите 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Продавец';
	var $_PHPSHOP_VENDOR_ADMIN = 'Продавцы';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Список продавцов';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Список продавцов';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Продавец';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Администрирование';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Добавить продавца';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Добавить информацию';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Информация о продавце';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Контактная информация';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Полное изображение';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Загрузить изображение';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Склад продавца';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Компания продавца';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Адрес 1';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Город';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Область/Район';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Индекс';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Категория продавца';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Название';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Телефон 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Телефон 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Факс';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'Email';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Путь изображения';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Список категорий продавцов';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Список категорий продавцов';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Категория';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Продавцы';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Добавить категорию продавцов';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Форма категории продавцов';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Информация о категории';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Категория';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Производитель';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Производители';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Список производителей';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Список производителей';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Название производителя';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Администрирование';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Добавить производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Добавить информацию';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Информация производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Название производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Категория производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'Email';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Ссылка на сайт производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Список категорий производителей';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Список категорий производителей';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Название категории';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Производители';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Добавить категорию производителя';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Форма категории производителя';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Информация о категории';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Название категории';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_HELP_MOD = 'Помощь';
	var $_PHPSHOP_CART_ACTION = 'Обновить';
	var $_PHPSHOP_CART_UPDATE = 'Обновить корзину';
	var $_PHPSHOP_CART_DELETE = 'Удалить товар из корзины';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Цена';
	var $_PHPSHOP_PRODUCT_CALL = '--Позвоните, чтобы уточнить цену-- Для уточнения цены, свяжитесь с нами';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Предыдущий';
	var $_PHPSHOP_PRODUCT_NEXT = 'Следующий';
	var $_PHPSHOP_CART_TAX = 'Налог';
	var $_PHPSHOP_CART_SHIPPING = '--Цена за доставку-- Стоимость доставки';
	var $_PHPSHOP_CART_TOTAL = 'Всего';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Следующий';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'ЗАРЕГИСТРИРОВАТЬСЯ';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Платежная информация';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Компания';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Имя';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Адрес';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Телефон';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Факс';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'Email';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Информация о доставке';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Компания';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Имя';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Адрес';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Телефон';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Факс';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Платежная информация';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Имя и фамилия на кредитной карте';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Форма оплаты';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Номер кредитной карты';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Срок действия карты';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Завершить заказ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'Обязательная информация при оплате кредитной картой';
	var $_PHPSHOP_ZONE_MOD = 'Зона доставки';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Отобразить зоны';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Добавить зону';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Назначить зоны';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Страна';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Текущая зона';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Назначить зоне';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Обновить';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Назначить зоны';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Название зоны';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Описание зоны';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Зональная стоимость за объект';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Лимит стоимости зоны';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Список зон';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Название зоны';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Описание зоны';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Зональная стоимость за объект';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Лимит стоимости зоны';
	var $_PHPSHOP_LOGIN_FIRST = 'Пожалуйста, сначала зарегистрируйтесь на этом сайте (используйте раздел входа).<br>Спасибо.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Условия работы';
	var $_PHPSHOP_AGREE_TO_TOS = 'Пожалуйста, примите сначала наши условия работы.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Я соглашаюсь с данными условиями работы';
	var $_PHPSHOP_LEAVE_BLANK = '(Оставьте пустым, если у вас<br />нет для этого отдельного php файла!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Постоянные клиенты: пожалуйста пройдите авторизацию';
	var $_PHPSHOP_NEW_CUSTOMER = 'Новый клиент? Пожалуйста предоставьте вашу платежную информацию';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Аккаунт клиента:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Информация о заказе';
	var $_PHPSHOP_ACC_UPD_BILL = 'Здесь вы можете обновить вашу платежную информацию.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Здесь вы можете добавить или изменить адрес доставки.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Информация об аккаунте';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Информация о доставке';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Нет заказов';
	var $_PHPSHOP_ACC_BILL_DEF = '- По умолчанию (Тот же что и платежный)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Вы можете добавить адреса доставки в ваш аккаунт. Пожалуйста придумайте подходящее обозначение или код для адресов доставки которые вы выберете ниже.';
	var $_PHPSHOP_CONFIG = 'Конфигурация';
	var $_PHPSHOP_USERS = 'Пользователи';
	var $_PHPSHOP_IS_CC_PAYMENT = 'оплата кредитной картой?';
	var $_PHPSHOP_SHIPPING_MOD = 'Доставка';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Доставка';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Службы доставки';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Список служб доставки';
	var $_PHPSHOP_RATE_LIST_MNU = 'Тарифы доставки';
	var $_PHPSHOP_RATE_LIST_LBL = 'Список тарифов доставки';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Название';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Порядок вывода';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Создать службу доставки';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Редактирование/создание службы доставки';
	var $_PHPSHOP_RATE_FORM_MNU = 'Создать тариф доставки';
	var $_PHPSHOP_RATE_FORM_LBL = 'Редактирование/создание тарифа доставки';
	var $_PHPSHOP_RATE_FORM_NAME = 'Описание тарифа доставки';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Служба доставки';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Начало диапазона почтовых индексов';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Конец диапазона почтовых индексов';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Наименьший вес';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Наибольший вес';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Стоимость';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Стоимость Вашей упаковки';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'НДС';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Порядок вывода';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Служба доставки';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Описание тарифа доставки';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Вес от ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... до';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Компания службы доставки';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Порядок вывода';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'Ошибка: Такой идентификатор службы доставки уже существует.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'Ошибка: Выберите службу доставки.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ОШИБКА: Перед удалением службы доставки удалите связанные с ней тарифы доставки.';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ОШИБКА: Невозможно найти службу доставки с таким идентификатором.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ОШИБКА: Выберите службу доставки.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ОШИБКА: Невозможно найти службу доставки с таким идентификатором.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ОШИБКА: Необходимо ввести описание тарифа.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ОШИБКА: Неверно указана страна назначения. При указании нескольких стран используйте разделитель ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ОШИБКА: Необходимо указать наименьший вес';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ОШИБКА: Необходимо указать наибольший вес';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ОШИБКА: Наименьший вес должен быть меньше наибольшего';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ОШИБКА: Необходимо указать стоимость доставки';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ОШИБКА: Выберите валюту';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ОШИБКА: Необходимо указать тариф доставки';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Пожалуйста, выберите';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Служба доставки';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Тариф доставки';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Стоимость';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-нет-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Кредитная карта';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Использовать платежный процессор. Use Payment Processor';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Банк. Bank debit';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Только адрес / Оплата при получении';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Пожалуйста, выберите адрес доставки!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Пожалуйста, выберите способ доставки!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Пожалуйста, выберите способ оплаты!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Пожалуйста, проверьте введенные данные и подтвердите заказ!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Пожалуйста, выберите способ доставки.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Пожалуйста, выберите другой способ доставки.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Пожалуйста, выберите способ оплаты.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Пожалуйста, введите номер Вашей кредитной карты.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Пожалуйста, введите имя, указанное на кредитной карте.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Введенный номер кредитной карты недействителен.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Пожалуйста, введите месяц истечения срока действия кредитной карты.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Пожалуйста, введите год истечения срока действия кредитной карты.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Неправильная дата истечения срока действия карты.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Пожалуйста, выберите адрес доставки.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Неправильный номер кредитной карты. Invalid account number.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Ваша корзина пуста!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ОШИБКА: Пожалуйста, выберите службу доставки!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ОШИБКА: Не найден выбранный тариф доставки!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ОШИБКА: Не найден Ваш адрес доставки!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ОШИБКА: Отсутствуют данные кредитной карты...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ОШИБКА: Не найден номер кредитной карты!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Извините, но введенный номер кредитной карты является тестовым!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Идентификатор пользователя user_id не найден в базе данных!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Вы не предоставили имя владельца Вашего банковского счёта.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Вы не предоставили IBAN Вашего банка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Вы не предоставили номер своего банковского счёта.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Вы не предоставили код Вашего банка. You have actually not provided your bank sort code.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Вы не предоставили название Вашего банка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Для оплаты необходима корректная операция!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Платёжная информация сохранена для дальнейшей обработки.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Минимальная сумма заказа еще не достигнута.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Минимальная сумма заказа:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Оплата кредитной картой';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'другие способы оплаты';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Пожалуйста, выберите способ оплаты:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Минимальная сумма заказа для Вашего магазина';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Информация о банковском счёте';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Номер банковского счёта';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'Код банка. Bank sorting code number';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Название банка';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'IBAN';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Владелец счета';
	var $_PHPSHOP_MODULES = 'Модули';
	var $_PHPSHOP_FUNCTIONS = 'Функции';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Товары с особенностями';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'Вы можете присоединить к этому заказу свой комментарий или пожелание';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Комментарий клиента';
	var $_PHPSHOP_INCLUDING_TAX = '(включая $tax % tax)';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Выбор товара:<br>Пожалуйста, выберите товар';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Товар';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Область загрузки файлов';
	var $_PHPSHOP_DOWNLOADS_START = 'Начать загрузку';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Пожалуйста, введите идентификатор загрузки (Download-ID), который Вы получили по e-mail и нажмите \'Начать загрузку\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Извините, но срок скачивания файлов истек';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Извините, достигнуто максимальное количество скачиваний';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Неправильный идентификатор загрузки (Download-ID) !';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Невозможно отправить сообщение ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Сообщение отправлено ';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Информация о загрузках';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'Заказанные Вами файлы готовы для скачивания';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Пожалуйста, введите следующий идентификатор загрузки (Download-ID) в Вашей области загрузки файлов: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'максмальное количество скачиваний каждого файла: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Закачка возможна в течение {expire} дн. после начала скачивания. Download until {expire} days after the first download';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Вопросы? Проблемы?';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Информация о загрузках: ';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'товар скачиваемый?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Благодарим за оплату. Трансакция завершена успешно. Вы получите от PayPal подтверждение трансакции по электронной почте (e-mail). Сейчас Вы можете продолжить или зайти на <a href=http://www.paypal.com>www.paypal.com</a> чтобы посмотреть детали трансакции.';
	var $_PHPSHOP_PAYPAL_ERROR = 'Во время выполнения Вашей трансакции произошла ошибка. Ваш заказ не подтвержден. (The status of your order could not be updated.)';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Спасибо за покупки в нашем магазине! Ниже Вы увидите информацию по Вашему заказу.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Спасибо Вам, за то, что снова выбираете наш магазин.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Вопросы? Проблемы?';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Получен следующий заказ.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Чтобы просмотреть заказ, проследуйте по ссылке ниже.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Нельзя указывать отрицательное количество товара.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Пожалуйста, введите корректное количество товара.';
	var $_PHPSHOP_CART_STOCK_1 = 'Введенное Вами количество товара больше имеющегося на складе. ';
	var $_PHPSHOP_CART_STOCK_2 = 'Количество товара на складе: $product_in_stock . ';
	var $_PHPSHOP_CART_STOCK_3 = 'Нажмите здесь, чтобы попасть в наш список очередности.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Пожалуйста, выберите из выпадающего списка, ниже на странице, необходимые параметры товара!';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = '---';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Г-н';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Г-жа';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Д-р';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Проф.';
	var $_PHPSHOP_DEFAULT = 'По умолчанию';
	var $_PHPSHOP_AFFILIATE_MOD = 'Администрирование партнерских программ';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Список партнеров';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Список партнеров';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Партнер';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Активен';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Рейтинг';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Всего в месяц';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Комиссия в месяц';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Список заказов';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'Email Партнеров';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'Email Партнеров';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Адресат (* = Всем)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Ваш Email';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Тема';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Включить текущую статистику';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Комиссионный процент';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Активен?';
	var $_PHPSHOP_DELIVERY_TIME = 'Обычно отгружается в течение ';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Информация о доставке';
	var $_PHPSHOP_MORE_CATEGORIES = 'больше категорий';
	var $_PHPSHOP_AVAILABILITY = 'Доступность';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'В настоящий момент данного товара нет в наличии.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Будет в наличии: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Сводка';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Статистика';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Заказчики';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'активные товары';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'неактивные товары';
	var $_PHPSHOP_STATISTIC_SUM = 'Сумма';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Новые заказы';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Новые заказчики';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Пожалуйста, укажите свой адрес электронной почты, чтобы мы могли уведомить Вас когда товар появится на складе. Мы не будем передавать этот адрес третьим лицам и использовать его для каких-либо целей, кроме уведомлений о наличии товара.<br /><br />Спасибо!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Спасибо за ожидание <br />Мы хотели бы уведомить Вас о том, что на склад поступил нужный Вам товар.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Уведомите меня!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Вид для печати';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Пожалуйста, выберите Authorize.net ИЛИ CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Статус конфигурационного файла:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'Доступен для записи';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'Недоступен для записи';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Глобал';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Пути & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Сайт';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Доставка';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Оформление';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Загрузки';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Платежи';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Использовать только как каталог';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'В этом случае отключаются все функции виртуальной корзины.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Показать цены';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Показать цены включая налоги?';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Покупатель будет видеть цены включая или исключая налоги.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Скрывает цены при использовании магазина в качестве каталога.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Налог на \'виртуальные\' товары';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'This determines whether items with zero weight are taxed or not. Modify ps_checkout.php->calc_order_taxable() to customize this.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Tax mode:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Based on shipping address';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Based on vendor address';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'This determines which tax rate is taken for calculating taxes:<br />
                                                <ul><li>the one from the state / country the store owner comes from</li><br/>
                                                <li>or the one from where the shopper comes from.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Enable multiple tax rates?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Check this, if you have products with different tax rates (e.g. 7% for books and food, 16% for other stuff)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Subtract payment discount before tax/shipping?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Enable Customer Review/Rating System';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'If enabled, you allow customers to <strong>rate products</strong> and <strong>write reviews</strong> about them. <br />
                                                                                So customers can write down their experiences with the product for other customers.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Sets the flag whether to subtract the Discount for the selected payment BEFORE (checked) or AFTER tax and shipping.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Customers can leave bank account data?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Check if your customers shall have the ability to provide their bank account data when registering to the shop.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Customers can select a state/region?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Check if your customers shall have the ability to select their state / region data when registering to the shop.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Must agree to Terms of Service?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Check if you want a shopper to agree to your terms of service before registering to the shop.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Check Stock?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Sets whether to check the stock level when a user adds an item to the shopping cart. 
                                                                                          If set, this will not allow user to add more items to the cart than are available in stock.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Enable Affiliate Program?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'This enables the affiliate tracking in the shop-frontend. Enable if you have added affiliates in the backend..';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Order-mail format:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Text mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML mail';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'This determines how your order confirmation emails are set up:<br />
                                                                                        <ul><li>as a simple text email</li>
                                                                                        <li>or as a html email with images.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Allow Frontend-Administration for non-Backend Users?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'With this setting you can enable the Frontend Administration for users who 
                                                                                              are storeadmins, but can\'t access the Mambo Backend (e.g. Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'URL';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'URL Вашего сайта. Обычно идентичный URL у Mambo (обязательно со слешем в конце!))';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'SECUREURL';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Защищённый URL Вашего сайта. (обычно https - со слешем в конце!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'COMPONENTURL';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'URL компонента mambo-phpShop (со слешем в конце!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'IMAGEURL';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'URL к папке с картинками для компонента mambo-phpShop. (со слешем в конце!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'ADMINPATH';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Путь к папке компонента mambo-phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'CLASSPATH';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Путь к папке классов \'classes\' Вашего phpShop\'a.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'PAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Путь к папке \'html\'  Вашего phpShop\'a.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'IMAGEPATH';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Путь к папке \'shop_image\' компонента phpSop.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'HOMEPAGE';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Страница, загружаемая по умолчанию.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'ERRORPAGE';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Эта страница загружается по умолчанию для отображения информации об ошибках.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'DEBUGPAGE';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Эта страница загружается по умолчанию для отображения отладочных сообщений.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'DEBUG ?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'DEBUG?             Включение вывода отладочной информации. В этом режиме внизу каждой страницы появляется отладочная информация - DEBUGPAGE. Она очень полезна при разработке и отладке магазина, поскольку показывает содержимое корзин, значения полей форм и т.п.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'FLYPAGE';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Страница по умолчанию для отображения подробной информации о товаре.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Шаблон категории';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Определяет шаблон категории по умолчанию для отображения товаров в этой категории.<br />
                                                                                                      Вы можете создавать новые шаблоны, изменяя существующие файлы шаблонов <br />
                                                                                                      (которые хранятся в папке <strong>COMPONENTPATH/html/templates/</strong> и начинаются с browse_)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Количество товаров в строке по умолчанию';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Определяет количество товаров в строке по умолчанию.<br />Пример: Если Вы установите 4, то шаблон категории отобразит 4 товара в строке';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Картинка ';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Картинка, показываемая, когда у товара отсутствует свое изображение.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Кол-во строк поиска';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Определяет количество строк на странице вывода  результатов .';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Цвет поиска 1';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Определяет цвет нечётных колонок на странице результов поиска.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Цвет поиска 2';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Определяет цвет чётных колонок на странице результов поиска.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Максимально строк';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Устанавливает количество строк, показываемых в списке выбора (select box).';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Показывать внизу страницы копирайт "powered by mambo-phpShop"?';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Отображает внизу страницы копирайт "powered by mambo-phpShop" с картинкой.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Выберите способ доставки Вашего магазина';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Стандартный модуль доставки с индивидуально сконфигурированными способами перевозки и тарифами. <strong>РЕКОМЕНДУЕТСЯ!</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = 'Модуль доставки, зависящей от зоны доставки. Версия 1.0<br />За информацией об этом модуле, пожалуйста, обращайтесь на сайт <a href="http://ZephWare.com">http://ZephWare.com</a><br />относительно деталей или контактов обращайтесь по адресу: <a href="mailto:zephware@devcompany.com">ZephWare@devcompany.com</a><br />Отметьте этот пункт, чтобы включить модуль доставки по зонам';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<<a href="http://www.ups.com" target="_blank">UPS Online(R) Tools</a> Расчёт стоимости доставки';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'Код доступа UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Ваш код доступа UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'ID пользователя UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ID пользователя, полученный от UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'Пароль UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Пароль для Вашего UPS-аккаунта';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Модуль InterShipper. Выбирайте только в том случае, Вы имеете аккаунт <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Отключить выбор способа доставки. Выберите, если Ваши клиенты покупают загружаемые по сети товары , которые не надо доставлять.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'Пароль InterShipper';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Ваш пароль для InterShipper-аккаунта.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper e-mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Ваш e-mail для InterShipper-аккаунта.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Ключ кодировки';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Используется для кодирования данных, хранимых в базе. Это означает, что файл базы будет всегда защищен от просмотра.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Включить Checkout Bar';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Включите, если хотите, чтобы во время процесса оформления заказа отображался Checkout Bar (1 - 2 - 3 - 4 с графикой).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Выберите процесс оформления заказа в Вашем магазине';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Стандартный:</strong><br/>
                1. Запрос адреса доставки<br />
                2. Запрос способа доставки<br />
                3. Запрос способа оплаты<br />
                4. Завершение заказа';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Процесс 2:</strong><br/>
               1. Запрос адреса доставки<br />
              2. Запрос способа оплаты<br />
              3. Завершение заказа';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Процесс 3:</strong><br/>
               1. Запрос способа доставки<br />
              2. Запрос способа оплаты<br />
              3. Завершение заказа';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Процесс 4:</strong><br/>
               1. Запрос способа оплаты<br />
              2. Завершение заказа';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Разрешить загрузки';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Установите флажок для включения возможности покупателям скачивать товары. Устанавливайте только, если Вы хотите торговать загружаемыми товарами.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Статус заказа, разрешающий загрузку.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Выберите статус заказа, при котором клиент извещается по e-mail о разрешенной загрузке товара.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Статус заказа, запрещающий загрузку';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Установите статус заказа, при котором загрузка товаров для клиента запрещена.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Корневая папка для загружаемых файлов - DOWNLOADROOT';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Физический путь к загружаемым покупателями файлам. (в конце - слэш!)<br><span class="message">Для безопасности Вашего магазина, пожалуйста, используйте папку, находящуюся НЕ ВЫШЕ КОРНЯ ВАШЕГО САЙТА.</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Максимальное кол-во загрузок';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Устанавливает количество загрузок, которые могут быть сделаны с указанием одного идентификатора загрузки - Download-ID (для одного заказа)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Срок действия загрузки';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Установите период времени <strong>в секундах</strong>, в течение которого загрузка доступна для клиента. Отсчёт времени начинается с первой загрузки! Когда время истечет, идентификатор загрузки (download-ID) становится недействительным.<br/> Примечание: 86400 сек. = 24 ч.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Разрешить IPN-платежи через PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Включите, чтобы разрешить клиентам использование платёжной системы PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'E-mail для PayPal:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Ваш деловой e-mail адрес для платежей PayPal, также используемый, как e-mail получателя (receiver_email).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Статус заказа для успешных транзакций';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Выберите статус, который примет заказ при успешном переводе денег через PayPal IPN. Если происходит продажа загружаемых по сети товаров - выберите статус, при котором разрешается загрузка товара (при котором клиент сразу извещается по электронной почте о доступности закачки).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Статус заказа для неудачных транзакций';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Выберите статус, который примет заказ для неудачном переводе денег через PayPal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Разрешить платежи через PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Включите, чтобы разрешить клиентам использование Австралийской платежной системы PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'Имя пользователя PayMate:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Ваш аккаунт пользователя PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Разрешить платежи через Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Включите чтобы использовать Authorize.net в phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Тестовый режим?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Отметьте  \'Да\' при тестировании. Выберите \'Нет\' для включения режима реальных транзакций.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Да';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Нет';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Login ID для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Укажите свой Login ID для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Ключ транзакций для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Укажите свой ключ транзакций для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Тип аутентификации';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Укажите тип аутентификации для Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Разрешить платежи через CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Включите, чтобы использовать CyberCash в phpShop.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'Продавец CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'Продавец CyberCash - это CyberCash Merchant ID';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'Ключ продавца CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'Ключ продавца CyberCash предусмотрен системой CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'URL оплаты CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'URL оплаты CyberCash - это URL, предусмотренный CyberCash для обеспечения безопасности платежей';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'Тип авторизации CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'Тип авторизации CyberCash предусмотрен системой CyberCash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Расширенный поиск';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Во всех категориях';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'По всей информации о товаре';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Только в названии товара';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Только в URL товара';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Только в описании товара';
	var $_PHPSHOP_SEARCH_AND = 'И';
	var $_PHPSHOP_SEARCH_NOT = 'НЕ';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Первый выпадающий список позволяет Вам искать только в заданной категории. Второй выпадающий список позволяет Вам искать только в конкретной части информации о товаре (например, в названии). После того, как Вы выберете необходимые пункты в этих списках (или оставите все как есть), не забудте ввести ключевое слово в первую строку поиска.';
	var $_PHPSHOP_SEARCH_TEXT2 = 'Вы можете еще больше уточнить критерии поиска, добавив ключевое слово кроме первой строки поиска еще и во вторую и выбрав оператор \'И\' или \'НЕ\'. 
        Выбор оператора \'И\' означает, что оба слова должны быть найдены, чтобы товар был показан в результатах поиска.
        Выбор оператора \'НЕ\' означает, что результатом поиска будут только те товары, в информации о которых первое ключевое слово присутствует, а второе - нет.';
	var $_PHPSHOP_ORDERBY = 'Сортировка по:';
	var $_PHPSHOP_CUSTOMER_RATING = 'Средний рейтинг от покупателей';
	var $_PHPSHOP_TOTAL_VOTES = 'Всего голосов';
	var $_PHPSHOP_CAST_VOTE = 'Пожалуйста, проголосуйте';
	var $_PHPSHOP_RATE_BUTTON = 'Оценить';
	var $_PHPSHOP_RATE_NOM = 'Рейтинг';
	var $_PHPSHOP_REVIEWS = 'Отзывы покупателей';
	var $_PHPSHOP_NO_REVIEWS = 'Для этого товара пока нет отзывов.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Станьте первым, кто напишет отзыв...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Чтобы написать отзыв Вы должны войти в магазин как пользователь.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Пожалуйста, поставьте оценку товара, чтобы завершить Ваш отзыв!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Пожалуйста, напишите чуть больше слов в своём отзыве. Минимальное количество символов: 100';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Пожалуйста, сократите Ваш отзыв. Максимальное количество символов: 2000';
	var $_PHPSHOP_WRITE_REVIEW = 'Написать отзыв об этом товаре!';
	var $_PHPSHOP_REVIEW_RATE = 'Первый шаг: поставьте свою оценку товару. Пожалуйста, выберите рейтинг между 0 (худший) и 5 звёздами (лучший).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Теперь, пожалуйста, напишите небольшой отзыв...<br />(минимум 100, максимум 2000 символов)';
	var $_PHPSHOP_REVIEW_COUNT = 'Напечатано символов: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Отправить отзыв';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Вы уже написали свой отзыв об этом товаре. Благодарим Вас...';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Спасибо за Ваш отзыв.';
	var $_PHPSHOP_COMMENT = 'Комментарий';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Добавить/изменить тип кредитной карты';
	var $_PHPSHOP_CREDITCARD_NAME = 'Название кредитной карты';
	var $_PHPSHOP_CREDITCARD_CODE = 'Короткий код кредитной карты';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Тип кредитной карты';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Список кредитных карт';
	var $_PHPSHOP_UDATE_ADDRESS = 'Обновить адрес';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Продолжить покупки';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Ваш заказ принят!';
	var $_PHPSHOP_ORDER_LINK = 'Нажмите эту ссылку для просмотра подробностей заказа.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Статус вашего заказа № {order_id} был изменён.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Новый статус:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Чтобы просмотреть подробности заказа, пожалуйста, перейдите по этой ссылке (или скопируйте её в ваш браузер и нажмите Enter):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Изменение статуса заказа: Ваш заказ {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Уведомить покупателя?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Пожалуйста, сначала измените статус заказа!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Скидка по умолчанию для группы покупателей (в %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Положительное значение Х означает: если товару не назначена цена для ЭТОЙ группы покупателей, то цена по умолчанию уменьшается на Х %. Отрицательное значение имеет противоположный эффект';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Скидка на товар';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Список скидок на товары';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Добавить/изменить скидку на товар';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Размер скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Введите размер скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Тип скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Процентная';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Постоянная';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Скидка будет вычитаться из цены, как процент или как постоянная величина?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Начальная дата скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Определяет дату начала действия скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Конечная дата сикдки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Определяет день окончания действия скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Для добавления скидок используйте Список скидок на товары!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Вы сохраняете';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Посмотреть большое изображение';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Стиль отображения валюты';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Символ валюты';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Здесь Вы можете использовать HTML-символы (например, &euro;,&pound;,&yen;,...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Десятичных знаков';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Количество десятичных знаков после запятой (может быть 0)<br><b>Если цена имеет большее количество десятичных знаков, произойдет округление.</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Десятичный разделитель';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Символ используется, как десятичный разделитель';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Разделитель тысяч';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Символ используется, для разделения тысяч (может быть пустым)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Положительный формат';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Формат, используемый для отображения положительных значений цены.<br>(вместо Symb подставляется символ валюты)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Отрицательный формат';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Формат, используемый для отображения отрицательных значений цены.<br>(вместо Symb подставляется символ валюты)';
	var $_PHPSHOP_OTHER_LISTS = 'Другие списки товаров';
	var $_PHPSHOP_MORE_IMAGES = 'Посмотреть больше картинок';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Доступные картинки для';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Вернуться к подробностям товара';
	var $_PHPSHOP_FILEMANAGER = 'Файловый менеджер';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Файловый менеджер: список товаров';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Добавить картинку/файл';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Добавлено картинок';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Загружаемый?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Добавлено файлов (схем,..)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Опубликован?';
	var $_PHPSHOP_FILES_LIST = 'Файловый менеджер: список картинок/файлов для';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Имя файла';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Заголовок';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Тип файла';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Изменить данные файла';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Большая картинка';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Маленькая картинка';
	var $_PHPSHOP_FILES_FORM = 'Загрузить файл для';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Текущий файл';
	var $_PHPSHOP_FILES_FORM_FILE = 'Файл';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Картинка';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Загрузить в';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Папка картинки товара по умолчанию';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Указать расположение файла';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Папка файла-загрузки  (для загружаемых товаров!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Автоматически создать маленькую картинку?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Опубликовать файл?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Заголовок (его видит покупатель)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Описание файла';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL файла (необязательно)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Пожалуйста, укажите допустимый путь!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Маленькая картинка была успешно создана!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Не удалось создать маленькую картинку!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Ошибка загрузки файла/картинки';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Невозможно удалить большую картинку.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Большая картинка успешно удалена.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Невозможно удалить маленькую картинку (возможно, она не существует): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Маленькая картинка успешно удалена.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Невозможно удалить файл.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Файл успешно удалён.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Извините, но запрашиваемый файл не был найден!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Картинка не найдена!';
	var $_PHPSHOP_COUPON_MOD = 'Купон';
	var $_PHPSHOP_COUPONS = 'Купоны';
	var $_PHPSHOP_COUPON_LIST = 'Список купонов';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Купон уже был использован.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Купон использован! Благодарим Вас.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Если у Вас есть код купона, пожалуйста, введите его:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Отправить';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Введенный код купона уже существует. Пожалуйста, ведите другой.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Обновить купон';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Щёлкните по коду купона, чтобы изменить его. Для удаления кода купона выделите его и нажмите Удалить:';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Код';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Процентная или Постоянная';
	var $_PHPSHOP_COUPON_TYPE = 'Тип купона';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Разовый купон удаляется сразу после использования для получения скидки в заказе. Постоянный купон может быть использован так часто, как захочет покупатель.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Разовый купон';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Постоянный купон';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Величина скидки';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Удалить код';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Вы уверены, что хотите удалить код этого купона?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Пожалуйста, заполните все поля.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Величина скидки должна быть числом.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Новый купон';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Код купона';
	var $_PHPSHOP_COUPON_PERCENT = 'Процентная';
	var $_PHPSHOP_COUPON_TOTAL = 'Постоянная';
	var $_PHPSHOP_COUPON_VALUE = 'Величина';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Код купона успешно сохранён.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Сохранить купон';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Скидка по купону';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Код купона не найден. Пожалуйста, введите код еще раз.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Разрешить использование купона';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Если Вы разрешите использование купона, то клиенты смогут получать скидки на покупки по коду купона.';
	var $_PHPSHOP_FREE_SHIPPING = 'Бесплатная доставка';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'Для Вашего заказа доставка бесплатная!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Минимальная сумма для бесплатной доставки';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Сумма (ВКЛЮЧАЯ НАЛОГ!), которая является минимальной для бесплатной доставки (пример: <strong>50</strong> означает, что бесплатная доставка будет доступна для клиента, заказавшего товаров на сумму 50 денежных единиц или более (включая налог).';
	var $_PHPSHOP_YOUR_STORE = 'Ваш магазин';
	var $_PHPSHOP_CONTROL_PANEL = 'Панель управления';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF-кнопка';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Показывать или нет PDF-кнопку в магазине';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Необходимо ли соглашаться с Условиями предоставления услуг при КАЖДОМ ЗАКАЗЕ?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Включите, если хотите, чтобы покупатель соглашался с Условиями  предоставления услуг при каждом заказе (перед завершением заказа).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Тип счета в банке Bank Account Type';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'До востребования Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Business Checking';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Saving';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Recurring Billings?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Укажите, хотите ли Вы recurring billings.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Внутреняя ошибка обработки запроса';
	var $_PHPSHOP_PAYMENT_ERROR = 'Сбой при обработке платежа';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Платёж успешно совершён';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS не смог обработать запрос о тарифе доставки.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Гарантированное время доставки (дни)';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'Способ вывоза UPS';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Как Вы передадите посылку на UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Упаковка UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Выберите тип упаковки по умолчанию.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Курьерская (частная) доставка? Residential Delivery?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Курьерская (частная) (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Коммерческая доставка (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Тариф для курьерской (RES) или коммерческой доставки (COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Ставка за погрузку/разгрузку (обработку) Handling Fee';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Ваша ставка за погрузку/разгрузку для этого способа доставки.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Класс налога';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Использовать следующий класс налога для стоимости доставки.';
	var $_PHPSHOP_ERROR_CODE = 'Код ошибки';
	var $_PHPSHOP_ERROR_DESC = 'Описание ошибки';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Показать/изменить ключ транзакции';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Показать/изменить пароль/ключ транзакции';
	var $_PHPSHOP_TYPE_PASSWORD = 'Пожалуйста, введите Ваш пароль пользователя';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Текущий пароль';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Текущий ключ транзакций';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Ключ транзакций был успешно изменён.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Длина кода Request/Capture (CVV2/CVC2/CID) на кредитной карточке';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Включите, для правильного значения CVV2/CVC2/CID (трёх- или четырехзначное число на обратной стороне кредитной карты, на лицевой стороне карт American Express)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Пожалуйста, введите трёх- или четырехрзначное число на обратной стороне Вашей кредитной карты (на лицевой стороне карт American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Для продолжения Вам нужно ввести код кредитной карты.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'ИЛИ введите имя файла';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'ПРИМЕЧАНИЕ: Здесь Вы можете заполнить имя файла. <strong>Файл с введенным здесь именем не будет загружен автоматически!!! Вы должны загрузить его на FTP вручную!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'ИЛИ загрузите новый файл';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Вы можете загрузить на сервер файл с вашего диска. Этот файл будет товаром, который Вы продаёте. Существующий файл будет заменён.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Введите здесь любой текст, который будет отображаться для покупателя на странице-флаере товара под словом Доставка.<br />например: 24ч, 48 часов, 3-5 дней, по заказу, ...';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'ИЛИ выберите картинку, которая будет отображаться тамже на странице подробностей (флаере) товара.<br />Картинки находятся в папке <i>/components/com_phpshop/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Список атрибутов';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '	<h4>Примеры формата списка атрибутов:</h4>
    <pre>
<strong>Размер</strong>,XL[+1.99],M,S[-2.99];<strong>Цвет</strong>,Красный,Зелёный,Жёлтый[=24.00];ИТакДалее,..,..</pre>
    <h4>Корректировка цен для использования с указанными атрибутами производится так:</h4>
    <strong>+</strong> (плюс)  - добавить это значение к основной цене товара.<br />
    <strong>-</strong> (минус) - вычесть это значение из основной цены товара.<br />
    <strong>=</strong> (равно) - установить цену товара равной этому значению.
    </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Список собственных атрибутов';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Пример формата списка собственных атрибутов:</h4>
        <pre><strong>   Название;Принадлежности;</strong>...<br />
Будут показаны два дополнительных поля Название и Принадлежности, обязательные для заполнения.</pre>';
	var $_PHPSHOP_MULTISELECT = 'Для выбора нескольких, удерживая CTRL, отмечайте мышью';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Разрешить платежи через  eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Включите, чтобы использовать eProcessingNetwork.com в phpShop.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Тестовый режим ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Выберите \'Да\' для включения режима тестирования. Выберите \'Нет\' для включения реальных транзакций.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com Login ID';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Укажите Ваш Login ID в системе eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'Ключ транзакций в eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Укажите ключ транзакций в системе eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Тип аутентификации';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Укажите тип аутентификации в системе eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Сопутствующие товары';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Вы можете указать сопутствующие (связанные) товары используя этот список. Просто выделите один или несколько товаров в списке и они станут  <strong>Сопутствующими Товарами</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Вас также могут заинтересовать и эти товары';
	var $_PHPSHOP_IMAGE_ACTION = 'Действие над картинкой';
	var $_PHPSHOP_NONE = 'не производить действия';
	var $_PHPSHOP_ORDER_HISTORY = 'История заказа';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Комментарий';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Комментарий к Вашему заказу';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Присоединить этот комментарий?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Дата добавления';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Уведомить покупателя?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Изменение статуса заказа';
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
	var $_PHPSHOP_PARAMETERS_LBL = 'Параметры';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Тип товара';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Список типов товара';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Добавить/редактировать тип товара';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Список типов товара для';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Список типов товара';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Добавить тип товара для';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Добавить тип товара';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Тип товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Название типа товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Описание типа товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Параметры';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Информация о типе товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Публиковать?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Страница отображения типа товара (Browse Page)';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Флаер типа товара (Flypage)';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Параметры типа товаров';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Информация о параметрах';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Тип продукта не найден!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Название параметра в базе';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Это название является названием столбца в таблице базы и должно быть уникальным и не содержать пробелов.<BR>Например: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Название параметра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Описание параметра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Тип параметра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Целый';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Текст';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Короткий текст';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Дробный';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Символ';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Дата и время';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Дата';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'ГГГГ-ММ-ДД';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Время';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'ЧЧ:ММ:СС';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Разделяющая линия';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Список значений';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Возможные значения';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Разрешить выбирать несколько<br />возможных значений?<br />(если оставить пустой - <br />можно будет выбрать только одно)';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Если задан тип Список значений, то параметр может принимать только возможные значения.<BR />Пример для возможных значений:</strong> Сталь;Дерево;Пластик;...';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Значение по умолчанию';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Для значения параметра по умолчанию используйте следующие форматы:<ul><li>Дата: ГГГГ-ММ-ДД</li><li>Время: ЧЧ:ММ:СС</li><li>Дата и время: ГГГГ-ММ-ДД ЧЧ:ММ:СС</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Единица измерения';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Расширенный поиск по дополнительным параметрам';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Расширенный поиск по дополнительным параметрам';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Для поиска товара по дополнительным параметрам<BR>выберите категорию поиска, пожалуйста:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'По Вашему запросу ничего не найдено.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'I am sorry. There is no published Product Type with this name.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'равно';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'не равно';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Полнотекстовый поиск';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'All Selected';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Any Selected';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Очистить все поля';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Поиск в категории';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Изменить параметры';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'по убывающей';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'по возрастающей';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Параметры категории';
	var $_PHPSHOP_FEE = 'Fee';
	var $_PHPSHOP_PRODUCT_CLONE = 'Клонировать товар';
	var $_PHPSHOP_CSV_SETTINGS = 'Настройки';
	var $_PHPSHOP_CSV_DELIMITER = 'Разделитель';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Символ-ограничитель полей';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Загрузка CSV файла';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Загрузить CSV файл';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Загрузка из папки';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Загрузить CSV файл с сервера';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Экспортировать в CSV файл';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Укажите очередность полей CSV-файла';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Очередность по умолчанию';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Моя собственная очередность';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Экспортировать все товары в CSV файл';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'Конфигурация импорта/экспорта CSV';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Сохранить настройки';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Название поля';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'Значение по умолчанию';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Очередность полей';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Поле обязательное?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Импорта/Экспорт';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Добавить новое поле';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Документация';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Извините, но запрошенный Вами товар не найден!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Показывать товары, которых уже нету на складе';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Если отмечено, то товары, у которого количество на складе равно нулю будут отображаться в магазине. Иначе такие продукты показываться не будут.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Number {unit}s in packaging:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Number {unit}s in box:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Hide out of stock products';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Featured & Discounted Products';
	var $_PHPSHOP_FEATURED = 'Featured';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Back to the country';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Back to the file manager';
	var $_PHPSHOP_ADD_STATE = 'Add a State';
	var $_PHPSHOP_LIST_STATES = 'List States';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'featured AND discounted';
	var $_PHPSHOP_SHOW_FEATURED = 'featured products';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'discounted products';
	var $_PHPSHOP_FILTER = 'Filter';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Back to the Main Site';
	var $_PHPSHOP_EXPAND_TREE = 'Expand Tree';
	var $_PHPSHOP_COLLAPSE_TREE = 'Collapse Tree';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Discounted Price';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Here you can override the discount setting fill in a special discount price for this product.<br/>
The Shop will create a new discount record from the discounted price.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Price per Unit';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Shop is offline?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'If you check this, the Shop will display an Offline Message.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Offline Message';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Table Prefix for Shop Tables';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'This is <strong>vm</strong> per default';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Show Page Navigation at the Top of the Product Listing?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Switches On or Off the Display of Page Navigation at the Top of the Product Listings in the Frontend.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Show the Number of Products?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Show the Number of Products in a Category like Category (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Add-to-Cart Button Style';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Enable Dynamic Thumbnail Resizing?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'If checked, you enable dynamic Image Resizing. This means that all Thumbnail Images are resized to fit the Sizes you provide below,
        using PHP\'s GD2 functions (you can check if you have GD2 support by browsing to "System" -> "System Info" -> "PHP Info" -> gd. 
        The Thumbnail Image quality is much better than Images which were "resized" by the browser. The newly generated Images are put into the directory /shop_image/prduct/resized. If the Image has already been resized, this copy will be send to the browser, so no image is resized again and again.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Thumbnail Image Width';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = 'The target <strong>width</strong> of the resized Thumbnail Image.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Thumbnail Image Height';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = 'The target <strong>height</strong> of the resized Thumbnail Image.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Please select at least one Checkbox in the Shipping Configuration!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Price Configuration';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Membergroup to show prices to';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'The selected membergroup and all groups with higher permissions will be able to see the product prices.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Show "(including XX% tax)" when applicable?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'When checked, users will see the text "(including xx% tax)" when prices are shown incl. tax.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Show the price label for packaging?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'When checked, the price label is derived from the product\'s unit and packaging values:
<strong>Price per Unit (10 pieces)<strong><br/>
When not checked, price labels look just as usual: <strong>Price: $xx.xx</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'more Core Settings';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Core Settings';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Frontend Features';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Tax Configuration';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Quantity Start';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Quantity End';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'User Registration Settings';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'User registration allowed?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'New account activation necessary?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Use silent (hidden) user registration?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'When enabled, users don\'t need to fill in a username and password for a new account. Instead the email address is used for the new account and a random password is generated. The registration details are mailed to the customer.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Hello %s,

Thank you for registering at %s. Your customer account has been created.
You may login to %s using the following username and password:

Username - %s
Password - %s
';
	var $_PEAR_LOG_CRIT = 'Critical';
	var $_PEAR_LOG_ERR = 'Error';
	var $_PEAR_LOG_WARNING = 'Warning';
	var $_PEAR_LOG_INFO = 'Info';
	var $_PEAR_LOG_TIP = 'Info';
	var $_PEAR_LOG_ALERT = 'Alert';
	var $_PEAR_LOG_EMERG = 'Emergency';
	var $_PEAR_LOG_NOTICE = 'Notice';
	var $_PEAR_LOG_DEBUG = 'Debug';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Enable PayFlow Pro payment?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Check to use VeriSign\'s PayFlow Pro with VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Test mode ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Select \'Yes\' while testing. Select \'No\' for enabling live transactions.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'VeriSign processing Partner ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'The Partner ID provided to you by the authorized VeriSign Reseller that registered you for the PayFlow Pro service';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro Login ID';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'This is your PayFlow Pro Login ID';
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
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA = 'Payment Extra Info';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_EXTRA_TIP = 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME = 'Payment class name (e.g. <strong>ps_netbanx</strong>)';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CLASSNAME_TIP = 'Leave blank if you\'re not sure what to fill in!';
	var $_CMN_PUBLISH = 'Publish';
	var $_CMN_UNPUBLISH = 'Unpublish';
	var $_VM_MENUBAR_PLEASESELECT_PUBLISH = 'Please make a selection from the list to publish';
	var $_VM_MENUBAR_PLEASESELECT_UNPUBLISH = 'Please make a selection from the list to unpublish';
	var $_VM_MENUBAR_PLEASESELECT_DELETE = 'Please make a selection from the list to delete';
	var $_VM_MENUBAR_CONFIRM_DELETE = 'Are you sure you want to delete selected items?';
	var $_VM_MENUBAR_PLEASESELECT_TO = 'Please make a selection from the list to';
	var $_VM_CANADAPOST_SEND_LANGUAGE_CODE = 'EN';
	var $_VM_CANADAPOST_FORM_HANDLING_DATE = 'Expected Date of Arrival';
	var $_VM_CANADAPOST_FORM_HANDLING_LBL = 'Handling Charge';
	var $_VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID = 'Canada Post Merchant ID';
	var $_VM_SHIPPING_METHOD_CANADAPOST_MERCHANT_CPCID_EXPLAIN = 'Your Canada Post Merchant ID';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER = 'Canada Post Server IP';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_SERVER_EXPLAIN = 'This is the Canada Post Server IP Address - default is 206.191.4.228';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PORT = 'Canada Post Server Port';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PORT_EXPLAIN = 'This is the Canada Post Server Port<br /> The server port must be 30000<br /> If you cannot use this port, you will not be able to use this module<br /> check with your hosting company to see if you can access this port first';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX = 'Canada Post Federal Tax Amount';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_FEDERAL_TAX_EXPLAIN = 'Federal Tax Amount goes here';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX = 'Canada Post Provincal Tax Amount';
	var $_VM_SHIPPING_METHOD_CANADAPOST_CP_PROVINCIAL_TAX_EXPLAIN = 'Provincal Tax Amount goes here';
	var $_VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN = 'Arrival Date Description';
	var $_VM_SHIPPING_METHOD_CANADAPOST_ARRIVAL_DATE_EXPLAIN_I = 'Description for Arrival Dates';
	var $_VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN = 'Handling Charge Description';
	var $_VM_SHIPPING_METHOD_CANADAPOST_HANDLING_CHARGE_EXPLAIN_I = 'Description for Handling Carges';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>