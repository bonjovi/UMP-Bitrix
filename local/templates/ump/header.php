<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!doctype html>
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
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
    // JS
    CJSCore::Init(array("jquery"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.fancybox.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.mCustomScrollbar.js');
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
global $USER; if ($USER->IsAdmin()){echo "<style>#bx-panel {z-index:99999999 !important;} .fancybox-container {margin-top: 184px !important;}</style>";}
$APPLICATION->ShowPanel();
?>

<div class="pagewrapper">
		<header class="header">
			<div class="header__top">
				<div class="container">
					<div class="row">
						<div class="header__phones col-lg-6">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/phone.png" alt="Телефон" class="header__phone-icon">
							<div class="header__phone text text_xsmall text_grey">
								<span class="text_lightgrey">+7 (499) </span>
								649-32-74
								<span class="text_lightgrey">;</span>
							</div>
							<div class="header__phone text text_xsmall text_grey">
								<span class="text_lightgrey">+7 (499) </span>
								704-09-07
								<span class="text_lightgrey">;</span>
							</div>
							<div class="header__phone text text_xsmall text_grey">
								<span class="text_lightgrey">+7 (499) </span>
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
							<a class="header__link" data-fancybox data-src="#header__login-content" href="javascript:;">
								<img src="<?=SITE_TEMPLATE_PATH?>/img/login.png" alt="Вход для дилеров" class="header__login-icon">
								<span class="text text_xsmall text_lightgrey">Вход для дилеров</span>
							</a>
							<div id="header__login-content" class="header__popup">
								<div class="text text_xsmall text_lightgrey text_pink">
									Ошибка
								</div>
								<form action="#" class="header__popup-form">
									<input type="text" name="" id="" class="header__input" placeholder="Логин">
									<input type="text" name="" id="" class="header__input header__input_password" placeholder="Пароль">
									<button class="button header__button">Войти</button>
								</form>
								<a href="#" class="text text_xsmall header__callback-link">Не помню пароль</a>
								<a href="#" class="text text_xsmall header__callback-link">Как стать дилером?</a>	
							</div>
						</div><!-- /.header__links -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.header__top -->
			<div class="header__main">
				<div class="container">
					<div class="row">
						<div class="header_logo col-lg-2">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="АО «ЮМП»">
                        </div>
						<nav class="topmenu col-lg-8">
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
										<li class="dropdown-topmenu__item">
											<a href="/about/vacancies" class="text text_xsmall dropdown-topmenu__link">Вакансии</a>
										</li>
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
											<a href="#" class="text text_xsmall dropdown-topmenu__link" counter="first">Маркировка<br>BRADY</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/01.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/01-2.svg" alt="">
														Портативные принтеры этикеток
													</a>
													<ul class="dropdown-topmenu__list dropdown-topmenu__list_last">
														<li class="dropdown-topmenu__item text text_lightgrey text_xsmall">
														Применение термопринтеров (сокр. от термотрансферные принтеры) является наиболее эффективным способом создания долговечных и износостойких маркирующих этикеток.

Принтер этикеток осуществляет печать при высоком разрешении (до 600 точек на дюйм), что позволяет выбирать размер шрифта без потери четкости наносимых символов. Это особенно важно, когда нужно уместить длинный идентификационный номер в маленькое поле.
														</li>
													</ul>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/02.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/02-2.svg" alt="">
														Настольные принтеры этикеток
													</a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/03.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/03-2.svg" alt="">
														Принтеры знаков безопасности
													</a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/04.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/04-2.svg" alt="">
														Принтеры-аппликаторы/Другое
													</a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/05.svg" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/01/05-2.svg" alt="">
														Материалы/Этикетки/Риббоны
													</a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">Маркировка на офисном оборудовании</a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">Готовая маркировка для провода/кабеля</a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">Программное обеспечение</a>
												</li>
											</ul>
										</li>
										<li class="dropdown-topmenu__item">
                                            <a href="#" class="text text_xsmall dropdown-topmenu__link" counter="second">Механическая<br>маркировка</a>
                                            <ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ударно-точечная маркировка.<br>Портативное
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ударно-точечная маркировка.<br>Стационарное
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ударно-точечная маркировка.<br>Интегрируемое
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Прочерчиванием.<br>Интегрируемое
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Лазерная маркировка.<br>Стационарное
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Лазерная маркировка.<br>Интергрируемое
                                                    </a>
												</li> 
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link" counter="third">Сорбенты<br>промышленные</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Для сбора масла
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Для сбора на воде
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Универсальные
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Для сбора химии
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Маты и покрытия
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Re-form экосорбенты
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Станции/комплекты
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Наборы блокираторов
                                                    </a>
												</li> 
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link" counter="fourth">Блокираторы<br>и замки ЛОТО</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Блокираторы
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Блокировочные замки
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Групповая блокировка
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Бирки и знаки
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Доп.оборудование
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Наборы блокираторов
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Программные продукты
                                                    </a>
												</li>
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link">Каб. наконечники<br>и соединители</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Трубчатые медные лужёные стандарта KLAUKE
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Специальные трубчатые из стали, из никеля
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Трубчатые медные лужёные стандартов DIN
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Из листовой меди
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Втулки для опрессовки
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Алюминиевые
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Алюмомедные
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Соединительные зажимы и винтовые соединители
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Неизолированные втулочные
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Изолированные кольцевые, вилочные, штыревые малых сечений
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Изолированные и неизолированные разъёмы, контакты
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Наборы с инструментами, ящики, боксы
                                                    </a>
												</li>
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link">Инструменты<br>и оборудование</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Механические инструменты
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ручные гидравлические прессы и кабелерезы
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ручные электромеханические инструменты
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Электрогидравлические аккумуляторные инструменты
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Гидравлическое оборудование
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ручные электро-изолированные монтажные инструменты
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Гидравлическое оборудование и аксессуары
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Сменные пресс-матрицы
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ручные электромонтажные инструменты
                                                    </a>
												</li>
                                            </ul>
										</li>
										
										<li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link">Провод</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Гибкий монтажный провод
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Безопасный монтажный провод
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Распродажа остатков
                                                    </a>
												</li> 
												
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link">Промышленная<br>химия</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Металлополимеры
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Ремонтные стики
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Клеи
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Герметики
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Клеи-герметики
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Смазывающие составы
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Антикоррозионные составы
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Технические составы
                                                    </a>
												</li> 
                                            </ul>
										</li>
										<li class="dropdown-topmenu__item">
											<a href="#" class="text text_xsmall dropdown-topmenu__link">Средства визуализации</a>
											<ul class="dropdown-topmenu__list dropdown-topmenu__level2">
                                                <li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Лента и знаки для разметки ToughtStripe
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Лента для постоянной разметки
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Фотолюминесцентная разметка
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Материалы/Ленты с антискольжением
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Аэрозольная краска EasyLine
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Знаки безопасности
                                                    </a>
												</li>
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Средства ограничения пространства
                                                    </a>
												</li> 
												<li class="dropdown-topmenu__item">
													<a href="#" class="text text_xsmall dropdown-topmenu__link">
                                                        <img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-1.svg" width="110" alt="">
														<img src="<?=SITE_TEMPLATE_PATH?>/img/products/topmenu/02/04-2.svg" width="110" alt="">
                                                        Защитные амортизаторы
                                                    </a>
												</li> 
                                            </ul>
										</li>
									</ul>
								</li>
								<li class="topmenu__item">
									<a href="" class="topmenu__link">Применение</a>
								</li>
								<li class="topmenu__item">
									<a href="" class="topmenu__link">Сервис</a>
								</li>
								<li class="topmenu__item">
									<a href="/dealer/" class="topmenu__link <?if(CSite::InDir('/dealer/')){echo 'topmenu__link_active';}?>">Партнёрам</a>
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
						<input href="#" type="text" class="header__searchinput" placeholder="Введите фразу для поиска...">
					</div>
				</div><!-- /.container -->
			</div><!-- /.header__main -->
            

            <? if ($APPLICATION->GetCurPage(false) === '/'): ?>
			<div class="slider">
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
				</div>			
            </div><!-- /.slider -->
            <? endif; ?>
		</header>


	