<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $publicationTag->name ?? 'Show Publication Tag' }}
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
                                            Show Publication Tag
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('publication-tags.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationtag" class="form-label">{{ Form::label('tag') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('tag', $publicationTag->tag, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
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