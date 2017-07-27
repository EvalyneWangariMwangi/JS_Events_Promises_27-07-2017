<!DOCTYPE html>
<html>
<head>
	<title>More on events</title>
	<script src="js/events.js"></script>
</head>
<body onresize="screenResize()">
	<!-- Events on key press -->
	<p>A function is triggered when the user releases a key in the input field. The function transforms the character to upper case.</p>
	Enter your name: <input type="text" id="fname" onkeyup="myFunction()">

	<p>Changes to uppercase when the user leaves</p>
	Enter The second: <input type="text" id="sname" onblur="myFunction2()">

	<p id="resizeDemo"></p>
	<p>Shows height and width properties</p>
</body>
</html>