<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
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
		    <h2 class="title title_medium" style="margin-bottom:100px;">Сервис переезжает. Ожидайте.</h2>
        <?else:?>
            <p>Для просмотра раздела Вам необходимо авторизоваться</p>
            <?$APPLICATION->IncludeComponent(
                "bitrix:system.auth.form", 
                ".default", 
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "FORGOT_PASSWORD_URL" => "/cabinet/auth/forgotpassword.php",
                    "PROFILE_URL" => "/cabinet/",
                    "REGISTER_URL" => "/cabinet/auth/registration.php",
                    "SHOW_ERRORS" => "Y"
                ),
                false
            );?>
        <?endif?>





        

        
    </div>
	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>