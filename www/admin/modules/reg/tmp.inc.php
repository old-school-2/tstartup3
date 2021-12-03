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
                                    <h4 class="text-center mb-4">Регистрация</h4>
                                    <form action="" method="post" id="form_reg">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Ваше имя</strong></label>
                                            <input type="text" name="name@" class="form-control" placeholder="укажите имя" value="" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email@" class="form-control" placeholder="info@mos.ru" value="" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Пароль</strong></label>
                                            <input type="password" name="pass@" class="form-control" value="" placeholder="***************" />
                                        </div>
                                        <div class="text-center mt-4">
                                        
                                            <input type="hidden" name="module" value="reg" />
                                            <input type="hidden" name="component" value="" />
                                            <input type="hidden" name="clearForm" value="1" />
                                        
                                            <button type="submit" id="reg" class="send_form btn btn-primary btn-block" style="font-size: 15px;">Зарегистрироваться</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Уже есть аккаунт? <a class="text-primary" href="<?=DOMAIN;?>/admin/login">Войти</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>