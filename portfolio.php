<?php /* Template Name: Portfolio */ ?>



<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <ul class="nav-list container row pull-right">
            <li class="nav-item col-sm-2 col-sm-offset-3"><a href="/#about">About Me</a></li>
            <li class="nav-item bold-item col-sm-2"><a href="<?php echo get_page_link(31) ?>">Portfolio</a></li>
            <li class="nav-item col-sm-2"><a href="/#clients">Clients</a></li>
            <li class="nav-item col-sm-2"><a href="/#contact">Contact Me</a></li>
        </ul>
        <div class="portfolio-header-container container">
        <div class="hamburger">
                    <div class="bar"></div>	
                </div>
            <h1>Portfolio</h1></div>
        <section class="portfolio-gallery">
        <div class="shuffle-nav-wrapper">
        <ul class="shuffle-nav container">
           <!-- For filtering controls add -->
           <li class="col-sm-1 space-out col-sm-offset-3" data-filter="1">Illustation </li>
           <li class="col-sm-1 space-out" data-filter="2">Editorial</li>
           <li class="col-sm-1 space-out" data-filter="3">Branding</li>
            <li class="col-sm-1 space-out" data-filter="4">Label</li>
            <li class="col-sm-1 space-out" class="first-shuffle" data-filter="5" data-shuffle>Infographic</li>
            <li class="col-sm-1 space-out" data-filter="6">Web</li>
        </ul>
        </div>
        <ul id="main-list" class="filtr-container container portfolio-wrapper">
                        <?php
$loop = new WP_Query(array(
	'post_type' => 'pictures'
));

if ($loop->have_posts()):
	while ($loop->have_posts()):
		$loop->the_post(); ?>
                            <!-- <a href="<?php echo the_post_thumbnail_url() ?>" data-lightbox="test1" data-title="My caption<br/>" class"lightbox-container"> -->
                            <li class="filtr-item col-sm-12 col-md-3 portfolio-item" data-category="<?php echo CFS()->get('category'); ?>" data-sort="value">
                                <div class="hidden image-text">
                                    <h3>Allergro</h3>
                                    <p class="caption1">Life Style Magazine</p>
                                    <p class="caption2">Editorial Design</p>
                                </div>
                                <?php
		the_post_thumbnail(); ?>
                            </li>
                            <!-- </a> -->
                                
                            <?php
	endwhile;
endif;
wp_reset_postdata();
?>
                        </ul>
</section>
<?php get_sidebar() ; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>