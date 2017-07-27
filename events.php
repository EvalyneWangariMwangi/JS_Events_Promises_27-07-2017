<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="msgbox" action="#" method="get">
		<label for="msg">your message</label>
		<input id="msg" value="" />
		<button>SEND</button>
	</form>
	<script>
	// Custom Events
		var msgbox = document.getElementById("msgbox");
		msgbox.addEventListener("submit",sendMessage, false);

		function sendMessage(e){
			e.preventDefault();
			var msg = document.getElementById("msg").value.trim();
			if(msg && window.CustomEvent){
				var event = new CustomEvent("newMessage",{
					detail:{
						message: msg,
						time: new Date(),
					},
					bubbles: true,
					cancellable: true
				});
				e.currentTarget.dispatchEvent(event);
			}
		}

		// listen for newMessage event
		document.addEventListener("newMessage", newMessageHandler, false);

		// newMessage event handler
		function newMessageHandler(e) {
			LogEvent(
				"Event subscriber on "+e.currentTarget.nodeName+", "
				+e.detail.time.toLocaleString()+": "+e.detail.message
			);
		}
	</script>
</body>
</html>