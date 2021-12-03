<div class="card-header">
    <h4 class="card-title">Удалить домен</h4>
</div>

<div class="card-body">
    <div class="basic-form">
        <form id="form_itemRemove" action="" method="post">
         	<input type="hidden" name="module" value="accessemail" />
            <input type="hidden" name="component" value="" />
            <input type="hidden" name="id" value="<?=$q[0]['id']?>" />
            <input type="hidden" name="opaco" value="1" />
            <input type="hidden" name="closeWindow" value="1" />
            <input type="hidden" name="removeElement" value="elem<?=$q[0]['id']?>" />
            
            <div class="text-center" style="margin-bottom: 20px; font-size: 15px">
                Вы действительно хотите удалить домен <?=$q[0]['domain']?>?
            </div>

            <div class="mt-20 row">
            	<div class="col-sm-3"> </div>
                <div class="col-sm-9">
                    <button type="submit" id="itemRemove" class="send_form btn btn-danger">Удалить</button>
                    <button type="button" onClick="$('.jsClosePopupWindow').click();" class="btn btn-default">Отмена</button>
                </div>
            </div>
        </form>
    </div>
</div>