<?php require_once "../Conectividad/conexion";?>

<div class="card">
    <form action="usuarios/save.php" method="POST">
        <div class="form-group">
            <label><i class="fas fa-user"></i>Mesa</label>
            <input type="text" name="mesa" required>
        </div>

        <div class="form-group">
            <label><i class="fas fa-user"></i>Cliente</label>
            <input type="text" name="cliente" required>
        </div>

        <div class="form-group">
            <label><i class="fas fa-envelope"></i> pedido_id</label>
            <input type="number" name="pedido_id">
        </div>

        <div class="form-group">
            <label><i class="fas fa-envelope"></i> Nombre del platillo</label>
            <input type="text" name="nombre_platillo">
        </div>
        
        <div class="form-group">
            <label><i class="fas fa-envelope"></i> Cantidad del platos</label>
            <input type="number" name="cantidad">
        </div>
            
        <div class="form-group">
            <label><i class="fas fa-envelope"></i> precio</label>
            <input type="number" name="precio">
        </div>
        
        <div class="form-group">
            <label><i class="fas fa-envelope"></i> Total</label>
            <input type="number" name="toal">
        </div>
        <div class="form-group">
            <label><i class="fas fa-calendar"></i> Fecha</label>
            <input type="date" name="fecha">
        </div>

        
        <div class="form-actions">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Guardar
            </button>
            <a href="usuarios/index.php" class="btn btn-secondary">
                <i class="fas fa-times"></i> Cancelar
            </a>
        </div>
    </form>
</div>

