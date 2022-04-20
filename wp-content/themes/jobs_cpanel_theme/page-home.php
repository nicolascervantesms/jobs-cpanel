<?php

/* Template Name: Home*/

get_header();
?>
<?php
$heroImage = get_field('home_hero_bg');
$heroTitle = get_field('home_hero_title') ?: '';
$heroSubTitle = get_field('home_hero_subtitle') ?: '';
$heroCTA = get_field('home_hero_cta');
$wWLTitle = get_field('home_wwl_title') ?: '';
$wWLSubTitle = get_field('home_wwl_copy') ?: '';
$wWLVideoId = get_field('home_wwl_video_id') ?: '';
$perksTitle = get_field('home_perks_title') ?: '';
$perksCopy = get_field('home_perks_copy') ?: '';
$swuTitle = get_field('home_signup_title') ?: '';
$swuCopy = get_field('home_signup_copy') ?: '';
$swuSubtitle = get_field('home_signup_subtitle') ?: '';
$swuMobileBg = get_field('home_swu_mobile_bg') ?: '';
$swuDeskBg = get_field('home_swu_desk_bg') ?: '';
$swuCTA = get_field('home_signup_cta') ?: '';

?>
<style>
    .sign-up-bg {
        background-image: url(<?php echo $swuMobileBg['url']; ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    @media (min-width: 768px) {
        .hero-background {
            background-image: url(<?php echo $heroImage['url']; ?>);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .sign-up-bg {
            background-image: url(<?php echo $swuDeskBg['url']; ?>);
            background-repeat: no-repeat;
            background-position: center;
        }
    }
</style>

<main id="primary" class="site-main">
    <section class="hero hero-background">
        <div class="jobs-container">
            <div class="hero-container">
                <h1><?php echo $heroTitle; ?></h1>
                <h3><?php echo $heroSubTitle; ?></h3>
                <a href="<?php echo $heroCTA['url']; ?>" class="cta"><?php echo $heroCTA['title']; ?></a>
            </div>
        </div>
    </section>
    <section class="why-we-love">
        <div class="container-fluid">
            <div class="jobs-container">
                <h2 class="white"><?php echo $wWLTitle; ?></h2>
                <p class="white">
                    <?php echo $wWLSubTitle; ?>
                </p>
                <div class="video-container">
                    <iframe src="https://player.vimeo.com/video/<?php echo $wWLVideoId; ?>" width="100%" height="auto" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="perks container-fluid jobs-container">
        <h2 class="dark"><?php echo $perksTitle; ?></h2>
        <p><?php echo $perksCopy; ?></p>
        <div class="perks-icons-container">
            <?php if (have_rows('home_perks_main_repeater')) : ?>
                <?php while (have_rows('home_perks_main_repeater')) : the_row(); ?>
                    <?php $center = get_sub_field('home_perks_flex'); ?>
                    <div class="perks-icons" style="justify-content: <?php echo $center ? 'space-evenly' : 'space-between' ?>">
                        <?php if (have_rows('home_perks_repeater')) : ?>
                            <?php while (have_rows('home_perks_repeater')) : the_row(); ?>
                                <?php
                                $icon = get_sub_field('home_perks_icon');
                                $iconCaption = get_sub_field('home_perks_icon_caption');
                                ?>
                                <article class="perks-box">
                                    <div class="perk-img-container">
                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                    </div>
                                    <span><?php echo $iconCaption; ?></span>
                                </article>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="gradient-section sign-up-bg container-fluid">
        <div class="jobs-container">
            <h2><?php echo $swuTitle; ?></h2>
            <p class="white"><?php echo $swuCopy; ?></p>
            <h4><?php echo $swuSubtitle ?></h4>
            <ul>
                <?php if (have_rows('home_signup_positions_repeater')) : ?>
                    <?php while (have_rows('home_signup_positions_repeater')) : the_row(); ?>
                        <?php
                        $positionLink = get_sub_field('home_signup_positions_links');
                        ?>
                        <li><a href="<?php echo $positionLink['url']; ?>"><?php echo $positionLink['title']; ?></a></li>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </ul>
            <a href="<?php echo $swuCTA['url']; ?>" class="cta-with-border"><?php echo $swuCTA['title']; ?></a>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
