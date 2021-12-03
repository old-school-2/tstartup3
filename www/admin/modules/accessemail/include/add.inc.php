<div class="card-header">
    <h4 class="card-title">Добавить домен</h4>
</div>

<div class="card-body">
    <div class="basic-form">
        <form id="form_addItem" action="" method="post">
         	<input type="hidden" name="module" value="accessemail" />
            <input type="hidden" name="component" value="" />
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Домен</label>
                <div class="col-sm-9">
                    <input type="text" name="domain" class="form-control" placeholder="Введите домен">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Статус</label>
                <div class="col-sm-9">
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="status1" name="status" value="1" checked="">
                            <label class="form-check-label" for="status1">
                                Активен
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="status0" name="status" value="0">
                            <label class="form-check-label" for="status0">
                                Не активен
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
            	<div class="col-sm-3"> </div>
                <div class="col-sm-9">
                    <button type="submit" id="addItem" class="send_form btn btn-primary">Добавить домен</button>
                </div>
            </div>
        </form>
    </div>
</div>