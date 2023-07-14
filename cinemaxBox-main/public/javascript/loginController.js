$(document).ready(function () {
    $('#form-signIn').submit(function (e) {
        const data = {
            email: $('#email').val(),
            password: $('#password').val()
        };
        $.post('../controllers/loginControllers.php', data, function(response){
            // $('#rep').html(response);
            if(response == 'done'){
                window.location.href = "account.php";
            }else{
                //swal(response);
                swal("Error", response, "warning");
            }
                    
        });
        e.preventDefault();
    })
});