<div class="comments">
   <div class="d-flex justify-content-between align-items-center">
     <span class="text-uppercase fs-18 font-w500">Комментарии</span>
   </div>
</div>

<?foreach($comments as $b):?>
<div class="user-comment row border-bottom pb-3 align-items-center">
    <div class="col-lg-9">
       <div class="d-flex align-items-center">
          <img src="<?=DOMAIN;?>/admin/tmp/images/pic1.jpg" alt="">
            <div class="ms-3">
				<h4 class="fs-18 font-w600"><?=$b['name']?></h4>
				<span class="fs-16"><?=nl2br($b['comment']);?></span>
            </div>
       </div>
    </div>
    
    <div class="col-lg-3 d-flex justify-content-end">
       <div class="like-reply">
       <span class="fs-18 font-w600 me-2"><i class="far fa-thumbs-up text-primary me-2"></i><?=$b['likes'];?></span>
       <!-- <span class="fs-18 font-w600"><i class="fas fa-reply-all me-2 text-blue"></i>Reply</span> -->
      </div>
</div>	
    </div>
<?endforeach;?>