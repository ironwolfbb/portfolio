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
<section class="blog_area single-post-area section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="">
               </div>
               <div class="blog_details">
                  <h2><?= $arResult['NAME'] ?></h2>
                  <ul class="blog-info-link mt-3 mb-4">
                     <li><a href="<?= $arResult['SECTION_URL'] ?>"><i class="fa fa-user"></i><?= $arResult['CATEGORY']['NAME'] ?></a></li>
                     <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                  </ul>
                  <p class="excert">
                     <?= $arResult['PREVIEW_TEXT'] ?>
                  </p>
                  <p>
                     <?= $arResult['DETAIL_TEXT'] ?>
                  </p>
                  <div class="quote-wrapper">
                     <div class="quotes">
                        <?= $arResult['DETAIL_TEXT'] ?>
                     </div>
                  </div>
                  <p>
                     <?= $arResult['PREVIEW_TEXT'] ?>
                  </p>
               </div>
            </div>
            <div class="navigation-top">
               <div class="d-sm-flex justify-content-between text-center">
                  <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                     people like this</p>
                  <div class="col-sm-4 text-center my-2 my-sm-0">
                     <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                  </div>
                  <ul class="social-icons">
                     <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                     <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
               </div>
               <div class="navigation-area">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        <div class="thumb">
                           <a href="<?= $arResult['TOLEFT']['URL']?>">
                              <img class="img-fluid" src="<?= $arResult['TOLEFT']['PREVIEW_PICTURE']?>" alt="">
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="#">
                              <span class="lnr text-white ti-arrow-left"></span>
                           </a>
                        </div>
                        <div class="detials">
                           <p>Prev Post</p>
                           <a href="<?= $arResult['TOLEFT']['URL']?>">
                              <h4><?= $arResult['TOLEFT']['NAME']?></h4>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        <div class="detials">
                           <p>Next Post</p>
                           <a href="<?= $arResult['TORIGHT']['URL']?>">
                              <h4><?= $arResult['TORIGHT']['NAME']?></h4>
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="#">
                              <span class="lnr text-white ti-arrow-right"></span>
                           </a>
                        </div>
                        <div class="thumb">
                           <a href="<?= $arResult['TORIGHT']['URL']?>">
                              <img class="img-fluid" src="<?= $arResult['TORIGHT']['PREVIEW_PICTURE']?>" alt="">
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="blog-author">
               <div class="media align-items-center">
                  <img src="img/blog/author.png" alt="">
                  <div class="media-body">
                     <a href="#">
                        <h4><?= $arResult['DISPLAY_PROPERTIES']['AUTHOR']['VALUE']?></h4>
                     </a>
                     <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                        our dominion twon Second divided from</p>
                  </div>
               </div>
            </div>

            <?php $APPLICATION->IncludeComponent(
               "wolf:comments",
               ".default",
               array(

                  "IBLOCK_ID" => '5',
               ),
               false
            ); ?>
            <?php $APPLICATION->IncludeComponent(
               "add:comments",
               ".default",
               array(

                  "IBLOCK_ID" => '5',
               ),
               false
            ); ?>

         </div>
      </div>
   </div>
</section>