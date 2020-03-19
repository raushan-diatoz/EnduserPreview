<!DOCTYPE html>
<html>
<head>
  <title>Slick Playground</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../slick/slick.css">
  <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 84%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 14em;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>
<body>

  

  <section class="center slider">
    <div>
      <img src="http://localhost/media/img/ghost.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/avengers.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/hobbit.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/hobbit.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/hobbit.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/hobbit.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/avengers.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/avengers.jpg" alt="">
    </div>
    <div>
      <img src="http://localhost/media/img/ghost.jpg" alt="">
    </div>
  </section>

  
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="../slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
     
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      
    });
</script>

</body>
</html>
