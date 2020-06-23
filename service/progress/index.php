<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ход ремонта");
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
            "service_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "dealer",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "service",
                "USE_EXT" => "Y"
            )
        );?>

        <h1 class="title title_large simplepage__title">
            Ход ремонта
        </h1>

        <div class="repair-status">
            <div class="repair-status-form">
                <h2 class="form-title">Узнать о готовности оборудования</h2>
                
                <form action="" method="get">
                    <table class="form-layout">
                        <tbody><tr>
                            <td class="label">
                                <label for="repairnum">Введите Ваш персональный номер акта приема в ремонт</label>
                            </td>
                            <td class="input">
                                <input type="text" name="repairnum" id="repairnum" class="string" value="">
                            </td>
                            <td class="buttons">
                                <button type="submit" class="button">Найти</button>
                            </td>
                        </tr>
                    </tbody></table>        
                </form>
                
                <p class="descr">Подробнее о ходе ремонта Вы можете узнать по прямому номеру телефона: +7 (495) 748-07-47</p>
            </div>
            
            <div class="repair-status-result">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>№ Акта приема<br>в ремонт</th>
                            <th>Наименование оборудования</th>
                            <th>Заводской<br>номер</th>
                            <th>Дата<br>поступления</th>
                            <th>Текущее состояние</th>
                            <th>Планируемая дата<br>завершения<br>ремонта</th>
                            <th>Дата завершения<br>ремонта</th>                
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                
            </div>
        </div>





    </div>
	
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>