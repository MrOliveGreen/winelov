<?php
/** explore */

// fetch bootloader
require('bootloader.php');

try {

    // page header
    page_header(__("Wine Explore"));

    // get view content
    switch ($_GET['view']) {
        case '':
            // get all wines
            $wines = $user->get_wines('', '', '', '', '', '', '7', '30', '3.5', 'high_rating', '25', '1');
            //$total_wines = $user->get_wines('', '', '', '', '', '', '7', '30', '3.5', 'high_rating', '', '');
            /* assign variables */
            $title = " between €7 - €30 rated above 3.5 stars";
            $sub_title = "";
            $smarty->assign('title', $title);
            $smarty->assign('sub_title', $sub_title);
            $smarty->assign('wines', $wines);
            //$smarty->assign('total', $total_wines);
            $smarty->assign('pages', 'wine_explore');
            // page footer
            page_footer("wine_explore");

            break;

        case 'detail':

            // get viewer all managed pages
            $pages = $user->get_pages( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('pages', $pages);

            // get viewer all managed groups
            $groups = $user->get_groups( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('groups', $groups);

            // get viewer all managed events
            $events = $user->get_events( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('events', $events);

            // get countries
            $countries = $user->get_countries();
            /* assign variables */
            $smarty->assign('countries', $countries);

            // get campaign potential reach
            $potential_reach = $user->campaign_potential_reach();
            /* assign variables */
            $smarty->assign('potential_reach', $potential_reach);

            //get wine details
            $details = $user->get_wine_detail($_GET['wine_id']);
            $article = $user->_check_article($_GET['wine_id']);

            $has_review = $user->has_review($_GET['wine_id']);
            if($has_review) $post = $user->get_post($has_review['post_id']);
            $related_wines = $user->get_winery_related($details['winery'], $_GET['wine_id']);
            $winery_details = $user->get_winery_detail($details['winery']);

            $smarty->assign('details', $details);
            $smarty->assign('has_review', $has_review);
            if($post) $smarty->assign('post', $post);
            $smarty->assign('related_wines', $related_wines);
            $smarty->assign('winery', $winery_details);

            // page footer
            page_footer("_detail");

            break;

        case 'country':

            // get viewer all managed pages
            $pages = $user->get_pages( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('pages', $pages);

            // get viewer all managed groups
            $groups = $user->get_groups( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('groups', $groups);

            // get viewer all managed events
            $events = $user->get_events( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('events', $events);

            // get countries
            $countries = $user->get_countries();
            /* assign variables */
            $smarty->assign('countries', $countries);

            // get campaign potential reach
            $potential_reach = $user->campaign_potential_reach();
            /* assign variables */
            $smarty->assign('potential_reach', $potential_reach);

            // page footer
            page_footer("_country");
            break;

        case 'region':

            // get viewer all managed pages
            $pages = $user->get_pages( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('pages', $pages);

            // get viewer all managed groups
            $groups = $user->get_groups( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('groups', $groups);

            // get viewer all managed events
            $events = $user->get_events( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('events', $events);

            // get countries
            $countries = $user->get_countries();
            /* assign variables */
            $smarty->assign('countries', $countries);

            // get campaign potential reach
            $potential_reach = $user->campaign_potential_reach();
            /* assign variables */
            $smarty->assign('potential_reach', $potential_reach);

            // get region detail
            $region = $user->get_region_detail($_GET['region']);
            $top_wines = $user->get_region_related($_GET['region']);
            /* assign variables */
            $smarty->assign('region', $region);
            $smarty->assign('related_wines', $top_wines);

            // page footer
            page_footer("_region");
            break;

        case 'winery':

            // get viewer all managed pages
            $pages = $user->get_pages( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('pages', $pages);

            // get viewer all managed groups
            $groups = $user->get_groups( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('groups', $groups);

            // get viewer all managed events
            $events = $user->get_events( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('events', $events);

            // get countries
            $countries = $user->get_countries();
            /* assign variables */
            $smarty->assign('countries', $countries);

            // get campaign potential reach
            $potential_reach = $user->campaign_potential_reach();
            /* assign variables */
            $smarty->assign('potential_reach', $potential_reach);

            // get winery detail
            $winery = $user->get_winery_detail($_GET['winery']);
            /* assign variables */
            $smarty->assign('winery', $winery);

            // page footer
            if($winery) {
                page_footer("_winery");
            }
            else {
                _error(404);
            }
            break;

        case 'find':

            // get viewer all managed pages
            $pages = $user->get_pages( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('pages', $pages);

            // get viewer all managed groups
            $groups = $user->get_groups( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('groups', $groups);

            // get viewer all managed events
            $events = $user->get_events( array('managed' => true, 'user_id' => $user->_data['user_id']) );
            /* assign variables */
            $smarty->assign('events', $events);

            // get countries
            $countries = $user->get_countries();
            /* assign variables */
            $smarty->assign('countries', $countries);

            // get campaign potential reach
            $potential_reach = $user->campaign_potential_reach();
            /* assign variables */
            $smarty->assign('potential_reach', $potential_reach);

            /* assign variables */
            $title = $_GET['type']." wines between €".$_GET['min']." - €".$_GET['max']." rated above ".$_GET['rating']." stars";
            $sub_title = "";
            $smarty->assign('title', $title);
            $smarty->assign('sort', 'type');
            $smarty->assign('sub_title', $sub_title);
            $smarty->assign('type', $_GET['type']);
            $smarty->assign('min', $_GET['min']);
            $smarty->assign('max', $_GET['max']);
            $smarty->assign('rating', $_GET['rating']);
            // get winery detail
            $wines = $user->get_wines($_GET['type'], '', '', '', '', '',$_GET['min'], $_GET['max'],$_GET['rating'],'high_rating','25','1');
            /* assign variables */
            $smarty->assign('wines', $wines);

            // page footer
//            if($wines) {
                page_footer("wine_explore");
//            }
//            else {
//                _error(404);
//            }
            break;

        case 'from_menu':
            switch ($_GET['sort']) {
                case 'style':
                    //get wines with style
                    $style_wines = $user->get_wines('', '', '', '', $_GET['title'], '', '7', '30', '3.5', 'high_rating', '25', '1');
                    //$total_wines = $user->get_wines('', '', '', '', $_GET['title'], '', '7', '30', '3.5', 'high_rating', '', '');
                    //set variables
                    $title = " between €7 - €30 rated above 3.5 stars";
                    $sub_title = "From 1 style";
                    $smarty->assign('wines', $style_wines);
                    break;
                case 'type':
                    //get wines with style
                    $type_wines = $user->get_wines($_GET['title'], '', '', '', '', '', '7', '30', '3.5', 'high_rating', '25', '1');
                    //$total_wines = $user->get_wines($_GET['title'], '', '', '', '', '', '7', '30', '3.5', 'high_rating', '', '');
                    //set variables
                    $title = $_GET['title']." wines between €7 - €30 rated above 3.5 stars";
                    $sub_title = "";
                    $type = $_GET['title'];
                    $smarty->assign('type', $type);
                    $smarty->assign('wines', $type_wines);
                    break;
                case 'grape':
                    //get wines with style
                    $grape_wines = $user->get_wines('', $_GET['title'], '', '', '', '', '7', '30', '3.5', 'high_rating', '25', '1');
                    //$total_wines = $user->get_wines('', $_GET['title'], '', '', '', '', '7', '30', '3.5', 'high_rating', '', '');
                    //set variables
                    $title = " between €7 - €30 rated above 3.5 stars";
                    $sub_title = "From 1 grape";
                    $smarty->assign('wines', $grape_wines);
                    break;
                case 'pairing':
                    //get wines with style
                    $pairing_wines = $user->get_wines('', '', '', '', '', $_GET['title'], '7', '30', '3.5', 'high_rating', '25', '1');
                    //$total_wines = $user->get_wines('', '', '', '', '', $_GET['title'], '7', '30', '3.5', 'high_rating', '', '');
                    //set variables
                    $title = " between €7 - €30 rated above 3.5 stars";
                    $sub_title = "From 1 food pairing";
                    $smarty->assign('wines', $pairing_wines);
                    break;
                case 'region':
                    //get wines with style
                    $region_wines = $user->get_wines('', '', $_GET['title'], '', '', '', '7', '30', '3.5', 'high_rating', '25', '1');
                    //$total_wines = $user->get_wines('', '', $_GET['title'], '', '', '', '7', '30', '3.5', 'high_rating', '', '');
                    //set variables
                    $title = " between €7 - €30 rated above 3.5 stars";
                    $sub_title = "From 1 region";
                    $smarty->assign('wines', $region_wines);
                    break;
                case 'country':
                    //get wines with style
                    $region_wines = $user->get_wines('', '', '', $_GET['title'], '', '', '7', '30', '3.5', 'high_rating', '25', '1');
                    //$total_wines = $user->get_wines('', '', '', $_GET['title'], '', '', '7', '30', '3.5', 'high_rating', '', '');
                    //set variables
                    $title = " between €7 - €30 rated above 3.5 stars";
                    $sub_title = "From 1 country";
                    $smarty->assign('wines', $region_wines);
                    break;
                case 'price':
                    //get wines with style
                    $price_wines = $user->get_wines('', '', '', $_GET['title'], '', '', $_GET['min'], $_GET['max'], '3.5', 'high_rating', '25', '1');
                    //$total_wines = $user->get_wines('', '', '', $_GET['title'], '', '', '7', '30', '3.5', 'high_rating', '', '');
                    //set variables
                    $title = " between €".$_GET['min']." - €".$_GET['max']." rated above 3.5 stars";
                    $min = $_GET['min'];
                    $max = $_GET['max'];
                    $sub_title = "";
                    $smarty->assign('min', $min);
                    $smarty->assign('max', $max);
                    $smarty->assign('wines', $price_wines);
                    break;
                default:
                    _error(404);
                    break;
            };

            $smarty->assign('page', 'explore');
            $smarty->assign('sort', $_GET['sort']);
            $smarty->assign('detail', $_GET['title']);
            $smarty->assign('title', $title);
            $smarty->assign('sub_title', $sub_title);
            //$smarty->assign('total', $total_wines);
            $high_rated = $user->get_wines('', '', '', '', '', '', '0', '500+', '1', 'high_rating', '6', '1');
            $bestseller = $user->get_wines('', '', '', '', '', '', '0', '500+', '1', 'hightolow', '6', '1');
            $smarty->assign('high_rated', $high_rated);
            $smarty->assign('bestseller', $bestseller);
            // page footer
            page_footer("wine_explore");
            break;

        default:
            _error(404);
            break;
    }
    /* assign variables */
    $smarty->assign('view', $_GET['view']);

} catch (Exception $e) {
    _error(__("Error"), $e->getMessage());
}
