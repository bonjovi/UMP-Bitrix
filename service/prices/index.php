<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Цены");
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
            "service_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "dealer",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "service",
                "USE_EXT" => "Y"
            )
        );?>

        <h1 class="title title_large simplepage__title">
            Цены
        </h1>
							
        <p>Чтобы узнать стоимость работ, смотрите прайс-лист:</p>
        <ul>
        <li><a href="https://umpgroup.ru/images/files/pdf/prices/01.11.2017_brady.pdf" target="_blank">стоимость работ по продукции Brady</a></li>
        <li><a href="https://umpgroup.ru/images/files/pdf/prices/01.11.2017_klauke.pdf" target="_blank">стоимость работ по продукции Klauke и Greenlee</a></li>
        <li><a href="https://umpgroup.ru/images/files/pdf/prices/01.11.2017_sic.pdf" target="_blank">стоимость работ по продукции SIC Marking</a></li>
        </ul>  

    </div>
	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>