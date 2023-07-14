$(document).ready(function () {
    $('#form-signup').submit(function (e) {
        const data = {
            name: $('#name').val(),
            lastname: $('#lastname').val(),
            email: $('#email').val(),
            password: $('#password').val(),
            confirmed: $('#confirmed').val()
        };
        $.post('../controllers/signupController.php', data, function(response){
            if(response == 'done'){
                swal("Proceso completado", "Usuario registrado exitosamente", "success");
            }else{
                swal("Error", response, "error");
            }
            //$('#rep').html(response);
            //console.log(response);
        });
        e.preventDefault();
    })
});