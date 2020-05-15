<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Торговые марки");
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
	<style>
		.clients__items { width: 1000px; margin: 40px auto 0 auto; }
	</style>
	<div class="clients__items">
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/brady.jpg" alt="">
		</div>
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/weicon.jpg" alt="">
		</div>
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/klauke.jpg" alt="">
		</div>
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/sic.jpg" alt="">
		</div>
	</div>		

	<div class="clients__items">
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/telefonika.jpg" alt="">
		</div>
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/leoni.jpg" alt="">
		</div>
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/uniroller.jpg" alt="">
		</div>
		<div class="clients__item">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/novkabel_2.png" alt="">
		</div>
	</div>	
	
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>