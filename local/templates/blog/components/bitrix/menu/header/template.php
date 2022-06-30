<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
/* echo "<pre>";
print_r($arResult);
echo "</pre>"; */
?>
<?if(!empty($arResult)):?>
    <div class="main-menu  d-none d-lg-block">
        <nav>
            <ul id="navigation">
    			<? foreach($arResult as $arItems):?>
    				<li>
    					<a href="<?=$arItems["LINK"] ?>" <?=$arItems["SELECTED"] ? 'class="selected"'  : '' ?>>
    				<?=$arItems["TEXT"]?>
    			<?php if(!empty($arItems['subitems'])):?>
    			<span><i class="ti-angle-down"></i></span></a>
    			<?php endif ?>	
    			</a>
    			<?php if(!empty($arItems['subitems'])): ?>
    				<ul class="submenu">
    				    <? foreach($arItems['subitems'] as $subitems):?>
    					<li><a href="<?=$subitems["LINK"] ?>"><?=$subitems["TEXT"] ?></a></li>
    					<?php endforeach?>
    				</ul>
    				<?php endif ?>
    				</li>
    			<? endforeach ?>		
            </ul>                                       
        </nav>
    </div> 
<? endif ?>	