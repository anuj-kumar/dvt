<?php
session_start();
require 'tweetServer/config.php';
$access_token = $twitter->getAccessToken($_REQUEST['oauth_token'], $_REQUEST['oauth_verifier']);
$connection = new TwitterOAuth($APIKey, $APISecret, $access_token['oauth_token'], $access_token['oauth_token_secret']);
$user = $connection->get("account/verify_credentials");
print_r($user);
?>

<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?v=3">
    </script>
    <script type="text/javascript" src="tweet.js"></script>
    <script type="text/javascript" src="map.js"></script>
    <script type="text/javascript">
    </script>
  </head>
  <body>
<div id="map-canvas"></div>
  </body>
</html>