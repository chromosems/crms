@extends('admin.layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    <div class="row">

        <div class="col-sm-5">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-block btn-primary" id="show-new-user-form">Add a new User</button>
                    @component('admin.layouts.components.forms.add_user')
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header"> <h5>Current users</h5> </div>
            </div>
            <ul class="list-group list-group-flush">
                {{-- if users exists then run the foreach to show / view --}}
                @if($users)
                    @foreach ($users as $user)
                        <li class="list-group-item"><a href="{{route('admin.user',['id' => $user->id])
                        }}">{{$user->name}}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
    {{--end of /row--}}

@endsection

{{-- we are including the scripts.blade.php  --}}
@push('admin.layouts.scripts.scripts')
    <script src="{{asset('js/admin/users.js')}}"></script>
@endpush
