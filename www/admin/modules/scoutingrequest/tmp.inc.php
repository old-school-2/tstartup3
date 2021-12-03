<div class="container-fluid">
	<div class="row page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Скаутинг</a></li>
			<li class="breadcrumb-item"><a href="javascript:void(0)">Создать запрос</a></li>
		</ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Запрос на инновацию «Решение проблемы»</h4>
                </div>
                <div class="card-body">

					<div id="smartwizard" class="form-wizard order-create">

						<ul class="nav nav-wizard">
							<li><a class="nav-link" href="#wizard_Service">
								<span>1</span>
							</a></li>
							<li><a class="nav-link" href="#wizard_Time">
								<span>2</span>
							</a></li>
							<li><a class="nav-link" href="#wizard_Details">
								<span>3</span>
							</a></li>
							<li><a class="nav-link" href="#wizard_Payment">
								<span>4</span>
							</a></li>
						</ul>

						<form id="form_addItem" action="" method="post">
						<input type="hidden" name="module" value="scoutingrequest">
						<input type="hidden" name="component" value="">

						<div class="tab-content">
							<div id="wizard_Service" class="tab-pane" role="tabpanel">
								<div class="row">

									<div class="col-lg-12 mb-3">
										<div class="mb-3">
											<label class="text-label form-label" style="font-weight: bold;">Что болит?</label>
											<input type="text" name="q1" class="form-control" placeholder="Опишите своими словами существующую в организации проблему. Можно сформулировать проблему в форме задачи"  required>
										</div>
									</div>


									<div class="col-lg-12 mb-3">
										<div class="mb-3">
											<label class="text-label form-label" style="font-weight: bold;">Как проявляется ваша проблема?</label>
											<input type="text" name="q2" class="form-control" placeholder="Приведите описание реальной ситуации, в которой проблема бы проявилась"  required>
										</div>
									</div>


								</div>
							</div>
							<div id="wizard_Time" class="tab-pane" role="tabpanel">
								<div class="row">
									<div class="col-lg-12 mb-3">
										<div class="mb-3">
											<label class="text-label form-label" style="font-weight: bold;">Что будет если проблему не решать?</label>
											<input type="text" name="q3" class="form-control" placeholder="Опишите нежелательные эффекты, которые возникают или могут возникнуть из-за того, что проблема не решается"  required>
										</div>
									</div>
										<div class="col-lg-12 mb-3">
										<div class="mb-3">
											<label class="text-label form-label" style="font-weight: bold;">Почему так происходит?</label>
											<input type="text" name="q4" class="form-control" placeholder="Какие на ваш взгляд ключевые причины возникновения проблемы? Что на ваш взгляд является причиной возникновения проблемы?"  required>
										</div>
									</div>

								</div>
							</div>
							<div id="wizard_Details" class="tab-pane" role="tabpanel">

									<div class="col-lg-12 mb-3">
										<div class="mb-3">
											<label class="text-label form-label" style="font-weight: bold;">Какой желательный срок решения проблемы? </label>
											<input type="text" name="q5" class="form-control" placeholder="6 месяцев"  required>
										</div>
									</div>


									<div class="col-lg-12 mb-3">
										<div class="mb-3">
											<label class="text-label form-label" style="font-weight: bold;">Как пробовали решить проблему ранее?</label>
											<input type="text" name="q6" class="form-control" placeholder="Почему эти попытки оказались неудачными или почему были признаны неудачными? Чем не устроили найденные решения? Общались ли с рынком? Если да, то с кем?"  required>
										</div>
									</div>


							</div>
							<div id="wizard_Payment" class="tab-pane" role="tabpanel">
									<div class="row">
									<div class="col-lg-6 mb-2">
										<div class="mb-3">
											<label class="text-label form-label">Название предприятия</label>
											<input type="text" name="name" class="form-control" placeholder="ООО Транспортные инновации Москвы" required>
										</div>
									</div>
									<div class="col-lg-6 mb-2">
										<div class="mb-3">
											<label class="text-label form-label">ФИО</label>
											<input type="text" name="fio" class="form-control" placeholder="Иванов Иван Иванович" required>
										</div>
									</div>
									<div class="col-lg-6 mb-2">
										<div class="mb-3">
											<label class="text-label form-label">Email</label>
											<input type="email" name="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@mos.ru" required>
										</div>
									</div>
									<div class="col-lg-6 mb-2">
										<div class="mb-3">
											<label class="text-label form-label">Телефон</label>
											<input type="text" name="phone" class="form-control" placeholder="+7(977)414-33-54" required>
										</div>
									</div>
									</div>
									<div class="row">
                                    	<button id="addItem" class="btn send_form btn-primary sw-btn-prev" type="submit">Отправить заявку</button>
									</div>
							</div>
						</div>

						</form>
					</div>
                </div>

            </div>
        </div>
    </div>
</div>