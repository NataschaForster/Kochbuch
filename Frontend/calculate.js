function calculate(tableID, number_field) {
	
	numberValue = number_field.value;
	rowCount = document.getElementById(tableID).rows.length;
	
	for(i = 0; i < rowCount; i= i+2) {
		cells = document.getElementById(tableID).rows[i].cells
		value = cells[i].innerText;
		cells[i].innerHTML = Number(value) * (Number(numberValue)/Number(value));
	}
}