<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
//print_r($_POST); die;
foreach($_POST as $post_key => $post_val) {
    if((int)$post_key != 0) {
        $categoriesSelected[] = $post_key;
    } else {
        $propertiesSelected[] = $post_key;
        $ar_fields_array[] = $ar_fields["'".$post_key."'"];
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
    //print_r($propertiesSelectedNames); die;

    // Получаем список корневых разделов из формы и достаём их дочерние подразделы
//    $sections = CIBlockSection::GetList (
//        Array('LEFT_MARGIN' => 'ASC'),
//        Array("IBLOCK_ID" => 1, "ACTIVE" => "Y", "SECTION_ID" => $categories, "INCLUDE_SUBSECTIONS" => "Y"),
//        false,
//        Array('ID', 'NAME', 'CODE')
//    );
//
//    // Формируем массив айдишников этих подразделов
//    while($ar_fields = $sections->GetNext())
//    {
//        $sections_ids[] = $ar_fields['NAME'];
//    }

    //print_r($sections_ids); die;



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

    //print_r($arTest); die;










    // Получаем все элементы этих подразделов
    $iblock_id = 1;
    $my_slider = CIBlockElement::GetList (
        Array("ID" => "ASC"),
        Array("IBLOCK_ID" => $iblock_id, "SECTION_ID" => $arTest),
        false,
        //Array("nTopCount" => 1000),
        Array(),
        Array(
            'ID',
            'NAME',
            $propertiesSelected
        )
    );

    // Начинаем запись в файл всех полученных товаров
    $fileName = "ump_products_".date('d_m_Y_h_i_s').".csv";

    $csvFile = new CCSVData();
    $fields_type = 'R';
    $delimiter = ";";
    $csvFile->SetFieldsType($fields_type);
    $csvFile->SetDelimiter($delimiter);

    // Сначала формируем шапку
    $arrHeaderCSV = $propertiesSelectedNames;
    $csvFile->SaveFile($fileName, $arrHeaderCSV);

    // А теперь записываем непосредственно данные по товарам
    while($ar_fields = $my_slider->GetNext())
    {
//      $img_path = CFile::GetPath($ar_fields["PREVIEW_PICTURE"]);
//      echo "<img src='".$img_path."'/>";
        //echo $ar_fields['NAME']."<br>";
        //echo $ar_fields['PROPERTY_CML2_ARTICLE_VALUE']."<br>";


        $arrHeaderCSV = array($ar_fields['ID'],$ar_fields['NAME'],$ar_fields_array);

        $csvFile->SaveFile($fileName, $arrHeaderCSV);
    }

    //  Вызываем скачивание файла
    header("Location: ".$fileName);


endif;

?>