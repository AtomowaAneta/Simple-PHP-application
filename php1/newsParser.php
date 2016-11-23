<?php

require 'simple_html_dom.php';

$newsArrayTitles = array();
$newsArrayLinks = array('newsTitles' => array());
$html = file_get_html('http://www.bbc.com/news');
$title = $html->find('title', 0);
$elementOfInterest = 'span[class="title-link__title-text"]';



foreach($html->find($elementOfInterest) as $e){
	
	  $newsArrayTitles[] =  array('Title' => $e -> plaintext );
	
	 }
echo json_encode(array('newsTitles' => $newsArrayTitles));
	








   



?>