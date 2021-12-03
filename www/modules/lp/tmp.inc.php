<section class="section" style="margin-top: 50px">
    <div class="container">
        <h2 class="title">Найти стартап</h2>

        <form action="#" class="side-nav-search-form">
            <div class="form-group">
                <input type="text" class="search-field" name="search-field" placeholder="Введите название или воспользуйтесь фильтром">
                <button class="filter-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight2">
                    <i class="fa fa-filter"></i>
                    Фильтры
                    <span class="filter-active-count-all" <?if ($count > 0):?>style="display: inline-block"<?endif;?>><?if ($count > 0):?><?=$count?><?endif;?></span>
                </button>
            </div>
        </form>


        <div class="row row-35 isotope-list" style="position: relative; margin-top: 50px;">
            <?foreach ($q as $v):?>
            <div class="col-xl-4 col-md-6 project branding" style="position: absolute; left: 0%; top: 0px;">
                <div class="project-grid">
                    <a href="javascript://">
                        <div class="project-img" style="background-image: url(<?=$v['img']?>);"></div>
                    </a>
                    <div class="content">
                       <h4 class="title"><a href="javascript://"><?=$v['naming_command']?></a></h4>
	                   <span class="subtitle"><?=cut_text($v['short_description'], 110)?></span>
                    </div>
                </div>
            </div>
            <?endforeach?>
            
        </div>
    </div>
</section>


<div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight2" style="visibility: visible;" aria-modal="true" role="dialog">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form method="post" action="/lp">
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
                
                <div class="" style="margin-top: 30px; margin-left: 0px;">
                    <button class="btn btn-primary btn-lg" type="submit">Применить фильтры</button>
                    <button class="btn btn-default btn-small" onClick="location.href='/admin/main'; return false;" type="button">Сброс</button>
                </div>
            </div>    
        </form>   
    </div>
</div>