function calculate(tableID, portion_field) {

	portionValue = portion_field.value;
	rowCount = document.getElementById(tableID).rows.length;
	debugger;
	for(i = 0; i < rowCount; i++) {
		cells = document.getElementById(tableID).rows[i].cells;
		value = cells[0].innerText;
		cells[0].innerHTML = Number(value)/Number(portionValue-1) * (Number(portionValue));
	}
}
