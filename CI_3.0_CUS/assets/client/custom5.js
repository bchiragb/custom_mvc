$(document).ready(function () {
    //Only needed for the filename of export files.
    //Normally set in the title tag of your page.
    //document.title = "Simple DataTable";
    // Create search inputs in footer
    $("#example501 tfoot th").each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" class="ser_box" placeholder="Find" />');
    });
    // DataTable initialisation
    var table = $("#example501").DataTable({
        dom: '<"dt-buttons"Bf><"clear">lrtip',
        paging: true,
        autoWidth: false,
        responsive: true,
        buttons: ["excelHtml5"],
        aaSorting: [[0, 'desc']], 
        /*columnDefs: [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
        ],*/
        initComplete: function (settings, json) {
            var footer = $("#example501 tfoot tr");
            $("#example501 thead").append(footer);
        }
    });

    // Apply the search
    $("#example501 thead").on("keyup", "input", function () {
        table.column($(this).parent().index())
        .search(this.value)
        .draw();
    });

});