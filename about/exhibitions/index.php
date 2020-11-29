<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Выставки");
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
	<p>
		 ЮМП уделяет большое внимание участию в отраслевых выставочных мероприятиях.
	</p>
	<p>
		 В портфолио компании представлены такие крупнейшие международные и межрегиональные выставки, как «МЕТАЛЛООБРАБОТКА», «Уголь России и Майнинг», «SAPE» и многие другие. География выставок охватывает территорию всей России.
	</p>
	<p>
		 Масштабы выставочной деятельности позволяют ЮМП быть в курсе событий каждой отрасли, представленной на выставке и предлагать уже готовые комплексные решения.
	</p>
	<p>
 <img src="https://umpgroup.ru/images/banners/2019/exhibitions_UMP.jpg" alt="">
	</p>
	<p align="center">
 <strong>Расписание выставок на 2021 год</strong>
	</p>
	<table class="table table-bordered">
	<thead>
	<tr>
		<th>
			 Название выставки
		</th>
		<th>
			 Дата проведения
		</th>
		<th>
			 Место проведения
		</th>
		<th>
			 Представляемая продукция
		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
 <a href="https://sape-expo.ru" target="_blank">SAPE</a>
		</td>
		<td style="text-align: center;">
			 апрель 2021
		</td>
		<td>
			 г. Сочи, Главный Медиацентр, Олимпийский парк, Олимпийский пр., д. 1
		</td>
		<td>
			<p align="center">
 <a href="/about/brands/brady">BRADY</a>, <a href="/about/brands/brady">BRADY SPC</a>
			</p>
		</td>
	</tr>
	<tr>
		<td>
 <a href="https://www.metobr-expo.ru" target="_blank">МЕТАЛЛООБРАБОТКА</a>
		</td>
		<td style="text-align: center;">
			 24-28 мая 2021
		</td>
		<td>
			 Москва, Краснопресненская наб., 14, ЦВК «Экспоцентр»
		</td>
		<td>
			<p align="center">
 <a href="/about/brands/sic">SIC Marking</a>, <a href="/about/brands/brady">BRADY</a>, <a href="/about/brands/brady">BRADY SPC</a>, <a href="/about/brands/weicon">WEICON</a>
			</p>
		</td>
	</tr>
	</tbody>
	</table>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>