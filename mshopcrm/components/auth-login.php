<?php
	include('connect-database.php');
	$pin = $_GET['pin'];
	$password = $_GET['password'];

	$query = mysqli_query($conn, "SELECT * FROM `users_crm` WHERE `pin`='$pin'");
	$verify = mysqli_num_rows($query);

	if($verify !== false){
		$object = mysqli_fetch_object($query);
		$hash_db = $object->password;

		if (password_verify($password, $hash_db)) { 
			session_start();

			$_SESSION['id_user'] = $object->id;
			$_SESSION['name_user'] = $object->nome;
			$_SESSION['image_user'] = $object->image;
			$_SESSION['level_user'] = $object->level;

			header("Location: ../index");
		}else{
			header("Location: ../login");
		}
	}else{
		header("Location: ../login");
	}
?>