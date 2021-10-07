<link rel="stylesheet" type="text/css" href="css/navigation.css">

<div class="nav">
	<div>
		<a href="/dropshipping/products"> <button class="<?php echo ($active == 1)? "active" : ""; ?>">
			Product List
		</button></a>
	</div>
	<div>
		<a href="add_products.php"> <button  class="<?php echo ($active == 2)? "active" : "" ?>">
			Add Product
		</button></a>
	</div>
	<div>
		<a href=""><button class="<?php echo ($active == 3)?"active" : "" ?>">
			 See Buys
		</button></a>
	</div>
	<div>
		<a href="/dropshipping/userseller"> <button class="<?php echo ($active == 4)? "active" : "" ?>">
			Back
		</button></a>
	</div>
</div>
