<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/plyr.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/photoswipe.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/default-skin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>icon/digivive.png" sizes="32x32">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>icon/digivive.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>icon/apple-touch-icon-144x144.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Onboarding Entertainment Solution</title>

</head>

<body class="body">
	<!-- Sidebar -->
	<!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-animate-left"
        style="display:none;z-index:10001;top: 0;width: 300px;background: #1A1E21;" id="mySidebar">
        <div class="sidebar-header">
            <button class="button1" style="float: right;" onclick="w3_close()"><i
                    class="fa fa-close fa-lg"></i></button>
            <div class="user-pic">
                <?php 
				  if(isset($user_details[0]->picture)){
				  
				  ?>
                <img class="img-responsive img-rounded" src="./uploads/<?php	echo $user_details[0]->picture; ?>"
                    alt="User picture">
                <?php
				  }
				  else{
				  ?>

                <img class="img-responsive img-rounded"
                    src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                    alt="User picture">
                <?php
				}
				?>
            </div>
            <div class="user-info pt-2">
                <span class="user-name font-weight-bold">
                    <?php	echo $user_details[0]->user_name; ?>
                </span>
                <span class="user-role"><?php	echo $user_details[0]->email; ?></span>
                <span class="user-status">
                    <i class="fa fa-circle"></i>
                    <span>Online</span>
                </span>
            </div>

        </div>
        <hr class="colorgraph">
        <div style="padding: 0px 30px 30px 30px;">
            <div class="row side_nav">
                <div class="col-1">
                    <img src="<?php echo base_url()?>icon/profile.svg" />
                </div>
                <div class="col-8">
                    <a href="<?php echo base_url();?>user/user_profile" class="side_nav_menu">
                        Profile
                    </a>
                </div>
            </div>
            <div class="row side_nav">
                <div class="col-1">
                    <img src="<?php echo base_url();?>icon/payment.svg" />
                </div>
                <div class="col-8">
                    <a href="#" class="side_nav_menu">
                        Payment
                    </a>
                </div>
            </div>
            <div class="row side_nav">
                <div class="col-1">
                    <img src="<?php echo base_url();?>icon/upcoming-stops.svg" />
                </div>
                <div class="col-8">
                    <a href="<?php echo base_url();?>user/gpsData" class="side_nav_menu">
                        Upcoming Stops
                    </a>
                </div>
            </div>
            <div class="row side_nav">
                <div class="col-1">
                    <img src="<?php echo base_url();?>icon/about-us.svg" />
                </div>
                <div class="col-8">
                    <a href="#" class="side_nav_menu">
                        About Us
                    </a>
                </div>
            </div>
            <div class="row side_nav">
                <div class="col-1">
                    <img src="<?php echo base_url();?>icon/privacy-policy.svg" />
                </div>
                <div class="col-8">
                    <a href="#" class="side_nav_menu">
                        Privacy Policy
                    </a>
                </div>
            </div>
            <div class="row side_nav">
                <div class="col-1">
                    <img src="<?php echo base_url();?>icon/internet-access-1.svg" />
                </div>
                <div class="col-7">
                    <a href="#" class="side_nav_menu">
                        Internet Access
                    </a>
                </div>
                <div class="material-switch col-2" style="display: inline-table;padding-top: 3px;">
                    <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox" />
                    <label for="someSwitchOptionInfo" class="label-info"></label>
                </div>
            </div>
            <div class="row side_nav" style="padding-top: 50px;">
                <div class="col-8">
                    <a href="<?php echo base_url();?>user/logout" class="log_out">
                        Log out
                    </a>
                </div>
            </div>
        </div>
    </div>

	<!-- Page Content -->
	<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer;" id="myOverlay"></div>

	<!-- header -->
    <header class="header">
        <div class="header__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__content">
                            <button class="header__btn1" onclick="w3_open()">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- header logo -->
                            <a href="<?php echo base_url();?>user" class="header__logo">
                                <img src="<?php echo base_url();?>img/oes-logo.svg" alt="" class="img-logo">
                            </a>
                            <!-- end header logo -->
                             <!-- header nav -->
                             <ul class="header__nav">
                                 <li class="header__nav-item ">

                                <a class="header__nav-link"
                                    href="<?php echo base_url()?>user">HOME</a>
                                </li>
                            
                               <?php 
                                foreach($navbar as $nav){
                                    
                              ?>
                            <!-- header nav -->
                          
                                <li class="header__nav-item">
                                    <a class="header__nav-link"
                                        href="<?php echo base_url()?>user/browse/<?php echo $nav->Name; ?>"><?php echo $nav->Name;?></a>
                                </li>

                          
                            <!-- end header nav -->
                            <?php
                                }
                              ?>

                            
                            
                            
                            
                            </ul>
                           
                            <!-- header auth -->
                            <div class="header__auth">
                                <button class="header__search-btn" type="button">
                                    <i class="icon ion-ios-search" id="search-logo"></i>
                                </button>

                                <!-- <a href="signin.html" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>sign out</span>
								</a> -->
                            </div>
                            <!-- end header auth -->

                            <!-- header menu btn -->
                            <!-- <button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button> -->
                            <!-- end header menu btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header search -->
        <form method="post" autocomplete="off" action="<?php echo base_url();?>User/search_movieData"
            class="header__search">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__search-content" class="autocomplete">
                            <input id="myInput" type="text" name="title"
                                placeholder="Search for a movie, TV Series that you are looking for" required> required>

                            <button type="submit">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end header search -->
    </header>
    <!-- end header -->

    <?php
	   if(!empty($stopNames))
        {
	?>   
	<div class="container" style="padding-top: 100px;padding-left:70px">

		<div class="wrapper-1">
			<ul class="StepProgress">
				<div class="upcomingCard" style="background: #2a3139;padding: 5px;">
					<li class="StepProgress-item"><strong class="time" style="margin-left:-96px;font-size:13px;"><?php echo $startTime; ?></strong><strong><?php echo $startLocation;?></strong></li>
					<!-- <li class="StepProgress-item current"><strong style="font-size: 14px;">Award an entry</strong>
						
					</li> -->
				</div>	
				<div class="upcomingCard" style="background: #2a3139;padding: 5px;">
					<?php 
					   $i=0;
						  foreach($stopNames as $Names)
						  {
                            if(empty($nextTime[$i])){
								$nextTime[$i]=null;
							}
					 ?>
				   	<li class="StepProgress-item"><strong class="time" style="margin-left:-96px;font-size:13px;"><?php echo $nextTime[$i++]; ?></strong><strong style="font-size: 14px;"><?php echo $Names;?></strong></li>
					
				    <?php
						  }
					?>
						<!-- <p style="font-size: 8px;">Got more entries that you love? Buy more entries anytime! Just hover
							on
							your favorite entry and
							click the Buy button</p> -->
					
				</div>
				<div class="upcomingCard" style="background: #2a3139;padding: 5px;">
					<li class="StepProgress-item"><strong class="time" style="margin-left:-96px;font-size:13px;"><?php echo $arrivalTime; ?></strong><strong><?php echo $endLocation;?></strong></li>
				</div>
			</ul>
		</div>

	</div>

   <?php
	}
	?>
     <!-- footer -->
       <footer class="footer  text-center">
        <div class="row " id="myDIV">
            <div class="col-1" ></div>
            <div class="col-2">
                
                <a href="<?php echo base_url()?>user"><button class="btn "><img style="width:33px;"
                            src="<?php echo base_url();?>img/Layer%202%20(10).svg"></button></a>
            </div>
            <?php 
      foreach($navbar as $nav){
                                    
     ?>
            <div class="col-2 ">
               
                <a href="<?php echo base_url()?>user/browse/<?php echo $nav->Name;?>"><button class="btn"><img
                            src="<?php echo $nav->Icon; ?>"></button></a>
                
            </div>
            <?php
      }
      ?>
            <div class="col-1 "></div>
        </div>
    </footer>
    <!-- end footer -->

	
	<style>
		.StepProgress {
			position: relative;
			padding-left: 35px;
			list-style: none;
		}

		.StepProgress::before {
			display: inline-block;
			content: '';
			position: absolute;
			top: 0;
			left: 10px;
			width: 10px;
			height: 95%;
			border-left: 2px solid #414952;
		}

		.StepProgress-item {
			position: relative;
			counter-increment: list;
			color: #ffffff;
		}

		.StepProgress-item:not(:last-child) {
			padding-bottom: 20px;
		}

		.StepProgress-item::before {
			display: inline-block;
			content: '';
			position: absolute;
			left: -30px;
			height: 100%;
			width: 10px;
		}

		.StepProgress-item::after {
			content: '';
			display: inline-block;
			position: absolute;
			top: 0;
			left: -35px;
			width: 12px;
			height: 12px;
			border: 2px solid #414952;
			border-radius: 50%;
			background-color: #2A3139;
		}

		/* 
		.is-done::before {
			border-left: 2px solid #414952;
		} */

		/* .is-done::after {
			content: "✔";
			font-size: 10px;
			color: #FFF;
			text-align: center;
			border: 2px solid #414952;
			background-color: #414952;
		} */
		.StepProgress-item p {
			width: 180px;
			height: auto;
		}

		/* .current::before {
			border-left: 2px solid #414952;
		} */

		.current {
			width: 200px;
			background-color: #606A73;
			border-radius: 10px 100px 30px 20px;
		}

		.current::after {
			/* content: counter(list); */
			padding-top: 1px;
			width: 12px;
			height: 12px;
			top: -4px;
			left: -35px;
			font-size: 14px;
			text-align: center;
			color: #414952;
			border: 2px solid #414952;
			background-color: #2A3139;
		}

		strong {
			display: block;
			color: #ffffff;
		}
	</style>

	<!-- JS -->
	<script>
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("myOverlay").style.display = "block";
		}

		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("myOverlay").style.display = "none";
		}
	</script>

	<script src="<?php echo base_url();?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.mCustomScrollbar.min.js"></script>
	<script src="<?php echo base_url();?>js/wNumb.js"></script>
	<script src="<?php echo base_url();?>js/nouislider.min.js"></script>
	<script src="<?php echo base_url();?>js/plyr.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.morelines.min.js"></script>
	<script src="<?php echo base_url();?>js/photoswipe.min.js"></script>
	<script src="<?php echo base_url();?>js/photoswipe-ui-default.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
</body>

</html>
