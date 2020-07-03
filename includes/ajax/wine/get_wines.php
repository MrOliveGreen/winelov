<?php
/**
 * ajax -> admin -> static
 */

// fetch bootstrap
require('../../../bootstrap.php');

//$data = $_POST['data'];
//echo $data;
$types = [];
$grapes = [];
$regions = [];
$countries = [];
$styles = [];
$pairings = [];
$types = json_decode($_POST['type']);
$grapes = json_decode($_POST['grape']);
$regions = json_decode($_POST['region']);
$countries = json_decode($_POST['country']);
$styles = json_decode($_POST['style']);
$pairings = json_decode($_POST['pairing']);
$min = $_POST['min'];
$max = $_POST['max'];
$rating = $_POST['rating'];
$arrange = $_POST['arrange'];
$number = $_POST['number'];
$time = $_POST['time'];
if( count($grapes) == 0 && count($regions) == 0 && count($countries) == 0 && count($styles) == 0 && count($pairings) == 0 ) $query = '';
//if( count($types) == 0 && count($grapes) == 0 && count($regions) == 0 && count($countries) == 0 && count($styles) == 0 && count($pairings) == 0 ) $query = '';
else $query = 'WHERE ';
if( count($types) != 0 ) {
//    for ($x = 0; $x < count($types); $x++) {
//        if($x == 0) $query .= "(type='".$types[$x]."' " ;
//        else $query .= "OR type='".$types[$x]."' ";
//    }
//    $query .= ") ";
}
if( count($grapes) != 0 ) {
    if($query != 'WHERE ') $query .= 'AND ';
    for ($x = 0; $x < count($grapes); $x++) {
        if($x == 0) $query .= "(grapes LIKE '%".$grapes[$x]."%' " ;
        else $query .= "OR grapes LIKE '%".$grapes[$x]."%' ";
    }
    $query .= ") ";
}
if( count($regions) != 0 ) {
    if($query != 'WHERE ') $query .= 'AND ';
    for ($x = 0; $x < count($regions); $x++) {
        if($x == 0) $query .= "(region='".$regions[$x]."' " ;
        else $query .= "OR region='".$regions[$x]."' ";
    }
    $query .= ") ";
}
if( count($countries) != 0 ) {
    if($query != 'WHERE ') $query .= 'AND ';
    for ($x = 0; $x < count($countries); $x++) {
        if($x == 0) $query .= "(country='".$countries[$x]."' " ;
        else $query .= "OR country='".$countries[$x]."' ";
    }
    $query .= ") ";
}
if( count($styles) != 0 ) {
    if($query != 'WHERE ') $query .= 'AND ';
    for ($x = 0; $x < count($styles); $x++) {
        if($x == 0) $query .= "(wine_style='".$styles[$x]."' " ;
        else $query .= "OR wine_style='".$grapes[$x]."' ";
    }
    $query .= ") ";
}
if( count($pairings) != 0 ) {
    if($query != 'WHERE ') $query .= 'AND ';
    for ($x = 0; $x < count($pairings); $x++) {
        if($x == 0) $query .= "(foodpairing LIKE '%".$pairings[$x]."%' " ;
        else $query .= "OR foodpairing LIKE '%".$pairings[$x]."%' ";
    }
    $query .= ") ";
}
if( $min !== '0' || $max !== '500+') {
    if($query == '') $query = 'WHERE ';
    else $query .= 'AND ';
    if($max == '500+') $query .= '( price > '.$min.' ) ';
    else $query .= '( price >= '.$min.' AND price <= '.$max.' )';
    $query .= ' AND ( rating > '.$rating.' OR rating = "")';
}
$query .= ' ORDER BY ';
switch ($arrange) {
    case 'high_rating':
        $query .= 'rating DESC';
        break;
    case 'discount':
//        $query .= 'rating DESC';
        break;
    case 'hightolow':
        $query .= 'price+0 DESC';
        break;
    case 'lowtohigh':
        $query .= 'price+0';
        break;
    case 'highcount':
//        $query .= 'rating DESC';
        break;
}
$get_count = 0;
//$get_count = $db->query("SELECT COUNT(Id_item) FROM wines ".$query);
//$get_count = $get_count;
if($number != '') {
    $query .= ' LIMIT '.$number;
    if($time != 1) $query .= ' OFFSET '.$number * ($time - 1);
};
$get_wines = $db->query("SELECT * FROM wines ".$query);
$wines = [];
if($get_wines->num_rows > 0) {
    while($wine = $get_wines->fetch_assoc()) {
        $wines[] = $wine;
    }
}
$get_data = array(
    'wines' => $wines,
    'query' => $query
);

//return json_encode($get_data);
echo json_encode($wines);
?>
