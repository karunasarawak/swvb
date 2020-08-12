$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#tbl-acc tfoot th').each(function() {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });

    // DataTable
    var table = $('#tbl-acc').DataTable({
        initComplete: function() {
            // Apply the search
            this.api().columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change clear', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        }
    });

    $('#tbl-acc tfoot tr').appendTo('#tbl-acc thead');

    //table 2
    // Setup - add a text input to each footer cell
    $('#tbl-acc-1 tfoot th').each(function() {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });

    // DataTable
    var table = $('#tbl-acc-1').DataTable({
        initComplete: function() {
            // Apply the search
            this.api().columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change clear', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        }
    });

    $('#tbl-acc-1 tfoot tr').appendTo('#tbl-acc-1 thead');
});