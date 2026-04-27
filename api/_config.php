<?php 
$url = "mysql://root:GONdrHmOajznwzNpzZXeyQIHkVYWisOv@turntable.proxy.rlwy.net:33297/railway";
$dbParts = parse_url($url);
$conn = mysqli_connect(
    $dbParts['host'],
    $dbParts['user'],
    $dbParts['pass'],
    ltrim($dbParts['path'], '/'), // Remove leading slash from db name
    $dbParts['port']
);

$websiteTitle = "Zoro";
$websiteUrl = "//{$_SERVER['SERVER_NAME']}/api";
$websiteUri = "//{$_SERVER['SERVER_NAME']}/uhm";
$websiteLogo = $websiteUri . "/files/images/logo_zoro.png";
$contactEmail = "@gmail.com";

$version = "0.2";

$discord = "https://dsc.gg/sailorsammyy";
$github = "https://github.com/sailorsammyy";
$twitter = "https://x.com/sailorsammyy";
 
$disqus = "https://.disqus.com/embed.js";
$api = "https://aniwatch-api-v1-0.onrender.com"; 

$banner = $websiteUrl . "/files/images/banner.png";
?>
