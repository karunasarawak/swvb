function setInputName() {
    var select1 = document.getElementById('mbrship_id');
    var input = document.getElementById('name');

    input.value = select1.options[select1.selectedIndex].dataset.name;
}

function creditCardSection() {
    var selectMethod = document.getElementById('method');
    var creditcard = document.getElementById('creditcard');
    if (selectMethod.options[selectMethod.selectedIndex].value == "creditcard") {
        creditcard.style.display = "flex";
    } else {
        creditcard.style.display = "none";
    }

}

function checkdigit() {
    var selected = document.getElementById("mbrship_id");

    var input = selected.options[selected.selectedIndex].text;

    var result = input.substr(0, 1);

    document.getElementById("demo").value = result;

    if (result == 1) {

        document.getElementById("cai").style.display = "block";
        document.getElementById("evc").style.display = "none";
    } else if (result == 2) {

        document.getElementById("evc").style.display = "block";
        document.getElementById("cai").style.display = "none";
    }

    var display = document.getElementById('pt_rsvn_no');

    display.value = selected.options[selected.selectedIndex].dataset.number;
}