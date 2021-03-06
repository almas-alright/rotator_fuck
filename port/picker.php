<?php

$site = simplexml_load_file("../data/site.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
$page = simplexml_load_file("../data/page.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
$post = simplexml_load_file("../data/post.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
$slider = simplexml_load_file("../data/slider.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
$thumbnail = simplexml_load_file("../data/thumbnail.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
$sidebar = simplexml_load_file("../data/sidebar.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");

function xml_to_array($xml) {
    $newpack = array();
    foreach ($xml->children() as $child) {
        array_push($newpack, (array) $child);
    }
    return $newpack;
}

$xml = array(
    'site' => $site,
    'page' => xml_to_array($page),
    'post' => xml_to_array($post),
    'slider' => xml_to_array($slider),
    'thumbnail' => xml_to_array($thumbnail),
    'sidebar' => xml_to_array($sidebar)
);
echo utf8_encode(json_encode($xml));
