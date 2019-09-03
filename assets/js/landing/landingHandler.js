function getGraph() {
    $.ajax({
        type: 'get',
        url: 'Graph/ajax_tiga_d',
        error: function () {
            console.log('There is an error when getting data.');
        },
        success: function (data) {
            $('#graph').html(data);
        }
    });
}
getGraph();