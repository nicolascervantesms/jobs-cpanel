<?php

/* Template Name: Why cPanel */

get_header();

$wcMainTitle = get_field('why_cpanel_hero_title') ?: '';
$wcWhyWeLoveTitle = get_field('why_cpanel_wwl_title') ?: '';
$wcWhyWeLoveCopy = get_field('why_cpanel_wwl_copy') ?: '';
$wcMobileBg = get_field('why_cpanel_wwl_mobile_bg');
$wcDeskBg = get_field('why_cpanel_wwl_desktop_bg');
$wcWelcomeTitle = get_field('why_cpanel_welcome_title');
$wcWelcomeCopy = get_field('why_cpanel_welcome_copy');
?>

<style>
    .why-we-love-bg {
        background-image: url(<?php echo $wcMobileBg['url']; ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    @media (min-width: 768px) {
        .why-we-love-bg {
            background-image: url(<?php echo $wcDeskBg['url']; ?>);
            background-repeat: no-repeat;
            background-position: center;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="icons-hero-mobile">
        <div class="jobs-container">
            <div class="hero-container">
                <h1><?php echo $wcMainTitle; ?></h1>
                <div class="perks-container">
                    <?php if (have_rows('why_cpanel_hero_repeater')) : ?>
                        <?php while (have_rows('why_cpanel_hero_repeater')) : the_row(); ?>
                            <?php
                            $wcpIcon = get_sub_field('why_cpanel_hero_icon');
                            $wcpTitle = get_sub_field('why_cpanel_hero_title') ?: '';
                            $wcpSubTitle = get_sub_field('why_cpanel_hero_subtitle') ?: '';
                            ?>
                            <article>
                                <img src="<?php echo $wcpIcon['url'] ?>" alt="<?php echo $wcpIcon['alt'] ?>">
                                <h2><?php echo $wcpTitle; ?></h2>
                                <p><?php echo $wcpSubTitle; ?></p>
                                <?php if (have_rows('why_cpanel_hero_content_repeater')) : ?>
                                    <?php while (have_rows('why_cpanel_hero_content_repeater')) : the_row(); ?>
                                        <?php
                                        $wcContentTitle = get_sub_field('why_cpanel_hero_content_title') ?: '';
                                        $wcContentCopy = get_sub_field('why_cpanel_hero_content') ?: '';
                                        ?>
                                        <p class="content">
                                            <span><?php echo $wcContentTitle; ?></span>
                                            <?php echo $wcContentCopy; ?>
                                        </p>
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                                <?php endif; ?>
                            </article>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="icons-hero-desktop">
        <div class="jobs-container">
            <h1><?php echo $wcMainTitle; ?></h1>
            <div class="perks-container-desktop">
                <?php if (have_rows('why_cpanel_hero_repeater')) : ?>
                    <?php while (have_rows('why_cpanel_hero_repeater')) : the_row(); ?>
                        <?php
                        $wcpIconDesk = get_sub_field('why_cpanel_hero_icon');
                        ?>
                        <article>
                            <img src="<?php echo $wcpIconDesk['url'] ?>" alt="<?php echo $wcpIconDesk['alt'] ?>">
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="perks-list">
        <div class="jobs-container">
            <div class="perks-container-desktop-content">
                <?php if (have_rows('why_cpanel_hero_repeater')) : ?>
                    <?php while (have_rows('why_cpanel_hero_repeater')) : the_row(); ?>
                        <?php
                        $wcpTitleDesk = get_sub_field('why_cpanel_hero_title') ?: '';
                        $wcpSubTitleDesk = get_sub_field('why_cpanel_hero_subtitle') ?: '';
                        ?>
                        <article>
                            <h2><?php echo $wcpTitleDesk; ?></h2>
                            <p class="subtitle"><?php echo $wcpSubTitleDesk; ?></p>
                            <?php if (have_rows('why_cpanel_hero_content_repeater')) : ?>
                                <?php while (have_rows('why_cpanel_hero_content_repeater')) : the_row(); ?>
                                    <?php
                                    $wcContentTitleDesk = get_sub_field('why_cpanel_hero_content_title') ?: '';
                                    $wcContentCopyDesk = get_sub_field('why_cpanel_hero_content') ?: '';
                                    ?>
                                    <p class="content">
                                        <span><?php echo $wcContentTitleDesk; ?></span>
                                        <?php echo $wcContentCopyDesk; ?>
                                    </p>
                                <?php endwhile; ?>
                                <?php wp_reset_query(); ?>
                            <?php endif; ?>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="gradient-section why-we-love-bg container-fluid">
        <div class="jobs-container">
            <h2><?php echo $wcWhyWeLoveTitle; ?></h2>
            <p class="white"><?php echo $wcWhyWeLoveCopy; ?></p>
            <div class="swiper">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php if (have_rows('why_cpanel_wwl_repeater')) : ?>
                        <?php while (have_rows('why_cpanel_wwl_repeater')) : the_row(); ?>
                            <?php
                            $wcWhyWeLoveCopy = get_sub_field('why_cpanel_wwl_copy') ?: '';
                            $wcWhyWeLoveAuthor = get_sub_field('why_cpanel_wwl_author') ?: '';
                            ?>
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="c-edge">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/comment-edge.png'; ?>" alt="edge">
                                </div>
                                <div class="inner-swiper-slide">
                                    <?php echo $wcWhyWeLoveCopy; ?>
                                </div>
                                <div class="author">
                                    <p><?php echo $wcWhyWeLoveAuthor; ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>
            </div>
    </section>
    <section class="welcome">
        <div class="jobs-container">
            <h2><?php echo $wcWelcomeTitle; ?></h2>
            <p><?php echo $wcWelcomeCopy; ?></p>
        </div>
    </section>
    <section class="features">
        <div class="container-fluid jobs-container">
            <div class="features-inner">
                <?php if (have_rows('why_cpanel_features_repeater')) : ?>
                    <?php while (have_rows('why_cpanel_features_repeater')) : the_row(); ?>
                        <?php
                        $wcfIcon = get_sub_field('why_cpanel_features_icon') ?: '';
                        $wcfTitle = get_sub_field('why_cpanel_features_title') ?: '';
                        $wcfCopy = get_sub_field('why_cpanel_features_copy') ?: '';
                        ?>
                        <article>
                            <img src="<?php echo $wcfIcon['url']; ?>" alt="<?php echo $wcfIcon['alt']; ?>">
                            <h3><?php echo $wcfTitle; ?></h3>
                            <p><?php echo $wcfCopy; ?></p>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<script src="<?php echo get_template_directory_uri() . '/assets/js/swiper-bundle.min.js' ?>"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' ?>" />

<script>
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });
</script>
<?php
get_footer();
