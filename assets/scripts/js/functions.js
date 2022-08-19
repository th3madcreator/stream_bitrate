function convert() {	
	gb = parseInt(document.getElementById('gb').value);
	length = parseInt(document.getElementById('length').value);
	
	gb = gb * 1024 * 8;
	length = length * 60;
	
	total = Math.round((gb / length) * 10) / 10;
	
	// alert(total);
	
	document.getElementById('result').innerHTML = total + " Mbps";
}

function resetText() {
	document.getElementById('result').innerHTML = "0 Mbps";
}
