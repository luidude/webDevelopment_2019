
     <form action="./twit.php" method="post">
        <p>
            <label for="search_term">Search Term</label>
            <input type="text" name="search_term" id="search_term">
        </p>
        <p>
            <input type="submit" value="Search">
        </p>
    </form> 
<?php

$searchTerm = $_POST['search_term'];

// if (count($_POST)) {
//     print_r($_POST);
//     print("<br> My search term ".$searchTerm);
// } 
?>

<table border="1">
<?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "",
    'oauth_access_token_secret' => "",
    'consumer_key' => "",
    'consumer_secret' => ""
);

$requestMethod = "GET";
// $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
// $getfield = '?screen_name=sojourn_ceil&count=20';
// $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$url2 = "https://api.twitter.com/1.1/search/tweets.json";
$requestMethod = "GET";
$getfield = '?q='.urlencode('#'.$searchTerm).'&count=500&tweet_mode=extended&result_type=recent';
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
        echo "<tr><td><h6>".$i." ".($item['source']) . " </td><td>  " . 
        trim(preg_replace('/\s+/', ' ', $item['full_text'])) . "\n </br></h6></td></tr>";
        //print_r($item);

}
?>
</table>