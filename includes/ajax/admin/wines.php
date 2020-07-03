<?php
/**
 * ajax -> admin -> wines
 */

// set execution time
set_time_limit(0); /* unlimited max execution time */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check admin|moderator permission
if(!$user->_is_admin) {
    modal("MESSAGE", __("System Message"), __("You don't have the right permission to access this"));
}

// handle users
try {

    switch ($_GET['do']) {
        case 'edit_detail':
            /* valid inputs */
            if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                _error(400);
            }
            /* get user info */
            $wine_info = $user->get_wine_detail($_GET['id']);
            if(!$wine_info) {
                throw new Exception(__("This wine does not exist"));
            }
            /* check wine name exist */
//            if(!$_POST['name']) {
//                throw new Exception(__("The wine name is required"));
//            }
            /* update */
            $db->query(sprintf("UPDATE wines SET name = %s, winery = %s, year = %s, region = %s, country = %s, rating = %s, price = %s, grapes = %s, foodpairing = %s, wine_style = %s, alcohol = %s, allergy = %s, wine_seo = %s, winery_seo = %s, image_URL = %s WHERE Id_item = %s", secure($_POST['name']), secure($_POST['winery']), secure($_POST['year'], 'int'), secure($_POST['region']), secure($_POST['country']), secure($_POST['rating'], 'int'), secure($_POST['price'], 'int'), secure($_POST['grapes']), secure($_POST['foodpairing']), secure($_POST['wine_style']), secure($_POST['alcohol']), secure($_POST['allergy']), secure($_POST['wine_seo']), secure($_POST['winery_seo']), secure($_POST['image_URL']), secure($_GET['id'], 'int') )) or _error("SQL_ERROR_THROWEN");
            /* return */
            return_json( array('success' => true, 'message' => __("User info have been updated")) );
            break;

        case 'add_detail':
            /* valid inputs */
//            if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
//                _error(400);
//            }
            /* required check */
            if(is_empty($_POST['name'])) {
                throw new Exception(__("You must enter wine name"));
            }
            if(is_empty($_POST['winery'])) {
                throw new Exception(__("You must enter winery name"));
            }
            if(is_empty($_POST['region'])) {
                throw new Exception(__("You must enter region name"));
            }
            if(is_empty($_POST['country'])) {
                throw new Exception(__("You must enter country name"));
            }
            /* validate values */
            if($_POST['year'] && !is_numeric($_POST['year'])) {
                throw new Exception(__("You must enter numeric value for year field"));
            }
            if($_POST['rating'] && !is_numeric($_POST['rating'])) {
                throw new Exception(__("You must enter numeric value for rating field"));
            }
            if($_POST['price'] && !is_numeric($_POST['price'])) {
                throw new Exception(__("You must enter numeric value for price field"));
            }
            if($_POST['alcohol'] && !is_numeric($_POST['alcohol'])) {
                throw new Exception(__("You must enter numeric value for alcohol field"));
            }
            /* insert */
            $db->query(sprintf("INSERT INTO wines(name, winery, year, region, country, rating, price, grapes, foodpairing, wine_style, alcohol, allergy, wine_seo, winery_seo, image_URL) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", secure($_POST['name']), secure($_POST['winery']), secure($_POST['year']), secure($_POST['region']), secure($_POST['country']), secure($_POST['rating']), secure($_POST['price']), secure($_POST['grapes']), secure($_POST['foodpairing']), secure($_POST['wine_style']), secure($_POST['alcohol']), secure($_POST['allergy']), secure($_POST['wine_seo']), secure($_POST['winery_seo']), secure($_POST['image_URL']) )) or _error("SQL_ERROR_THROWEN");
            /* return */
            return_json( array('success' => true, 'message' => __("Wine details have been added successfully!")) );
            break;

        default:
            _error(400);
            break;
    }

} catch (Exception $e) {
    return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>
