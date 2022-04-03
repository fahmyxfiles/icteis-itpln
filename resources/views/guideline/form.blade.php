<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $guideline->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublished" class="form-label">{{ Form::label('published') }}</label>
            <div class="input-group has-validation">
                <select class="form-select {{($errors->has('file_path') ? ' is-invalid' : '')}}" name="published" id="validationpublished">
                    <option {{ ($guideline->published == '' ? 'selected' : '')}} disabled>Choose...</option>
                    <option {{ ($guideline->published == 'published' ? 'selected' : '')}} value="published">PUBLISHED</option>
                    <option {{ ($guideline->published == 'draft' ? 'selected' : '')}} value="draft">DRAFT</option>
                  </select>
                {!! $errors->first('published', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationcontent" class="form-label">{{ Form::label('content') }}</label>
            <div class="input-group has-validation">
                <textarea id="content" name="content" class="d-none">{!! $guideline->content !!}</textarea>
                {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('guidelines.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>