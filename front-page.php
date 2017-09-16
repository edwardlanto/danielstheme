<?php /* Template Name:Front Page */ ?>
<?php get_header() ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div>
                <div class="polygon2">
                    <div class="name-container">
                        <h2>Daniel Valdes</h2>
                        <p>Graphic Design and Illustrator</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-hero.png" class="hero-icon" alt="">
                    
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/flap.png" alt="" class="flap">
        
                    
                </div>
               
            </div>
                <section class="about-me-section">
                    <h2 class="about-header">About Me</h2>
                    <ul class="skill-list">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/web.png" alt="">
                            <p>Web</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/print.png" alt="">
                            <p>Print</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/illustration.png" alt="">
                            <p>Illustration</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/editorial.png" alt="">
                            <p>Editorial</p>
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/branding.png" alt="">
                            <p>Branding</p>
                        </li>
                    </ul>
                    <div class="resume-container container">
                        <div class="resume1 resume col-sm-5">
                            <p>Award winning visual artist and graphic<br/> designer with experience in editorial<br/> designing</p>
                            <a href="#" class="yellow-button">Download Resume</a>
                        </div><!--resume1-->
                        <div class="resume2 resume col-sm-5">
                            <p>Award winning and graphic designer<br/> with experiecne in editorial<br/> design, branding, t, oil painting.</p>
                            <a href="#" class="yellow-button">Descargar Curriculum</a>
                        </div> 
                    </div><!--resume-container-->
                </section><!--about-me-section-->
                <section class="portfolio-section">
                    <div class="portfolio-hero"></div>
                    <div class="portfolio-container">
                        <h2 class="portfolio-header">Portfolio</h2> 
                        <ul id="portfolio-list">
                        <?php
                        $loop = new WP_Query( array( 'post_type' => 'pictures' ) );
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                             
                            <li class="portfolio-picture">
                                <?php the_post_thumbnail(); ?>
                            </li>
                                
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>
                        </ul>
                    </div><!--portfolio-container-->
                </section>
                

            </div><!--hero-container-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer()?>