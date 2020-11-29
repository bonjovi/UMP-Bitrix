<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ЭСРЗ-1С");
?><div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
	<div class="simplepage">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"dealer_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "dealer",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "dealer",
		"USE_EXT" => "Y"
	)
);?>
		<h1 class="title title_large simplepage__title">
		ЭСРЗ-1С </h1>
		 <?if(CUser::IsAuthorized()):?>
		<p>
 <strong>Уважаемые пользователи!</strong>
		</p>
		<p>
			 Плановая машина по маршруту Склад ЮМП-Подольск — Транспортная компания Деловые Линии планируется на (дата уточняется). Доставка для заказчика до терминала Транспортной компании в Москве является бесплатной.
		</p>
		<p>
			 Чтобы воспользоваться данным предложением, просим Вас связаться с менеджером, выписавшим счет, до 13:00 по м.в. дня, предшествующего дню доставки.
		</p>
		<p>
			  Новый прайс лист доступен с 09.11.2020 - <a href="/images/files/docx/price_ump_all_09.11.2020.xlsx">Скачать</a> (1.6 мб)
		</p>
		<p>
 <a href="https://umpshop.umpgroup.ru/ru_RU/" target="_blank">Вход в ЭСРЗ-1С &gt;&gt;&gt;</a>
		</p>
		 <?else:?>
		<p>
			 Для просмотра раздела Вам необходимо авторизоваться
		</p>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"FORGOT_PASSWORD_URL" => "/cabinet/auth/forgotpassword.php",
		"PROFILE_URL" => "/cabinet/",
		"REGISTER_URL" => "/cabinet/auth/registration.php",
		"SHOW_ERRORS" => "Y"
	)
);?> <?endif?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>