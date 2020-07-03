<?php
/**
 * ajax -> posts -> rating
 *
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

try {

    // initialize the return array
    $return = array();

    // rating
    $rating = $user->add_rating($_POST['wine_id'], $_POST['post_id'], $_POST['rating'], $_POST['message']);
    
    return $rating;

} catch (Exception $e) {
    modal("ERROR", __("Error"), $e->getMessage());
}

?>