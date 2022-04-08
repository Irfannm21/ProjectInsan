<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('AdminLte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}">
    <title>Insansandang Internusa</title>
</head>
<body>  
<!-- NAVBAR -->
<nav id="main-navbar" class="navbar navbar-expand-md navbar-light bg-dark py-0">
    <div class="container">
        <a href="index.html" class="navbar-brand">
            <img src="img/logo-remove.png" alt="insan_md_logo" class="main-logo d-none d-md-inline">
            <img src="img/favicon.png" alt="insan_sm_logo" class="small-logo d-inline d-md-none">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="product.html" class="nav-link p-4 active">Product</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link p-4">Facilities</a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link p-4">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link p-4">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- SHOWCASE -->
<section id="showcase" class="py-4">
    <div class="dark-overlay">
        <div class="container">
            <div class="d-none d-sm-block text-white">
                <h1 class="display-4 bg-none px-2 pb-1 d-inline-block">
                    <strong>PT.Insansandang</strong>
                    <br><strong>Internusa</strong>
                </h1>
                <br>
                <p class="bg-none px-2 pb-1">
                    PT. Insansandang Internusa is known for its high quality products. This acknowledgement is attained as the company always applies high quality control to all products being manufactured. For us, quality is always our primary concern
                </p>
                <a href="https://wa.me/6289681558231?text=%20Halo,%20Saya%20tertarik%20dengan%20product%20Anda" class="btn btn-success">Order Now</a>
            </div>
        </div>
    </div>
</section>

<!-- ENDNAVBAR -->

<!-- showoff-1 -->
<section id="product-spinning" class="text-muted py-5">
    <div class="container">
        <h2 class="text-center">Product</h2>
        <hr class="w-25">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/pd/2.jpg')}}" alt="sp" class="img-fluid mb-3 img-thumbnail">
            </div>
            <div class="col-md-6">
                <h3>Spinning</h3>
                <p class="lead">Spinning Mills is a Premium Quality Supplier of Ring Spun Yarns</p>
                <p>
                    We produce several types of synthetic yarns, e.g. 100% Polyester and different blends of Polyester & Viscose Rayon. We have wide range of products in single as well as multifold yarns. All single yarn products are available in wide range of Ne 4ˢ to Ne 60ˢ, and plied yarns up to 10 plies. Our 8” Traverse Propeller driven Assembly Winding Package enables us to make up to 2.5 kg of knotless / spliceless twisted yarn package in our smart twisters. We can also supply single compact yarn and siro compact twisted yarn.
                </p>
                <a href="#" class="btn btn-outline-primary">View Product</a>
            </div>
        </div>
    </div>
</section>

<!-- showoff 2 -->
<section id="product-weaving" class="text-muted bg-light py-5">
    <div class="container">
        <div class="row">
              <div class="col-md-6">
                <h3>Weaving</h3>
                <p class="lead">Our weaving factory is specialized in Greige</p>
                <p>
                    PT. Insansandang Internusa Weaving Factory was started in 1988 as a response of the market demand for high quality uniform materials. With the passion to serve our worldwide customers, we have been continuously improving, modifying, and adopting new skills to cope up technological changes and requirements of our customers. <br>
                    Our weaving factory is specialized in Greige for Uniform Suiting (e.g. School Uniform; Military, Police, Security Guard Uniform; Civil Servant Uniform; Office Uniform; Medical Workers Uniform; etc.).
                </p>
                <a href="#" class="btn btn-outline-primary">View Product</a>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/pd/wv4.jpg')}}" alt="sp" class="img-fluid mb-3 img-thumbnail" style="height: 350px; width: 500px;">
            </div>
        </div>
    </div>
</section>

<section id="product-spinning" class="text-muted py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/pd/3.jpg" alt="sp" class="img-fluid mb-3 img-thumbnail">
            </div>
            <div class="col-md-6">
                <h3>Finishing</h3>
                <p class="lead">Finishing Unit processes various greige materials (e.g. 100% Polyester, 100% Cotton, 100% Viscose Rayon, Polyester & Viscose Rayon Blended, Polyester & Cotton Blended, etc)</p>
                <p>
                    Dyeing Finishing Unit processes various greige materials (e.g. 100% Polyester, 100% Cotton, 100% Viscose Rayon, Polyester & Viscose Rayon Blended, Polyester & Cotton Blended, etc) into finished fabric material. Using dyestuff material from reputable supplier, we are able to add special finishing such as water repellent, stain release, fire retardant, anti UV, etc, upon request. On select quality, our machine is capable to produce finish fabric with width up to 70 inch or 180cm.
                </p>
                <a href="#" class="btn btn-outline-primary">View Product</a>
            </div>
        </div>
    </div>
</section>

<!-- MARKET -->
<section id="market">
    <div class="container">
    <div class="row text-dark py-3">
       <div class="col text-center">
           <h2>Market</h2>
           <hr class="w-25">
       </div>
    </div>
    <div class="row py-3 d-flex">
         <div class="col-md-9">
                <img src="img/world.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-3 text-center d-flex-column">
                <div class="p-3">
                    <h3>Spinning <br>1.000.000.000 <br> <h5>Bales / Yarn</h5> </h3>
                </div>
                <div class="p-3">
                    <h3>Weaving <br>1.000.000.000 <br> <h5>Meters / Greige</h5> </h3>
                </div>
                <div class="p-3">
                    <h3>Finishing <br>1.000.000.000 <br> <h5>Meters / greige</h5> </h3> 
                </div>
            </div>
    </div>
</div>
</section>

<!-- About SECTION -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="row text-dark text-center py-3">
            <div class="col">
                <h2>About</h2>
                <hr class="w-25">
            </div>
        </div>
        <div class="row text-center d-flex py-3">
            <div class="col-md-8">
                <article>
                    <h3>PT.Insandang Internusa</h3>
                    <img src="img/Taman.png" alt="" class="img-fluid">
                    <p class="p-3 text-muted">
                        PT. INSANSANDANG INTERNUSA was established in June 1988 as a response of the market demand for high quality uniform materials. Our facility is located in Sumedang, just outside of Bandung, the capital city of West Java. Started with the spirit and philosophy to look always for the best, supported by sophisticated production machines and other modern working facilities, we continually improve our process and system to be the leading uniform manufacturer. 
                  
                    </p>
                    <button type="button" class="btn btn-outline-primary">View Details</button>
                </article>
            </div>
            <div class="col-md-4 text-center">
                <h3>Iso Sertificates</h3>
                <div class="carousel slide" id="mySlide" data-ride="carousel">
    
                    <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <img src="img/pd/2.jpg" alt="" class="img-thumbnail" style="height: 400px;">
                        <div class="carousel-caption pb-0">
                            <a href="#" class="text-white"></a>
                            <p class="bg-dark d-inline-block px-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/pd/3.jpg" alt="" class="img-thumbnail" style="height: 400px;">
                        <div class="carousel-caption pb-0">
                            <a href="#" class="text-white"></a>
                            <p class="bg-dark d-inline-block px-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    
                    <div class="carousel-item">
                        <img src="img/pd/2.jpg" alt="" class="img-thumbnail" style="height: 400px;">
                        <div class="carousel-caption pb-0">
                            <a href="#" class="text-white"></a>
                            <p class="bg-dark d-inline-block px-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    
                    </div>
                        
                    <a href="#mySlide" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only"></span>
                    </a>
                    
                    <a href="#mySlide" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only"></span>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- ADDRESS -->
<section id="alamat" class="py-5">
    <div class="container">
        <div class="text-center">
            <h3>Contact & Address</h3>
            <hr class="w-25">
        </div>
        <div class="row mr-1">
            <div class="col-md-4">
                <div class="text-center">
                    <p class="h4">Contact Main Office & Spinning</p>
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
            <div class="col-md-4">
                <div class="text-center">
                    <p class="h4">Weaving & Finishing</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.759676462285!2d107.7830834!3d-6.9573203!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf99f0bf002d3bbd7!2sPT%20Insansandang%20Internusa!5e0!3m2!1sid!2sid!4v1646617316707!5m2!1sid!2sid" width="350" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <p class="h4">Spinning</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.759676462285!2d107.7830834!3d-6.9573203!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf99f0bf002d3bbd7!2sPT%20Insansandang%20Internusa!5e0!3m2!1sid!2sid!4v1646617316707!5m2!1sid!2sid" width="350" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- /ADDRESS -->
<!-- FOOTER -->
<section id="main-footer" class="text-white bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center text-md-left">
                <a href="#">
                    <img src="img/logo-remove.png" alt="" style="height: 60px;">
                </a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil iure inventore molestias sint mollitia similique quos ipsam, natus, quaerat, iusto nobis.
                </p>
            </div>
            <div class="col-md-3 text-center">
                <h5>Community</h5>
                <ul class="list-unstyled">
                    <li><img src="#" alt="" class="text-white">Activity</li>
                    <li><img src="#" alt="" class="text-white">Members</li>
                    <li><img src="#" alt="" class="text-white">Groups</li>
                    <li><img src="#" alt="" class="text-white">Forums</li>
                </ul>
            </div>
           
            <div class="col-md-3 text-center">
                <h5>Our Services</h5>
                <ul class="list-unstyled">
                    <li><img src="#" alt="" class="text-white">Our Mission</li>
                    <li><img src="#" alt="" class="text-white">Help/Contact Us</li>
                    <li><img src="#" alt="" class="text-white">Privacy Policy</li>
                    <li><img src="#" alt="" class="text-white">Cookie Policy</li>
                    <li><img src="#" alt="" class="text-white">Terms & Conditions</li>
                </ul>
            </div>

            <div class="col-md-3 text-center text-md-left">
                <h5>Hubungi Kami</h5>
               <div class="text-nowrap"><i class="fas fa-envelope mr-3"></i>Irfan@hello.com</div>
               <div class="text-nowrap"><i class="fas fa-phone mr-3"></i>021-998-99</div>
               <div class="text-nowrap"><i class="fas fa-globe mr-3"></i>irfannurmuhammad.com</div>
            </div>
        </div>
        <div class="row mt-3 mt-md-0">
            <div class="col-md-3 mr-md-auto text-center text-md-left">
                <small>&copy;Insansandang Internusa</small>
            </div>
            <div class="col-md-3 text-center text-md-left">
                <a href="#" class="text-white mr-2">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="#" class="text-white mr-2">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="#" class="text-white mr-2">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a href="#" class="text-white mr-2">
                    <i class="fab fa-line fa-lg"></i>
                </a>
                <a href="#" class="text-white mr-2">
                    <i class="fab fa-whatsapp fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script>

</script>
</body>
</html>