<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationkey" class="form-label">{{ Form::label('key') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('key', $setting->key, ['class' => 'form-control' . ($errors->has('key') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationkey', 'placeholder' => 'Key']) }}
                {!! $errors->first('key', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationtype" class="form-label">{{ Form::label('type') }}</label>
            <div class="input-group has-validation">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="text" {{ ($setting->type == "text" ? 'checked' : '')}}>
                    <label class="form-check-label" for="inlineRadio1">Text</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="textarea" {{ ($setting->type == "textarea" ? 'checked' : '')}}>
                    <label class="form-check-label" for="inlineRadio2">Textarea</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="code" {{ ($setting->type == "code" ? 'checked' : '')}}>
                    <label class="form-check-label" for="inlineRadio3">HTML (CodeMirror)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio4" value="wysiwyg" {{ ($setting->type == "wysiwyg" ? 'checked' : '')}}>
                    <label class="form-check-label" for="inlineRadio4">WYSIWYG (TinyMCE)</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio5" value="image" {{ ($setting->type == "image" ? 'checked' : '')}}>
                    <label class="form-check-label" for="inlineRadio5">Image</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="type" id="inlineRadio6" value="document" {{ ($setting->type == "document" ? 'checked' : '')}}>
                    <label class="form-check-label" for="inlineRadio6">Document</label>
                </div>
                {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        @if($setting->type == "text")
            <div class="mb-3">
                <label for="validationvalue" class="form-label">{{ Form::label('value') }}</label>
                <div class="input-group has-validation">
                    {{ Form::text('value', $setting->value, ['class' => 'form-control' . ($errors->has('value') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationvalue', 'placeholder' => 'Value']) }}
                    {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        @endif
        @if($setting->type == "textarea")
            <div class="mb-3">
                <label for="validationvalue" class="form-label">{{ Form::label('value') }}</label>
                <div class="input-group has-validation">
                    {{ Form::textarea('value', $setting->value, ['class' => 'form-control' . ($errors->has('value') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationvalue', 'placeholder' => 'Value']) }}
                    {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        @endif
        @if($setting->type == "code")
        <div class="mb-3">
            <label for="validationvalue" class="form-label">{{ Form::label('value') }}</label>
            <div class="input-group has-validation">
                <textarea id="value" name="value" class="d-none">{!! $setting->value !!}</textarea>
                {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        @endif
        @if($setting->type == "wysiwyg")
        <div class="mb-3">
            <label for="validationvalue" class="form-label">{{ Form::label('value') }}</label>
            <div class="input-group has-validation">
                <textarea id="value" name="value" class="d-none">{!! $setting->value !!}</textarea>
                {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        @endif
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('settings.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>