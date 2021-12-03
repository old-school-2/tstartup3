<?php defined('DOMAIN') or exit(header('Location: /'));?>
<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card overflow-hidden">

									<div class="card-body">

										<div class="row border-bottom pb-5">

                                                    <div class="row pb-3">
                                                      <div class="col-md-9">
                                                        <h4 class="fs-32 font-w700" id="data1_editMainInfo"><?=$st[0]['naming_command']?></h4>
                                                      </div>

                                                      <div class="col-md-3">

                                                            <div class="info">
												<div class="kanbanimg1">
													<span><i class="fas fa-info-circle me-3"></i>Описание проекта</span>
													<div class="dropdown ms-3">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"/>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="javascript:void(0)">Удалить</a>
															<a class="jsClickBtn dropdown-item" data-btn="editStartupMainInfoPopup" href="#">Изменить</a>
														</div>

                                                        <form method="post" action="" id="form_editStartupMainInfoPopup" class="hidden">
                                                          <input type="hidden" name="module" value="startup" />
                                                          <input type="hidden" name="component" value="" />
                                                          <input type="hidden" name="startup_id" value="<?=$startup_id;?>" />
                                                          <button class="send_form" id="editStartupMainInfoPopup"></button>
                                                        </form>

													</div>
												</div>
												<div class="kanbanimg1">
													<ul class="kanbanimg me-3 mb-3">
														<li><img src="<?=DOMAIN;?>/admin/tmp/images/profile/small/pic1.jpg" alt=""></li>
														<li><img src="<?=DOMAIN;?>/admin/tmp/images/profile/small/pic2.jpg" alt=""></li>
														<li><img src="<?=DOMAIN;?>/admin/tmp/images/profile/small/pic3.jpg" alt=""></li>
														<li><img src="<?=DOMAIN;?>/admin/tmp/images/profile/small/pic4.jpg" alt=""></li>
														<li><img src="<?=DOMAIN;?>/admin/tmp/images/profile/small/pic5.jpg" alt=""></li>
														<li><span>5+</span></li>
													</ul>
												</div>
											</div>

                                                      </div>

                                                     </div>




                                                    <div class="row pb-3">

                                                      <div class="col-md-4">
                                                        <div class="sturtupLogoDiv">
                                                          <img src="<?=$st[0]['img'];?>" />
                                                        </div>
                                                      </div>

                                                      <div class="col-md-4">
                                                         <span class="mb-2 d-block">Компания: <span id="data2_editMainInfo"><?=$st[0]['name_legal_entity'];?></span></span>
		                                                 <span class="mb-2 d-block">Численность: <span id="data3_editMainInfo"><?=$st[0]['col'];?></span></span>
									                     <span class="mb-2 d-block">ИНН: <span id="data4_editMainInfo"><?=$st[0]['inn_legal_entity'];?></span></span>
									                     <span class="mb-2 d-block">Сайт: <span id="data5_editMainInfo"><a class="startupInfoLink" href="<?=$st[0]['site'];?>" target="_blank"><?=str_replace(array('http://','https://','/'),'',$st[0]['site']);?></a></span></span>
                                                      </div>

                                                      <div class="col-md-4">
                                                         <span class="mb-2 d-block">ФИО: <span id="data6_editMainInfo"><?=$st[0]['contact_person'];?></span></span>
                                                         <span class="mb-2 d-block">Должность: <span id="data7_editMainInfo"><?=$st[0]['contact_person_position'];?></span></span>
	                                                     <span class="mb-2 d-block">Телефон: <span id="data8_editMainInfo"><a class="startupInfoLink" href="tel:+<?=$st[0]['contact_person_phone'];?>">+<?=format_phone($st[0]['contact_person_phone']);?></a></span></span>
	                                                     <span class="mb-2 d-block">Почта: <span id="data9_editMainInfo"><a class="startupInfoLink" href="mailto:<?=$st[0]['email'];?>"><?=$st[0]['email'];?></a></span></span>
                                                      </div>

                                                      </div>


											<div class="col-xl-8 col-lg-9">
												<div id="jsLoadStartUpTagsDiv">

												<?require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/tagsList.inc.php';?>
												</div>

                                                <form method="post" action="" id="form_editStartUpTags" class="hidden">
                                                      <input type="hidden" name="module" value="startup" />
                                                      <input type="hidden" name="component" value="" />
                                                      <input type="hidden" name="startup_id" value="<?=$startup_id;?>" />
                                                      <button class="send_form" id="editStartUpTags"></button>
                                                </form>

                                                <form method="post" action="" id="form_jsDelTags" class="hidden">
                                                      <input type="hidden" name="module" value="startup" />
                                                      <input type="hidden" name="component" value="" />
                                                      <input type="hidden" name="tag" id="jsTagName" value="" />
                                                      <input type="hidden" name="removeElement" id="jsTagRemoveBtn" value="" />
                                                      <input type="hidden" name="startup_id" value="<?=$startup_id;?>" />
                                                      <input type="hidden" name="opaco" value="1" />
                                                      <button name="del" data-text="Вы уверены, что хотите удалить этот тэг?" class="send_form" id="jsDelTags"></button>
                                                </form>
											</div>

                                            <div class="row">

											<div class="col-xl-3 mt-4 col-sm-6">
												<div class="d-flex">
													<span><i class="far fa-clock scale5 text-primary mt-2 me-3"></i></span>
													<div>
														<h4 class="fs-18 font-w500 text-black">Продукт создан</h4>
														<span><?=date('d.m.Y',strtotime($st[0]['add_date']))?></span>
													</div>
												</div>
											</div>
											<div class="col-xl-3 mt-4 col-sm-6">
												<div class="d-flex">
													<span><i class="far fa-clock scale5 text-primary mt-2 me-3"></i></span>
													<div>
														<h4 class="fs-18 font-w500 text-black">Стадия продукта</h4>
														<span id="data10_editMainInfo"><?=$st[0]['stage'];?></span>
													</div>
												</div>
											</div>
											<div class="col-xl-6 mt-4 col-sm-12">
												<div class="mb-3">
													<span class="fs-18 font-w500">Стадия готовности 20%</span>
												</div>
												<div class="progress default-progress1">
													<div class="progress-bar progress-animated" style="width: 20%; height:14px;" role="progressbar">
														<span class="sr-only">20% Complete</span>
													</div>
												</div>

											</div>

                                            </div>
										</div>
										<div class="project-description">
											<h3>Описание</h3>
											<p class="fs-18 font-w500 mb-4"><?=nl2br($st[0]['short_description']);?></p>
                                            <div class="border-bottom mt-2 mb-2"></div>
											<h3>Кейсы использования</h3>

											<p class="fs-18 font-w500 mb-4"><?=nl2br($st[0]['use_cases']);?></p>
                                            <div class="border-bottom mt-2 mb-2"></div>
                                            <h3>Запрос к акселератору и видение пилотного проекта</h3>

											<p class="fs-18 font-w500 mb-4"><?=nl2br($st[0]['vision_pilot_project']);?></p>
                                            <div class="border-bottom mt-2 mb-2"></div>
											<h3>Польза продукта</h3>

											<p class="fs-18 font-w500 mb-4"><?=nl2br($st[0]['benefit']);?></p>


										</div>
                             </div>
                        </div>
                        </div>

                       <div class="col-xl-12">
                         <div class="card overflow-hidden">
						    <div class="card-body">

						        <h3 style="display: inline-block">Пилотные проекты</h3>
						        <a href="javascript:void(0);" style="float: right" class="btn btn-primary btn-rounded fs-5 mb-2">+ Добавить пилотный проект</a>

                                <?if ($pilot == false):?>
                                <p>В рамках данного стартапа пока не создано пилотных проектов</p>
                                <?else:?>
                                <table class="table table-responsive-md">
                                     <thead>
                                         <tr>
                                             <th style="width:50px;">
										<div class="form-check custom-checkbox checkbox-success check-lg me-3">
											<input type="checkbox" class="form-check-input" id="checkAll" required="">
											<label class="form-check-label" for="checkAll"></label>
										</div>
									</th>
                                             <th style="width: 30%"><strong>Название, описание</strong></th>
                                             <th><strong>Состояние проекта</strong></th>
                                             <th><strong>Фаза тестирования</strong></th>
                                             <th><strong>Ведомство</strong></th>
                                             <th><strong>Дата инициации</strong></th>
                                             <th style="width: 80px;"><strong></strong></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                     <?foreach ($pilot as $v): ?>
                                         <tr id="elem<?=$v['id']?>">
	                                        <td>
												<div class="form-check custom-checkbox checkbox-success check-lg me-3">
													<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
													<label class="form-check-label" for="customCheckBox2"></label>
												</div>
											</td>
                                             <td>
                                             <div style="font-size: 14px; font-weight: bold"><?=$v['name']?></div>
                                             <div style="font-size: 12px;"><?=$v['description']?></div>
                                             </td>
                                             <td>
                                             	<div class="badge badge-rounded <?if ($v['status'] == 1):?>badge-primary<?elseif ($v['status'] == 2):?>badge-warning<?elseif ($v['status'] == 3):?>badge-success<?elseif ($v['status'] == 4):?>badge-danger<?endif;?>">
                                             	<?=$v['statusName']?>
                                             	</div>

                                             </td>
                                             <td><?=$v['fazaName']?></td>
                                             <td><?=$v['orgName']?></td>
                                             <td><?=date('d.m.Y', strtotime($v['date_start']))?></td>
                                             <td>
												<div class="d-flex">
													<a href="javascript://" onClick="$('button#edit<?=$v['id']?>').click();" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
													<a href="javascript://" onClick="$('button#remove<?=$v['id']?>').click();" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

													<form id="form_editPilot<?=$v['id']?>" action="" method="post" class="hidden">
													    <input type="hidden" name="id" value="<?=$v['id']?>" />
						                             	<input type="hidden" name="module" value="startup" />
						                                <input type="hidden" name="component" value="" />
						                                <button id="editPilot<?=$v['id']?>" class="send_form"></button>
						                             </form>
						                             <form id="form_removePilot<?=$v['id']?>" action="" method="post" class="hidden">
						                                <input type="hidden" name="id" value="<?=$v['id']?>" />
						                             	<input type="hidden" name="module" value="startup" />
						                                <input type="hidden" name="component" value="" />
						                                <button id="removePilot<?=$v['id']?>" class="send_form"></button>
						                             </form>
												</div>
											</td>
         								</tr>
	         						<?endforeach;?>
                                     </tbody>
                                 </table>

                                 <?endif;?>
						</div>
                        </div>
                        </div>


                       <div class="col-xl-12">
                         <div class="card overflow-hidden">
						    <div class="card-body">

						        <h3 style="display: inline-block">Привелеченные инвестиции</h3>
						        <a href="javascript:void(0);" style="float: right" class="btn btn-primary btn-rounded fs-5 mb-2">+ Добавить инвестицию</a>

                                <?if ($invest == false):?>
                                <p>На текущий момент в стартап нет инвестиций</p>
                                <?else:?>
                                <table class="table table-responsive-md">
                                     <thead>
                                         <tr>
                                             <th style="width:50px;">
										<div class="form-check custom-checkbox checkbox-success check-lg me-3">
											<input type="checkbox" class="form-check-input" id="checkAll" required="">
											<label class="form-check-label" for="checkAll"></label>
										</div>
									</th>
                                             <th style="width: 30%"><strong>Инвестор</strong></th>
                                             <th><strong>Сумма инвестиций, руб.</strong></th>
                                             <th><strong>Дата</strong></th>
                                             <th style="width: 80px;"><strong></strong></th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                     <?foreach ($invest as $v): ?>
                                         <tr id="elem<?=$v['id']?>">
	                                        <td>
												<div class="form-check custom-checkbox checkbox-success check-lg me-3">
													<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
													<label class="form-check-label" for="customCheckBox2"></label>
												</div>
											</td>
                                             <td>
                                             <div style="font-size: 14px;"><?=$v['invest_name']?></div>
                                             </td>
                                             <td>
                                             	<div class="badge badge-rounded badge-primary" style="font-size: 13px; font-weight: 400">
                                             	<?=number_format($v['invest_sum'], 0, 0, ' ')?>
                                             	</div>
                                             </td>
                                             <td><?=date('d.m.Y', strtotime($v['time_date']))?></td>
                                             <td>
												<div class="d-flex">
													<a href="javascript://" onClick="$('button#edit<?=$v['id']?>').click();" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
													<a href="javascript://" onClick="$('button#remove<?=$v['id']?>').click();" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>

													<form id="form_editPilot<?=$v['id']?>" action="" method="post" class="hidden">
													    <input type="hidden" name="id" value="<?=$v['id']?>" />
						                             	<input type="hidden" name="module" value="startup" />
						                                <input type="hidden" name="component" value="" />
						                                <button id="editPilot<?=$v['id']?>" class="send_form"></button>
						                             </form>
						                             <form id="form_removePilot<?=$v['id']?>" action="" method="post" class="hidden">
						                                <input type="hidden" name="id" value="<?=$v['id']?>" />
						                             	<input type="hidden" name="module" value="startup" />
						                                <input type="hidden" name="component" value="" />
						                                <button id="removePilot<?=$v['id']?>" class="send_form"></button>
						                             </form>
												</div>
											</td>
         								</tr>
	         						<?endforeach;?>
                                     </tbody>
                                 </table>

                                 <?endif;?>
						</div>
                        </div>
                        </div>

						<div class="col-xl-12">

                        <div class="row">

							<div class="col-xl-3 col-sm-3 mb-2">
								<div class="card">
									<div class="card-body d-flex px-4 pb-0 justify-content-between">
										<div>
											<h4 class="fs-18 font-w600 mb-4 text-nowrap">Пилотных проектов</h4>
											<div class="d-flex align-items-center">
												<h2 class="fs-32 font-w700 mb-0"><?=count($pilot)?></h2>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-sm-3 mb-2">
								<div class="card">
									<div class="card-body d-flex px-4 pb-0 justify-content-between">
										<div>
											<h4 class="fs-18 font-w600 mb-4 text-nowrap">В работе</h4>
											<div class="d-flex align-items-center">
												<h2 class="fs-32 font-w700 mb-0">1</h2>
												<span class="d-block ms-4">
													<svg width="21" height="11" viewBox="0 0 21 11" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z" fill="#09BD3C"></path>
													</svg>
													<small class="d-block fs-16 font-w400 text-success">+0,5%</small>
												</span>
											</div>
										</div>
										<div class="bg-gradient1 rounded text-center p-3">
											<div class="d-inline-block position-relative donut-chart-sale mb-3">
												<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;var(--primary)&quot;, &quot;rgba(238, 238, 237, 1)&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="var(--primary)"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
												<small class="text-primary">33%</small>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-sm-3 mb-2">
								<div class="card">
									<div class="card-body d-flex px-4 pb-0 justify-content-between">
										<div>
											<h4 class="fs-18 font-w600 mb-4 text-nowrap">Приостановлено</h4>
											<div class="d-flex align-items-center">
												<h2 class="fs-32 font-w700 mb-0">1</h2>
											</div>
										</div>
										<div class="bg-gradient1 rounded text-center p-3">
											<div class="d-inline-block position-relative donut-chart-sale mb-3">
												<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;#FC2E53&quot;, &quot;#FC2E53&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="#FFCF6D"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
												<small class="text-warning">33%</small>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-3 col-sm-3 mb-2">
								<div class="card">
									<div class="card-body d-flex px-4 pb-0 justify-content-between">
										<div>
											<h4 class="fs-18 font-w600 mb-4 text-nowrap">Отменено</h4>
											<div class="d-flex align-items-center">
												<h2 class="fs-32 font-w700 mb-0">1</h2>
											</div>
										</div>
										<div class="bg-gradient1 rounded text-center p-3">
											<div class="d-inline-block position-relative donut-chart-sale mb-3">
												<span class="donut3" data-peity="{ &quot;fill&quot;: [&quot;#FC2E53&quot;, &quot;#FC2E53&quot;],   &quot;innerRadius&quot;: 33, &quot;radius&quot;: 10}" style="display: none;">5/8</span><svg class="peity" height="90" width="90"><path d="M 45 0 A 45 45 0 1 1 13.180194846605364 76.81980515339464 L 21.665476220843935 68.33452377915607 A 33 33 0 1 0 45 12" data-value="5" fill="#FC2E53"></path><path d="M 13.180194846605364 76.81980515339464 A 45 45 0 0 1 44.99999999999999 0 L 44.99999999999999 12 A 33 33 0 0 0 21.665476220843935 68.33452377915607" data-value="3" fill="rgba(238, 238, 237, 1)"></path></svg>
												<small class="text-danger">33%</small>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body d-flex px-4  justify-content-between" style="position: relative;">
										<div>
											<div class="">
												<h2 class="fs-32 font-w700">+<?=number_format($investSum[0]['isum'], 0, 0, ' ')?> руб.</h2>
												<span class="fs-18 font-w500 d-block">Инвестиций за все время</span>
												<!-- <span class="d-block fs-16 font-w400"><small class="text-danger">-2%</small> than last month</span> -->
											</div>
										</div>
										<div id="NewCustomers3" style="min-height: 50px;"><div id="apexcharts5wkws8sp" class="apexcharts-canvas apexcharts5wkws8sp apexcharts-theme-light" style="width: 100px; height: 50px;"><svg id="SvgjsSvg1494" width="100" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1496" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1495"><clipPath id="gridRectMask5wkws8sp"><rect id="SvgjsRect1499" width="110" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask5wkws8sp"><rect id="SvgjsRect1500" width="104" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1506" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1507" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1515" class="apexcharts-grid"><g id="SvgjsG1516" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1518" x1="0" y1="0" x2="100" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1519" x1="0" y1="10" x2="100" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1520" x1="0" y1="20" x2="100" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1521" x1="0" y1="30" x2="100" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1522" x1="0" y1="40" x2="100" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1523" x1="0" y1="50" x2="100" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1517" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1525" x1="0" y1="50" x2="100" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1524" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1501" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1502" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1505" d="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" fill="none" fill-opacity="1" stroke="var(--primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask5wkws8sp)" pathTo="M 0 47.5C 7 47.5 13 22.5 20 22.5C 27 22.5 33 47.5 40 47.5C 47 47.5 53 10 60 10C 67 10 73 35 80 35C 87 35 93 10 100 10" pathFrom="M -1 60L -1 60L 20 60L 40 60L 60 60L 80 60L 100 60"></path><g id="SvgjsG1503" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1504" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1526" x1="0" y1="0" x2="100" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1527" x1="0" y1="0" x2="100" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1528" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1529" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1530" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1514" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1497" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
									<div class="resize-triggers"><div class="expand-trigger"><div style="width: 239px; height: 139px;"></div></div><div class="contract-trigger"></div></div></div>
								</div>
							</div>
							<div class="col-xl-6 col-sm-6">
								<div class="card">
									<div class="card-body d-flex px-4  justify-content-between" style="position: relative;">
										<div>
											<div class="">
												<h2 class="fs-32 font-w700"><?=number_format($investCount[0]['icount'], 0, 0, ' ')?></h2>
												<span class="fs-18 font-w500 d-block">Инвесторов стартапа</span>
												<!-- <span class="d-block fs-16 font-w400"><small class="text-success">-2%</small> than last month</span> -->
											</div>
										</div>
										<div id="NewCustomers2" style="min-height: 50px;"><div id="apexchartsswy01sed" class="apexcharts-canvas apexchartsswy01sed apexcharts-theme-light" style="width: 80px; height: 50px;"><svg id="SvgjsSvg1531" width="80" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;"><g id="SvgjsG1533" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1532"><clipPath id="gridRectMaskswy01sed"><rect id="SvgjsRect1536" width="90" height="56" x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskswy01sed"><rect id="SvgjsRect1537" width="84" height="54" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1543" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1544" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1552" class="apexcharts-grid"><g id="SvgjsG1553" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1555" x1="0" y1="0" x2="80" y2="0" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1556" x1="0" y1="10" x2="80" y2="10" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1557" x1="0" y1="20" x2="80" y2="20" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1558" x1="0" y1="30" x2="80" y2="30" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1559" x1="0" y1="40" x2="80" y2="40" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1560" x1="0" y1="50" x2="80" y2="50" stroke="#eeeeee" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1554" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1562" x1="0" y1="50" x2="80" y2="50" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1561" x1="0" y1="1" x2="0" y2="50" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1538" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1539" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1542" d="M 0 47.5C 5.6 47.5 10.4 22.5 16 22.5C 21.6 22.5 26.4 35 32 35C 37.6 35 42.4 10 48 10C 53.6 10 58.4 47.5 64 47.5C 69.6 47.5 74.4 10 80 10" fill="none" fill-opacity="1" stroke="var(--primary)" stroke-opacity="1" stroke-linecap="butt" stroke-width="6" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskswy01sed)" pathTo="M 0 47.5C 5.6 47.5 10.4 22.5 16 22.5C 21.6 22.5 26.4 35 32 35C 37.6 35 42.4 10 48 10C 53.6 10 58.4 47.5 64 47.5C 69.6 47.5 74.4 10 80 10" pathFrom="M -1 60L -1 60L 16 60L 32 60L 48 60L 64 60L 80 60"></path><g id="SvgjsG1540" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG1541" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1563" x1="0" y1="0" x2="80" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1564" x1="0" y1="0" x2="80" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1565" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1566" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1567" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1551" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1534" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 25px;"></div></div></div>
									<div class="resize-triggers"><div class="expand-trigger"><div style="width: 239px; height: 143px;"></div></div><div class="contract-trigger"></div></div></div>
								</div>

							</div>
                       </div>

                       <div class="col-xl-12">
                         <div class="card overflow-hidden">
						    <div class="card-body">

                                     <div>
                                        <div class="compose-content">
                                        <h5 class="mb-4"><i class="fa fa-paperclip"></i> Прикрепить файл</h5>

                                        <form action="#" id="testUpload" class="dropzone">
											<div class="fallback">
												<input name="file" type="file" multiple />
											</div>
                                        </form>
                                        </div>

                                        <div class="text-start mt-4 mb-3">
                                          <button class="jsFileUploadDropZone btn btn-primary btn-sl-sm me-2" data-id="<?=$startup_id;?>" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Загрузить</button>
                                          <button class="jsFileClearDropZone btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Отменить</button>
                                        </div>
                                    </div>

                                    <div id="jsAjaxLoadFilesTable">
                                    <?if($files!=false):?>
                                      <?require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/filesTable.inc.php';?>
                                    <?endif;?>
                                    </div>


										<div class="message1">
                                             <form method="post" action="" id="form_addComment">
											 <textarea class="form-control" id="exampleFormControlTextarea1" name="comment@" rows="4" placeholder="Оставьте комментарий здесь..."></textarea>
											<div class="msg-button">
												<input type="hidden" name="module" value="startup" />
                                                <input type="hidden" name="component" value="" />
                                                <input type="hidden" name="startup_id" value="<?=$startup_id;?>" />
                                                <input type="hidden" name="ajaxLoad" value="jsCommentsList" />
                                                <input type="hidden" name="scroll" value="jsCommentsList" />
                                                <input type="hidden" name="opaco" value="1" />
                                                <input type="hidden" name="clearForm" value="1" />
												<button class="send_form btn btn-primary" id="addComment"><i class="fas fa-paper-plane me-2 text-white fs-18 btn-rounded"></i>Отправить</button>
											</div>
                                            </form>
										</div>

                                        <div id="jsCommentsList">
										  <?if($comments!=false):?>
                                          <?require $_SERVER['DOCUMENT_ROOT'].'/admin/modules/startup/includes/commentsList.inc.php';?>
                                          <?endif;?>
                                        </div>
									<!-- 	<div class="user-comment row border-bottom pb-3 align-items-center">
											<div class="col-lg-9">
												<div class="d-flex align-items-start">
													<img src="<?=DOMAIN;?>/admin/tmp/images/pic2.jpg" alt="">
													<div class="ms-3">
														<h4 class="fs-18 font-w600">Hendric Suneo</h4>
														<span class="fs-16">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima ve </span>
													</div>
												</div>
											</div>
											<div class="col-lg-3 d-flex justify-content-end">
												<div class="like-reply">
													<span class="fs-18 font-w600 me-2"><i class="far fa-thumbs-up text-primary me-2"></i>45 Like</span>
													<span class="fs-18 font-w600"><i class="fas fa-reply-all me-2 text-blue"></i>Reply</span>
												</div>
											</div>
										</div> -->
									<!-- 	<div class="user-comment row border-bottom pb-3 align-items-center">
											<div class="col-lg-9">
												<div class="d-flex align-items-start ms-5">
													<img src="<?=DOMAIN;?>/admin/tmp/images/pic2.jpg" alt="">
													<div class="ms-3">
														<h4 class="fs-18 font-w600">Kesha Jean</h4>
														<span class="fs-16">m quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima ve </span>
													</div>
												</div>
											</div>
											<div class="col-lg-3 d-flex justify-content-end">
												<div class="like-reply">
													<span class="fs-18 font-w600 me-2"><i class="fas fa-star text-orange"></i></span>
													<span class="fs-18 font-w600"><i class="fas fa-star text-orange"></i></span>
												</div>
											</div>
										</div> -->
										<!-- <div class="user-comment row border-bottom pb-3 align-items-center">
											<div class="col-lg-9">
												<div class="d-flex align-items-start ms-5">
													<img src="<?=DOMAIN;?>/admin/tmp/images/pic3.jpg" alt="">
													<div class="ms-3">
														<h4 class="fs-18 font-w600">Kesha Jean</h4>
														<span class="fs-16">m quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima ve </span>
													</div>
												</div>
											</div>
										</div> -->
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
            </div>