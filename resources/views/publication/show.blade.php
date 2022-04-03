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
            <label for="validationpublication_field_id" class="form-label">Publication Field</label>
            <div class="input-group has-validation">
                {{ Form::text('publication_field_id', $publication->publication_field->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcover_image" class="form-label">{{ Form::label('cover_image') }}</label>
            @if(!empty($publication->cover_image))
            <img id="preview" src="{{ asset('storage/' . $publication->cover_image )}}" class="img-thumbnail" style="width: 363px" alt="Cover Image">
            @else
            <img id="preview" src="https://via.placeholder.com/363x513.jpg?text=363x513" class="img-thumbnail" style="width: 363px" alt="Cover Image Example">
            @endif
        </div>
        <div class="mb-3">
            <label for="validationdescription_body" class="form-label">{{ Form::label('description_body') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('description_body', $publication->description_body, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcurrent_issue" class="form-label">{{ Form::label('current_issue') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('current_issue', $publication->current_issue, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
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
                {{ Form::text('published_date', $publication->published_date->format('d/m/Y'), ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationurl" class="form-label">{{ Form::label('url') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('url', $publication->url, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationurl" class="form-label">Tags</label>
            <div class="row">
                @foreach($publication->all_publication_tags() as $publication_tag)
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" name="publication_tag_id[]" type="checkbox" value="{{ $publication_tag->id }}" id="flex-check-{{ $publication_tag->id }}" @if(in_array($publication_tag->id, $publication->publication_tags->pluck('id')->toArray())) checked @endif disabled>
                        <label class="form-check-label" for="flex-check-{{ $publication_tag->id }}">
                          {{ $publication_tag->tag }}
                        </label>
                    </div>
                </div>
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