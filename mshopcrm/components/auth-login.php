<?php
    include('../components/connect-database.php');
    include('functions.php');

    $pin_receive = clearString($_POST["pin"]);
    $password_receive = clearString($_POST["password"]);

    if($pin_receive != "" AND $password_receive !== ""){
        $stmt = $conn->prepare("SELECT * FROM users_crm WHERE (pin=:pin)");
        $stmt->bindParam(':pin', $pin_receive);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            if($obj=$stmt->fetch()){
                if(password_verify($password_receive, $obj['password'])){
                    session_start();

                    $_SESSION['id_user'] = $obj['id'];
					$_SESSION['name_user'] = $obj['nome'];
					$_SESSION['image_user'] = $obj['image'];
					$_SESSION['level_user'] = $obj['level'];

                    header("Location: ../index");
                }else{
                    header("Location: ../login?error=ERR00003");
                }
            }
        }else{
            header("Location: ../login?error=ERR00002");
        }
    }else{
        header("Location: ../login?error=ERR00001");
    }
?>