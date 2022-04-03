<x-web-layout>
    <x-slot name="title">{{ $guideline->name }}</x-slot>
    <section class="page-title bg-title overlay-dark">
        <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <div class="title">
                <h3>{{ $guideline->name }}</h3>
            </div>
            <ol class="breadcrumb p-0 m-0">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('web.guidelines') }}">Guideline</a></li>
                <li class="breadcrumb-item active">{{ $guideline->name }}</li>
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
                    <!-- Article -->
                    <article class="blog-post single">
                        <div class="post-content pt-0" style="border: 0;">
                            <div class="post-details">
                            {!! $guideline->content !!}
                            <div class="share-block">
                                <div class="share">
                                    <p>
                                        Share: 
                                    </p>
                                    <ul class="social-links-share list-inline">
                                        <li class="list-inline-item">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                                target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="whatsapp://send?text=Panduan%20ICTEIS%202022%20%3A%20{{ urlencode($guideline->name) }}%0A{{ url()->full() }}"
                                                data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="http://twitter.com/share?text={{ urlencode($guideline->name) }}&url={{ url()->full() }}"
                                                target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->full() }}"
                                            target="_blank"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </article>
                    <!-- Comment Section 
                    <div class="comments">
                        <h5>Comments (3)</h5>
                    </div>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-10 mx-auto">
                <div class="sidebar">
                    <!-- Category Widget -->
                    <div class="widget category">
                        <!-- Widget Header -->
                        <h5 class="widget-header">Other Guideline</h5>
                        <ul class="category-list m-0 p-0">
                            @foreach($otherGuidelines as $otherGuideline)
                            @if($otherGuideline->id !== $guideline->id)
                                <li><a href="{{ route('web.guidelines', $otherGuideline->getRouteParam()) }}">{{ $otherGuideline->name }}</a></li>
                            @endif
                            @endforeach
                            <li><a href="{{ route('web.guidelines') }}">All Guidelines<span class="float-right">({{$guidelinesCount}})</span></a></li>
                        </ul>
                    </div>
                    <!-- Category Widget -->
                    <div class="widget category">
                        <!-- Widget Header -->
                        <h5 class="widget-header">Documents</h5>
                        <ul class="category-list m-0 p-0">
                            @foreach($documents as $document)
                            <li><a href="{{ route('web.guidelines', $document->getRouteParam()) }}">{{ $document->name }}</a></li>
                            @endforeach
                            <li><a href="{{ route('web.guidelines') }}">All Documents<span class="float-right">({{$documentsCount}})</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-web-layout>