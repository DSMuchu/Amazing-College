 <?php

add_action('rest_api_init', 'collegeRegisterSearch');

function collegeRegisterSearch() {
  register_rest_route('college/v1', 'search', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'collegeSearchResults'
  ));
}

function collegeSearchResults() {
  return "Congratulations, you've created a route!";

}
