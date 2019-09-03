$(document).ready(function() {
    var table = $('#table').DataTable({
        responsive: true,
        aoColumns:[
            { "bSortable": false },
            { "bSortable": false },
            { "bSortable": false },
            { "bSortable": false },
            { "bSortable": false },
            { "bSortable": false },
            { "bSortable": true }
        ],
        order: [[0, 'desc']],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        "ajax": 'http://localhost/c3men/rtposition/data'
    });
    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

    setInterval( function () {
        table.ajax.reload( null, false );
    }, 1000 );
});