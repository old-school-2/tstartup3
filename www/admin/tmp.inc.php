<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />
<meta name="format-detection" content="telephone=no">

<!-- PAGE TITLE HERE -->
<title><?=$xc['title'];?></title>

<!-- FAVICONS ICON -->
<link rel="shortcut icon" type="image/png" href="<?=DOMAIN;?>/admin/img/favicon.png" />
<link href="<?=DOMAIN;?>/admin/tmp/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<link href="<?=DOMAIN;?>/admin/tmp/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

<?if($xc['module']=='scoutingrequest'):?>
<link href="/admin/tmp/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">
<link href="/admin/tmp/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<link href="/admin/tmp/css/style.css" rel="stylesheet">
<?endif;?>

<!-- Style css -->
<link href="<?=DOMAIN;?>/admin/tmp/css/style.css" rel="stylesheet">
<link href="<?=DOMAIN;?>/admin/css/<?=$xc['style'];?>" rel="stylesheet">

<?=$xc['head'];?>

</head>
<body<?if($xc['noMainTmp']==true):?> class="vh-100"<?endif;?>>

<?require_once $_SERVER['DOCUMENT_ROOT'].'/admin/modules/popup/includes/popupWindows.inc.php';?>

<?if($xc['noMainTmp'] == false):?>
<!--*******************
Preloader start
********************-->
<div id="preloader">
<div class="lds-ripple">
<div></div>
<div></div>
</div>
</div>
<!--*******************
Preloader end
********************-->

<!--**********************************
Main wrapper start
***********************************-->
<div id="main-wrapper">

<!--**********************************
Nav header start
***********************************-->
<div class="nav-header">
<a href="/admin/" class="brand-logo">
<img src="/admin/img/logogreen.svg" class="logoMax" alt="logo">
<img src="/admin/img/logogreen_small.svg" class="logoMin" alt="logo">

<div class="brand-title">

</div>
</a>
<div class="nav-control">
<div class="hamburger">
<span class="line"></span><span class="line"></span><span class="line"></span>
</div>
</div>
</div>

<!--**********************************
Header start
***********************************-->
<div class="header border-bottom">
<div class="header-content">
<nav class="navbar navbar-expand">
<div class="collapse navbar-collapse justify-content-between">
<div class="header-left">
<div class="dashboard_bar">
<?=$xc['title']?>
</div>
</div>
<ul class="navbar-nav header-right">
<li class="nav-item d-flex align-items-center">
<form action="/admin/main" method="POST">
    <div class="input-group search-area">
        <input type="text" name="searchText" class="form-control" placeholder="Поиск проектов...">
        <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
    </div>
</form>
</li>
<li class="nav-item dropdown notification_dropdown">
<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#717579"/>
<path d="M9.98192 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1839 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.98192Z" fill="#717579"/>
</svg>
<span class="badge light text-white bg-green rounded-circle">1</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
<div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:80px;">
<ul class="timeline">
<li>
<div class="timeline-panel">
<div class="media me-2">
<img alt="image" width="50" src="<?=DOMAIN;?>/admin/tmp/images/user.jpg">
</div>
<div class="media-body">
<h6 class="mb-1">Комментарий проекта</h6>
<small class="d-block">03 декабря 2021 - 02:26</small>
</div>
</div>
</li>

</ul>
</div>
<!-- <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a> -->
</div>
</li>

<li class="nav-item dropdown header-profile">
<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
<img src="/admin/tmp/images/user.jpg" width="20" alt=""/>
<div class="header-info ms-3">
<span class="fs-18 font-w500 mb-2"><?=$_SESSION['name']?></span>
<small class="fs-12 font-w400">admin@mos.ru</small>
</div>
</a>
<div class="dropdown-menu dropdown-menu-end">
<a href="#" class="dropdown-item ai-icon">
<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
<span class="ms-2">Настройки профиля</span>
</a>
<a href="#" class="dropdown-item ai-icon">
<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
<span class="ms-2">Выход</span>
</a>
</div>
</li>
</ul>
</div>
</nav>
</div>
</div>
<!--**********************************
Header end ti-comment-alt
***********************************-->

<!--**********************************
Sidebar start
***********************************-->
<div class="dlabnav">
<div class="dlabnav-scroll">
<ul class="metismenu" id="menu">
<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-search"></i>
<span class="nav-text">Стартапы</span>
</a>
<ul aria-expanded="false">
<li><a href="/admin/main">Все категории</a></li>
<?foreach($xc['categories'] as $ct):?>
<li><a href="/admin/main?s=1&cat[]=<?=$ct['id']?>"><?=$ct['name']?></a></li>
<?endforeach;?>
</ul>

</li>


<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-table"></i>
<span class="nav-text">Путь стартапов</span>
</a>
<ul aria-expanded="false">
<li><a href="/admin/kanban">Все категории</a></li>
<?foreach($xc['categories'] as $ct):?>
<li><a href="/admin/kanban?s=1&cat[]=<?=$ct['id']?>"><?=$ct['name']?></a></li>
<?endforeach;?>
</ul>
</li>

<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-heart"></i>
<span class="nav-text">Скаутинг</span>
</a>
<ul aria-expanded="false">
<li><a href="/admin/scouting">Мои запросы</a></li>
<li><a href="/admin/scoutingrequest">Создать запрос</a></li>
</ul>
</li>



<!-- <li><a href="<?=DOMAIN;?>/admin/people" class="" aria-expanded="false">
<i class="fas fa-user-check"></i>
<span class="nav-text">Люди</span>
</a>
</li> -->


<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-user-check"></i>
<span class="nav-text">Люди</span>
</a>
<ul aria-expanded="false">
<li><a href="/admin/people">Все люди</a></li>
<li><a href="/admin/people?f=1">Стартапы</a></li>
<li><a href="/admin/people?f=2">Организации</a></li>
<li><a href="/admin/people?f=3">Сотрудники ТИМ</a></li>
</ul>
</li>


<li><a href="/admin/analytic">
<i class="fas fa-chart-line"></i>
<span class="nav-text">Аналитика</span>
</a>
</li>


<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-file-alt"></i>
<span class="nav-text">Справочники</span>
</a>
<ul aria-expanded="false">
<li><a href="/admin/users">Пользователи</a></li>
<li><a href="/admin/accessemail">Домены</a></li>
</ul>
</li>
<!-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-heart"></i>
<span class="nav-text">Plugins</span>
</a>
<ul aria-expanded="false">
<li><a href="./uc-select2.html">Select 2</a></li>
<li><a href="./uc-nestable.html">Nestedable</a></li>
<li><a href="./uc-noui-slider.html">Noui Slider</a></li>
<li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
<li><a href="./uc-toastr.html">Toastr</a></li>
<li><a href="./map-jqvmap.html">Jqv Map</a></li>
<li><a href="./uc-lightgallery.html">Light Gallery</a></li>
</ul>
</li> -->

<!-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-file-alt"></i>
<span class="nav-text">Forms</span>
</a>
<ul aria-expanded="false">
<li><a href="./form-element.html">Form Elements</a></li>
<li><a href="./form-wizard.html">Wizard</a></li>
<li><a href="./form-ckeditor.html">CkEditor</a></li>
<li><a href="form-pickers.html">Pickers</a></li>
<li><a href="form-validation.html">Form Validate</a></li>
</ul>
</li> -->
<!-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-table"></i>
<span class="nav-text">Table</span>
</a>
<ul aria-expanded="false">
<li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
<li><a href="table-datatable-basic.html">Datatable</a></li>
</ul>
</li> -->
<!-- <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
<i class="fas fa-clone"></i>
<span class="nav-text">Pages</span>
</a>
<ul aria-expanded="false">
<li><a href="./page-login.html">Login</a></li>
<li><a href="./page-register.html">Register</a></li>
<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
<ul aria-expanded="false">
<li><a href="./page-error-400.html">Error 400</a></li>
<li><a href="./page-error-403.html">Error 403</a></li>
<li><a href="./page-error-404.html">Error 404</a></li>
<li><a href="./page-error-500.html">Error 500</a></li>
<li><a href="./page-error-503.html">Error 503</a></li>
</ul>
</li>
<li><a href="./page-lock-screen.html">Lock Screen</a></li>
<li><a href="./empty-page.html">Empty Page</a></li>
</ul>
</li> -->
</ul>
<!-- <div class="plus-box">
<div class="text-center">
<h4 class="fs-18 font-w600 mb-4">Enable Workload Automation System</h4>
<a href="javascript:void(0);" class="btn btn-primary btn-rounded">Learn more <i class="fas fa-caret-right"></i></a>
</div>
</div> -->

<div class="alisaBox">
<a href="https://dialogs.yandex.ru/store/skills/6c1acb33-avto-vtb?utm_source=site&utm_medium=badge&utm_campaign=v1&utm_term=d1" target="_blank"><img alt="Алиса это умеет" src="https://dialogs.s3.yandex.net/badges/v1-term1.svg"/></a>
</div>
<div class="copyright">
<!-- <p><strong>Витрина инноваций Москвы</strong> © 2021 Все права защищены</p> -->
<p class="fs-14">© ТИМ <i class="fas fa-heart"></i></p>
</div>
</div>
</div>
<!--**********************************
Sidebar end
***********************************-->






<!--**********************************
Content body start
***********************************-->
<div class="content-body">

<?=$xc['content'];?>

</div>
<!--**********************************
Content body end
***********************************-->




<!--**********************************
Footer start
***********************************-->
<!-- <div class="footer">
<div class="copyright">
<p>Витрина инноваций Москвы</p>
</div>
</div> -->
<!--**********************************
Footer end
***********************************-->

<!--**********************************
Support ticket button start
***********************************-->

<!--**********************************
Support ticket button end
***********************************-->


</div>
<!--**********************************
Main wrapper end
***********************************-->

<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script src="<?=DOMAIN;?>/admin/tmp/vendor/global/global.min.js"></script>
<script src="<?=DOMAIN;?>/admin/tmp/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?=DOMAIN;?>/admin/tmp/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="<?=DOMAIN;?>/admin/tmp/vendor/apexchart/apexchart.js"></script>

<script src="<?=DOMAIN;?>/admin/tmp/vendor/chart.js/Chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="<?=DOMAIN;?>/admin/tmp/vendor/peity/jquery.peity.min.js"></script>
<!-- Dashboard 1 -->
<script src="<?=DOMAIN;?>/admin/tmp/js/dashboard/dashboard-1.js"></script>

<script src="<?=DOMAIN;?>/admin/tmp/vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?=DOMAIN;?>/admin/tmp/vendor/dropzone/dist/dropzone.js"></script>

<script src="<?=DOMAIN;?>/admin/tmp/js/custom.min.js"></script>
<script src="<?=DOMAIN;?>/admin/tmp/js/dlabnav-init.js"></script>

<!-- Form Steps -->
<script src="<?=DOMAIN;?>/admin/tmp/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>


<script>
$(document).ready(function(){
// SmartWizard initialize
$('#smartwizard').smartWizard();
});
</script>

<script>
function cardsCenter()
{

/* testimonial one function by = owl.carousel.js */



jQuery('.card-slider').owlCarousel({
loop:true,
margin:10,
nav:false,
//center:true,
slideSpeed: 3000,
paginationSpeed: 3000,
dots: false,
navText: ['', ''],
responsive:{
0:{
items:1
},
576:{
items:2
},
800:{
items:2
},
991:{
items:2
},
1200:{
items:3
},
1600:{
items:4
}
}
})
}

jQuery(window).on('load',function(){
setTimeout(function(){
cardsCenter();
}, 1000);
});

</script>

<?else:?>

<?=$xc['content'];?>

<script src="<?=DOMAIN;?>/admin/tmp/vendor/jquery/jquery.min.js"></script>

<?endif;?>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<script src="<?=DOMAIN;?>/admin/js/<?=$xc['scripts'];?>"></script>

</body>
</html>