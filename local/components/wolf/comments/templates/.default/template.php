<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/* echo "<pre>";
print_r($arResult);
echo "</pre>"; */

?>

<div class="comments-area">
   <h4>05 Comments</h4>
   <?php foreach ($arResult['ITEMS'] as $arItem) : ?>
      <div class="comment-list">
         <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
               <div class="thumb">
                  <img src="" alt="">
               </div>
               <div class="desc">
                  <p class="comment">
                     <?= $arItem['COMMENT_TEXT'] ?>
                  </p>
                  <div class="d-flex justify-content-between">
                     <div class="d-flex align-items-center">
                        <h5>
                           <a href="#"><?= $arItem['USER'] ?></a>
                        </h5>
                        <p class="date"> <?= $arItem['DATE_CREATE'] ?></p>
                     </div>
                     <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<?php endforeach ?>