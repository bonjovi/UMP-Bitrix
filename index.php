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
	<div class="container">
		<section class="intro">
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
					<a class="button intro__button" href="/dealer/">
						Оставить заявку
					</a>
				</div>
			</div>
		</section><!-- /.intro -->
		<section class="directions">
			<div class="title title_large title_redline">
				Направления компании
			</div>

			<div class="row directions__row">
				<div class="col-lg-4 directions__item">
					<a class="directions__link" href="/catalog/?SECTION_ID=201">
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
					<a class="directions__link" href="/catalog/?SECTION_ID=141">
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
					<a class="directions__link" href="/catalog/?SECTION_ID=149">
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
					<a class="directions__link" href="/catalog/?SECTION_ID=144">
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
					<a class="directions__link" href="/catalog/?SECTION_ID=269">
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
					<a class="directions__link" href="/catalog/?SECTION_ID=206">
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
					<a class="directions__link" href="/catalog/?SECTION_ID=276">
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
					<a class="directions__link" href="/catalog/?SECTION_ID=136">
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
					<a class="directions__link" href="/catalog/">
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


		<section class="pricerotator">
			<div class="pricerotator__section">
				<div class="text text_xsmall text_lightgrey pricerotator__article">Артикул</div>
				<div class="pricerotator__rotator">
					<div class="pricerotator__item title title_medium">WEICON S 4-28 Multi, Кабельный нож - 345.74 руб </div>
					<div class="pricerotator__item title title_medium">WEICON S 4-28 Multi 2, Кабельный нож - 1345.74 руб </div>
					<div class="pricerotator__item title title_medium">WEICON S 4-28 Multi 3, Кабельный нож - 2345.74 руб </div>
				</div>
			</div>
			<div class="pricerotator__section">
				<a href="/catalog/" class="button pricerotator__button">
					Узнать наличие и цену других товаров
					<img src="/local/templates/ump/img/pricerotator-arrow-left.png" alt="">
				</a>
			</div>
		</section><!-- /.pricerotator -->



		<section class="newsfeed">
			<div class="title title_large title_redline">
				Лента событий
			</div>
			<div class="newsfeed__items">
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey newsfeed__date">09.05.2020</div>
					<a class="newsfeed__itemtitle title title_medium" href="#">Компания BRADY сделала работу с принтерами еще проще</a>
					<div class="text text_medium text_grey">
					Учитывая запросы своих клиентов, корпорация BRADY старается производить и модернизировать продукцию таким образом, чтобы она максимально отвечала всем требованиям, которые предъявляют пользователи. 
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey newsfeed__date">17.04.2020</div>
					<a class="newsfeed__itemtitle title title_medium" href="#">Инструменты WEICON-Tools в новой упаковке: от пластика к картону</a>
					<div class="text text_medium text_grey">
						В начале 2020 года немецкая компания WEICON, являющаяся производителем стрипперов и других инструментов для снятия изоляции провода/кабеля марки WEICON-Tools.
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey newsfeed__date">12.04.2020</div>
					<a class="newsfeed__itemtitle title title_medium" href="#">Обновленные поддоны BRADY для еврокубов. Теперь в желтом!</a>
					<div class="text text_medium text_grey">
						Летом 2016 года компания BRADY представила поддоны для еврокубов.
					</div>
				</div>
				<div class="newsfeed__item">
					<div class="text text_xsmall text_lightgrey newsfeed__date">11.03.2020</div>
					<a class="newsfeed__itemtitle title title_medium" href="#">Поддоны BRADY для сбора проливов с рампой-пандусом</a>
					<div class="text text_medium text_grey">
						BRADY предлагает широкий ассортимент поддонов для хранения бочек с опасными и не очень жидкостями.
					</div>
				</div>
			</div>
		</section><!-- /.newsfeed -->




		<section class="certificates">
			<div class="title title_large title_redline certificates__title">
				Сертификаты
			</div>
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
				<div class="certificates__item">
					<a class="certificates__pic" href="/local/templates/ump/img/certificates/novkabel2020.jpg" target="_blank">
						<img src="/local/templates/ump/img/certificates/novkabel2020.jpg" alt="">
					</a>
					<a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/novkabel2020.jpg" target="_blank">
						Novkabel
					</a>
				</div>
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
		</section><!-- /.certificates -->


		<section class="clients">
			<div class="title title_large title_redline certificates__title">
				Наши клиенты
			</div>
			<div class="clients__items">
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/danone.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/mars.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/baltika.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/nissan.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/maz.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/ikea.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/lada.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/legrand.jpg" alt="">
				</div>
			</div>

			<div class="clients__items">
				<div class="clients__item">
					<img width="110" class="clients__pic" src="https://umpgroup.ru/f/images/clients/gazprom.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/nestle.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/motorola.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/heineken.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/cocacola.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/tatneft.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/rosneft.jpg" alt="">
				</div>
				<div class="clients__item">
					<img class="clients__pic" src="https://umpgroup.ru/f/images/clients/kalashnikov.jpg" alt="">
				</div>
			</div>
		</section><!-- /.clients -->




		<section class="brandmanagers">
			<div class="title title_large title_redline brandmanagers__title">
				Наши бренд-менеджеры
			</div>
			<div class="brandmanagers__items">
				<div class="brandmanagers__item">
					<img src="/local/templates/ump/img/employees/bondarenko.png" alt="">
					<div class="brandmanagers__brand title">Klauke</div>
					<div class="brandmanagers__name text text_grey">Андрей Бондаренко</div>
				</div>
			
				<div class="brandmanagers__item">
					<img src="/local/templates/ump/img/employees/okhrimenko.png" alt="">
					<div class="brandmanagers__brand title">Brady</div>
					<div class="brandmanagers__name text text_grey">Наталья Охрименко</div>
				</div>
			
			
				<div class="brandmanagers__item">
					<div  style="width:225px; height:300px; overflow:hidden;"><img width="225" src="/local/templates/ump/img/employees/golubeva.jpg" alt=""></div>
					<div class="brandmanagers__brand title">Weicon</div>
					<div class="brandmanagers__name text text_grey">Екатерина Голубева</div>
				</div>
			
			
				<div class="brandmanagers__item">
					<img src="/local/templates/ump/img/employees/domashuk.png" alt="">
					<div class="brandmanagers__brand title">SIC Marking</div>
					<div class="brandmanagers__name text text_grey">Павел Домашук</div>
				</div>
			</div>
		</section><!-- /.brandmanagers -->





		

	</div><!-- /.container -->
</main>

<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>