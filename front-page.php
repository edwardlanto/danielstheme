
<?php /* Template Name:Front Page */ ?>
<?php
get_header() ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <ul class="nav-list container row pull-right">
                <li class="nav-item col-md-5ths col-sm-2"><a href="/">Home</a></li>
                <li class="nav-item col-md-5ths col-sm-2"><a href="#about">About Me</a></li>
                <li class="nav-item col-md-5ths col-sm-2"><a href="<?php echo get_page_link(31) ?>">Portfolio</a></li>
                <li class="nav-item col-md-5ths col-sm-2"><a href="#clients">Clients</a></li>
                <li class="nav-item col-md-5ths col-sm-2"><a href="#contact">Contact Me</a></li>
            </ul>
           
            <div class="hero-padding">
                <div class="hamburger">
                    <div class="bar"></div>	
                </div>
            </div>
            <div class="social-container">
                <a href="https://www.linkedin.com/in/daniel-valdes-art/">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="https://www.pinterest.ca/danielvaldes8/">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>                
            </div>
                <div class="polygon2">
                    <!-- <div class="logo">Logo</div> -->
                    <div class="name-container">
                        <h2>Daniel Valdes</h2>
                        <p>Graphic Design and Illustrator</p>
                    </div><!--name-container-->
                    <img src="<?php
echo get_template_directory_uri(); ?>/assets/icon-hero.png" class="hero-icon" alt="daniel-valdes-icon-hero">
<img src="<?php
echo get_template_directory_uri(); ?>/assets/logo-mobile.png" class="mobile-hero" alt="daniel-valdes-icon-hero-mobile">
    
                </div><!--polygon2-->
            <section class="about-me-section" id="about">
                <h2 class="about-header">About Me</h2>
                <ul class="skill-list">
                <li>
                    <img src="<?php
echo get_template_directory_uri(); ?>/assets/web.png" alt="mouse-icon">
                    <p>UI/UX</p>
                </li>
                <li>
                    <img src="<?php
echo get_template_directory_uri(); ?>/assets/print.png" alt="print-icon">
                    <p>Print</p>
                </li>
                <li>
                    <img src="<?php
echo get_template_directory_uri(); ?>/assets/illustration.png" alt="illustration-icon">
                    <p>Illustration</p>
                </li>
                <li>
                    <img src="<?php
echo get_template_directory_uri(); ?>/assets/editorial.png" alt="editorial-icon">
                    <p>Editorial</p>
                </li>
                <li>
                        <img src="<?php
echo get_template_directory_uri(); ?>/assets/branding.png" alt="branding">
                        <p>Branding</p>
                    </li>
                </ul>
                <div class="resume-container container">
                    <div class="resume1 resume col-sm-4">
                        <p>Award winning visual artist and graphic  designer with experience in editorial  designing</p>
                        <a href="http://localhost:8888/danielstheme/wp-content/uploads/2017/10/Daniel-Valdes-Resume-1.pdf" class="yellow-button">Download Resume</a>
                        <p class="test"><?php echo CFS()->get( 'resume_english' ); ?>
                    </div><!--resume1-->
                    <div class="resume2 resume col-sm-5">
                        <p>Award winning and graphic designer  with experiecne in editorial  design, branding, t, oil painting.</p>
                        <a href="http://localhost:8888/danielstheme/wp-content/uploads/2017/10/Daniel-Valdes-Curriculum.pdf" class="yellow-button">Descargar Currículum</a>
                    </div> 
                </div><!--resume-container-->
            </section><!--about-me-section-->
            <section class="portfolio-section">
                <div class="portfolio-hero">
                <div class="portfolio-container">
                    <h2 class="portfolio-header">Portfolio</h2> 
                    <h2 class="clients-header">Clients</h2>
                    <div class="list-wrapper">
                    <ul id="portfolio-list" class="filtr-container">
                        <?php
    $loop = new WP_Query(array(
    'post_type' => 'pictures'
    ));
    if ($loop->have_posts()):
    while ($loop->have_posts()):
        $loop->the_post(); ?>
                            
                            <li class="portfolio-picture" filter="1" data-sort="value">
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
                    <div class="learn-more-container">
                        <p>Award winning visual artist and 
                        graphic designer with experience 
                        in editorial branding.</p>
                        <a href="#" class="learn-more-btn yellow-button">See More</a>
                    </div><!--learn-more-container-->
                </div><!--portfolio-container-->
                
            </section>
            <section class="client-section" id="clients">
            <h2 class="clients-header2">Clients</h2>
            <ul class="main-carousel">
            <?php
                $clients = new WP_Query(array(
                'post_type' => 'clients'
                ));
                if ($clients->have_posts()):
                while ($clients->have_posts()):
                $clients->the_post(); ?>                                       
                                    <li class="carousel-cell col-xs-12 col-md-5ths">
                                        <?php
                the_post_thumbnail(); ?>
                                    </li>                                            
                                    <?php
                endwhile;
                endif;
                wp_reset_postdata();
?>
            </ul>
            </section>
            <?php
get_sidebar(); ?>
        <!-- </div>hero-container -->
    <!-- </main>#main -->
</div><!-- #primary -->

<?php
get_footer() ?>