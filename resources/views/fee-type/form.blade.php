<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationtype" class="form-label">{{ Form::label('type') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('type', $feeType->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationtype', 'placeholder' => 'Type']) }}
                {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdescription" class="form-label">{{ Form::label('description') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('description', $feeType->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdescription', 'placeholder' => 'Description']) }}
                {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationprice" class="form-label">{{ Form::label('price') }}</label>
            <div class="input-group has-validation">
                {{ Form::number('price', preg_replace('/[^0-9]/', '', $feeType->price ), ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationprice', 'placeholder' => 'Price']) }}
                {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('fee-types.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>