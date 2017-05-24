<?php

$page = simplexml_load_file("../data/page.xml") or die("Error: Cannot create object");
$post = simplexml_load_file("../data/post.xml") or die("Error: Cannot create object");
$slider = simplexml_load_file("../data/slider.xml") or die("Error: Cannot create object");
$thumbnail = simplexml_load_file("../data/thumbnail.xml") or die("Error: Cannot create object");
$sidebar = simplexml_load_file("../data/sidebar.xml") or die("Error: Cannot create object");

$xml = array($page,$post,$slider,$sidebar,$thumbnail);
echo json_encode($xml);
