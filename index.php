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
	<div class="intro__text">
		 Компания <span class="intro__text_bold">ЮНИТ МАРК ПРО</span> (АО) специализируется на поставке и продаже производственного оборудования, расходных материалов, кабельно-проводниковой и химической продукции, сорбирующих материалов.
	</div>
	<div class="intro__text">
 <span class="intro__text_bold">ЮМП</span> – официальный дистрибьютор ведущих производственных предприятий Европы и США, предлагает вам промышленные решения, успешно внедрённые на крупных предприятиях России, Украины, Беларуси и Казахстана.
	</div>
 </section><!-- /.intro --> <section class="directions">
	<div class="title title_large title_redline">
		 Направления компании
	</div>
	<div class="row directions__row">
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/markirovka_brady/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/brady01.svg" alt="">
			</div>
			<div class="directions__title">
				 Маркировка BRADY
			</div>
 </a>
			<div class="directions__text text">
				 Самоклеящиеся этикетки, навесные бирки и другие виды маркировки позволяют точно идентифицировать изделия, детали, компоненты
			</div>
		</div>
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/mekhanicheskaya_markirovka/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/sic01.svg" alt="">
			</div>
			<div class="directions__title">
				 Механическая маркировка SIC Marking
			</div>
 </a>
			<div class="directions__text text">
				 Ударно-точечная, лазерная или прочерчиванием - изображение наносится на поверхность изделия или шильдик
			</div>
		</div>
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/kabelnye_nakonechniki_i_soediniteli/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/klauke01.svg" alt="">
			</div>
			<div class="directions__title">
				 Кабельные наконечники и соединители
			</div>
 </a>
			<div class="directions__text text">
				 Опрессуемые кабельные наконечники и соединители, используемые для создания высококачественных контактных соединений в электротехнике
			</div>
		</div>
	</div>
	 <!-- /.directions__row -->
	<div class="row directions__row">
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/blokiratory_i_zamki_loto/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/loto01.svg" alt="">
			</div>
			<div class="directions__title">
				 Промышленная блокировка LOTO
			</div>
 </a>
			<div class="directions__text text">
				 Система блокирования опасных энергий. Используется для обесточивания и изоляции любой потенциально опасной энергии для безопасного обслуживания и эксплуатации оборудования
			</div>
		</div>
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/instrumenty-i-oborudovanie/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/tools01.svg" alt="">
			</div>
			<div class="directions__title">
				 Инструменты и оборудование
			</div>
 </a>
			<div class="directions__text text">
				 Высокотехнологичные инструменты для разделки провода, кабеля и опрессовки наконечников. Представлены все виды
			</div>
		</div>
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/promyshlennaya_khimiya/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/weicon01.svg" alt="">
			</div>
			<div class="directions__title">
				 Промышленная химия
			</div>
 </a>
			<div class="directions__text text">
				 Впечатляющий ассортимент герметиков, клеев и смазок для производства, ремонта и обслуживания промышленного оборудования
			</div>
		</div>
	</div>
	 <!-- /.directions__row -->
	<div class="row directions__row">
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/sorbenty/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/sorbents01.svg" alt="">
			</div>
			<div class="directions__title">
				 Сорбенты для промышленности
			</div>
 </a>
			<div class="directions__text text">
				 Современные сорбенты в форме салфеток, подушек, рулонов и бонов для сбора проливов воды, масел и химических веществ
			</div>
		</div>
		<div class="col-lg-4 directions__item">
 <a class="directions__link" href="/catalog/kabel_i_provod/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/cable01.svg" alt="">
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
 <a class="directions__link" href="/catalog/signalnaya-razmetka/">
			<div class="directions__icon">
 <img width="200" src="/local/templates/ump/img/products/visualization01.svg" alt="">
			</div>
			<div class="directions__title">
				Сигнальная разметка
			</div>
 </a>
			<div class="directions__text text">
				 Оборудование, материалы, ассортимент готовых изделий для визуализации пространства на предприятии, складе, офисе, торговом зале
			</div>
		</div>
	</div>
	 <!-- /.directions__row --> </section>
	<!--<section class="pricerotator">
	<div class="pricerotator__section">
		<div class="text text_xsmall text_lightgrey pricerotator__article">
			 Артикул
		</div>
		<div class="pricerotator__rotator">
			<a class="pricerotator__item title title_medium" href="#">
				 WEICON S 4-28 Multi, Кабельный нож - 345.74 руб
			</a>
			<a class="pricerotator__item title title_medium" href="#">
				 WEICON S 4-28 Multi 2, Кабельный нож - 1345.74 руб
			</a>
			<a class="pricerotator__item title title_medium" href="#">
				 WEICON S 4-28 Multi 3, Кабельный нож - 2345.74 руб
			</a>
		</div>

		

	</div>
	<div class="pricerotator__section">
 		<a href="/catalog/" class="button pricerotator__button">
		Узнать наличие и цену других товаров <img src="/local/templates/ump/img/pricerotator-arrow-left.png" alt=""> </a>
	</div>
 </section>--><!-- /.pricerotator --> <section class="newsfeed">
	<div class="title title_large title_redline">
		 Лента событий
	</div>
	<div class="newsfeed__items">
		 <?php if (CModule::IncludeModule("iblock")): ?> <?php	
			$iblock_id = 8;
			# show url my elements
				$my_elements = CIBlockElement::GetList (
				Array("ID" => "ASC"),
				Array("IBLOCK_ID" => $iblock_id),
				false,
				Array('nTopCount' => 4),
				Array()
			);
		?>
            <?php while($ar_fields = $my_elements->GetNext()): ?>
                 <div class="newsfeed__item">
                     <?
                     // echo "<pre>";
                     // print_r($ar_fields);
                     // echo "</pre>";
                     ?>
                     <div class="text text_xsmall text_lightgrey newsfeed__date">
                         <?=$ar_fields["DATE_CREATE"]?>
                     </div>
                     <a class="newsfeed__itemtitle title title_medium" href="/about/news/<?=$ar_fields["CODE"]?>/"><?=$ar_fields["NAME"]?></a>
                     <div class="text text_medium text_grey">
                         <?=$ar_fields["PREVIEW_TEXT"]?>
                     </div>
                 </div>
             <? endwhile; ?>
         <? endif; ?>
	</div>
 </section><!-- /.newsfeed -->
</div>
<!-- /.container --> <section class="lotointro">
<div class="container">
	<div class="row">
		<div class="col-md-6 lotointro__left">
 <img src="/local/templates/ump/img/loto-pic.png" class="lotointro__pic" alt="">
		</div>
		<div class="col-md-6 lotointro__right">
			<div class="title title_large title_white">
				 Система LOTO (Lockout Tagout)
			</div>
			<div class="text text_white lotointro__text">
				 На сегодняшний день, мы имеем опыт разработки и внедрения системы ЛОТО в России, во многих отраслях промышленности – в металлургической, пищевой, нефтегазовой, химической и целлюлозно-бумажной промышленности, и предоставляем максимально полный пакет услуг по внедрению системы.
			</div>
 <a href="/catalog/blokiratory_i_zamki_loto/" class="button lotointro__button">Подробнее</a>
		</div>
	</div>
</div>
 </section>
<div class="container">
 <section class="certificates">
	<div class="title title_large title_redline certificates__title">
		 Сертификаты
	</div>
	<div class="text text_grey text_medium">
		 Мы официально представляем в РФ продукцию торговых марок BRADY, KLAUKE, GREENLEE,&nbsp;WEICON, WEICON TOOLS, SIC Marking, LEONI, TF Kable. Наши сертификаты официального дистрибьютерства в России:
	</div>
	<div class="certificates__items">
		<div class="certificates__item">
 <a data-fancybox="" class="certificates__pic" href="/local/templates/ump/img/certificates/brady2020.jpg" target="_blank"> <img src="/local/templates/ump/img/certificates/brady2020.jpg" alt=""> </a> <a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/brady2020.jpg" target="_blank">
			Brady </a>
		</div>
		<div class="certificates__item">
 <a data-fancybox="" class="certificates__pic" href="/local/templates/ump/img/certificates/klauke-greenlee2020.jpg" target="_blank"> <img src="/local/templates/ump/img/certificates/klauke-greenlee2020.jpg" alt=""> </a> <a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/klauke-greenlee2020.jpg" target="_blank">
			Klauke </a>
		</div>
		 <!-- <div class="certificates__item">
 <a class="certificates__pic" href="/local/templates/ump/img/certificates/novkabel2020.jpg" target="_blank"> <img src="/local/templates/ump/img/certificates/novkabel2020.jpg" alt=""> </a> <a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/novkabel2020.jpg" target="_blank">
			Novkabel </a>
		</div> -->
		<div class="certificates__item">
 <a data-fancybox="" class="certificates__pic" href="/local/templates/ump/img/certificates/weicon2020.jpg" target="_blank"> <img src="/local/templates/ump/img/certificates/weicon2020.jpg" alt=""> </a> <a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/weicon2020.jpg" target="_blank">
			Weicon </a>
		</div>
		<div class="certificates__item">
 <a data-fancybox="" class="certificates__pic" href="/local/templates/ump/img/certificates/tfkable2020.jpg" target="_blank"> <img src="/local/templates/ump/img/certificates/tfkable2020.jpg" alt=""> </a> <a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/tfkable2020.jpg" target="_blank">
			TFKable </a>
		</div>
		<div class="certificates__item">
 <a data-fancybox="" class="certificates__pic" href="/local/templates/ump/img/certificates/sic2020.jpg"> <img src="/local/templates/ump/img/certificates/sic2020.jpg" alt=""> </a> <a class="certificates__title text text_medium text_lightgrey" href="/local/templates/ump/img/certificates/sic2020.jpg">
			SIC </a>
		</div>
	</div>
 </section><!-- /.certificates --> <section class="brandmanagers">
	<div class="title title_large title_redline brandmanagers__title">
		 Наши бренд-менеджеры
	</div>
	<div class="brandmanagers__items">
		<div class="brandmanagers__item">
			<div class="brandmanagers__pic">
 <img src="/local/templates/ump/img/employees/bondarenko.png" alt="">
			</div>
			<div class="brandmanagers__brand title">
				 Klauke
			</div>
			<div class="brandmanagers__name text text_grey">
				 Андрей Бондаренко
			</div>
		</div>
		<div class="brandmanagers__item">
			<div class="brandmanagers__pic">
				 <!--<img src="/local/templates/ump/img/employees/okhrimenko.png" alt="">--> <img src="/local/templates/ump/img/employees/okhrimenko.jpg" alt="">
			</div>
			<div class="brandmanagers__brand title">
				 Brady
			</div>
			<div class="brandmanagers__name text text_grey">
				 Наталья Охрименко
			</div>
		</div>
		<div class="brandmanagers__item">
			<div class="brandmanagers__pic">
 <img src="/local/templates/ump/img/employees/golubeva.jpg" alt="">
			</div>
			<div class="brandmanagers__brand title">
				 Weicon
			</div>
			<div class="brandmanagers__name text text_grey">
				 Екатерина Голубева
			</div>
		</div>
		<div class="brandmanagers__item">
			<div class="brandmanagers__pic">
 <img src="/local/templates/ump/img/employees/domashuk.png" alt="">
			</div>
			<div class="brandmanagers__brand title">
				 SIC Marking
			</div>
			<div class="brandmanagers__name text text_grey">
				 Павел Домашук
			</div>
		</div>
	</div>
 </section><!-- /.brandmanagers --> <section class="clients">
	<div class="title title_large title_redline certificates__title">
		 Наши клиенты
	</div>
	<div class="clients__items">
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/danone.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/mars.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/baltika.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/nissan.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/maz.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/ikea.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/lada.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/legrand.jpg" class="clients__pic" alt="">
		</div>
	</div>
	<div class="clients__items">
		<div class="clients__item">
 <img width="110" src="https://umpgroup.ru/f/images/clients/gazprom.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/nestle.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/motorola.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/heineken.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/cocacola.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/tatneft.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/rosneft.jpg" class="clients__pic" alt="">
		</div>
		<div class="clients__item">
 <img src="https://umpgroup.ru/f/images/clients/kalashnikov.jpg" class="clients__pic" alt="">
		</div>
	</div>
 </section><!-- /.clients --> <section class="reviews">
	<div class="title title_large title_redline certificates__title">
		 Отзывы
	</div>
	<div class="reviews__items">
 <a class="reviews__item" href="/local/templates/ump/img/feedbacks/SIC_нефтегаз_НЗМП (отзыв).pdf" target="_blank">
		<div class="reviews__name title title_medium">
 <img src="/local/templates/ump/img/pdf-icon.png" alt="">
		</div>
		<div class="reviews__company text text_xlarge text_black text_bold">
			ООО «НЗМП»<br>
			&nbsp;
		</div>
		<div class="reviews__name text text_large">
			SIC Marking e1-p63
		</div>
 </a> <a class="reviews__item" href="/local/templates/ump/img/feedbacks/SIC_нефтегаз_Таргин (отзыв).pdf" target="_blank">
		<div class="reviews__name title title_medium">
 <img src="/local/templates/ump/img/pdf-icon.png" alt="">
		</div>
		<div class="reviews__company text text_xlarge text_black text_bold">
			ООО «Таргин Механосервис»
		</div>
		<div class="reviews__name text text_large">
			SIC Marking e10-p123
		</div>
 </a> <a class="reviews__item" href="/local/templates/ump/img/feedbacks/SIC_нефтегаз_ТМС-бурсервис (отзыв).pdf" target="_blank">
		<div class="reviews__name title title_medium">
 <img src="/local/templates/ump/img/pdf-icon.png" alt="">
		</div>
		<div class="reviews__company text text_xlarge text_black text_bold">
			ООО «ТМС - Буровой сервис»
		</div>
		<div class="reviews__name text text_large">
			SIC Marking e10-p123-40
		</div>
 </a> <a class="reviews__item" href="/local/templates/ump/img/feedbacks/Отзыв о U-900 от МРСК Центр.pdf" target="_blank">
		<div class="reviews__name title title_medium">
 <img src="/local/templates/ump/img/pdf-icon.png" alt="">
		</div>
		<div class="reviews__company text text_xlarge text_black text_bold">
			Белгородские электрические сети
		</div>
		<div class="reviews__name text text_large">
			UNIROLLER 900
		</div>
 </a> <a class="reviews__item" href="/local/templates/ump/img/feedbacks/Положительный отзыв по ленте.pdf" target="_blank">
		<div class="reviews__name title title_medium">
 <img src="/local/templates/ump/img/pdf-icon.png" alt="">
		</div>
		<div class="reviews__company text text_xlarge text_black text_bold">
			ООО «Гестамп Тольятти»
		</div>
		<div class="reviews__name text text_large">
			Лента напольная на подложке, материал B514
		</div>
 </a> <a class="reviews__item" href="/local/templates/ump/img/feedbacks/пээми5.pdf" target="_blank">
		<div class="reviews__name title title_medium">
 <img src="/local/templates/ump/img/pdf-icon.png" alt="">
		</div>
		<div class="reviews__company text text_xlarge text_black text_bold">
			ЗАО «ПЗЭМИ»<br>
			&nbsp;
		</div>
		<div class="reviews__name text text_large">
			Общий отзыв
		</div>
 </a>
	</div>
	<!-- /.reviews__items --> </section><!-- /.reviews -->
</div>
 <!-- /.container --> <section class="staydealer">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="title title_large title_white">
				 Хотите стать нашим дилером?
			</div>
			<div class="staydealer__text text text_white">
				 Если вы хотите открыть собственную торговую организацию или увеличить ассортимент уже существующей, мы приглашаем вас присоединиться к дилерской сети ЮМП, которая уже сейчас насчитывает более 300 компаний.
			</div>
 <a href="/contacts/" class="button staydealer__button">Оставить заявку</a>
		</div>
		<div class="col-md-6">
 <img width="120" src="/local/templates/ump/img/staydealer.png" class="staydealer__icon" alt="">
		</div>
	</div>
</div>
 </section><!-- /.staydealer --> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>