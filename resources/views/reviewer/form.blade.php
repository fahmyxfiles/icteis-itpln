<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $reviewer->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationorganization" class="form-label">{{ Form::label('organization') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('organization', $reviewer->organization, ['class' => 'form-control' . ($errors->has('organization') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationorganization', 'placeholder' => 'Organization']) }}
                {!! $errors->first('organization', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationprofile_photo" class="form-label">{{ Form::label('profile_photo') }}</label>
            @if(!empty($reviewer->profile_photo))
            <img id="preview" src="{{ asset('storage/' . $reviewer->profile_photo )}}" class="img-thumbnail" style="width: 256px" alt="Reviewer Profile Photo">
            @else
            <img id="preview" src="https://via.placeholder.com/256x270.jpg?text=256x270" class="img-thumbnail" style="width: 256px" alt="Reviewer Profile Photo Example">
            @endif
            <div class="input-group has-validation">
                <input class="form-control" type="file" name="profile_photo" accept="image/*" oninput="preview.src = window.URL.createObjectURL(this.files[0])">
                {!! $errors->first('profile_photo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationrole" class="form-label">{{ Form::label('role') }}</label>
            <div class="input-group has-validation">
                <select class="form-select" name="role">
                    <option {{ ($reviewer->role == '' ? 'selected' : '')}} disabled>Choose...</option>
                    <option {{ ($reviewer->role == 'main' ? 'selected' : '')}} value="main">MAIN</option>
                    <option {{ ($reviewer->role == 'side' ? 'selected' : '')}} value="side">SIDE</option>
                  </select>
                {!! $errors->first('role', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationbiodata" class="form-label">{{ Form::label('biodata') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('biodata', $reviewer->biodata, ['class' => 'form-control' . ($errors->has('biodata') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationbiodata', 'placeholder' => 'Biodata']) }}
                {!! $errors->first('biodata', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('reviewers.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>