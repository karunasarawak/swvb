/*=========================================================================================
    File Name: datatables-basic.js
    Description: Basic Datatable
    ----------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function() {

    /****************************************
    *       js of zero configuration        *
    ****************************************/

   $.fn.dataTable.moment('DD MMMM YYYY');

   $('.zero-configuration').DataTable();

   $('.leads-all').DataTable({
    columns: [
        { data: "id", class: "text-center" },
        { data: "name", class: "text-center" },
        { data: "createDate", class: "text-center" },
        { data: "createTime", class: "text-center" },
        { data: "telemarketer", class: "text-center" },
        { data: "proceed", class: "text-center" },
        { data: "action", class: "text-center" }
    ],
    columnDefs: [{
        targets: 2,
        render: $.fn.dataTable.render.moment('DD MMMM YYYY','Do MMM YYYY')
    }],
    "dom": '<"d-flex justify-content-between"<"d-flex"<"add_lead"><"upload_csv">><"d-flex"<"mr-2"l>f>>rt<"bottom"ip><"clear">',
    "displayLength": 10,
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
  });

  $('.call-log').DataTable({
    "dom": '<"d-flex justify-content-end"<"mr-2"l>f>rt<"bottom"ip><"clear">',
    "displayLength": 10,
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
  });

  $('.tours-all').DataTable({
    "scrollX": true,
    "dom": '<"d-flex justify-content-end"<"mr-2"l>f>rt<"bottom"ip><"clear">',
    "displayLength": 10,
    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
  });

    /********************************************
     *      js of DataTables custom toolbar      *
     ********************************************/

    $("div.add_lead").html('<a href="leads/new" class="btn btn-outline-primary round my-1 mr-1">New Lead</a>');
    $("div.upload_csv").html('<a href="" class="btn btn-outline-primary round my-1 mr-1">Upload CSV</a>');

    /********************************************
     *        js of Order by the grouping        *
     ********************************************/

    var groupingTable = $('.row-grouping').DataTable({
        "columnDefs": [{
            "visible": false,
            "targets": 2
        }],
        "order": [
            [2, 'asc']
        ],
        "displayLength": 10,
        "drawCallback": function(settings) {
            var api = this.api();
            var rows = api.rows({
                page: 'current'
            }).nodes();
            var last = null;

            api.column(2, {
                page: 'current'
            }).data().each(function(group, i) {
                if (last !== group) {
                    $(rows).eq(i).before(
                        '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                    );

                    last = group;
                }
            });
        }
    });

    $('.row-grouping tbody').on('click', 'tr.group', function() {
        var currentOrder = groupingTable.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            groupingTable.order([2, 'desc']).draw();
        }
        else {
            groupingTable.order([2, 'asc']).draw();
        }
    });

    /*************************************
    *       js of complex headers        *
    *************************************/

    $('.complex-headers').DataTable();


    /*****************************
    *       js of Add Row        *
    ******************************/

    var t = $('.add-rows').DataTable();
    var counter = 2;

    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'.1',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5'
        ] ).draw( false );

        counter++;
    });


    /**************************************************************
    * js of Tab for COLUMN SELECTORS WITH EXPORT AND PRINT OPTIONS *
    ***************************************************************/

    $('.dataex-html5-selectors').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                text: 'JSON',
                action: function ( e, dt, button, config ) {
                    var data = dt.buttons.exportData();

                    $.fn.dataTable.fileSave(
                        new Blob( [ JSON.stringify( data ) ] ),
                        'Export.json'
                    );
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });

    /**************************************************
    *       js of scroll horizontal & vertical        *
    **************************************************/

    $('.scroll-horizontal-vertical').DataTable( {
        "scrollY": 200,
        "scrollX": true
    });
});
