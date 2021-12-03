
<!-- row -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Запросы</h4>
                             <button class="btn btn-primary btn-small" onClick="$('button#add').click();" type="button"><i class="fa fa-plus"></i> Добавить запрос</button>
                             <form id="form_add" action="" method="post" class="hidden">
                             	<input type="hidden" name="module" value="users" />
                                <input type="hidden" name="component" value="" />
                                <button id="add" class="send_form"></button>
                             </form>
                         </div>
                         <div class="card-body">
                             <div class="table-responsive">
                                 <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Всего записей: <?=count($q)?></div>
                                 <table class="table table-responsive-md">
                                     <thead>
                                         <tr>
                                             <th style="width:50px;">
										<div class="form-check custom-checkbox checkbox-success check-lg me-3">
											<input type="checkbox" class="form-check-input" id="checkAll" required="">
											<label class="form-check-label" for="checkAll"></label>
										</div>
									</th>
                                             <th style="width: 50px;"><strong>ID</strong></th>
                                             <th><strong>Описание запроса</strong></th>
                                             <th><strong>Название компании</strong></th>
                                             <th><strong>Контактное лицо</strong></th>
                                             <th><strong>E-Mail</strong></th>
                                             <th><strong>Телефон</strong></th>
                                             <th style="width: 80px;"><strong></strong></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                     <?foreach ($q as $v): ?>
                                         <tr id="elem<?=$v['id']?>">
	                                        <td>
												<div class="form-check custom-checkbox checkbox-success check-lg me-3">
													<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
													<label class="form-check-label" for="customCheckBox2"></label>
												</div>
											</td>
                                             <td><strong><?=$v['id']?></strong></td>
                                             <td><?=$v['q1']?></td>
                                             <td><?=$v['name']?></td>
                                             <td><?=$v['fio']?></td>
                                             <td><?=$v['email']?></td>
                                             <td><?=$v['phone']?></td>
                                             <td>
												<div class="d-flex">
													<a href="javascript://" onClick="$('button#edit<?=$v['id']?>').click();" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
													<a href="javascript://" onClick="$('button#remove<?=$v['id']?>').click();" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

													<form id="form_edit<?=$v['id']?>" action="" method="post" class="hidden">
													    <input type="hidden" name="id" value="<?=$v['id']?>" />
						                             	<input type="hidden" name="module" value="scouting" />
						                                <input type="hidden" name="component" value="" />
						                                <button id="edit<?=$v['id']?>" class="send_form"></button>
						                             </form>
						                             <form id="form_remove<?=$v['id']?>" action="" method="post" class="hidden">
						                                <input type="hidden" name="id" value="<?=$v['id']?>" />
						                             	<input type="hidden" name="module" value="scouting" />
						                                <input type="hidden" name="component" value="" />
						                                <button id="remove<?=$v['id']?>" class="send_form"></button>
						                             </form>
												</div>
											</td>
         								</tr>
	         						<?endforeach;?>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
			 </div>
         </div>