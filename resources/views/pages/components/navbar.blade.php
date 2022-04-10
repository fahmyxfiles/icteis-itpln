<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="{{route('web.home')}}">
          <img src="{{ asset('storage') }}/@setting('app.logo')" alt="logo" style="max-height: 40px;">
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
            <a class="nav-link {{ Route::is('web.guidelines') ? 'active' : '' }}" href="#" data-toggle="dropdown">Guidelines<span>/</span></a>
              <!-- Dropdown list -->
              <div class="dropdown-menu">
                @foreach(\App\Models\Guideline::where('published', 'published')->orderBy('updated_at', 'asc')->take(3)->get() as $latestGuideline)
                <a class="dropdown-item" href="{{ route('web.guidelines', $latestGuideline->getRouteParam()) }}">{{$latestGuideline->name}}</a>
                @endforeach
                <a class="dropdown-item" href="{{ route('web.guidelines')}}">All Guidelines</a>
              </div>
          </li>
          <li class="nav-item dropdown dropdown-slide">
            <a class="nav-link {{ Route::is('web.documents') ? 'active' : '' }}" href="#" data-toggle="dropdown">Documents<span>/</span></a>
              <!-- Dropdown list -->
              <div class="dropdown-menu">
                @foreach(\App\Models\Document::where('published', 'published')->orderBy('updated_at', 'asc')->take(3)->get() as $latestDocument)
                <a class="dropdown-item" href="{{ route('web.documents', $latestDocument->getRouteParam())}}">{{$latestDocument->name}}</a>
                @endforeach
                <a class="dropdown-item" href="{{ route('web.documents')}}">All Documents</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('web.fee') ? 'active' : '' }}" href="{{ route('web.fee')}}">Fees<span>/</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('web.publications') ? 'active' : '' }}" href="{{ route('web.publications')}}">Publication</a>
          </li>
        </ul>
        <a href="@setting('web.call-for-paper.submit.url')" target="_blank" class="ticket">
          <span>Submit</span>
        </a>
        </div>
    </div>
  </nav>
  
  <!--====  End of Navigation Section  ====-->