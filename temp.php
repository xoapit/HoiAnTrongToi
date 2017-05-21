<?php
$jsonurl = "http://samples.openweathermap.org/data/2.5/weather?q=London&appid=b1b15e88fa797225412429c1c50c122a1";
$json = file_get_contents($jsonurl);

$weather= json_decode($json,true);
$coord= json_decode($json);
print_r($weather);
echo $weather['weather'][0]['id'];
?>