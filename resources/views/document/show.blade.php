<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $document->name ?? 'Show Document' }}
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
                                            Show Document
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('documents.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $document->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublished" class="form-label">Status</label>
            <div class="input-group has-validation">
                {{ Form::text('published', strtoupper($document->published), ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationfile_path" class="form-label">File</label>
            <div class="list-group">
                <a target="_blank" href="{{ asset('storage/' . $document->file_path)}}" class="list-group-item list-group-item-action">{{ basename($document->file_path) }} (<span style="color: blue;">{{ Storage::disk('public')->mimeType($document->file_path)}}</span>, {{ Storage::disk('public')->size($document->file_path) }} bytes)</a>
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