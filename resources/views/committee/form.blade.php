<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-3">
            <label for="validationcommittee_division_id" class="form-label">Committee Division</label>
            <div class="input-group has-validation">
                <select class="form-select" name="committee_division_id">
                    <option {{ ($committee->committee_division_id == '' ? 'selected' : '')}} disabled>Choose...</option>
                    @foreach($committee->all_committee_divisions() as $commitee_division)
                    <option {{ ($committee->committee_division_id == $commitee_division->id ? 'selected' : '')}} value="{{$commitee_division->id}}">{{$commitee_division->name}}</option>
                    @endforeach
                  </select>
                {!! $errors->first('committee_division_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $committee->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('committees.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>