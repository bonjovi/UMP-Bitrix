<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сервис");
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
			"service_menu",
			Array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "dealer",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(""),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "service",
				"USE_EXT" => "Y"
			)
		);?>

		<h1 class="title title_large simplepage__title">
           Сервис
        </h1>
		<p>Авторизованный сервисный центр компании ЮНИТ МАРК ПРО производит гарантийный и послегарантийный ремонт любой сложности и сервисное обслуживание&nbsp; оборудования фирм: BRADY, KLAUKE, GREENLEE, SIC Marking.</p>
		<p><img src="https://umpgroup.ru/images/pictures/service1.jpg" alt=""></p>
		<p>Центр производит ремонт OEM исполнений пресс-инструментов производства фирмы KLAUKE, выпускаемого для компаний: Boellhoff,&nbsp; Henco,&nbsp;&nbsp; Rehau, Unicor, UPONOR, Unipipe, WAVIN, Barbi и ряда других*.</p>
		<p><img src="https://umpgroup.ru/images/pictures/service2.jpg" alt=""></p>
		<p>*Перед отправкой в ремонт, пожалуйста, уточните у наших специалистов, действительно ли Ваш инструмент произведен фирмой Klauke.</p>
		<p><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/prices/01.11.2017_sc_moscow.pdf" target="_blank">Информация по ремонту принтеров Brady</a> (0.27 Mb)</p>
		<p><a class="with-icon icon-pdf" href="https://umpgroup.ru/images/files/pdf/2020/servis_ump_2020.pdf" target="_blank">Информация по ремонту оборудования SIC Marking, Klauke, Greenlee</a> (0.25 Mb)</p>
		<p>В сервисном центре ЮНИТ МАРК ПРО работают профессионалы, способные выполнять работу любого уровня сложности в сжатые сроки. Специалисты сервисной службы регулярно участвуют в семинарах, тренингах, повышая свою квалификацию.</p>
		<p>Мы поддерживаем постоянные контакты с производителями оборудования. Это позволяет оперативно решать сложные вопросы и обеспечивает обратную связь между производителем и потребителем&nbsp; для улучшения&nbsp; характеристик оборудования.</p>
		<p>Специалисты сервисного центра проводят работы по пуско-наладке всего спектра оборудования, обучению персонала работе с оборудованием и сопутствующим программным обеспечением. Возможен выезд специалиста в любой регион России.</p>
		<p>Для продукции фирмы SIC Marking возможно заключение договора на сервисное обслуживание оборудования.</p>
		<p>Специалисты сервисного центра проконсультируют Вас по вопросам эксплуатации оборудования и программного обеспечения.</p>
		<h2>Адреса сервисных центров</h2>
		<p>Авторизованный сервис <strong>Brady, Weicon</strong>: г. Москва, ул. Марксистская, д.34, кор.10. <a class="yandex-service" href="/contacts/?controller=yandex-map&amp;contact_id=239">Показать на карте</a> Тел.: +7 (495) 748-07-47.</p>
		<p>Авторизованный сервис <strong>SIC Marking, Klauke, Greenlee</strong>: г. Подольск, ул. Станционная, 22-4а. <a href="/images/sklad_new_new.jpg">Показать на карте</a> Тел.: +7 (495) 748-07-47.</p>
		<p>Также Вы можете обратиться в наш Авторизированный Сервис через форму <a href="/support-and-service/kontakty">обратной связи</a>.</p>
		<p>Кроме Сервиса ЮМП работы по ремонту и обслуживанию оборудования проводят Дилеры ЮМП. <a href="/contacts/?contact_type=%D0%A1%D0%B5%D1%80%D0%B2%D0%B8%D1%81&amp;contact_city=" target="_blank"><strong>Контакты сервисных центров</strong></a></p>
		<p><a name="feedbackform"></a></p>



	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>