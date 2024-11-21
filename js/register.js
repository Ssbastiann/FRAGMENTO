
function RegistroCliente() {
    // event.preventDefault();
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    $.ajax({
        url: "http://localhost/fragmento/api/Core.php",
        type: 'POST',
        data: {
            RegistroCliente: 1,                         
            name:name,
            email:email
        },
        dataType: 'json',
        success: function(response) {
            console.log(response);
            alert("Guardado con éxito.");
            window.location.href = "register.php";
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
            alert("El correo ya se encuentra registrado.");
            window.location.href = "register.php";
        }
    });
}