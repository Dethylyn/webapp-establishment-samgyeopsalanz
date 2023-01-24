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
                    <h2 class="section-heading text-uppercase" style="font-family: Serif"><strong>Announcements</strong></h2>
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
          {{-- Slide Announcements --}}
            {{-- <div class="main-carousel">

            <div class="cell"><img src="assets/img/announcement/slide1.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide2.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide3.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide4.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide5.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide6.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide7.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide8.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide9.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide11.png"></div>
            <div class="cell"><img src="assets/img/announcement/slide12.png"></div>

             </div>
             <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
            <script type="text/javascript">
             $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            wrapAround:true,
            freeScroll: true
          });
        </script>
        </section>
            </div>  --}}
            <!-- Carousel -->
                <div class="row">
                    <div class="col-md-4">

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
                        <img src="assets/img/announcement/slide1.png" alt="Los Angeles" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/announcement/slide2.png" alt="Chicago" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div> 
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/announcement/slide3.png" alt="New York" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>  
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

                        
                        </div>

                  {{-- carousel 2 --}}

                    <div class="col-md-4">

                    <div id="de" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#de" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#de" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#de" data-bs-slide-to="2"></button>
                    </div>
            
                    <!-- The slideshow/carousel -->

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/announcement/slide4.png" alt="Los Angeles" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/announcement/slide5.png" alt="Chicago" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div> 
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/announcement/slide7.png" alt="New York" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>  
                        </div>
                    </div>
            
                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#de" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#de" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                        </div>

                        
                        </div>




                    {{-- carousel 3 --}}
                    <div class="col-md-4">

                    <div id="mo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#mo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#mo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#mo" data-bs-slide-to="2"></button>
                    </div>
            
                    <!-- The slideshow/carousel -->

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/img/announcement/slide9.png" alt="Los Angeles" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/announcement/slide10.png" alt="Chicago" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div> 
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/announcement/slide11.png" alt="New York" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>  
                        </div>
                    </div>
            
                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#mo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                        </div>

                        
                        </div>




                            </div>
            </div>
            
        </section>
        <!-- Menu Grid-->
        <section class="page-section bg-secondary" id="menu">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase text-light" style="font-family: Serif"><strong>Menu</strong></h2>
                    <h3 class="section-subheading text-muted">We Offer Unlimited Samgyeopsal.</h3>
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
                    <div class="col-md-4">
                        <!-- Menu item 3-->
                        <div class="about1 text-light">
                            <h1 style="font-family: Garamond">We Serve Every Order From The Core Of Our Hearts</h1>
                            <p>Samgyeopsalanz offers a variety of high-quality meat and classic Korean dishes and spirits in an atmosphere that emulates the rustic and folksy qualities of a local barbecue bar in Korea. A must visit in town.</p>
                            {{-- <p>
                                <i class="fa-solid fa-check" style="font-size:20px;color:yellow;"></i>Affordable Price
                                <i class="fa-solid fa-check tab4" style="font-size:20px;color:yellow;"></i>High-quality meat <br>
                                <i class="fa-solid fa-check" style="font-size:20px;color:yellow;"></i>High-quality meat
                            {{-- </p> <span style="padding-left:3em" --}}
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
                            {{-- <a class="menu-link" data-bs-toggle="modal" href="#menuModal2">
                                <div class="menu-hover">
                                    <div class="menu-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/menu/menu2.jpg" alt="..." />
                            </a> --}}
                        </div>
                    </div>
        </section> 
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                 <div class="col-lg-8 col-sm-6 mb-4">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase"style="font-family: Serif"><strong>Guidelines for our valuable customer</strong></h2>
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
            </div>
        </section>

        {{-- <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="assets/img/about/about.png" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">About Us</h1>
                        </div>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class="row g-4 mb-4 pb-2">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h2 class="text-primary mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="fw-medium mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    </section>
    <!-- About End -->

        <!-- Location-->
        <section class="page-section bg-light" id="location">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase" style="font-family: Serif"><strong>Our Location</strong></h2>
                    <h3 class="section-subheading text-muted"><strong>District 8, Nasipit, Agusan del Norte</strong></h3>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="location-member">
                            <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7072.805217606665!2d125.36170430632092!3d8.979454687513831!2m3!1f0!2f0!3f0!3m2
                             !1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c928b04a6da3%3A0x3d17a3915364df51!2sSAMGYEOPSALANZ!5e0!3m2!1sen!2sph!4v1673632930251!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
           
                          <!--  <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            -->
                        </div>
                    </div>
                    {{-- </div> --}}
                    <div class="col-lg-4">
                        <img src="assets/img/location2.png" alt="..." width="400" height="430">
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div> --}}
            </div> 
        </section>
        <!-- Clients-->
        {{-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center" width="96px">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/logo-pig.png" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/logo-pig.png" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/logo-pig.png" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/logo-pig.png" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-warning btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
            
            @include('homepage.include.footer')

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
                                    {{-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/menu1.jpg" alt="..." />
                                    {{-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul> --}}
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
                                    <!-- Project details-->
                                    {{-- <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> --}}
                                    <img class="img-fluid d-block mx-auto" src="assets/img/menu/menu2.jpg" alt="..." />
                                    {{-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul> --}}
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
