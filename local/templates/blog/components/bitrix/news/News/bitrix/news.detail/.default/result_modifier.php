<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$res = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID']);
$arRes = $res->GetNext();
$arResult['CATEGORY'] = $arRes;