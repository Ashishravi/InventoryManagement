<?php
require '../config/core.php';
require '../config/database.php';

$username = "";
$password = "";

session_start();
$table_name = 'users';

if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}

$database = new Database();
$db = $database->getConnection();

$query = "SELECT * FROM users WHERE username=:username AND password=:password";

$stmt = $db->prepare($query);

$username=htmlspecialchars(strip_tags($username));
$password=htmlspecialchars(strip_tags($password));

$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);


$stmt->execute(array(':username' => $username, ':password' => $password));

if($stmt->rowCount() == 0){
		header('Location: ../index.php?err=1');
	}else{

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_username'] = $row['username'];

        echo $_SESSION['sess_username'];
		session_write_close();

		if( $_SESSION['sess_username'] == "orders"){
			header('Location: ../orders.html.php');
		}elseif( $_SESSION['sess_username'] == "finance"){
            header('Location: ../finance.php');
        }
        elseif( $_SESSION['sess_username'] == "ops"){
            header('Location: ../ops.php');
        }else{
            
        }
		
		
	}





?>