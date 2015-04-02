<?php

require 'config.php';
//$tweets = $twitter->get('statuses/user_timeline', array('screen_name' => 'ixquick_de', 'count' => 5));

$type = isset($_GET['type']) ?  $_GET['type'] : "";
$count  = isset($_GET['count']) ?  $_GET['count'] : 20;
$id = isset($_GET['id']) ?  $_GET['id']: 0;

//$query =  array('screen_name' => $user, 'count' => $count);
if($type !== "" && $id != 0) $query[$type == 'new' ? 'since_id' : 'max_id'] = $id;

//print_r($query);
$lat = isset($_GET['lat']) ?  $_GET['lat'] : 0.0;
$long = isset($_GET['long']) ?  $_GET['long'] : 0.0;
$max_id = isset($_GET['max_id']) ?  $_GET['max_id'] : 0;
$query['q'] = "";
$query['geocode'] = "$lat,$long,100mi";
$query['since_id'] = $max_id+1;
$query['result_type'] = "recent";
$query['count'] = $count;
echo json_encode( $twitter->get('search/tweets', $query) );
//echo json_encode( $twitter->get('statuses/user_timeline', $query) );
?>