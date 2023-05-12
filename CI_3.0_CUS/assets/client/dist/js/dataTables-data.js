/*DataTable Init*/

"use strict"; 

$(document).ready(function() {
	"use strict";
	
	$('#datable_1').DataTable();
    $('#datable_2').DataTable({ "lengthChange": false});

    //https://datatables.net/examples/index
    $('#datable_3').DataTable({
		"order": [[ 0, "desc" ]],
		"columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
        ]
	});

    $('#datable_4').DataTable({
        "order": [[ 0, "desc" ]],
    });

    $('#datable_5').DataTable({
        "order": [[ 0, "asc" ]],
    });


    $('#example').DataTable({
        "order": [[ 0, "desc" ]],
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel'
        ]
    });

} );