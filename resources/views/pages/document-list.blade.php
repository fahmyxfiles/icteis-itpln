<x-web-layout>
    <x-slot name="title">All Documents</x-slot>
    <section class="page-title bg-title overlay-dark">
        <div class="container">
        <div class="row">
            <div class="col-12 text-center">
            <div class="title">
                <h3>All Documents</h3>
            </div>
            <ol class="breadcrumb p-0 m-0">
                <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                <li class="breadcrumb-item active">Documents</li>
            </ol>
            </div>
        </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row schedule">
                <div class="col-lg-12 col-md-12 align-self-center schedule-contents">
                    <div class="schedule-item">
                        <!-- Headings -->
                        <ul class="m-0 p-0">
                            <li class="headings">
                                <div class="time">No</div>
                                <div class="speaker">Name</div>
                                <div class="subject">Download</div>
                            </li>
                            <!-- Schedule Details -->
                            @foreach($documents as $document)
                            <li class="schedule-details">
                                <div class="block">
                                    <!-- time -->
                                    <div class="time">
                                        <span class="time">{{ $loop->index+1 }}</span>
                                    </div>
                                    <!-- Speaker -->
                                    <div class="speaker">
                                      <span class="name" style="margin-left: 0px;">{{ $document->name }}</span>
                                    </div>
                                    <!-- Subject -->
                                    <div class="subject"><a href="{{ route('web.documents', $document->getRouteParam()) }}">{{basename($document->file_path) }}</a></div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-web-layout>