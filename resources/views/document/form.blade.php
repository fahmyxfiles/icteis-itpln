<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $document->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationpublished" class="form-label">Status</label>
            <div class="input-group has-validation">
                <select class="form-select {{($errors->has('file_path') ? ' is-invalid' : '')}}" name="published" id="validationpublished">
                    <option {{ ($document->published == '' ? 'selected' : '')}} disabled>Choose...</option>
                    <option {{ ($document->published == 'published' ? 'selected' : '')}} value="published">PUBLISHED</option>
                    <option {{ ($document->published == 'draft' ? 'selected' : '')}} value="draft">DRAFT</option>
                  </select>
                {!! $errors->first('published', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationfile_path" class="form-label">File</label>
            @if(!empty($document->file_path))
            <div class="list-group mb-3">
                <a target="_blank" href="{{ asset('storage/' . $document->file_path)}}" class="list-group-item list-group-item-action">{{ basename($document->file_path) }} (<span style="color: blue;">{{ Storage::disk('public')->mimeType($document->file_path)}}</span>, {{ Storage::disk('public')->size($document->file_path) }} bytes)</a>
            </div>
            @endif
            <div class="input-group has-validation">
                <input id="validationfile_path" class="form-control {{($errors->has('file_path') ? ' is-invalid' : '')}}" type="file" name="file_path" accept=".doc,.docx,.ppt,.pptx,.txt,.xls,.xlsx,.pdf">
                {!! $errors->first('file_path', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('documents.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>