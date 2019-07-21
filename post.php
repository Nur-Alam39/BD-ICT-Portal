<!DOCTYPE html>
<html>
	<title>POST | BD ICT PORTAL</title>
	<link rel="icon" href="icon2.png" />
	<head>
		<?php include "linker.php";?>
		<style>
			.col-lg-12{margin-top:6%;}
			.card{text-align:left;}
			.card:hover
			{
				box-shadow:0px 0px 28px #b3b3b3;
				transition-duration: 0.4s;
			}
			.card-img-top{padding:1%;height:70%;}
			
		</style>
	</head>
	<body>	
		<nav class="navbar navbar-expand-sm sticky-top navbar-light" style="background-color:#fff;border-bottom:1px solid blue;box-shadow: 0 0 px #d9d9d9;">
		  <a class="navbar-brand" style="color:blue;margin-left:1%;font-weight:bold;font-size:20px" href="index.php"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon" style="border:px solid #666;background-color:blue;border-radius:2px;"></span>
		  </button>
		  <div class="collapse navbar-collapse" style="background-color:;color:white;z-index:200;width:100%;margin-left:7%;" id="collapsibleNavbar">
				 <ul class="navbar-nav" style='color:white'>
				 <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:blue;' href="post.php">&ensp;SEARCH&emsp;</a>
				  </li>
				  <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:blue;' href="olympiad.php">&ensp;NOTIFICATION&emsp;</a>
				  </li>
				   <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:blue;' href="nhspc.php">&ensp;ASK QUESTION&emsp;</a>
				  </li>
				  <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:blue;' href="nhspc.php">&ensp;REMINDER&emsp;</a>
				  </li>
				</ul>
		  </div> 
		</nav>
		<div class='container-fluid' style='margin:0;padding:0'>
			<div class="row" style="margin:0;width:100%;padding-bottom:0%;border:0;">
				<div class='col-lg-2' style='background-color:#f2f2f2;height:600px;padding:4%;list-style:none;'>
					<h6>Top Contributors</h6>
					<li>1. <a href="#">Tamim Shariar Subben</a></li>
					<li>2. <a href="#">Tahmid Rafi</a></li>
					<li>3. <a href="#">Mahbubul Hasan</a></li>
					<li>4. <a href="#">Sahed Sohel</a></li>
					<li>5. <a href="#">Tonmoy Mollick</a></li>
					<h6 style='margin-top:5%'>Posts of Month</h6>
					<li><a href="#">December, 2018</a></li>
					<li><a href="#">November, 2018</a></li>
					<li><a href="#">October, 2018</a></li>
					<li><a href="#">September, 2018</a></li>
					<li><a href="#">August, 2018</a></li>
				</div>
				<div class='col-lg-7' style='background-color:#fff;;height:600px;padding:4%;overflow:auto'>
					<h6>POSTS</h6>
					<div class="card " style='background-color:'>
					<img class="card-img-top" src="distantplanets.jpg" alt="">
					<div class="card-body">
					  <h5 class="card-title">Bangladesh getting ready to explore distant planets</h5>
					  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated 3 mins ago</small>
					</div>
				  </div>
				  <div class="card " style='background-color:;margin-top:5%'>
					<img class="card-img-top" src="inbox_spam.jpg" alt="">
					<div class="card-body">
					  <h5 class="card-title">Keeping your inbox spam free</h5>
					  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated 3 mins ago</small>
					</div>
				  </div>
				  <div class="card " style='background-color:;margin-top:5%'>
					<img class="card-img-top" src="inbox_spam.jpg" alt="">
					<div class="card-body">
					  <h5 class="card-title">Keeping your inbox spam free</h5>
					  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated 3 mins ago</small>
					</div>
				  </div>
				  <div class="card " style='background-color:;margin-top:5%'>
					<img class="card-img-top" src="inbox_spam.jpg" alt="">
					<div class="card-body">
					  <h5 class="card-title">Keeping your inbox spam free</h5>
					  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated 3 mins ago</small>
					</div>
				  </div>
				  <div class="card " style='background-color:;margin-top:5%'>
					<img class="card-img-top" src="inbox_spam.jpg" alt="">
					<div class="card-body">
					  <h5 class="card-title">Keeping your inbox spam free</h5>
					  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated 3 mins ago</small>
					</div>
				  </div>
				</div>
				<div class='col-lg-3' style='background-color:#f2f2f2;;height:600px;padding:4%'>
					<h6>Suggestted Posts</h6>
					<h6>Top read posts</h6>
				</div>
			</div>
		</div>
	</body>
</html>