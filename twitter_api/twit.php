<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "16011751-4Qkm3S3UUJKFtFeczCgtcyd6zi4GDpWmh5sGOLgLB",
    'oauth_access_token_secret' => "1YqDGshSMHmVyzCihd7LzVNHtuGY8iBZyzeNzIkdE6Xjw",
    'consumer_key' => "ZPDPBLL5pYZC37kNPAz5XJpdj",
    'consumer_secret' => "L37v9jFrzWTRzAu2kxlKPFyMupSjQSAT6RERKbduyCzIssZl1H"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=sojourn_ceil&count=20';


$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$url2 = "https://api.twitter.com/1.1/search/tweets.json";
$requestMethod = "GET";
$getfield = '?q='.urlencode('#Eagles').'&count=500&tweet_mode=extended&result_type=recent';
$twitter = new TwitterAPIExchange($settings);

$string = json_decode($twitter->setGetfield($getfield)
    ->buildOauth($url2, $requestMethod)
    ->performRequest(),$assoc = true);
if(array_key_exists("errors", $string)) {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
//echo "<pre>";
//print_r($string['statuses']);
//echo "</pre>";
echo "\n";

$i=0;
foreach ($string['statuses'] as $item) {
$i++;
        echo "<h6>".$i." ".($item['created_at']) . "  --> " . trim(preg_replace('/\s+/', ' ', $item['full_text'])) . "\n </br></h6>";

}

?>