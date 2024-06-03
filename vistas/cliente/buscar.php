<?php include_once '../templates/header.php'; ?>

<h1 class="text-center">Formulario de clientes</h1>
<div class="row justify-content-center">
    <form action="/02JUN2024_CRUD/controladores/cliente/buscar.php" method="GET" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_nombre">Nombre del cliente</label>
                <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_apellido">Apellido del cliente</label>
                <input type="text" name="cliente_apellido" id="cliente_apellido" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_nit">NIT del cliente</label>
                <input type="number" name="cliente_nit" id="cliente_nit" step="1" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_telefono">Teléfono del cliente</label>
                <input type="tel" name="cliente_telefono" id="cliente_telefono" step="1" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-info w-100"><i class="bi bi-search me-2"></i>Buscar</button>
            </div>
        </div>
    </form>
</div>

<?php include_once '../templates/footer.php'; ?>



   