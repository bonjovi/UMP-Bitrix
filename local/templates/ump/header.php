<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {die();}?><!doctype html>
<html>
<head>
	<?
    $APPLICATION->ShowHead();
	use Bitrix\Main\Page\Asset;

    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/owl.theme.default.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery.fancybox.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/jquery.mCustomScrollbar.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/datatables.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/fixedHeader.dataTables.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
    // JS
    CJSCore::Init(array("jquery"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.mCustomScrollbar.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/datatables.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/dataTables.fixedHeader.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/custom.js');

    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
    //Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
    ?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<?
//global $USER; if ($USER->IsAdmin()){echo "<style>#bx-panel {z-index:99999999 !important;} .fancybox-container {margin-top: 184px !important;}</style>";}
$APPLICATION->ShowPanel();
?>
<?php
if($_SERVER['SCRIPT_NAME'] == '/cabinet/auth/forgotpassword.php' && isset($_GET['change_password']) && $_GET['change_password'] == 'yes') {
echo "<script>setTimeout(function() {\$(\".bx-authform\").wrap(\"<div class='container' style='margin-top:40px;'></div>\");}, 100);</script>";
}
?>
<div class="pagewrapper">
		<header class="header">
            <div class="attentionline">
                <div class="container text text_xsmall">
                    Сайт находится в режиме тестирования, все замеченные ошибки и предложения направляйте по адресу <a href="mailto:web@umpgroup.ru">web@umpgroup.ru</a>. <a href="https://old.umpgroup.ru">Перейти на старую версию сайта</a>
                </div>
            </div>
			<div class="header__top">
				<div class="container">
					<div class="row">
						<div class="header__phones col-lg-6">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/phone.png" alt="Телефон" class="header__phone-icon">
							<div class="header__phone text text_xsmall text_grey">
								<span class="text_lightgrey">+7 (495) </span>
								748-09-07
								<span class="text_lightgrey">;</span>
							</div>
							<div class="header__phone text text_xsmall text_grey">
								<span class="text_lightgrey">+7 (499) </span>
								704-09-07
								<span class="text_lightgrey">;</span>
							</div>
							<div class="header__phone text text_xsmall text_grey">
                                <span class="text_lightgrey">Беспл. линия </span>
								<span class="text_lightgrey">+7 (800) </span>
                                505-62-75
							</div>
						</div><!-- /.header__phones -->
						<div class="header__links col-lg-6">
							<a class="header__link" data-fancybox data-src="#header__callback-content" href="javascript:;">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/callback.png" alt="Обратный звонок" class="header__callback-icon">
								<span class="text text_xsmall text_lightgrey">Обратный звонок</span>
							</a>
							<div id="header__callback-content" class="header__popup">
								<div class="text text_xsmall text_lightgrey">
									Закажите обратный звонок и мы сами позвоним Вам!
								</div>
								<form action="#" class="header__popup-form">
									<input type="text" name="" id="" class="header__input" placeholder="Ваше имя">
									<input type="text" name="" id="" class="header__input header__input_phone-number" placeholder="Номер телефона">
									<button class="button header__button">Заказать звонок</button>
								</form>
							</div>
							
							<?if(CUser::IsAuthorized()):?>
								<div class="user-logged">
									<a href="/cabinet" class="text text_xsmall text_lightgrey"><?=$USER->GetFullName();?></a> <a class="text text_xsmall text_lightgrey" href="?logout=yes">Выйти</a>
								</div>
							<?else:?>
								<a class="header__link header__dealers-entry" data-fancybox data-src="#header__login-content" href="javascript:;">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/login.png" alt="Вход для дилеров" class="header__login-icon">
									<span class="text text_xsmall text_lightgrey">Вход для дилеров</span>
								</a>
							<?endif?>
							<div id="header__login-content" class="header__popup">
								<!-- <div class="text text_xsmall text_lightgrey text_pink">
									Ошибка
								</div>
								<form action="#" class="header__popup-form">
									<input type="text" name="" id="" class="header__input" placeholder="Логин">
									<input type="text" name="" id="" class="header__input header__input_password" placeholder="Пароль">
									<button class="button header__button">Войти</button>
								</form>
								<a href="#" class="text text_xsmall header__callback-link">Не помню пароль</a>
								<a href="#" class="text text_xsmall header__callback-link">Как стать дилером?</a>	 -->

								<?if(CUser::IsAuthorized()):?>
									<?=$USER->GetFullName();?> <a href="?logout=yes">Выйти</a>
								<?else:?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:system.auth.form", 
										".default", 
										array(
											"COMPONENT_TEMPLATE" => "custom",
											"REGISTER_URL" => "/cabinet/auth/registration.php",
											"FORGOT_PASSWORD_URL" => "/cabinet/auth/forgotpassword.php",
											"PROFILE_URL" => "/cabinet/auth/",
											"SHOW_ERRORS" => "Y"
										),
										false
									);?>
								<?endif?>
							</div>

                            <div class="topmenu__burger-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/burger-icon.svg" width="30" alt="АО «ЮМП»">
                            </div>

							<!--<div id="basket-container">
								<?php /*$APPLICATION->IncludeComponent(
									"bazarow:basket.small.bazarow",
									"ajax",
									Array(
										"COMPONENT_TEMPLATE" => "ajax",
										"PATH_TO_BASKET" => "/cabinet/cart",
										"PATH_TO_ORDER" => "/cabinet/cart",
										"SHOW_DELAY" => "N",
										"SHOW_NOTAVAIL" => "Y",
										"SHOW_SUBSCRIBE" => "Y"
									)
								);*/ ?>
							</div>-->
						</div><!-- /.header__links -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.header__top -->
			<div class="header__main">
				<div class="container">
					<div class="row">
						<a class="header_logo col-lg-2" href="/">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/ump-logo.svg" class="header__logo-img" alt="АО «ЮМП»">
						</a>
						<nav class="topmenu col-lg-8">
                            <div class="topmenu__close-icon">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/close-icon.svg" width="30" alt="АО «ЮМП»">
                            </div>
							<ul class="topmenu__list">
								<li class="topmenu__item">
									<a href="/about" class="topmenu__link <?if(CSite::InDir('/about/')){echo 'topmenu__link_active';}?>">Компания</a>
									<ul class="dropdown-topmenu__list">
										<li class="dropdown-topmenu__item">
											<a href="/about" class="text text_xsmall dropdown-topmenu__link">История</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/about/news" class="text text_xsmall dropdown-topmenu__link">Новости</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/about/promo" class="text text_xsmall dropdown-topmenu__link">Акции</a>
										</li>
										<!--<li class="dropdown-topmenu__item">
											<a href="/about/vacancies" class="text text_xsmall dropdown-topmenu__link">Вакансии</a>
										</li>-->
										<li class="dropdown-topmenu__item">
											<a href="/about/exhibitions" class="text text_xsmall dropdown-topmenu__link">Выставки</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/about/sertificates" class="text text_xsmall dropdown-topmenu__link">Сертификаты</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/about/brands" class="text text_xsmall dropdown-topmenu__link">Торговые марки</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/about/confidential" class="text text_xsmall dropdown-topmenu__link">Политика конфиденциальности</a>
										</li>
									</ul>
								</li>
								<li class="topmenu__item">
									<a href="/catalog" class="topmenu__link products <?if(CSite::InDir('/catalog/')){echo 'topmenu__link_active';}?>">Продукция</a>
									<ul class="dropdown-topmenu__list">
										<li class="dropdown-topmenu__item">
											<a href="/catalog/markirovka_brady/" class="text text_xsmall dropdown-topmenu__link" counter="first">Маркировка<br>BRADY</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
												<li class="dropdown-topmenu__item">
													<a href="/catalog/markirovka_brady/" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Портативные принтеры_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Портативные принтеры_02.svg" alt="">
														Портативные<br>принтеры<br>этикеток
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=233" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Промышленные принтеры_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Промышленные принтеры_02.svg" alt="">
														Настольные<br>принтеры<br>этикеток
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=371" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Принтеры знаков безопасности_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Принтеры знаков безопасности_02.svg" alt="">
														Принтеры<br>знаков<br>безопасности
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=240" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Принтеры-аппликаторы-другое_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Принтеры-аппликаторы-другое_02.svg" alt="">
														Принтеры-<br>аппликаторы/<br>Другое
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=210" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Материалы. Этикетки и риббоны_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Материалы. Этикетки и риббоны_02.svg" alt="">
														Материалы/<br>Этикетки/<br>Риббоны
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=247" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Маркировка на офисном оборудовании_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Маркировка на офисном оборудовании_02.svg" alt="">
														Маркировка<br>на офисном<br>оборудовании
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=262" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Готовая маркировка_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. Готовая маркировка_02.svg" alt="">
														Готовая<br>маркировка для<br>провода/кабеля
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=202" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. ПО_01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Маркировка BRADY/Маркировка BRADY. ПО_02.svg" alt="">
														Программное<br>обеспечение<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе термотрансферные промышленные принтеры для маркировки этикетками от портативных трудяг до промышленных аппликаторов. Расходные материалы к ним представлены во всех существующих типоразмерах, видах, цветах для работы в различных условиях. Кроме этого в ассортименте представлена готовая маркировка и промышленные материалы для маркировки на офисном оборудовании.
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="dropdown-topmenu__item">
                                            <a href="/catalog/mekhanicheskaya_markirovka/" class="text text_xsmall dropdown-topmenu__link" counter="second">Механическая и лазерная<br>маркировка SIC MARKING</a>
                                            <ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=147" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Ударно-точечная. Портативное оборудование_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Ударно-точечная. Портативное оборудование_02.svg" width="110" alt="">
                                                        Ударно-точечная маркировка.<br>Портативное
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															SIC Marking Group сегодня – это ведущая международная компания в области промышленной маркировки сложных материалов. В разделе представлено как серийное оборудование для типовых задач маркировки, так и нестандартные решения, которые возможно изготовить на заказ. С применением оборудования SIC Marking можно полностью автоматизировать процессы маркировки и прослеживаемости деталей внутри любого производственного цикла, а также идентифицировать маркированные детали даже спустя многие годы эксплуатации.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=148" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Ударно-точечная. Стационарное оборудование_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Ударно-точечная. Стационарное оборудование_02.svg" width="110" alt="">
                                                        Ударно-точечная маркировка.<br>Стационарное
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															SIC Marking Group сегодня – это ведущая международная компания в области промышленной маркировки сложных материалов. В разделе представлено как серийное оборудование для типовых задач маркировки, так и нестандартные решения, которые возможно изготовить на заказ. С применением оборудования SIC Marking можно полностью автоматизировать процессы маркировки и прослеживаемости деталей внутри любого производственного цикла, а также идентифицировать маркированные детали даже спустя многие годы эксплуатации.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=143" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Ударно-точечная. Интегрируемое оборудование_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Ударно-точечная. Интегрируемое оборудование_02.svg" width="110" alt="">
                                                        Ударно-точечная маркировка.<br>Интегрируемое
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															SIC Marking Group сегодня – это ведущая международная компания в области промышленной маркировки сложных материалов. В разделе представлено как серийное оборудование для типовых задач маркировки, так и нестандартные решения, которые возможно изготовить на заказ. С применением оборудования SIC Marking можно полностью автоматизировать процессы маркировки и прослеживаемости деталей внутри любого производственного цикла, а также идентифицировать маркированные детали даже спустя многие годы эксплуатации.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=429" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Прочерчиванием. Интегрируемое оборудование_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Прочерчиванием. Интегрируемое оборудование_02.svg" width="110" alt="">
                                                        Прочерчиванием.<br>Интегрируемое<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															SIC Marking Group сегодня – это ведущая международная компания в области промышленной маркировки сложных материалов. В разделе представлено как серийное оборудование для типовых задач маркировки, так и нестандартные решения, которые возможно изготовить на заказ. С применением оборудования SIC Marking можно полностью автоматизировать процессы маркировки и прослеживаемости деталей внутри любого производственного цикла, а также идентифицировать маркированные детали даже спустя многие годы эксплуатации.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=297" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Лазерная. Стационарное оборудование_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Лазерная. Стационарное оборудование_02.svg" width="110" alt="">
                                                        Лазерная маркировка.<br>Стационарное
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															SIC Marking Group сегодня – это ведущая международная компания в области промышленной маркировки сложных материалов. В разделе представлено как серийное оборудование для типовых задач маркировки, так и нестандартные решения, которые возможно изготовить на заказ. С применением оборудования SIC Marking можно полностью автоматизировать процессы маркировки и прослеживаемости деталей внутри любого производственного цикла, а также идентифицировать маркированные детали даже спустя многие годы эксплуатации.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=296" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Лазерная маркировка. Интегрируемое_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Механическая маркировка/Механическая маркировка. Лазерная маркировка. Интегрируемое_02.svg" width="110" alt="">
                                                        Лазерная маркировка.<br>Интергрируемое
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															SIC Marking Group сегодня – это ведущая международная компания в области промышленной маркировки сложных материалов. В разделе представлено как серийное оборудование для типовых задач маркировки, так и нестандартные решения, которые возможно изготовить на заказ. С применением оборудования SIC Marking можно полностью автоматизировать процессы маркировки и прослеживаемости деталей внутри любого производственного цикла, а также идентифицировать маркированные детали даже спустя многие годы эксплуатации.
														</li>
													</ul>
												</li> 
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/catalog/promyshlennaya_khimiya/" class="text text_xsmall dropdown-topmenu__link">Промышленная<br>химия WEICON</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/sostavy-na-osnove-epoksidnykh-smol/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Эпоксидные клеи_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Эпоксидные клеи_02.svg" width="110" alt="">
                                                        Составы на основе эпоксидных смол
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/klei/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Клей для полиэтилена и полипропилена_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Клей для полиэтилена и полипропилена_02.svg" width="110" alt="">
                                                        Клеи<br>&nbsp;
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/dvustoronnie-montazhnye-lenty/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Клеи-герметики_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Клеи-герметики_02.svg" width="110" alt="">
                                                        Клеи-герметики серия Flex
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/antikorrozionnye-montazhnye-pasty-anti-seize/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Антикоррозионные монтажные пасты Anti-Size_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Антикоррозионные монтажные пасты Anti-Size_02.svg" width="110" alt="">
                                                        Антикоррозионные монтажные пасты Anti-Seize
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/smazki-tekhnicheskiye/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Смазывающие составы_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Смазывающие составы_02.svg" width="110" alt="">
                                                        Смазки технические
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/antikory/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Антикоррозионные составы_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Антикоррозионные составы_02.svg" width="110" alt="">
                                                        Антикоры<br>&nbsp;
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/tekhnicheskiye-sostavy/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Технические составы_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Технические составы_02.svg" width="110" alt="">
                                                        Технические составы
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-topmenu__item">
                                                    <a href="/catalog/promyshlennaya_khimiya/remontnye-nabory/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Рем. наборы для срочного ремонта на морских судах_01.svg" width="110" alt="">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Промышленная химия/Промышленная химия. Рем. наборы для срочного ремонта на морских судах_02.svg" width="110" alt="">
                                                        Наборы средств для проведения ремонта
                                                    </a>
                                                    <ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
                                                        <li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
                                                            WEICON является ведущим инновационным брендом в своем сегменте рынка. Развитие научной и производственной базы гарантируют постоянное усовершенствование и адаптацию продуктов и услуг к последним требованиям производства и охраны окружающей среды. Продукция WEICON на Вашем предприятии решит множество различных задач, начиная от производства, ремонта, обслуживания и заканчивая техническим сервисом и уходом.
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/catalog/instrumenty-i-oborudovanie/" class="text text_xsmall dropdown-topmenu__link">Инструменты<br>и оборудование</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=500" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Гидравлическое оборудование_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Гидравлическое оборудование_02.svg" width="110" alt="">
                                                        Гидравлические инструменты и аксессуары<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Инструменты для резки кабеля, опрессовки кабельных наконечников и снятия изоляции, предлагаемые компаниями Klauke и Weicon-Tools (Германия), всегда являлись самыми удобными и эффективными решениями, когда необходимо было обеспечить действительно надежную опрессовку, качественную резку и удобную работу с проводом. Эти инструменты делают процесс выполнения электротехнических соединений более безопасным и эффективным, чем когда-либо прежде.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=505" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Механические инструменты_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Механические инструменты_02.svg" width="110" alt="">
                                                        Механические инструменты<br>&nbsp;<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Инструменты для резки кабеля, опрессовки кабельных наконечников и снятия изоляции, предлагаемые компаниями Klauke и Weicon-Tools (Германия), всегда являлись самыми удобными и эффективными решениями, когда необходимо было обеспечить действительно надежную опрессовку, качественную резку и удобную работу с проводом. Эти инструменты делают процесс выполнения электротехнических соединений более безопасным и эффективным, чем когда-либо прежде.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=514" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Ручные электро-изолированные элинструмент_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Ручные электро-изолированные элинструмент_02.svg" width="110" alt="">
                                                        Ручные электро-изолированные монтажные инструменты VDE до 1000В
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Инструменты для резки кабеля, опрессовки кабельных наконечников и снятия изоляции, предлагаемые компаниями Klauke и Weicon-Tools (Германия), всегда являлись самыми удобными и эффективными решениями, когда необходимо было обеспечить действительно надежную опрессовку, качественную резку и удобную работу с проводом. Эти инструменты делают процесс выполнения электротехнических соединений более безопасным и эффективным, чем когда-либо прежде.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=517" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Ручныеэлектромеханические инструменты_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Ручныеэлектромеханические инструменты_02.svg" width="110" alt="">
                                                        Ручные электромеханические инструменты<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Инструменты для резки кабеля, опрессовки кабельных наконечников и снятия изоляции, предлагаемые компаниями Klauke и Weicon-Tools (Германия), всегда являлись самыми удобными и эффективными решениями, когда необходимо было обеспечить действительно надежную опрессовку, качественную резку и удобную работу с проводом. Эти инструменты делают процесс выполнения электротехнических соединений более безопасным и эффективным, чем когда-либо прежде.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=518" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Сменные пресс-матрицы для мех. и гидр. инстр_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Сменные пресс-матрицы для мех. и гидр. инстр_02.svg" width="110" alt="">
                                                        Сменные пресс-матрицы для механических и гидравлических инструментов
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Инструменты для резки кабеля, опрессовки кабельных наконечников и снятия изоляции, предлагаемые компаниями Klauke и Weicon-Tools (Германия), всегда являлись самыми удобными и эффективными решениями, когда необходимо было обеспечить действительно надежную опрессовку, качественную резку и удобную работу с проводом. Эти инструменты делают процесс выполнения электротехнических соединений более безопасным и эффективным, чем когда-либо прежде.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=520" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Электрогидравлические аккум. инструменты_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Инструменты и оборудование/Инструменты и оборудования. Электрогидравлические аккум. инструменты_02.svg" width="110" alt="">
                                                        Электрогидравлические аккумуляторные инструменты<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Инструменты для резки кабеля, опрессовки кабельных наконечников и снятия изоляции, предлагаемые компаниями Klauke и Weicon-Tools (Германия), всегда являлись самыми удобными и эффективными решениями, когда необходимо было обеспечить действительно надежную опрессовку, качественную резку и удобную работу с проводом. Эти инструменты делают процесс выполнения электротехнических соединений более безопасным и эффективным, чем когда-либо прежде.
														</li>
													</ul>
												</li> 
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/catalog/sorbenty/" class="text text_xsmall dropdown-topmenu__link" counter="third">Сорбенты<br>BRADY</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=277" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Re-Form - экосорбенты_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Re-Form - экосорбенты_02.svg" width="110" alt="">
                                                        Re-form экосорбенты<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе адсорбирующая продукция Brady SPC, применяемая для сбора, удержания, ограждения протечек и проливов жидкостей в местах хранения, на земле и воде. В ассортименте представлены изделия, адсорбирующие воду, маслосодержащие вещества, химические вещества, а также напольные покрытия, готовые комплекты для сбора веществ, комплекты и станции.
														</li>
													</ul>
												</li> 
                                                <li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=278" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Масловпитывающие_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Масловпитывающие_02.svg" width="110" alt="">
                                                        Для сбора масла<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе адсорбирующая продукция Brady SPC, применяемая для сбора, удержания, ограждения протечек и проливов жидкостей в местах хранения, на земле и воде. В ассортименте представлены изделия, адсорбирующие воду, маслосодержащие вещества, химические вещества, а также напольные покрытия, готовые комплекты для сбора веществ, комплекты и станции.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=280" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Для водных поверхностей_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Для водных поверхностей_02.svg" width="110" alt="">
                                                        Для сбора на воде<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе адсорбирующая продукция Brady SPC, применяемая для сбора, удержания, ограждения протечек и проливов жидкостей в местах хранения, на земле и воде. В ассортименте представлены изделия, адсорбирующие воду, маслосодержащие вещества, химические вещества, а также напольные покрытия, готовые комплекты для сбора веществ, комплекты и станции.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=281" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Для сбора химикатов_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Для сбора химикатов_02.svg" width="110" alt="">
                                                        Для сбора химии<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе адсорбирующая продукция Brady SPC, применяемая для сбора, удержания, ограждения протечек и проливов жидкостей в местах хранения, на земле и воде. В ассортименте представлены изделия, адсорбирующие воду, маслосодержащие вещества, химические вещества, а также напольные покрытия, готовые комплекты для сбора веществ, комплекты и станции.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=279" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Маты и покрытия_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Маты и покрытия_02.svg" width="110" alt="">
                                                        Маты и напольные покрытия
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе адсорбирующая продукция Brady SPC, применяемая для сбора, удержания, ограждения протечек и проливов жидкостей в местах хранения, на земле и воде. В ассортименте представлены изделия, адсорбирующие воду, маслосодержащие вещества, химические вещества, а также напольные покрытия, готовые комплекты для сбора веществ, комплекты и станции.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=282" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Средства локализации_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Средства локализации_02.svg" width="110" alt="">
                                                        Наборы сорбентов<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе адсорбирующая продукция Brady SPC, применяемая для сбора, удержания, ограждения протечек и проливов жидкостей в местах хранения, на земле и воде. В ассортименте представлены изделия, адсорбирующие воду, маслосодержащие вещества, химические вещества, а также напольные покрытия, готовые комплекты для сбора веществ, комплекты и станции.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=283" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Универсальные сорбенты_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Сорбенты/Сорбенты. Универсальные сорбенты_02.svg" width="110" alt="">
                                                        Универсальные<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе адсорбирующая продукция Brady SPC, применяемая для сбора, удержания, ограждения протечек и проливов жидкостей в местах хранения, на земле и воде. В ассортименте представлены изделия, адсорбирующие воду, маслосодержащие вещества, химические вещества, а также напольные покрытия, готовые комплекты для сбора веществ, комплекты и станции.
														</li>
													</ul>
												</li> 
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/catalog/kabel_i_provod/" class="text text_xsmall dropdown-topmenu__link">Кабель<br>и провод</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="/catalog/?SECTION_ID=137" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабель и провод/Кабель и провод. Безопасный монтажный провод_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабель и провод/Кабель и провод. Безопасный монтажный провод_02.svg" width="110" alt="">
                                                        Безопасный монтажный провод
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Кабельно-проводниковая продукция европейских заводов с честным сечением жилы и оптимальным соотношением цены и качества продукции, сертифицированной по российским и европейским стандартам.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабель и провод/Кабель и провод. Гибкий монтажный провод_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабель и провод/Кабель и провод. Гибкий монтажный провод_02.svg" width="110" alt="">
                                                        Гибкий монтажный провод
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Кабельно-проводниковая продукция европейских заводов с честным сечением жилы и оптимальным соотношением цены и качества продукции, сертифицированной по российским и европейским стандартам.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабель и провод/Кабель и провод. Распродажа остатков_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабель и провод/Кабель и провод. Распродажа остатков_02.svg" width="110" alt="">
                                                        Распродажа остатков<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Кабельно-проводниковая продукция европейских заводов с честным сечением жилы и оптимальным соотношением цены и качества продукции, сертифицированной по российским и европейским стандартам.
														</li>
													</ul>
												</li> 
												
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/catalog/kabelnye_nakonechniki_i_soediniteli/" class="text text_xsmall dropdown-topmenu__link">Кабельные наконечники<br>и соединители</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_из листовой меди_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_из листовой меди_02.svg" width="110" alt="">
                                                        Из листовой меди<br>&nbsp;<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Широкий ассортимент кабельных наконечников для применения в системах низкого и среднего напряжения. Края наконечника не имеют заусенцев, легкая заправка жилы. Стабильная точность, повышенная безопасность и высокие номинальные характеристики благодаря использованию высококачественной рафинированной электролитической меди. Наконечники соответствуют российским и международным стандартам.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Изолированные втулочные наконечники_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Изолированные втулочные наконечники_02.svg" width="110" alt="">
                                                        Изолированные втулочные наконечники<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Широкий ассортимент кабельных наконечников для применения в системах низкого и среднего напряжения. Края наконечника не имеют заусенцев, легкая заправка жилы. Стабильная точность, повышенная безопасность и высокие номинальные характеристики благодаря использованию высококачественной рафинированной электролитической меди. Наконечники соответствуют российским и международным стандартам.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Изолированные и неизолированные разъёмы и контакты_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Изолированные и неизолированные разъёмы и контакты_02.svg" width="110" alt="">
                                                        Изолированные кольцевые, вилочные, штыревые
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Широкий ассортимент кабельных наконечников для применения в системах низкого и среднего напряжения. Края наконечника не имеют заусенцев, легкая заправка жилы. Стабильная точность, повышенная безопасность и высокие номинальные характеристики благодаря использованию высококачественной рафинированной электролитической меди. Наконечники соответствуют российским и международным стандартам.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Неизолированные втулочные_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Неизолированные втулочные_02.svg" width="110" alt="">
                                                        Неизолированные втулочные<br>&nbsp;<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Широкий ассортимент кабельных наконечников для применения в системах низкого и среднего напряжения. Края наконечника не имеют заусенцев, легкая заправка жилы. Стабильная точность, повышенная безопасность и высокие номинальные характеристики благодаря использованию высококачественной рафинированной электролитической меди. Наконечники соответствуют российским и международным стандартам.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Соединительные зажимы и винтовые соединители_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Соединительные зажимы и винтовые соединители_02.svg" width="110" alt="">
                                                        Соединительные зажимы и винтовые соединители
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Широкий ассортимент кабельных наконечников для применения в системах низкого и среднего напряжения. Края наконечника не имеют заусенцев, легкая заправка жилы. Стабильная точность, повышенная безопасность и высокие номинальные характеристики благодаря использованию высококачественной рафинированной электролитической меди. Наконечники соответствуют российским и международным стандартам.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Трубчатые медные лужёные стандарта DIN 46235_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Трубчатые медные лужёные стандарта DIN 46235_02.svg" width="110" alt="">
                                                        Трубчатые медные лужёные стандарта DIN 46235
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Широкий ассортимент кабельных наконечников для применения в системах низкого и среднего напряжения. Края наконечника не имеют заусенцев, легкая заправка жилы. Стабильная точность, повышенная безопасность и высокие номинальные характеристики благодаря использованию высококачественной рафинированной электролитической меди. Наконечники соответствуют российским и международным стандартам.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Трубчатые медные лужёные стандарта KLAUKE_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Кабельные наконечники и соединители/_Кабельные наконечники и соединители_Трубчатые медные лужёные стандарта KLAUKE_02.svg" width="110" alt="">
                                                        Трубчатые медные лужёные стандарта KLAUKE<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Широкий ассортимент кабельных наконечников для применения в системах низкого и среднего напряжения. Края наконечника не имеют заусенцев, легкая заправка жилы. Стабильная точность, повышенная безопасность и высокие номинальные характеристики благодаря использованию высококачественной рафинированной электролитической меди. Наконечники соответствуют российским и международным стандартам.
														</li>
													</ul>
												</li>
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/catalog/blokiratory_i_zamki_loto/" class="text text_xsmall dropdown-topmenu__link" counter="fourth">Промышленная<br>блокировка LOTO</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
												<li class="dropdown-topmenu__item">
													<a href="/catalog/blokirovochnye_zamki/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Блокировочные замки_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Блокировочные замки_02.svg" width="110" alt="">
                                                        Замки<br>LOTO<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/blokiratory/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Блокираторы_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Блокираторы_02.svg" width="110" alt="">
                                                        Блокираторы<br>LOTO<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/gruppovye_blokirovochnye_boksy_i_tsentry_dlya_zamkov/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Групповая блокировка_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Групповая блокировка_02.svg" width="110" alt="">
                                                        Групповая<br>блокировка<br>LOTO
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/preduprezhdayushchie_birki/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Бирки предупреждающие_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Бирки предупреждающие_02.svg" width="110" alt="">
                                                        Информационные<br>бирки<br>LOTO
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/perenosnye_sumki_dlya_blokiratorov/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Размещение и хранение_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Размещение и хранение_02.svg" width="110" alt="">
                                                        Хранение<br>и переноска LOTO
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="/catalog/nabory_blokiruyushchikh_ustroystv/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Наборы блокираторов_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. Наборы блокираторов_02.svg" width="110" alt="">
                                                        Наборы блокирующих<br>устройств LOTO
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>
                                                <li class="dropdown-topmenu__item">
													<a href="/catalog/uslugi/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Услуги по внедрению системы LOTO_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Услуги по внедрению системы LOTO_02.svg" width="110" alt="">
                                                        Услуги по<br>внедрению<br>системы LOTO
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>												 
												<li class="dropdown-topmenu__item">
													<a href="/catalog/programmnye-produkty-loto/" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. ПО_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Блокираторы и замки ЛОТО/Блокираторы и замки ЛОТО. ПО_02.svg" width="110" alt="">
                                                        Программные<br>продукты<br>LOTO
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе продукция для внедрения системы предупреждающей блокировки и маркировки (Lockout Tagout) – комплекса мероприятий в области охраны труда, предусматривающий полное отключение производственного оборудования от всех опасных энергий и сред, и их блокировку на время проведения технического обслуживания или ремонта.
														</li>
													</ul>
												</li>
												
                                            </ul>
										</li>
										<!-- <li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link">Средства визуализации</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Аэрозольная краска EasyLine_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Аэрозольная краска EasyLine_02.svg" width="110" alt="">
                                                        Аэрозольная краска EasyLine<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Защитные амортизаторы_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Защитные амортизаторы_02.svg" width="110" alt="">
                                                        Защитные амортизаторы<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Знаки безопасности_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Знаки безопасности_02.svg" width="110" alt="">
                                                        Знаки безопасности<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Лента для постоянной разметки_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Лента для постоянной разметки_02.svg" width="110" alt="">
                                                        Лента для постоянной разметки
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Лента и знаки для разметки из материала ToughtStripe_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Лента и знаки для разметки из материала ToughtStripe_02.svg" width="110" alt="">
                                                        Лента и знаки для разметки ToughtStripe
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Материалы и ленты с эфектом антискольжения_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Материалы и ленты с эфектом антискольжения_02.svg" width="110" alt="">
                                                        Материалы/Ленты с антискольжением
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Средства временного ограничения пространства_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Средства временного ограничения пространства_02.svg" width="110" alt="">
                                                        Средства ограничения пространства
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Фотолюминесцентная разметка_01.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/Визуализация/Визуализация. Фотолюминесцентная разметка_02.svg" width="110" alt="">
                                                        Фотолюминесцентная разметка<br>&nbsp;
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
															Основное преимущество BRADY – широкая гамма оборудования и решений по идентификации и технологиям безопасности в разных сегментах рынка, в том числе для зонирования пространства, сигнальной разметки, обозначения опасных зон и создания безопасных маршрутов передвижения в соответствии с современными требованиями производства и техники безопасности.
														</li>
													</ul>
												</li> 
                                            </ul>
										</li> -->
									</ul>
								</li>
								<li class="topmenu__item">
									<a href="/usage/solutions/" class="topmenu__link">Применение</a>
									<ul class="dropdown-topmenu__list">
										<li class="dropdown-topmenu__item">
											<a href="https://umpgroup.ru/loto" target="_blank" class="text text_xsmall dropdown-topmenu__link">Система LOTO</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/usage/solutions/" class="text text_xsmall dropdown-topmenu__link">Решения</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="/usage/useful/" class="text text_xsmall dropdown-topmenu__link">Полезно знать</a>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="https://umpgroup.ru/5s/" target="_blank" class="text text_xsmall dropdown-topmenu__link">Бережливое производство</a>
										</li>
									</ul>
								</li>
								<li class="topmenu__item">
									<a href="/service/" class="topmenu__link <?if(CSite::InDir('/service/')){echo 'topmenu__link_active';}?>">Сервис</a>
								</li>
								<li class="topmenu__item">
									<a href="/dealer/" class="topmenu__link <?if(CSite::InDir('/dealer/')){echo 'topmenu__link_active';}?>">Дилерам</a>
								</li>
								<li class="topmenu__item">
									<a href="/contacts/" class="topmenu__link <?if(CSite::InDir('/contacts/')){echo 'topmenu__link_active';}?>">Контакты</a>
								</li>
							</ul>
						</nav>
						<div class="col-lg-2">
							<div class="header__searchbutton"></div>
						</div>
					</div><!-- /.row -->
					<div class="header__searchcontainer">
						<?$APPLICATION->IncludeComponent(
							"bitrix:search.form", 
							"custom", 
							array(
								"COMPONENT_TEMPLATE" => "custom",
								"PAGE" => "#SITE_DIR#search/index.php",
								"USE_SUGGEST" => "N"
							),
							false
						);?>
					</div>
				</div><!-- /.container -->
			</div><!-- /.header__main -->
            
			

            <? if ($APPLICATION->GetCurPage(false) === '/'): ?>
			<div class="slider owl-carousel">
				<!-- <div class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/bmp61.png);">
					<div class="container">
						<div class="slider__content">
							<div class="slider__title">
								Все секреты<br>
								<span class="slider__title_bold">нового принтера ВМР61</span>
							</div>
							<div class="slider__text text text_grey">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</div>
							<a class="button" href="#">
								Подробнее
							</a>
						</div>
					</div>	
				</div>
				<div class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/bmp61.png);">
					<div class="container">
						<div class="slider__content">
							<div class="slider__title">
								Все секреты<br>
								<span class="slider__title_bold">нового принтера ВМР61</span>
							</div>
							<div class="slider__text text text_grey">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
							</div>
							<a class="button" href="#">
								Подробнее1
							</a>
						</div>
					</div>	
				</div> -->
				<!--<a class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/sic_2020.jpg);" href="/about/promo/skidka-10-na-markiratory-s-bolshimi-oknami/"></a>-->
				<a class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/blackfriday_2020_newsite.jpg);" href="/blackfriday/"></a>
				<!-- <a class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/weicon.jpg);" href="/about/promo/pokupay-bolshe-plati-menshe-supertsena-na-sprei-weicon/"></a>
				<a class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/brady.jpg);" href="/about/promo/printer-brady-v-treyd-in/"></a>
				<a class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/sic.jpg);" href="/about/promo/259-000-rubley-nashe-luchshee-predlozhenie-na-udarno-tochechnyy-markirator-sic/"></a>	
				<a class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/rasprod.jpg);" href="/about/promo/rasprodazhishche/"></a>	
				<a class="slider__item" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/banners/brady_02.jpg);" href="/about/promo/markiruesh-mnogo-darim-bolshoy-promyshlennyy-printer/"></a>	-->
            </div><!-- /.slider -->
            <? endif; ?>
		</header>