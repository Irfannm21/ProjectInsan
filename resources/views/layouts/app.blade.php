<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Insansandang Internusa</title>
  <link rel="icon" href="img/favicon.png" type="image/png">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css"rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-light py-0">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <span class="d-none" >Insansandang</span>
      <img src="/img/logo-remove.png" class="main-logo d-none d-md-inline"
          alt="ilkoom logo">
          <img src="/img/logo-remove.png" class="small-logo d-inline d-md-none"
          alt="ilkoom logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="nav-link p-3" href="#facilities">
            Facilities</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link p-3" href="#product">
            Product</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link p-3" href="#about">
            About</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link p-3" href="#contact">
            Contact </a>
        </li>
        </ul>
        </div>
      </div>
    </nav>

    <!-- SLIDER -->
<header id="main-slide">
<div id="mySlide" class="carousel slide carousel-fade" data-ride="carousel">

<ol class="carousel-indicators">
  <li data-target="#mySlide" data-slide-to="0" class="active"></li>
  <li data-target="#mySlide" data-slide-to="1"></li>
  <li data-target="#mySlide" data-slide-to="2"></li>
  <li data-target="#mySlide" data-slide-to="3"></li>
</ol>
<div class="carousel-inner text-white">
        <div class="carousel-item active" id="slide1">
          <div class="container">
            <div class="d-none d-md-block">
            </div>
          </div>
        </div>
        <div class="carousel-item" id="slide2">
          <div class="container">
          </div>
        </div>
        <div class="carousel-item" id="slide3">
          <div class="container">
            <div class="d-none d-md-block">
            </div>
          </div>
        </div>
        <div class="carousel-item" id="slide4">
          <div class="container">
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#mySlide" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#mySlide" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    </header>

    
      <div class=""  id="facilities"> </div>
      <section id="" class="py-5 bg-light" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col text-center" >
              <h1>Facilities</h1>
              <hr class="w-25">
            </div>
          </div>
          </div>
    </section> 

     <!-- SHOWOFF 1 -->
     <section id="showoff-1" class="bg-warning text-muted py-5" data-aos="fade-right">
      <div class="container">
        <div class="row">
     
          <div class="col-md-6">
            <h2  style="color:black ;">Spinning</h2>
            <p>PT. Insansandang Internusa is a Premium Quality Supplier of Ring Spun Yarns.
               We produce several types of synthetic yarns,
              e.g. 100% Polyester and different blends of Polyester & Viscose Rayon.
              We have wide range of products in single as well as multifold yarns.
              All single yarn products are available in wide range of Ne 4ˢ to Ne 60ˢ,
              and plied yarns up to 10 plies. Our 8” Traverse Propeller driven Assembly
              Winding Package enables us to make up to 2.5 kg of knotless / spliceless
              twisted yarn package in our smart twisters. We can also supply single compact yarn and siro compact twisted yarn.</p>
          </div>
          <div class="col-md-6">
          <img src="/img/facilities/sp/1.jpg" alt="" class="img-fluid mb-3">
          </div>
        </div>
    </section>

    <!-- SHOWOFF 2 -->
    <section id="showoff-1" class="bg-dark text-muted py-5" data-aos="fade-right">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="/img/facilities/wv/1.jpg" alt="" class="img-fluid mb-3">
          </div>
          <div class="col-md-6" style="color:white;">
            <h2 style="color:white;">Weaving</h2>
            <p style="color:white;">Our weaving factory is specialized in Greige for Uniform Suiting 
              (e.g. School Uniform; Military, Police, Security Guard Uniform;
               Civil Servant Uniform; Office Uniform; Medical Workers Uniform;
                etc.) and Greige for Industrial Use (e.g. Canvas Belting for Automotive;
                 Sandpaper; Agriculture Needs; etc.) made from various materials
                (e.g. 100% Polyester, 100% Cotton, 100% Viscose Rayon, Polyester & Viscose Rayon Blended, Polyester & Cotton Blended, etc.).</p>
          </div>
        </div>
      </div>
    </section>

    <!-- SHOWOFF 3 -->
    <section id="showoff-2" class="bg-warning text-muted py-5" data-aos="fade-left">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2  style="color:black;">Dyeing Finishing</h2>
            <p  style="color:black;" >Dyeing Finishing Unit processes various greige materials 
            (e.g. 100% Polyester, 100% Cotton, 100% Viscose Rayon,
              Polyester & Viscose Rayon Blended, Polyester & Cotton Blended, etc)
              into finished fabric material. Using dyestuff material from reputable supplier,
                we are able to add special finishing such as water repellent, stain release,
                fire retardant, anti UV, etc, upon request. On select quality,
                  our machine is capable to produce finish fabric with width up to 70 inch or 180cm.</p>
          </div>
          <div class="col-md-6">
          <img src="/img/facilities/df/1.jpg" alt="" class="img-fluid mb-3">
          </div>
        </div>
      </div>
    </section>

    <!-- BLOG -->
    <section id="product" class="py-5 bg-light" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col text-center" >
            <h1>Product</h1>
            <hr class="w-25">
          </div>

        <div class="card-columns centre">

        <img class="card-img-top img-thumbnail rounded-circle " src="/img/pd/1.jpg" data-aos="flip-left">
        <img class="card-img-top img-thumbnail rounded-circle" src="/img/pd/2.jpg" data-aos="flip-left">
        <img class="card-img-top img-thumbnail rounded-circle" src="/img/pd/3.jpg" data-aos="flip-left">
          </div>


        </div>
        </div>
      </div>
    </section>


      <!-- ABOUT -->
      <section id="about" class="bg-dark text-white py-5" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="display-4">About Us</h1>
            <hr class="w-25" style="color:white;"> 
            <img class="img-fluid mb-3" src="/img/Taman.png">
            <br>
            <br>
            <p style="color:white;" class="text-justify">
            PT. INSANSANDANG INTERNUSA was established in June 1988 as a response of the market demand for high quality uniform materials. Our facility is located in Sumedang, just outside of Bandung, the capital city of West Java. Started with the spirit and philosophy to look always for the best, supported by sophisticated production machines and other modern working facilities, we continually improve our process and system to be the leading uniform manufacturer.
            </p>
            
            <p style="color:white;" class="text-justify">
            We have revitalized and replaced some of our machines, and we are keeping our machines up to date so that we can achieve the quality and quantity that our market desired.
            </p>

            <p style="color:white;" class="text-justify">
            Our concern on the environment aspect, lead us to keep searching for the improvement not only in the waste management system, but also in the selection of materials used in our processes. Our aim is to have our liquid-waste to be processed and ultimately can be recycle and reus
            </p>

            <p style="color:white;" class="text-justify">
            In order to keep ourselves in check, PT. Insansandang Internusa implements ISO 9001 quality management system. With this, we are using standardized working system to ensure the consistency of our products, and the continual improvement wherever and whenever possible.
            </p>

            <p style="color:white;" class="text-justify">
              <b>COSTUMER DEMAND ORIENTED</b>            
            </p>


            <p style="color:white;" class="text-justify">
            Our products is tailor made to our customers’ request and requirement, and we ship our fabrics nationally as well as of internationally.
            </p>

            <p style="color:white;" class="text-justify">
              <b>HIGH QUALITY TEXTILE PRODUCT</b>            
            </p>

            <p style="color:white;" class="text-justify">
            In textile business, PT. Insansandang Internusa is known for its high quality products. This
acknowledgment is attained as the company always applies high quality control to all products being manufactured.
For us, quality is always our primary concern.
            </p>


          </div>
        </div>
      </div>
    </section>

    <!-- BLOG -->
    <section id="contact" class="py-5 bg-light" data-aos="fade-up">
      <div class="container">
        <div class="row">
          <div class="col text-center" >
            <h1>Address & Contact Us</h1>
            <hr class="w-25">
          </div>
        </div>
        <div class="container">
        <div class="card-columns">
          
          <div class="card">
            <iframe class="card-img-top" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.905943511008!2d107.77418332420274!3d-6.955772679898795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c48b97455261%3A0xf99f0bf002d3bbd7!2sPT%20Insansandang%20Internusa!5e0!3m2!1sid!2sid!4v1640063595243!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="card-body">
              <h5 class="card-title">Insansandang Internusa</h5>
              <p class="card-text">Jl. Rancaekek No.KM 22, RW.5, Cinta Mulya, Jatinangor, Kabupaten Sumedang, Jawa Barat 45363.</p> 
            </div>
          </div>

          <div class="card">
          <iframe class="card-img-top" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4592202051563!2d107.80213471406843!3d-6.955031694975188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c4fb97a4fed7%3A0x39229a32ff6075d2!2sPT.%20INSANSANDANG%20INTERNUSA%2C%20SPINNING%20MILLS!5e0!3m2!1sid!2sid!4v1640063892257!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="card-body">
              <h5 class="card-title">Spinning</h5>
              <p class="card-text">Kawasan Industri Dwipapuri Abadi Kav. C12, Sawahdadap, Cimanggung, Sumedang Regency, West Java 45364.</p>
              
            </div>
          </div>

          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact & Social Media</h5>
                <p class="card-text">Weaving & Dyeing Finishing</p>
                <hr>
                <ul class="fa-ul text-left">
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-phone"></i>
                    </span>(022)   7798343
                  </li>
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-fax"></i>
                    </span>(022)   7798323
                  </li>
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-envelope fa-fw"></i>
                    </span>marketing@insansandang.com
                  </li>
                </ul>
                <p class="card-text">Spinning Mills</p>
                <hr>
                <ul class="fa-ul text-left">
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-phone"></i>
                    </span>(022) 87835383
                  </li>
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-fax"></i>
                    </span>(022)   87835323
                  </li>
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-envelope fa-fw"></i>
                    </span>marketing.spinning@insansandang.com
                  </li>
                </ul>
                <p class="card-text">REPRESENTATIVE OFFICE - JAKARTA PT. BUANA MAKMUR MAJU ABADI</p>
                <hr>
                <ul class="fa-ul text-left">
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-phone"></i>
                    </span>(022) 6911681 / 6911682 / 6911683
                  </li>
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-fax"></i>
                    </span>(022) 6906018
                  </li>
                  <li class="mb-2">
                    <span class="fa-li"><i class="fas fa-envelope fa-fw"></i>
                    </span>buanamakmur@gmail.com	
                  </li>
                <ul>
            </div>
          </div>
          </div>
        </div>

      </div>
    </section>
    

@include('sweetalert::alert')
        <script src="{{ asset('js/jquery.3.3.1.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
        duration: 800, 
      });

      $(document).ready(function(){
        $("a").on('click', function(event) {
      
          if (this.hash !== "") {
            event.preventDefault();
      
            var hash = this.hash;
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){      
              window.location.hash = hash;
            });
          } 
          
        });
      });
    </script>
</body>
</html>
