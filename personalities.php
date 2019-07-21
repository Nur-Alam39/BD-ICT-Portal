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
						<p style="font-size:3vw;font-weight:bold;color:white;margin-top:12%" class='text-center'>বাংলাদেশে প্রোগ্রামিং কে জনপ্রিয় করার লক্ষ্যে   কয়েকজন মানুষ নিরলস পরিশ্রম করে যাচ্ছেন। তাদের কয়েক জনকে এখানে তুলে ধরা হল।<br>
						</p>
					</div>
				</div>
			</div>
				<div class="row" style="margin:0;padding:0;">
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>ডঃ মোঃ কায়কোবাদ</li>
						<li>প্রফেসর</li>
						<li>বুয়েট, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>ডঃ মোঃ জাফর ইকবাল</li>
						<li>প্রফেসর</li>
						<li>শাবিপ্রবি, সিলেট</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>শাহরিয়ার মনজুর</li>
						<li>প্রফেসর</li>
						<li>EWU, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>হাসনাইন হেইকেল </li>
						<li>প্রফেসর</li>
						<li>ঢাবি, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>শাহরিয়ার মনজুর</li>
						<li>প্রফেসর</li>
						<li>EWU, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>আশরাফুল শোভন</li>
						<li>প্রফেসর</li>
						<li>, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>মোঃ মাহমুদুর রহমান</li>
						<li>প্রফেসর</li>
						<li>, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>মুনির হাসান</li>
						<li>প্রফেসর</li>
						<li>, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>তাহমিদ রাফি</li>
						<li>প্রফেসর</li>
						<li>, ঢাকা</li>
					</button>
					<button id='butinfo_".$id."' class='col-lg-2 userinfo btn btn-default' 
						style='margin-left:%;font-size:14px;background-color:white;
						border:0px;margin-top:2%;list-style:none;'>
						<img src='images/demo.png' style='width:150px;height:150px;border-radius:50%;' alt='pic'>
						<li style='font-weight:bold;'>শাফায়েত আশরাফ</li>
						<li>প্রফেসর</li>
						<li>, ঢাকা</li>
					</button>
					<!--শাফায়েত আশরাফ<br>
					তামিম শারিয়ার সুবিন<br>
					NSU<br>-->
				</div>
			</div>
		<?php include "footer.php";?>
	</body>
</html>