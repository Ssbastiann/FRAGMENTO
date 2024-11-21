
<?php
    include("clases/Modelo.php");

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Crear una instancia de la clase Logica
        $objLogica = new Logica();

        // Llamar al método para registrar al cliente
        $result =$objLogica->RegistroCliente($name, $email);
        if($result){
            ?><script>alert("Listo cliente registrado");</script><?php        
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="login-header">
        <a href="index.php" class="login-header">
            <img src="img/fragmento_header.png" alt="Logotipo de FRAGMENTO" title="Logotipo de FRAGMENTO" class="login-logo">
        </a>
    </div>
    <div class="div-section">
        <section class="login-section">
            <h1>REGISTRARSE</h1>
            <p>Regístrate para recibir ofertas o actualizaciones.</p>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" placeholder="Ingresa tu correo" name="email" required>
                </div>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" placeholder="Ingresa tu nombre" name="name" required>
                </div>
                <button type="submit" >Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>