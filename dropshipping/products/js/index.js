$(document).ready(function(){
	

	$("#content").load("handlers/load_products.php", function(response, status, xhr) {
	    if ( status == "error" ) {
	        alert("Error occured: " + xhr.status + " " + xhr.statusText );
	    } 

	});
	$("#content").on("click", "#delete",function(){
		let number = $(this).val();
		alert(number);
		$.ajax({
			url: "handlers/delete.php",
			type: "post",
			data: {id: number},
			success: function(data){
				alert(data);
				$("#content").load("handlers/load_products.php", function(response, status, xhr) {
				    if ( status == "error" ) {
				        alert("Error occured: " + xhr.status + " " + xhr.statusText );
				    } 

				});
	
			}
		});
	})
	
	$("#content").on("click", "#update", function(){
		$("#modal").show();
		$("#updateform").load("handlers/update.php",{id: $(this).val() } ,function(response, status, xhr) {
		    if ( status == "error" ) {
		        alert("Error occured: " + xhr.status + " " + xhr.statusText );
		    } 

		});
	})
	$("#exit").on("click",function(){
		$("#modal").hide();
	})

	$("#modal").on("click","#update_button" ,function(){
		
		var input = document.getElementById("imgInp");
		var name = $("#name").val();
		var price = $("#price").val();
		var brand = $("#brand").val();
		var avail = $("#avail").val();
		var id = $("#id").val();
		file = input.files[0];
		formData = new FormData();
		if(file != undefined){
			
			if(!!file.type.match(/image.*/)){
				formData.append("id", id);
				formData.append("image", file);
				formData.append("name", name);
				formData.append("brand", brand);
				formData.append("price", price);
				formData.append("avail", avail);

				$.ajax({
					url: "handlers/updateproducts.php",
					type: "post",
					data: formData,
					processData: false,
					contentType: false,
					cache: false,
					success: function(data){
						alert(data);
					}

				})
			}else{
				alert("Not a valid image")
			}
		}else{
			
			formData.append("id", id);
			formData.append("name", name);
			formData.append("brand", brand);
			formData.append("price", price);
			formData.append("avail", avail);
			$.ajax({
					url: "handlers/updateproductsnopic.php",
					type: "post",
					data: formData,
					processData: false,
					contentType: false,
					cache: false,
					success: function(data){
						alert(data);
						$(this).addClass("rotate");

					}

				})
		}

	})
});