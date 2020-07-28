$(document).on('change', '#mbrship_id', function (e) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        dataType: "json",
        url : '/creditnote/search',
        data : {mbrship_id : $('#mbrship_id').val()},
        success:function(data){

        $('#data-table tbody').empty(); 
        for (var i = 0; i < data.member_invoices.length; i++){
           $('#data-table tbody').append('<tr><td class="align-middle tbl-cell-text"><input id="cb_'+ i +'" type="checkbox" class="checkbox-input" onclick="cbCheckerInput('+ i +')"></td><td class="align-middle tbl-cell-text">'+data.member_invoices[i].inv_no+'</td><td class="align-middle tbl-cell-text">'+data.member_invoices[i].issue_date+'</td><td class="align-middle tbl-cell-text">'+data.invoice_description[i]+'</td><td class="align-middle tbl-cell-text">'+data.invoice_amount[i]+'</td><td class="align-middle tbl-cell-text">0.00</td><td class="align-middle tbl-cell-text">'+data.invoice_amount[i]+'</td><td><input id="input_'+i+'" class="form-control" name="amount[]" disabled><input type="hidden" name="inv_id[]" value="'+data.member_invoices[i].inv_id+'"></td></‌​tr>');
          }

        },
    });

});

function cbCheckerInput(rowID)
{
    var cbID = 'cb_' + rowID;
    var inputID = 'input_' + rowID;
    var cb = document.getElementById(cbID);
    var input = document.getElementById(inputID);
    if(cb.checked == true){
        input.disabled = false;
    } else {
        input.disabled = true;
    }
}