<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationtag" class="form-label">{{ Form::label('tag') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('tag', $publicationTag->tag, ['class' => 'form-control' . ($errors->has('tag') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationtag', 'placeholder' => 'Tag']) }}
                {!! $errors->first('tag', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('publication-tags.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>