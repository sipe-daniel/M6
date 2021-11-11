<?php


$html = file_get_contents('https://www.meteocity.com/france/lille-v2998324');

$start = stripos($html, '<head>');

$end = stripos($html, '<script', $offset = $start);

$length = $end - $start;

$htmlSection = substr($html, $start, $length);
$dom = new DOMDocument;
$dom->loadHTML($htmlSection);

$xpath = new DOMXpath($dom);
$tag = $xpath->query( '//meta[contains(@property,"og:title")]' );
echo $tag[0]->getAttribute('content');
