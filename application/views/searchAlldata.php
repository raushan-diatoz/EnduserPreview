<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/plyr.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/default-skin.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/main.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo base_url()?>icon/digivive.png" sizes="32x32" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>icon/digivive.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url()?>icon/apple-touch-icon-144x144.png">
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


     
    <!-- catalog -->
    <br><br><br><br>
    <div class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <h1 class="home__title"><b>Showing all results for videos</b></h1>
                </div><br><br>
                <!-- card -->
                <?php 
						if(isset($filter)){
							
				?>
                <?php
                        foreach($filter as $item){
                           $count++;
                        ?>


                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <?php
                                if($type=='VIDEO')
                                {
                            ?>
                    <div class="card">
                        <div class="card__cover">

                            <img src="<?php echo $item->thumbnail;?>" alt="">
                            <a href="<?php echo base_url();?>user/play/<?php echo $category[0];?>/<?php echo $asset[0];?>/<?php echo $item->id;?>"
                                class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#"><?php echo $item->title;?></a></h3>
                            <span class="card__category">
                                <a href="#"><?php echo $item->genre;?></a>

                            </span>
                            <span class="card__rate"><i
                                    class="icon ion-ios-star"></i><?php echo $item->rating; ?></span>
                        </div>
                    </div>
                    <?php
                             }else if($type=='AUDIO'){
                           ?>

                    <!-- card -->
                    <div class="item">

                        <div class="card card--big">
                            <div class="card__cover">
                                <img src="<?php echo $item->thumbnail;?>" alt="">
                                <a href="<?php echo base_url();?>user/play_music/<?php echo $navbar_name;?>/<?php echo $genre_name; ?>/<?php echo $item->id;?>"
                                    class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <span class="card__title"><?php echo $item->title;?></span>
                            </div>
                        </div>

                    </div>
                    <!-- end card -->

                    <?php
                                    }else if($type=='IMAGE'){
                                  ?>
                    <!-- end card -->
                    <!-- video card -->
                    <!-- card -->
                    <div class="item" onclick="reply_click(<?php echo $img;?>)">

                        <div class="card card--big">
                            <div class="card__cover">

                                <img id="img<?php echo $img++;?>" src="<?php echo $item->thumbnail;?>" alt="">

                                <a class="card__play" href="#">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <span class="card__title"><?php echo $item->title;?></span>
                            </div>

                        </div>

                    </div>
                    <!-- end card -->
                    <?php
                                    }else if($type=='LINK'){
                               ?>
                    <!-- card -->
                    <div class="item">

                        <div class="card card--big">
                            <div class="card__cover">

                                <img src="<?php echo $item->thumbnail;?>" alt="">

                                <a class="card__play" href="<?php echo $item->url;?>">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <span class="card__title"><?php echo $item->title;?></span>
                            </div>

                        </div>

                    </div>
                    <!-- end card -->




                    <?php
                                    }
                                  ?>
                </div>
                <?php
                    }
                    ?>

                <?php
							
						}
				?>
                <!-- end card -->

            </div>
        </div>
    </div>
    <!-- end catalog -->

    
    <br><br>
    <!-- footer -->
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
   
    <script src="<?php echo base_url()?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.mousewheel.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?php echo base_url()?>js/wNumb.js"></script>
    <script src="<?php echo base_url()?>js/nouislider.min.js"></script>
    <script src="<?php echo base_url()?>js/plyr.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.morelines.min.js"></script>
    <script src="<?php echo base_url()?>js/photoswipe.min.js"></script>
    <script src="<?php echo base_url()?>js/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo base_url()?>js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.2/css/lightgallery.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.12/js/lightgallery-all.js"></script>
   <!-- -->
    
</body>

</html>
