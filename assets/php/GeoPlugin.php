<?php

/**
* GeoPlugin: Get User Location Information IP Detection
*
* Use the GeoPlugin within your PHP scripts. GeoPlugin returns an array that you can easily parse using PHP.
* Detecting user  location automatically according to their IP address requires that we have access to a
* geoip database to refer to in our programs. GeoPlugin offers that to you remotely which makes the set up
* of GEOIP programs much simpler and faster.
*
* for PHP versions 4 or newer
*
* @author     Suriyaa Kudo <SuriyaaKudoIsc@users.noreply.github.com> (https://bit.ly/Suriyaa)
* @copyright  2015-present Suriyaa Kudo
* @license    Copyright (c)
* @version    1.0
* @source     https://www.developphp.com/video/PHP/Force-File-Download-Dialog-In-Browser-Tutorial
*/

$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_regionName"];
$country = $geo["geoplugin_countryName"];
echo "City: ".$city."<br>";
echo "Region: ".$region."<br>";
echo "Country: ".$country."<br>";
/*
geoplugin_request
geoplugin_status
geoplugin_credit
geoplugin_city
geoplugin_region
geoplugin_areaCode
geoplugin_dmaCode
geoplugin_countryCode
geoplugin_countryName
geoplugin_continentCode
geoplugin_latitude
geoplugin_longitude
geoplugin_regionCode
geoplugin_regionName
geoplugin_currencyCode
geoplugin_currencySymbol
geoplugin_currencySymbol_UTF8
geoplugin_currencyConverter
*/
?>
