$(document).ready(function(){
    let obj;
    $('#cont-table').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json',
        },
        "columnDefs": [
            {"className": "dt-center", "targets": "_all"}
            ],
            responsive: "true",
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    titleAttr: 'exportar a PDF',
                    className: 'btn btn-danger'
                }
            ],
            ajax: {
            url: '../controllers/myreservationController.php',
            dataSrc: ''
            },
            columns: [
                { data: "title" },
                { data: "show_date" },
                { data: "start_at" },
                { data: "salon" },
                { data: "amount_ticket" },
                { data: "seat_reserved_list" },
                { data: "total_amount" },
                {data: 'reservation_id',
                    width: '150px',
                    render: function(data, type, row){
                        if(row.reservation_status == 0){
                            return `
                            <button class="btn btn-light" onclick=" window.open('../controllers/receiptController.php?reservation_id=${data}','_blank')" disabled><i class="fa-solid fa-file-arrow-down"></i></button>
                            <button class="btn btn-light" onclick=" window.open('payment-section.php?reservation_id=${data}&img_url=${row.img_url}&total_amount=${row.total_amount}&amount_ticket=${row.amount_ticket}','_blank')"><i class="fa-regular fa-credit-card"></i></button>
                            <button type="button" class="btn btn-light" onclick="delReservation(${data}, ${row.show_id})"><i class="fa-solid fa-trash-can"></i></button>`;
                        }else{
                            return `
                            <button class="btn btn-light" onclick=" window.open('../controllers/receiptController.php?reservation_id=${data}','_blank')"><i class="fa-solid fa-file-arrow-down"></i></button>
                            <button class="btn btn-light" onclick=" window.open('payment-section.php?reservation_id=${data}&img_url=${row.img_url}&total_amount=${row.total_amount}&amount_ticket=${row.amount_ticket}','_blank')" disabled><i class="fa-regular fa-credit-card"></i></button>
                            <button type="button" class="btn btn-light" onclick="delReservation(${data}, ${row.show_id})" disabled><i class="fa-solid fa-trash-can"></i></button>`;
                        }
                        
                    }
                        
                }
            ]
    });
                
});

function delReservation(res_id, showId){
    swal({
        title: "Estas seguro que deseas eliminar esta reservacion?",
        text: 'Una vez eliminada, los asientos estara disponibles para otra persona',
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.post('../controllers/deleteController.php', {delete_reservation_id: res_id, show_id: showId}, function(res){
                    swal(res, {
                    icon: "success",
                });
            }).then(setTimeout(function() {
                location.reload();
            }, 3000));
            
        } else {
            swal("Proceso cancelado");
        }
        
    });
}