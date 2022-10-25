<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title>Shabu Paradise HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Shabu Paradise

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Shabu <em>Paradise</em></h2></a>
          <img src="https://scontent.fnak3-1.fna.fbcdn.net/v/t39.30808-6/284960341_407753884697834_4148064225908973995_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGYT9UB9J_gZdFFZ6rMIMRaofnrdFKyxjuh-et0UrLGO5Q0tNTsmnKxCn8e-o5aIj7Gi1oBBU-kqnAHrS72v9PV&_nc_ohc=Fvb3J8TIcPoAX9zx8x7&_nc_ht=scontent.fnak3-1.fna&oh=00_AT_-bF3qtlj5nHa3L9HwK3_eNVi3rjI6S6V2CNX3BeAtkA&oe=634C6F49" width="50" height="45" style="margin-bottom: 20px; border-radius: .5em" alt="logo">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">หน้าหลัก
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">เกี่ยวกับโต๊ะ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">เกี่ยวกับเรา</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">ติดต่อเรา</a>
              </li>

              <li class="nav-item">
              
              @if (Route::has('login'))
                
                    @auth

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('showcart')}}">
                            <i class="fa-regular fa-cart-shopping"></i>
                            Cart[{{$count}}]</a>
                      </li>

                        <x-app-layout>
    
                        </x-app-layout>                    
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}" >เข้าสู่ระบบ</a></li>

                        @if (Route::has('register'))
                          <li><a class="nav-link" href="{{ route('register') }}" >ลงทะเบียน</a></li>
                        @endif
                    @endauth
                
            @endif

        </li>

            </ul>
          </div>
        </div>
      </nav>

      @if(session()->has('message'))

      <div class="alert alert-success" >

      <button type="button" class="close" data-dismiss="alert">x</button>

      {{session()->get('message')}}

      </div>

      @endif

    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h2>ร้านที่สะอาดที่สุด</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h2>วัตถุดิบ ดีเเละสะอาด</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h2>มา 4 จ่าย 3 ราคาย่อมเยา</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.product')




 
  


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
