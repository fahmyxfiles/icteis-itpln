<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $reviewerSocialProfile->name ?? 'Show Reviewer Social Profile' }}
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
                                            Show Reviewer Social Profile
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('reviewer-social-profiles.index') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    
        <div class="mb-3">
            <label for="validationreviewer_id" class="form-label">Reviewer</label>
            <div class="input-group has-validation">
                {{ Form::text('reviewer_id', $reviewerSocialProfile->reviewer->name, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationsocial_type" class="form-label">{{ Form::label('social_type') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('social_type', ucfirst($reviewerSocialProfile->social_type), ['disabled' => 'true', 'class' => 'form-control disabled']) }}
            </div>
        </div>
        <div class="mb-3">
            <label for="validationsocial_link" class="form-label">{{ Form::label('social_link') }}</label>
            <div class="input-group has-validation">
                {{ Form::text('social_link', $reviewerSocialProfile->social_link, ['disabled' => 'true', 'class' => 'form-control disabled']) }}
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