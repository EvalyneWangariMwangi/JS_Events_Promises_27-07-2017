<!DOCTYPE html>
<html>
<head>
	<title>Events and promises</title>
	<script src="js/custom.js"></script>
	<script src="js/promise.js"></script>
	<script src="js/events.js"></script>
</head>
<body>
	<!-- on button click it shows date -->
	<p>Click the button below to see the date today</p>
	<button onclick="displayDate()">The time is?</button>
	<p id="demo"></p>

	<p>Even Numbers quiz: please enter an integer.</p>
	<form>
		<input type="text" name="" id="numberEntered">
		<button onclick="validation()">Submit</button>
	</form>
	<p id="result"></p>

	<p>Bring your mouse inside the division to see the result:</p>
      
    <div onmouseover="over()" onmouseout="out()">
         <h2> This is inside the division </h2>
    </div>
         
    <button onclick="testPromise()">Test Promise</button>
</body>
</html>