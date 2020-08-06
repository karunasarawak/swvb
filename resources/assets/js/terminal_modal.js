// var radios = document.getElementsByClassName("terminal-radio-button");
// var input = document.getElementById("bank_charges");
// for (var i = 0, max = radios.length; i < max; i++) {
//     if (radios[i].checked) {
//         input.value = radios[i].value;
//     }
// }

function terminalSelect(terminal_id, bank_charges) {
    var tidInput = document.getElementById("terminal_id");
    var bcInput = document.getElementById("bank_charges");
    tidInput.value = terminal_id;
    bcInput.value = bank_charges;
}