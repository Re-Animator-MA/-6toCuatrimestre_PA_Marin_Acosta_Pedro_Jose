<?php
    include("conexion.php");

    if($_SERVER['REQUEST_METHOD']=== "POST"){
        $tarea = trim($_POST['tarea_nueva']);
        $sql = "INSERT INTO tareas (descripcion, completada) VALUES (?, 0)";
        $stmt = $conexion -> prepare($sql);
        $stmt -> bind_param("s", $tarea);

        if($stmt->execute()){
            echo "Tarea Guardada";
        }else{
            echo "Error al guardar".$conexion->error;
        }
    }
?>