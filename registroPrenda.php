<?php
include("clases/sql.php");

// Procesamiento del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    include("clases/sql.php");
    $objetoSQL = new sql();
    
    $name = $_POST['name'];
    $id_type_clothes = $_POST['id_type_clothes'];
    $id_brand = $_POST['id_brand'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $buy = $_POST['buy'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $state = $_POST['state'];
    $gender = $_POST['gender'];
    $description = $_POST['description'];

    // Llama a la función para registrar la prenda
    $logica->RegistrarPrenda($name, $id_type_clothes, $id_brand, $color, $size, $buy, $price, $stock, $state, $gender, $description);

    // Puedes redirigir a una página de éxito o mostrar un mensaje
    echo "Prenda registrada con éxito.";
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesopinions.css">
    <title>Document</title>
</head>
<body>
    <div class="login-header">
        <a href="index.php" class="login-header">
            <img src="img/fragmento_header.png" alt="Logotipo de FRAGMENTO" title="Logotipo de FRAGMENTO" class="login-logo">
        </a>
    </div>
    <section class="register-clothes">
    <h2>Registrar Prenda</h2>
    <form action="" method="POST">
        <!-- Nombre de la prenda -->
        <div class="form-group">
            <label for="name">Nombre de la Prenda:</label>
            <input type="text" id="name" name="name" placeholder="Ingresa el nombre" required>
        </div>
        
        <!-- Tipo de prenda -->
        <div class="form-group">
            <label for="id_type_clothes">Tipo de Prenda:</label>
            <select id="id_type_clothes" name="id_type_clothes" required>
                <option value="">Selecciona el tipo</option>
                <!-- Opciones dinámicas según tipos de prendas en tu base de datos -->
                <option value="1">Camiseta</option>
                <option value="2">Pantalón</option>
                <option value="3">Hoddie</option>
                <option value="4">Polar</option>
                <option value="5">T-Shirt</option>
                <option value="6">Pants</option>
                <option value="7">Tracksuit</option>
                <option value="8">Overall</option>
                <option value="9">Jacket</option>
                <option value="10">Accessories</option>
                <option value="11">Shirt</option>
                <option value="12">Sweater</option>
                <option value="13">Blazer</option>
                <option value="14">Shorts</option>
                <option value="15">Skirt</option>
                <option value="16">Dress</option>
                <option value="17">Coat</option>
                <option value="18">Vest</option>
                <option value="19">Socks</option>
                <option value="20">Shoes</option>
                <option value="21">Scarf</option>
                <option value="22">Gloves</option>
                <option value="23">Beanie</option>
                <!-- Más opciones -->
            </select>
        </div>
        
        <!-- Marca -->
        <div class="form-group">
            <label for="id_brand">Marca:</label>
            <select id="id_brand" name="id_brand" required>
                <option value="">Selecciona la marca</option>
                <!-- Opciones dinámicas según marcas en tu base de datos -->
                <option value="">Selecciona la marca</option>
                <option value="Nike">Nike</option>
                <option value="Adidas">Adidas</option>
                <option value="Zara">Zara</option>
                <option value="H&M">H&M</option>
                <option value="Puma">Puma</option>
                <option value="Levi's">Levi's</option>
                <option value="Uniqlo">Uniqlo</option>
                <option value="Tommy Hilfiger">Tommy Hilfiger</option>
                <option value="Calvin Klein">Calvin Klein</option>
                <option value="Under Armour">Under Armour</option>
                <option value="Reebok">Reebok</option>
                <option value="Gap">Gap</option>
                <option value="Forever 21">Forever 21</option>
                <option value="ASOS">ASOS</option>
                <option value="Guess">Guess</option>
                <option value="New Balance">New Balance</option>
                <option value="Abercrombie & Fitch">Abercrombie & Fitch</option>
                <option value="Converse">Converse</option>
                <option value="Vans">Vans</option>
                <option value="American Eagle">American Eagle</option>
                <option value="Diesel">Diesel</option>
                <option value="Umbro">Umbro</option>
                <!-- Más opciones -->
            </select>
        </div>

        <!-- Color -->
        <div class="form-group">
            <label for="color">Color:</label>
            <input type="text" id="color" name="color" placeholder="Ingresa el color" required>
        </div>

        <!-- Talla -->
        <div class="form-group">
            <label for="size">Talla:</label>
            <input type="text" id="size" name="size" placeholder="Ingresa la talla" required>
        </div>

        <!-- Precio de compra -->
        <div class="form-group">
            <label for="buy">Precio de Compra:</label>
            <input type="number" id="buy" name="buy" step="0.01" placeholder="Ingresa el precio de compra" required>
        </div>

        <!-- Precio de venta -->
        <div class="form-group">
            <label for="price">Precio de Venta:</label>
            <input type="number" id="price" name="price" step="0.01" placeholder="Ingresa el precio de venta" required>
        </div>

        <!-- Stock -->
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" placeholder="Cantidad en stock" required>
        </div>

        <!-- Estado -->
        <div class="form-group">
            <label for="state">Estado:</label>
            <select id="state" name="state" required>
                <option value="">Selecciona el estado</option>
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
            </select>
        </div>

        <!-- Género -->
        <div class="form-group">
            <label for="gender">Género:</label>
            <select id="gender" name="gender" required>
                <option value="">Selecciona el género</option>
                <option value="m">Masculino</option>
                <option value="f">Femenino</option>
                <option value="x">Unisex</option>
            </select>
        </div>

        <!-- Descripción -->
        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" placeholder="Describe la prenda" required></textarea>
        </div>

        <!-- Botón para registrar -->
        <button type="submit">Registrar Prenda</button>
    </form>
</section>

</body>
</html>