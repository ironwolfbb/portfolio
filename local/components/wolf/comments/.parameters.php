<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
 * @var string $componentPath
 * @var string $componentName
 * @var array $arCurrentValues
 * */
 
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
 
 if( !Loader::includeModule("iblock") ) {
    throw new \Exception('Не загружены модули необходимые для работы компонента');
}

// типы инфоблоков
$arIBlockType = CIBlockParameters::GetIBlockTypes();

// инфоблоки выбранного типа
$arIBlock = [];
$iblockFilter = !empty($arCurrentValues['IBLOCK_TYPE'])
    ? ['TYPE' => $arCurrentValues['IBLOCK_TYPE'], 'ACTIVE' => 'Y']
    : ['ACTIVE' => 'Y'];

$rsIBlock = CIBlock::GetList(['SORT' => 'ASC'], $iblockFilter);
while ($arr = $rsIBlock->Fetch()) {
    $arIBlock[$arr['ID']] = '['.$arr['ID'].'] '.$arr['NAME'];
}
unset($arr, $rsIBlock, $iblockFilter);

$arComponentParameters = [
    // группы в левой части окна
    "GROUPS" => [
        "SETTINGS" => [
            "NAME" => Loc::getMessage('EXAMPLE_COMPSIMPLE_PROP_SETTINGS'),
            "SORT" => 550,
        ],
    ], 
    // поля для ввода параметров в правой части
    "PARAMETERS" => array(
        // Произвольный параметр типа СПИСОК
      
        "IBLOCK_ID" => [
            "PARENT" => "SETTINGS",
            "TYPE" => "LIST",
            "ADDITIONAL_VALUES" => "Y",
            "VALUES" => $arIBlock,
            "REFRESH" => "Y"
        ],
        // Произвольный параметр типа СТРОКА
        "ELEMENT_ID" => [
            "PARENT" => "SETTINGS",
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "DEFAULT" => "",
            "COLS" => 25
        ],
        // Настройки кэширования
        'CACHE_TIME' => ['DEFAULT' => 3600],
    )
 ];  