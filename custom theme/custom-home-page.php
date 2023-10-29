<?php
/*
Template Name: Custom Home Page
*/
get_header();
?>



<!-- Your home page content goes here -->


<section id="testimonials" class="tm-section-pad-top tm-parallax-2">      
      <div class="container tm-testimonials-content">
        <div class="row">
          <div class="col-lg-12 tm-content-box">
            <h2 class="text-white text-center mb-4 tm-section-title">Countries</h2>
            <p class="mx-auto tm-section-desc text-center">
                Nulla dictum sem non eros euismod, eu placerat tortor lobortis. Suspendisse id velit eu libero pellentesque interdum. Etiam quis congue eros.
              </p>
            <div class="mx-auto tm-gallery-container tm-gallery-container-2">
              <div class="tm-testimonials-carousel">
              <?php
                // Get ACF fields
                $section_heading = get_field('section_heading');
                $section_content = get_field('section_content');
                $shortcode = get_field('shortcode_for_countries');

                /*
                // Display section heading
                echo '<h2>' . esc_html($section_heading) . '</h2>';
                */

                // Display section content
                echo apply_filters('the_content', $section_content);

                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm-bg-overlay"></div>
    </section>





<?php get_footer(); ?>
