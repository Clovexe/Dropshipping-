$(document).ready(function(){
	$("#button").on("click", function(){
		let username = $("#username").val();
		let password = $("#password").val();
		alert("ello");
		$.ajax({

			url: "login_checker.php",
			data: {uname: username, pass: password},
			type: "post",
			dataType: "json",

		}).done(function(json){
			alert("Welcome "+json.name);
			window.location = "userseller/";
		}).fail(function(){
			alert("Login Failed: Credential Error");
		})
	})
});
