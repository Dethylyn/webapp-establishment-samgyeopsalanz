<!-- Navigation-->
    <div class="news-container">
        <div class="title">
            Announcement
        </div>

        <ul>
             @foreach($sliders as $SliderItem)
                        <li>
                        {{$SliderItem->description}}
                        </li>
                 @endforeach
        </ul>
    </div>
<br>
<br>

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="#page-top"><img src="assets/img/final-logo.png" alt="..." /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars ms-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                            <li class="nav-item"><a class="nav-link" href="#announcements">Announcements</a></li>
                            <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#location">Location</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
                            <li class="nav-item"><a class="nav-link btn btn-warning" href="{{ url('/login')}}">Login</a></li>
                            <li class="nav-item"><a class="nav-link btn btn-warning" href="{{ url('/register')}}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            