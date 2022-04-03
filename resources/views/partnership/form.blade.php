<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $partnership->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationlogo" class="form-label">{{ Form::label('logo') }} (160x83 pixel)</label>
            @if(!empty($partnership->logo))
            <img id="preview" src="{{ asset('storage/' . $partnership->logo )}}" class="img-thumbnail" style="width: 160px" alt="Partnership Logo Image">
            @else
            <img id="preview" src="https://via.placeholder.com/160x83.jpg?text=160x83" class="img-thumbnail" style="width: 160px" alt="Partnership Logo Example">
            @endif
            <div class="input-group has-validation mt-3">
                <input class="form-control" type="file" name="logo" accept="image/*" oninput="preview.src = window.URL.createObjectURL(this.files[0])">
                {!! $errors->first('logo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('partnerships.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>