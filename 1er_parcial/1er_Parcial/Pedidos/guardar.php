<?php require_once "../Conectividad/conexion";

    if ($_SERVER["REQUEST_METHOD"] != "POST"){
        header("Location: index.php");
        exit;
    }
    $mesa = trim($_POST["mesa"] ?? "");
    $cliente = trim($_POST["cliente"] ?? "");
    $total = intval($_POST["total"] ?? "");
    $fecha =  trim($_POST["fecha"] ?? "");

    if($mesa === "" || $cliente === "" || $total === ""){
        header("Location: crear.php?error=" . urlencode("Mesa, Cliente y Total son obligatorios"));
        exit;
    }
    $stmt = $conn -> prepare("INSERT INTO pedidos (mesa, cliente, total, fecha,) 
    VALUES(?, ?, ?, ?)");
    $stmt -> bind_param("ssis", $mesa, $cliente, $total, $fecha);


    $pedido_id = intval($_POST["pedido_id"] ?? "");
    $nombre_platillo = trim($_POST["nombre_platillo"]?? "");
    $

    if($stmt -> execute()){
        header("Location: index.php?success=" . urlencode("Pedido añadido exitosamente."));
    }else{
         header("Location: index.php?success=" . urlencode("Error al añadir el pedido."));
    }
    $stmt -> close();
    $conn -> close();
    exit;