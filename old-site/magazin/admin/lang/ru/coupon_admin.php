<?php
/*
#####################################
#  ShopOS: Shopping Cart Software.
#  Copyright (c) 2008-2010
#  http://www.shopos.ru
#  http://www.shoposs.com
#  Ver. 1.0.0
#####################################
*/

define('TOP_BAR_TITLE', 'Статистика');
define('HEADING_TITLE', 'Купоны');
define('HEADING_TITLE_STATUS', 'Статус : ');
define('TEXT_CUSTOMER', 'Клиент:');
define('TEXT_COUPON', 'Название купона');
define('TEXT_COUPON_ALL', 'Все купоны');
define('TEXT_COUPON_ACTIVE', 'Активные купоны');
define('TEXT_COUPON_INACTIVE', 'Неактивные купоны');
define('TEXT_SUBJECT', 'Тема:');
define('TEXT_FROM', 'От:');
define('TEXT_FREE_SHIPPING', 'Бесплатная доставка');
define('TEXT_MESSAGE', 'Сообщение:');
define('TEXT_SELECT_CUSTOMER', 'Выберите клиента');
define('TEXT_ALL_CUSTOMERS', 'Все клиенты');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Всем подписавшимся на рассылку магазина');
define('TEXT_CONFIRM_DELETE', 'Вы действительно хотите удалить этот купон?');

define('TEXT_TO_REDEEM', 'Вы можете использовать этот купон в процессе оформления заказа в нашем магазине. В процессе оформления заказа Вам будет предложено ввести код купона, вводите код своего купона и нажимайте кнопку "Применить".');
define('TEXT_IN_CASE', ' в случае возникновения каких-либо проблем. ');
define('TEXT_VOUCHER_IS', 'Код купона: ');
define('TEXT_REMEMBER', 'Не забывайте код купона, если Вы забудете код купона, Вы не сможете им воспользоваться в нашем интернет-магазине.');
define('TEXT_VISIT', 'когда Вы посещаете наш интернет-магазин по адресу ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' и вводите код купона ');

define('TABLE_HEADING_ACTION', 'Действие');

define('CUSTOMER_ID', 'Код клиента');
define('CUSTOMER_NAME', 'Имя');
define('REDEEM_DATE', 'Дата использования купона');
define('IP_ADDRESS', 'IP Адрес');

define('TEXT_REDEMPTIONS', 'Статистика использования купона');
define('TEXT_REDEMPTIONS_TOTAL', 'Всего использован раз');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Данный клиент использовал раз');
define('TEXT_NO_FREE_SHIPPING', 'Нет бесплатной доставки');

define('NOTICE_EMAIL_SENT_TO', 'Уведомление: Email отправлен: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Ошибка: Вы не выбрали клиента.');
define('COUPON_NAME', 'Название купона');
define('COUPON_AMOUNT', 'Номинал купона');
define('COUPON_CODE', 'Код купона');
define('COUPON_STARTDATE', 'Купон действителен с');
define('COUPON_FINISHDATE', 'Купон действителен до');
define('COUPON_FREE_SHIP', 'Бесплатная доставка');
define('COUPON_DESC', 'Описание купона');
define('COUPON_MIN_ORDER', 'Сумма минимального заказа');
define('COUPON_USES_COUPON', 'Сколько раз можно использовать купон при оформлении заказов');
define('COUPON_USES_USER', 'Сколько раз может использовать этот купон один покупатель');
define('COUPON_PRODUCTS', 'Купон действителен только для конкретных товаров');
define('COUPON_CATEGORIES', 'Купон действителен только для конкретных категорий');
define('VOUCHER_NUMBER_USED', 'Купон использован раз');
define('DATE_CREATED', 'Дата создания');
define('DATE_MODIFIED', 'Последние изменения');
define('TEXT_HEADING_NEW_COUPON', 'Создать новый купон');
define('TEXT_NEW_INTRO', 'Чтобы создать новый купон, Вы должны заполнить следующую форму.<br>');


define('COUPON_NAME_HELP', 'Укажите короткое название купона.');
define('COUPON_AMOUNT_HELP', 'Вы можете указать либо сумму купона(укажите просто сумму цифрами, например чтобы сумма купона был 100$, просто пишите - 100), либо процент скидки(укажите процент, который будет дан покупателю, использовавшему купон при оформлении заказа, например, чтобы дать скидку 10%, так и пишите - 10%), используя данный купон, покупатель получает либо вычет суммы купона из общей суммы заказа, либо получает скидку от общей суммы заказа, в зависимости от того, что Вы укажите в данном поле, либо сумму вычета, либо процент скидки.');
define('COUPON_CODE_HELP', 'Вы можете указать код купона самостоятельно, но если Вы оставите данное поле пустым(просто не будете заполнять данное поле), код купона будет сгенерирован автоматически.');
define('COUPON_STARTDATE_HELP', 'Дата, начиная с которой, купон будет активен и его можно будет использовать при оформлении заказов.');
define('COUPON_FINISHDATE_HELP', 'Дата, после которой купон уже нельзя будет применить при оформлении заказов.');
define('COUPON_FREE_SHIP_HELP', 'Отметьте данное поле, если Вы хотите чтобы покупатель, использующий купон при оформлении заказа, получил бесплатную доставку своего заказа. Внимание. Данная опция не может совместно использоваться с "Номиналом купона", т.е. нельзя сразу дать покупателю вычет суммы(или скидку) по купону и одновременно бесплатную доставку, только что-то одно, либо вычет(или скидка), либо бесплатная доставка. Данная опция учитывает "Сумму минимального заказа", т.е. Вы можете, например, давать покупателю, использующему купон, бесплатную доставку, только если сумма его заказа выше определённой Вами, а можете и не ограничивать сумму минимального заказа и давать бесплатную доставку всем, кто использует купон при оформлении заказа.');
define('COUPON_DESC_HELP', 'Коротко опишите создаваемый купон.');
define('COUPON_MIN_ORDER_HELP', 'Вы можете ограничить(а можете не ограничивать) действие купона минимальной суммой заказа, т.е. если сумма заказа меньше указанной в данной поле суммы, то купон не может быть применён для данного заказа, только для заказов выше указанной суммы. Пропустите данное поле, если Вы не хотите устанавливать ограничений.');
define('COUPON_USES_COUPON_HELP', 'Максимальное количество раз, которое может быть использован купон, не заполняйте данное поле, если Вы не хотите ограничивать действие купона.');
define('COUPON_USES_USER_HELP', 'Максимальное количество раз, которое может быть использован купон одним покупателем, не заполняйте данное поле, если Вы не хотите ограничивать действие купона.');
define('COUPON_PRODUCTS_HELP', 'Вы можете ограничить действие купона только лишь на конкретные товары в Вашем интернет-магазине, перечислив коды товаров через запятую. Пропустите данное поле, если Вы не хотите устанавливать ограничений.');
define('COUPON_CATEGORIES_HELP', 'Вы можете ограничить действие купона только лишь на конкретные категории в Вашем интернет-магазине, перечислив коды категорий через запятую. Пропустите данное поле, если Вы не хотите устанавливать ограничений.');
?>