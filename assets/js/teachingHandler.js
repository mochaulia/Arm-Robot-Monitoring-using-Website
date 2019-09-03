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
        "ajax": 'http://localhost/c3men/dashboard/dataTable_teaching'
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


$(document).ready(function(){
    $("#deleteBtnTeaching").click(function(e){
       e.preventDefault(); 
        if (confirm("Are you sure you want to delete this?") == true) {
            $.ajax({
                type: "POST",
                url: "delete_all_teaching_rows",
                cache: false,
                error: function(){
                    console.log('error. cannot delete data.');
                },
                success: function(reaksi) {
                    if (reaksi){
                        alert("Success");
                    }
                }
            });
            }
   });
});

