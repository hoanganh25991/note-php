<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		echo $_POST["info"];
		return;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>form data</title>
</head>
<body>
<code>
	#at root folder, run command<br>
	#open browser localhost:3000 to review<br>
	php -S 0.0.0.0:3000 formData.php<br>
</code>
<button id="btnSend">send</button>
<script type="text/javascript">
	var btnSend = document.querySelector("#btnSend");
	btnSend.onclick = function(){
		console.log("btnSend clicked");
		var formData = new FormData();
	  	var data = {name: "anh", age: 25, job: "web developer"};
	  	// console.log(data);
	  	formData.append("info", JSON.stringify(data));
	    var oReq = new XMLHttpRequest();
	    oReq.open("post", "/");
	    oReq.send(formData);
	    // return oReq;
	    oReq.onload = function(){
	    	// console.log(oReq);
	    	console.log(oReq.response);
	    };
	};
</script>
</body>
</html>
