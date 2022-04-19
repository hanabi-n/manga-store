<?php
require_once('config.php');
require_once('db.php');

 
if(isset($_POST)){ 

	$manga_isbn      = $_POST('manga_isbn');
	$manga_title     = $_POST('manga_title');
	$manga_author    = $_POST('manga_author');
	$manga_image     = $_POST('manga_image');
	$manga_descr     = $_POST('manga_descr');
	$old_price       = $_POST('old_price');
	$promotion       = $_POST('promotion');
	$publisherid     = $_POST('publisherid');

	if(isset($_FILES['manga_image']) && $_FILES['manga_image']['name'] != ""){
		$image = $_FILES['manga_image']['name'];
		$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
		$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
		$uploadDirectory .= $image;
		move_uploaded_file($_FILES['manga_image']['tmp_name'], $uploadDirectory);
	}

		$sql = "INSERT INTO manga (manga_isbn, manga_title, manga_author, manga_image, manga_descr, old_price, promotion, publisherid) VALUES(?,?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$manga_isbn, $manga_title, $manga_author, $manga_image, $manga_descr, $old_price, $promotion, $publisherid]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
} 

?>