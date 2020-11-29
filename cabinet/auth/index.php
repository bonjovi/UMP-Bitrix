<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

<div class="container simplepage">
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

    <?if(isset($_GET['change_password']) && $_GET['change_password'] == 'yes'):?>
        <p>
            Введите свой логин и <strong>новый</strong> пароль
        </p>
    <?endif?>
	<!--<p>
		 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
	</p>-->

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


</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>