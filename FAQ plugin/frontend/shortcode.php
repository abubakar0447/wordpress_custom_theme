<?php

function render_faq_shortcode($atts) {
    $args = shortcode_atts(array(
        'number' => -1, // Display all FAQs by default
    ), $atts);

    $faqs = new WP_Query(array(
        'post_type' => 'faq',
        'posts_per_page' => $args['number'],
    ));

    $output = '<div class="faq-list">';

    while ($faqs->have_posts()) {
        $faqs->the_post();
        $question = get_post_meta(get_the_ID(), 'faq_question', true);
        $answer = get_post_meta(get_the_ID(), 'faq_answer', true);

        $output .= '<div class="faq">';
        $output .= '<h3>' . esc_html($question) . '</h3>';
        $output .= '<p>' . esc_html($answer) . '</p>';
        $output .= '</div>';
    }

    $output .= '</div>';
    wp_reset_postdata();

    return $output;
}

add_shortcode('faq', 'render_faq_shortcode');


?>