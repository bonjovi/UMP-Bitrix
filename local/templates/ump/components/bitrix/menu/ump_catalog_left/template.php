<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="leftmenu__list">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="leftmenu__item"><a href="<?=$arItem["LINK"]?>" class="leftmenu__link text text_small text_grey <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul class="leftmenu__sublist">
		<?else:?>
			<li class="leftmenu__subitem"<?if ($arItem["SELECTED"]):?> class="leftmenu__subitem item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="leftmenu__sublink text text_xsmall text_grey parent"><?=$arItem["TEXT"]?></a>
				<ul class="leftmenu__sublist">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="leftmenu__item"><a href="<?=$arItem["LINK"]?>" class="leftmenu__link leftmenu__link_empty text text_small text_grey <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="leftmenu__subitem leftmenu__subitem_last"<?if ($arItem["SELECTED"]):?> class="leftmenu__subitem item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="leftmenu__sublink text text_xsmall text_grey"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="leftmenu__item"><a href="" class="leftmenu__link text text_small text_grey <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="leftmenu__item"><a href="" class="leftmenu__link text text_small text_grey denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>



<?$APPLICATION->ShowViewContent("left_area")?>

<?endif?>