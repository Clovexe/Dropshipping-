$(document).ready(function(){
	imgInp.onchange = evt => {
 		const [file] = imgInp.files

		if (file) {
			blah.src = URL.createObjectURL(file);
			$("#img_container").height("40%");
		}
	}


	$("#button_hey").on("click", function(){
		var input = document.getElementById("imgInp");
		var name = $("#name").val();
		var price = $("#price").val();
		var brand = $("#brand").val();
		var avail = $("#avail").val();

		file = input.files[0];
		if(file != undefined){
			formData = new FormData();
			if(!!file.type.match(/image.*/)){
				formData.append("image", file);
				formData.append("name", name);
				formData.append("brand", brand);
				formData.append("price", price);
				formData.append("avail", avail);

				$.ajax({
					url: "handlers/add.php",
					type: "post",
					data: formData,
					processData: false,
					contentType: false,
					success: function(data){
						alert(data);
					}

				})
			}else{
				alert("Not a valid image")
			}
		}else{
			alert("Input something")
		}
	});

});