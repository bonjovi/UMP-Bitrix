<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

foreach($_POST as $post_key => $post_val) {
    if((int)$post_key != 0) {
        $categoriesSelected[] = $post_key;
    } else {
        $propertiesSelected[] = $post_key;
        $propertiesSelectedCustom[] = 'PROPERTY_'.$post_key;
    }
}

if (CModule::IncludeModule("iblock")):
    $properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=> 1));

    while($prop_fields = $properties->GetNext()) {
        foreach($propertiesSelected as $propertySelected) {
            if($propertySelected == $prop_fields["CODE"]) {
                $propertiesSelectedNames[] = $prop_fields["NAME"];
            }
        }
    }

    foreach($categoriesSelected as $category_key => $category_val) {
        $rsParentSection = CIBlockSection::GetByID($category_val);
        if ($arParentSection = $rsParentSection->GetNext())
        {
            $arFilter = array('IBLOCK_ID' => 1,'>LEFT_MARGIN' => $arParentSection['LEFT_MARGIN'],'<RIGHT_MARGIN' => $arParentSection['RIGHT_MARGIN'],'>DEPTH_LEVEL' => $arParentSection['DEPTH_LEVEL']); // выберет потомков без учета активности
            $rsSect = CIBlockSection::GetList(array('left_margin' => 'asc'),$arFilter);
            while ($arSect = $rsSect->GetNext())
            {
                $arTest[] = $arSect['ID'];// получаем подразделы
            }
        }
    }

    $customFields = Array('ID', 'NAME');
    $customFieldsMerged = array_merge($customFields, $propertiesSelectedCustom);

    // Получаем все элементы этих подразделов
    $iblock_id = 1;
    $my_slider = CIBlockElement::GetList (
        Array("ID" => "ASC"),
        Array("IBLOCK_ID" => $iblock_id, "SECTION_ID" => $arTest),
        false,
        //Array("nTopCount" => 1000),
        Array(),
        $customFieldsMerged
    );

    // Начинаем запись в файл всех полученных товаров
    $fileName = "ump_products_".date('d_m_Y_h_i_s').".csv";

    $csvFile = new CCSVData();
    $fields_type = 'R';
    $delimiter = ";";
    $csvFile->SetFieldsType($fields_type);
    $csvFile->SetDelimiter($delimiter);

    // Сначала формируем шапку
    $arrHeaderCSV = array_merge(array("ID", "Название"),$propertiesSelectedNames);
    $csvFile->SaveFile($fileName, $arrHeaderCSV);

    // А теперь записываем непосредственно данные по товарам
    while($ar_fields = $my_slider->GetNext())
    {
        $arrHeaderCSV = array($ar_fields['ID'],$ar_fields['NAME']);

        foreach($propertiesSelected as $propertySelected_key => $propertySelected_val) {
            $propertySelected_val = "PROPERTY_" . $propertySelected_val . "_VALUE";

            if(is_array($ar_fields[$propertySelected_val])) {
                $ar_fields[$propertySelected_val] = $ar_fields[$propertySelected_val]["TEXT"];
            }

            array_push($arrHeaderCSV, $ar_fields[$propertySelected_val]);
        }
        $csvFile->SaveFile($fileName, $arrHeaderCSV);
    }

    //  Вызываем скачивание файла
    header("Location: ".$fileName);
    
endif;

?>