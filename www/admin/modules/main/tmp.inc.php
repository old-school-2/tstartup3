<link href="<?=DOMAIN;?>/admin/modules/main/css/style.css?v=<?=uniqid('css')?>" rel="stylesheet">

<!-- row -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
			<form action="" method="POST" class="side-nav-search-form">
	            <div class="form-group">
	                <input type="text" style="border-radius: 35px;" class="form-control input-default" name="searchText" placeholder="Воспользуйтесь поиском по ключевым фразам или фильтром" value="<?=$sText?>">
	                <button class="filter-button bell-link" type="button">
	                    <i class="fa fa-filter"></i>
	                    Фильтры
                        <span class="filter-active-count-all" <?if ($count > 0):?>style="display: inline-block"<?endif;?>><?if ($count > 0):?><?=$count?><?endif;?></span>
	                </button>
	            </div>
	        </form>
	    </div>
	</div>
</div>

<div class="container-fluid">

	<div class="row row-35 isotope-list" style="position: relative; margin-top: 0px;">

        <?foreach ($q as $v):?>
        <div class="col-xxl-4 col-xl-3 col-md-4 project branding">
	        <div class="project-grid">
	            <div class="thumbnail">
	                <a href="/admin/startup?id=<?=$v['id']?>">
	                    <div class="project-img" style="background-image: url(<?=$v['img']?>);"></div>
	                </a>
	            </div>
	            <div class="content">
	                <h4 class="title"><a href="/admin/startup?id=<?=$v['id']?>"><?=$v['naming_command']?></a></h4>
	                <span class="subtitle"><?=cut_text($v['short_description'], 110)?></span>
                    <table>
                    <tr>
                        <td>Категория</td>
                        <td>
                            <p>
                                <?=$v['category_name']?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Стадия готовности</td>
                        <td>
                            <p>
                                <?=$v['stage']?>
                            </p>

                        </td>
                    </tr>
                    <tr>
                        <td>Путь заявки</td>
                        <td>
                            <p>
                            <?=$v['kanban_name']?>
                            </p>
                            <div class="progress default-progress">
								<div class="progress-bar bg-design" style="width: 45%; height:5px;" role="progressbar">
									<span class="sr-only">10%</span>
								</div>
							</div>
                        </td>
                    </tr>
                    </table>
	            </div>
	        </div>
	    </div>
        <?endforeach;?>

	</div>
</div>

<div class="chatbox">
	<div class="chatbox-close"></div>
	<div class="tab-content">
        <form method="post" action="/admin/main">
            <input type="hidden" name="s" value="1"/>
        <div class="accordion" id="choose-accordion">

            <?foreach ($filter as $k => $v):?>
            <div class="accordion-item" data-id="<?=$k?>">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button <?if ($k != 1):?>collapsed<?endif;?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$k?>" aria-expanded="<?if ($k == 1):?>false<?else:?>true<?endif;?>" aria-controls="collapse<?=$k?>">
                        <span class="filter-active-count" data-id="<?=$k?>"></span> <?=$v['name']?>
                    </button>
                </h2>
                <div id="collapse<?=$k?>" class="accordion-collapse collapse <?if ($k == 1):?>show<?endif;?>" aria-labelledby="headingOne" data-bs-parent="#choose-accordion" style="">
                    <div class="accordion-body">
                        <form action="#" class="blog-search">
                            <input type="text" class="filter-search form-control input-default " data-id="<?=$k?>" placeholder="Поиск">
                            <button class="search-button"><i class="fa fa-search"></i></button>
                        </form>
                        <ul class="filter-list">
                            <?foreach ($v['db'] as $vv):?>
                            <li data-id="<?=$k?>"><input data-id="<?=$k?>" type="checkbox" class="form-check-input" id="cb<?=$k?>_<?=$vv['id']?>" name="<?=$v['field']?>[]" value="<?=$vv['id']?>" <?if (in_array($vv['id'], $data[$v['field']])):?>checked="checked"<?endif;?>> <label for="cb<?=$k?>_<?=$vv['id']?>"><?=$vv['name']?></label></li>
                            <?endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <?endforeach;?>

            <div class="" style="margin-top: 30px; margin-left: 15px;">
                <button class="btn btn-primary btn-small" type="submit">Применить фильтры</button>
                <button class="btn btn-default btn-small" onClick="location.href='/admin/main'; return false;" type="button">Сброс</button>
            </div>
        </form>
        </div>
    </div>
</div>