<?php
/**
 * ajax -> admin -> wineries
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
            if(is_empty($_POST['Name'])) {
                throw new Exception(__("You must enter winery name"));
            }
            if(is_empty($_POST['email'])) {
                throw new Exception(__("You must enter the email"));
            }
            /* update */
            $db->query(sprintf("UPDATE winery SET
                Name = %s,
                Logo_URL = %s,
                business_name = %s,
                description = %s,
                email = %s,
                facebook = %s,
                instagram = %s,
                instagram1 = %s,
                twitter = %s,
                Twitter1 = %s,
                website = %s,
                street = %s,
                city = %s,
                state = %s,
                zip = %s,
                Region = %s,
                Country = %s,
                Lat = %s,
                Lon = %s
                WHERE ID = %s",
                secure($_POST['Name']),
                secure($_POST['Logo_URL']),
                secure($_POST['business_name']),
                secure($_POST['description']),
                secure($_POST['email']),
                secure($_POST['facebook']),
                secure($_POST['instagram']),
                secure($_POST['instagram1']),
                secure($_POST['twitter']),
                secure($_POST['Twitter1']),
                secure($_POST['website']),
                secure($_POST['street']),
                secure($_POST['city']),
                secure($_POST['state']),
                secure($_POST['zip'], 'int'),
                secure($_POST['Region']),
                secure($_POST['Country']),
                secure($_POST['Lat'], 'int'),
                secure($_POST['Long'], 'int'),
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
            if(is_empty($_POST['Name'])) {
                throw new Exception(__("You must enter winery name"));
            }
            if(is_empty($_POST['email'])) {
                throw new Exception(__("You must enter the email"));
            }
            /* validate values */
            if($_POST['zip'] && !is_numeric($_POST['zip'])) {
                throw new Exception(__("You must enter numeric value for zip field"));
            }
            if($_POST['Lat'] && !is_numeric($_POST['Lat'])) {
                throw new Exception(__("You must enter numeric value for Latitude field"));
            }
            if($_POST['Long'] && !is_numeric($_POST['Long'])) {
                throw new Exception(__("You must enter numeric value for Longitude field"));
            }
            /* insert */
            $db->query(sprintf("INSERT INTO winery(Name, Logo_URL, business_name, description, email, facebook, instagram, instagram1, twitter, Twitter1, website, street, city, state, zip, Region, Country, Lat, Lon) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", secure($_POST['Name']), secure($_POST['Logo_URL']), secure($_POST['business_name']), secure($_POST['description']), secure($_POST['email']), secure($_POST['facebook']), secure($_POST['instagram']), secure($_POST['instagram1']), secure($_POST['twitter']), secure($_POST['Twitter1']), secure($_POST['website']), secure($_POST['street']), secure($_POST['city']), secure($_POST['state']), secure($_POST['zip']), secure($_POST['Region']), secure($_POST['Country']), secure($_POST['Lat']), secure($_POST['Long']) )) or _error("SQL_ERROR_THROWEN");
            /* return */
            return_json( array('success' => true, 'message' => __("Winery details have been added successfully!")) );
            break;

        default:
            _error(400);
            break;
    }

} catch (Exception $e) {
    return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>
