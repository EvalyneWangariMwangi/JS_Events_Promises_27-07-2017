//Promise example
 function testPromise(){
	// let will anly be accessible in the code block.
 	 let myFirstPromise = new Promise((resolve,reject)=>{
 	setTimeout(function(){
 	resolve("success!");
 	},250);
	});

	myFirstPromise.then((successMessage)=>{
	alert("yaaay! "+ successMessage);
	});  
 }