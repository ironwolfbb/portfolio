<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<aside class="single_sidebar_widget instagram_feeds">
    <h4 class="widget_title">Instagram Feeds</h4>
    <ul class="instagram_row flex-wrap">
        <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <li>
                <a href="<?= $item['DETAIL_PAGE_URL'] ?>">
                    <img class="img-fluid" src="<?= $item['PREVIEW_PICTURE'] ?>" alt="">
                </a>
            </li>
        <?php
        } ?>
    </ul>
</aside>