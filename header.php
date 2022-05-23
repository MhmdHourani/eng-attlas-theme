<!DOCTYPE html>
<html lang='ar'>
<!-- language_attributes();  -->

<head>
    <meta charset="<?= bloginfo('charset') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/images/favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="<?= get_template_directory_uri() ?>/assets/images/favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/images/favicon/favicon-32x32.png" />

    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri() ?>/assets/images/favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/images/favicon/favicon-16x16.png" />
    <title><?= bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body data-loaded="false">
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="preloader__container">
            <div class="preloader__logo"> روح</div>
        </div>
    </div>
    <!-- Start Header -->
    <header id="header" class="header" role="banner" data-module="header" data-navopen="false">
        <div class="header__wrap">
            <div class="container-fluid">
                <a data-scroll-nav="0" href="<?= home_url() ?>" title="attas logo" class="header__logo">
                    <?php
                    $logo_header = get_theme_mod('Logo_Uplaod_setting');
                    if ($logo_header) {
                        $svg = file_get_contents($logo_header);
                        echo $svg;
                    } else {
                        $svg = file_get_contents(get_template_directory_uri() . "/assets/images/logo/attas_logo_RGB.svg");
                        echo $svg;
                    }
                    $avatar_logo = get_theme_mod('avatar_upload_settings');
                    if ($avatar_logo) {
                        $svg = file_get_contents($avatar_logo);
                        echo $svg;
                    } else {
                        $svg = file_get_contents(get_template_directory_uri() . "/assets/images/logo/avatar_logo.svg");
                        echo $svg;
                    } ?>
                </a>

                <div class="header__nav">
                    <button id="nav-trigger" class="header__nav-trigger btn" data-js="nav-trigger">
                        <svg class="icon icon-menu-toggle" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90">
                            <g class="svg-menu-toggle">
                                <path class="line line-1" d="M5 10h90v10H5z"></path>
                                <path class="line line-2" d="M5 40h90v10H5z"></path>
                                <path class="line line-3" d="M5 70h90v10H5z"></path>
                            </g>
                        </svg>
                    </button>
                    <nav class="nav-container" data-js="navigation" role="naviagation" data-module="navigation">
                        <ul class="nav list">
                            <li class="menu-item">
                                <a href="index.html" title="Home" class="link"> Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html#about" title="about" class="link" data-scroll-nav="1">
                                    About</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html#strategy" title="strategy" class="link" data-scroll-nav="2">
                                    Strategy</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html#projects" title="projects" class="link" data-scroll-nav="3">
                                    Projects</a>
                            </li>
                            <li class="menu-item">
                                <a href="document.html" title="Advertising Instructions and Templates" class="link">
                                    Advertising Instructions and Templates</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html#clients" title="Clients" class="link" data-scroll-nav="5">
                                    Clients</a>
                            </li>
                            <li class="menu-item">
                                <a href="index.html#contact" title="Contact" class="link" data-scroll-nav="6">
                                    Contact</a>
                            </li>
                            <!-- <li class="menu-item language">
                                <a class="AGC active" title="sumou" href="./ltr/index.html">E</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->
</body>

</html>