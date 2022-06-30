<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
/* echo "<pre>";
print_r($arResult);
echo "</pre>"; */
?>
<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Категории Новостей</h4>
    <ul class="list cat-list">
		<?php foreach($arResult['SECTIONS'] as $arSection):?>
        <li>
            <a href="/Blog/?SECTION_ID=<?=$arSection['ID'] ?>" class="d-flex">
                <p><?=$arSection['NAME'] ?></p>
                <p>(<?=$arSection['ELEMENT_CNT'] ?>)</p>
            </a>
        </li>
        <?php endforeach ?>
   </ul>
</aside> 

                       