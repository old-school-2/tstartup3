<?php defined('DOMAIN') or exit(header('Location: /'));?>
<div id="jsCloseEditMainInfoDiv">

<div class="card-header">
  <h4 class="card-title">Основная информация</h4>
</div>

<div class="card-body">
   <div class="basic-form">
   <form method="post" action="" id="form_editMainInfo">
     <div class="mb-3">
       <label style="margin-left: 7px;">Название компании / команды</label>
       <input type="text" class="form-control input-default" name="naming_command@" value="<?=$st[0]['naming_command']?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">Наименование юридического лица</label>
       <input type="text" class="form-control input-default" name="name_legal_entity@" value="<?=$st[0]['name_legal_entity']?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">Сколько человек в организации</label>
       <select name="how_many_people_id" class="default-select form-control wide mb-3">
            <?if($peoples!=false):?>
            <?foreach($peoples as $b):?>
			<option value="<?=$b['id'];?>"<?if($b['id']==$st[0]['how_many_people_id']):?> selected="selected"<?endif;?>><?=$b['col'];?></option>
            <?endforeach;?>
            <?endif;?>
       </select>
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">ИНН юридического лица</label>
       <input type="text" class="form-control input-default" name="inn_legal_entity@" value="<?=$st[0]['inn_legal_entity']?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">Сайт</label>
       <input type="text" class="form-control input-default" name="site" value="<?=$st[0]['site']?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">ФИО контактного лица</label>
       <input type="text" class="form-control input-default" name="contact_person@" value="<?=$st[0]['contact_person']?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">Должность контактного лица</label>
       <input type="text" class="form-control input-default" name="contact_person_position@" value="<?=$st[0]['contact_person_position']?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">Контактный телефон</label>
       <input type="text" class="phoneMask form-control input-default" name="contact_person_phone@" value="+<?=format_phone($st[0]['contact_person_phone']);?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">Почта</label>
       <input type="text" class="form-control input-default" name="email@" value="<?=$st[0]['email'];?>" placeholder="">
     </div>
     
     <div class="mb-3">
       <label style="margin-left: 7px;">Стадия готовности продукта</label>
       <select name="stage_id" class="default-select form-control wide mb-3">
            <?if($stage!=false):?>
            <?foreach($stage as $b):?>
			<option value="<?=$b['id'];?>"<?if($b['id']==$st[0]['stage_id']):?> selected="selected"<?endif;?>><?=$b['stage'];?></option>
            <?endforeach;?>
            <?endif;?>
       </select>
     </div>
     
      <div class="mb-3">
        <input type="hidden" name="module" value="startup" />
        <input type="hidden" name="module" value="" />
        <input type="hidden" name="startup_id" value="<?=$startup_id;?>" />
        <input type="hidden" name="callbackFunc" value="callbackFunction" />
        <input type="hidden" name="closeThisWindow" value="jsCloseEditMainInfoDiv" />
        <input type="hidden" name="ok" value="Данные сохранены!" />
        <button type="button" class="send_form btn btn-primary" id="editMainInfo" style="width: 40%; font-size: 15px;">Сохранить</button>
      </div>
   </form>
   </div>
</div>

</div>                 