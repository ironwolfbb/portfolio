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

foreach ($arResult['ITEMS'] as $arItem) : ?>

    <article class="blog_item">
        <div class="blog_item_img">
            <img class="card-img rounded-0" src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
            <a href="#" class="blog_item_date">
                <h3><?= FormatDate("d", MakeTimeStamp($arItem['DATE_CREATE'])) ?></h3>
                <p><?= FormatDate("F", MakeTimeStamp($arItem['DATE_CREATE'])) ?></p>
            </a>
        </div>

        <div class="blog_details">
            <a class="d-inline-block" href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                <h2><?= $arItem['NAME'] ?></h2>
            </a>
            <p><?= $arItem['PREVIEW_TEXT'] ?></p>
            <ul class="blog-info-link">
                <li><a href="/Blog/?SECTION_ID=<?= $arItem['CATEGORY']['ID'] ?>"><i class="fa fa-user"></i><?= $arItem['CATEGORY']['NAME'] ?></a></li>
                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
            </ul>
        </div>
    </article>
<?php endforeach ?>

<?php if ($arParams['DISPLAY_BOTTOM_PAGER']) : ?>
<?= $arResult['NAV_STRING'];
endif;

?>

<!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>  -->