<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationreviewer_id" class="form-label">Reviewer</label>
            <div class="input-group has-validation">
                <select class="form-select" name="reviewer_id">
                    <option {{ ($reviewerSocialProfile->reviewer_id == '' ? 'selected' : '')}} disabled>Choose...</option>
                    @foreach($reviewerSocialProfile->all_reviewers() as $reviewer)
                    <option {{ ($reviewerSocialProfile->reviewer_id == $reviewer->id ? 'selected' : '')}} value="{{$reviewer->id}}">{{$reviewer->name}}</option>
                    @endforeach
                  </select>
                {!! $errors->first('reviewer_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationsocial_type" class="form-label">{{ Form::label('social_type') }}</label>
            <div class="input-group has-validation">
                <select class="form-select {{($errors->has('file_path') ? ' is-invalid' : '')}}" name="social_type" id="validationsocial_type">
                    <option {{ ($reviewerSocialProfile->social_type == '' ? 'selected' : '')}} disabled>Choose...</option>
                    <option {{ ($reviewerSocialProfile->social_type == 'facebook' ? 'selected' : '')}} value="facebook">Facebook</option>
                    <option {{ ($reviewerSocialProfile->social_type == 'twitter' ? 'selected' : '')}} value="twitter">Twitter</option>
                    <option {{ ($reviewerSocialProfile->social_type == 'linkedin' ? 'selected' : '')}} value="linkedin">Linkedin</option>
                    <option {{ ($reviewerSocialProfile->social_type == 'instagram' ? 'selected' : '')}} value="instagram">Instagram</option>
                    <option {{ ($reviewerSocialProfile->social_type == 'youtube' ? 'selected' : '')}} value="youtube">Youtube</option>
                </select>
                {!! $errors->first('social_type', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationsocial_link" class="form-label">{{ Form::label('social_link') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('social_link', $reviewerSocialProfile->social_link, ['class' => 'form-control' . ($errors->has('social_link') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationsocial_link', 'placeholder' => 'Social Link']) }}
                {!! $errors->first('social_link', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('reviewer-social-profiles.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>