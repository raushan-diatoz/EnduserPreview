<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
    <script src="https://cdn.rawgit.com/video-dev/hls.js/18bb552/dist/hls.min.js"></script>
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
    <link rel="stylesheet" href="<?php echo base_url();?>css/play.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>icon/digivive.png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>icon/digivive.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>icon/apple-touch-icon-144x144.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    
    <title>Onboarding Entertainment Solution</title>
    <style>
    video {
        width: 100%;
    }
    </style>
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
    <br><br> <br><br>
    <?php 
       if(!empty($data_filter)){
    ?>       
    <div class="container">
        <div class="row">
            <div class="col-12">
                <video controls crossorigin playsinline
                    poster="https://bitdash-a.akamaihd.net/content/sintel/poster.png"></video>
                <div class="card__content">
                    <h3 class="card__title"><a href="#"><?php echo $data_filter->title;?></a></h3>
                    <span class="card__category">
                        <a href="#"><?php echo $data_filter->genre;?></a>
                    </span>
                    <span class="card__rate"><i class="icon ion-ios-star"><?php echo $data_filter->rating;?></i></span>
                    <span class="card__rate"><i><?php echo $data_filter->summary;?></i></span>
                </div>

            </div>
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
    <script type='text/javascript'>
    var source = '';
    var store_time = 0;
    var poster = '';
    </script>


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
    <script>
    document.addEventListener('DOMContentLoaded', () => {
      
        source = '<?php echo $data_filter->url; ?>';
        const video = document.querySelector('video');
        recently(source);
        // For more options see: https://github.com/sampotts/plyr/#options
        // captions.update is required for captions to work with hls.js
        const player = new Plyr(video, {
            captions: {
                active: true,
                update: true,
                language: 'en'
            }
        });

        if (!Hls.isSupported()) {
            video.src = source;
        } else {
            // For more Hls.js options, see https://github.com/dailymotion/hls.js
            const hls = new Hls();
            hls.loadSource(source);
            hls.attachMedia(video);
            window.hls = hls;

            // Handle changing captions
            player.on('languagechange', () => {
                // Caption support is still flaky. See: https://github.com/sampotts/plyr/issues/994
                setTimeout(() => hls.subtitleTrack = player.currentTrack, 50);
            });

        }

        // Expose player so it can be used from the console
        window.player = player;
        player.on('progress', event => {
            const instance = event.detail.plyr;
            console.log('instance', instance);
            store_time = instance.media.currentTime;
            poster = instance.media.poster;
        });
        player.on('pause', event => {
            const instance = event.detail.plyr;

            current_time = instance.media.currentTime;
            src = instance.media.src;
            poster = instance.media.poster;
            sessionStorage.setItem("time", current_time);
        });
        player.on("loadeddata", onDataLoaded);
        var t = sessionStorage.getItem("time");
        t = t.split(".");
        var time = Number(t[0]); // the seconds you want to jump to
        function onDataLoaded() {
            if (time <= player.duration) {}
            player.off("loadeddata", onDataLoaded);
            player.currentTime = time;
        }
        window.onbeforeunload = function(e) {

            console.log(e)
            player.pause()
        }

    });
    </script>
    <script>
    function recently_played() {
        sessionStorage.clear();
        $.ajax({
            url: '<?=base_url()?>User/recently_movie',
            method: 'post',
            data: {
                current_time: store_time,
                src: source,
                category: '<?php echo $category;?>',
                navbar:'<?php echo $assetType;?>',
                title: '<?php echo $data_filter->title;?>',
                rate: '<?php echo $data_filter->rating;?>',
                thumbnail: '<?php echo $data_filter->thumbnail;?>',
                movie_id: '<?php echo $data_filter->id;?>'

            },
            dataType: 'json',
            dataType: 'json',
            success: function(response) {

            }

        });

    }
    </script>
    <script>
    function recently(source) {
        setTimeout(function(){ 
        $.ajax({
            url: '<?=base_url()?>User/recently_movie',
            method: 'post',
            data: {
                current_time: store_time,
                src: '<?php echo $data_filter->url;?>',
                category: '<?php echo $category;?>',
                navbar:'<?php echo $assetType;?>',
                title: '<?php echo $data_filter->title;?>',
                rate: '<?php echo $data_filter->rating;?>',
                thumbnail: '<?php echo $data_filter->thumbnail;?>',
                movie_id: '<?php echo $data_filter->id;?>'

            },
            dataType: 'json',
            dataType: 'json',
            success: function(response) {

            }

        });
        }, 1000)
    }
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
