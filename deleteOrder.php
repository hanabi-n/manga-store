<?php

	$res = array();
	$res['message'] = "Couldn't delete order";
	$res['status'] = "ERROR";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['id'])){

			require_once 'data/db.php';

			deleteOrder($_POST['id']);

			$res['message'] = "Order deleted successfully";
			$res['status'] = "OK";

		}

	}

	echo json_encode($res);

?>