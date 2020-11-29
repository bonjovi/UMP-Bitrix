<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>












<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

<div class="catalog__products row">

	<?php
		// echo "<pre>";
		// print_r($arResult);
		// echo "</pre>";

		$brandsArray = [];
	?>

	

	<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>

	<?php
	$brandsArray[] = $arElement["PROPERTIES"]["MARKA_SERIYA"]["VALUE"];
	// echo "<pre>";
	// print_r($arElement);
	// echo "</pre>";
	?>
		<?
			$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
		?>
	
		<div id="<?=$this->GetEditAreaId($arElement['ID']);?>" class="catalog__product col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="catalog__product-container">
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" title="<?=$arElement["NAME"]?>" class="text text_small catalog__product-title">
					<div class="catalog__product-pic">
						<img 
						src="
						<?if (true == is_array($arElement["DETAIL_PICTURE"])):?>
							<?=$arElement["DETAIL_PICTURE"]["SRC"]?>
						<?else:?>
							/local/templates/ump/images/no-image.jpg
						<?endif?>
						" 
						alt="<?=$arElement["NAME"]?>"/>
					</div>
									
					<?=$arElement["PROPERTIES"]["WEB_NAZVANIE"]["VALUE"]?>
					
				</a>

				<? //var_dump($arElement); ?>
				

				<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
					<?//echo $arProperty["NAME"];?> <?
						if(is_array($arProperty["DISPLAY_VALUE"])) {
							//echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
						} else {
							//echo $arProperty["DISPLAY_VALUE"];
						}
					?>
				<?endforeach?>
				<div class="text text_small text_lightgrey">
					
					Артикулы:
					<?foreach($arElement["OFFERS"] as $arOffer):?>
						<?php
							$artcls[] = $arOffer["PROPERTIES"]["CML2_ARTICLE"]["VALUE"];
						?>
					<?endforeach?>
					<?php 
						echo implode(", ", $artcls);
						unset($artcls);
					?>
				</div>
				<div class="text text_small text_lightgrey catalog__product-desc">
					<?php /*echo mb_strimwidth(strip_tags(html_entity_decode($arElement["PROPERTIES"]["WEB_OPISANIE"]["VALUE"])), 0, 140, "..."); */ ?>
					<?=mb_strimwidth(strip_tags(html_entity_decode($arElement["PROPERTIES"]["WEB_ANONS"]["VALUE"])), 0, 140, "..."); ?>
				</div>
				
						

				<?/*if(is_array($arElement["OFFERS"]) && !empty($arElement["OFFERS"])):?>
					<?foreach($arElement["OFFERS"] as $arOffer):?>
						<?foreach($arOffer["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
							<?=$arProperty["NAME"]?>: <?
								if(is_array($arProperty["DISPLAY_VALUE"]))
									echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
								else
									echo $arProperty["DISPLAY_VALUE"];?>
						<?endforeach?>
						<?foreach($arOffer["PRICES"] as $code=>$arPrice):?>
							<?if($arPrice["CAN_ACCESS"]):?>
								<?=$arResult["PRICES"][$code]["TITLE"];?>
								<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
									<s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
								<?else:?>
									<?=$arPrice["PRINT_VALUE"]?>
								<?endif?>
							<?endif;?>
						<?endforeach;?>
						<?if($arOffer["CAN_BUY"]):?>
								<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
								<input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5">
								<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
								<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arOffer["ID"]?>">
								<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>">
								<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD")?>">
								</form>
						<?elseif(count($arResult["PRICES"]) > 0):?>
							<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
						<?endif?>
					<?endforeach;?>
				<?else:?>
					<?foreach($arElement["PRICES"] as $code=>$arPrice):?>
						<?if($arPrice["CAN_ACCESS"]):?>
							<?=$arResult["PRICES"][$code]["TITLE"];?>:&nbsp;&nbsp;
							<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
								<s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
							<?else:?>
								<?=$arPrice["PRINT_VALUE"]?>
							<?endif;?>
						<?endif;?>
					<?endforeach;?>
				
					<?if($arElement["CAN_BUY"]):?>
							<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
							<input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5">
							<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
							<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arElement["ID"]?>">
							<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>">
							<input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD")?>">
							</form>
					<?elseif((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])):?>
						<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
					<?endif?>
				<?endif*/?>
			</div><!-- /.catalog__product-container -->
		</div><!-- /.catalog__product -->
	<?endforeach;?>
		
	
</div> <!-- /.catalog__products -->

<div class="catalog__brands">
	<?
		$brandsArray = array_unique($brandsArray);
		//print_r($brandsArray);
		foreach($brandsArray as $brandsItem) {
			if($brandsItem == 'Brady') {
				echo "<a class='catalog__brands-item' href='/about/brands/brady/'><img src='/local/templates/ump/img/brands/vertical/brady.jpg'></a>";
			} elseif($brandsItem == 'Brady SPC') {
				echo "<a class='catalog__brands-item' href='/about/brands/brady/'><img src='/local/templates/ump/img/brands/vertical/brady_spc.gif'></a>";
			} elseif($brandsItem == 'WEICON TOOLS') {
				echo "<a class='catalog__brands-item' href='/about/brands/weicon/'><img src='/local/templates/ump/img/brands/vertical/weicon-tools.png'></a>";
			} elseif($brandsItem == 'WEICON') {
				echo "<a class='catalog__brands-item' href='/about/brands/weicon/'><img src='/local/templates/ump/img/brands/vertical/weicon.jpg'></a>";
			} elseif($brandsItem == 'SIC Marking') {
				echo "<a class='catalog__brands-item' href='/about/brands/sic/'><img src='/local/templates/ump/img/brands/vertical/sic.jpg'></a>";
			} elseif($brandsItem == 'Klauke') {
				echo "<a class='catalog__brands-item' href='/about/brands/klauke/'><img src='/local/templates/ump/img/brands/vertical/klauke.jpg'></a>";
			}
		}
	?>   
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

