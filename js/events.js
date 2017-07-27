//onClick event type
function displayDate(){
	document.getElementById("demo").innerHTML = Date();
}

//onSubmit event type
function validation(){
	num = document.getElementById("numberEntered").value;
	y = parseInt(num);
	if (y%2 == 0) {
		alert("Even Number");
	}
	else{
		alert("Odd Number");
	}	
}

//mouse moving
function over()
 {
     alert("Mouse Over");
 }
            
function out() {
     alert("Mouse Out");
 }

//changes text to upper case
function myFunction() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}

//changes text to upper case when user leaves
function myFunction2() {
    var x = document.getElementById("sname");
    x.value = x.value.toUpperCase();
}

//change of screen size
function screenResize() {
    var w = window.outerWidth;
    var h = window.outerHeight;
    var txt = "Window size: width=" + w + ", height=" + h;
    document.getElementById("resizeDemo").innerHTML = txt;
}

          