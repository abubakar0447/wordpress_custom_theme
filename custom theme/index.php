<?php
get_header();
?>


<section id="whatwedo" class="tm-section-pad-top">
      
      <div class="container">

            <div class="row tm-content-box"><!-- first row -->
                <div class="col-lg-12 col-xl-12">
                <h2 class="text-center mb-4 tm-section-title" style="color:#007bff;">FAQs Section</h2>
                    <div class="tm-intro-text-container">
                        <?php
                            // Use the do_shortcode() function to execute the [faq] shortcode
                            $faq_content = do_shortcode('[rc_faq]');

                            // Display the FAQ content
                            echo $faq_content;
                        ?>
                    </div>
                </div>

            </div><!-- first row -->

        </div>
      
    </section>






<?php get_footer(); ?>
