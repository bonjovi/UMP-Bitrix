<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="dealer__list">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="dealer__item"><a href="<?=$arItem["LINK"]?>" class="dealer__link text text_small text_grey <?if ($arItem["SELECTED"]):?>dealer__link_active<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul class="dealer__sublist">
		<?else:?>
			<li class="dealer__subitem"<?if ($arItem["SELECTED"]):?> class="dealer__subitem item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="dealer__sublink text text_xsmall text_grey parent"><?=$arItem["TEXT"]?></a>
				<ul class="dealer__sublist">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="dealer__item"><a href="<?=$arItem["LINK"]?>" class="dealer__link dealer__link_empty text text_small text_grey <?if ($arItem["SELECTED"]):?>dealer__link_active<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="dealer__subitem"<?if ($arItem["SELECTED"]):?> class="dealer__subitem item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="dealer__sublink text text_xsmall text_grey"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="dealer__item"><a href="" class="dealer__link text text_small text_grey <?if ($arItem["SELECTED"]):?>dealer__link_active<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="dealer__item"><a href="" class="dealer__link text text_small text_grey denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>

<?endif?>