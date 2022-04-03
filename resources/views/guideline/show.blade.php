<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $guideline->name ?? 'Show Guideline' }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">

                                        <span id="card_title">
                                            Show Guideline
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('guidelines.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $guideline->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublished" class="form-label">Status</label>
            <div class="input-group has-validation">
                {{ Form::text('published', strtoupper($guideline->published), ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcontent" class="form-label">{{ Form::label('content') }}</label>
            <div class="input-group has-validation">
                <textarea id="content" name="content" class="d-none">{!! $guideline->content !!}</textarea>
            </div>
        </div>

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
              selector: '#content',
              readonly : 1,
              width: "100%",
              height: "500",
              menubar: false,
              statusbar: false,
              toolbar: false
            });
          </script>
    </x-slot>
</x-app-layout>