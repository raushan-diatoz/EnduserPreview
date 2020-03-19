<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-reboot.min.css"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-grid.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/plyr.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/default-skin.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/main.css">
    <!-- Sweet alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>icon/digivive.png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>icon/digivive.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>icon/apple-touch-icon-144x144.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>Onboarding Entertainment Solution</title>
    <style>
    #wrapper {
        font-family: Lato;
        font-size: 1.5rem;
        text-align: center;
        box-sizing: border-box;
        color: #333;
    }

    #wrapper #dialog {
        border: solid 1px #ccc;
        margin: 10px auto;
        padding: 20px 30px;
        display: inline-block;
        box-shadow: 0 0 4px #ccc;
        background-color: #FAF8F8;
        overflow: hidden;
        position: relative;
        max-width: 450px;
    }

    #wrapper #dialog h3 {
        margin: 0 0 10px;
        padding: 0;
        line-height: 1.25;
    }

    #wrapper #dialog span {
        font-size: 90%;
    }

    #wrapper #dialog #form input {
        margin: 0 5px;
        text-align: center;
        line-height: 80px;
        font-size: 30px;
        border: solid 1px #ccc;
        box-shadow: 0 0 5px #ccc inset;
        outline: none;
        width: 20%;
        height: 40px;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        border-radius: 3px;
    }

    #wrapper #dialog #form input:focus {
        border-color: purple;
        box-shadow: 0 0 5px purple inset;
    }

    #wrapper #dialog #form input::-moz-selection {
        background: transparent;
    }

    #wrapper #dialog #form input::selection {
        background: transparent;
    }

    #wrapper #dialog #form button {
        margin: 30px 0 50px;
        width: 100%;
        padding: 6px;
        background-color: #B85FC6;
        border: none;
        text-transform: uppercase;
    }

    #wrapper #dialog button.close {
        border: solid 2px;
        border-radius: 30px;
        line-height: 19px;
        font-size: 120%;
        width: 22px;
        position: absolute;
        right: 5px;
        top: 5px;
    }

    #wrapper #dialog div {
        position: relative;
        z-index: 1;
    }

    #wrapper #dialog img {
        position: absolute;
        bottom: -70px;
        right: -63px;
    }
    </style>
</head>

<body class="body">

    <div class="sign section--bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- registration form -->
                        <form class="sign__form" id="form1" method="post" onsubmit="register(event)">
                            <a href="<?php echo base_url();?>user/signup" class="sign__logo">
                                <img src="<?php echo base_url();?>img/oes-logo.svg" alt="" class="signup-logo">
                            </a>
							<div class="sign__group">
								<input type="text" class="sign__input"name="username" id="username" placeholder="Username" required>
							</div>


                            <div class="sign__group">
                                <input type="email" class="sign__input" name="email" id="email" placeholder="Email"
                                    required>
                            </div>

                            <div class="sign__group">
                                <input type="text" class="sign__input" name="mobileno" id="mobileno"
                                    placeholder="Mobile no" required>
							</div>
							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked" required>
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>
							<button class="sign__btn">Sign up</button>
							
                        </form>
						
                        <!-- registration form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Otp Verification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="wrapper">
                        <div id="dialog">
                            <h5>Please enter the 6-digit verification code we sent via SMS:</h5>
                            <div id="form" class="d-flex justify-content-between">
                                <input id="number1" type="text" maxLength="1" size="1" min="0" max="9"
                                    pattern="[0-9]{1}" />
                                <input id="number2" type="text" maxLength="1" size="1" min="0" max="9"
                                    pattern="[0-9]{1}" />
                                <input id="number3" type="text" maxLength="1" size="1" min="0" max="9"
                                    pattern="[0-9]{1}" />
                                <input id="number4" type="text" maxLength="1" size="1" min="0" max="9"
                                    pattern="[0-9]{1}" /><input id="number5" type="text" maxLength="1" size="1" min="0"
                                    max="9" pattern="[0-9]{1}" /><input id="number6" type="text" maxLength="1" size="1"
                                    min="0" max="9" pattern="[0-9]{1}" />

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="verify()">Verify</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->

    <script src="<?php echo base_url();?>js/jquery-3.3.1.min.js"></script>
    <!-- <script src="<?php echo base_url();?>js/bootstrap.bundle.min.js"></script> -->
    <script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.mousewheel.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?php echo base_url();?>js/wNumb.js"></script>
    <script src="<?php echo base_url();?>js/nouislider.min.js"></script>
    <!-- <script src="<?php echo base_url();?>js/plyr.min.js"></script> -->
    <script src="<?php echo base_url();?>js/jquery.morelines.min.js"></script>
    <script src="<?php echo base_url();?>js/photoswipe.min.js"></script>
    <script src="<?php echo base_url();?>js/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo base_url();?>js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
 
    <script>
		
    function verify() {
        var email   = document.getElementById("email").value;
        var mobile   = document.getElementById("mobileno").value;
        var username   = document.getElementById("username").value;

        var number1 = document.getElementById("number1").value;
        var number2 = document.getElementById("number2").value;
        var number3 = document.getElementById("number3").value;
        var number4 = document.getElementById("number4").value;
        var number5 = document.getElementById("number5").value;
        var number6 = document.getElementById("number6").value;
        var number = number1 + number2 + number3 + number4 + number5 + number6;
        var data = {};
        data['mobile'] = document.getElementById("mobileno").value;
        data['otp'] = number;
        $.ajax({
            url: 'http://52.66.153.105:8081/oescms/api/v1/validate/end-user',
            method: 'post',
            contentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            async: false,
            dataType: 'json',
            beforeSend: function() {
                console.log("Ajax call Before");
            },
            success: function(response) {
                if (response.status == "success") {
                    window.location=`<?php echo base_url();?>user/register/${email}/${mobile}/${username}`;
                }
				else if(response.status == "failure"){
					swal(
				'Error!',
				'You clicked the <b style="color:red;">error</b> button!',
				'error'
			)
				}

            },
            error: function(xhr, status, error) {
                swal(
				'Error!',
				'You clicked the <b style="color:red;">error</b> button!',
				'error'
			)
            }

        });
    }
    </script>

<script>
    function register(e) {
		e.preventDefault();
        var email = document.getElementById("email").value;
        var mobileno = document.getElementById("mobileno").value;
        var data = {};
        data['mobile'] = mobileno;
        data['email'] = email;
        $.ajax({
            url: 'http://52.66.153.105:8081/oescms/api/v1/end-user',
            method: 'post',
            contentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            async: false,
            dataType: 'json',
            beforeSend: function() {
                console.log("Ajax call Before");
            },
            success: function(response) {		
			event.preventDefault();

                if (response.status == "success") {
					// openModal()
					$('#exampleModalCenter').modal('show')  
                }

            },
            error: function(xhr, status, error) {
                var error1 = eval("(" + xhr.responseText + ")");
                console.log(error1.Message);
                console.log(geturl.getAllResponseHeaders());
                alert("error!" + geturl.getAllResponseHeaders());
            }

        });
		return

    }
	function openModal(e){
		console.log("Yeah",e)
	}
</script>
<script>
    	$(function() {
    "use strict";

    var body = $("#exampleModalCenter");

    function goToNextInput(e) {
    	var key = e.which,
    	t = $(e.target),
    	sib = t.next("input");

    	if (key != 9 && (key < 48 || key > 57)) {
    	e.preventDefault();
    	return false;
    	}

    	if (key === 9) {
    	return true;
    	}

    	if (!sib || !sib.length) {
    	sib = body.find("input").eq(0);
    	}
    	sib.select().focus();
    }

    function onKeyDown(e) {
    	var key = e.which;

    	if (key === 9 || (key >= 48 && key <= 57)) {
    	return true;
    	}

    	e.preventDefault();
    	return false;
    }

    function onFocus(e) {
    	$(e.target).select();
    }

    body.on("keyup", "input", goToNextInput);
    body.on("keydown", "input", onKeyDown);
    body.on("click", "input", onFocus);
    });
        </script>

</body>

</html>