<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Транспортные инновации Москвы</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="/admin/img/favicon.png" />
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/vendor/green-audio-player.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="<?=DOMAIN;?>/tmp/assets/css/app.css">
    
    <link href="<?=DOMAIN;?>/css/<?=$xc['style'];?>" rel="stylesheet" type="text/css">
    <link href="<?=DOMAIN;?>/modules/lp/css/style.css" rel="stylesheet" type="text/css">
    
    <?=$xc['head'];?>

</head>

<body class="sticky-header">
    <?require_once $_SERVER['DOCUMENT_ROOT'].'/modules/popup/includes/popupWindows.inc.php';?>
    
    <?if ($xc['noMainTmp'] == false):?>
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    
    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">
    
    <!--------------------------- HEADER ------------------------------------->
    <?require_once $_SERVER['DOCUMENT_ROOT'].'/modules/tmp/includes/header.inc.php';?>
    <!------------------------------------------------------------------------>
    
    <!--------------------------- CONTENT ------------------------------------->
    <?=$xc['content'];?>
    <!------------------------------------------------------------------------>
        
    <!--------------------------- FOOTER ------------------------------------->
    <?require_once $_SERVER['DOCUMENT_ROOT'].'/modules/tmp/includes/footer.inc.php';?>
    <!------------------------------------------------------------------------>

    <?else:?>
    <?=$xc['content'];?>
    <?endif;?>
    
    <!-- Jquery Js -->
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/waypoints.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/counterup.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/slick.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/sal.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/js.cookie.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/tilt.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/green-audio-player.min.js"></script>
    <script src="<?=DOMAIN;?>/tmp/assets/js/vendor/jquery.nav.js"></script>

    <!-- Site Scripts -->
    <script src="<?=DOMAIN;?>/tmp/assets/js/app.js"></script>
    <script src="<?=DOMAIN;?>/js/<?=$xc['scripts'];?>"></script>
    <script src="/modules/lp/js/script.js?v=<?=uniqid('js')?>"></script>
</body>

</html>