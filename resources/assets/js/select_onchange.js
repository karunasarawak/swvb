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
    } else {
        document.getElementById("evc").style.display = "none";
        document.getElementById("cai").style.display = "none";
    }

    var display = document.getElementById('pt_rsvn_no');

    display.value = selected.options[selected.selectedIndex].dataset.number;
}

function linkrefer() {
    var accselected = document.getElementById("acc_mbrship_id");
    var displayname = document.getElementById("acc_name");
    var displayno = document.getElementById("pt_rsvn_no");

    displayname.value = accselected.options[accselected.selectedIndex].dataset.name;
    displayno.value = accselected.options[accselected.selectedIndex].dataset.number;

}

function methodChanger() {
    var selectCollectedBy = document.getElementById('collected_by');
    var selectMethod = document.getElementById('method');
    var length = selectMethod.options.length;
    for (i = length - 1; i >= 0; i--) {
        selectMethod.options[i] = null;
    }

    var methodArray = ["Cheque", "Credit Card", "Cash", "DuitNow", "e-Debit", "FPX", "IBG", "JomPAY"];

    if (selectCollectedBy.options[selectCollectedBy.selectedIndex].value == "OTP-AMEX" || selectCollectedBy.options[selectCollectedBy.selectedIndex].value == "OTP-VISA/MASTER") {
        var option = document.createElement("option");
        option.text = "IBG";
        option.value = "IBG";
        selectMethod.appendChild(option);
    } else if (selectCollectedBy.options[selectCollectedBy.selectedIndex].value == "MRPC") {
        var option = document.createElement("option");
        option.text = "Credit Card";
        option.value = "Credit Card";
        selectMethod.appendChild(option);
    } else {
        for (i = 0; i < methodArray.length; i++) {
            var option = document.createElement("option");
            option.text = methodArray[i];
            option.value = methodArray[i];
            selectMethod.appendChild(option);
        }
    }
}