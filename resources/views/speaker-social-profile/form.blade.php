<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationspeaker_id" class="form-label">Speaker</label>
            <div class="input-group has-validation">
                <select class="form-select" name="speaker_id">
                    <option {{ ($speakerSocialProfile->speaker_id == '' ? 'selected' : '')}} disabled>Choose...</option>
                    @foreach($speakerSocialProfile->all_speakers() as $speaker)
                    <option {{ ($speakerSocialProfile->speaker_id == $speaker->id ? 'selected' : '')}} value="{{$speaker->id}}">{{$speaker->name}}</option>
                    @endforeach
                  </select>
                {!! $errors->first('speaker_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationsocial_type" class="form-label">{{ Form::label('social_type') }}</label>
            <div class="input-group has-validation">
                <select class="form-select {{($errors->has('file_path') ? ' is-invalid' : '')}}" name="social_type" id="validationsocial_type">
                    <option {{ ($speakerSocialProfile->social_type == '' ? 'selected' : '')}} disabled>Choose...</option>
                    <option {{ ($speakerSocialProfile->social_type == 'facebook' ? 'selected' : '')}} value="facebook">Facebook</option>
                    <option {{ ($speakerSocialProfile->social_type == 'twitter' ? 'selected' : '')}} value="twitter">Twitter</option>
                    <option {{ ($speakerSocialProfile->social_type == 'linkedin' ? 'selected' : '')}} value="linkedin">Linkedin</option>
                    <option {{ ($speakerSocialProfile->social_type == 'instagram' ? 'selected' : '')}} value="instagram">Instagram</option>
                    <option {{ ($speakerSocialProfile->social_type == 'youtube' ? 'selected' : '')}} value="youtube">Youtube</option>
                </select>
                {!! $errors->first('social_type', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationsocial_link" class="form-label">{{ Form::label('social_link') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('social_link', $speakerSocialProfile->social_link, ['class' => 'form-control' . ($errors->has('social_link') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationsocial_link', 'placeholder' => 'Social Link']) }}
                {!! $errors->first('social_link', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('speaker-social-profiles.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>