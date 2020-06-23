<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if ($arResult["DETAIL_TEXT_TYPE"]!=="html") {
	$el = new CIBlockElement;
	$arLoadProductArray = Array(
	   "DETAIL_TEXT_TYPE" => "html",
	);
	$res = $el->Update($arResult["ID"], $arLoadProductArray);
 }
?>

<?php
// echo "<pre>";
// print_r($arResult['PROPERTIES']['WEB_NAZVANIE']['VALUE']);
// echo "</pre>";
?>


<div class="product">


	<h1 class="title title_large product__title"><?=$arResult['PROPERTIES']['WEB_NAZVANIE']['VALUE']?></h1>

	<!--<p class="text">Артикул: <?=$arResult['PROPERTIES']['CML2_ARTICLE']['VALUE']?></p>-->

	<div class="col-lg-5 product__image">
		<!-- Картинка детальная -->
		<img 
		src="
		<?if (true == is_array($arResult["DETAIL_PICTURE"])):?>
			<?=$arResult["DETAIL_PICTURE"]["SRC"]?>
		<?else:?>
			/local/templates/ump/images/no-image.jpg
		<?endif?>
		" 
		alt="<?=$arElement["NAME"]?>"/>
						



<style>
.product__image > a {
	display:none;
}
</style>



		<!-- Доп картинки -->
						<?
						$LINE_ELEMENT_COUNT = 1;
						if (count($arResult["MORE_PHOTO"]) > 0):?>
							<? foreach ($arResult["MORE_PHOTO"] as $PHOTO): ?>
								<a href="<?= $PHOTO["SRC"] ?>" title="<?= $arResult["NAME"] ?>" data-fancybox="group" data-caption="<?= $arResult['NAME']?>">
									<?
									$renderImage = CFile::ResizeImageGet($PHOTO, Array("width" => 400, "height" => 400), BX_RESIZE_IMAGE_EXACT, false);
									?>
									<img class="image_sec" border="0" src="<?= $renderImage["src"] ?>"
										alt="<?= $arResult["NAME"] ?>"/>
								</a>
							<? endforeach ?>
						<? endif ?>
	</div>
	<div class="col-lg-7">
			<!-- Описание -->
			<?php if($arResult["PROPERTIES"]["WEB_OPISANIE"]["VALUE"] != ''): ?>
				<?=html_entity_decode($arResult["PROPERTIES"]["WEB_OPISANIE"]["VALUE"]);?>
			<?php else: ?>
				<?=html_entity_decode($arResult["PROPERTIES"]["ATT_USAGE"]["VALUE"]);?>
			<?php endif; ?>

			<?php
			/*if (!empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS'])
				{
					?>
					<div class="product-item-detail-tab-content" data-entity="tab-container" data-value="properties">
						<?
						if (!empty($arResult['DISPLAY_PROPERTIES']))
						{
							?>
							<dl class="product-item-detail-properties">
								<?
								foreach ($arResult['DISPLAY_PROPERTIES'] as $property)
								{
									?>
									<dt><?=$property['NAME']?></dt>
									<dd><?=(
										is_array($property['DISPLAY_VALUE'])
											? implode(' / ', strip_tags($property['DISPLAY_VALUE']))
											: strip_tags($property['DISPLAY_VALUE'])
										)?>
									</dd>
									<?
								}
								unset($property);
								?>
							</dl>
							<?
						}

						if ($arResult['SHOW_OFFERS_PROPS'])
						{
							?>
							<dl class="product-item-detail-properties" id="<?=$itemIds['DISPLAY_PROP_DIV']?>"></dl>
							<?
						}
						?>
					</div>
					<?
				}*/
			?>	


			<!-- Оценка -->
			<? /*$APPLICATION->IncludeComponent("bitrix:iblock.vote", "starstemp", Array(
							"IBLOCK_TYPE" => "catalog",    // Тип инфоблока
							"IBLOCK_ID" => "5",    // Инфоблок
							"ELEMENT_ID" => $arResult["ID"],    // ID элемента
							"MAX_VOTE" => "5",    // Максимальный балл
							"VOTE_NAMES" => array(    // Подписи к баллам
								0 => "0",
								1 => "1",
								2 => "2",
								3 => "3",
								4 => "4",
								5 => "",
							),
							"SET_STATUS_404" => "N",    // Устанавливать статус 404
							"MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
							"CACHE_TYPE" => "N",    // Тип кеширования
							"CACHE_TIME" => "0",    // Время кеширования (сек.)
							"COMPONENT_TEMPLATE" => "stars",
							"DISPLAY_AS_RATING" => "vote_avg",    // В качестве рейтинга показывать
						),
							false
						);*/ ?> 
	</div>

	<div class="col-lg-12">
		<?if(is_array($arResult["OFFERS"]) && !empty($arResult["OFFERS"])):?>
			<div class="product__offers">
				<table class="product__offerstable">
					<thead>
						<th width="200">Артикул</th>
						<th>Название</th>
						<th width="150">Цена</th>
						<th></th>
					</thead>
					<tbody>
						<!-- Если есть преддожения -->
						<?foreach($arResult["OFFERS"] as $arOffer):?>
							<?php
								// echo "<pre>";
								// print_r($arOffer);
								// echo "</pre>";
							?>
							<!-- Свойства -->
							<?foreach($arOffer["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
								

								<!-- <small>
									<?=$arProperty["NAME"]?>:&nbsp;
									<? if(is_array($arProperty["DISPLAY_VALUE"])): ?>
										<? echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
									<? else: ?>
										<? echo $arProperty["DISPLAY_VALUE"]; ?>
									<? endif; ?>
								</small> -->
								<!-- <label class="product__offerlabel">
									<?=$arOffer['PROPERTIES']['ARTIKUL_POSTAVSHCHIKA']['VALUE']?> - <?=$arOffer['PROPERTIES']['WEB_NAZVANIE']['VALUE'].' - '?>
									<?=(count($arOffer['PRICES'][1]['VALUE']) != NULL) ? $arOffer['PRICES'][1]['VALUE'].' руб.' : 'Нет цены' ?>
									<input name="offer-price" type="radio" value="<?=$arProperty["DISPLAY_VALUE"]?>" class="product__offerradio" data-offer-id="<?=$arOffer['ID']?>">
								</label> -->
								<br />
								<tr>
									<td>
										<?=$arOffer['PROPERTIES']['ARTIKUL_POSTAVSHCHIKA']['VALUE']?>
									</td>
									<td>
										<?=$arOffer['PROPERTIES']['WEB_NAZVANIE']['VALUE']?>
									</td>
									<td>
										<?=(count($arOffer['PRICES'][1]['VALUE']) != NULL) ? $arOffer['PRICES'][1]['VALUE'].' руб.' : 'Нет цены' ?>
									</td>
									<td>
										<input name="offer-price" type="radio" value="<?=$arProperty["DISPLAY_VALUE"]?>" class="product__offerradio" data-offer-id="<?=$arOffer['ID']?>">
									</td>
								</tr>
							<?endforeach?>
							
						<?endforeach;?>
					</tbody>
				</table>
			</div>
			
			<div class="product__offerprices">
				<?foreach($arResult["OFFERS"] as $arOffer):?>
					<div class="product__offerprice" data-offer-id="<?=$arOffer['ID']?>">
						<!-- Цены -->
						<?foreach($arOffer["PRICES"] as $code=>$arPrice):?>
							<?if($arPrice["CAN_ACCESS"]):?>
								<?=$arResult["CAT_PRICES"][$code]["TITLE"];?>
								<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
									<s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
								<?else:?>
									<?=$arPrice["PRINT_VALUE"]?>
								<?endif?>
								</p>
							<?endif;?>
						<?endforeach;?>
						<!-- Покупка -->
						<?if($arOffer["CAN_BUY"]):?>
								<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" сlass="add_form">
									<a class="qty_minus" href="javascript:void(0)" onclick="if (BX('QUANTITY<?= $arOffer['ID'] ?>').value &gt; 1) BX('QUANTITY<?= $arOffer['ID'] ?>').value--;">-</a>
										<input class="qty" type="text" name="QUANTITY" value="1" id="QUANTITY<?= $arOffer['ID'] ?>"/>
									<a class="qty_plus" href="javascript:void(0)" onclick="BX('QUANTITY<?= $arOffer['ID'] ?>').value++;">+</a>
									<!-- <input type="text" name="<?echo $arParams["PRODUCT_QUANTITY_VARIABLE"]?>" value="1" size="5"> -->
									<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
									<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arOffer["ID"]?>">
									<!-- <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>"> -->
									<input class="button button_white" type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CT_BCE_CATALOG_ADD")?>">
								</form>
						<?elseif(count($arResult["CAT_PRICES"]) > 0):?>
							<? echo GetMessage("CATALOG_NOT_AVAILABLE")?>
						<?endif?>
					</div>
				<?endforeach;?>
			</div>

		<?else:?>
		<!-- Если нет преддожений -->

			<!-- Цены -->
			<?foreach($arResult["PRICES"] as $code=>$arPrice):?>
				<?if($arPrice["CAN_ACCESS"]):?>
					<?=$arResult["CAT_PRICES"][$code]["TITLE"];?>
					<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
						<s><?=$arPrice["PRINT_VALUE"]?></s> <?=$arPrice["PRINT_DISCOUNT_VALUE"]?>
					<?else:?>
						<?=$arPrice["PRINT_VALUE"]?>
					<?endif?>
					</p>
				<?endif;?>
			<?endforeach;?>
			<!-- Покупка -->
			<?if($arResult["CAN_BUY"]):?>
					<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data" сlass="add_form">
					<a href="javascript:void(0)" onclick="if (BX('QUANTITY<?= $arElement['ID'] ?>').value &gt; 1) BX('QUANTITY<?= $arElement['ID'] ?>').value--;">-</a>
							<input type="text" name="QUANTITY" value="1" id="QUANTITY<?= $arElement['ID'] ?>"/>
						<a href="javascript:void(0)" onclick="BX('QUANTITY<?= $arElement['ID'] ?>').value++;">+</a>
					<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
					<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arResult["ID"]?>">
					<!-- <input type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."BUY"?>" value="<?echo GetMessage("CATALOG_BUY")?>"> -->
					<input class="button" type="submit" name="<?echo $arParams["ACTION_VARIABLE"]."ADD2BASKET"?>" value="<?echo GetMessage("CATALOG_ADD_TO_BASKET")?>">
					</form>
			<?elseif((count($arResult["PRICES"]) > 0) || is_array($arResult["PRICE_MATRIX"])):?>
				<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
			<?endif?>
		<?endif?>
	</div>	

	<div class="col-lg-12">

		<?
			$custom_properties_array = [
				'ATT_COMPLECTATION',
				'ATT_TECHS',
				'ATT_OPTIONS',
				'ATT_ADVANTAGES',
				'ATT_VIDEO',
				'OSNOVNYE_KHARAKTERISTIKI',
				'ATT_USAGE',
				'ATT_PUBLICATION',
				'ATT_ORDERINFO',
				'ATT_PUBLICATION',
				'ATT_DOWNLOAD',
				'ATT_EXPENDABLES',
			];
		?>



		<div class="product__tabs">
			<!-- Названия свойств -->
			<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<?//var_dump($arProperty)?>
				<?if($arProperty["VALUE"] != '' && in_array($arProperty["CODE"], $custom_properties_array)):?>
					<div class="product__tab text text_grey text_medium" data-tabname="<?=$arProperty["CODE"]?>">
						<?=$arProperty["NAME"]?>
					</div>
				<?endif?>	
			<?endforeach?>
			<!-- <div class="product__tab text text_grey text_medium" data-tabname="TABLEPRICES">
				Табличные цены
			</div> -->
		</div>
		<div class="product__tabsinfo">
			<!-- Значения свойств -->
			<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
				<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
					<?if($arProperty["DISPLAY_VALUE"] != '' && in_array($arProperty["CODE"], $custom_properties_array)):?>
						<div class="product__tabinfo" data-tabname="<?=$arProperty["CODE"]?>">
							<?echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
						</div>
					<?endif?>
				<?elseif($pid=="MANUAL"):?>
					<div class="product__tabinfo" data-tabname="<?=$arProperty["CODE"]?>">
						<a href="<?=$arProperty["VALUE"]?>"><?=GetMessage("CATALOG_DOWNLOAD")?></a>
					</div>
				<?else:?>
					<?if($arProperty["DISPLAY_VALUE"] != '' && in_array($arProperty["CODE"], $custom_properties_array)):?>
						<div class="product__tabinfo" data-tabname="<?=$arProperty["CODE"]?>">
							<?echo $arProperty["DISPLAY_VALUE"];?>
						</div>
					<?endif?>
				<?endif?>
			<?endforeach?>
			<!-- <div class="product__tabinfo" data-tabname="TABLEPRICES">
				123
			</div> -->
		</div>

	</div>
</div>