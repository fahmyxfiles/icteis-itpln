<x-web-layout>
    <x-slot name="title">Call for Paper</x-slot>
    <!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>Call for Paper</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				  <li class="breadcrumb-item active">Call for Paper</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--===========================
=            About            =
============================-->

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 align-self-center">
				<div class="text-center">
					<h4>@setting('web.call-for-paper.important-dates.title')</h4>
                    <p>@setting('web.call-for-paper.important-dates.subtitle')</p>
					<div class="row mt-5">
						@foreach($important_dates as $important_date)
						<div class="col-sm-3">
							<div class="card border-primary">
								<div class="card-body">
									{!! $important_date->icon !!}
									<h5 class="card-title mt-3" style="min-height:50px;font-style: normal;font-size: 18px;line-height: 24px;font-weight: 400;">{{$important_date->name}}</h5>
									<p class="card-text" style="color: rgba(30,32,41,.8);font-size: 16px;line-height: 28px;">{{$important_date->date->format('d M, Y')}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 align-self-center">
				<div class="text-center">
					<h4>@setting('web.call-for-paper.topic-of-interests.title')</h4>
                    <p>@setting('web.call-for-paper.topic-of-interests.subtitle')</p>
					<div class="row">
						@foreach($topic_of_interests as $index => $topic_of_interest)
						<div class="@if(($index%3) == 1 || ($index%3) == 2) col-6 @else col-12 @endif mt-3">
							<div class="card" style="background-color: #f4f4f4;">
								<div class="card-body" style="@if(($index%3) == 1 || ($index%3) == 2)  @else padding: 1.25rem 130px @endif">
									<h5 class="card-title" style="font-style: normal;font-weight:600;">{{$topic_of_interest->name}}</h5>
									<p class="card-text" style="color: rgba(30,32,41,.8);font-size: 16px;line-height: 28px;">{{$topic_of_interest->description}}</p>
									<div class="row mt-3 text-left">
										@foreach($topic_of_interest->topic_of_interest_scopes as $topic_of_interest_scope)
										<div class="col-6 pt-2">
											<span><img src="{{ asset('images/check.svg') }}" alt="check"> {{$topic_of_interest_scope->name}}</span>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 align-self-center">
				<div class="card" style="background-color: #f4f4f4;">
					<div class="card-body">
						<div class="d-flex justify-content-between">
							<div class="" style="padding: 100px;">
								<h5 class="card-title" style="font-style: normal;font-weight:600;">@setting('web.call-for-paper.submit.title')</h5>
								<p class="card-text" style="color: rgba(30,32,41,.8);font-size: 16px;line-height: 28px;">@setting('web.call-for-paper.submit.subtitle')</p>
								<a target="_blank" href="@setting('web.call-for-paper.submit.url')" class="btn btn-primary btn-lg mt-3">Submit Now</a>
							</div>
							<div class="">
								<img src="{{asset('images/submitpaperimage.svg')}}" alt="Submit Paper"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of About  ====-->
</x-web-layout>