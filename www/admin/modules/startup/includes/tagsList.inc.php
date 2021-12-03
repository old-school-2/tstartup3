<div class="workload-button">
   <?if($tags!=false):?>
      <?$n=1; foreach($tags as $tg):?>
        <button type="button" class="btn btn-primary btn-rounded" id="jsDelBtn<?=$n;?>">
          #<?=$tg['tag'];?> <i style="margin-left: 10px;" class="jsDelTagBtn fa fa-trash" data-tag="<?=$tg['tag'];?>" data-remove="jsDelBtn<?=$n;?>" data-btn="jsDelTags"></i>
        </button>
      <?$n++; endforeach;?>	
   <?endif;?>
                                                                                                    
   <a class="jsClickBtn btn btn-primary light btn-rounded" href="#" data-btn="editStartUpTags">
     <i class="fas fa-user-plus scale2 me-3"></i>Добавить тэг
   </a>
</div>