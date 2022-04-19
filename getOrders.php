<?php

	if($_SERVER['REQUEST_METHOD']=='GET'){

		require_once 'data/db.php';

		$result = getOrders();

		echo json_encode($result);
 
	}

?>