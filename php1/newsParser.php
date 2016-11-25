<?php
require 'simple_html_dom.php';
$newsArrayTitles = array();
$html = file_get_html('http://www.bbc.com/news');
foreach($html->find('a[class="title-link"]') as $link){	
	   $title = $link -> first_child();		
	  $newsArrayTitles[] = array('Title' => $title -> plaintext, 'Link' => $link -> href);
	 }
echo json_encode(array('newsTitles' => $newsArrayTitles));
	
   
?>