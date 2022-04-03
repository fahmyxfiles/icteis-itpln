<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $publication->name ?? 'Show Publication' }}
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
                                            Show Publication
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('publications.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationtitle" class="form-label">{{ Form::label('title') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('title', $publication->title, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublication_field_id" class="form-label">{{ Form::label('publication_field_id') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('publication_field_id', $publication->publication_field_id, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcover_image" class="form-label">{{ Form::label('cover_image') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('cover_image', $publication->cover_image, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdescription_body" class="form-label">{{ Form::label('description_body') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('description_body', $publication->description_body, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdoi_prefix" class="form-label">{{ Form::label('doi_prefix') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('doi_prefix', $publication->doi_prefix, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationp_issn" class="form-label">{{ Form::label('p_issn') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('p_issn', $publication->p_issn, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validatione_issn" class="form-label">{{ Form::label('e_issn') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('e_issn', $publication->e_issn, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublished_date" class="form-label">{{ Form::label('published_date') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('published_date', $publication->published_date, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationurl" class="form-label">{{ Form::label('url') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('url', $publication->url, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
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