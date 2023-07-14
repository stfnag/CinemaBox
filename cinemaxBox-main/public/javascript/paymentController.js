$(document).ready(function(){

    let url_params = new URLSearchParams(window.location.search);
    let img_url = url_params.get('img_url');
    let reservation_id = url_params.get('reservation_id');
    let total_amount = url_params.get('total_amount');
    let amount_ticket = url_params.get('amount_ticket');
    total_amount = parseFloat(total_amount).toFixed(2)

    $('#total_amount').text(`Monto total: US $${total_amount}`);
    $('#amount_ticket').text(`Cantidad de tickets: ${amount_ticket}`);
    $('#poster_film_reservation').attr('src', img_url);

    paypal.Buttons({

        style: {
            layout:  'vertical',
            color:   'blue',
            shape:   'pill',
            label:   'paypal'
        },

        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: total_amount
                    }
                }]
            })
        },

        onApprove(data, actions) {
            console.log(data);

            fetch('../controllers/paymentController.php', {

                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json; charset=utf-8'
                },
                body: JSON.stringify({
                    action: 'register',
                    order_id: data.orderID,
                    amount: total_amount,
                    reservation_id: reservation_id

                })

            }).then((response) => {
                return response.json();
            }).then((data) => {
                console.log(data);
            })
            actions.redirect('http://gruposel.42web.io/page/public/myreservation-section.php');
        },

        onCancel(data) {
            console.log(data);
        }

        
    }).render('#paypal-button-container');

});