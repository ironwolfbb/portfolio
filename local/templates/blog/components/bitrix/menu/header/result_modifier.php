<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arPrepItems = [];
if(!empty($arResult)){
    foreach($arResult as $key => $item){
        if($item['DEPTH_LEVEL'] == 1){
            $arPrepItems[] = $item;
        }else
        $arPrepItems[end(array_keys($arPrepItems))]['subitems'][] = $item;
    }
}
$arResult = $arPrepItems;