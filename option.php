<div class="packageitem packageinfo details " id="packageoption">
					<h2>Package Options</h2>
					
					<div class="packageitemdetails packageitem1">
						<img src="images/<?php echo $data2['Img'] ?>" class="packageimage">
						<div class="data">
							<h3 style="text-transform: capitalize;"><?php echo $data2['Type'] ?></h3>
							<p>
								Includes
								Xli 2012-13 Car & Economy Hotels</p>
						</div>
						<div class="price">
							<center><h4>PKR <?php echo $data2['Price'] ?></h4>
							<a href="booking.php" class="bookingoption">Book Now</a></center>
						</div>
					</div>

					<?php 	$data2=mysqli_fetch_assoc($object2); ?>

					<div class="packageitemdetails packageitem2">
						<img src="images/<?php echo $data2['Img'] ?>" class="packageimage">
						<div class="data">
							<h3 style="text-transform: capitalize;"><?php echo $data2['Type'] ?></h3>
							<p>
								Includes 
								Xli 2012-13 Car & Standard Hotels</p>
						</div>
						<div class="price">
							<center><h4>PKR <?php echo $data2['Price'] ?></h4>
							<a href="booking.php" class="bookingoption">Book Now</a></center>
						</div>
					</div>

					<?php 	$data2=mysqli_fetch_assoc($object2); ?>

					<div class="packageitemdetails packageitem3">
						<img src="images/<?php echo $data2['Img'] ?>" class="packageimage">
						<div class="data">
							<h3 style="text-transform: capitalize;"><?php echo $data2['Type'] ?></h3>
							<p>
								Includes
								Xli 2012-13 Car & Delux Hotels</p>
						</div>
						<div class="price">
							<center><h4>PKR <?php echo $data2['Price'] ?></h4>
							<a href="booking.php" class="bookingoption">Book Now</a></center>
						</div>
					</div>
					
				</div>