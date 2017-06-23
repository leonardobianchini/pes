<?php
    include "../../conectabd.php";
    
    $sql = "INSERT INTO evento (titulo,local_id, organizador_id, esporte,horario,descr)
        VALUES ('".$_POST['titulo']."','".$_POST['local']."','".$_POST['organizador']."','".$_POST['esporte']."', '".$_POST['horario']."','".$_POST['descr']."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }





?>