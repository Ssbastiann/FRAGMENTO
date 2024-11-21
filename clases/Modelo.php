<?php
include("BD_conexion.php");

class logica {
    private $objetoSQL;

    public function __construct() {
        $this->objetoSQL = new sql();
    }

    /* registro de cliente */
    public function RegistroCliente($username, $email) {
        // Verificar si el correo ya existe
        $sql_verificar = "SELECT * FROM users WHERE email = '".$email."'";
        $registros = $this->objetoSQL->validarConsulta($sql_verificar);
    
        if ($registros > 0) {
            // Retornar JSON si el correo ya existe
            return json_encode(array("status" => "error", "message" => "Este correo electrónico ya está registrado."));
        } else {
            // Insertar nuevo cliente si el correo no existe
            $sql_insertar = "INSERT INTO users (username, email) VALUES ('".$username."', '".$email."')";
            $this->objetoSQL->sentencia($sql_insertar);
            return json_encode(array("status" => "success", "message" => "Cliente registrado con éxito."));
        }
    }

    // Crear una nueva prenda
    public function createClothes($name, $id_type_clothes, $id_brand, $color, $size, $buy, $price, $stock, $state, $gender, $description) {
        $sql = "INSERT INTO clothes (name, id_type_clothes, id_brand, color, size, buy, price, stock, state, gender, description)
        VALUES ('$name', '$id_type_clothes', '$id_brand', '$color', '$size', '$buy', '$price', '$stock', '$state', '$gender', '$description')";
        $this->objetoSQL->sentencia($sql);
    }

    // Leer todas las prendas
    public function readClothes() {
        $sql = "SELECT * FROM clothes";
        return $this->objetoSQL->consultar($sql);
    }

    // Leer prenda por ID (para editar)
    public function getClothesById($id_clothes) {
        $sql = "SELECT * FROM clothes WHERE id_clothes = $id_clothes";
        return $this->objetoSQL->consultar($sql);
    }

    // Actualizar prenda por ID
    public function updateClothes($id_clothes, $name, $id_type_clothes, $id_brand, $color, $size, $buy, $price, $stock, $state, $gender, $description) {
        $sql = "UPDATE clothes SET 
        name = '$name', 
        id_type_clothes = '$id_type_clothes', 
        id_brand = '$id_brand', 
        color = '$color', 
        size = '$size', 
        buy = '$buy', 
        price = '$price', 
        stock = '$stock', 
        state = '$state', 
        gender = '$gender', 
        description = '$description' 
        WHERE id_clothes = '$id_clothes'";
        $this->objetoSQL->sentencia($sql);
    }

    // Eliminar prenda por ID
    public function deleteClothes($id_clothes) {
        $sql = "DELETE FROM clothes WHERE id_clothes = $id_clothes";
        $this->objetoSQL->sentencia($sql);
    }
}

?>


