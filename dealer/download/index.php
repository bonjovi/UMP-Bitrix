<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Выгрузки");
?>

    <div class="container">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
            "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
        ),
            false
        );?>
        <div class="simplepage">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "dealer_menu",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "dealer",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "dealer",
                    "USE_EXT" => "Y"
                )
            );?>


            <?if(CUser::IsAuthorized()):?>
                <form action="/dealer/download/server.php" method="post">
                    <h2 class="title title_medium">Выберите разделы</h2>
                    <div class="dealer__labels">
                        <label for="brady" class="dealer__label">
                            <input type="checkbox" name="201" id="brady">
                            Маркировка BRADY
                        </label>
                        <label for="sic" class="dealer__label">
                            <input type="checkbox" name="141" id="sic">
                            Механическая и лазерная маркировка SIC MARKING
                        </label>
                        <label for="weicon" class="dealer__label">
                            <input type="checkbox" name="206" id="weicon">
                            Промышленная химия WEICON
                        </label>
                        <label for="tools" class="dealer__label">
                            <input type="checkbox" name="269" id="tools">
                            Инструменты и оборудование
                        </label>
                        <label for="sorbents" class="dealer__label">
                            <input type="checkbox" name="276" id="sorbents">
                            Сорбенты BRADY
                        </label>
                        <label for="cable" class="dealer__label">
                            <input type="checkbox" name="136" id="cable">
                            Кабель и провод
                        </label>
                        <label for="klauke" class="dealer__label">
                            <input type="checkbox" name="149" id="klauke">
                            Кабельные наконечники и соединители
                        </label>
                        <label for="loto" class="dealer__label">
                            <input type="checkbox" name="144" id="loto">
                            Промышленная блокировка LOTO
                        </label>
                        <label for="signals" class="dealer__label">
                            <input type="checkbox" name="577" id="signals">
                            Сигнальная разметка
                        </label>
                    </div><!--/.dealer__labels-->

                    <h2 class="title title_medium">Выберите поля</h2>
                    <?
                    $properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=> 1));
                    ?>

                    <div class="dealer__labels">
                        <?while($prop_fields = $properties->GetNext()):?>
                            <label for="<?=$prop_fields["CODE"]?>" class="dealer__label">
                                <input type="checkbox" name="<?=$prop_fields["CODE"]?>" id="<?=$prop_fields["CODE"]?>">
                                <?=$prop_fields["NAME"]?>
                            </label>
                        <?endwhile;?>
                    </div><!--/.dealer__labels-->




                    <input type="submit" value="Получить выгрузку" class="button dealer__csv-button">
                </form>
            <?else:?>
                <p>Для просмотра раздела Вам необходимо авторизоваться</p>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "REGISTER_URL" => "registration.php",
                        "FORGOT_PASSWORD_URL" => "forgotpassword.php",
                        "PROFILE_URL" => "/cabinet/",
                        "SHOW_ERRORS" => "Y"
                    ),
                    false
                );?>
            <?endif?>
        </div>
    </div>







<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>