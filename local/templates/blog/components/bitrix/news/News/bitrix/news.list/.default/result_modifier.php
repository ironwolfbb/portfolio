<?php
foreach($arResult['ITEMS'] as $key => $aritem){
    $res = CIBlockSection::GetByID($aritem['IBLOCK_SECTION_ID']);
    $arResult['ITEMS'][$key]['CATEGORY'] = $res->GetNext();
};
