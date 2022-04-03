<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Speaker Social Profile
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">

                                        <span id="card_title">
                                            {{ __('Speaker Social Profile') }}
                                        </span>

                                        <div class="float-end">
                                            <a href="{{ route('speaker-social-profiles.create') }}" class="btn btn-primary btn-sm float-end"  data-placement="left">
                                            {{ __('Create New') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead">
                                                <tr>
                                                    <th>No</th>
                                                    
										<th>Speaker</th>
										<th>Social Type</th>
										<th>Social Link</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($speakerSocialProfiles as $speakerSocialProfile)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        
											<td>{{ $speakerSocialProfile->speaker->name }}</td>
											<td>{{ ucfirst($speakerSocialProfile->social_type) }}</td>
											<td>{{ $speakerSocialProfile->social_link }}</td>

                                                        <td>
                                                            <form action="{{ route('speaker-social-profiles.destroy',$speakerSocialProfile->id) }}" method="POST" onsubmit="return confirmDelete(this);">
                                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                                <a class="btn btn-sm btn-primary " href="{{ route('speaker-social-profiles.show',$speakerSocialProfile->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                                <a class="btn btn-sm btn-success" href="{{ route('speaker-social-profiles.edit',$speakerSocialProfile->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">{!! $speakerSocialProfiles->links() !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        @if ($message = Session::get('success'))
            <script>
                $(document).ready(function(){
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: '{{ Session::get('success') }}',
                    })
                })
            </script>
        @endif
        <script>
            function confirmDelete(form) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "The entry will be deleted and not recoverable!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes',
                    cancelButtonText: "No",
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
                return false;
            }
        </script>
    </x-slot>
</x-app-layout>