<div class="container-fluid">
	<div class="d-flex justify-content-between align-items-center flex-wrap">
		<form action="/admin/people" method="GET">
            <input type="hidden" name="f" value="<?=$data['f']?>" />
            <input type="hidden" name="s" value="1" />
            <div class="input-group contacts-search mb-4">
    			<input type="text" name="search" class="form-control" placeholder="Поиск контактов..." value="<?=$data['search']?>">
    			<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
    		</div>
        
        </form>
		<div class="mb-4">
			<a href="javascript:void(0);" class="btn btn-primary btn-rounded fs-18">+ Новый контакт</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="row">
                <?foreach ($q as $v): ?>
				<div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
					<div class="card contact-bx item-content">
						<div class="card-body user-profile pb-0">
							<div class="d-flex align-items-center">
								<div class="image-bx">
									<img src="<?=$v['img']?>" data-src="<?=$v['img']?>" alt="" class="rounded-circle">
									<span class="active"></span>
								</div>
								<div class="ms-3 text-start">
									<h4 class="fs-18 font-w600"><?=$v['fio']?></h4>
									<span class="mb-2 d-block"><?=$v['telegram']?></span>
									<span class="text-primary d-block"><?=$v['category']?></span>
								</div>
							</div>
							<div class="user-meta-info">
								<ul>
									<li><a href="javascript:void(0);"><i class="fas fa-phone-alt"></i></a><?=$v['phone']?></li>
									<li><a href="javascript:void(0);"><i class="far fa-comment-alt"></i></a><?=$v['email']?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
                <?endforeach;?>
				
			</div> 

		</div>
	</div>
</div>