

<?php include "includes/header.php" ?>

	<div class="container-fluid bg-light-gray watch">
		<div class="container mt-5 cloth" id="mensCloth">
			<div class="container pt-5 title_pad">
				<div class="row">
					<h3>Men's Cloth</h3>
				</div>
				<div class="underline"></div>
			</div>
			<div class="row">
				<?php
				 $host="localhost";
                 $username="root";
                 $password="";
                 $db="ecommerce";
                 $conn=mysqli_connect("$host","$username","$password","$db")or die("not connected");
                 $query="SELECT * FROM men_cloth";
                 $select=mysqli_query($conn,$query);
                 while($row=mysqli_fetch_assoc($select)){
                 	$img=$row['cloth_img'];
                 	$title=$row['title'];
                 	$price=$row['price'];

                 	?>

                 	<div class="col-md-3">
					<div class="card">
						<img src="products/tshirt/<?php echo $img; ?>" class="card-img-top">
						<div class="card-body">
							<h5><?php echo $title; ?></h5>
							<h5><?php echo $price; ?></h5>
							<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To Cart</button>
						</div>
					</div>
				</div>
                 <?php } ?>        
			</div>
		</div>




	

		<div class="container mt-5 pb-5 watch_pad" id="mensWatches">
			<div class="container mt-5 title_pad">
				<div class="row" style="padding:10px">
					<h3>Men's Watch</h3>
				</div>
				<div class="row">
					<div class="underline"></div>
				</div>
			</div>
			<div class="row">


				<?php
				 $host="localhost";
                 $username="root";
                 $password="";
                 $db="ecommerce";
                 $conn=mysqli_connect("$host","$username","$password","$db")or die("not connected");
                 $query="SELECT * FROM men_watch";
                 $select=mysqli_query($conn,$query);

                 while ($row=mysqli_fetch_assoc($select)){

                 	$img=$row['watch_img'];
                 	$title=$row['title'];
                 	$price=$row['price'];
                 	
                 	?>
                 	<div class="col-md-3">
					<div class="card">
						<img src="products/watch/<?php echo $img; ?>" alt="show" class="card-img-top">
						<div class="card-body">
							<h5><?php echo $title; ?></h5>
							<h6><?php echo $price; ?></h6>
							<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"> Add To
									Cart</i></button>
						</div>
					</div>
				</div>

                 <?php } ?>
			</div>
		</div>

	</div>

	<div class="container-fluid bg-light-gray pt-5 pb-5" id="mensShoes">
		

		<div class="container mt-5 shoe">
			<div class="container title_pad">
				<div class="row">
					<h4>Men's Shoes</h4>
				</div>
				<div class="row">
					<div class="underline"></div>
				</div>
			</div>
			<div class="row">
				<?php
				 $host="localhost";
                 $username="root";
                 $password="";
                 $db="ecommerce";
                 $conn=mysqli_connect("$host","$username","$password","$db")or die("not connected");
                 $query="SELECT * FROM men_shoe";
                 $select=mysqli_query($conn,$query);

                 while ($row=mysqli_fetch_assoc($select)){

                 	$img=$row['shoe_img'];
                 	$title=$row['title'];
                 	$price=$row['price'];
                 	
                 	?>
                 	<div class="col-md-3">
					<div class="card shoe">
						<img src="products/shoe/<?php echo $img; ?>" class="card-img-top img-responsive" alt="image">
						<div class="card-body">
							<h4><?php echo $title; ?></h4>
							<h6><?php echo $price; ?></h6>
							<button class="btn btn-danger"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add To
								Cart</button>
						</div>
					</div>
				</div>

                 <?php } ?>


			</div>
		</div>
	</div>




	<div class="container pb-5 blog" id="blog">

		<div class="container mt-5">
			<div class="row">
				<h4>BLOG</h4>
			</div>
			<div class="row">
				<div class="underline"></div>
			</div>
		</div>
		<div class="row">
			<?php
				 $host="localhost";
                 $username="root";
                 $password="";
                 $db="ecommerce";
                 $conn=mysqli_connect("$host","$username","$password","$db")or die("not connected");
                 $query="SELECT * FROM blog";
                 $select=mysqli_query($conn,$query);

                 while ($row=mysqli_fetch_assoc($select)){

                 	$img=$row['img'];
                 	$title=$row['title'];
                 	$short_des=$row['short_des'];
                 	$auth_name=$row['auth_name'];
                 	$date=$row['date'];
                 	
                 	?>
                 	<div class="col-md-6">
				<div class="media mt-5">
					<img src="products/blog/<?php echo $img; ?>" class="img-fluid mr-3" alt="media1">
					<div class="media-body">
						<h5><?php echo $title; ?></h5>
						<p><?php echo $short_des; ?></p>
						<p><i class="fa fa-user" aria-hidden="true"></i><?php echo $auth_name; ?> <span><?php echo $date; ?></span></p>

					</div>
				</div>
			</div>

                 <?php } ?>
		</div>
	</div>

	<?php include "includes/footer.php" ?>