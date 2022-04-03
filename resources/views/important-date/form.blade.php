<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $importantDate->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationicon" class="form-label">{{ Form::label('icon') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('icon', $importantDate->icon, ['class' => 'form-control' . ($errors->has('icon') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationicon', 'placeholder' => 'Icon']) }}
                {!! $errors->first('icon', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdate" class="form-label">{{ Form::label('date') }}</label>
            <div class="input-group has-validation">
                {{ Form::date('date', $importantDate->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationdate', 'placeholder' => 'Date']) }}
                {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('important-dates.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>