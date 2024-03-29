<!doctype html>
<html lang="<?php echo get_site_propery('general', 'lang'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="description" content="<?php
    if (get_page_propery('general', 'description')) {
        echo get_page_propery('general', 'description');
    } else {
        echo get_site_propery('general', 'meta.description');
    }
    ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
        if (get_page_propery('general', 'title')) {
            echo get_page_propery('general', 'title');
        } else {
            echo get_site_propery('general', 'meta.title');
        }
        ?></title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="/fe/bower_components/csshake/dist/csshake.css" />
    <link rel="stylesheet" href="/fe/bower_components/fullpage.js/dist/jquery.fullpage.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <base href="<?php
    if ($_REQUEST['deploy'] == '1') {
        if($_SERVER['SERVER_NAME'] == 'localhost') {
            echo '../';
        } elseif($_SERVER['SERVER_NAME'] == 'hilti.sndbx.r8tin.net') {
            echo '../';
        }
        else {
            echo 'https://cdn.microsites-by-hilti.com/';
        }
    } else {
        echo '../dist/';
    }
    ?>">
    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="/fe/app/fonts/HiltiSmallBold/fonts.css">
    <link rel="stylesheet" href="/fe/app/fonts/HiltiSmallExtended/fonts.css">
    <link rel="stylesheet" href="/fe/app/fonts/HiltiSmallHeavyExtended/fonts.css">
    <link rel="stylesheet" href="/fe/app/fonts/HiltiSmallRoman/fonts.css">
    <link rel="stylesheet" href="/fe/app/styles/fonts.css">
    <link rel="stylesheet" href="/fe/app/styles/hiltiHover.css" type="text/css" />
    <link rel="stylesheet" href="/fe/app/styles/tile.css" type="text/css" />
    <link rel="stylesheet" href="/fe/app/styles/preloader.css">
    <link rel="stylesheet" href="/fe/app/styles/submenu.css">
    <link rel="stylesheet" href="/fe/app/styles/landing.css">
    <link rel="stylesheet" href="/fe/app/styles/main.css">

    <!-- endbuild -->

    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="/fe/bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
    <?php include('partials/tracking.php'); ?>
</head>

<body class="isLoading landing">
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="preloader_cover">
    <div id="canvas_round"></div>
</div>

<?php
    $page_secion_name = get_page_propery('general', 'type');
    include(get_file_path());
?>


<!-- build:js scripts/vendor.js -->
<!-- bower:js -->
<script src="/fe/bower_components/jquery/dist/jquery.js"></script>
<script src="/fe/bower_components/radialIndicator/radialIndicator.js"></script>
<script src="/fe/bower_components/fullpage.js/dist/jquery.fullpage.js"></script>
<script src="/fe/bower_components/fullpage.js/vendors/jquery.easings.min.js"></script>
<script src="/fe/bower_components/fullpage.js/vendors/scrolloverflow.min.js"></script>
<script src="/fe/bower_components/image-map-resizer/js/imageMapResizer.min.js"></script>
<script src="/fe/bower_components/iscroll/build/iscroll-probe.js"></script>
<!-- endbower -->
<!-- endbuild -->

<!-- build:js scripts/main.js -->
<script src="/fe/app/scripts/preloader.js"></script>
<script src="/fe/app/scripts/landing.js"></script>
<script src="/fe/app/scripts/main.js "></script>
<!-- endbuild -->
</body>

</html>