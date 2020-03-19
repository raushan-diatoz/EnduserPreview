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
    <!--  for music -->



    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/plugins/player/volume.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/music.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

     <!--End for Music -->

</head>

<body class="body">
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
            </div>
        </div>
        <hr class="colorgraph">
        <div style="padding: 0px 30px 30px 30px;">
            <div class="row side_nav">
                <div class="col-1">
                    <img src="<?php echo base_url();?>icon/profile.svg" />
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
    <!-- end header -->

    <br><br><br><br>
    <div class="container">
        <div class="ms_weekly_wrapper">
            <div class="ms_weekly_inner">
                <div class="row">

                    <div class="col-12">

                        <h1 class="home__title"><b>Music</b></h1>
                    </div>
                    <div id="songContainers" class="col-lg-4 col-md-12 col-lg-5 col-md-4 padding_right40">

                        <div id="song<?php echo ++$count; ?>" class="ms_weekly_box">
                            <div class="weekly_left">
                                <div class="w_top_song">
                                    <div class="w_tp_song_img">
                                        <img src="<?php echo $data_filter->thumbnail;?>" alt=""
                                            class="img-fluid" id="image<?php echo $count;?>">

                                        <div class="ms_song_overlay">
                                        </div>
                                        <div>
                                            <span style="display:none;"
                                                id="mp3<?php echo $count;?>"><?php echo $data_filter->url;?><span>
                                        </div>
                                        <div class="ms_play_icon">
                                            <img src="<?php echo base_url();?>images/svg/play.svg" alt=""
                                                style="display:show;">
                                            <div class="ms_bars" style="display:none;"
                                                id="play_show<?php echo $count;?>">
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_tp_song_name">
                                        <h3 id="title<?php echo $count;?>"><a href="#"><?php echo $data_filter->title;?></a></h3>
                                        <p id="artist<?php echo $count;?>">Ava Cornish</p>
                                    </div>

                                </div>

                            </div>

                            <div class="weekly_right">
                                <span class="w_song_time">4:27</span>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="ms_weekly_wrapper">
            <div class="ms_weekly_inner">
                <div class="row">
                    <?php 
                     if(isset($suggestion)){
                         ?>
                    <div class="col-12">

                        <h1 class="home__title"><b>Similar Music</b></h1>
                    </div>
                    <div id="songContainer" class="col-lg-4 col-md-12 col-lg-5 col-md-4 padding_right40">
                        <?php 
                         
                          foreach($suggestion as $music){  
                       
                         ?>
                        <div id="song<?php echo ++$count; ?>" class="ms_weekly_box">
                            <div class="weekly_left">
                                <span class="w_top_no">
                                    <?php echo ++$i;?>
                                </span>
                                <div class="w_top_song">
                                    <div class="w_tp_song_img">
                                        <img src="<?php echo $music->thumbnail;?>" alt=""
                                            class="img-fluid" id="image<?php echo $count;?>">

                                        <div class="ms_song_overlay">
                                        </div>
                                        <div>
                                            <span style="display:none;"
                                                id="mp3<?php echo $count;?>"> <?php echo $music->url;?><span>
                                        </div>
                                        <div class="ms_play_icon">
                                            <img src="<?php echo base_url();?>images/svg/play.svg" alt=""
                                                style="display:show;">
                                            <div class="ms_bars" style="display:none;"
                                                id="play_show<?php echo $count;?>">
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                                <div class="bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w_tp_song_name">
                                        <h3 id="title<?php echo $count;?>"><a href="#"> <?php echo $music->title;?></a></h3>
                                        <p id="artist<?php echo $count;?>">Ava Cornish</p>
                                    </div>

                                </div>

                            </div>

                            <div class="weekly_right">
                                <span class="w_song_time">5:10</span>

                            </div>

                        </div>

                        <div class="ms_divider"></div>

                        <?php
                          }
                     }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!----Footer Start---->

    <!----Audio Player Section---->
    <div class="ms_player_wrapper">
        <div class="ms_player_close">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>
        <div class="player_mid">
            <div class="audio-player">
                <div id="jquery_jplayer_1" class="jp-jplayer"></div >
                <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                    <div class="player_left">
                        <div class="ms_play_song">
                            <div class="play_song_name">
                                <a href="javascript:void(0);" id="playlist-text">
                                    <div class="jp-now-playing flex-item">
                                        <div class="jp-track-name1"></div>
                                        <div class="jp-artist-name1"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <span class="play-left-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
                    <!----Right Queue---->
                    <div class="jp_queue_wrapper">
                        <span class="que_text" id="myPlaylistQueue"><i class="fa fa-angle-up" aria-hidden="true"></i>
                            queue</span>
                        <div id="playlist-wrap" class="jp-playlist">
                            <div class="jp_queue_cls"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <h2>queue</h2>
                            <div class="jp_queue_list_inner">
                                <ul>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="jp-type-playlist">
                        <div class="jp-gui jp-interface flex-wrap">
                            <div class="jp-controls flex-item">
                                <button class="jp-previous" tabindex="0">
                                    <i class="ms_play_control"></i>
                                </button>
                                <button class="jp-play">
                                    <i class="ms_play_control"></i>
                                </button>
                                <button class="jp-next">
                                    <i class="ms_play_control" id="record"></i>
                                </button>
                                <button type="button" id="record">

                                </button>
                            </div>
                            <div class="jp-progress-container flex-item">
                                <div class="jp-time-holder">
                                    <span class="jp-current-time" role="timer" aria-label="time">&nbsp;</span>
                                    <span class="jp-duration" role="timer" aria-label="duration">&nbsp;</span>
                                </div>
                                <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar">
                                            <div class="bullet">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-volume-controls flex-item">
                                <div class="widget knob-container">
                                    <div class="knob-wrapper-outer">
                                        <div class="knob-wrapper">
                                            <div class="knob-mask">
                                                <div class="knob d3"><span></span></div>
                                                <div class="handle"></div>
                                                <div class="round">
                                                    <img src="<?php echo base_url();?>images/svg/volume.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <input></input> -->
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!--main div-->
    </div>
    </div>

<br><br><br><br><br><br>
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
    <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active_1");
            current[0].className = current[0].className.replace(" active_1", "");
            this.className += " active_1";
        });
    }
    </script>


    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery_music.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/plugins/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/plugins/player/jplayer.playlist.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/plugins/player/jquery.jplayer.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/plugins/player/audio-player.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/plugins/player/volume.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/plugins/nice_select/jquery.nice-select.min.js">
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>js/plugins/scroll/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/custom_music.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.mousewheel.min.js"></script>

    <script src="<?php echo base_url()?>js/wNumb.js"></script>
    <script src="<?php echo base_url()?>js/nouislider.min.js"></script>
    <script src="<?php echo base_url()?>js/plyr.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.morelines.min.js"></script>
    <script src="<?php echo base_url()?>js/photoswipe.min.js"></script>
    <script src="<?php echo base_url()?>js/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo base_url()?>js/main.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        $(function() {
            "use strict";
            if ($('.audio-player').length) {
                var myPlayListOtion =
                    '<ul class="more_option"><li><a href="#"><span class="opt_icon" title="Add To Favourites"><span class="icon icon_fav"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Queue"><span class="icon icon_queue"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Download Now"><span class="icon icon_dwn"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Add To Playlist"><span class="icon icon_playlst"></span></span></a></li><li><a href="#"><span class="opt_icon" title="Share"><span class="icon icon_share"></span></span></a></li></ul>';

                var myPlaylist = new jPlayerPlaylist({
                    jPlayer: "#jquery_jplayer_1",
                    cssSelectorAncestor: "#jp_container_1"
                }, [{

                    image: $(`#song0`).find(`#image0`).attr('src'),
                    title: $(`#song0`).find(`#title0`).text().trim(),
                    artist: $(`#song0`).find(`#artist0`).text().trim(),
                    mp3: $(`#song0`).find(`#mp30`).text().trim(),
                    option: myPlayListOtion
                }], {
                    swfPath: "js/plugins",
                    supplied: "oga, mp3",
                    wmode: "window",
                    useStateClassSkin: true,
                    autoBlur: false,
                    smoothPlayBar: true,
                    keyEnabled: true,
                    playlistOptions: {
                    autoPlay: true
                    }
                });

                $("#jquery_jplayer_1").on($.jPlayer.event.ready + ' ' + $.jPlayer.event.play, function(
                    event) {
                    var current = myPlaylist.current;
                    var playlist = myPlaylist.playlist;
                    $.each(playlist, function(index, obj) {
                        if (index == current) {
                            $(".jp-now-playing").html(
                                "<div class='jp-track-name'><span class='que_img'><img src='" +
                                obj.image + "'></span><div class='que_data'>" + obj
                                .title + " <div class='jp-artist-name'>" + obj
                                .artist + "</div></div></div>");
                        }
                    });
                    $('.knob-wrapper').mousedown(function() {
                        $(window).mousemove(function(e) {
                            var angle1 = getRotationDegrees($('.knob')),
                                volume = angle1 / 270

                            if (volume > 1) {
                                $("#jquery_jplayer_1").jPlayer("volume", 1);
                            } else if (volume <= 0) {
                                $("#jquery_jplayer_1").jPlayer("mute");
                            } else {
                                $("#jquery_jplayer_1").jPlayer("volume",
                                    volume);
                                $("#jquery_jplayer_1").jPlayer("unmute");
                            }
                        });

                        return false;
                    }).mouseup(function() {
                        $(window).unbind("mousemove");
                    });


                    function getRotationDegrees(obj) {
                        var matrix = obj.css("-webkit-transform") ||
                            obj.css("-moz-transform") ||
                            obj.css("-ms-transform") ||
                            obj.css("-o-transform") ||
                            obj.css("transform");
                        if (matrix !== 'none') {
                            var values = matrix.split('(')[1].split(')')[0].split(',');
                            var a = values[0];
                            var b = values[1];
                            var angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
                        } else {
                            var angle = 0;
                        }
                        return (angle < 0) ? angle + 360 : angle;
                    }





                    var timeDrag = false;
                    $('.jp-play-bar').mousedown(function(e) {
                        timeDrag = true;
                        updatebar(e.pageX);

                    });
                    $(document).mouseup(function(e) {
                        if (timeDrag) {
                            timeDrag = false;
                            updatebar(e.pageX);
                        }
                    });
                    $(document).mousemove(function(e) {
                        if (timeDrag) {
                            updatebar(e.pageX);
                        }
                    });
                    var updatebar = function(x) {
                        var progress = $('.jp-progress');
                        var position = x - progress.offset().left;
                        var percentage = 100 * position / progress.width();
                        if (percentage > 100) {
                            percentage = 100;
                        }
                        if (percentage < 0) {
                            percentage = 0;
                        }
                        $("#jquery_jplayer_1").jPlayer("playHead", percentage);
                        $('.jp-play-bar').css('width', percentage + '%');
                    };
                    $('#playlist-toggle, #playlist-text, #playlist-wrap li a').unbind().on(
                        'click',
                        function() {
                            $('#playlist-wrap').fadeToggle();
                            $('#playlist-toggle, #playlist-text').toggleClass(
                                'playlist-is-visible');
                        });
                    $('.hide_player').unbind().on('click', function() {
                        $('.audio-player').toggleClass('is_hidden');
                        $(this).html($(this).html() ==
                            '<i class="fa fa-angle-down"></i> HIDE' ?
                            '<i class="fa fa-angle-up"></i> SHOW PLAYER' :
                            '<i class="fa fa-angle-down"></i> HIDE');
                    });
                    $('body').unbind().on('click', '.audio-play-btn', function() {
                        $('.audio-play-btn').removeClass('is_playing');
                        $(this).addClass('is_playing');
                        var playlistId = $(this).data('playlist-id');
                        myPlaylist.play(playlistId);
                    });

                });
            }
        });
    });
    </script>
    <script>
  function allMovies(){
    
      return $.ajax({
            url: '<?=base_url()?>User/allMovies',
            method: 'GET',
            async: false,
            dataType: 'json'
            // success: function(data) {
            //     console.log(data);
            //     return data;
            // }

        });
    
   }
  </script>   
<script>
  function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
  }
 var countries=allMovies();
 countries=JSON.parse(countries.responseText);
  /*An array containing all the country names in the world:*/
  //var countries = ["Avengers","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
 /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
  autocomplete(document.getElementById("myInput"), countries);
</script>
</body>

</html>
