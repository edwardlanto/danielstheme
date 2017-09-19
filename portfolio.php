<?php /* Template Name: Portfolio */ ?>



<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <ul class="nav-list container row pull-right">
            <li class="nav-item col-sm-3"><a href="#about">About Me</a></li>
            <li class="nav-item col-sm-3"><a href="<?php echo get_page_link(31) ?>">My Work</a></li>
            <li class="nav-item col-sm-3"><a href="#clients">Clients</a></li>
            <li class="nav-item col-sm-3"><a href="#contact">Contact Me</a></li>
        </ul>
        <section class="portfolio-gallery">
        <ul>
           <!-- For filtering controls add -->
           <li data-filter="all"> All items </li>
           <li data-filter="1"> Category 1 </li>
           <li data-filter="2"> Category 2 </li>
           <li data-filter="3"> Category 3 </li>
           <!-- For a shuffle control add -->
           <li data-shuffle> Shuffle items </li>
           <!-- For sorting controls add -->
           <li data-sortAsc> Ascending </li>
           <li data-sortDesc> Descending </li>
        </ul>
<div id="portfolio-list">
        <ul id="main-list" class="filtr-container">
                        <?php
$loop = new WP_Query(array(
	'post_type' => 'pictures'
));

if ($loop->have_posts()):
	while ($loop->have_posts()):
		$loop->the_post(); ?>
                             
                            <li class="filtr-item" data-category="1" data-sort="value">
                                <?php
		the_post_thumbnail(); ?>
                            </li>
                                
                            <?php
	endwhile;
endif;
wp_reset_postdata();
?>
                        </ul>
                    </div>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>