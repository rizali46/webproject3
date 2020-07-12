<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css" >
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>



            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Anonymous Pro', monospace;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .full-height {
                height: 100vh;
            }


            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="topnav">
          <div class="nav1" id="nav2">
            <ul>
              <li><a class="ggwp"  href="<?php echo e(url('/home')); ?>">RAR COMPANY</a></li>
              <li><a href="<?php echo e(url('list')); ?>">PRICE LIST</a></li>
              <?php if(Route::has('login')): ?>



              <?php if(auth()->guard()->check()): ?>

              <li>  <a href="<?php echo e(url('/home')); ?>">HOME</a></li>
              <?php else: ?>

              <li style="float:right"><span class="glyphicon glyphicon-user"></span><a class="nav-right" href="<?php echo e(route('login')); ?>">LOGIN</a></li>
              <?php if(Route::has('register')): ?>
              <li style="float:right" ><a href="<?php echo e(route('register')); ?>">REGISTER</a></li>
            </ul>
              <?php endif; ?>
              <?php endif; ?>
              <?php endif; ?>

           </div>

        <div class="flex-center position-ab full-height">

            <div class="content">

                <div class="img-bg">
                  <img src="/img/home/homeimage.jpg" class="img-fluid img-home" alt="Responsive Image">

                  <div class="title-ban">
                    <h3>MAKE YOUR ONLINE INVITATION CARD</h3>
                    <br>
                    <p>Make Your Online Invitaion Card, It's Much More Unique and Simple</p>
                    <p>And You Only Need To Make One And Then You Can Share It To Anyone Without Limit</p>

                      <div class="button" id="button-7">
                          <div id="dub-arrow"><i class="fa fa-angle-double-right" style="font-size:27px;color:black"></i></i></div>
                          <a href="#">Let's Go!</a>
                        </div>


                  </div>

                </div>

                <div class="container border-bottom">
                  <div class="row homett border-bottom">

                    <div class="col-md-4 col-xs-12 col-sm-12 p-5 text-left ">
                    <div class="media">

                        <div class="" style="width:100px;">
                          <img class="align-self mr-3 h-50" style="width:80px;" src="/img/home/paint.png" alt="Generic placeholder image" >
                        </div>

                      <div class="media-body">
                          <h4>Modern Design</h4>
                          <p>Desain tema yang modern dan responsive dapat diakses melalui berbagai macam perangkat seperti desktop dan mobile. Menjadikan undanganmu lebih unik dan berkesan.</p>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-4 col-xs-12 col-sm-12 p-5 text-left">
                  <div class="media" >

                      <div class="" style="width: 100px;height:">
                      <img class="align-self mr-3 h-50" style="width:80px;" src="/img/home/share.png" alt="Generic placeholder image" >
                      </div>

                    <div class="media-body">
                      <h4>Lebih Mudah Disebar</h4>
                          <p>Dengan harga yang terjangkau dan dapat berbagi undangan ke lebih banyak jumlah penerima undangan, tentunya dapat menghemat pengeluaran.</p>
                    </div>
                  </div>

                </div>
                <div class="col-md-4 col-xs-12 col-sm-12 p-5 text-left">
                <div class="media">

                    <div class="" style="width: 100px;">
                      <img class="align-self mr-3 h-50" style="width:80px;" src="/img/home/money.png" alt="Generic placeholder image" >
                              </div>

                  <div class="media-body">
                    <h4>Lebih Hemat</h4>
                          <p>Dengan harga yang terjangkau dan dapat berbagi undangan ke tak terbatas jumlah tamu undangan, tentunya dapat menghemat pengeluaran.</p>
                  </div>
                </div>

              </div>



                </div>

            </div>

        </div>
        <div class="container" >
          <div class="row justify-content-center">
            <div class="card1 ">
    <div class="card-img" style="background-image:url(https://images.unsplash.com/photo-1493847242172-d46053a1f671?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9f91dd5d50f16ba80af53a62d4caf2ce&auto=format&fit=crop&w=500&q=60);">
      <div class="overlay">
        <div class="overlay-content">
          <a  href="#!">View Project</a>
        </div>
      </div>
    </div>

    <div class="card-content">
      <a href="#!">
        <h2>Title</h2>
        <p>FUCK YOU BITCH</p>
      </a>
    </div>
  </div>

  <div class="card1">
    <div class="card-img" style="background-image:url(https://images.unsplash.com/photo-1491374812364-00028bbe7d2f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a22e4862c36c552e726815949fbcb41a&auto=format&fit=crop&w=500&q=60);">
      <div class="overlay">
        <div class="overlay-content">
          <a href="#!">View Project</a>
        </div>
      </div>
    </div>

    <div class="card-content">
      <a href="#!">
        <h2>Title</h2>
        <p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
      </a>
    </div>
  </div>

  <div class="card1">
    <div class="card-img" style="background-image:url(https://images.unsplash.com/photo-1519176336903-04be58a477d2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=eda05ddcb3154f39fd8ce88fdd44f531&auto=format&fit=crop&w=500&q=60);">
      <div class="overlay">
        <div class="overlay-content">
          <a href="#!">View Project</a>
        </div>
      </div>
    </div>

    <div class="card-content">
      <a href="#!">
        <h2>Title</h2>
        <p>Lorem ipsum dolor sit amet consectetur, lorem ipsum dolor</p>
      </a>
    </div>
  </div>
          </div>

        </div>
        <!-- Footer -->
<footer class="page-footer font-small footer-color">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Very long link 1</a>
          </li>
          <li>
            <a href="#!">Very long link 2</a>
          </li>
          <li>
            <a href="#!">Very long link 3</a>
          </li>
          <li>
            <a href="#!">Very long link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">undangan Kita</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
      </div>

    </div>




    </body>
    <script type="text/javascript">
    window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      document.getElementById("nav2").style.background = "rgba(0,0,0,1)";
      document.getElementById("nav2").style.transition = "all 0.5s";
    } else {
      document.getElementById("nav2").style.background = "rgba(0,0,0,0.3)"
    }
  }
  $(document).ready(function() {

	$('.card').delay(1800).queue(function(next) {
		$(this).removeClass('hover');
		$('a.hover').removeClass('hover');
		next();
	});
});

    </script>
</html>
<?php /**PATH C:\Users\uliza\instatry\resources\views/welcome.blade.php ENDPATH**/ ?>