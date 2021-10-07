$(document).ready(function(){
	
	var users = [];
	var products = [];

	function dataLoad(id, data, where){
		$(id).load(where, {usertype: data}, function(response, status, xhr) {
			if ( status == "error" ) {
				alert("Error occured: " + xhr.status + " " + xhr.statusText );
			} 

		});
	}

	function removeArray(array, value){
		for (var i = 0; i < array.length; i++) {
			if(array[i] == value){
				array.splice(i, 1);
				return array;
			}
		}
		return array;
	}
	dataLoad("#productlist", JSON.stringify(products) , "handlers/productlist.php");
	dataLoad("#userlist", JSON.stringify(users) , "handlers/userlist.php");
	$("#users").keyup( function(){
		let string_val = $("#users").val();
		if(string_val.length > 0){
			dataLoad("#suggestion", string_val, "handlers/users.php");
		}else{
			dataLoad("#suggestion", "@@@@@@@", "handlers/users.php");
		}
	});
	
	$("#suggestion").on("click", ".items", function(){
		let val = $(this).children("h5").text();
		users.push(val);
		
		users.forEach(function(data){
			console.log(data)
		})/**/
		dataLoad("#suggestion", "@@@@@@@", "handlers/users.php");
		dataLoad("#userlist", JSON.stringify(users) , "handlers/userlist.php");
	});
	$("#user_suggestion").on("click", ".items",function(){
		let val = $(this).children("#id").text();
		products.push(val);
		products.forEach(function(data){
			console.log(data)
		})
		dataLoad("#user_suggestion", "@@@@@@@", "handlers/products.php");
		dataLoad("#productlist", JSON.stringify(products) , "handlers/productlist.php");
	})
	$("#products").keyup( function(){
		let string_val = $("#products").val();
		if(string_val.length > 0){
			dataLoad("#user_suggestion", string_val, "handlers/products.php");
		}else{
			dataLoad("#user_suggestion", "@@@@@@@@", "handlers/products.php");
		}
	});
	$("#userlist").on("click", "#remove_user",function(){
		users = removeArray(users, $(this).val());
		dataLoad("#userlist", JSON.stringify(users) , "handlers/userlist.php");
		users.forEach(function(data){
			console.log(data)
		})

	});

});