<?php get_header(); ?>
<div class="page">
    <main class="main" role="main">
        <section class="section hero full-height" data-scroll-index="0" data-module="hero">
            <div class="wrapper">
                <div class="hero__slider full-height" data-slider="fade" data-module="slider">
                    <div id="hero-slider" class="owl-carousel owl-theme">
                        <div class="item full-height">
                            <div class="video-container">
                                <video loop autoplay muted playsinline disablepictureinpicture controlslist="nodownload">
                                    <source src="<?= get_template_directory_uri() ?>/assets/video.mp4" type="video/mp4">
                                </video>
                            </div>

                        </div>
                    </div>
                    <div class="hero__content full-height">
                        <div class="hero__content-inner wow animate__animated animate__fadeInUp">
                            <h1>
                                Together <br />
                                <span> We Evolve </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->
        <!-- <section id="about" class="section about" data-scroll-index="1">
            <div class="about__three-boxes animate__fadeInUp wow animate__animated">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="gold-bg about-card bg-cover" style="background-image: linear-gradient(rgba(174, 137, 93, 0.7), var(--gold-color)), url(<?= get_template_directory_uri() ?>/assets/images/services/services__image-1.jpg); ">
                            <div class="icon-box">
                                <p class="subtitle"></p>
                                <h3>رؤيتنا</h3>
                                <p>أن نصل إلى الريادة في مجال التصميم العصري والتطوير والاستثمار العقاري وأن نكون نقطة بداية لكل مطور في تنفيذ الوحدات السكنية في المملكة العربية السعودية بمواصفات ومقاييس تناسب هذه المرحلة لنكون معاً لتنمية صندوق استثمار العقاري.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dark-bg about-card bg-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7),var(--dark-color)), url(<?= get_template_directory_uri() ?>/assets/images/services/services__image-1.jpg);">
                            <div class="icon-box">
                                <p class="subtitle"></p>
                                <h3>رسالتنا</h3>
                                <p>تلبية احتياجات وتوقعات سوق التطوير والاستثمار العقاري من خلال تقديم دراسات مالية وتصاميم العصرية تناسب النمط السعودي مع الحفاظ على هوية المملكة ومواكبة الرؤية 2030 من مباني سكنية وتجارية حديثة بأعلى معايير الجودة، وحلول حماية مُتطورة. وبالتالي نكون جزء نشط من ازدهار الاقتصاد الوطني والمُساهمة بدور فعّال في مواكبة المملكة مع أنماط الحياة العالمية.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="light-bg about-card bg-cover" style="background-image: linear-gradient(rgba(255, 255, 255, 0.7),var(--light)),url();">
                            <div class="icon-box">
                                <p class="subtitle"></p>
                                <h3>عن التصاميم</h3>
                                <p>نعمل في مكتب العطاس للاستشارات على الإبداع والابتكار في تصاميمنا للوحدات السكنية والتجارية، فبين الجمال واستثمار المساحات تكمن تصاميمنا، مما يضمن لعملائنا أفضل خيار للعمل معنا.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about__chairman section-padding">
                <div class="container">
                    <div class="section__number wow animate__animated animate__fadeInUp">
                        <h2>أهدافنا</h2>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7">
                            <div class="about__intro-img-section bg-cover" style="background-image: linear-gradient(hsla(0, 0%, 87%, 0),hsla(0, 0%, 88%, 0)),url(<?= get_template_directory_uri() ?>/assets/images/about/ab.jpg);">
                                <div class="gray-bg wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                                    <div class="img-holder">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/about/10.png" alt="" class="img-responsive wow animate__animated animate__fadeInLeft" data-wow-delay="1.6s" />
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/about/t.png" alt="" class="img-responsive wow animate__animated animate__fadeInLeft" data-wow-delay="2.8s" />
                                        <img src="./" alt="" class="img-responsive wow fadeInLeft" data-wow-delay="2.12s" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="about__text-body wow animate__animated animate__fadeInRight" data-wow-delay=".9s">
                                <h3>تحسين جودة المباني</h3>
                                <h3>رفع جودة الحياة للمجتمع</h3>
                                <h3>خلق بيئة مُحفزة للابتكار</h3>
                                <h3>تبني المسؤولية المُجتمعية</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- services -->
        <section id="services" class="section services section-padding section--dark-bg" style="background: url(<?= get_template_directory_uri() ?>/assets/images/contact/pattern.png) repeat center #222222;">
            <div class="container" style="padding-inline: 30px;text-align: justify;">
                <div class="section__number wow animate__animated animate__fadeInDown light">
                    <h2>About Alattas</h2>
                </div>
                <div class="services__list">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{0.2*i | round(2)}}s">
                                <div class="icon-box">
                                    <h3>رسالتنا</h3>
                                    <div class="divider"></div>
                                    <p>
                                        تلبية احتياجات وتوقعات سوق التطوير والاستثمار العقاري من خلال
                                        تقديم دراسات مالية وتصاميم العصرية تناسب النمط السعودي مع الحفاظ
                                        على هوية المملكة ومواكبة الرؤية 2030 من مباني سكنية وتجارية حديثة
                                        بأعلى معايير الجودة، وحلول حماية مُتطورة. وبالتالي نكون جزء
                                        نشط من ازدهار الاقتصاد الوطني والمُساهمة بدور فعّال في مواكبة المملكة مع أنماط الحياة العالمية.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{0.2*i | round(2)}}s">
                                <div class="icon-box">
                                    <h3>رؤيتنا</h3>
                                    <div class="divider"></div>
                                    <p>
                                        أن نصل إلى الريادة في مجال التصميم العصري والتطوير والاستثمار العقاري
                                        وأن نكون نقطة بداية لكل مطور في تنفيذ الوحدات السكنية في
                                        المملكة العربية السعودية بمواصفات
                                        ومقاييس تناسب هذه المرحلة لنكون معاً لتنمية صندوق استثمار العقاري.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{0.2*i | round(2)}}s">
                                <div class="icon-box">
                                    <h3>عن التصاميم</h3>
                                    <div class="divider"></div>
                                    <p>
                                        نعمل في مكتب العطاس للاستشارات على الإبداع والابتكار في تصاميمنا للوحدات السكنية والتجارية، فبين الجمال واستثمار المساحات تكمن تصاميمنا، مما يضمن لعملائنا أفضل خيار للعمل معنا.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="wow animate__animated animate__fadeInUp" data-wow-delay="{{0.2*i | round(2)}}s">
                                <div class="icon-box">
                                    <h3>أهدافنا</h3>
                                    <div class="divider"></div>
                                    <p>
                                        تحسين جودة المباني
                                        <br />
                                        رفع جودة الحياة للمجتمع .
                                        <br />
                                        خلق بيئة مُحفزة للابتكار .
                                        <br />
                                        تبني المسؤولية المُجتمعية

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__image" style="
                background-image: url(<?= get_template_directory_uri() ?>/assets/images/services/services__image-1.jpg);
              "></div>
            </div>
        </section>
        <!-- strategy -->
        <section id="strategy" class="section home-section image-content section-padding" data-scroll-index="2">
            <div class="container">
                <div class="section__number wow animate__animated animate__fadeInDown">
                    <h2>Alattas Strategy</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section__content">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/strategy/strategy-1.png" title="Alattas Strategy" alt="Alattas Strategy" data-wow-delay="1.6s" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio -->
        <section id="projects" class="section portfolio section-padding" id="portfolio" data-scroll-index="3" data-module="filter">
            <div class="container">
                <div class="section__number wow animate__animated animate__fadeInDown">
                    <h2>الاقسام</h2>
                </div>
                <div class="section__content">
                    <div class="text-content wow animate__animated animate__fadeInUp">
                        <div class="section__title">
                            <h3>قسم الهندسي</h3>
                        </div>
                        <p>
                            نعمل على جميع انواع المشاريع والمبانى بمختلف تخصصاتها الوظيفية وعلى مختلف اطرزتها المعمارية ومهما كان التنوع في ثقافة المجتمعات المحيطة بها وكذلك على مختلف ميزانياتها ويقدم القسم الخدمات الآتية:
                            <br />
                            إعداد كافة المخططات من مختلف من التصميمات المعمارية - الإنشائية - الصحية - الكهربائية - التكييف - إدارة الدخان والحريق - التنسيق الحدائق - التصميم الحضري والعمراني للقرى السياحية والمنتجعات والمدن
                            <br />
                        </p>
                        <ul>
                            <li>
                                تقديم المناظير ثلاثية الأبعاد للتصاميم الداخلية والخارجية.
                            </li>
                            <li>
                                تقديم كافة خدمات الإخراج بالفوتوشوب.
                            </li>
                            <li>
                                إعداد كافة الرسومات التنفيذية التفصيلية.
                            </li>
                            <li>
                                خدمة تعديل التصاميم والمخططات الهندسية القائمة بالفعل.
                            </li>
                            <li>
                                اصدار وتعديل وتسوية وضع رخص البناء حسب كود البناء الجديد.
                            </li>
                            <li>
                                تسجيل الصكوك واستخراج الكروكيات.
                            </li>
                        </ul>
                        <p>
                            أى كل ما له علاقة بتصميم المبنى او المنشأة الى ان يتم تنفيذها على أرض الواقع
                            جميع مهندسينا بهذا القسم لا تقل خبراتهم عن 5 سنوات ولهم خبرة عمل بدول الخليج وملمين بالذوق العام وقوانين البناء واشتراطات البلديات.
                            نحرص دائما على ان يحصل عميلنا على مشروعه بأوضح طريقة وبدقة عالية بالتفاصيل وفى الوقت المناسب.
                        </p>
                    </div>
                    <div class="text-content wow animate__animated animate__fadeInUp">
                        <div class="section__title">
                            <h3>قسم معماري</h3>
                        </div>
                        <ul>
                            <li>
                                - ننقوم بعمل التصميمات المعمارية لكافة المشاريع (السكنية - التجارية - الإدارية - الثقافية - التعليمية - الطبية - السياحية - الفندقية - الترفيهية).
                            </li>
                            <li>
                                - لدينا مجموعة من المصممين والمهندسين المتخصصين على أعلى مستوى من الكفاءة والخبرة للتصميم الداخلي والخارجي والعمل على التصميمات بأرقى الأفكار المعمارية الحديثة التي تناسب جميع الاتجاهات والأذواق، والإشراف على تنفيذها.
                            </li>
                            <li>
                                - يتم التصميم باستخدام برامج التصميم المعماري الحاسوبية الثري دي ماكس والأوتوكاد والفوتوشوب وإن ديزين.
                            </li>
                            <li>
                                - اختيار الألوان و مواد التشطيب المثالية لكل مشروع.
                            </li>
                            <li>
                                - امكانية العمل جميع على الطرز المعمارية (حديث / كلاسيك / عربي / إسلامي / اندلسى / تراثي مناطقي....الخ).
                            </li>
                            <li>
                                - التعامل مع كافة الجهات المعنية الرسمية والمتابعة واستخراج التراخيص بالاضافة الى موافقات المياه والهاتف والكهرباء والتخطيط العمراني والدفاع المدني.
                            </li>
                            <li>
                                - نقدم الحلول المعمارية للسكن المريح ونقل المفهوم عن بيت العمر من الخيال إلى الواقع مع تتشييد التصميمات المعمارية وحسب متطلبات الأمانة وكذلك التصميم الداخلي والواجهات والديكور وإمكانية عمل مقاطع فيديو ثلاثية الأبعاد للتصميم والتجول داخله مع امكانية تغيير الإكساء والإنارة والتشطيبات للوصول إلى رضا العميل.
                            </li>
                        </ul>

                    </div>
                    <div class="text-content wow animate__animated animate__fadeInUp">
                        <div class="section__title">
                            <h3>قسم الاستشارات والاشراف الهندسي</h3>
                        </div>
                        <ul>
                            <li>- تحليل وتصميم المنشآت الخرسانية والحديدية لمختلف المشاريع السكنية والصناعية والتجارية والفندقية والإدارية والتعليمية والصحية والترفيهية ومحطات مياه الشرب والصرف الصحي والسدود والخزانات والأنفاق والجسور وغيرها، بالاضافة الى دراسة مدى تحمل ومقاومة هذه المنشآت للأحمال الناتجة عن الاستخدام أو عن تأثير الرياح والهزات الأرضية للوصول إلى تصميم آمن وملائم للمشاريع وفي حدود التكاليف المحددة.</li>
                            <li>- التصميم و الإشراف على تنفيذ الطرق والجسور والأرصفة البحرية وأنظمة النقل بشكل يتوافق مع الاحتياجات الفورية والمستقبلية، ووضع المواصفات الهندسية الخاصة بتلك الأنظمة.</li>
                            <li>- دراسة الخصائص الهندسية الكيميائية والفيزيائية والميكانيكية لمواد التربة ومكوناتها وكيفية التعامل معها وتقنياتها ومدى قوة تحملها للأحمال، وإيجاد الحلول المناسبة لكافة المشاكل الناتجة منها واختيار أفضل الطرق واكثرها أمانًا لتصميم وتنفيذ أساسات المنشآت وخلافه، بالتعاون مع مكاتب متخصصة مرخصة بإجراء اختبارات وفحوصات التربة.</li>
                        </ul>

                    </div>
                    <div class="text-content wow animate__animated animate__fadeInUp">
                        <div class="section__title">
                            <h3>قسم الاعمال الداخلية والتشطيبات</h3>
                        </div>
                        <ul>
                            <li>
                                تنفيذ جميع أعمال التأسيس و التشطيبات والديكور ، حيث نتسلم منزلك أو مكتبك أو وحدتك التجارية ونقوم بجميع الأعمال التأسيسية مثل الصرف الصحى والكهرباء إلى الديكور و جميع التشطيبات الداخلية حيث أننا ندرك جيد فن التعامل مع الأمور المعمارية وتفاصيلها خاصة الداخلية منها كما ندرك جيدا ماهية الخامات وكيفية إستخدامها لخلق البيئة الجمالية والصحية لعملائنا ، فدائما ما نسعى إلى توفير جميع الخخدمات الداخلية والتى تتمثل فى </li>
                            </li>
                            <li>
                                أولا: التخطيط والتقسيم وتهيئة مكان أو الوحدة المعمارية.
                            </li>
                            <li>
                                ثانيا: الأعمال الأسمنتية و الجيبسون بورد .
                            </li>
                            <li>
                                ثالثا: أعمال الصرف الصحى والكهرباء والأخشاب.
                            </li>
                            <li>
                                رابعا: أعمال الدهانات وإختيار الألوان المناسبة للوحدة.
                            </li>
                            <li>
                                خامسا: مركز النشاط وبؤرة التركيز.
                            </li>
                            <li>
                                سادسا: الخطوط والملمس والشكل العام
                            </li>
                        </ul>

                    </div>
                    <div class="text-content wow animate__animated animate__fadeInUp">
                        <div class="section__title">
                            <h3>قسم دعم المطورين و رواد الاعمال</h3>
                        </div>
                        <ul>
                            <li>
                                - تقديم الدعم للمطورين في مجال التطوير العقاري </li>
                            <li>
                                - دراسات مالية قبل البدء في تطوير المشروع واستخراج نسبة المطور ونسبة
                                الارباح و عدد الشركاء والحصص لكل شريك و تكلفة المشروع وايرادات المشروع , مما يعي المطور
                                موقف المشروع مجدي ام لا , ونقدم حلول هندسية و اخراج المشروع بالواجهات الخارجية مرندرة
                                و الاشراف على المشروع و تنفيذه و عمل بروفايل للمشروع لتقديمه للجهات المعنية او للشركاء .
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <!-- projects in figures -->
        <!-- <section class="projects-figures section-padding">
            <div class="container">
                <div class="portfolio__innumbers wow animate__animated animate__fadeInUp">
                    <div class="section__number wow animate__animated animate__fadeInDown light">
                        <h2>our Projects in Figures</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="number-content-wrap">
                                <span class="number">9</span>
                                <p class="title">Cities in Kingdom of Saudi Arabia</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="number-content-wrap">
                                <span class="number">3</span>
                                <p class="title">Structural development of cities</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="number-content-wrap">
                                <span class="number">+50</span>
                                <p class="title">Million m² development areas</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="number-content-wrap">
                                <span class="number">+20</span>
                                <p class="title">Development projects</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="number-content-wrap">
                                <span class="number">+20</span>
                                <p class="title">Marketing and sale projects</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="number-content-wrap">
                                <span class="number">+19</span>
                                <p class="title">Infrastructure Projects</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="number-content-wrap">
                                <span class="number">+6</span>
                                <p class="title">Superstructure Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- portfolio list  -->
        <!-- <section id="portfolio-list" class="portfolio-list section-padding bottom-only">
            <div class="container">
                <nav class="portfolio-list__filter">
                    <ul class="list">
                        <li>
                            <button class="btn control1" data-filter="*">All</button>
                        </li>
                        <li>
                            <button class="btn control1" data-filter=".eastern-en">
                                eastern
                            </button>
                        </li>
                        <li>
                            <button class="btn control1" data-filter=".western-en">
                                Westren
                            </button>
                        </li>
                        <li>
                            <button class="btn control1" data-filter=".northern-en">
                                northern
                            </button>
                        </li>
                        <li>
                            <button class="btn control1" data-filter=".central-en">
                                Central
                            </button>
                        </li>
                    </ul>
                </nav>

                <div class="portfolio-list__items scrollbar wow animate__animated animate__fadeInUp">
                    <div class="list" data-js="filter-list">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix eastern-en">
                                <a title="project1" title="Tanal" href="./project.html" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Tanal</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="
                          background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);
                        "></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix western-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Ali Makkah</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix central-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Telal Makkah</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix central-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Rawaf</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix eastern-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Alattas Aveneu</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix northern-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Buisness Oasis</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix western-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Arzan</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix eastern-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Masharef Akhozama</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix northern-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Rofan</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix central-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Al Joudi</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mix central-en">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Indus-comm</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <a title="project1" title="Ali Makkah" href="./project" class="portfolio__item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/portfolio/image1.jpg" alt="project1" />
                                    <div class="content">
                                        <h3>Dar Alattas</h3>
                                    </div>
                                    <div class="pattern pattern--portfolio bg-cover hover-slide" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/portfolio/admin-ajax-3.png);"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- info -->
        <section id="info" class="section info section-padding" data-module="info">
            <div id="info-wrap" class="container">
                <div class="section__number wow animate__animated animate__fadeInDown">
                    <h2>About Us</h2>
                </div>
                <nav class="info__filter wow animate__animated animate__fadeInDown">
                    <ul class="list">
                        <li>
                            <button class="btn tablink active" onclick="openCity(event, 'chairman')">
                                Chairman
                            </button>
                        </li>
                        <li>
                            <button class="btn tablink" onclick="openCity(event, 'ceo')">
                                Chief Executive Officer
                            </button>
                        </li>
                    </ul>
                </nav>
                <div class="info__content wow animate__animated animate__fadeInUp">
                    <div id="chairman" class="info-general tabcontent active">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3 col-sm-8 col-10">
                                <div class="info-general__image" data-animate="true">
                                    <figure>
                                        <img class="img-full" src="<?= get_template_directory_uri() ?>/assets/images/about/face.jpg" alt="chairman" data-animate="true" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="info-general__content" data-animate="true">
                                    <h2>Chairman</h2>
                                    <p class="subtitle">Ayed Bin Farhan Al Qahtani</p>
                                    <div class="text-wrap scrollbar">
                                        <p>
                                            In our journey to contribute to the well-being of our
                                            community, participate in the national development,
                                            and build communities with sophisticated and
                                            integrated lifestyles, Alattas Real Estate was
                                            established in 2007 and was listed as the first public
                                            real estate company in the Parallel Market (Nomu) to
                                            contribute to building lives full of luxury and
                                            progress and filled with hope for communities full of
                                            happiness and modern integrated lifestyles. <br />
                                            <br />
                                            From this point of view, Alattas has sought to improve
                                            individual and family choices and handle them in
                                            various modern ways by developing many neighborhoods
                                            and projects in a modern way that meets all needs and
                                            aspirations and transcends the life of the
                                            community.<br />
                                            <br />
                                            With a renewed vision and creative thinking, Alattas
                                            Real Estate made a leap in real estate development and
                                            made the real estate sector more attractive to capital
                                            investors, which provided real estate products bearing
                                            the character of excellence, creativity, and
                                            innovation <br />
                                            <br />
                                            This was reflected in the social and civilized
                                            environment to the extent that Alattas Real Estate
                                            became one of the most prominent real estate
                                            development companies that mixed experience with
                                            authenticity and modernity to provide a pioneering
                                            model that placed it among the most reliable companies
                                            in the sector.<br />
                                            <br />
                                            This would not have happened without scientific and
                                            administrative work and efforts that accommodates the
                                            developments and trends of the real estate market and,
                                            at the same time, keeps pace with the country's
                                            approaches in real estate development. This led Alattas
                                            to implement a package of projects based on its
                                            philosophy of innovation and creativity, through
                                            unique real estate products that fulfill the
                                            objectives of social development and achieve
                                            profitable returns for both investors and customers.
                                            Alattas began with the Eastern Region and has extended
                                            itself to Makkah, in addition to many other projects
                                            in other regions of the Kingdom, to achieve harmony
                                            with national vision 2030.<br />
                                            <br />
                                            Through Alattas's business, we do not seek just
                                            excellence, but rather uniqueness via exploring and
                                            studying opportunities through tracking future trends,
                                            implementing projects with the highest standards of
                                            quality, modern engineering planning, scientific
                                            management, and project innovation, in order to be an
                                            active partner in building a bright future of our
                                            community.<br />
                                            <br />
                                            In addition to that, in the near and far future, Alattas
                                            seek to increase brilliance and creativity by
                                            continuing the outstanding performance in real estate
                                            development through the implementation, innovation,
                                            and development of many distinctive projects that keep
                                            pace with the spirit of the future and the modern life
                                            of individuals, which would, achieve the hopes of our
                                            communities, partners, and customers, promote the
                                            national economy, and achieve the KSA Vision 2030.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ceo" class="info-general tabcontent" data-section="ceo" data-js="filter-section">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3">
                                <div class="info-general__image" data-animate="true">
                                    <figure>
                                        <img class="img-full" src="<?= get_template_directory_uri() ?>/assets/images/about/face.jpg" alt="chairman" data-animate="true" />
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="info-general__content" data-animate="true">
                                    <h2>CEO</h2>
                                    <p class="subtitle">Eng. Jarallah Al Amrah </p>
                                    <div class="text-wrap scrollbar">
                                        <p>
                                            Alattas Real Estate "Vision.. Strategy..
                                            Achievement"
                                            <br />
                                            <br />
                                            Alattas's success in the real estate development
                                            business came as a result of careful and thoughtful
                                            planning, a promising and ambitious vision of the
                                            future, and most importantly the ability to be
                                            creative and innovative and to provide quality real
                                            estate products that meet exceed the expectations of
                                            the aspirations of the nation, the citizens, and the
                                            investor.
                                            <br />
                                            <br />
                                            Alattas was keen to achieve success since its inception.
                                            It has set specific goals to achieve success in the
                                            shortest way possible, following a precise scientific
                                            strategy and experience from concrete and previous
                                            experiences, based on a model system that links all
                                            specializations and distinctive competencies, of which
                                            each performs its duty and role in an integrative way
                                            with other roles, to eventually achieve the larger and
                                            desired goal of Alattas. Here I would like to emphasize
                                            that this strategy was our means to achieve what we
                                            sought and worked for over the past years.
                                            <br />
                                            <br />
                                            Alattas's development strategy was based on finding
                                            qualitative initiatives to implement nontraditional
                                            projects in our beloved Kingdom. Alattas, whose projects
                                            are referred to as the structure, was keen to have
                                            tangible returns for the country, the citizens, and
                                            the customers.
                                            <br />
                                            <br />
                                            In all projects we have implemented so far, relying on
                                            national cadres and competencies, we succeeded in
                                            shortening the way, and worked with perseverance and
                                            high professionalism to reach our desired results.
                                            Alattas's strategy has also succeeded in building
                                            important partnerships with the government sector,
                                            which placed trust in Alattas's abilities, capabilities,
                                            and experienced leaders, and gave Alattas the
                                            opportunity to participate in building the country, by
                                            implementing mega projects, starting from the Eastern
                                            Region and extending to Makkah, in addition to many
                                            other projects in other regions of the Kingdom, to
                                            achieve harmony with national vision 2030.
                                            <br />
                                            <br />
                                            What "Alattas" achieved over these past years is an
                                            honorable image of a leading real estate development
                                            management company, because we provide the best
                                            service to our customers, develop innovatively,
                                            implement with quality, invest with feasibility, and
                                            achieve the highest returns for our customers and
                                            shareholders, and we are now listed in the Saudi stock
                                            market.
                                            <br />
                                            <br />
                                            In conclusion, Alattas has adopted its name as a
                                            principle, conducted its business for uniqueness, and
                                            exploited its experience for excellence to become the
                                            most distinguished and well known in the real estate
                                            industry and to develop innovative high quality real
                                            estate projects that contribute to community
                                            development and bring the highest returns for
                                            customers and shareholders.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients -->
        <section id="clients" class="clients section section-padding" data-scroll-index="5">
            <div class="container">
                <div class="section__number wow animate__animated animate__fadeInDown">
                    <h2>Clients</h2>
                </div>
                <div class="clients__content wow animate__animated animate__fadeInUp">
                    <div id="clients-carousel" class="owl-carousel owl-theme clients__list wow fadeInUp">
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/1.jpg" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/2.jpg" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/3.jpg" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/4.jpg" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/5.png" alt="" />
                        </div>
                        <!-- <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/c6-1.png" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/c7-1.png" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/c8-1.png" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/c9-1.png" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/c10-1.png" alt="" />
                        </div>
                        <div class="client">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/clients/c11-1.png" alt="" />
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us -->
        <section id="contact" class="contact section-padding" style="background: url(<?= get_template_directory_uri() ?>/assets/images/contact/pattern.png) repeat center #222222;">
            <div class="container">
                <div class="section__number wow animate__animated animate__fadeInDown light">
                    <h2>Contact us</h2>
                </div>
                <div class="contact__content">
                    <div class="contact__card wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-info-wrap">
                                    <div class="card-info">
                                        <p>Kingdom of Saudi Arabia</p>
                                        <p>Alattas Tower</p>

                                        <strong>Call Center:</strong>
                                        <p>+966-13-8878888</p>
                                        <p>+966-538077888</p>

                                        <p>
                                            <a href="mailto:info@Alattas.com.sa" style="color: white" target="_blank" rel="noopener noreferrer">info@Alattas.com.sa</a>
                                        </p>
                                    </div>
                                    <div class="contact__map">
                                        <img class="wow fadeInUp" src="<?= get_template_directory_uri() ?>/assets/images/contact/map.png" loading="lazy" alt="soumou saudi map">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-form" data-module="form">
                                    <div role="form">
                                        <form action="#" method="post" class="form form--contact" novalidate="novalidate" data-status="init">
                                            <div class="form-field">
                                                <label for="full-name">Name</label>
                                                <input type="text" name="name" class="form-control" />
                                            </div>
                                            <div class="form-field">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control" />
                                            </div>
                                            <div class="form-field">
                                                <label for="message-subject">Subject</label>
                                                <input type="text" name="subject" />
                                            </div>
                                            <div class="form-field">
                                                <label for="message">Message</label>
                                                <textarea name="message" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="btn-wrap">
                                                <button type="submit" class="submit-btn">
                                                    Send
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>