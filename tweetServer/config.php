<?php

require 'twitteroauth/twitteroauth.php';

/*
 * Twitter API credentials
 * 
 * This API will work for referers: localhost/dvt OR 127.0.0.1
 */
$APIKey              = "u79EL7hI4WJtcJ82xp5IwQYxA";
$APISecret           = "z7k1c7ih7L4BNEeknAVYE297wsMEt50RpXoUDrWJ2xBGbXv9ou";
$OAuthUrl            = "https://api.twitter.com/oauth2/token";
$access_token        = "599603772-E3xtJFtbaA7TD2LuBkrZUR6pVAkh8Cay6nFWjeMq";
$access_token_secret = "13bCYUDO6YbipQHcUpsADOoUnE5yy5tMOIKS1XLkEMDuA";

/*
 * Other parameters for Twitter
 */
$user       = 'anujprjpti';
$areaRadius = "1mi";
$count      = 100;

$twitter = new TwitterOAuth($APIKey, $APISecret, $access_token, $access_token_secret);
$twitter->ssl_verifypeer = true;

?>