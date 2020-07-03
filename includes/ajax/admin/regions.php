<?php
/**
 * ajax -> admin -> users
 *
 * @package Sngine
 * @author Zamblek
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
            $wine_info = $user->get_winery_detail($_GET['id']);
            if(!$wine_info) {
                throw new Exception(__("This winery does not exist"));
            }
            /* check wine name exist */
            if(is_empty($_POST['name'])) {
                throw new Exception(__("You must enter region name"));
            }
            if(is_empty($_POST['country_id'])) {
                throw new Exception(__("You must enter the country field"));
            }
            /* update */
            $db->query(sprintf("UPDATE regions SET 
                name = %s, 
                country_id = %s, 
                Breadcrumb = %s, 
                headline = %s, 
                content = %s, 
                img_URL = %s
                WHERE id = %s",
                secure($_POST['name']),
                secure($_POST['country_id']),
                secure($_POST['country_id']),
                secure($_POST['headline']),
                secure($_POST['content']),
                secure($_POST['img_URL']),
                secure($_GET['id'], 'int')))
            or _error("SQL_ERROR_THROWEN");

            /* return */
            return_json( array('success' => true, 'message' => __("Winery info have been updated successfully!")) );
            break;

        case 'add_detail':
            /* valid inputs */
//            if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
//                _error(400);
//            }
            /* required check */
            if(is_empty($_POST['name'])) {
                throw new Exception(__("You must enter region name"));
            }
            if(is_empty($_POST['country_id'])) {
                throw new Exception(__("You must enter the country field"));
            }
            /* insert */
            $db->query(sprintf("INSERT INTO regions(name, country_id, Breadcrumb, headline, content, img_URL) VALUES (%s, %s, %s, %s, %s, %s)", secure($_POST['name']), secure($_POST['country_id']), secure($_POST['country_id']), secure($_POST['headline']), secure($_POST['content']), secure($_POST['img_URL']))) or _error("SQL_ERROR_THROWEN");
            /* return */
            return_json( array('success' => true, 'message' => __("Region details have been added successfully!")) );
            break;

        default:
            _error(400);
            break;
    }

} catch (Exception $e) {
    return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>