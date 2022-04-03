<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->name ?? 'Show Event' }}
        </h2>
    </x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css" integrity="sha512-uf06llspW44/LZpHzHT6qBOIVODjWtv4MxCricRxkzvopAlSWnTf6hpZTFxuuZcuNE9CBQhqE0Seu1CoRk84nQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                            Show Event
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('events.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationalias" class="form-label">{{ Form::label('alias') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('alias', $event->alias, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $event->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationhero_text" class="form-label">{{ Form::label('hero_text') }}</label>
            <textarea id="hero_text" class="d-none">{!! $event->hero_text !!}</textarea>
        </div>
        <div class="mb-3">
            <label for="validationorganizer" class="form-label">{{ Form::label('organizer') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('organizer', $event->organizer, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationstart_date" class="form-label">{{ Form::label('start_date') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('start_date', $event->start_date->format("d/m/Y"), ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationend_date" class="form-label">{{ Form::label('end_date') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('end_date', $event->end_date->format("d/m/Y"), ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationlocation" class="form-label">{{ Form::label('location') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('location', $event->location, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationname" class="form-label">Social Media List</label>
            <div class="list-group">
                @foreach($event->event_social_medias as $event_social_media)
                <a target="_blank" href="{{$event_social_media->social_link}}" class="list-group-item list-group-item-action">{{ ucfirst($event_social_media->social_type) }} (<span style="color: blue;">{{$event_social_media->social_link}}</span>)</a>
                @endforeach
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js" integrity="sha512-xwrAU5yhWwdTvvmMNheFn9IyuDbl/Kyghz2J3wQRDR8tyNmT8ZIYOd0V3iPYY/g4XdNPy0n/g0NvqGu9f0fPJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function(){
                let root = document.getElementById('hero_text');
                var editor = CodeMirror.fromTextArea(root, {
                    mode: "html",
                    readOnly: true,
                    lineNumbers: true,
                });
            })
        </script>
    </x-slot>
</x-app-layout>