<?php get_header(); ?>
<div class="page">
    <main class="main" role="main">
        <div class="section-header-internal-page" style="background-color: #464646"></div>
        <section id="design" class="section portfolio section-main-internal-page" id="portfolio" data-scroll-index="3" data-module="filter">
            <div class="container px-3" style="padding-inline: 30px;">
                <div class="section__number wow animate__animated animate__fadeInDown">
                    <h2>الاقسام</h2>
                </div>
                <div class="section__content">
                    <div class="text-content wow animate__animated animate__fadeInUp">
                        <div class="section__title">
                            <?php the_title('<h3>', '</h3>'); ?>
                        </div>
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>