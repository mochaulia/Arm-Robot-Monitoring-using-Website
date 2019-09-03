$(document).ready(function(){
    $('#txtLogout')
        .data('textToggle', 'Logout')
        .hover(function (e) {
            var that = $(this);
            var textToSet = that.data('textToggle');
            that.data('textToggle', that.text());
            that.text(textToSet);
        }, function (e) {
            var that = $(this);
            var textToSet = that.data('textToggle');
            that.data('textToggle', that.text());
            that.text(textToSet);
        });
});

$(document).ready(function(){
    $("#deleteBtn").click(function(e){
       e.preventDefault(); 
        if (confirm("Are you sure you want to delete this?") == true) {
            $.ajax({
                type: "POST",
                url: "dashboard/delete_all_position_rows",
                cache: false,
                //  data: {id_post:$(this).attr("id")}, // since, you need to delete post of particular id
                success: function(reaksi) {
                    if (reaksi){
                    alert("Success");
                    }
                }
            });
            }
   });
});

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