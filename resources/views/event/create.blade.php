<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Event
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-12">

                            @includeif('partials.errors')

                            <div class="card card-default">
                                <div class="card-header">
                                    <span class="card-title">Create Event</span>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('events.store') }}"  role="form" enctype="multipart/form-data" onsubmit="onSubmit();">
                                        @csrf

                                        @include('event.form')

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <!-- Include JS file. -->
        <script src="https://cdn.tiny.cloud/1/5zrukkn4jexl2esz7s8h3tgbny8ixovaqa7xjlwjk214rrge/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
              selector: '#hero_text',
              plugins: 'lists a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
              toolbar: 'numlist bullist a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
              toolbar_mode: 'floating',
              tinycomments_mode: 'embedded',
              tinycomments_author: 'ICTEIS',
              width: "100%",
              height: "500"
            });
            function onSubmit(){
                let tinyMceContent = tinyMCE.activeEditor.getContent();
                $("#hero_text").val(tinyMceContent)
                return true;
            }
          </script>
    </x-slot>
</x-app-layout>
