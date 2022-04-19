<?php

	try {
		$connection = new PDO('mysql:host=localhost;dbname=midterm', 'root', '');
	} catch(PDOException $e){
		echo $e->getMessage();
	}

	function makeconnection(){
		$cn=mysqli_connect("localhost","root","","midterm");
		if(mysqli_connect_errno())
		{
			echo "failed to connect to mysqli:".mysqli_connect_error();
		}
		return $cn;
	}

	function getAll(){
		global $connection;
		$query = $connection->prepare("select * from users");
		$query->execute();

		$results = $query->fetchAll();
		return $results;
	}

 
	function getAllmanga(){
		global $connection;
		$query = $connection->prepare("select * from manga");
		$query->execute();

		$results = $query->fetchAll();
		return $results;
	}

	function getAllOrdersforHTML(){
		global $connection;
		$query = $connection->prepare("select * from shipping_manga");
		$query->execute();

		$results = $query->fetchAll();
		return $results;
	}

	function seeMymanga($user_id){
		global $connection;
		$query=$connection->prepare("


		select uc.publisherid as id, c.manga_title, c.old_price
		from mymanga uc, manga c
		where uc.publisherid = c.publisherid and uc.publisherid = :usid

		");

		$query->execute(array("usid" => $user_id));
		$result=$query->fetchAll();
		return $result;
	}


	function addStud($name, $age, $city){
		global $connection;
		$query = $connection->prepare("insert into users(firstname, lastname, email, gender) VALUES(:n, :a, :c)");
		$rows = $query->execute(array(":n"=>$name, ":a"=>$age, ":c"=>$city));

		return $rows>0;
	}

	function addCourse($name, $price, $course_code){
		global $connection;
		$query = $connection->prepare("insert into course(name, price, course_code) VALUES(:n, :a, :c)");
		$rows = $query->execute(array(":n"=>$name, ":p"=>$price, ":c"=>$course_code));
		return $rows>0;
	}

	function deleteStud($id){
		global $connection;
		$query = $connection->prepare("delete from users where id=:sid");
		$rows = $query->execute(array("sid"=>$id));

		return $rows>0;
	}

	function deleteCourse($id){
		global $connection;
		$query = $connection->prepare("delete from course where id=:sid");
		$rows = $query->execute(array("sid"=>$id));

		return $rows>0;
	}

	function getOneUser($mail){
		global $connection;
		$query = $connection->prepare("SELECT * from users where email=:sid");
		$rows = $query->execute(array("sid"=>$mail));
		$result = $query->fetch();
		return $result;
	}
	
	function getOneManga($id){
		global $connection;
		$query = $connection->prepare("select * from manga where publisherid=:sid");
		$rows = $query->execute(array("sid"=>$id));
		$result = $query->fetch();
		return $result;
	}

	function updateStudent($id, $firstname, $lastname,  $password){
		global $connection;
		$query = $connection->prepare("
			update users
			SET firstname=:n, lastname=:a, password=:c
			WHERE id=:sid
			");
		$rows = $query->execute(array(":n"=>$firstname, ":a"=>$lastname, ":c"=>$password, "sid"=>$id));
		return $rows>0;
	}

	function updateCourse($id, $name, $price){
		global $connection;
		$query = $connection->prepare("
			update course
			SET name=:n, price=:p
			WHERE id=:sid
			");
		$rows = $query->execute(array(":n"=>$name, ":p"=>$price, "sid"=>$id));
		return $rows>0;
	}

	function updateManga($manga_isbn, $manga_title, $manga_author, $manga_descr, $old_price, $publisherid){
		global $connection;
		$query = $connection->prepare("
			UPDATE manga
			SET manga_isbn=:is, manga_title=:t, manga_author=:a, manga_descr=:d,  old_price:=p
			WHERE publisherid=:pub
			");
		$rows = $query->execute(array(":is"=>$manga_isbn,":t"=>$manga_title, ":a"=>$manga_author, ":d"=>$manga_descr, ":p"=>$old_price, "pub"=>$publisherid));
		return $rows>0;
	}
 

	function buyManga($user_id, $user_email, $manga_name, $manga_id){
		global $connection;
		$query = $connection -> prepare("INSERT INTO mymanga(id, manga_title, user_id, user_email, publisherid)
			VALUES(NULL, :m, :u, :e, :d)");
		$rows=$query->execute(array("m"=>$manga_name, "u"=>$user_id, "e"=>$user_email, "d"=>$manga_id));
		return $rows>0;
	}

	function unbuyManga($id){
		global $connection;
		$query = $connection->prepare("DELETE from mymanga where publisherid=:pid");
		$rows = $query->execute(array("pid"=>$id));

		return $rows>0;
	}

	function deleteMangaAdmin($id){
		global $connection;
		$query = $connection->prepare("DELETE from manga where publisherid=:pid");
		$rows = $query->execute(array("pid"=>$id));

		return $rows>0;
	}




	function getAllCountries(){
		global $connection;
		$query=$connection->prepare("SELECT * FROM countries");
		$query->execute();
		$result=$query->fetchAll();
		return $result;
	}
	function getAllOrders($id){
		global $connection;
		$query = $connection->prepare("SELECT * FROM shipping_manga WHERE country_id = :id");
		$query->execute(array("id"=>$id));
		return $query->fetchAll();
	}
	function addOrder($name, $delivery){

		global $connection;

		$query = $connection->prepare("INSERT INTO orders (id, name, order_id) VALUES (NULL, :name, :order_id)");

		$rows = $query->execute(array(
			"name"=>$name,
			"order_id"=>$delivery
		));

		return $rows==1;

	}


	function getOrders(){

		global $connection;

		$query = $connection->prepare("
			SELECT c.id, c.name, c.order_id, ci.name AS cityName, co.id AS countryId, co.name AS countryName  
			FROM orders c
			LEFT OUTER JOIN shipping_manga ci ON ci.id = c.order_id 
			LEFT OUTER JOIN countries co ON co.id = ci.country_id
		");
		$query->execute();

		return $query->fetchAll();
	}

	function getOrderByName($name){

		global $connection;

		$query = $connection->prepare("
			SELECT * FROM orders WHERE name = :name
		");
		
		$query->execute(array("name"=>$name));
		$result = $query->fetchAll();

		return sizeof($result)!=0;//1!=0 0!0

	}	

	function deleteOrder($id){

		global $connection;

		$query = $connection->prepare("DELETE FROM orders WHERE id = :id");
		$rows = $query->execute(array("id"=>$id));

		return $rows==1; 

	}

	function filterTable($query){
		$connect = mysqli_connect("localhost", "root", "", "midterm");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}
	

	class DBcourses{

		private $host = "localhost";
		private $user = "root";
		private $password = "";
		private $database = "midterm";
		private $conn;
		
		function connectDB(){
			$conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
			return $conn;
		}

		function __construct(){ 
			$this->conn = $this ->connectDB();
		}

		function query($query){
			$result = mysqli_query($this->conn, $query);
			
			while($row = mysqli_fetch_assoc($result)){
				$resultset[] = $row;
			}

			if(!empty($resultset)){
				return $resultset;
			}
		}

		function sql($sqli){
			$result = mysqli_query($this-> conn, $sqli);
			if($result == TRUE){
				return $result;
			}
		}

		
	}
?>



