$(document).ready(function(){
	
	$.get('../controllers/userProfileController.php', {action: 'getUser'}, function(resData){

		let userData = JSON.parse(resData);
        //console.log(userData);

        $('#fullname').val(`${userData.name} ${userData.last_name}`);
        $('#email').val(`${userData.email}`);
        $('#greeting').text(`Hola, ${userData.name} ${userData.last_name}!`);
        $('#countRev').text(userData.amount_reservation);
	});

    
	
});

function updateData()
{
        const setdata = {
            action: 'update',
            newname: $('#inputNewname').val(),
            newlastname: $('#inputNewlastname').val(),
            newpassword: $('#inputNewpassword').val(),
            confirmpassword: $('#inputconfirm').val()
        }

        $.post('../controllers/userProfileController.php', setdata, function(response){
            setTimeout(hideModal(), 5000); 
            
            let infoaction = JSON.parse(response);
            console.log(infoaction);

            swal("Informacion de actualizacio", infoaction.message, "info")
            .then((value) => {
                close_session();
            });
           
        });
};

function hideModal()
{
    $('#exampleModal').modal('hide')
}

function close_session(){
    window.location.href = "../controllers/logoutController.php";
}