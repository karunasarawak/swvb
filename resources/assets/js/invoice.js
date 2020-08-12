var btn_clear = document.getElementById('btn_clear');
var btn_add = document.getElementById('btn_add');

function clearInvoiceDetail() {
    var selectItem = document.getElementById('item');
    selectItem.selectedIndex = 0;

    var amount = document.getElementById('amount_1');
    amount.value = "";
    var amount = document.getElementById('amount_2');
    amount.value = "";

    var itemName = document.getElementById('item_name_1');
    itemName.value = "";
    itemName.removeAttribute('disabled');
    var itemName = document.getElementById('item_name_2');
    itemName.value = "";
    itemName.disabled = true;
}

function addInvoiceDetail() {
    var rowCount = document.getElementById("invoice-detail-count").value;
    var invDetCount = document.getElementById("invoice-detail-row-count").value;
    var tblBody = document.getElementById('tbl-invoice').getElementsByTagName('tbody')[0];
    var row = tblBody.insertRow();
    row.id = "invoice-detail-" + rowCount;

    var item = document.getElementById('item');
    var selectedItem = item.options[item.selectedIndex].text;

    var rbInstallment = document.getElementById("type_installment");
    var rbAMF = document.getElementById("type_amf");
    var rbOther = document.getElementById("type_other");

    if (rbInstallment.checked == true || rbAMF.checked == true) {
        var itemName = document.getElementById('item_name_1');
        var amount = document.getElementById('amount_1');
    } else if (rbOther.checked == true) {
        var itemName = document.getElementById('item_name_2');
        var amount = document.getElementById('amount_2');
    }

    if (selectedItem != "--" && amount.value != "") {
        var col0 = row.insertCell(0);
        col0.setAttribute("class", "align-middle tbl-cell-text");
        var inputItemID = document.createElement("input");
        inputItemID.setAttribute("type", "hidden");
        inputItemID.setAttribute("name", "itemID[]");
        if (rbInstallment.checked == true) {
            inputItemID.setAttribute("value", "1");
        } else if (rbAMF.checked == true) {
            inputItemID.setAttribute("value", "2");
        } else if (rbOther.checked == true) {
            inputItemID.setAttribute("value", item.options[item.selectedIndex].value);
        }
        inputItemID.setAttribute("readonly", "");

        var inputItem = document.createElement("input");
        inputItem.setAttribute("type", "hidden");
        inputItem.setAttribute("name", "item[]");
        if (itemName.value != "") {
            inputItem.setAttribute("value", itemName.value);
            col0.innerText = itemName.value;
        } else {
            if (rbInstallment.checked == true) {
                inputItem.setAttribute("value", "Installment");
                col0.innerText = "Installment";
            } else if (rbAMF.checked == true) {
                inputItem.setAttribute("value", "AMF");
                col0.innerText = "AMF"
            } else if (rbOther.checked == true) {
                inputItem.setAttribute("value", selectedItem);
                col0.innerText = selectedItem;
            }
        }
        inputItem.setAttribute("readonly", "");
        col0.appendChild(inputItemID);
        col0.appendChild(inputItem);
        var formatAmount = parseFloat(amount.value).toFixed(2);
        var col1 = row.insertCell(1);
        col1.setAttribute("class", "align-middle tbl-cell-text");
        var inputAmount = document.createElement("input");
        inputAmount.setAttribute("type", "hidden");
        inputAmount.setAttribute("name", "amount[]");
        inputAmount.setAttribute("class", "amount-class");
        inputAmount.setAttribute("value", formatAmount);
        inputAmount.setAttribute("readonly", "");
        col1.innerText = "RM " + formatAmount;
        col1.appendChild(inputAmount);

        var col2 = row.insertCell(2);
        col2.setAttribute("class", "align-middle tbl-cell-text");
        var btnDel = document.createElement("button");
        btnDel.setAttribute("type", "button");
        btnDel.setAttribute("class", "btn-danger btn btn-delete");
        var deleteFunction = "deleteRow('invoice_detail', '" + rowCount + "')";
        btnDel.setAttribute("onclick", deleteFunction);
        btnDel.textContent = "X";
        col2.appendChild(btnDel);

        rowCount++;
        document.getElementById("invoice-detail-count").value = rowCount;
        invDetCount++;
        document.getElementById("invoice-detail-row-count").value = invDetCount;

        calculateInvoiceTotal();
        clearInvoiceDetail();
        itemName.disabled = true;
        if (rbInstallment.checked == true || rbAMF.checked == true) {
            amount.disabled = true;
            btn_clear.style.display = "none";
            btn_add.style.display = "none";
        }

        disableRBType();
    }
}

function deleteRow(section, count) {
    var rowID = "invoice-detail-" + count;
    var row = document.getElementById(rowID);
    row.parentNode.removeChild(row);
    var ptcpCount = document.getElementById("invoice-detail-row-count").value;
    ptcpCount--;
    document.getElementById("invoice-detail-row-count").value = ptcpCount;
    calculateInvoiceTotal();

    var rbInstallment = document.getElementById("type_installment");
    var rbAMF = document.getElementById("type_amf");
    var rbOther = document.getElementById("type_other");

    if (rbInstallment.checked == true || rbAMF.checked == true) {
        enableRBType();

        var itemName = document.getElementById('item_name_1');
        var amount = document.getElementById('amount_1');

        itemName.removeAttribute('disabled');
        amount.removeAttribute('disabled');

        btn_clear.style.display = "inline-block";
        btn_add.style.display = "inline-block";
    } else if (rbOther.checked == true) {
        if (ptcpCount == 0) {
            enableRBType();
        }
    }
}

function itemSelect() {
    var item = document.getElementById('item');
    var selectedItem = item.options[item.selectedIndex].text;
    var itemName = document.getElementById('item_name_2');

    if (selectedItem != "--") {
        itemName.disabled = false;
    } else {
        itemName.disabled = true;
    }
}

function calculateInvoiceTotal() {
    var newTotalAmount = 0;
    var amountArray = document.getElementsByClassName('amount-class');
    for (var i = 0; i < amountArray.length; i++) {
        newTotalAmount = newTotalAmount + parseFloat(amountArray[i].value);
    }

    // var totalAmountVal = parseFloat(document.getElementById('total-amount-value').value);
    // var taxVal = parseFloat(document.getElementById('tax-value').value);
    // var roundingVal = parseFloat(document.getElementById('rounding-value').value);
    // var totalVal = parseFloat(document.getElementById('total-value').value);

    var newTaxVal = newTotalAmount * 0.06;
    var formatTaxVal = newTaxVal.toFixed(2);
    var sum = newTotalAmount + newTaxVal;
    var s = sum.toFixed(2);
    var sLastDigit = s.substring(s.length - 1, s.length);

    var front = Math.floor(s);
    var dec = s - front;
    var formatDec = dec.toFixed(2);

    var decUp1 = formatDec * 10;
    var decUp2 = formatDec * 100;

    if (sLastDigit < 3) {
        var newDec1 = Math.floor(decUp1);
        var finalDec = newDec1 / 10;
    } else if (sLastDigit > 2 && sLastDigit < 6) {
        var newDec2 = Math.ceil(decUp2 / 5) * 5;
        var finalDec = newDec2 / 100;
    } else if (sLastDigit > 5 && sLastDigit < 8) {
        var newDec2 = Math.floor(decUp2 / 5) * 5;
        var finalDec = newDec2 / 100;
    } else if (sLastDigit > 7) {
        var newDec1 = Math.round(decUp1);
        var finalDec = newDec1 / 10;
    }

    var formatFinalDec = finalDec.toFixed(2);
    var roundingVal = formatFinalDec - formatDec;
    var formatRoundingVal = roundingVal.toFixed(2);

    var totalVal = parseFloat(front) + parseFloat(formatFinalDec);
    var formatTotalVal = totalVal.toFixed(2);

    document.getElementById('total-amount-value').value = newTotalAmount;
    document.getElementById('tax-value').value = formatTaxVal;
    document.getElementById('rounding-value').value = formatRoundingVal;
    document.getElementById('total-value').value = formatTotalVal;

    document.getElementById('tax-display').innerHTML = "RM " + formatTaxVal + " (SST 6%)";

    if (roundingVal >= 0) {
        document.getElementById('rounding-display').innerHTML = "RM " + formatRoundingVal;
    } else {
        var negativeRoundingVal = Math.abs(formatRoundingVal);
        document.getElementById('rounding-display').innerHTML = " - RM " + negativeRoundingVal;
    }

    document.getElementById('total-display').innerHTML = "RM " + formatTotalVal;
}

function showItemInput(type) {
    var itemInput1 = document.getElementById('item-input-1');
    var itemInput2 = document.getElementById('item-input-2');
    var itemInput3 = document.getElementById('item-input-3');
    if (type == "Installment" || type == "AMF") {
        itemInput1.style.display = "flex";
        itemInput1.style.visibility = "visible";
        itemInput2.style.display = "none";
        itemInput2.style.visibility = "hidden";
        itemInput3.style.display = "none";
        itemInput3.style.visibility = "hidden";
    } else {
        itemInput1.style.display = "none";
        itemInput1.style.visibility = "hidden";
        itemInput2.style.display = "flex";
        itemInput2.style.visibility = "visible";
        itemInput3.style.display = "flex";
        itemInput3.style.visibility = "visible";
    }
}

function disableRBType() {
    var rbType = document.getElementsByClassName('radioButtonType');
    for ($i = 0; $i < rbType.length; $i++) {
        rbType[$i].disabled = "true";
    }
}

function enableRBType() {
    var rbType = document.getElementsByClassName('radioButtonType');
    for ($i = 0; $i < rbType.length; $i++) {
        rbType[$i].removeAttribute('disabled');
    }
}

function clearInvoiceItems() {
    enableRBType();
    var old_tbody = document.getElementById('invoice-tbody');
    while (old_tbody.rows.length > 0) {
        old_tbody.deleteRow(0);
    }
    calculateInvoiceTotal();
    document.getElementById("invoice-detail-row-count").value = 0;

    var itemName = document.getElementById('item_name_1');
    var amount = document.getElementById('amount_1');

    itemName.removeAttribute('disabled');
    amount.removeAttribute('disabled');

    btn_clear.style.display = "inline-block";
    btn_add.style.display = "inline-block";
}