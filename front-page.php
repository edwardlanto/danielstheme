
<?php /* Template Name:Front Page */ ?>
<?php
get_header() ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="polygon-wrapper">
                <div class="polygon2">
                        <ul class="nav-list container row pull-right">
                            <li class="nav-item col-sm-3"><a href="#about">About Me</a></li>
                            <li class="nav-item col-sm-3"><a href="<?php echo get_page_link(31) ?>">My Work</a></li>
                            <li class="nav-item col-sm-3"><a href="#clients">Clients</a></li>
                            <li class="nav-item col-sm-3"><a href="#contact">Contact Me</a></li>
                        </ul>
                    <div class="name-container">
                        <h2>Daniel Valdes</h2>
                        <p>Graphic Design and Illustrator</p>
                    </div><!--name-container-->
                    <img src="<?php
echo get_template_directory_uri(); ?>/assets/icon-hero.png" class="hero-icon" alt="">
                    <img src="<?php
echo get_template_directory_uri(); ?>/assets/flap.png" alt="" class="flap">
                </div><!--polygon2-->
            </div><!--polygonwrapper"-->
            <section class="about-me-section" id="about">
                <h2 class="about-header">About Me</h2>
                <ul class="skill-list">
                    <li>
                        <img src="<?php
echo get_template_directory_uri(); ?>/assets/web.png" alt="">
                        <p>Web</p>
                    </li>
                    <li>
                        <img src="<?php
echo get_template_directory_uri(); ?>/assets/print.png" alt="">
                        <p>Print</p>
                    </li>
                    <li>
                        <img src="<?php
echo get_template_directory_uri(); ?>/assets/illustration.png" alt="">
                        <p>Illustration</p>
                    </li>
                    <li>
                        <img src="<?php
echo get_template_directory_uri(); ?>/assets/editorial.png" alt="">
                        <p>Editorial</p>
                    </li>
                    <li>
                            <img src="<?php
echo get_template_directory_uri(); ?>/assets/branding.png" alt="">
                            <p>Branding</p>
                        </li>
                    </ul>
                    <div class="resume-container container">
                        <div class="resume1 resume col-sm-4">
                            <p>Award winning visual artist and graphic  designer with experience in editorial  designing</p>
                            <a href="#" class="yellow-button">Download Resume</a>
                        </div><!--resume1-->
                        <div class="resume2 resume col-sm-5">
                            <p>Award winning and graphic designer  with experiecne in editorial  design, branding, t, oil painting.</p>
                            <a href="#" class="yellow-button">Descargar Curriculum</a>
                        </div> 
                    </div><!--resume-container-->
                </section><!--about-me-section-->
                <section class="portfolio-section">
                    <div class="portfolio-hero">
                    <div class="portfolio-container">
                        <h2 class="portfolio-header">Portfolio</h2> 
                        <ul id="portfolio-list" class="filtr-container">
                        <?php
$loop = new WP_Query(array(
	'post_type' => 'pictures'
));

if ($loop->have_posts()):
	while ($loop->have_posts()):
		$loop->the_post(); ?>
                             
                            <li class="portfolio-picture" filter="1" data-sort="value"> d
                                <?php
		the_post_thumbnail(); ?>
                            </li>
                                
                            <?php
	endwhile;
endif;
wp_reset_postdata();
?>
                        </ul>
                        <div class="learn-more-container">
                            <p>Award winning visual artist and 
                            graphic designer with experience 
                            in editorial branding.</p>
                            <a href="#" class="learn-more-btn yellow-button">Learn More</a>
                        </div><!--learn-more-container-->
                    </div><!--portfolio-container-->
                    
                </section>
                <section class="client-section" id="clients">
                <h2 class="clients-header">Clients</h2>
                    <ul class="container row clients-list">
                        <li class="col-sm-offset-2 col-sm-2"><img src="<?php
echo get_template_directory_uri(); ?>/assets/web.png" alt=""></li>
                        <li class="col-sm-2"><img src="<?php
echo get_template_directory_uri(); ?>/assets/web.png" alt=""></li>
                        <li class="col-sm-2"><img src="<?php
echo get_template_directory_uri(); ?>/assets/web.png" alt=""></li>
                        <li class="col-sm-2"><img src="<?php
echo get_template_directory_uri(); ?>/assets/web.png" alt=""></li>
                        <li class="col-sm-2"><img src="<?php
echo get_template_directory_uri(); ?>/assets/web.png" alt=""></li>
                    </ul>  
                </section>
                <?php
get_sidebar(); ?>
            </div><!--hero-container-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer() ?>