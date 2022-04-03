<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Update Setting
        </h2>
    </x-slot>
    @if($setting->type == "code")
    <x-slot name="styles">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css" integrity="sha512-uf06llspW44/LZpHzHT6qBOIVODjWtv4MxCricRxkzvopAlSWnTf6hpZTFxuuZcuNE9CBQhqE0Seu1CoRk84nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </x-slot>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-12">

                            @includeif('partials.errors')

                            <div class="card card-default">
                                <div class="card-header">
                                    <span class="card-title">Update Setting</span>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('settings.update', $setting->id) }}"  role="form" enctype="multipart/form-data" @if($setting->type == "code" || $setting->type == "wysiwyg")onsubmit="onSubmit();"@endif>
                                        {{ method_field('PATCH') }}
                                        @csrf

                                        @include('setting.form')

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($setting->type == "code")
    <x-slot name="scripts">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js" integrity="sha512-xwrAU5yhWwdTvvmMNheFn9IyuDbl/Kyghz2J3wQRDR8tyNmT8ZIYOd0V3iPYY/g4XdNPy0n/g0NvqGu9f0fPJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function(){
                let root = document.getElementById('value');
                var editor = CodeMirror.fromTextArea(root, {
                    mode: "html",
                    lineNumbers: true,
                });
                function onSubmit(){
                    editor.save();
                    return true;
                }
            })
        </script>
    </x-slot>
    @endif
    @if($setting->type == "wysiwyg")
    <x-slot name="scripts">
        <!-- Include JS file. -->
        <script src="https://cdn.tiny.cloud/1/5zrukkn4jexl2esz7s8h3tgbny8ixovaqa7xjlwjk214rrge/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
              selector: '#value',
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
                $("#value").val(tinyMceContent)
                return true;
            }
          </script>
    </x-slot>
    @endif
</x-app-layout>