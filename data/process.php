<?php
require_once('config.php');
?> 
<?php
 
if(isset($_POST)){

	$firstname 		= $_POST['firstname']; 
	$lastname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$gender			= $_POST['gender'];
	$password 		= $_POST['password'];

		$sql = "INSERT INTO users (firstname, lastname, email, gender, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $gender, $password]);
		
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
} 