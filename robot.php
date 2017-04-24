<?php
// error_reporting(0);
include ('inc/connect.php');

/* ==> Generating Robots.txt starts HERE <== */
header("Content-Type:text/plain");
echo 'User-agent: *

Sitemap: '.$site_url.'/file-index.xml'Disallow: /privacy-policy','Disallow: /dmca-notice', 'Disallow: /contact-us', 'Disallow: /disclaimer', 'Disallow: /faq';

?>
