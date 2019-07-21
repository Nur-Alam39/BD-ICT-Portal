<!DOCTYPE html>
<html>
	<title>PROGRAMMERS | BD ICT PORTAL</title>
	<link rel="icon" href="icon2.png" />
	<head>
		<?php include "linker.php";?>
		<style>
			.col-lg-12{margin-top:6%;}
		</style>
	</head>
	<body>	
		<!-- Modal -->
			   <div class="modal" id="empModal">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

						  <!-- Modal Header -->
						  <div class="modal-header">
							<h4 class="modal-title">PROFILE</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

						  <!-- Modal body -->
						  <div class="modal-body" id="teacher">

						  </div>
						  <!-- Modal footer -->
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>

						</div>
					</div>
				</div>
		<div class='container-fluid' style='margin:0;padding:0'>
			<div class="row" style="background-image:url(back2.png);
								background-attachment:fixed;height:;margin:0;margin-top:0%;width:100%;
								padding-bottom:0%;border:0;background-repeat:no-repeat; background-size:100% 100%;">
				<div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.5);padding-bottom:21%">
					<div class="col-md-12" >
						<p style="font-size:3vw;font-weight:bold;color:white;margin-top:12%" class='text-center'>বিশ্বের বড় বড় প্রযুক্তি প্রতিষ্ঠানে বাংলাদেশের অনেক  প্রোগ্রামার কর্মরত আছে।  তাদের কয়েক জনকে এখানে তুলে ধরা হল।<br>
						</p>
					</div>
				</div>
			</div>
				<div class="col-lg-12" style="padding:3%;margin-top:2%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/google.png' style='width:180px;height:68px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
					 <?php 
						$query = "select * from engineers_list where company='Google'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:2.3%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>	
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold'><img src='images/micorsoft_2.jpg' style='width:240px;height:65px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
				<div class='col-lg-2'></div>
					 <?php 
						$query = "select * from engineers_list where company='Microsoft'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:2.3%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: University".$university."</li>
									</button>";
					}
					?>	
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/facebook.png' style='width:260px;height:70px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
				<div class='col-lg-4'></div>
					  <?php 
						$query = "select * from engineers_list where company='Facebook'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:%;font-size:14px;background-color:white;
												 border:0px;margin-top:%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>		
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/amazon.png' style='width:180px;height:68px;'/></h4></div>
				<div class="row text-center" style="margin:0;padding:0;">
				<div class='col-lg-5'></div>
					 <?php 
						$query = "select * from engineers_list where company='Amazon'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>	
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/twitter.jpg' style='width:260px;height:70px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
					<div class='col-lg-4'></div>
					  <?php 
						$query = "select * from engineers_list where company='Twitter'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>		
				</div>
				<div class="row" style="background-image:url(bangladesh_flag.jpg);
								background-attachment:fixed;height:;margin:0;margin-top:2%;width:100%;
								border:0;background-repeat:no-repeat; background-size:100% 100%;">
					<div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.3);padding-bottom:19%">
						<div class="col-md-12" >
							<p style="font-size:3vw;font-weight:bold;color:white;margin-top:18%" class='text-center'>এরা বাংলাদেশের গর্ব<br>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/linkedin.png' style='width:260px;height:70px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
				<div class='col-lg-5'></div>
					  <?php 
						$query = "select * from engineers_list where company='Linkedin'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>		
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/youtube.jpg' style='width:180px;height:55px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
				<div class='col-lg-5'></div>
					  <?php 
						$query = "select * from engineers_list where company='Youtube'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>	
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/booking.png' style='width:220px;height:60px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
					  <?php 
						$query = "select * from engineers_list where company='Booking.com'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:2.3%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>	
				</div>
				<div class="col-lg-12" style="padding:3%;text-align:center;"><h2 style='color:#000000;font-weight:bold;'><img src='images/grab.png' style='width:130px;height:50px;'/></h4></div>
				<div class="row" style="margin:0;padding:0;">
				<div class='col-lg-4'></div>
					  <?php 
						$query = "select * from engineers_list where company='Grab'";
						$result = mysqli_query($connect,$query);
						while($row = mysqli_fetch_array($result)){
							$id = $row['id'];
							$name = $row['Name'];
							$company = $row['company'];
							$location = $row['location'];
							$position = $row['position'];
							$university = $row['university'];
							$image = $row['image'];
							echo "<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
										  style='margin-left:%;font-size:14px;background-color:white;
												 border:0px;margin-top:2%;list-style:none;'>
										<img src='images/".$image."' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
										<li style='font-weight:bold;'>".$name."</li>
										<li>".$position."</li>
										<li>".$company.", ".$location."</li>
										<li class='responsive'>From: ".$university."</li>
									</button>";
					}
					?>	
				</div>
				
		</div>
		<?php include "footer.php";?>
	</body>
</html>