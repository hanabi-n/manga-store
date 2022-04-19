<?php

	$res = array();
	$res['message'] = "Couldn't add order";
	$res['status'] = "ERROR";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['name'])&&$_POST['name']!=""&&isset($_POST['delivery']) ){

			require_once 'data/db.php';

			if(!getOrderByName(trim($_POST['name']))){
	
				addOrder(trim($_POST['name']), $_POST['delivery']);

				$res['message'] = "Order added successfully";
				$res['status'] = "OK";

			}else{

				$res['message'] = "You're already use special code with name \"".$_POST['name']."\"";
				$res['status'] = "ERROR";

			}

		}

	}

	echo json_encode($res);

?>