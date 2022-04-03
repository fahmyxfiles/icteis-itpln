<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationalias" class="form-label">{{ Form::label('alias') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('alias', $event->alias, ['class' => 'form-control' . ($errors->has('alias') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationalias', 'placeholder' => 'Alias']) }}
                {!! $errors->first('alias', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $event->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationhero_text" class="form-label">{{ Form::label('hero_text') }}</label>
            <div class="input-group has-validation">
                <textarea id="hero_text" name="hero_text" class="d-none">{!! $event->hero_text !!}</textarea>
                {!! $errors->first('hero_text', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationorganizer" class="form-label">{{ Form::label('organizer') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('organizer', $event->organizer, ['class' => 'form-control' . ($errors->has('organizer') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationorganizer', 'placeholder' => 'Organizer']) }}
                {!! $errors->first('organizer', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationstart_date" class="form-label">{{ Form::label('start_date') }}</label>
            <div class="input-group has-validation">
                {{ Form::date('start_date', $event->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationstart_date', 'placeholder' => 'Start Date']) }}
                {!! $errors->first('start_date', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationend_date" class="form-label">{{ Form::label('end_date') }}</label>
            <div class="input-group has-validation">
                {{ Form::date('end_date', $event->end_date, ['class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationend_date', 'placeholder' => 'End Date']) }}
                {!! $errors->first('end_date', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationlocation" class="form-label">{{ Form::label('location') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('location', $event->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationlocation', 'placeholder' => 'Location']) }}
                {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('events.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>