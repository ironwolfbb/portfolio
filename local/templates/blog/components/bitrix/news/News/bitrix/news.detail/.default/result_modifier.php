<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$res = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID']);
$arRes = $res->GetNext();
$arResult['CATEGORY'] = $arRes;

$arFilter =  $arResult['IBLOCK_ID'];
$arSelect = array('ID' => $_GET['ELEMENT_ID']);

$arRes = CIBlockElement::GetList(
	array(),
	array("IBLOCK_ID" => $arFilter),
	false,
	$arSelect,

);
while ($seList[] = $arRes->GetNext()) {
	$arResult['ELEM'] = $seList;
}



// сортировка параметров компонента
$arSort = array(
      $arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"],
      $arParams["SORT_BY2"]=>$arParams["SORT_ORDER2"],
   );

$arSelect = array(
      "ID",
      "NAME",
      "DETAIL_PAGE_URL",
	  "PREVIEW_PICTURE"
   );
// выбираем активные элементы из нужного инфоблока.
$arFilter = array (
      "IBLOCK_ID" => $arResult["IBLOCK_ID"],
      "ACTIVE" => "Y",
      "CHECK_PERMISSIONS" => "Y",
   );
// выбрали по 1 соседу с каждой стороны от текущего
$arNavParams = array(
      "nPageSize" => 1,
      "nElementID" => $arResult["ID"],
   );
$arItems = Array();
$rsElement = CIBlockElement::GetList($arSort, $arFilter, false, $arNavParams, $arSelect);
$rsElement->SetUrlTemplates($arParams["DETAIL_URL"]);
while($obElement = $rsElement->GetNextElement()) {
      $arItems[] = $obElement->GetFields();
}
// возвращается от 1го до 3х элементов в зависимости от наличия соседей      
if(count($arItems)==3):
   $arResult["TORIGHT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"], 
   "PREVIEW_PICTURE"=> CFile::GetPath($arItems[0]["PREVIEW_PICTURE"]));
   $arResult["TOLEFT"] = Array("NAME"=>$arItems[2]["NAME"], "URL"=>$arItems[2]["DETAIL_PAGE_URL"], 
   "PREVIEW_PICTURE"=>CFile::GetPath($arItems[2]["PREVIEW_PICTURE"]));
elseif(count($arItems)==2):
   if($arItems[0]["ID"]!=$arResult["ID"])
      $arResult["TORIGHT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"],
	  "PREVIEW_PICTURE"=> CFile::GetPath($arItems[0]["PREVIEW_PICTURE"]));
   else
      $arResult["TOLEFT"] = Array("NAME"=>$arItems[1]["NAME"], "URL"=>$arItems[1]["DETAIL_PAGE_URL"],
	  "PREVIEW_PICTURE"=> CFile::GetPath($arItems[1]["PREVIEW_PICTURE"]));
endif;