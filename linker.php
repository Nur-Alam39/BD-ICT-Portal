<?php
	$connect=mysqli_connect("localhost","root","","bd_engineers");
?>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" media="all" />
<script src="scripts.js" type="text/javascript"></script>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<script src="jquery.js"></script>
<link rel="stylesheet" href="bootstrap4/css/bootstrap.css"/>
<script src="bootstrap4/js/bootstrap.js" type="text/javascript"></script>
<script>
	$('.navbar-nav .nav-link').click(function(){
    $('.navbar-nav .nav-link').removeClass('active');
    $(this).addClass('active');
});
</script>
<style>
	.navbar-light .fixed-top .nav-item > .nav-link.active  {
    color:red;
}
			.dropdown:hover>.dropdown-menu {
			  display: block;
			  margin-top:0%;
			  border:1px solid blue;
			  border-top:0px;
			  border-radius:0px;
			  font-size:14px;
			  color;
			}
			.dropdown>.dropdown-toggle:active {
			  /*Without this, clicking will make it sticky*/
				pointer-events: none;
			}
</style>
<nav class="navbar navbar-expand-sm sticky-top navbar-light" style="height:50px;background-color:#0066ff;border-bottom:px solid blue;box-shadow: 0 0 8px #666;">
		  <a class="navbar-brand" style="color:white;margin-left:1%;font-weight:bold;font-size:16px" href="index.php">বিডি আইসিটি পোর্টাল</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon" style="border:px solid #666;background-color:#fff;border-radius:2px;"></span>
		  </button>
		  <div class="collapse navbar-collapse" style="background-color:;font-size:14px;color:white;z-index:200;width:100%;margin-left:7%;" id="collapsibleNavbar">
				 <ul class="navbar-nav" style='color:white'>
				 <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:white;' href="post.php">&ensp;পোস্ট&emsp;</a>
				  </li>
				  <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:white;' href="olympiad.php">&ensp;অলিম্পিয়াড&ensp;</a>
				  </li>
				   <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:white;' href="nhspc.php">&ensp;ISCPC 2018&ensp;</a>
				  </li>
				  <li class="nav-item dropdown" style=''>
					<a class="nav-link dropdown-toggle" style='color:white' href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  প্রোগ্রামিং
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="contest.php">প্রতিযোগিতা</a>
					  <a class="dropdown-item" href="programming.php">অনুশীলনী</a>
					  <a class="dropdown-item" href="programmers.php">প্রোগ্রামার</a>
					</div>
				  </li>
				   <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:white;' href="personalities.php">ব্যক্তিত্ব&ensp;</a>
				  </li>
				  <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:white;' href="notification.php">বিজ্ঞপ্তি (৩)&ensp;</a>
				  </li>
				  <li class="nav-item">
					<a class=" nav-link" style='font-weight:;color:white;' href="links.php">&ensp;প্রয়োজনীয় লিঙ্ক&ensp;</a>
				  </li>
				  <li class="nav-item" style='margin-left:5px'>
					<a class=" nav-link btn-sm btn btn-primary" style='font-weight:;color:white;' href="login.php">লগইন </a>
				  </li>
				</ul>
		  </div> 
	</nav>