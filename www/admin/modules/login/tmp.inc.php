<div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-4">
										<a href="/admin/"><img src="/admin/img/logogreen.svg" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Авторизация</h4>
                                    <form action="" method="post" id="form_login">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email@" class="form-control" value="" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Пароль</strong></label>
                                            <input type="password" name="pass@" class="form-control" value="" placeholder="**************">
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
													<input type="checkbox" name="remember" value="1" class="form-check-input" id="basic_checkbox_1">
													<label class="form-check-label" for="basic_checkbox_1">Запомнить меня</label>
												</div>
                                            </div>
            
                                        </div>
                                        <div class="text-center">
                                            <input type="hidden" name="module" value="login" />
                                            <input type="hidden" name="component" value="" />
                                            <button type="submit" id="login" class="send_form btn btn-primary btn-block" style="font-size: 15px;">Войти</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Нет учетной записи? <a class="text-primary" href="<?=DOMAIN;?>/admin/reg">Зарегистрируйтесь</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>