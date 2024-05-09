jQuery(document).ready(function($) {
    var $table1 = jQuery('#table-1');


    $table1.DataTable({
        "aLengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        "bStateSave": true,
        responsive: true
    });

    $table1.closest('.dataTables_wrapper').find('select').select2({
        minimumResultsForSearch: -1
    });
});