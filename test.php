<?php
require_once("./libs/htmldom/simple_html_dom.php");

echo "_________________<br />";
					
// $data = '<br>Each<br/>New<br />Line';
$ip = $_SERVER['REMOTE_ADDR'];

// $data=file_get_html("http://whatismyipaddress.com/ip/$ip");
// echo $data=="";
// $new  = strip_tags($data, '<td>');
// var_dump($new);  // OUTPUTS string(21) "<br>EachNew<br />Line"

// Create DOM from URL or file
// $html = file_get_html('http://www.example.com/');
$html = file_get_html("http://whatismyipaddress.com/ip/$ip");
// $html = file_get_html("http://www.ip-tracker.org/locator/ip-lookup.php?ip=$ip");
// Find all images 
foreach($html->find('img') as $element) 
       echo $element->src . '<br>';
// Find all links 
foreach($html->find('a') as $element) 
       echo $element->href . '<br>';

// // Create DOM from string
// $html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');
// $html->find('div', 1)->class = 'bar';
// $html->find('div[id=hello]', 0)->innertext = 'foo';
// echo $html;

// echo file_get_html('http://www.google.com/')->plaintext;

echo "<br />_________________";
?>