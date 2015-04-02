<?php

require 'twitteroauth/twitteroauth.php';

$APIKey = "u79EL7hI4WJtcJ82xp5IwQYxA";
$APISecret = "z7k1c7ih7L4BNEeknAVYE297wsMEt50RpXoUDrWJ2xBGbXv9ou";
$OAuthUrl = "https://api.twitter.com/oauth2/token";
$access_token = "599603772-E3xtJFtbaA7TD2LuBkrZUR6pVAkh8Cay6nFWjeMq";
$access_token_secret = "13bCYUDO6YbipQHcUpsADOoUnE5yy5tMOIKS1XLkEMDuA";
$user = 'anujprjpti';
$twitter = new TwitterOAuth($APIKey, $APISecret, $access_token, $access_token_secret);
$twitter->ssl_verifypeer = true;


?>