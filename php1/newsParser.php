<?php
require 'simple_html_dom.php';
$newsArrayTitles = array();
$newsArrayLinks = array('newsTitles' => array());
$html = file_get_html('http://www.bbc.com/news');
$title = $html->find('title', 0);
$elementOfInterest = 'span[class="title-link__title-text"]';
foreach($html->find('a[class="title-link"]') as $link){	
	   $title = $link -> first_child();		
	  $newsArrayTitles[] = array('Title' => $title -> plaintext, 'Link' => $link -> href);
	 }
echo json_encode(array('newsTitles' => $newsArrayTitles));
	
   
?>