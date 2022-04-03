<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationtitle" class="form-label">{{ Form::label('title') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('title', $publication->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationtitle', 'placeholder' => 'Title']) }}
                {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublication_field_id" class="form-label">Publication Field</label>
            <div class="input-group has-validation">
                <select class="form-select" name="publication_field_id">
                    <option {{ ($publication->publication_field_id == '' ? 'selected' : '')}} disabled>Choose...</option>
                    @foreach($publication->all_publication_fields() as $publication_field)
                    <option {{ ($publication->publication_field_id == $publication_field->id ? 'selected' : '')}} value="{{$publication_field->id}}">{{$publication_field->name}}</option>
                    @endforeach
                  </select>
                {!! $errors->first('publication_field_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcover_image" class="form-label">{{ Form::label('cover_image') }} (363x513 pixel)</label>
            @if(!empty($publication->cover_image))
            <img id="preview" src="{{ asset('storage/' . $publication->cover_image )}}" class="img-thumbnail" style="width: 363px" alt="Cover Image">
            @else
            <img id="preview" src="https://via.placeholder.com/363x513.jpg?text=363x513" class="img-thumbnail" style="width: 363px" alt="Cover Image Example">
            @endif
            <div class="input-group has-validation mt-3">
                <input class="form-control" type="file" name="cover_image" accept="image/*" oninput="preview.src = window.URL.createObjectURL(this.files[0])">
                {!! $errors->first('cover_image', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdescription_body" class="form-label">{{ Form::label('description_body') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('description_body', $publication->description_body, ['class' => 'form-control' . ($errors->has('description_body') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdescription_body', 'placeholder' => 'Description Body']) }}
                {!! $errors->first('description_body', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcurrent_issue" class="form-label">{{ Form::label('current_issue') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('current_issue', $publication->current_issue, ['class' => 'form-control' . ($errors->has('current_issue') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdescription_body', 'placeholder' => 'Current Issue']) }}
                {!! $errors->first('current_issue', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdoi_prefix" class="form-label">DOI Prefix</label>
            <div class="input-group has-validation">
                {{ Form::text('doi_prefix', $publication->doi_prefix, ['class' => 'form-control' . ($errors->has('doi_prefix') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdoi_prefix', 'placeholder' => 'DOI Prefix']) }}
                {!! $errors->first('doi_prefix', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationp_issn" class="form-label">P-ISSN</label>
            <div class="input-group has-validation">
                {{ Form::text('p_issn', $publication->p_issn, ['class' => 'form-control' . ($errors->has('p_issn') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationp_issn', 'placeholder' => 'P-ISSN']) }}
                {!! $errors->first('p_issn', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validatione_issn" class="form-label">E-ISSN</label>
            <div class="input-group has-validation">
                {{ Form::text('e_issn', $publication->e_issn, ['class' => 'form-control' . ($errors->has('e_issn') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validatione_issn', 'placeholder' => 'E-ISSN']) }}
                {!! $errors->first('e_issn', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublished_date" class="form-label">{{ Form::label('published_date') }}</label>
            <div class="input-group has-validation">
                {{ Form::date('published_date', $publication->published_date, ['class' => 'form-control' . ($errors->has('published_date') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationpublished_date', 'placeholder' => 'Published Date']) }}
                {!! $errors->first('published_date', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationurl" class="form-label">{{ Form::label('url') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('url', $publication->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationurl', 'placeholder' => 'Url']) }}
                {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="mb-3">
            <label for="validationurl" class="form-label">Tags</label>
            <div class="row">
                @foreach($publication->all_publication_tags() as $publication_tag)
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" name="publication_tag_id[]" type="checkbox" value="{{ $publication_tag->id }}" id="flex-check-{{ $publication_tag->id }}" @if(in_array($publication_tag->id, $publication->publication_tags->pluck('id')->toArray())) checked @endif>
                        <label class="form-check-label" for="flex-check-{{ $publication_tag->id }}">
                          {{ $publication_tag->tag }}
                        </label>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('publications.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>