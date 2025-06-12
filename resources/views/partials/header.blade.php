   <header id="header" class="header d-flex align-items-center sticky-top">
       <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

           <a href="index.html" class="logo d-flex align-items-center">
               <!-- Uncomment the line below if you also wish to use an image logo -->
               <!-- <img src="assets/img/logo.png" alt=""> -->
               <h1 class="sitename">DevFolio</h1>
           </a>

           <nav id="navmenu" class="navmenu">
               <ul>
                   <li><a href="{{ route('Theme.home') }}" class="@yield('home-active')">Home<br></a></li>
                   <li><a href="{{ route('Theme.about') }}" class="@yield('about-active')">About</a></li>
                   <li><a href="{{ route('Theme.services') }}" class="@yield('services-active')">Services</a></li>
                   <li><a href="{{ route('Theme.portfolio') }}" class="@yield('portfolio-active')">Portfolio</a></li>

                   <li><a  href="{{ route('Theme.contact') }}" class="@yield('contact-active')">Contact</a></li>
               </ul>
               <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
           </nav>

       </div>
   </header>
