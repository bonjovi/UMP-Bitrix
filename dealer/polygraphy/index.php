<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Полиграфия");
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
            Полиграфия
        </h1>

        <p>Список полиграфии</p>



        

        
    </div>
	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>