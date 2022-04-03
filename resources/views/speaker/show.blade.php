<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $speaker->name ?? 'Show Speaker' }}
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
                                            Show Speaker
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('speakers.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $speaker->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationorganization" class="form-label">{{ Form::label('organization') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('organization', $speaker->organization, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationprofile_photo" class="form-label">{{ Form::label('profile_photo') }}</label>
            <div class="input-group has-validation">
            @if(!empty($speaker->profile_photo))
            <img id="preview" src="{{ asset('storage/' . $speaker->profile_photo )}}" class="img-thumbnail" style="width: 256px" alt="Speaker Profile Photo">
            @else
            <img id="preview" src="https://via.placeholder.com/256x270.jpg?text=256x270" class="img-thumbnail" style="width: 256px" alt="Speaker Profile Photo Example">
            @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="validationrole" class="form-label">{{ Form::label('role') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('role', strtoupper($speaker->role), ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationbiodata" class="form-label">{{ Form::label('biodata') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('biodata', $speaker->biodata, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationname" class="form-label">Social Profile List</label>
            <div class="list-group">
                @foreach($speaker->speaker_social_profiles as $speaker_social_profile)
                <a target="_blank" href="{{$speaker_social_profile->social_link}}" class="list-group-item list-group-item-action">{{ ucfirst($speaker_social_profile->social_type) }} (<span style="color: blue;">{{$speaker_social_profile->social_link}}</span>)</a>
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
</x-app-layout>