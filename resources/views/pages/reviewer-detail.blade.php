<x-web-layout>
    <x-slot name="title">Reviewer Profile {{ $reviewer->name }}</x-slot>
    <!--================================
    =            Page Title            =
    =================================-->

    <section class="page-title bg-title overlay-dark">
        <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <div class="title">
                <h3>Reviewer Profile</h3>
            </div>
            <ol class="breadcrumb p-0 m-0">
                <li class="breadcrumb-item"><a href="{{route('web.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Reviewer Profile</li>
            </ol>
            </div>
        </div>
        </div>
    </section>
    
    <!--====  End of Page Title  ====-->
    
    
    <section class="section single-speaker">
        <div class="container">
        <div class="block">
            <div class="row">
            <div class="col-lg-3 col-md-3 align-self-md-center">
                <div class="image-block">
                <img src="{{ asset('storage/' . $reviewer->profile_photo) }}" class="img-fluid" alt="speaker">
                </div>
            </div>
            <div class="col-lg-9 col-md-9 align-self-center">
                <div class="content-block">
                <div class="name">
                    <h3>{{$reviewer->name}}</h3>
                </div>
                <div class="profession">
                    <p>{{$reviewer->organization}}</p>
                </div>
                <div class="details">
                    <p>{{$reviewer->biodata}}</p>
                </div>
                @if(empty($reviewer->reviewer_social_profiles))
                <div class="social-profiles">
                    <h5>Social Profiles</h5>
                    <ul class="list-inline social-list">
                    @foreach($reviewer->reviewer_social_profiles as $reviewer_social_profile)
                    <li class="list-inline-item">
                        <a target="_blank" href="{{$reviewer_social_profile->social_link}}"><i class="fa fa-{{$reviewer_social_profile->social_type}}"></i></a>
                    </li>
                    @endforeach
                    </ul>
                </div>
                @endif
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
</x-web-layout>
