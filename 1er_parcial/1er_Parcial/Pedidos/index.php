<?php require_once "../Conectividad/conexion";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1er Parcial</title>
</head>
<body>
    <div class="header">
        <h1><i class="fas fa-book"></i>Pedidos</h1>
        <a href="contactos/crear.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Nuevo pedido
        </a>
    </div>
    <?php 
    if(isset($_GET["success"])):?>
    <div class="alert alert-succes">
        <i class="fas fa-check-circle"></i>
        <?= htmlspecialchars($_GET["success"]) ?>
    </div>
    <?php
        elseif(isset($_GET["error"])): ?>
        <div class="alert alert-danger">
            <i class="fas fa-exclamation-circle"></i>
            <?= htmlspecialchars($_GET["error"]) ?>
        </div>
    <?php endif; ?>
    ?>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mesa</th>
                    <th>Cliente</th>
                    <th>total</th>
                    <th>fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $stmt = $conn -> prepare("SELECT 
                    id, 
                    mesa, 
                    cliente, 
                    total,
                    fecha 
                    FROM pedidos");
                    $stmt -> execute();
                    $result = $stmt ->get_result();
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                        echo "<td>". htmlspecialchars($row["id"]). "</td>";
                        echo "<td>". htmlspecialchars($row["mesa"]). "</td>";
                        echo "<td>". htmlspecialchars($row["cliente"]). "</td>";
                        echo "<td>". htmlspecialchars($row["total"]). "</td>";
                        echo "<td>". htmlspecialchars($row["fecha"]). "</td>";
                        echo "<tr>";
                        echo "<a href='Pedidos/editar.php?id=" . urlencode($row["id"]) . "' class='btn btn-sm btn-warning'><i class='fas fa-edit'></i>Editar</a><br><br>";
                        echo "<a href='Pedidos/borrar.php?id=" . urlencode($row["id"]) . "' class='btn btn-sm btn-danger'><i class='fas fa-trash'></i> Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    $stmt -> close();
                    $conn -> close();
                ?>
            </tbody>
        </table>

    </div>
</body>
</html>