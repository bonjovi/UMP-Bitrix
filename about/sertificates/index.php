<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сертификаты дистрибьютора");
?><div class="container simplepage">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
	<h1 class="title title_large simplepage__title">
	<?=$APPLICATION->ShowTitle()?> </h1>
	<div class="text text_grey text_medium">
		Мы официально представляем в РФ продукцию торговых марок Brady, Klauke, Greenlee, General Cable, Weicon, SIC Marking, Leoni, Novkabel. Наши сертификаты официального дистрибьютерства в России:
	</div>
	<div class="certificates__items">
		<div class="certificates__item">
			<a class="certificates__pic" href="/local/templates/ump/img/certificates/brady2020.jpg" target="_blank">
				<img src="/local/templates/ump/img/certificates/brady2020.jpg" alt="">
			</a>
			<a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/brady2020.jpg" target="_blank">
				Brady
			</a>
		</div>
		<div class="certificates__item">
			<a class="certificates__pic" href="/local/templates/ump/img/certificates/klauke-greenlee2020.jpg" target="_blank">
				<img src="/local/templates/ump/img/certificates/klauke-greenlee2020.jpg" alt="">
			</a>
			<a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/klauke-greenlee2020.jpg" target="_blank">
				Klauke
			</a>
		</div>
		<!--<div class="certificates__item">
			<a class="certificates__pic" href="/local/templates/ump/img/certificates/novkabel2020.jpg" target="_blank">
				<img src="/local/templates/ump/img/certificates/novkabel2020.jpg" alt="">
			</a>
			<a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/novkabel2020.jpg" target="_blank">
				Novkabel
			</a>
		</div>-->
		<div class="certificates__item">
			<a class="certificates__pic" href="/local/templates/ump/img/certificates/weicon2020.jpg" target="_blank">
				<img src="/local/templates/ump/img/certificates/weicon2020.jpg" alt="">
			</a>
			<a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/weicon2020.jpg" target="_blank">
				Weicon
			</a>
		</div>
		<div class="certificates__item">
			<a class="certificates__pic" href="/local/templates/ump/img/certificates/tfkable2020.jpg" target="_blank">
				<img src="/local/templates/ump/img/certificates/tfkable2020.jpg" alt="">
			</a>
			<a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/tfkable2020.jpg" target="_blank">
				TFKable
			</a>
		</div>
		<div class="certificates__item">
			<a class="certificates__pic" href="/local/templates/ump/img/certificates/sic2020.jpg">
				<img src="/local/templates/ump/img/certificates/sic2020.jpg" alt="">
			</a>
			<a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/sic2020.jpg">
				SIC
			</a>
		</div>
	</div>
	
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>