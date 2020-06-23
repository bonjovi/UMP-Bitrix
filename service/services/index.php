<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
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
            Услуги
        </h1>

        <h2 class="title title_medium">Ремонт оборудования</h2>
        <p>Авторизированный сервисный центр компании ЮНИТ МАРК ПРО производит ремонт любой сложности (в т.ч. гарантийный) оборудования фирм:<br> - Brady,<br> - Klauke,<br> - Greenlee,<br> - SIC Marking</p>
        <p>А так же ремонт OEM исполнений пресс-инструментов фирмы Klauke, выпускаемого под марками:<br> AQUATECNIC SYSTEMS, Boellhoff, BRUGMANN, Henco, ISOTUBI, Kohler, Pipelife, Rautool, Rehau, Unicor, UPONOR, Unipipe, WAVIN и ряда других.</p>
        <p>Специалисты сервисного центра проводят работы по пуско-наладке всего спектра оборудования, обучению персонала по работе с оборудованием и сопутствующим программным обеспечением. Возможен выезд специалиста в любой регион России.</p>
        <p>Для продукции фирмы SIC Marking возможно заключение договора на сервисное обслуживание оборудования.</p>
        <p>Сервисный центр проконсультирует Вас по сложным вопросам эксплуатации оборудования. Вы можете задать вопрос через <a href="/support-and-service/kontakty">форму обратной связи</a></p>

    </div>
	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>