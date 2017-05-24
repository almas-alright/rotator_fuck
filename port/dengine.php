<?php
//https://www.codexworld.com/convert-array-to-xml-in-php/
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$xml= simplexml_load_file("data/note.xml") or die("Error: Cannot create object");
//
//foreach($xml->children() as $books) {
//    echo $books->title . ", ";
//    echo $books->author . ", ";
//    echo $books->year . ", ";
//    echo $books->price . "<br>";
//} 

$_array = array(
    array(
        'img' => 'images/abs.jpg',
        'name' => 'Wellness',
        'title' => 'Check Out This 30-Minute Abs Workout',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '17',
        'content' => 'This class from Grokker hits every inch of your core in half an hour. The secret? Trainer Sarah Kusch uses full body movements that challenge your body while blasting calories. Expect non-traditional movements on every plane, including standing lateral crunches and planks with a tuck. Oh, and these moves will really get your heart rate up, so you’re going to want to grab a towel. ',
    ),
    array(
        'img' => 'images/run.jpg',
        'name' => 'Trending',
        'title' => 'Watch This Why Exercise Is Good For Digestion',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '23',
        'content' => ' You need exercise for a healthy lifestyle, but did you know that it can also improve your digestion? Watch the video to learn how to stimulate your gut, boost your immune system, and even relieve constipation and bloating. ',
    ),
    array(
        'img' => 'images/sore.png',
        'name' => 'Life',
        'title' => 'When To Skip Working Out',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'content' => ' We all have those days when we literally can’t imagine making moves to the gym. Whether it’s that time of the month or you’ve lost your motivation, it’s better to take a rest day. ',
    ),
    array(
        'img' => 'images/5things.png',
        'name' => 'Viral',
        'title' => 'These 5 Exercise Moves You May Be Doing Wrong',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '19',
        'content' => ' You’re proud of your plank. You admire your squat form. You know your bicep curls look good. But could you be doing these common exercises all wrong? It’s totally possible, says.... ',
    ),
    array(
        'img' => 'images/wedding.jpg',
        'name' => 'Trending',
        'title' => 'Fairy Tale Wedding Destinations',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '49',
        'content' => ' As a little girl I often envisioned my wedding as the typical princess fairy tale…lavish, large, and complete with my own Prince Charming. When it came time to actually plan my wedding at thirty, my idea of the perfect wedding... ',
    ),
    array(
        'img' => "images/humid.jpg",
        'name' => "Viral",
        'title' => 'The Truth About Humidifiers',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '5',
        'content' => ' Of course, a lot of things are harmful when used improperly. The biggest concern with humidifiers may be operator error—or the fact that most of us don’t keep our machines clean. A past report from the Environmental Protection Agency recommends washing out your humidifier every third day. ',
    ),
    array(
        'img' => 'images/taupe.jpg',
        'name' => 'Trending',
        'title' => '6 Sophisticated Ways To Paint With Taupe',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '31',
        'content' => ' The color taupe in nature is often linked with hues of sand and stone with water from nearby streams. Mix these elements to curate a nature inspired space to evoke a feeling of serenity and peace. ',
    ),
    array(
        'img' => 'images/apples.jpg',
        'name' => 'Trending',
        'title' => 'Is Apple Cider Vinegar Healthy For You',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'content' => ' Apple cider vinegar—or “ACV,” as it’s often referred to among enthusiasts—is having its superfood moment. Made from fermented apple sugars, ACV’s benefits range from helping with type-2 diabetes to whitening teeth. ',
    ),
    array(
        'img' => 'images/cake.jpg',
        'name' => 'Trending',
        'title' => 'Unique Wedding Cake Toppers',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '63',
        'content' => ' That special day is around the corner, and as the finishing touches are completed on that perfect bridal gown, its
	 time to focus on the little details that make your wedding day as unique to your guests as it is unique to you ',
    ),
    array(
        'img' => 'images/arctic.jpg',
        'name' => 'Wellness',
        'author' => 'Esther Holloway',
        'date' => 'Feb 28th, 2017',
        'comcount' => '27',
        'content' => ' When it comes to picking a destination for a cruise, most of us would assume an island location a no brainer, but what about cruising the artic ocean, surrounded by snow capped mountains, icy waters, and artic wildlife? These following locations will have you exploring your options next time you plan a trip. ',
    )
);

//function defination to convert array to xml
function array_to_xml($array, &$xml_container_name, $child_name) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            if (!is_numeric($key)) {
                $subnode = $xml_container_name->addChild("$key");
                array_to_xml($value, $subnode, $child_name);
            } else {
                $subnode = $xml_container_name->addChild($child_name);
                array_to_xml($value, $subnode, $child_name);
            }
        } else {
            $xml_container_name->addChild("$key", htmlspecialchars("$value"));
        }
    }
}

//creating object of SimpleXMLElement
$xml_content = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?><thumbnails></thumbnails>");

//function call to convert array to xml
//array_to_xml($_array, $xml_content, "thumb");

//saving generated xml file
//$xml_file = $xml_content->asXML('data/thumbnail.xml');

//success and error message based on xml creation
if ($xml_file) {
    echo 'XML file have been generated successfully.';
} else {
    echo 'XML file generation error.';
}