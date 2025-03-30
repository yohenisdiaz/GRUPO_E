$(function(){
    // Elimina la clase 'is-invalid' cuando se cambian los valores de los campos
    $("#username, #password").on('change', function(){
        $(this).removeClass('is-invalid');
    });
    
    // Evento para el envío del formulario
    $("#login-form").submit(function(event){
        event.preventDefault(); // Previene el envío del formulario

        var isValidForm = true;  // Variable para controlar si el formulario es válido
        var username = $("#username").val();  // Obtiene el valor del campo username
        var password = $("#password").val();  // Obtiene el valor del campo password

        // Validar si el campo username está vacío
        if(username === "") {
            $("#username").addClass('is-invalid');  // Agrega la clase 'is-invalid' para marcar el error
            isValidForm = false;  // Establece la validez del formulario como falso
        }

        // Validar si el campo password está vacío
        if(password === ""){
            $("#password").addClass('is-invalid');  // Agrega la clase 'is-invalid' para marcar el error
            isValidForm = false;  // Establece la validez del formulario como falso
        }

        // Si el formulario es válido, redirigir a la página home.html
        if(isValidForm){
            // Aquí puedes agregar la validación de usuario y contraseña, como en el ejemplo anterior
            var usuarioCorrecto = "admin";
            var contrasenaCorrecta = "123456";
            
            if (username === usuarioCorrecto && password === contrasenaCorrecta) {
                // Redirige a home.html si la validación es exitosa
                window.location.href = 'home.html';
            } else {
                // Si los datos son incorrectos, muestra un mensaje de error
                alert("Usuario o contraseña incorrectos.");
            }
        }
    })
});
