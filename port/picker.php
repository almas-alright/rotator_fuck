<?php

$page = simplexml_load_file("../data/page.xml", 'SimpleXMLElement', LIBXML_NOCDATA) or die("Error: Cannot create object");
$post = simplexml_load_file("../data/post.xml") or die("Error: Cannot create object");
$slider = simplexml_load_file("../data/slider.xml") or die("Error: Cannot create object");
$thumbnail = simplexml_load_file("../data/thumbnail.xml") or die("Error: Cannot create object");
$sidebar = simplexml_load_file("../data/sidebar.xml") or die("Error: Cannot create object");

function xml_to_array($xml) {
    $newpack = array();
    foreach ($xml->children() as $child) {
        array_push($newpack, (array) $child);
    }
    return $newpack;
}

$xml = array(
    'page' => xml_to_array($page),
    'post' => xml_to_array($post),
    
);
echo utf8_encode(json_encode($xml));
