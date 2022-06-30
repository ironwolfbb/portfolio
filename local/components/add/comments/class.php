<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


use \Bitrix\Main\Loader;
use \Bitrix\Main\Application;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class AddCommentsComponent extends CBitrixComponent
{
    private $_request;

    /**
     * Проверка наличия модулей требуемых для работы компонента. Если не подключить iblock то у тебя не будут работать GetList
     */
    private function _checkModules()
    {
        if (!Loader::includeModule('iblock')) {
            throw new \Exception('Не загружены модули необходимые для работы модуля');
        }

        return true;
    }


    /**
     * Тут в массиве arParams будут переданы параметры которые ты указал при размещении компонента на странице /test/index.php
     * То есть тут будут ID инфоблока и ID элемента новости
     */
    public function onPrepareComponentParams($arParams)
    {
        /*  echo '<pre>';
        print_r($arParams);
        echo '</pre>'; */

        // попробуй его распечатать. Должны быть $arParams['IBLOCK_ID'] = 5
        // и $arParams['ELEMENT_ID'] = 2
        // Так как мы указали такие параметры в /test/index.php
        // Далее они будут доступны в методе executeComponent
        return $arParams;
    }
    /**
     * Точка входа в компонент. То есть он сюда первым делом зайдет
     */


    public function executeComponent()
    {


        // Тут проверим модули
        $this->_checkModules();

        // Здесь можно будет обращаться к параметрам из $arParams например
        // $this->ELEMENT_ID
        // $this->IBLOCK_ID


        // Тут нужно написать GET_LIST на получение записей из инфоблока КОММЕНТАРИИ и отфильтровать по св-ву привязка к элементу инфоблока что
        // бы мы получили только комментарии привязанные к этой новости
        global $USER;
        $PROP = [];
        $PROP[28] = $_GET['ELEMENT_ID'];
        $PROP[29] = $USER->GetID();
        if (isset($_POST['send'])) {
            $el = new CIBlockElement;
            $arLoadProductArray = [
                "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
                "IBLOCK_ID"      => $this->arParams['IBLOCK_ID'],
                "IBLOCK_TYPE_ID" => "News",
                "IBLOCK_CODE" => "Comments",
                "NAME"           => $_POST['name'],
                "CODE" => $_POST['name'],
                "ACTIVE"         => "Y",            // активен
                "PREVIEW_TEXT"   => $_POST['comment'],
                "PROPERTY_VALUES" => $PROP,
                /*  "DETAIL_TEXT"    => "текст для детального просмотра", */
            ];
            var_dump($PROP["ELEMENT_ID"]);
            $el->Add($arLoadProductArray);
             /*    echo "New ID: " . $PRODUCT_ID;
            }else{
                echo "Error: " . $el->LAST_ERROR;
            } */
        }
        

        // $arrayToTemplate - это массив со всеми комментариями, давай сформируем arResult который затем будет доступен в template.php
        /*  $this->arResult['ITEMS'] = $arrayToTemplate2; */

        // Шагом выше ты сам заполнил ITEMS и теперь в template.php можешь делать foreach($arResult) и выводить элементы
        // что-то делаем и результаты работы помещаем в arResult, для передачи в шаблон
        /* $this->arResult['SOME_VAR'] = 'some result data for template'; */

        // Тут происходит магия и он отдает $this->arResult в шаблон и вызывает шаблон
        $this->includeComponentTemplate();
    }
}
