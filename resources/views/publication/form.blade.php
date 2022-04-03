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
            <label for="validationpublication_field_id" class="form-label">{{ Form::label('publication_field_id') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('publication_field_id', $publication->publication_field_id, ['class' => 'form-control' . ($errors->has('publication_field_id') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationpublication_field_id', 'placeholder' => 'Publication Field Id']) }}
                {!! $errors->first('publication_field_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcover_image" class="form-label">{{ Form::label('cover_image') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('cover_image', $publication->cover_image, ['class' => 'form-control' . ($errors->has('cover_image') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationcover_image', 'placeholder' => 'Cover Image']) }}
                {!! $errors->first('cover_image', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdescription_body" class="form-label">{{ Form::label('description_body') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('description_body', $publication->description_body, ['class' => 'form-control' . ($errors->has('description_body') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdescription_body', 'placeholder' => 'Description Body']) }}
                {!! $errors->first('description_body', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdoi_prefix" class="form-label">{{ Form::label('doi_prefix') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('doi_prefix', $publication->doi_prefix, ['class' => 'form-control' . ($errors->has('doi_prefix') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdoi_prefix', 'placeholder' => 'Doi Prefix']) }}
                {!! $errors->first('doi_prefix', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationp_issn" class="form-label">{{ Form::label('p_issn') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('p_issn', $publication->p_issn, ['class' => 'form-control' . ($errors->has('p_issn') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationp_issn', 'placeholder' => 'P Issn']) }}
                {!! $errors->first('p_issn', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validatione_issn" class="form-label">{{ Form::label('e_issn') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('e_issn', $publication->e_issn, ['class' => 'form-control' . ($errors->has('e_issn') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validatione_issn', 'placeholder' => 'E Issn']) }}
                {!! $errors->first('e_issn', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublished_date" class="form-label">{{ Form::label('published_date') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('published_date', $publication->published_date, ['class' => 'form-control' . ($errors->has('published_date') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationpublished_date', 'placeholder' => 'Published Date']) }}
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

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('publications.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>