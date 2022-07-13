<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Новости");
?>

<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news",
                        "News",
                        array(
                            "ADD_ELEMENT_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_ACTIVE_DATE_FORMAT" => "d.M.Y",
                            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                            "DETAIL_DISPLAY_TOP_PAGER" => "N",
                            "DETAIL_FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "TAGS",
                                2 => "DETAIL_TEXT",
                                3 => "DETAIL_PICTURE",
                                4 => "SHOW_COUNTER",
                                5 => "DATE_CREATE",
                                6 => "",
                            ),
                            "DETAIL_PAGER_SHOW_ALL" => "Y",
                            "DETAIL_PAGER_TEMPLATE" => "",
                            "DETAIL_PAGER_TITLE" => "Страница",
                            "DETAIL_PROPERTY_CODE" => array(
                                0 => "AUTHOR",
                                1 => "TEG",
                                2 => "",
                            ),
                            "DETAIL_SET_CANONICAL_URL" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "4",
                            "IBLOCK_TYPE" => "News",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "LIST_ACTIVE_DATE_FORMAT" => "d.M.Y",
                            "LIST_FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "TAGS",
                                2 => "PREVIEW_TEXT",
                                3 => "PREVIEW_PICTURE",
                                4 => "SHOW_COUNTER",
                                5 => "IBLOCK_TYPE_ID",
                                6 => "DATE_CREATE",
                                7 => "",
                            ),
                            "LIST_PROPERTY_CODE" => array(
                                0 => "TEG",
                                1 => "",
                            ),
                            "MESSAGE_404" => "",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "blog",
                            "PAGER_TITLE" => "Новости",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "SEF_MODE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "USE_CATEGORIES" => "N",
                            "USE_FILTER" => "N",
                            "USE_PERMISSIONS" => "N",
                            "USE_RATING" => "N",
                            "USE_REVIEW" => "N",
                            "USE_RSS" => "N",
                            "USE_SEARCH" => "N",
                            "USE_SHARE" => "N",
                            "COMPONENT_TEMPLATE" => "News",
                            "VARIABLE_ALIASES" => array(
                                "SECTION_ID" => "SECTION_ID",
                                "ELEMENT_ID" => "ELEMENT_ID",
                            ),
                            "FILTER_NAME" => "$arrFilter",
                        ),
                        false
                    ); ?>


                    <!-- пагинация -->
                    <!--      <nav class="blog-pagination justify-content-center d-flex">
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
                        </nav> -->



                </div>
            </div>

            <!--  Колонка с права -->
            <div class="col-lg-4">
                <div class="blog_right_sidebar">

                    <!-- Поиск -->
                    <!--  <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside> -->

                    <!-- категории новостей -->
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "catalog",
                        array(
                            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                            "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "COUNT_ELEMENTS" => "Y",    // Показывать количество элементов в разделе
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",    // Показывать количество
                            "FILTER_NAME" => "sectionsFilter",    // Имя массива со значениями фильтра разделов
                            "IBLOCK_ID" => "4",    // Инфоблок
                            "IBLOCK_TYPE" => "News",    // Тип инфоблока
                            "SECTION_CODE" => "",    // Код раздела
                            "SECTION_FIELDS" => array(    // Поля разделов
                                0 => "",
                                1 => "NAME",
                                2 => "",
                            ),
                            "SECTION_ID" => $_REQUEST["SECTION_ID"],    // ID раздела
                            "SECTION_URL" => "",    // URL, ведущий на страницу с содержимым раздела
                            "SECTION_USER_FIELDS" => array(    // Свойства разделов
                                0 => "",
                                1 => "",
                            ),
                            "SHOW_PARENT_NAME" => "Y",    // Показывать название раздела
                            "TOP_DEPTH" => "2",    // Максимальная отображаемая глубина разделов
                            "VIEW_MODE" => "LINE",    // Вид списка подразделов
                        ),
                        false
                    ); ?><br>


                    <!-- теги -->
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:search.tags.cloud",
                        "teg",
                        array(
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "N",
                            "COLOR_NEW" => "3E74E6",
                            "COLOR_OLD" => "C0C0C0",
                            "COLOR_TYPE" => "Y",
                            "FILTER_NAME" => "",
                            "FONT_MAX" => "50",
                            "FONT_MIN" => "10",
                            "PAGE_ELEMENTS" => "20",
                            "PERIOD" => "",
                            "PERIOD_NEW_TAGS" => "",
                            "SHOW_CHAIN" => "Y",
                            "SORT" => "NAME",
                            "TAGS_INHERIT" => "Y",
                            "URL_SEARCH" => "/blog",
                            "WIDTH" => "100%",
                            "arrFILTER" => array(
                                0 => "iblock_News",
                                1 => "blog",
                            ),
                            "COMPONENT_TEMPLATE" => "teg",
                            "arrFILTER_iblock_News" => array(
                                0 => "all",
                            ),
                            "arrFILTER_blog" => array(
                                0 => "all",
                            )
                        ),
                        false
                    ); ?>


                    <!-- Инстограм история -->
                    <?php $APPLICATION->IncludeComponent(
                        "instogramm:feed",
                        ".default",
                        array(
                            "ADD_ELEMENT_CHAIN" => "N",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "DETAIL_ACTIVE_DATE_FORMAT" => "d.M.Y",
                            "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                            "DETAIL_DISPLAY_TOP_PAGER" => "N",
                            "DETAIL_FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "TAGS",
                                2 => "DETAIL_TEXT",
                                3 => "DETAIL_PICTURE",
                                4 => "SHOW_COUNTER",
                                5 => "DATE_CREATE",
                                6 => "",
                            ),
                            "DETAIL_PAGER_SHOW_ALL" => "Y",
                            "DETAIL_PAGER_TEMPLATE" => "",
                            "DETAIL_PAGER_TITLE" => "Страница",
                            "DETAIL_PROPERTY_CODE" => array(
                                0 => "AUTHOR",
                                1 => "TEG",
                                2 => "",
                            ),
                            "DETAIL_SET_CANONICAL_URL" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "6",
                            "IBLOCK_TYPE" => "instofeed",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "LIST_ACTIVE_DATE_FORMAT" => "d.M.Y",
                            "LIST_FIELD_CODE" => array(
                                0 => "NAME",
                                1 => "TAGS",
                                2 => "PREVIEW_TEXT",
                                3 => "PREVIEW_PICTURE",
                                4 => "SHOW_COUNTER",
                                5 => "IBLOCK_TYPE_ID",
                                6 => "DATE_CREATE",
                                7 => "",
                            ),
                            "LIST_PROPERTY_CODE" => array(
                                0 => "TEG",
                                1 => "",
                            ),
                            "MESSAGE_404" => "",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "NEWS_COUNT" => "3",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => "blog",
                            "PAGER_TITLE" => "Новости",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "SEF_MODE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "USE_CATEGORIES" => "N",
                            "USE_FILTER" => "N",
                            "USE_PERMISSIONS" => "N",
                            "USE_RATING" => "N",
                            "USE_REVIEW" => "N",
                            "USE_RSS" => "N",
                            "USE_SEARCH" => "N",
                            "USE_SHARE" => "N",
                            "COMPONENT_TEMPLATE" => "News",
                            "VARIABLE_ALIASES" => array(
                                "SECTION_ID" => "SECTION_ID",
                                "ELEMENT_ID" => "ELEMENT_ID",
                            ),
                            "FILTER_NAME" => "$arrFilter",
                        ),
                        false
                    ); ?>
                    <!-- <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>  -->


                    <!--   <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>