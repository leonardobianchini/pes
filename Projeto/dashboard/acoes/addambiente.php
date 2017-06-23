<?php
    include "../../conectabd.php";

    
    
    $sql = "INSERT INTO local (nome, rua, bairro,cidade,tipo,hora_abre,hora_fecha)
        VALUES ('".$_POST['nome']."','".$_POST['rua']."','".$_POST['bairro']."','".$_POST['cidade']."','".$_POST['tipo']."','".$_POST['hora_abre']."','".$_POST['hora_fecha']."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }





?>