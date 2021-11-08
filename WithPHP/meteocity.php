<?php


$html = file_get_contents('https://www.meteocity.com/france/lille-v2998324');

$start = stripos($html, '<head>');

$end = stripos($html, '<script', $offset = $start);

$length = $end - $start;

$htmlSection = substr($html, $start, $length);

preg_match('/<meta property="og:title" content="(.+)\/>/', $htmlSection, $matches);

echo $matches[1];

$result = str_replace(array('"'), ' ', $matches[1]);
echo $result;
