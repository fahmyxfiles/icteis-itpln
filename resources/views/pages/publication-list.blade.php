<x-web-layout>
    <x-slot name="title">Publications</x-slot>
    <section class="page-title bg-title overlay-dark">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                <div class="title">
                    <h3>All Publications</h3>
                </div>
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Publications</li>
                </ol>
                </div>
            </div>
        </div>
    </section>
    <!--================================
=            News Posts            =
=================================-->

<section class="news section">
    <div class="container">
      <div class="row mt-30">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="block">
            @foreach($publication_fields as $publication_field)
            <div class="pt-5" id="{{ Str::camel($publication_field->name) }}">
              <h4>{{$publication_field->name}}</h4>
              <p>{{$publication_field->description}}</p>
              @if(empty($publication_field->publications->all()))
                <p style="color: red;">No publications for this fields</p>
              @else
                @foreach($publication_field->publications as $publication)
                <div class="row d-flex mt-5">
                  <div class="col-md-4 col-4">
                    <div class="cardImage"><img src="{{ asset('storage/' . $publication->cover_image)}}" style="width:100%" alt="publication"></div>
                  </div>
                  <div class="col-md-8 col-8">
                    <div style="background: #fbfaf9;padding: 28px;">
                        <div class="d-flex">
                            <p style="color: #1e2029;font-size: 20px;font-style: normal;font-weight: 500;line-height: 28px;">{{$publication->title}}</p>
                            <p class="links accreditated d-flex align-items-center" style="gap: 10px;"><img src="{{ asset('images/accreditated.svg') }}" alt="accreditated"> Accredited</p>
                        </div>
                        <div class="d-flex mt-3 align-items-center" style="color:#1455fe;gap:10px;">
                            <img src="{{ asset('images/hashtag.svg') }}" alt="hashtag"> {{implode(';', $publication->publication_tags->pluck('tag')->all())}}
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <p class="publicationText" style="font-size: 16px;">{{$publication->description_body}}</p>
                        </div>
                        <hr style="border: 1px solid rgba(30,32,41,.1);height: 0;margin: 28px 0;">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="currentIssue">Current Issue</p>
                            <p class="published">Published {{$publication->published_date->format('d/m/Y')}}</p>
                        </div>
                        <div class="issueVol mt-3 mb-3"><p style="color: #1e2029;font-size: 16px;font-style: normal;line-height: 28px;font-weight: 600;">{{$publication->current_issue}}</p></div>
                        <a style="border-bottom: 0.5px solid #1455fe;color: #1455fe;line-height: 20px;font-size: 16px;font-style: normal;font-weight: 400;" href="{{$publication->url}}" class="publicationLink">View Journal</a>
                    </div>
                  </div>
                </div>
                @endforeach
              @endif
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-lg-4 col-md-10 mx-auto">
          <div class="sidebar sticky pt-5">
            <!-- Category Widget -->
            <div class="widget category">
              <!-- Widget Header -->
              <h5 class="widget-header">Fields</h5>
              <ul class="category-list m-0 p-0">
                @foreach($publication_fields as $publication_field)
                <li><a href="#{{ Str::camel($publication_field->name) }}">{{ $publication_field->name }}<span class="float-right">({{$publication_field->publications->count()}})</span></a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--====  End of News Posts  ====-->
  <x-slot name="scripts">
    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {
        
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();
        
              // Store hash
              var hash = this.hash;
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 400, function(){
        
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
        </script>
</x-slot>
</x-web-layout>