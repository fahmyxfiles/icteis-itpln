<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $partnership->name ?? 'Show Partnership' }}
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
                                            Show Partnership
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('partnerships.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $partnership->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationlogo" class="form-label">{{ Form::label('logo') }} (160x83 pixel)</label>
            @if(!empty($partnership->logo))
            <img id="preview" src="{{ asset('storage/' . $partnership->logo )}}" class="img-thumbnail" style="width: 160px" alt="Partnership Logo Image">
            @else
            <img id="preview" src="https://via.placeholder.com/160x83.jpg?text=160x83" class="img-thumbnail" style="width: 160px" alt="Partnership Logo Example">
            @endif
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