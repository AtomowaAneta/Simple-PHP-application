<?php
if(isset($_FILE['image'])){
	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode(".",$_FILES['image']['name'])));
	$extensions = array("jpg","jpeg","png");
	
	if (!(in_array($file_ext, $extensions))) {
		$errors[] = "This extension is forbidden";
	}
	
	if ($file_size > 2097152) {
		$errors[] = "File must have 2 MB";
	}
	
	empty($errors) ? move_uploaded_file($file_tmp,"images/".$file_name ) : print($errors);
}

?>
