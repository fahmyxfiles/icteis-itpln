<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $topicOfInterest->name ?? 'Show Topic Of Interest' }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">

                                        <span id="card_title">
                                            Show Topic Of Interest
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('topic-of-interests.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationname" class="form-label">{{ Form::label('name') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('name', $topicOfInterest->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationdescription" class="form-label">{{ Form::label('description') }}</label>
            <div class="input-group has-validation">
                {{ Form::textarea('description', $topicOfInterest->description, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationtopic_of_interest_scope" class="form-label">Topic of Interest Scopes</label>
            <div class="list-group">
                @foreach($topicOfInterest->topic_of_interest_scopes as $topic_of_interest_scope)
                <a target="_blank" href="{{ route('topic-of-interest-scopes.edit', ['topic_of_interest_scope' => $topic_of_interest_scope->id]) }}" class="list-group-item list-group-item-action">{{ $topic_of_interest_scope->name }}</a>
                @endforeach
            </div>
        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>