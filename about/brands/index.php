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
		<a class="clients__item" href="/about/brands/brady/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/brady.jpg" alt="">
		</a>
		<a class="clients__item" href="/about/brands/weicon/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/weicon.jpg" alt="">
		</a>
		<a class="clients__item" href="/about/brands/klauke/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/klauke.jpg" alt="">
		</a>
		<a class="clients__item" href="/about/brands/sic/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/sic.jpg" alt="">
		</a>
	</div>		

	<div class="clients__items">
		<a class="clients__item" href="/about/brands/greenlee/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/greenlee.jpg" alt="">
		</a>
		<a class="clients__item" href="/about/brands/leoni/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/leoni.jpg" alt="">
		</a>
		<a class="clients__item" href="/about/brands/uniroller/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/uniroller.jpg" alt="">
		</a>
		<a class="clients__item" href="/about/brands/novkabel/">
			<img class="clients__pic" src="https://umpgroup.ru/images/brands/horizontal/novkabel_2.png" alt="">
		</a>
	</div>	
	
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>