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
	<div class="w3-sidebar w3-bar-block w3-animate-left"
		style="display:none;z-index:1000;top: 0;width: 300px;background: #1A1E21;" id="mySidebar">
		<div class="sidebar-header">
			<button class="w3-button" style="float: right;" onclick="w3_close()">&times;</button>
			<div class="user-pic">
				<img class="img-responsive img-rounded"
					src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
					alt="User picture">
			</div>
			<div class="user-info pt-2">
				<span class="user-name font-weight-bold">
					Jhon Smith
				</span>
				<span class="user-role">jhon.smith@gmail.com</span>
				<span class="user-status">
					<i class="fa fa-circle"></i>
					<span>Online</span>
				</span>
			</div>
		</div>
		<hr class="colorgraph">
		<div style="padding: 20px;">
			<div class="p-2" style="color: white;font-size: 16px;">
				<a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i> Profile</a>
				<a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i> Payment</a>
				<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Upcoming Stops</a>
				<a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i> About Us</a>
				<a href="#" class="w3-bar-item w3-button"><i class="fa fa-trash"></i> Privacy Policy</a>
				<a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i> Internet Access</a>
			</div>
		</div>
		<div style="bottom: 0;color: white;padding: 40px 20px 20px 20px;">
			<a href="signin.html" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> Log out</a>
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
								<img src="<?php echo base_url();?>img/oes-logo.svg" alt="" class="img-logo">class="img-logo">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<li class="header__nav-item">
									<a class="header__nav-link" href="<?php echo base_url();?>user">Home</a>
								</li>

								<li class="header__nav-item">
									<a class="header__nav-link" href="<?php echo base_url();?>user/movies">Movies</a>
								</li>

								<li class="header__nav-item">
									<a href="<?php echo base_url();?>user/musics" class="header__nav-link">Music</a>
								</li>

								<li class="header__nav-item">
									<a href="<?php echo base_url();?>user/ebooks" class="header__nav-link">EBook</a>
								</li>

								<li class="header__nav-item">
									<a href="<?php echo base_url();?>user/news" class="header__nav-link">News</a>
								</li>
							</ul>
							<!-- end header nav -->

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
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->


	<div class="site-section-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 single-content">

					<p class="mb-5">
						<img src="<?php echo base_url();?>img/big_img_1.jpg" alt="Image" class="img-fluid">
					</p>
					<div class="news">
					<h1 class="mb-4" style="color: #fff;">
						News Needs to Meet Its Audiences Where They Are
					</h1>
					<div class="post-meta d-flex">
						<div class="bio-pic mr-3">
							<img src="<?php echo base_url();?>img/person_1.jpg" alt="Image" class="img-fluidid">
						</div>
						<div class="vcard">
							<span class="d-block" style="color: #fff;"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
							<span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
									class="icon-star2"></span></span>
						</div>
					</div>
					<p style="color: #696F77;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit officia neque beatae at
						inventore excepturi numquam sint commodi alias, quam consequuntur corporis ex, distinctio eaque
						sapiente pariatur iure ad necessitatibus in quod obcaecati natus consequatur. Sed dicta maiores,
						eos culpa.</p>
					<p style="color: #696F77;text-align: justify;">Voluptatum animi, voluptate sint aperiam facere a nam, ex reiciendis eum nemo ipsum nobis, rem
						illum cupiditate at quaerat amet qui recusandae hic, atque laboriosam perspiciatis? Esse quidem
						minima, voluptas necessitatibus, officia culpa quo nulla, cupiditate iste vel unde magni.</p>
					<p style="color: #696F77;text-align: justify;">Nulla nesciunt eligendi ratione, atque, hic, ullam suscipit quos enim vitae fugiat ducimus,
						dolore delectus iste id culpa. Ducimus, iste magnam sed reprehenderit architecto perferendis
						odio voluptas molestiae quidem ab numquam debitis, dolorem incidunt, tempore a quod qui nobis.
						Voluptates!</p>
					<p style="color: #696F77;text-align: justify;">Blanditiis, ipsum sed odio reprehenderit sequi ut vitae, dolor minima ab! Architecto nesciunt
						nemo sint est aspernatur fugit consequatur, magnam suscipit asperiores illo eum repellendus
						officia dolorem, molestiae commodi nam voluptatem quis quia vel cumque quos, aliquam ex incidunt
						sapiente!</p>
					<p style="color: #696F77;text-align: justify;">Suscipit, officiis, vero! Perferendis accusamus quos voluptatum culpa, provident maiores! Illo
						itaque ullam fugit molestiae, eaque accusamus impedit autem numquam. Placeat molestias tempore
						eaque ipsam vel voluptatum velit enim quam iusto maxime delectus, sint sapiente ea, quo
						excepturi nisi! Quia.</p>
					<p style="color: #696F77;text-align: justify;">Dolores debitis excepturi maxime earum sapiente totam, quos dolore inventore tempore illum.
						Dolores explicabo sed amet aut atque, facere aliquid repudiandae quod possimus quo hic similique
						et voluptates fugit iure dolore quam ipsa numquam assumenda corporis? Dignissimos expedita fugit
						sapiente.</p>
					<p style="color: #696F77;text-align: justify;">Cupiditate ut, aspernatur labore obcaecati, eveniet aut velit nulla facere suscipit est
						recusandae vel error itaque earum doloremque hic necessitatibus dignissimos dolores libero
						laudantium ducimus! Rem dolorem ratione officia et, fugit non, fuga suscipit eos veritatis enim
						perspiciatis, magni sit!</p>
					</div>
				</div>


				<!-- <div class="col-lg-3 ml-auto">
					<div class="section-title">
						<h2>Popular Posts</h2>
					</div>

					<div class="trend-entry d-flex">
						<div class="number align-self-start">01</div>
						<div class="trend-contents">
							<h2><a href="#">News Needs to Meet Its Audiences Where They Are</a></h2>
							<div class="post-meta">
								<span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
								<span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
										class="icon-star2"></span></span>
							</div>
						</div>
					</div>

					<div class="trend-entry d-flex">
						<div class="number align-self-start">02</div>
						<div class="trend-contents">
							<h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
							<div class="post-meta">
								<span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
								<span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
										class="icon-star2"></span></span>
							</div>
						</div>
					</div>

					<div class="trend-entry d-flex">
						<div class="number align-self-start">03</div>
						<div class="trend-contents">
							<h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
							<div class="post-meta">
								<span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
								<span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
										class="icon-star2"></span></span>
							</div>
						</div>
					</div>

					<div class="trend-entry d-flex pl-0">
						<div class="number align-self-start">04</div>
						<div class="trend-contents">
							<h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
							<div class="post-meta">
								<span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
								<span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span
										class="icon-star2"></span></span>
							</div>
						</div>
					</div>

					<p>
						<a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
					</p>
				</div> -->
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer class="footer">
		<div class="row" id="myDIV">
			<div class="col-1"></div>
			<div class="col-2">
				<a href="<?php echo base_url();?>user"><button class="btn"><img
							src="<?php echo base_url();?>img/Layer 2 (10).svg"></button></a>
			</div>
			<div class="col-2">
				<a href="<?php echo base_url();?>user/movies"><button class="btn"><img
							src="<?php echo base_url();?>img/Layer 2 (8).svg"></button></a>
			</div>
			<div class="col-2">
				<button class="btn"><img src="<?php echo base_url();?>img/Layer 2 (7).svg"></button>
			</div>
			<div class="col-2">
				<button class="btn"><img src="<?php echo base_url();?>img/Layer 2 (6).svg"></button>
			</div>
			<div class="col-2">
				<a href="<?php echo base_url();?>user/news"><button class="btn active_1"><img
							src="<?php echo base_url();?>img/Layer 2 (5).svg"></button></a>
			</div>
			<div class="col-1"></div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

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
			btns[i].addEventListener("click", function () {
				var current = document.getElementsByClassName("active_1");
				current[0].className = current[0].className.replace(" active_1", "");
				this.className += " active_1";
			});
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