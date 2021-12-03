<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-8">
												<div>
													<span class="mb-2 d-block">
                                                    Путь стартапа от заявки до инвестиций. 
                                                    Перетащите проект при переходе на следующий этап.</span>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row kanban-bx">

                            <?foreach ($stages as $stage):?>
							<div class="col">
								<div class="kanbanPreview-bx">
									<div class="draggable-zone dropzoneContainer">
										<div class="sub-card align-items-center d-flex justify-content-between mb-4">
											<div>
												<h4 class="fs-20 mb-0 font-w600"><?=$stage['name']?> (<span data-stage-id="<?=$stage['id']?>" class="totalCount"><?=count($stagesApps[$stage['id']])?></span>)</h4>
											</div>
										</div>

                                        <div class="droppable" data-stage-id="<?=$stage['id']?>">
                                        <?foreach ($stagesApps[$stage['id']] as $v):?>
										<div class="card draggable-handle draggable" data-id="<?=$v['id']?>">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-2">
													<span class="sub-title">
														<svg class="me-2" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="5" cy="5" r="5" fill="<?=$v['color']?>"/>
														</svg>
														<?=$v['stage']?>
													</span>
													<div class="dropdown">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<circle cx="3.5" cy="11.5" r="2.5" transform="rotate(-90 3.5 11.5)" fill="#717579"/>
																<circle cx="11.5" cy="11.5" r="2.5" transform="rotate(-90 11.5 11.5)" fill="#717579"/>
																<circle cx="19.5" cy="11.5" r="2.5" transform="rotate(-90 19.5 11.5)" fill="#717579"/>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
														    <a class="dropdown-item" target="_blank" href="/admin/startup?id=<?=$v['id']?>">Подробнее</a>
														</div>
													</div>
												</div>
                                                
												<p class="font-w600 fs-18"><a href="javascript:void(0);" class="text-black"><?=$v['naming_command']?></a></p>
												<div class="progress default-progress my-4">
													<div class="progress-bar bg-design" style="width: 10%; height:10px;" role="progressbar">
														<span class="sr-only">45%</span>
													</div>
												</div>
												<div class="row justify-content-between align-items-center kanban-user">
													<ul class="users col-6">
													</ul>
													<div class="col-6 d-flex justify-content-end">
														<span class="fs-14"><i class="far fa-clock me-2"></i> <?=sTimerDetail($v['kanban_time'])?></span>
													</div>
												</div>
											</div>
										</div>
                                        
                                        <?endforeach;?>
                                        </div>
                                        
									</div>
								</div>
							</div>
                            <?endforeach;?>
                            
                            
						</div>
					</div>
				</div>
            </div>
            
            <form id="form_updateStage" action="" method="post" class="hidden">
			    <input type="hidden" name="id" id="kanbanId" value="">
                <input type="hidden" name="stage_id" id="kanbanStageId" value="">
             	<input type="hidden" name="module" value="kanban">
                <input type="hidden" name="component" value="">
                <input type="hidden" name="opaco" value="1">
                <button id="updateStage" class="send_form"></button>
             </form>