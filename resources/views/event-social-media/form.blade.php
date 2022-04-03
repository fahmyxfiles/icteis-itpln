<div class="box box-info padding-1">
    <div class="box-body">
        <!--
        <div class="mb-3">
            <label for="validationevent_id" class="form-label">Event</label>
            <div class="input-group has-validation">
                <select class="form-select" name="event_id">
                    <option {{ ($eventSocialMedia->event_id == '' ? 'selected' : '')}} disabled>Choose...</option>
                    @foreach($eventSocialMedia->all_events() as $event)
                    <option {{ ($eventSocialMedia->event_id == $event->id ? 'selected' : '')}} value="{{$event->id}}">{{$event->alias}}</option>
                    @endforeach
                  </select>
                {!! $errors->first('event_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        -->
        @if(empty($eventSocialMedia->event_id))
        <input type="hidden" name="event_id" value="{{ $eventSocialMedia->all_events()->first()->id }}" />
        @else 
        <input type="hidden" name="event_id" value="{{ $eventSocialMedia->event_id }}" />
        @endif
        <div class="mb-3">
            <label for="validationsocial_type" class="form-label">{{ Form::label('social_type') }}</label>
            <div class="input-group has-validation">
                <select class="form-select {{($errors->has('file_path') ? ' is-invalid' : '')}}" name="social_type" id="validationsocial_type">
                    <option {{ ($eventSocialMedia->social_type == '' ? 'selected' : '')}} disabled>Choose...</option>
                    <option {{ ($eventSocialMedia->social_type == 'facebook' ? 'selected' : '')}} value="facebook">Facebook</option>
                    <option {{ ($eventSocialMedia->social_type == 'twitter' ? 'selected' : '')}} value="twitter">Twitter</option>
                    <option {{ ($eventSocialMedia->social_type == 'linkedin' ? 'selected' : '')}} value="linkedin">Linkedin</option>
                    <option {{ ($eventSocialMedia->social_type == 'instagram' ? 'selected' : '')}} value="instagram">Instagram</option>
                    <option {{ ($eventSocialMedia->social_type == 'youtube' ? 'selected' : '')}} value="youtube">Youtube</option>
                </select>
                {!! $errors->first('social_type', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationsocial_link" class="form-label">{{ Form::label('social_link') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('social_link', $eventSocialMedia->social_link, ['class' => 'form-control' . ($errors->has('social_link') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationsocial_link', 'placeholder' => 'Social Link']) }}
                {!! $errors->first('social_link', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('event-social-medias.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>