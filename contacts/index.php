<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
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
		<h1 class="title title_large simplepage__title">
		Контакты </h1>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
		"EMAIL_TO" => "bleeding_ater@mail.ru",
		"EVENT_MESSAGE_ID" => array("7"),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NAME","EMAIL","MESSAGE"),
		"USE_CAPTCHA" => "Y"
	)
);?><br>
		<p>
 <strong>Центральный офис ЮМП:</strong> 109147, Россия, Москва, ул. Марксистская, д. 34, кор. 10 (<a href="#">посмотреть на Яндекс.Картах</a>).
		</p>
		<p>
 <strong>Направить заявку:</strong> <a href="mailto:order@umpgroup.ru">order@umpgroup.ru</a>
		</p>
		<p>
 <strong>Центральный склад ЮМП:</strong> г. Подольск, ул. Станционная, д. 22-4а, территория ТСК "Интер-Полимер-Строй" (<a href="#">схема проезда</a>)
		</p>
		<p>
 <strong>Представительство ЮМП в г.Новосибирск:</strong> 630111, Россия, г. Новосибирск, ул. Кропоткина, д. 271, офис 712 (<a href="#">посмотреть на Яндекс.Картах</a>).
		</p>
		<p>
 <strong>Представительство ЮМП в г.Иркутск:</strong> 664017, Россия, г. Иркутск, ул. Помяловского, 1, офис 208 (<a href="#">посмотреть на Яндекс.Картах</a>).
		</p>
		<p>
 <strong>Представительство ЮМП в г.Владивосток:</strong> 690068, Россия, г. Владивосток, ул. Кирова, д. 60А (<a href="#">посмотреть на Яндекс.Картах</a>).
		</p>
		 <!--<iframe src="https://umpgroup.ru/index.php/contacts?fornewwebsite=true" frameborder="0" style="width:100%; height: 1800px; -webkit=appearance:none;"></iframe>-->
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>