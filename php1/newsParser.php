<?php
require 'simple_html_dom.php';

$newsArray = [];
$html = file_get_html('http://www.bbc.com/news');
$title = $html->find('title', 0);


echo $title->plaintext."<br>\n";
echo "</br> </br> </br>";
foreach($html->find('span.title-link__title-text') as $e){
	 array_push($newsArray, $e);
	}
foreach ($newsArray as $key) {
	echo $key . "</br>" ;
}


   



?>