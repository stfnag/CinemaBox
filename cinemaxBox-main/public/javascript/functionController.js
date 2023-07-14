$(document).ready(function () {
    

    $('#cinema_show').on('change', function () {
        const data = {
            show_id: $(this).val()
        };
                

        const form = `<div class="mb-3">
            <h2 class="">Informacion de reservacion</h2>
            <label for="ticketCost" class="form-label">Precio ticket $</label>
            <input type="text" class="form-control" id="ticketCost" value="" disabled>
            </div>
            <div class="mb-3">
            <label for="amountTicket" class="form-label">Cantidad de tickets</label>
            <input type="text" class="form-control" id="amountTicket" value="" disabled>
            </div>
            <label for="selectedSeats" class="form-label">Asientos seleccionados</label>
            <input type="text" class="form-control" id="selectedSeats" value="" disabled>
            </div>
            <label for="totalAmount" class="form-label">Monto total $</label>
            <input type="text" class="form-control" id="totalAmount" value="" disabled>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit" onclick="reservationRequest()">Procezar reservacion</button>
                        
            <a href="account.php"><button class="btn btn-secondary" type="submit">Cancelar</button></a>
        `;

                
        temple='';

        let seat_code = '';
        for(let i = 1; i <= 25 ; i++){
            seat_code = `c${i}`;
                    
            temple += `

                <div class="form-element">
                
                    <input class="seatItem" type="checkbox" name="platform" onclick="checkfunc();" value="${seat_code}" id="${seat_code}">
                        <label for="${seat_code}">
                            <div class="icon">
                                <i class="fa-solid fa-chair"></i>
                            </div>
                            <div class="title">
                                ${seat_code}
                            </div>
                        </label>

                    </div>
                    
            `;

        }
                
                
        $('#badge').html(`
            <span class="badge text-bg-secondary mb-1"><h6>Asiento Disponible</h6></span> 
            <span class="badge text-bg-success mb-1"><h6>Asiento Seleccionado</h6></span> 
            <span class="badge text-bg-danger mb-1"><h6>Asiento No disponible</h6></span>
        `);
        $('#list').html(temple);
        $('#form-cont').html(form);

        $.get('../controllers/showController.php', {show_seat_reserved: data.show_id}, function(resp){
            var item = JSON.parse(resp);
            item.forEach(value =>{
                $(`#${value}`).prop("disabled", true)
            })
                    
        });    

        $.get('../controllers/showController.php', data, function(response){
            let show_info = JSON.parse(response);
            //console.log(show_info);
                 
            $('#ticketCost').val(`${show_info.show_cost}`);
        });

                
    })

});

function checkfunc(){
    let seat_list=[];
    $('input[name="platform"]:checked').each(function(){
        seat_list.push($(this).val());
    });
    let num = seat_list.length;
    $('#amountTicket').val(num);
    $('#selectedSeats').val(seat_list.join(", "));
    let cost = $('#ticketCost').val();
    $('#totalAmount').val(`${cost*num}`);
            
            
};


function reservationRequest() {
    
    if (!$('#selectedSeats').val()) {
        swal("Informacion", "Por favor, seleccione al menos un asiento para hacer la reservacion", "info");
        return;
    }

    const reservation = {
        show_id: $('#cinema_show').val(),
        amount_ticket: $('#amountTicket').val(),
        show_cost: $('#ticketCost').val(),
        seat_reserved_list: $('#selectedSeats').val()
    };

    $.post('../controllers/reservationController.php', reservation, function (res) {
        const resObjt = JSON.parse(res);
        if (resObjt.message === "done") {
            swal({
                title: "Procesado",
                text: "Reservacion procesada exitosamente. Tienes hasta un dia antes de la funcion para realizar el pago",
                icon: "success"
            }).then(function() {
                redirect(resObjt); // Llamar a la función para redireccionar después de cerrar la alerta
            });
        } else {
            swal("Error", res, "error");
        }
    });

    function redirect(dataRedirect) {
        let img_src = $('#filmPoster').attr('src');
        window.location.href = `payment-section.php?reservation_id=${dataRedirect.reservation_id}&img_url=${img_src}&total_amount=${dataRedirect.total_amount}&amount_ticket=${dataRedirect.amount_ticket}`;
    }
}