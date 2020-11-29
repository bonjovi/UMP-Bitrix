<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Инструкции");
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
            Инструкции
        </h1>
        <style>
            table.list td {
                padding:10px;
            }
        </style>
        <table class="list" cellpadding="20">
        <tbody>
        <tr>
        <td width="300">
        <p class="text-center"><img src="https://umpgroup.ru/f/images/brands/horizontal/brady.png" alt="" width="104" height="23"></p>
        <p>Инструкции и руководства для принтеров и программного обеспечения Brady на русском языке</p>
        </td>
        <td>
        <h4>Портативные системы печати</h4>
        <ul>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BMP21_QuickStart_RU.pdf" target="_blank">BMP21 Быстрый старт</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BMP21+ QS 3-19-14_RU.pdf" target="_blank">BMP21-PLUS Краткое руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/bmp21plus_rukovodstvo_ru.pdf" target="_blank">BMP21-PLUS Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BMP41 QS_RU.pdf" target="_blank">BMP41 Краткое руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BMP41_user_manual_RU.pdf" target="_blank">BMP41 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BMP51_UserManual_RU.pdf" target="_blank">BMP51 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/Y2190114_QS_BMP53_RU.pdf" target="_blank">BMP53 Краткое руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BMP61_user_manual_RU.pdf" target="_blank">BMP61 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BMP71_руководство пользователя.pdf" target="_blank">BMP71 Полное руководство</a></li>
        </ul>
        <h4>Стационарные системы печати</h4>
        <ul>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/bbp11 Инструкция.pdf" target="_blank">BBP11 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BBP11, материалы с просечками.pdf" target="_blank">BBP11 Инструкция по печати материалов с просечками</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/25-01-2016_brd_bbp12_qig.pdf" target="_blank">BBP12 Быстрый старт</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/25-01-2016_brd_bbp12_ug.pdf" target="_blank">BBP12 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/Brady IP - Руководство по быстрому запуску.pdf" target="_blank">IP Быстрый старт</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/i5100_User_Manual_Ru.pdf" target="_blank">i5100 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/i7100_user_manual_RU.pdf" target="_blank">i7100 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BP-Precision_Краткое руководство.pdf" target="_blank">BP-PR Plus Краткое руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BBP31_brief_manual_RU.pdf" target="_blank">BBP31 Краткое руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BBP31_user_manual_RU.pdf" target="_blank">BBP31 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BBP33_quick_start_RU.pdf" target="_blank">BBP33 Быстрый старт</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/brady_globalmark2_rukovodstvo_RU.pdf" target="_blank">GlobalMark Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BBP35-37_user_manual_RU.pdf" target="_blank">BBP35/37 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/BBP85_user_manual_RU.pdf" target="_blank">BBP85 Полное руководство</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/brady/Wraptor_Руководство_пользователя_русс.pdf" target="_blank">Wraptor Полное руководство</a></li>
        </ul>
        <h4>Программное обеспечение</h4>
        <ul>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/soft/Codesoft_Быстрый старт.pdf" target="_blank">Codesoft Быстрый старт</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/soft/MW QuickStart_RU.pdf" target="_blank">MarkWare Быстрый старт</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/soft/MW UserGuide_RU.pdf" target="_blank">MarkWare Руководство пользователя</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/soft/User-Guide-Label-Maker-6.pdf" target="_blank">Label Mark руководство пользователя (англ.)</a></li>
        </ul>
        </td>
        </tr>
        <tr>
        <td>
        <p class="text-center"><img src="https://umpgroup.ru/f/images/brands/horizontal/sic.jpg" alt=""></p>
        <p>Инструкции и руководства для принтеров и программного обеспечения SIC Marking на русском языке</p>
        </td>
        <td>
        <ul>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/sic/NOTE8V5RU-R02.pdf" target="_blank">Контроллер е8 Инструкция по запуску</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/sic/NOTE9V1RU.pdf" target="_blank">Контроллер е9 Инструкция по запуску</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/sic/NOTE10V6RU-R01.pdf" target="_blank">Контроллер е10 Инструкция по запуску</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/sic/C153_RUS_R01.pdf" target="_blank">Аппарат c153 Руководство пользователя</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/sic/Руководство пользователя p62 p122.pdf" target="_blank">Аппараты p62, p122 Руководство пользователя</a></li>
        <li><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/instructions/sic/Обслуживание ударного модуля.pdf" target="_blank">Ударный модуль: Инструкция по обслуживанию</a></li>
        </ul>
        </td>
        </tr>
        <tr>
        <td>
        <p class="text-center"><img src="https://umpgroup.ru/f/images/brands/horizontal/klauke-greenlee.jpg" alt=""></p>
        <p>Инструкции по эксплуатации</p>
        </td>
        <td>
        <h4>Ожидает наполнения...</h4>
        </td>
        </tr>
        </tbody>
        </table>


    </div>
	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>