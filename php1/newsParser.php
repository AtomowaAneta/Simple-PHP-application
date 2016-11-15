<?php
ini_set('display_errors', 'on'); 
include_once('simple_html_dom.php');



$htmls =  file_get_html('http://info.vilesilencer.com/top');    
foreach($htmls->find('a[rel="nofollow"]') as $e):
    $test = $e->href;
    $url  = array( $test );
    $html = array();
    foreach( $url as $key=>$value ) { 
       // get html plain-text for webpage & assign to html array.
       if (urlOk(trim($value))) {
           $html = file_get_html( trim($value) ); 
           echo $html->find('title', 0)->innertext;
           echo "<br />";
       } else {
         echo 'Error: URL '.$value.' doesn\'t exist.<br />';
       }
}     
endforeach; 
?>