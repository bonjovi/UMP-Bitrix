<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Полиграфия");
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
		<h1 class="title title_large simplepage__title"><?=$APPLICATION->ShowTitle()?> </h1>
		<?if(CUser::IsAuthorized()):?>
            <h2 class="title title_medium">Каталоги Маркировка BRADY</h2>
                <ul>
                    <li><a class="spoiler-link" href="#">Идентификационные решения BRADY 2019</a></li>
                    <ul class="not-display">
                        <li><a href="/images/catalogues_download/catalogi/brady/01_portativnye_printery.pdf" target="_blank">Портативные принтеры</a> (8.2 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/02_nastolnye_printery.pdf" target="_blank">Настольные принтеры</a> (4.88 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/03_materialy_TNT-2020.pdf" target="_blank">Материалы THT</a> (7.28 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/04_gotovaya_markirovka_materialy_dlya_lazernoj_pechati-2020.pdf" target="_blank">Готовая маркировка, материалы для лазерной печати</a> (3.13 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/05_programmnoe obespechenie.pdf" target="_blank">Программное обеспечение</a> (581 kб)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/06_spravochnaya_informaciya_podbor_materialov-2020.pdf" target="_blank">Справочная информация: подбор материалов</a> (1.36 МБ)</li>
                    </ul>
                    <li><a class="spoiler-link" href="#">Портативные принтеры</a></li>
                    <ul class="not-display">
                        <li><a href="/images/catalogues_download/catalogi/brady/Catalog_portable_printers_BRADY_2020.pdf" target="_blank">Портативные принтеры 2020</a> (3.5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/bmp61small.pdf" target="_blank">Портативный принтер ВМР61</a> (5.0 МБ)</li>
                    </ul>
                    <li><a class="spoiler-link" href="#">Промышленные принтеры</a></li>
                    <ul class="not-display">
                        <li><a href="/images/catalogues_download/catalogi/brady/BBP12_catalogue.pdf" target="_blank">Принтер этикеток ВВР12</a> (0.7 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/i7100_catalogue.pdf" target="_blank">Принтер этикеток i7100</a> (2.5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/BBP31_catalogue_RU.PDF" target="_blank">Принтер этикеток ВВР31</a> (0.8 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/BBP33_catalogue.pdf" target="_blank">Принтер этикеток BBP33</a> (0.3 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/BBP35_37_Brochure_ENG.pdf" target="_blank">Принтер этикеток BBP35/37 (англ.)</a> (1.5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/BBP85_BROCHURE_RUS.pdf" target="_blank">Принтер этикеток BBP85</a> (1.2 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/brady/J5000_catalogue.pdf" target="_blank">Принтер этикеток J5000</a> (1.3 МБ)</li>
                    </ul>
                </ul>
                <h2 class="title title_medium">Каталоги Безопасность BRADY</h2>
                <ul>
                    <li><a href="/images/files/pdf/catalogues/safety2014/Комплексные%20решения%20БИОТ_sm.pdf" target="_blank">Комплексные решения по БиОТ 2014</a> (11 МБ)</li>
                    <li><a href="/images/catalogues_download/catalogi/brady/BRADY_50_visual_new.pdf" target="_blank">50 примеров визуализации</a> (5.11 МБ)</li>
                    <li><a href="/images/catalogues_download/catalogi/loto/Brady_LOTO_catalog_2018.pdf" target="_blank">Система предупреждающей блокировки и маркировки Lockout Tagout 2018/19</a> (9.52 МБ)</li>
                    <li><a href="/images/catalogues_download/catalogi/brady/BRADY_Area%20marking_2020-2021.pdf" target="_blank">Сигнальная разметка BRADY 2020-21</a>&nbsp;(2.41 МБ)</li>
                </ul>
                <h2 class="title title_medium">Каталоги Сорбенты BRADY</h2>
                <ul>
                    <li><a href="/images/catalogues_download/catalogi/brady/Catalog_BRADY_SPC _2020.pdf" target="_blank">Сорбенты BRADY SPC 2020</a> (9.49 МБ)</li>
                </ul>
                <h2 class="title title_medium">Каталоги Электротехника</h2>
                <ul>
                    <li><a href="/images/catalogues_download/catalogi/electro/Catalog_Electro_2020.pdf" target="_blank">Электро 2020</a> (5.55 МБ)</li>
                    <li><a href="/images/catalogues_download/catalogi/weicon/WEICON_TOOLS_rus.pdf" target="_blank">Инструменты WEICON-Tools</a> (7.31 МБ)</li>
                </ul>
                <h2 class="title title_medium">Каталоги WEICON</h2>
                <ul>
                    <li><a href="/images/catalogues_download/catalogi/weicon/Catalog_WEICON_2020_21.pdf" target="_blank">Промышленная химия WEICON 2020-2021</a> (7,38 МБ)</li>
                    <li><a class="spoiler-link" href="#">Промышленная химия WEICON 2017</a></li>
                    <ul class="not-display">
                        <li><a href="/images/catalogues_download/catalogi/weicon/metalpolimer.pdf" target="_blank">Металлополимеры</a> (1,4 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/repair_kits.pdf" target="_blank">Ремонтные наборы для судоходства</a> (0,4 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/separate_lubricants.pdf" target="_blank">Разделительная смазка для форм</a> (0,3 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/repair_sticks.pdf" target="_blank">Ремонтные стики</a> (0,6 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/epoxy_glue.pdf" target="_blank">Эпоксидные клеи</a> (0,5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/poliuretane_double_component.pdf" target="_blank">Уретан</a> (0,7 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/konstruction_glue.pdf" target="_blank">Конструкционные клеи</a> (0,9 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/WEICONLOCK.pdf" target="_blank">Анаэробные клеи и герметики WEICONLOCK</a> (2,5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/cyanoacrylate.pdf" target="_blank">Цианоакрилатные клеи</a> (1,0 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/elastic_adhesives_sealents.pdf" target="_blank">Эластичные клеи и герметики</a> (1,6 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/elastic_contact_glue.pdf" target="_blank">Эластичные контактные клеи резина-металл</a> (0,3 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/tech_spray.pdf" target="_blank">Технические аэрозоли</a> (3,1 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/technical_liquids.pdf" target="_blank">Технические составы</a> (1,5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/anti_seize.pdf" target="_blank">Монтажные пасты</a> (0,7 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/allaround_lubricant.pdf" target="_blank">Универсальные смазочные материалы</a> (0,5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/weicon/acessories.pdf" target="_blank">Аксессуары</a> (1,1 МБ)</li>
                    </ul>
                    <li><a href="/images/catalogues_download/catalogi/weicon/WEICON_Food_Industry_rus.pdf" target="_blank">Пищевая, фармацевтическая и косметическая промышленность 2016-17</a>&nbsp;(6,39 МБ)</li>
                    <li><a href="/images/catalogues_download/catalogi/weicon/WEICON_Shipping_Industry_rus.pdf" target="_blank">Судостроение и судоремонт 2017-18</a>&nbsp;(1,57 МБ)</li>
                </ul>
                <h2 class="title title_medium">Каталоги SIC Marking</h2>
                <ul>
                    <li><a href="/images/catalogues_download/catalogi/sic/SIC Marking_2019_light.pdf" target="_blank">Маркировка на металле и пластике 2019</a> (6.07 МБ)</li>
                </ul>
                <h2 class="title title_medium">Каталоги KLAUKE</h2>
                <ul>
                    <li><a class="spoiler-link" href="#">Инструменты KLAUKE</a></li>
                    <ul class="not-display">
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_01-23_Вводная_%20часть.pdf" target="_blank">Вводная часть</a> (3.8 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_216-271_Мех_пресс-клещи_кабелерезы.pdf" target="_blank">Механические пресс-клещи и кабелерезы</a> (3.6 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_272-275_Настольные%20_элмех_и_пнев_устр-ва.pdf" target="_blank">Настольные электромеханические и пневматические устройства</a> (0,39 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_276-297_Ручные_гидравл_инстр-ты.pdf" target="_blank">Ручные гидравлические инструменты</a> (1.3 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_298-355_Ручные_элетрогидр_инстр-ты.pdf" target="_blank">Ручные электрогидравлические инструменты</a> (3.8 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_356-377_Гидравл_головы.pdf" target="_blank">Гидравлические головы</a> (1.1 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_378-393_Гидравл_приводы_и_системы.pdf" target="_blank">Гидравлические приводы и системы</a> (1.3 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_394-410_Аксессуары_для_элетрогидр.pdf" target="_blank">Аксессуары для электрогидравлических инструментов</a> (1.2 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_411-458_Пресс-матрицы.pdf" target="_blank">Пресс-матрицы</a> (2.1 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_459-509_Ручной_монтажный_инструмент.pdf" target="_blank">Ручной монтажный инструмент</a> (3.6 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_510-519_Каб_ножи_и_стрипперы.pdf" target="_blank">Кабельные ножи и стрипперы</a> (0,77 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_i1-i18_Технические_приложения.pdf" target="_blank">Технические приложения</a> (1.4 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/instruments/KLAUKE_кат2014-стр_i19-i50_Поиск_по_артикулам.pdf" target="_blank">Поиск по артикулам</a> (1.3 МБ)</li>
                    </ul>
                    <li><a class="spoiler-link" href="#">Наконечники KLAUKE</a></li>
                    <ul class="not-display">
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_01-23_Вводная_%20часть.pdf" target="_blank">Вводная часть</a> (3.8 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_24-61_Медн_трубч_нак-ки_R-F-типа.pdf" target="_blank">Медные трубчатые наконечники R-F типа</a> (1.3 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_62-69_Трубч_нак-ки_никель_сталь.pdf" target="_blank">Трубчатые наконечники (никель, сталь)</a> (0,4 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_70-85_Медн_трубч_нак-ки_DIN.pdf" target="_blank">Медные трубчатые наконечники DIN</a> (0,6 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_86-99_Нак-ки_из_лист_меди.pdf" target="_blank">Наконечники из листовой меди</a> (0,5 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_100-105_Медн_втулки-вставки_в_нак.pdf" target="_blank">Медные втулки-вставки в наконечники</a> (0,34 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_106-129_Алюминиевые_нак-ки_и_соед.pdf" target="_blank">Алюминиевые наконечники и соединители</a> (0,94 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_130-149_Зажим_муфты_и_болт_соед.pdf" target="_blank">Зажимные муфты и болтовые соединители</a> (0,8 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_150-169_Втул_нак-ки_изол_и_неизол.pdf" target="_blank">Втулочные наконечники (изолированные и неизолированные)</a> (0,6 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_170-191_Изол_кольц_нак-ки.pdf" target="_blank">Изолированные кольцевые наконечники</a> (0,9 МБ)</li>
                        <li><a href="/images/catalogues_download/catalogi/klauke/tips/KLAUKE_кат2014-стр_192-214_Наборы_с_наконеч-ми_боксы.pdf" target="_blank">Наборы с наконечниками. Боксы</a> (1.3 МБ)</li>
                    </ul>
                </ul>

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
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>