<?php
    include('connectDB.php');

	$nome = $_POST['nome-usuario'];
	$pin = $_POST['pin-usuario'];
	$senha = password_hash($_POST['senha-usuario'], PASSWORD_DEFAULT);
	$imagem = $_POST['imagem-usuario-64'];
	$level = $_POST['level-usuario'];
    $nome_imagem = "";

    if($imagem == ""){
        $imagem = "default";
    }

    $query = mysqli_query($conn, "SELECT * FROM `dados-usuarios` WHERE `pin`='$pin'");
    $verify = mysqli_num_rows($query);

    if($verify === 0){
        $folder = "../assets/img/users/";
        if($imagem === "default"){
            $nome_imagem = "user-default.jpg";
            $temp = imagecreatefromjpeg($imagem);
            
            $query = mysqli_query($conn, "INSERT INTO `dados-usuarios` (`nome`, `pin`, `senha`, `imagem`, `level`) VALUES ('$nome', '$pin', '$senha', '$nome_imagem', '$level')");

        }elseif(strrpos($imagem, 'image/jpeg') !== false){
            $nome_imagem = $pin.".jpg";
            $temp = imagecreatefromjpeg($imagem);
            
            $query = mysqli_query($conn, "INSERT INTO `dados-usuarios` (`nome`, `pin`, `senha`, `imagem`, `level`) VALUES ('$nome', '$pin', '$senha', '$nome_imagem', '$level')");
            
            imagejpeg($temp, $folder.$nome_imagem);
        }elseif(strrpos($imagem, 'image/png') !== false){
            $nome_imagem = $pin.".png";
            $temp = imagecreatefrompng($imagem);
            
            $query = mysqli_query($conn, "INSERT INTO `dados-usuarios` (`nome`, `pin`, `senha`, `imagem`, `level`) VALUES ('$nome', '$pin', '$senha', '$nome_imagem', '$level')");
            
            imagepng($temp, $folder.$nome_imagem);
        }elseif(strrpos($imagem, 'image/gif') !== false){
            $nome_imagem = $pin.".gif";
            $temp = imagecreatefromgif($imagem);
            
            $query = mysqli_query($conn, "INSERT INTO `dados-usuarios` (`nome`, `pin`, `senha`, `imagem`, `level`) VALUES ('$nome', '$pin', '$senha', '$nome_imagem', '$level')");
            
            imagegif($temp, $folder.$nome_imagem);
        }

        if (is_file($folder.$nome_imagem) === true) {
            echo "Success";
        }
    }
?>