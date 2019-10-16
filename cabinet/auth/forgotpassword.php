<?
define ("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
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

	<?if(CUser::IsAuthorized()):?>
		<p>Вы успешно авторизованы и Вам не нужно ничего восстанавливать</p>
	<?else:?>
		<?$APPLICATION->IncludeComponent( "bitrix:system.auth.forgotpasswd",
		".default",
		Array()
		);?>
	<?endif?>
	


</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>