<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("АО \"ЮНИТ МАРК ПРО\"");
?><?if (IsModuleInstalled("advertising")):?> <?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner",
	"bootstrap",
	Array(
		"BS_ARROW_NAV" => "Y",
		"BS_BULLET_NAV" => "Y",
		"BS_CYCLING" => "N",
		"BS_EFFECT" => "fade",
		"BS_HIDE_FOR_PHONES" => "Y",
		"BS_HIDE_FOR_TABLETS" => "N",
		"BS_KEYBOARD" => "Y",
		"BS_PAUSE" => "Y",
		"BS_WRAP" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "bootstrap",
		"NOINDEX" => "Y",
		"QUANTITY" => "3",
		"TYPE" => "MAIN"
	)
);?> <?endif?> <?
global $trendFilter;
$trendFilter = array('PROPERTY_TREND' => '#TREND_PROPERTY_VALUE_ID#');
?><br>

<main class="main">
	
	<section class="intro container">
		<div class="intro__item col-lg-5">
			<div class="intro__content">
				<div class="intro__text">
					Компания <span class="intro__text_bold">ЮНИТ МАРК ПРО</span> (АО) специализируется на поставке и продаже производственного оборудования, расходных материалов, кабельно-проводниковой и химической продукции, сорбирующих материалов. 
				</div>
				<img src="/local/templates/ump/img/intro-icon.png" alt="" class="intro__icon">
				<div class="intro__text">
					<span class="intro__text_bold">ЮМП</span> – официальный дистрибьютор ведущих производственных предприятий Европы и США, предлагает вам промышленные решения, успешно внедрённые на крупных предприятиях России, Украины, Беларуси и Казахстана.
				</div>
			</div>
		</div>
		<div class="intro__item col-lg-1"></div>
		<div class="intro__item intro__item_grey col-lg-5">
			<div class="intro__content">
				<img src="/local/templates/ump/img/intro-icon2.png" alt="" class="intro__icon">
				<div class="title title_large intro__title">
					Хотите стать<br>нашим дилером?
				</div>
				<div class="text intro__simpletext">
					Если вы хотите открыть собственную торговую организацию или увеличить ассортимент уже существующей, мы приглашаем вас присоединиться к дилерской сети ЮМП, которая уже сейчас насчитывает более 300 компаний.
				</div>
				<a class="button intro__button" href="#">
					Оставить заявку
				</a>
			</div>
		</div>
	</section><!-- /.intro -->

	<section class="directions container">
		<div class="title title_large title_redline">
			Направления компании
		</div>

		<div class="row directions__row">
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/brady01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Маркировка BRADY
					</div>
				</a>
				<div class="directions__text text">
					Самоклеющаяся этикетка, навесная бирка или ударно-точечное нанесение знаков непосредственно на поверхность изделия позволяют маркировать изделия, детали или компоненты в разных сферах промышленности
				</div>
			</div>
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/sic01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
							Механическая маркировка
					</div>
				</a>
				<div class="directions__text text">
					Профессиональные механические инструменты, произведенные в Германии. Устройства для размотки провода и кабеля из бухт и с катушек
				</div>
			</div>
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/klauke01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Кабельные наконечники и соединители
					</div>
				</a>
				<div class="directions__text text">
					Опрессуемые кабельные наконечники и соединители ведущего немецкого производителя KLAUKE, используемые  для создания высококачественных контактных соединений в электротехнике
				</div>
			</div>
		</div><!-- /.directions__row -->

		<div class="row directions__row">
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/loto01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Блокираторы и замки ЛОТО
					</div>
				</a>
				<div class="directions__text text">
					Система блокирования опасных энергий. Используется для обесточивания и изоляции любой потенциально опасной энергии для безопасного обслуживания и эксплуатации оборудования
				</div>
			</div>
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/tools01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Инструменты и оборудование
					</div>
				</a>
				<div class="directions__text text">
					Высокотехнологичная серия инструментов для разделки кабеля и опрессовки наконечников. Представлены ручные, ножные, настольные, а также сверхмощные версии инструментов
				</div>
			</div>
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/weicon01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Промышленная химия
					</div>
				</a>
				<div class="directions__text text">
					Уникальный по своим характеристикам ассортимент герметиков, клеев и смазок для производства, ремонта и обслуживания промышленного оборудования
				</div>
			</div>
		</div><!-- /.directions__row -->

		<div class="row directions__row">
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/sorbents01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Сорбенты для промышленности
					</div>
				</a>
				<div class="directions__text text">
					Современные сорбенты в форме салфеток, подушек, роллов и боннов для сбора проливов воды, масел и химических веществ
				</div>
			</div>
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/cable01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Кабель и провод
					</div>
				</a>
				<div class="directions__text text">
					Кабельная продукция от лучших Европейских производителей силовых, кабелей управления и передачи данных для энергетики, транспорта, строительной, нефтяной, химической, транспорта и телекоммуникационной отраслей
				</div>
			</div>
			<div class="col-lg-4 directions__item">
				<a class="directions__link" href="#">
					<div class="directions__icon">
						<img src="/local/templates/ump/img/products/visualization01.svg" alt="" width="200">
					</div>
					<div class="directions__title">
						Визуализация
					</div>
				</a>
				<div class="directions__text text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				</div>
			</div>
		</div><!-- /.directions__row -->
	</section>


	<section class="pricerotator container">
		<div class="pricerotator__section">
			<div class="text text_xsmall pricerotator__article">Артикул</div>
			<div class="pricerotator__rotator">
				<div class="pricerotator__item title title_medium">WEICON S 4-28 Multi, Кабельный нож - 345.74 руб </div>
				<div class="pricerotator__item title title_medium">WEICON S 4-28 Multi 2, Кабельный нож - 1345.74 руб </div>
				<div class="pricerotator__item title title_medium">WEICON S 4-28 Multi 3, Кабельный нож - 2345.74 руб </div>
			</div>
		</div>
		<div class="pricerotator__section">
			<a href="#" class="button pricerotator__button">
				Узнать наличие и цену других товаров
				<img src="/local/templates/ump/img/pricerotator-arrow-left.png" alt="">
			</a>
		</div>
	</section><!-- /.pricerotator -->


	<section class="newsfeed container">
		<div class="title title_large title_redline">
			Лента событий
		</div>
		<div class="newsfeed__container">
			<div class="newsfeed__items">
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey">09.02.2018</div>
					<div class="title title_medium newsfeed__itemtitle">Когда жизнь и здоровье на первом месте</div>
					<div class="text text_medium text_grey">
						Передовые технологии и оборудование для промышленной безопасности
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey">09.02.2018</div>
					<div class="title title_medium newsfeed__itemtitle">Хорошая цена на оборудование для ударно- точечной маркировки</div>
					<div class="text text_medium text_grey">
						ЮМП предлагает новые ударно-точечные маркираторы SIC Marking, которые работали в демо-залах, со скидкой 30%
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey">09.02.2018</div>
					<div class="title title_medium newsfeed__itemtitle">Химия немецкого гостеприимства. ЮНИТ МАРК ПРО в гостях у WEICON</div>
					<div class="text text_medium text_grey">
						Специалисты по промышленной химии из России и Германии несколько дней обменивались опытом и, в конце концов, обменялись
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey">09.02.2018</div>
					<div class="title title_medium newsfeed__itemtitle">Такое бывает раз в году: РАСПРОДАЖИЩЕ!</div>
					<div class="text text_medium text_grey">
						ЮНИТ МАРК ПРО организовала грандиозную акцию – РАСПРОДАЖИЩЕ – в которой мы объединили продукцию сразу нескольких брендов ...
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey">09.02.2018</div>
					<div class="title title_medium newsfeed__itemtitle">Когда жизнь и здоровье на первом месте</div>
					<div class="text text_medium text_grey">
						Передовые технологии и оборудование для промышленной безопасности
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey">09.02.2018</div>
					<div class="title title_medium newsfeed__itemtitle">Хорошая цена на оборудование для ударно- точечной маркировки</div>
					<div class="text text_medium text_grey">
						ЮМП предлагает новые ударно-точечные маркираторы SIC Marking, которые работали в демо-залах, со скидкой 30%
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey">09.02.2018</div>
					<div class="title title_medium newsfeed__itemtitle">Химия немецкого гостеприимства. ЮНИТ МАРК ПРО в гостях у WEICON</div>
					<div class="text text_medium text_grey">
						Специалисты по промышленной химии из России и Германии несколько дней обменивались опытом и, в конце концов, обменялись
					</div>
				</div>
			</div><!-- /.newsfeed__items -->
		</div>
		
	</section><!-- /.newsfeed -->


	<section class="lotointro">
		<div class="container">
			<div class="col-lg-6 lotointro__left">
				<img src="/local/templates/ump/img/loto-pic.png" class="lotointro__pic" alt="">
			</div>
			<div class="col-lg-6 lotointro__right">
				<div class="title title_large title_white">Система LOTO (Lockout Tagout)</div>
				<div class="text text_medium text_white lotointro__text">
					На сегодняшний день, мы имеем опыт разработки и внедрения системы ЛОТО в России, во многих отраслях промышленности – в металлургической, пищевой, нефтегазовой, химической и целлюлозно-бумажной промышленности, и предоставляем максимально полный пакет услуг по внедрению системы.
				</div>
				<a href="#" class="button lotointro__button">Подробнее</a>
			</div>
		</div>
	</section><!-- /.lotointro -->


	<section class="certificates container">
		<div class="title title_large title_redline">
			Сертификаты
		</div>
		<div class="text text_medium certificates__text">
			Мы официально представляем в РФ продукцию торговых марок Brady, Klauke, Greenlee, General Cable, Weicon, SIC Marking, Leoni, Novkabel. Наши сертификаты официального дистрибьютерства в России:
		</div>
		<div class="certificates__items">
			<div class="certificates__item col-lg-2">
				<div class="certificates__itempic">

				</div>
				<div class="text text_medium text_lightgrey">Brady</div>
			</div>
			<div class="certificates__item col-lg-2">
				<div class="certificates__itempic">

				</div>
				<div class="text text_medium text_lightgrey">Klauke / Greenlee</div>
			</div>
			<div class="certificates__item col-lg-2">
				<div class="certificates__itempic">

				</div>
				<div class="text text_medium text_lightgrey">Weicon</div>
			</div>
			<div class="certificates__item col-lg-2">
				<div class="certificates__itempic">

				</div>
				<div class="text text_medium text_lightgrey">SIC</div>
			</div>
			<div class="certificates__item col-lg-2">
				<div class="certificates__itempic">

				</div>
				<div class="text text_medium text_lightgrey">Novkabel</div>
			</div>
			<div class="certificates__item col-lg-2">
				<div class="certificates__itempic">

				</div>
				<div class="text text_medium text_lightgrey">Leoni</div>
			</div>
		</div><!-- /.certificates__items -->
	</section><!-- /.certificates -->


	<section class="brandmanagers container">
		<div class="title title_large title_redline">
			Бренд-менеджеры
		</div>
		<div class="brandmanagers__items">
			<div class="brandmanagers__item col-lg-3">
				<div class="brandmanagers__itempic">

				</div>
				<div class="title title_medium brandmanagers__itemtitle">Андрей Бондаренко</div>
				<div class="text text_medium text_grey">Klauke</div>
			</div>
			<div class="brandmanagers__item col-lg-3">
				<div class="brandmanagers__itempic">

				</div>
				<div class="title title_medium brandmanagers__itemtitle">Наталья Охрименко</div>
				<div class="text text_medium text_grey">Brady</div>
			</div>
			<div class="brandmanagers__item col-lg-3">
				<div class="brandmanagers__itempic">

				</div>
				<div class="title title_medium brandmanagers__itemtitle">Екатерина Голубева</div>
				<div class="text text_medium text_grey">Weicon</div>
			</div>
			<div class="brandmanagers__item col-lg-3">
				<div class="brandmanagers__itempic">

				</div>
				<div class="title title_medium brandmanagers__itemtitle">Павел Домашук</div>
				<div class="text text_medium text_grey">SIC Marking</div>
			</div>
		</div>
	</section><!-- /.brandmanagers -->


	<section class="clients container">
		<div class="title title_large title_redline">
			Клиенты / Партнёры
		</div>
		<div class="text text_medium certificates__text">
			Мы работаем с крупнейшими предприятиями как в России, так и зарубежом:
		</div>

		<div class="row clients__items">
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/avtovaz.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/legrand.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/maz.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/ikea.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/gazprom.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/nestle.png" class="clients__itempic" alt="">
			</div>
		</div>

		<div class="row clients__items">
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/renault.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/tatneft.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/danone.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/motorola.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/kamaz.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/nissan.png" class="clients__itempic" alt="">
			</div>
		</div>

		<div class="row clients__items">
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/baltika.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/mars.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/clients/kalashnikov.png" class="clients__itempic" alt="">
			</div>
			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-2">
				
			</div>
		</div>
	</section><!-- /.clients -->

	
</main>

<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>