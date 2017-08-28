<?php
    include './includes/data/globals.php';
    include './includes/utils/Mobile_Detect.php';

    $detect = new Mobile_Detect;
    $is_mobile = $detect->isMobile() && $detect->isTablet();
    // $is_mobile = true;

    $body_class = '';

    if($is_mobile) $body_class .= ' ismobile';
?>

<!doctype html>
<html class="no-js" lang="<?php echo $GLOBALS['lang']; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,user-scalable=no">
        
        <title><?php echo $GLOBALS['title']; ?></title>
        <meta name="description" content="<?php echo $GLOBALS['description']; ?>">
        <meta property="og:title" content="<?php echo $GLOBALS['title']; ?>" />
        <meta property="og:description" content="<?php echo $GLOBALS['description']; ?>" />
        <meta property="og:type" content="evente" />
        <meta property="og:image" content="<?php echo $GLOBALS['image_src']; ?>" />
        <meta property="og:site_name" content="<?php echo $GLOBALS['title']; ?>" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro:300,400,700">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="icon" type="image/x-icon" href='images/favicon.ico'>
        <link rel="image_src" href="images/src_image.png" />
        <link rel="manifest" href="manifest.json"> 
    </head>
    <body class="<?php echo $body_class; ?>">
        <?php include './includes/components/svg.php'; ?>
        <div class="splash show">
            <?php if ($is_mobile): ?>
                <img class="splash-media splash-image" src="<?php echo $GLOBALS['logo']; ?>">
            <?php else: ?>
                <video class="splash-media splash-video" preload="auto"><source src="videos/logo.mp4" type="video/mp4"></video>
            <?php endif; ?>
        </div>
        <header class="main-header">
            <button class="main-header-button">
            <svg class="main-header-button-svg" viewBox="0 0 68 102">
                <path class="path1" d="M0 37.5232l63.3912-36.6 3.9 6.7548-63.3912 36.6z"></path>
                <path class="path2" d="M0 65.422l63.3912-36.6 3.9 6.7548-63.3912 36.6z"></path>
                <path class="path3" d="M0 93.3205l63.3912-36.6 3.9 6.7548-63.3912 36.6z"></path>
            </svg>
            </button>
            <h1 class="main-header-title"><?php echo $GLOBALS['title']; ?></h1>
            <nav class="main-nav">
                <h2 class="visually-hidden"><?php echo $GLOBALS['main-nav']['title']; ?></h2>
                <span class="main-nav-bg"></span>
                <div class="main-nav-wrapper">
                    <button class="main-nav-button">
                        <svg class="main-nav-button-svg"  viewBox="0 0 81 86.6">
                            <path fill="none" stroke="#00EFC6" stroke-width="6" stroke-miterlimit="10" d="M20 22.5l41 41M20 63.5l41-41" />
                        </svg>
                    </button>
                    <ul class="main-nav-list">
                        <?php foreach ($GLOBALS['main-nav']['items'] as $key => $value) : ?>
                            <li class="main-nav-item"><a class="main-nav-link" href="<?php echo $value['href']; ?>"><?php echo $value['title']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="around-main">
            <h1 class="visually-hidden"><?php echo $GLOBALS['main']['title']; ?></h1>
            <?php include './includes/sections/teasers.php'; ?>
            <?php include './includes/sections/about.php'; ?>
            <?php //include './includes/sections/chapters.php'; ?>
            <?php include './includes/sections/interviews.php'; ?>
            <div class="split">
                <?php include './includes/sections/subscribe.php'; ?>
                <?php include './includes/sections/discover.php'; ?>
            </div>
        </main>
        <?php include './includes/sections/links.php'; ?>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');</script>
        <script src="scripts/app.js"></script>
    </body>
</html>