<?php
    require('conecta.php');

    $id = $_GET['id'];

    $consulta = "DELETE from clientes WHERE id_cliente = '$id'";
    
    $conexao->query($consulta);
    
    header("Location: index.php");
?>