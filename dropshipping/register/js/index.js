function write(string){
	console.log(string);
}

function clear_all(array_data) {
	array_data.forEach(function(data){
		data.val("");
	})	
}

function check_string(array_data){
	let thereisNone = false;
	array_data.forEach(function(data){
		if(!thereisNone){
			if(data.val() == "" || data.val() == null ){
				thereisNone = true;
				const name = data.attr("name");

				$("#error_message").text(name+" input needs to have inputted value");
				data.focus();
			}
		}
	})
	if(thereisNone) return true;
	return false;
}
function check_email(data){
	let value = data.val();
	let thereisError = false;
	if(value.search("@") == -1){
		if(!value.endsWith(".com")){
			$("#error_message").text("Email needs to have @ somewhere, and .com in the end");
		}else{
			$("#error_message").text("Email needs to have @ ");
		}
		//alert("sa")
		thereisError = true;
	}else{
		if(!value.endsWith(".com")){
			$("#error_message").text("Email needs to have .com in the end");
			thereisError = true;
		}
		//alert("asaa")
	}
	
	return thereisError;
}
function check_password(password, confpassword) {
	let thereisError = false;
	if(password.val().length < 8 ){
		$("#error_message").text("Password needs to atleast be 8 characters long");
		thereisError = true;
	}else if(password.val().length > 16 ){
		$("#error_message").text("Password maximum length is 16");
		thereisError = true;
	}else if(password.val() != confpassword.val()){
		$("#error_message").text("Password mismatch: password is not equal to the confirmation input");
		thereisError = true;
	}
	return thereisError;
}
function checknumber(number){
	return number.length == 10;
}
$(document).ready(function () {
	
	$("#button").on("click", function(){
		let name = $("#name");
		let email = $("#email");
		let user = $("#user");
		let contact = $("#contact");
		let password = $("#password");
		let confirm = $("#confirmpassword");
		
		let array_data = [name, email, user, contact, password, confirm];

		if(check_string(array_data) || check_email(email) || check_password(password, confirm)){
			if($("#modal").hasClass("hidden")){
				$("#modal").removeClass("hidden")
			}
		}
		
		clear_all(array_data);
	});

	$("#modal").on("click", "#error", function(){
		if(!$("#modal").hasClass("hidden")){
			$("#modal").addClass("hidden")
		}
	});
})