<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=9, IE=edge" />
		<meta name='robots' content='noindex,follow' />
		<title>Stream Bitrate Calculator</title>
		<link rel="stylesheet" href="assets/css/styles.css" />
		<script src="assets/scripts/js/functions.js"></script>
		<style> html, body { overflow:hidden !important; } </style>
	</head>
	<body>
		<div class="content">
			<form name="calc" action="javascript:convert()">
				<input name="gb" id="gb" type="text" placeholder="File Size in GB" /><br />
				<input name="length" id="length" type="text" placeholder="Length in Minutes" /><br />
				<button name="submit" class="submit_btn" type="submit">Submit</button><br />
				<button name="reset" id="reset" class="reset_btn" type="reset" onclick="javascript:resetText();">Reset</button>
			</form>
			<p class="subtitle_bit" id="result">0 Mbps</p>
		</div>
	</body>
</html>
