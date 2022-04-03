<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="mb-3">
            <label for="validationtopic_of_interest_id" class="form-label">Topic of Interest</label>
            <div class="input-group has-validation">
                <select class="form-select" name="topic_of_interest_id">
                    <option {{ ($topicOfInterestScope->topic_of_interest_id == '' ? 'selected' : '')}} disabled>Choose...</option>
                    @foreach($topicOfInterestScope->all_topic_of_interests() as $topic_of_interest)
                    <option {{ ($topicOfInterestScope->topic_of_interest_id == $topic_of_interest->id ? 'selected' : '')}} value="{{$topic_of_interest->id}}">{{$topic_of_interest->name}}</option>
                    @endforeach
                  </select>
                {!! $errors->first('topic_of_interest_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $topicOfInterestScope->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'aria-describedby' => 'inputGroupPrepend', 'id' => 'validationname', 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('topic-of-interest-scopes.index') }}" class="btn btn-danger">Back</a>
    </div>
</div>