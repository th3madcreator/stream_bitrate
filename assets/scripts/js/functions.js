function convert() {
	gb = parseInt(document.getElementById('gb').value) * 1024 * 8;
	length = parseInt(document.getElementById('length').value) * 60;
	
	total = Math.round((gb / length) * 10) / 10;
	
	document.getElementById('result').innerHTML = total + " Mbps";
}

function resetText() {
	document.getElementById('result').innerHTML = "0 Mbps";
}
