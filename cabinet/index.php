<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
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


<?if(isset($_GET['registration']) && $_GET['registration'] == 'waiting'):?>
    <div class="alert alert-success">
        На Вашу почту, указанную при регистрации, было отправлено письмо со ссылкой подтверждения регистрационных данных. Перейдите по ссылке из письма для завершения регистрации. После этого останется дождаться модерации Вашего аккаунта администратором.
    </div>
<?else:?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"dealer_menu",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "cabinet",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "A",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "cabinet",
			"USE_EXT" => "Y"
		)
	);?>




	<h1 class="title title_large simplepage__title">
	<?=$APPLICATION->ShowTitle()?> </h1>
	
	<p>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.profile",
	"",
Array()
);?><br>
	</p>
<?endif?>



</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>