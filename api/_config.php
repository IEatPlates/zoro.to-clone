<?php 
$url = "mysql://root:mdmsQvWiuXBCDFdodPXdlyDebEhKrlTy@metro.proxy.rlwy.net:56987/railway";
$dbParts = parse_url($url);
$conn = mysqli_connect(
    $dbParts['host'],
    $dbParts['user'],
    $dbParts['pass'],
    ltrim($dbParts['path'], '/'), // Remove leading slash from db name
    $dbParts['port']
);

$websiteTitle = "Zoro";
$websiteUrl = "//zoro-to-clone-oj85.vercel.app/api";
$websiteUri = "//zoro-to-clone-oj85.vercel.app/yup";
$websiteLogo = $websiteUri . "/files/images/logo_zoro.png";
$contactEmail = "@gmail.com";

$version = "0.2";

$discord = "https://dsc.gg/sailorsammyy";
$github = "https://github.com/sailorsammyy";
$twitter = "https://x.com/sailorsammyy";
 
$disqus = "https://.disqus.com/embed.js";
$api = "https://aniwatch-api-i02m.onrender.com"; 

$banner = $websiteUrl . "/files/images/banner.png";
?>
