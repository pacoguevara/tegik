<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/custom.css" />
	<title>TEGIK</title>
</head>
<body>
	<div id="container">
		<head class="row">
			<div class="col-md-4 col-md-offset-4"><h1>Candidatos Tegik</h1></div>
		</head>
		<aside class="row">
			<button class="col-md-offset-2 col-md-3 btn btn-success" data-toggle="modal" data-target="#myModal">New product</button>
		</aside>
		<section class="row">
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-striped">
				  <th>ID</th>
				  <th>Name</th>
				  <th>Price</th>
				  <th>Category</th>
				  <th>Store</th>
				  <th>Created at</th>
				  <th>Updated at</th>
				  <th>Actions</th>
				  <tbody id="table_body">
				  <?php 
				  if(isset($products)):
				  	foreach ($products as $product): ?>
						<tr>
							<td><?php echo $product->id; ?></td>
							<td><?php echo $product->name; ?></td>
							<td><?php echo $product->price; ?></td>
							<td><?php echo $product->category_name; ?></td>
							<td><?php echo $product->store_name; ?></td>
							<td><?php echo $product->created_at; ?></td>
							<td><?php echo $product->updated_at; ?></td>
							<td>
								<button class="btn btn-info editButton" data-toggle="modal" idProduct="<?php echo $product->id;?>" data-target="#myModalEdit">Edit</button>
								<button class="btn btn-danger deleteButton" data-toggle="modal" idProduct="<?php echo $product->id;?>" data-target="#myModalDelete">Delete</button>
							</td>
						</tr>
			  <?php endforeach;
				  endif;
				  ?>
				  </tbody>
				</table>
			</div>
		</section>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">New product</h4>
		      </div>
		      <div class="modal-body">
		        	<div class="form-group">
					<label class="col-lg-2 control-label" for="inputName">Name</label>
					<div class="col-lg-10">
					  <input type="text" class="form-control" id="inputName" placeholder="Example...">
					</div>
					</div>
					<div class="form-group">
					<label for="inputPrice" class="col-lg-2 control-label">Price</label>
					<div class="col-lg-10">
					  <input type="text" class="form-control" id="inputPrice" placeholder="00.00">
					</div>
					</div>
					<div class="form-group">
					<label class="col-lg-2 control-label" for="selectCategory">Category</label>
					<div class="col-lg-10">
					  <select class="form-control" id="selectCategory">
					  	<option value="-">-- select a category --</option>
					  	<?php if(isset($categories)):
					  				foreach ($categories as $category): ?>
					  				<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
					  	<?php		endforeach;
					  		   endif;
					  	?>
					  </select>
					</div>
					</div>
					<div class="form-group">
					<label for="selectStore" class="col-lg-2 control-label" for="selectStore">Store</label>
					<div class="col-lg-10">
					  <select class="form-control" id="selectStore">
					  	<option value="-">-- select a store --</option>
					  	<?php if(isset($stores)):
					  				foreach ($stores as $store): ?>
					  				<option value="<?php echo $store->id;?>"><?php echo $store->name;?></option>
					  	<?php		endforeach;
					  		   endif;
					  	?>
					  </select>
					</div>
					</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" id="addProduct">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Delete confirmation -->
		<div class="modal fade" id="myModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Delete confirmation</h4>
		      </div>
		      <div class="modal-body">
		        	<p> Are your sure you want to delete this product?</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">No, I'm not sure</button>
		        <button type="button" class="btn btn-primary" id="deleteProduct">Yep! I'm sure!</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Edit product -->
		<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Edit product</h4>
		      </div>
		      <div class="modal-body">
		        	<div class="form-group">
					<label class="col-lg-2 control-label" for="editName">Name</label>
					<div class="col-lg-10">
					  <input type="text" class="form-control" id="editName" placeholder="Example...">
					</div>
					</div>
					<div class="form-group">
					<label for="editPrice" class="col-lg-2 control-label">Price</label>
					<div class="col-lg-10">
					  <input type="text" class="form-control" id="editPrice" placeholder="00.00">
					</div>
					</div>
					<div class="form-group">
					<label class="col-lg-2 control-label" for="editCategory">Category</label>
					<div class="col-lg-10">
					  <select class="form-control" id="editCategory">
					  	<option value="-">-- select a category --</option>
					  	<?php if(isset($categories)):
					  				foreach ($categories as $category): ?>
					  				<option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
					  	<?php		endforeach;
					  		   endif;
					  	?>
					  </select>
					</div>
					</div>
					<div class="form-group">
					<label for="selectStore" class="col-lg-2 control-label" for="editStore">Store</label>
					<div class="col-lg-10">
					  <select class="form-control" id="editStore">
					  	<option value="-">-- select a store --</option>
					  	<?php if(isset($stores)):
					  				foreach ($stores as $store): ?>
					  				<option value="<?php echo $store->id;?>"><?php echo $store->name;?></option>
					  	<?php		endforeach;
					  		   endif;
					  	?>
					  </select>
					</div>
					</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

	<div>
	<script src="<?php echo base_url();?>/assets/jquery.js"></script>
	<script src="<?php echo base_url();?>/assets/bootstrap.js"></script>
	<script type="text/javascript">
		$(function(){

			$('#addProduct').click(function(){
				var name = $('#inputName').val();
				var price = $('#inputPrice').val();
				var category = $('#selectCategory').val();
				var store = $('#selectStore').val();
				
				$.post("<?php echo base_url();?>/index.php/product/newProduct/", {product_name: name, product_price: price, product_category: category, product_store: store})
				.done(function(data) {
					data = JSON.parse(data);
				    alert("Product added!");
				    $('#table_body').empty();
				    for(var i = 0; i < data.length; i++){
				    	$('#table_body').append('\
				    		<tr>\
				    			<td>'+data[i].id+'</td>\
				    			<td>'+data[i].name+'</td>\
				    			<td>'+data[i].price+'</td>\
				    			<td>'+data[i].category_name+'</td>\
				    			<td>'+data[i].store_name+'</td>\
				    			<td>'+data[i].created_at+'</td>\
				    			<td>'+data[i].updated_at+'</td>\
				    			<td><button class="btn btn-info editButton" data-toggle="modal" idProduct="'+data[i].id+'" data-target="#myModalEdit">Edit</button>\
				    			<button class="btn btn-danger deleteButton" data-toggle="modal" data-target="#myModalDelete" idProduct="'+data[i].id+'">Delete</button></td>\
				    		</tr>');
				    }
				    
				});
			});

			$(document).on('click', '.deleteButton', function(){
				$('#deleteProduct').attr("idProduct", $(this).attr("idProduct"));
			});
			

			$('#deleteProduct').click(function(){
				var idProduct = $(this).attr("idProduct");
				$.post("<?php echo base_url();?>/index.php/product/deleteProduct/", {id_product: idProduct})
				.done(function(data) {
					data = JSON.parse(data);
				    alert("Product deleted!");
				    $('#table_body').empty();
				    for(var i = 0; i < data.length; i++){
				    	$('#table_body').append('\
				    		<tr>\
				    			<td>'+data[i].id+'</td>\
				    			<td>'+data[i].name+'</td>\
				    			<td>'+data[i].price+'</td>\
				    			<td>'+data[i].category_name+'</td>\
				    			<td>'+data[i].store_name+'</td>\
				    			<td>'+data[i].created_at+'</td>\
				    			<td>'+data[i].updated_at+'</td>\
				    			<td><td><button class="btn btn-info editButton" data-toggle="modal" idProduct="'+data[i].id+'" data-target="#myModalEdit">Edit</button>\
				    			<button class="btn btn-danger deleteButton" data-toggle="modal" data-target="#myModalDelete" idProduct="'+data[i].id+'">Delete</button></td>\
				    		</tr>');
				    }
				    
				});
			});

			$(document).on('click', '.editButton', function(){
				$('#saveChanges').attr("idProduct", $(this).attr("idProduct"));
				var idProduct = $(this).attr("idProduct");
				$.post("<?php echo base_url();?>/index.php/product/getProductById/", {id_product: idProduct})
				.done(function(data){
					data = JSON.parse(data);
					var product = data[0];
					//console.log(product);
					$('#editName').val(product.name);
					$('#editPrice').val(product.price);
					$('#editCategory').val(product.category_id);
					$('#editStore').val(product.store_id);
				});
			});

			$('#saveChanges').click(function(){
				var idProduct = $(this).attr("idProduct");
				var name = $('editName').val();
				var price = $('editPrice').val();
				var category_id = $('editCategory').val();
				var store_id = $('editStore').val();

				$.post("<?php echo base_url();?>/index.php/product/editProduct/", {id_product: idProduct, name_product: name, price_product: price, category_product: category_id, store_product: store_id})
				.done(function(data) {
					data = JSON.parse(data);
				    alert("Product updated!");
				    $('#table_body').empty();
				    for(var i = 0; i < data.length; i++){
				    	$('#table_body').append('\
				    		<tr>\
				    			<td>'+data[i].id+'</td>\
				    			<td>'+data[i].name+'</td>\
				    			<td>'+data[i].price+'</td>\
				    			<td>'+data[i].category_name+'</td>\
				    			<td>'+data[i].store_name+'</td>\
				    			<td>'+data[i].created_at+'</td>\
				    			<td>'+data[i].updated_at+'</td>\
				    			<td><td><button class="btn btn-info editButton" data-toggle="modal" idProduct="'+data[i].id+'" data-target="#myModalEdit">Edit</button>\
				    			<button class="btn btn-danger deleteButton" data-toggle="modal" data-target="#myModalDelete" idProduct="'+data[i].id+'">Delete</button></td>\
				    		</tr>');
				    }
				    
				});
			});

		});
	</script>
</body>
</html>