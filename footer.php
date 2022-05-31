<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>

<body>
    <!-- start Footer -->
    <button id="totop" class="totop">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.8 201.6">
            <path d="M61 201.6V14l47 47 5.8-5.8-54-54C59.1.5 58 0 56.9 0c-1.1 0-2.2.5-2.9 1.2l-54 54L5.8 61l47-47v187.6H61z"></path>
        </svg>
    </button>

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <ul class="footer-nav list" data-module="navigation">
                    <li id="menu-item-772">
                        <a href="<?= home_url() ?>" title="Home" class="link">الرئيسية</a>
                    </li>
                    <li id="menu-item-777">
                        <a href="<?= home_url() ?>#about" title="about" class="link" data-scroll-nav="1">
                            من نحن
                        </a>
                    </li>
                    <li id="menu-item-778">
                        <a href="<?= home_url() ?>#vision" title="vision" class="link" data-scroll-nav="2">
                            رؤيتنا
                        </a>
                    </li>
                    <li id="menu-item-779">
                        <a href="<?= home_url() ?>#design" title="design" class="link" data-scroll-nav="3">
                            عن التصاميم
                        </a>
                    </li>
                    <li id="menu-item-776">
                        <a href="<?= home_url() ?>#info" title="ceo" class="link">
                            كلمة رئيس مجلس الادارة
                        </a>
                    </li>
                    <li id="menu-item-780">
                        <a href="<?= home_url() ?>#projects" title="projects" class="link" data-scroll-nav="5">
                            مشاريعنا</a>
                    </li>
                    <li id="menu-item-781">
                        <a href="<?= home_url() ?>#servises" title="servises" class="link" data-scroll-nav="6">
                            خدماتنا
                        </a>
                    </li>
                    <li id="menu-item-781">
                        <a href="<?= home_url() ?>#contact" title="servises" class="link" data-scroll-nav="6">
                            تواصل
                        </a>
                    </li>
                </ul>
                <ul class="footer-nav footer-nav--social list">
                    <li>
                        <a title="contact us via email" href="mailto:<?= get_theme_mod('email_social_media'); ?>" target="_blank">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512" xml:space="preserve" data-ember-extension="1">
                                <path d="M257,210c-24.814,0-45,20.186-45,45c0,24.814,20.186,45,45,45c24.814,0,45-20.186,45-45C302,230.186,281.814,210,257,210z"></path>
                                <path d="M255,0C114.39,0,0,114.39,0,255s114.39,257,255,257s257-116.39,257-257S395.61,0,255,0z M362,330 c-20.273,0-38.152-10.161-49.017-25.596C299.23,319.971,279.354,330,257,330c-41.353,0-75-33.647-75-75c0-41.353,33.647-75,75-75    c16.948,0,32.426,5.865,45,15.383V195c0-8.291,6.709-15,15-15c8.291,0,15,6.709,15,15c0,33.36,0,41.625,0,75    c0,16.538,13.462,30,30,30c16.538,0,30-13.462,30-30c0-100.391-66.432-150-135-150c-74.443,0-135,60.557-135,135    s60.557,135,135,135c30,0,58.374-9.609,82.061-27.803c15.822-12.078,33.94,11.765,18.281,23.789    C328.353,408.237,293.665,420,257,420c-90.981,0-165-74.019-165-165S166.019,90,257,90c82.897,0,165,61.135,165,180C422,303.091,395.091,330,362,330z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a title="follow Alattas via twitter" href="<?= get_theme_mod('tw_social_media'); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 449.956 449.956">
                                <path d="M449.956 85.657c-17.702 7.614-35.408 12.369-53.102 14.279 19.985-11.991 33.503-28.931 40.546-50.819-18.281 10.847-37.787 18.268-58.532 22.267-18.274-19.414-40.73-29.125-67.383-29.125-25.502 0-47.246 8.992-65.24 26.98-17.984 17.987-26.977 39.731-26.977 65.235 0 6.851.76 13.896 2.284 21.128-37.688-1.903-73.042-11.372-106.068-28.407C82.46 110.158 54.433 87.46 31.403 59.101c-8.375 14.272-12.564 29.787-12.564 46.536 0 15.798 3.711 30.456 11.138 43.97 7.422 13.512 17.417 24.455 29.98 32.831-14.849-.572-28.743-4.475-41.684-11.708v1.142c0 22.271 6.995 41.824 20.983 58.674 13.99 16.848 31.645 27.453 52.961 31.833a95.543 95.543 0 0 1-24.269 3.138c-5.33 0-11.136-.475-17.416-1.42 5.9 18.459 16.75 33.633 32.546 45.535 15.799 11.896 33.691 18.028 53.677 18.418-33.498 26.262-71.66 39.393-114.486 39.393-8.186 0-15.607-.373-22.27-1.139 42.827 27.596 90.03 41.394 141.612 41.394 32.738 0 63.478-5.181 92.21-15.557 28.746-10.369 53.297-24.267 73.665-41.686 20.362-17.415 37.925-37.448 52.674-60.097 14.75-22.651 25.738-46.298 32.977-70.946 7.23-24.653 10.848-49.344 10.848-74.092 0-5.33-.096-9.325-.287-11.991 18.087-13.127 33.504-29.023 46.258-47.672z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a title="follow Alattas via instagram" href="<?= get_theme_mod('instg_social_media'); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M352 0H160C71.648 0 0 71.648 0 160v192c0 88.352 71.648 160 160 160h192c88.352 0 160-71.648 160-160V160C512 71.648 440.352 0 352 0zm112 352c0 61.76-50.24 112-112 112H160c-61.76 0-112-50.24-112-112V160C48 98.24 98.24 48 160 48h192c61.76 0 112 50.24 112 112v192z"></path>
                                <path d="M256 128c-70.688 0-128 57.312-128 128s57.312 128 128 128 128-57.312 128-128-57.312-128-128-128zm0 208c-44.096 0-80-35.904-80-80 0-44.128 35.904-80 80-80s80 35.872 80 80c0 44.096-35.904 80-80 80z"></path>
                                <circle cx="393.6" cy="118.4" r="17.056"></circle>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a title="follow Alattas on youtube" href="<?= get_theme_mod('youtube_social_media'); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310">
                                <path d="M297.917 64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359 0-61.369 5.776-72.517 19.938C0 79.663 0 100.008 0 128.166v53.669c0 54.551 12.896 82.248 83.386 82.248h143.226c34.216 0 53.176-4.788 65.442-16.527C304.633 235.518 310 215.863 310 181.835v-53.669c0-29.695-.841-50.16-12.083-63.521zm-98.896 97.765l-65.038 33.991a9.997 9.997 0 0 1-14.632-8.863v-67.764a10 10 0 0 1 14.609-8.874l65.038 33.772a10 10 0 0 1 .023 17.738z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a title="follow Alattas on facebook" href="<?= get_theme_mod('fb_social_media'); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                <path d="M90 15.001C90 7.119 82.884 0 75 0H15C7.116 0 0 7.119 0 15.001v59.998C0 82.881 7.116 90 15.001 90H45V56H34V41h11v-5.844C45 25.077 52.568 16 61.875 16H74v15H61.875C60.548 31 59 32.611 59 35.024V41h15v15H59v34h16c7.884 0 15-7.119 15-15.001V15.001z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <a id="totop" href="index.html#" class="totop">TOP</a>
    <?php wp_footer(); ?>

    <!-- end Footer -->
</body>

</html>