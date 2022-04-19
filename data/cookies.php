<?php 
	
	if(isset($_GET['lang'])){
		setcookie('lang', $_GET['lang'], time()+20*60, "/");
		$_COOKIE['lang'] = $_GET['lang'];
		header("Location: ../index.php");
	}


	if(isset($_GET['lang_manga'])){
		setcookie('lang_manga', $_GET['lang_manga'], time()+20*60, "/");
		$_COOKIE['lang_manga'] = $_GET['lang_manga'];
		header("Location: ../manga.php");
	}

	if(isset($_GET['lang_admin'])){
		setcookie('lang_admin', $_GET['lang_admin'], time()+20*60, "/");
		$_COOKIE['lang_admin'] = $_GET['lang_admin'];
		header("Location: adminPage.php");
	}

	if(isset($_GET['lang_mod'])){
		setcookie('lang_mod', $_GET['lang_mod'], time()+20*60, "/");
		$_COOKIE['lang_mod'] = $_GET['lang_mod'];
		header("Location: moderatorPage.php");
	}

 ?>