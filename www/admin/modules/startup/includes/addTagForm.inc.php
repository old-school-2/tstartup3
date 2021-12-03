<div class="card-header">
  <h4 class="card-title">Добавление тэга</h4>
</div>

<div class="card-body">
   <div class="basic-form">
   <form method="post" action="" id="form_addNewTag">
     <div class="mb-3">
       <input type="text" class="form-control input-default" name="tag@" value="" placeholder="добавьте новый тэг">
     </div>
     
     <div class="mb-3">
        <input type="hidden" name="module" value="startup" />
        <input type="hidden" name="component" value="" />
        <input type="hidden" name="startup_id" value="<?=$startup_id;?>" />
        <input type="hidden" name="ajaxLoad" value="jsLoadStartUpTagsDiv" />
        <input type="hidden" name="closeWindow" value="1" />
        <input type="hidden" name="opaco" value="1" />
        <button type="button" class="send_form btn btn-primary" id="addNewTag" style="width: 40%; font-size: 15px;">Добавить</button>
      </div>
    </form>  
    
   </div>
</div>