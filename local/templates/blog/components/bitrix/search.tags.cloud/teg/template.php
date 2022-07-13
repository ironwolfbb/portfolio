<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<aside class="single_sidebar_widget tag_cloud_widget">
	<h4 class="widget_title">Tag Clouds</h4>
	<ul class="list">
		<li>
			<?php foreach ($arResult['SEARCH'] as $item) { ?> <a href="<?= $item['URL'] ?>"><?= $item['NAME'] ?></a> <?php } ?>
		</li>

	</ul>

</aside>