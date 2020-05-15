<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?
$TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
$CURRENT_DEPTH = $TOP_DEPTH;
?>



<?php
// echo "<pre>";
// print_r($arResult);
// echo "</pre>";
?>

<?if(CSite::InDir('/catalog/')):?>
	<h1 class="title title_large">Каталог товаров</h1>
<? endif; ?>	


	<div class="catalog__categories row">







<?
foreach($arResult["SECTIONS"] as $arSection):
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
	if($CURRENT_DEPTH < $arSection["DEPTH_LEVEL"]) {
		echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH),"<ul>";
	}
	elseif($CURRENT_DEPTH == $arSection["DEPTH_LEVEL"]){
		echo "</li>";
	}
	else
	{
		while($CURRENT_DEPTH > $arSection["DEPTH_LEVEL"])
		{
			echo "</li>";
			echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
			$CURRENT_DEPTH--;
		}
		echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</li>";
	}

	echo "\n",str_repeat("\t", $arSection["DEPTH_LEVEL"]-$TOP_DEPTH);
	?>
		<li id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="col-lg-3 catalog__item">
		<a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="catalog__link">
			<div class="catalog__image-container <?if($arSection["PICTURE"]["SRC"] == '') { echo 'catalog__image-container_empty'; }?>">
				<img src="<?=$arSection["PICTURE"]["SRC"]?>" alt="">
			</div>
			<h3 class="title title_medium"><?=$arSection["NAME"]?></h3>
			<!--(--><?//echo $arSection["ELEMENT_CNT"]?><!--)-->
		</a>
		<?
	$CURRENT_DEPTH = $arSection["DEPTH_LEVEL"];
endforeach;


while($CURRENT_DEPTH > $TOP_DEPTH)
{
	echo "</li>";
	echo "\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH),"</ul>","\n",str_repeat("\t", $CURRENT_DEPTH-$TOP_DEPTH-1);
	$CURRENT_DEPTH--;
}
?>

</div>
