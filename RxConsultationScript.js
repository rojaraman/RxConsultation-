/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var click_add = 0;
function addRow(tableID) {
    click_add = click_add + 1;
    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);

    var cell1 = row.insertCell(0);
    var element1 = document.createElement("input");
    element1.type = "checkbox";
    element1.name = "chkbox[]";
    element1.id = "select" + click_add;
    element1.style["width"] = "90%";
    cell1.appendChild(element1);

    var cell2 = row.insertCell(1);
    cell2.innerHTML = rowCount - 1;

    var cell3 = row.insertCell(2);
    var element2 = document.createElement("input");
    element2.type = "text";
    element2.style["width"] = "95%";
    element2.name = "txtbox[]";
    element2.id = "medicine" + click_add;
    element2.style["color"] = "RoyalBlue";
    element2.style["margin"] = "2%";
    cell3.appendChild(element2);
    cell3.style.width = "10%";

    //Checkbox and Time generation

    var cell4 = row.insertCell(3);
    var element3 = document.createElement("input");
    element3.type = "checkbox";
    element3.style["width"] = "90%";
    element3.name = "chkbox[]";
    element3.style["color"] = "RoyalBlue";
    element3.id = "Morning" + click_add;
    var element6 = document.createElement("input");
    element6.type = "time";
    element6.style["width"] = "80%";
    element6.style["color"] = "RoyalBlue";
    element6.style["margin"] = "5%";
    element6.name = "user_time[]";
    element6.id = "MornTime" + click_add;
    element6.style.alignSelf = "center";
    cell4.appendChild(element3);
    cell4.appendChild(element6);

    var cell5 = row.insertCell(4);
    var element4 = document.createElement("input");
    element4.type = "checkbox";
    element4.style["width"] = "90%";
    element4.style["color"] = "RoyalBlue";
    element4.name = "chkbox[]";
    element4.id = "Afternoon" + click_add;
    var element7 = document.createElement("input");
    element7.type = "time";
    element7.style["width"] = "80%";
    element7.style["color"] = "RoyalBlue";
    element7.style["margin"] = "5%";
    element7.name = "user_time[]";
    element7.id = "AftrTime" + click_add;
    element7.align = "center";
    cell5.appendChild(element4);
    cell5.appendChild(element7);

    var cell6 = row.insertCell(5);
    var element5 = document.createElement("input");
    element5.type = "checkbox";
    element5.style["width"] = "90%";
    element5.style["color"] = "RoyalBlue";
    element5.name = "chkbox[]";
    element5.id = "Evening" + click_add;
    var element8 = document.createElement("input");
    element8.type = "time";
    element8.style["width"] = "80%";
    element8.style["color"] = "RoyalBlue";
    element8.style["margin"] = "5%";
    element8.name = "user_time[]";
    element8.id = "EveTime" + click_add;
    element8.align = "center";
    cell6.appendChild(element5);
    cell6.appendChild(element8);

    var cell7 = row.insertCell(6);
    var element6 = document.createElement("input");
    element6.type = "checkbox";
    element6.style["width"] = "90%";
    element6.style["color"] = "RoyalBlue";
    element6.name = "chkbox[]";
    element6.id = "Night" + click_add;
    var element9 = document.createElement("input");
    element9.type = "time";
    element9.style["width"] = "80%";
    element9.style["color"] = "RoyalBlue";
    element9.style["margin"] = "5%";
    element9.name = "user_time[]";
    element9.id = "NightTime" + click_add;
    element9.align = "center";
    cell7.appendChild(element6);
    cell7.appendChild(element9);

    //only check boxes
    var cell8 = row.insertCell(7);
    var element7 = document.createElement("input");
    element7.type = "checkbox";
    element7.style["width"] = "90%";
    element7.style["color"] = "RoyalBlue";
    element7.name = "chkbox[]";
    element7.id = "Empty Stomach " + click_add;
    cell8.appendChild(element7);

    var cell9 = row.insertCell(8);
    var element8 = document.createElement("input");
    element8.type = "checkbox";
    element8.style["width"] = "90%";
    element8.style["color"] = "RoyalBlue";
    element8.name = "chkbox[]";
    element8.id = "Before Food" + click_add;
    cell9.appendChild(element8);

    var cell10 = row.insertCell(9);
    var element9 = document.createElement("input");
    element9.type = "checkbox";
    element9.style["width"] = "90%";
    element9.style["color"] = "RoyalBlue";
    element9.name = "chkbox[]";
    element9.id = "After Food" + click_add;
    cell10.appendChild(element9);

    //textbox for days and months
    var cell11 = row.insertCell(10);
    var element10 = document.createElement("input");
    element10.type = "text";
    element10.name = "txtbox[]";
    element10.id = "days" + click_add;
    element10.align = "center";
    element10.style["width"] = "80%";
    element10.style["color"] = "RoyalBlue";
    cell11.appendChild(element10);

    var cell12 = row.insertCell(11);
    var element11 = document.createElement("input");
    element11.type = "text";
    element11.name = "txtbox[]";
    element11.id = "months" + click_add;
    element11.align = "center";
    element11.style["width"] = "80%";
    element11.style["color"] = "RoyalBlue";
    cell12.appendChild(element11);

    //remarks
    var cell13 = row.insertCell(12);
    var element12 = document.createElement("input");
    element12.type = "text";
    element12.name = "txtbox[]";
    element12.id = "remark" + click_add;
    element12.align = "center";
    element12.style["width"] = "94%";
    element12.style["color"] = "RoyalBlue";
    cell13.appendChild(element12);


}
function deleteRow(tableID) {
    try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        for (var i = 0; i < rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if (null != chkbox && true == chkbox.checked) {
                table.deleteRow(i);
                rowCount--;
                click_add--;
                i--;
            }
        }
    }
    catch (e) {
        alert(e);
    }
}
function printFrame() {
    document.getElementById("submit_btn").style.visibility = "hidden";
    document.getElementById("reset_btn").style.visibility = "hidden";
    document.getElementById("print_btn").style.visibility = "hidden";
    window.print();
    document.getElementById("submit_btn").style.visibility = "visible";
    document.getElementById("reset_btn").style.visibility = "visible";
    document.getElementById("print_btn").style.visibility = "visible";
}

