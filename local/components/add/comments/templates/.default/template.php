<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die() ?>
<?php
/* var_dump($_POST); */
/* echo "<pre>";
print_r($arResult);
echo "</pre>"; */
?>
<div class="comment-form">
   <h4>Leave a Reply</h4>
   <form class="form-contact comment_form" action="#" id="commentForm" method="POST">
      <div class="row">
         <div class="col-12">
            <div class="form-group">
               <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="name" id="name" type="text" placeholder="Заголовок">
            </div>
         </div>
         <!-- <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="email" id="email" type="email" placeholder="Email">
            </div>
         </div>
         <div class="col-12">
            <div class="form-group">
               <input class="form-control" name="website" id="website" type="text" placeholder="Website">
            </div>
         </div> -->
      </div>
      <div class="form-group">
         <button type="submit" name="send" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
      </div>
   </form>
</div>