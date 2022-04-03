<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $topicOfInterest->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdescription" class="form-label">{{ Form::label('description') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('description', $topicOfInterest->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdescription', 'placeholder' => 'Description']) }}
                {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('topic-of-interests.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>