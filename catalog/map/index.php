<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><main class="main">
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
	<div class="row">
		<div class="col-lg-3">
			<div class="leftmenu">
				<div class="leftmenu__first">
					 Каталог
				</div>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"ump_catalog_left",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	)
);?>
			</div>
		</div>
		<div class="col-lg-9 catalog">
			<h1 class="title title_large catalog__title">Каталог</h1>
			<div class="catalog__sitemap">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:main.map",
                    ".default",
                    array(
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "SET_TITLE" => "N",
                        "LEVEL" => "6",
                        "COL_NUM" => "2",
                        "SHOW_DESCRIPTION" => "Y",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>

				 <?/*$APPLICATION->IncludeComponent(
                    "alfa1c:catalog.section.list",
                    "custom",
                    array(
                        "COMPONENT_TEMPLATE" => "custom",
                        "IBLOCK_TYPE" => "catalogs",
                        "IBLOCK_ID" => "32",
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_CODE" => "",
                        "SECTION_LIST" => array(
                        ),
                        "COUNT_ELEMENTS" => "Y",
                        "DEPTH_TO" => "sub",
                        "TOP_DEPTH" => "4",
                        "SECTION_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SECTION_USER_FIELDS_FILTER" => array(
                            0 => "",
                            1 => "",
                        ),
                        "VIEW_MODE" => "LIST",
                        "SHOW_PARENT_NAME" => "Y",
                        "SECTION_URL" => "/catalog/?SECTION_ID=#ID#",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "PICTURE_WIDTH" => "100",
                        "PICTURE_HEIGHT" => "100",
                        "INCLUDE_JQUERY" => "N",
                        "INCLUDE_BXSLIDER" => "Y",
                        "INCLUDE_CHOOSEN" => "Y"
                    ),
                    false
                );*/?><br>
			</div>
		</div>
	</div>
</div>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>