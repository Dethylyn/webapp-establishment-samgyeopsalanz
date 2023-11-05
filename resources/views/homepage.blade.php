@extends('homepage.layouts.app')
 
@section('title', 'Samgyeopsalanz')
 
@section('content')

            @include('homepage.include.nav')
             <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">안녕 Annyeong!</div>
                <div class="masthead-heading text-uppercase">Samgyeopsalanz</div>
                <a class="btn btn-warning rounded-pill py-3 px-5" href="#announcements">Read More</a>
            </div>
        </header>

        <!-- Announcements-->
        <section class="page-section" id="announcements">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><strong>Announcements</strong></h2>
                    <h3 class="section-subheading text-muted">We Offer Unlimited Samgyeopsal.</h3>
                </div>
                <div class="row text-center" style="font-family: Serif">
                    <div class="col-md-4">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" width="250px" src="assets/img/announcement/1.jpg" alt="..." /></div>
                        <h4 class="my-3"> <strong>Premium Meat Cuts</strong></h4>
                        <p class="text-muted">Beef and Pork that are produces with only natural foods.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" width="250px" src="assets/img/announcement/2.jpg" alt="..." /></div>
                        <h4 class="my-3"><strong>Authentic Korean Side Dishes</strong></h4>
                        <p class="text-muted">Side dishes that are cooked with the soul and taste of Korea.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" width="250px" src="assets/img/announcement/3.jpg" alt="..." /></div>
                        <h4 class="my-3"> <strong>Unlimited Rice</strong></h4>
                        <p class="text-muted">Unlimited Rice that makes your meal satisfy.</p>
                    </div>
                </div>
            </div>
          
        <!-- Carousel -->

        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/img/announcement/banner1.png" class="d-block w-100" style="width:100%">
            </div>
            <div class="carousel-item">
            <img src="assets/img/announcement/banner2.png" class="d-block w-100" style="width:100%">
            </div>
            <div class="carousel-item">
            <img src="assets/img/announcement/banner3.png" class="d-block w-100" style="width:100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        </div>

            {{-- <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
            
                <!-- The slideshow/carousel -->

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/announcement/banner1.png" alt="Los Angeles" class="d-block" style="width:100%">
                    <div class="carousel-caption">                  
                    <div class="carousel-item">
                        <img src="assets/img/announcement/banner2.png" alt="Chicago" class="d-block" style="width:100%">
                    <div class="carousel-caption">                
                    <div class="carousel-item">
                        <img src="assets/img/announcement/banner3.png" alt="New York" class="d-block" style="width:100%">
                    <div class="carousel-caption">                       
                    </div>
            
                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>                        
                </div>
            </div>                         --}}
        </section>
        <!-- Menu Grid-->
        <section class="page-section" style="background-color:#222831" id="menu">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-light"><strong>Menu</strong></h2>
                    <h3 class="section-subheading text-light">We Offer Unlimited Samgyeopsal.</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!-- menu item 1-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal1">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/menu1.jpg" alt="..." />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Menu item 2-->
                        <div class="menu-item">
                            <a class="menu-link" data-bs-toggle="modal" href="#menuModal2">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/menu2.jpg" alt="..." />
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-md-4"> --}}
                        <!-- Menu item 3-->
                        <div class="col-md-4">
                            <div class="detail-box text-light">
                                <div class="heading_container">
                                <h2>
                                    We Serve Every Order From The Core Of Our Hearts
                                </h2>
                                </div>
                                <p>
                                Samgyeopsalanz offers a variety of high-quality meat and classic Korean dishes and spirits in an atmosphere that emulates the rustic and folksy qualities of a local barbecue bar in Korea. A must visit in town.
                                </p>
                            </div>
                        {{-- </div> --}}
                            <br/>
                            <div class="row g-2 mb-4 text-light">
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-warning me-2"></i>Affordable Price
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-warning me-2"></i>High-quality Meat
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-warning me-2"></i>Classic Korean Dishes
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-warning me-2"></i> Fresh and Clean
                                </div>
                            </div>
                        {{-- <div class="about1 text-light">
                            <h2 style="font-family: Montserrat">We Serve Every Order From The Core Of Our Hearts</h2>
                            <p style="font-family: Roboto Slab">Samgyeopsalanz offers a variety of high-quality meat and classic Korean dishes and spirits in an atmosphere that emulates the rustic and folksy qualities of a local barbecue bar in Korea. A must visit in town.</p>
                        
                            <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-warning me-2"></i>Affordable Price
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-warning me-2"></i>High-quality Meat
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-warning me-2"></i>Classic Korean Dishes
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-warning me-2"></i> Fresh and Clean
                            </div>
                        </div>                     
                    </div>
                </div>
            </div> --}}
        </section> 
        
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
   {{-- EDIT              <div class="col-lg-8 col-sm-6 mb-4"> --}}
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase"><strong>Guidelines for our valuable customer</strong></h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/time.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>TIME LIMIT</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Two(20) hours duration will be given to the customers. Time starts when the customers occupied their table. This will be monitored by the crew of the restaurant. If the customer exceeds on the given time, the next order will be charged as another set of order</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/system.png" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>QUEUEING SYSTEM</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">Kindly enlist your name in the guest log. Please wait for your name to be called. If in case you are not in the premises after your name has been called trice, we shall open the availability of the table to the next in line.</p></div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/no-left-over.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>PENALTY FOR LEFTOVER</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">For every 100g leftover meat cooked or uncooked, 100 pesos will be charged per table and 30 pesos for rice leftover.</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/pets-not-allowed.jpeg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>PETS ARE NOT ALLOWED</h4>
                                </div>
                                <div class="timeline-body"><p class="text-muted">For the health and safety of others, please no pets in eating area/indoor.</p></div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>
                                    FIRST
                                    <br />
                                    COME
                                    <br />
                                    FIRST SERVE
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
                 <!-- about section  addition-->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Samgyeopsalanz
              </h2>
            </div>
            <p>
              Welcome to samgyeopsalanz restober, this was opened on June 28, 2022 own by company Anzconstruction. They offer unlimited Korean BBQ with affordable price for only 199 pesos on their Grand Opening.<br>
              <br>Samgyeopsalanz becomes popular not only in Nasipit but in Agusan del Norte Province.

              <br>Samgyeopsalanz directly translated from Korean, samgyeop-sal (삼겹살) means "three layer flesh," referring to striations of lean meat and fat in the pork belly that appear as three layers when cut.[1][2]

              It is the part of the abdomen under the loin from the 5th rib or 6th rib to the hind limb.[3] In Korea, the word samgyeop-sal, meaning "pork belly", often refers to samgyeop-sal-gui (grilled pork belly), in the same way that the word galbi, meaning "ribs", often refers to galbi-gui (grilled beef ribs). Gui refers to roasted, baked, or grilled dishes.

              One can also find ogyeopsal (오겹살), with an o meaning "five" and "gyeop" meaning a layer. Ogyeop-sal includes the skin part of the pork belly, unlike samgyeop-sal where the skin is removed.
            </p>
            {{-- <a href="">
              Read More
            </a> --}}
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-heart"></i>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="assets/img/opening.JPG" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
            {{-- </div> --}}

                {{-- Customer Review --}}
                <!-- Carousel -->
                {{-- <div id="de" class="carousel slide" data-bs-ride="carousel"> --}}

                <!-- Indicators/dots -->
                {{-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#de" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#de" data-bs-slide-to="1"></button>
                </div> --}}
                
                <!-- The slideshow/carousel -->
                {{-- <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/img/about/customer1.png" alt="Los Angeles" class="d-block" style="width:100%">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/img/about/customer2.png" alt="Chicago" class="d-block" style="width:100%">
                    </div>
                </div>
                 --}}
                <!-- Left and right controls/icons -->
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#de" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button> --}}

            </div>
        </section>

    <!-- About End -->

        <!-- Location-->
        <section class="page-section bg-light" id="location">
            <div class="container2">
                <div class="text-center">
                    {{-- style="font-family: Serif" --}}
                    <h2 class="section-heading text-uppercase"><strong>Our Location</strong></h2>
                    <h3 class="section-subheading text-muted"><strong>District 8, Nasipit, Agusan del Norte</strong></h3>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-8"> --}}
                        <div class="location-member">
                            <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7072.805217606665!2d125.36170430632092!3d8.979454687513831!2m3!1f0!2f0!3f0!3m2
                             !1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c928b04a6da3%3A0x3d17a3915364df51!2sSAMGYEOPSALANZ!5e0!3m2!1sen!2sph!4v1673632930251!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        
                        </div>                   
                </div>              
            </div> 
        </section>
                  
            @include('homepage.include.footer2')

            <!-- menu Modals-->
        <!-- menu item 1 modal popup-->
        <div class="menu-modal modal fade" id="menuModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                   
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/menu1.jpg" alt="..." />
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu item 2 modal popup-->
        <div class="menu-modal modal fade" id="menuModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/menu2.jpg" alt="..." />
                                    
                                    <button class="btn btn-warning btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection      
