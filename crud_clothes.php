<?php
include("clases/Modelo.php");


// Manejo de acciones del CRUD
$crud = new Logica();

// Inicializamos variables para el formulario
$id_clothes = "";
$name = "";
$id_type_clothes = "";
$id_brand = "";
$color = "";
$size = "";
$buy = "";
$price = "";
$stock = "";
$state = "";
$gender = "";
$description = "";

// Si se selecciona la acción de editar, cargamos los datos de la prenda
if (isset($_POST['edit'])) {
    $prendaSeleccionada = $crud->getClothesById($_POST['id_clothes']);
    if ($prendaSeleccionada) {
        $prenda = $prendaSeleccionada[0]; // Obtenemos el primer (y único) resultado
        $id_clothes = $prenda['id_clothes'];
        $name = $prenda['name'];
        $id_type_clothes = $prenda['id_type_clothes'];
        $id_brand = $prenda['id_brand'];
        $color = $prenda['color'];
        $size = $prenda['size'];
        $buy = $prenda['buy'];
        $price = $prenda['price'];
        $stock = $prenda['stock'];
        $state = $prenda['state'];
        $gender = $prenda['gender'];
        $description = $prenda['description'];
    }
}

// Crear o actualizar prenda
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['create'])) {
        // Crear nueva prenda
        $crud->createClothes($_POST['name'], $_POST['id_type_clothes'], $_POST['id_brand'], $_POST['color'], $_POST['size'], $_POST['buy'], $_POST['price'], $_POST['stock'], $_POST['state'], $_POST['gender'], $_POST['description']);
    } elseif (isset($_POST['update'])) {
        // Actualizar prenda existente
        $crud->updateClothes($_POST['id_clothes'], $_POST['name'], $_POST['id_type_clothes'], $_POST['id_brand'], $_POST['color'], $_POST['size'], $_POST['buy'], $_POST['price'], $_POST['stock'], $_POST['state'], $_POST['gender'], $_POST['description']);
    } elseif (isset($_POST['delete'])) {
        // Eliminar prenda
        $crud->deleteClothes($_POST['id_clothes']);
    }
}

// Obtener prendas para la visualización
$prendas = $crud->readClothes();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Prendas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="login-header">
        <a href="index.php" class="login-header">
            <img src="img/fragmento_header.png" alt="Logotipo de FRAGMENTO" title="Logotipo de FRAGMENTO" class="login-logo">
        </a>
    </div>
    <h1>Gestión de Inventario</h1>

    <form action="" method="POST">
        <input type="hidden" name="id_clothes" value="<?php echo $id_clothes; ?>">
        <input type="text" name="name" placeholder="Nombre de la prenda" value="<?php echo $name; ?>" required>
        <input type="number" name="id_type_clothes" placeholder="Tipo de prenda" value="<?php echo $id_type_clothes; ?>" required>
        <input type="number" name="id_brand" placeholder="Marca" value="<?php echo $id_brand; ?>" required>
        <input type="text" name="color" placeholder="Color" value="<?php echo $color; ?>" required>
        <input type="text" name="size" placeholder="Tamaño" value="<?php echo $size; ?>" required>
        <input type="number" step="0.01" name="buy" placeholder="Costo" value="<?php echo $buy; ?>" required>
        <input type="number" step="0.01" name="price" placeholder="Precio de venta" value="<?php echo $price; ?>" required>
        <input type="number" name="stock" placeholder="Inventario" value="<?php echo $stock; ?>" required>
        <input type="text" name="state" placeholder="Estado" value="<?php echo $state; ?>" required>
        <input type="text" name="gender" placeholder="Género" value="<?php echo $gender; ?>" required>
        <textarea name="description" placeholder="Descripción"><?php echo $description; ?></textarea>

        <?php if ($id_clothes): ?>
            <button type="submit" name="update">Actualizar Prenda</button>
        <?php else: ?>
            <button type="submit" name="create">Agregar Prenda</button>
        <?php endif; ?>
    </form>

    <h2>Listado de Prendas</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Color</th>
            <th>Tamaño</th>
            <th>Costo</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Estado</th>
            <th>Género</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($prendas as $prenda) { ?>
        <tr>
            <td><?php echo $prenda['id_clothes']; ?></td>
            <td><?php echo $prenda['name']; ?></td>
            <td><?php echo $prenda['id_type_clothes']; ?></td>
            <td><?php echo $prenda['id_brand']; ?></td>
            <td><?php echo $prenda['color']; ?></td>
            <td><?php echo $prenda['size']; ?></td>
            <td><?php echo $prenda['buy']; ?></td>
            <td><?php echo $prenda['price']; ?></td>
            <td><?php echo $prenda['stock']; ?></td>
            <td><?php echo $prenda['state']; ?></td>
            <td><?php echo $prenda['gender']; ?></td>
            <td><?php echo $prenda['description']; ?></td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="id_clothes" value="<?php echo $prenda['id_clothes']; ?>">
                    <button type="submit" name="edit">Editar</button>
                    <button type="submit" name="delete">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
