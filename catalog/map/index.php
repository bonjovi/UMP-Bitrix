<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
 <main class="main">
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
			<?  
				/*$infoblock = 1; // Инфоблок с id 13
				$rs_Section = CIBlockSection::GetList(array('left_margin' => 'asc'), array('IBLOCK_ID' => $infoblock));
				while ( $ar_Section = $rs_Section->Fetch() )
				{
					$ar_Resu[] = array(  // собираем массив того, что нам нужно
						'ID' => $ar_Section['ID'], // id раздела
						'NAME' => $ar_Section['NAME'], // имя раздела (что нас собственно интересует)
						'IBLOCK_SECTION_ID' => $ar_Section['IBLOCK_SECTION_ID'],
						'IBLOCK_SECTION_ID' => $ar_Section['IBLOCK_SECTION_ID'],
						'LEFT_MARGIN' => $ar_Section['LEFT_MARGIN'],
						'RIGHT_MARGIN' => $ar_Section['RIGHT_MARGIN'],
						'DEPTH_LEVEL' => $ar_Section['DEPTH_LEVEL'],
					); 
					echo '<pre>'; print_r($ar_Resu); '</pre>'; // смотрим, что у нас собралось в массив, и можно смело пользоваться именами
				}  */



				
			?>


<?
// if (CModule::IncludeModule("iblock")):

// 	$iblock_id = 1;
// 	# show url my elements
// 	$my_elements = CIBlockElement::GetList (
// 	  Array("ID" => "ASC"),
// 	  Array("IBLOCK_ID" => $iblock_id),
// 	  false,
// 	  false,
// 	  Array('ID', 'NAME', 'DETAIL_PAGE_URL')
// 	);

// 	while($ar_fields = $my_elements->GetNext())
// 	{
// 	  echo urldecode($ar_fields['DETAIL_PAGE_URL'])." ;<br>";
// 	}
// endif;
?>



<?  
// $infoblock = 1; // Инфоблок с ID ХХХ (необходимо установить ID нужного инфоблока)
// $rs_Section = CIBlockSection::GetList(array('left_margin' => 'asc'), array('IBLOCK_ID' => $infoblock));
// while ( $ar_Section = $rs_Section->Fetch() ) {
//     $ar_Resu[] = array(  // собираем массив того, что нам нужно
//         'ID' => $ar_Section['ID'], // id раздела
//         'NAME' => $ar_Section['NAME'], // имя раздела (что нас, собственно, интересует)
//         'IBLOCK_SECTION_ID' => $ar_Section['IBLOCK_SECTION_ID'],
//         'LEFT_MARGIN' => $ar_Section['LEFT_MARGIN'],
//         'RIGHT_MARGIN' => $ar_Section['RIGHT_MARGIN'],
//         'DEPTH_LEVEL' => $ar_Section['DEPTH_LEVEL'],
//     ); 
//     print_r($ar_Resu); // смотрим, что у нас собралось в массив
// }
// foreach ($ar_Resu as $section) {
//     echo $section["NAME"] . " "; // Выводим имена разделов
// }
?>









<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if(CModule::IncludeModule("iblock"))
{

$IBLOCK_ID = 1;        //здесь необходимо указать ID Вашего инфоблока

$arOrder = Array("SORT"=>"ASC");   
$arSelect = Array("ID", "NAME", "IBLOCK_ID", "DETAIL_PAGE_URL");
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y");
$res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);

    while($ob = $res->GetNextElement())
    {
    $arFields = $ob->GetFields();            
    $aMenuLinksExt[] = Array(
                $arFields['NAME'],
                $arFields['DETAIL_PAGE_URL'],
                Array(),
                Array(),
                ""
                );
    
    }       
    
}   

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
?>






		</div>
	</div>
</div>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>