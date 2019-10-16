<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вебинары");
?>

<div class="container">
	<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
			"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
			"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		),
		false
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
            <?=$APPLICATION->ShowTitle()?> </h1>
        </h1>

        <?if(CUser::IsAuthorized()):?>
		    <p><strong>Уважаемые пользователи!</strong></p>

            <p>Плановая машина по маршруту Склад ЮМП-Подольск — Транспортная компания Деловые Линии планируется на Пятницу, 11.10.2019</p>

            <p>Доставка для заказчика до терминала Транспортной компании в Москве является бесплатной.</p>

            <p>Чтобы воспользоваться данным предложением, просим Вас связаться с менеджером, выписавшим счет, до 13:00 Четверга, 10.10.2019</p>
        <?else:?>
            <p>Для просмотра раздела Вам необходимо авторизоваться</p>
            <?$APPLICATION->IncludeComponent(
                "bitrix:system.auth.form", 
                ".default", 
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "REGISTER_URL" => "registration.php",
                    "FORGOT_PASSWORD_URL" => "forgotpassword.php",
                    "PROFILE_URL" => "/cabinet/",
                    "SHOW_ERRORS" => "Y"
                ),
                false
            );?>
        <?endif?>





        

        
    </div>
	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>