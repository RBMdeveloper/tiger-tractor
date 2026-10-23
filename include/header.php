<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="google-site-verification" content="5ty85TL_l3X7DdboKqGaEDV3thc0ZuW3xnoA2fptxZ0" />
    
    <!-- search console in web260 email -->

    <!-- =========================================================
    BASIC META
    ========================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">

    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- =========================================================
    DEFAULT SEO VARIABLES
    ========================================================== -->
    <?php

    // Current URL
    $currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
        . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // Default SEO Variables
    $pageTitle = $pageTitle ?? "Tiger Tractors India | Affordable & Powerful Farming Tractors";

    $pageDescription = $pageDescription ?? "Tiger Tractors Private Limited manufactures powerful, affordable and farmer-friendly tractors with advanced technology, premium engineering and modern agricultural solutions.";

    $pageKeywords = $pageKeywords ?? "Tiger Tractors, tractors India, farming tractor, agricultural tractor, 45 HP tractor, tractor manufacturer India, Kirloskar engine tractor";

    $pageCanonical = $pageCanonical ?? $currentURL;

    $pageImage = $pageImage ?? "https://tigertractors.com/images/custom/alogo.png";

    $pageType = $pageType ?? "website";

    ?>

    <!-- =========================================================
    PRIMARY SEO
    ========================================================== -->
    <title><?= htmlspecialchars($pageTitle); ?></title>

    <meta name="title"
        content="<?= htmlspecialchars($pageTitle); ?>">

    <meta name="description"
        content="<?= htmlspecialchars($pageDescription); ?>">

    <meta name="keywords"
        content="<?= htmlspecialchars($pageKeywords); ?>">

    <meta name="robots" content="index, follow">

    <meta name="author" content="Tiger Tractors">

    <meta name="language" content="English">

    <meta name="revisit-after" content="7 days">

    <!-- =========================================================
    CANONICAL URL
    ========================================================== -->
    <link rel="canonical"
        href="<?= htmlspecialchars($pageCanonical); ?>">

    <!-- =========================================================
    OPEN GRAPH / FACEBOOK SEO
    ========================================================== -->
    <meta property="og:type"
        content="<?= htmlspecialchars($pageType); ?>">

    <meta property="og:title"
        content="<?= htmlspecialchars($pageTitle); ?>">

    <meta property="og:description"
        content="<?= htmlspecialchars($pageDescription); ?>">

    <meta property="og:url"
        content="<?= htmlspecialchars($pageCanonical); ?>">

    <meta property="og:image"
        content="<?= htmlspecialchars($pageImage); ?>">

    <meta property="og:image:alt"
        content="<?= htmlspecialchars($pageTitle); ?>">

    <meta property="og:site_name"
        content="Tiger Tractors">

    <meta property="og:locale"
        content="en_IN">

    <!-- =========================================================
    TWITTER SEO
    ========================================================== -->
    <meta name="twitter:card"
        content="summary_large_image">

    <meta name="twitter:title"
        content="<?= htmlspecialchars($pageTitle); ?>">

    <meta name="twitter:description"
        content="<?= htmlspecialchars($pageDescription); ?>">

    <meta name="twitter:image"
        content="<?= htmlspecialchars($pageImage); ?>">

    <!-- =========================================================
    FAVICON
    ========================================================== -->
    <link rel="shortcut icon"
        type="image/x-icon"
        href="images/custom/alogo.png">

    <link rel="apple-touch-icon"
        href="images/custom/alogo.png">

    <!-- =========================================================
    PERFORMANCE & INDEXING
    ========================================================== -->
    <meta name="theme-color" content="#000000">

    <meta name="format-detection" content="telephone=no">

    <!-- =========================================================
    PRELOAD IMPORTANT FILES
    ========================================================== -->
    <link rel="preload" href="css/style.css" as="style">

    <!-- =========================================================
    GLOBAL ORGANIZATION SCHEMA
    ========================================================== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Tiger Tractors",
        "url": "https://tigertractors.com/",
        "logo": "https://tigertractors.com/images/custom/alogo.png",
        "description": "Tiger Tractors manufactures affordable and advanced farming tractors for modern agriculture.",
        "sameAs": [
            "https://facebook.com/",
            "https://instagram.com/",
            "https://youtube.com/"
        ]
    }
    </script>

    <!-- =========================================================
    WEBSITE SCHEMA
    ========================================================== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Tiger Tractors",
        "url": "https://tigertractors.com/"
    }
    </script>

    <!-- =========================================================
    CSS FILES
    ========================================================== -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.css">

    <!-- Pbmit Induyst Icon -->
    <link rel="stylesheet" href="fonts/pbmit-induyst-icon/pbmit_induyst.css">

    <!-- Base Icons -->
    <link rel="stylesheet" href="css/pbminfotech-base-icons.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">

    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="css/shortcode.css">

    <!-- Base CSS -->
    <link rel="stylesheet" href="css/base.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>

    <!-- page wrapper -->
    <div class="page-wrapper" id="page">

        <!-- Header Main Area -->
        <header class="site-header pbmit-header-style-2" id="masthead">
            <div
                class="pbmit-sticky-header pbmit-header-sticky-yes pbmit-bg-color-white pbmit-sticky-header-mobile-yes">
            </div>
            <div class="pbmit-header-overlay">
                <div class="pbmit-main-header-area">
                    <div class="pbmit-header-content-area">
                        <div class="container-fluid">
                            <div
                                class="pbmit-header-content d-flex align-items-center justify-content-between pbmit-header-wrapper pbmit-bg-color-blackish">
                                <div class="pbmit-header-menu-area d-flex align-items-center">
                                    <div class="pbmit-logo-area">
                                        <div class="site-branding">
                                            <h1 class="site-title head-logo">
                                                <a href="index.php">
                                                    <!-- <img class="pbmit-main-logo" src="images/custom/alogo.png" alt=""> -->
                                                    <img class="pbmit-sticky-logo" src="images/custom/alogo.png" alt="">
                                                    <div class="logo-hd">
                                                        <h2>Tiger Tractors</h2>
                                                    </div>
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                    <div class="pbmit-menuarea d-flex align-items-center">
                                        <div class="site-navigation">
                                            <nav class="main-navigation pbmit-navbar main-menu navbar-expand-xl navbar-light"
                                                id="site-navigation">
                                                <div>
                                                    <ul class="navigation clearfix" id="pbmit-top-menu">
                                                        <li class="active">
                                                            <a href="index.php">Home</a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#">Tractors</a>
                                                            <ul>
                                                                <li><a href="tractors.php">Tractors</a></li>
                                                                <li><a href="dealers.php">Locate Dealers</a></li>
                                                                <li><a href="#">Certifications</a></li>
                                                                <li><a href="qpolicy.php">Quality Policy</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="">
                                                            <a href="transmission.php">Transmissions</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="gallery.php">Gallery</a>
                                                        </li>
                                                        <li><a href="contact.php">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="pbmit-right-box d-flex align-items-center">
                                    <div class="pbmit-header-social">
                                        <ul class="pbmit-social-links">
                                            <li class="pbmit-social-li pbmit-social-facebook">
                                                <a title="Facebook" href="#" target="_blank">
                                                    <span><i class="pbmit-base-icon-facebook-f"></i></span>
                                                </a>
                                            </li>
                                            <li class="pbmit-social-li pbmit-social-twitter">
                                                <a title="Twitter" href="#" target="_blank">
                                                    <span><i class="pbmit-base-icon-twitter-2"></i></span>
                                                </a>
                                            </li>
                                            <li class="pbmit-social-li pbmit-social-youtube">
                                                <a title="Youtube" href="#" target="_blank">
                                                    <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                </a>
                                            </li>
                                            <li class="pbmit-social-li pbmit-social-instagram">
                                                <a title="Instagram" href="#" target="_blank">
                                                    <span><i class="pbmit-base-icon-instagram"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="pbmit-header-button">
                                        <a href="#" class="pbmit-btn">
                                            <span class="pbmit-button-content-wrapper">
                                                <span class="pbmit-button-icon">
                                                    <i class="pbmit-induyst-icon pbmit-induyst-icon-next"></i>
                                                </span>
                                                <span class="pbmit-button-text">Get in Touch</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="pbmit-header-search-btn">
                                        <a href="#" title="Search">
                                            <i class="pbmit-base-icon-search-2"></i>
                                        </a>
                                    </div> -->
                                    <div class="pbmit-burger-menu-wrapper">
                                        <div class="pbmit-mobile-menu-bg"></div>
                                        <button id="menu-toggle" title="Menu Toggle" class="nav-menu-toggle">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Main Area End Here -->

        <!-- Page Content -->
        <div class="page-content">