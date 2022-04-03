<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="{{route('web.home')}}">
          <img src="{{ asset('images/logo.svg') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item {{ Route::is('web.home') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('web.home')}}">Home
              <span>/</span>
            </a>
          </li>
          <li class="nav-item {{ Route::is('web.call-for-paper') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('web.call-for-paper')}}">Call For Paper
              <span>/</span>
            </a>
          </li>
          <li class="nav-item dropdown dropdown-slide">
            <a class="nav-link" href="#" data-toggle="dropdown">Guidelines<span>/</span></a>
              <!-- Dropdown list -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="aboutus.html">Abstract Guideline</a>
                <a class="dropdown-item" href="single-speaker.html">Full Paper Guideline</a>
                <a class="dropdown-item" href="gallery.html">Presentation Guideline</a>
                <a class="dropdown-item" href="gallery.html">All Guidelines</a>
              </div>
          </li>
          <li class="nav-item dropdown dropdown-slide">
            <a class="nav-link" href="#" data-toggle="dropdown">Documents<span>/</span></a>
              <!-- Dropdown list -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="gallery.html">Article Preparation</a>
                <a class="dropdown-item" href="gallery-2.html">Paper Template</a>
                <a class="dropdown-item" href="testimonial.html">Copyright Checklist</a>
                <a class="dropdown-item" href="gallery.html">All Documents</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule.html">Fees<span>/</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sponsors.html">Publication</a>
          </li>
        </ul>
        <a href="@setting('web.call-for-paper.submit.url')" target="_blank" class="ticket">
          <span>Submit</span>
        </a>
        </div>
    </div>
  </nav>
  
  <!--====  End of Navigation Section  ====-->