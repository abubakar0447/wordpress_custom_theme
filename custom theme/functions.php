<?php

function custom_theme_enqueue_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom-style.css');
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');

// Register a custom navigation menu
function custom_theme_register_menu() {
    register_nav_menu('custom-menu', 'Custom Navigation Menu');
}
add_action('init', 'custom_theme_register_menu');

// Register a custom footer
function custom_theme_register_footer() {
    register_nav_menu('custom-footer', 'Custom Footer Menu');
}
add_action('init', 'custom_theme_register_footer');

//creating shortcode and making API request for getting the data
function custom_country_shortcode() {
    // Make an API request to retrieve country data
    $api_url = 'https://restcountries.com/v3.1/all?fields=name,flags';
    $response = wp_remote_get($api_url);

    // Check if the request was successful
    if (is_array($response) && !is_wp_error($response)) {
        $data = json_decode(wp_remote_retrieve_body($response));

        // Check if the data is valid
        if ($data) {
            $output = '<ul class="country-list">';

            foreach ($data as $country) {
                $country_name = $country->name->common;
                $flag_url = $country->flags->png;

                // Create a list item for each country
                $output .= '<li><img src="' . esc_url($flag_url) . '" alt="' . esc_attr($country_name) . '"> ' . esc_html($country_name) . '</li>';
            }

            $output .= '</ul>';

            return $output;
        } else {
            return 'Failed to fetch data from the API.';
        }
    } else {
        return 'Failed to connect to the API.';
    }
}
add_shortcode('custom_country_shortcode', 'custom_country_shortcode');

//ACF option page
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_site_settings',
        'title' => 'Site Settings',
        'fields' => array(
            array(
                'key' => 'field_site_logo',
                'label' => 'Site Logo',
                'name' => 'site_logo',
                'type' => 'image',
                'instructions' => 'Upload or select your site logo',
                'return_format' => 'url', // You can adjust the return format
            ),
            array(
                'key' => 'field_site_address',
                'label' => 'Site Address',
                'name' => 'site_address',
                'type' => 'text',
                'instructions' => 'Enter your site address',
            ),
            array(
                'key' => 'field_contact_number',
                'label' => 'Contact Number',
                'name' => 'contact_number',
                'type' => 'text',
                'instructions' => 'Enter your contact number',
            ),
            // Add more fields as needed
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-settings',
                ),
            ),
        ),
    ));
}



?>