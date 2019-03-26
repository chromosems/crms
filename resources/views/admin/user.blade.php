@extends('admin.layouts.app')

@section('content')
    <div class="row">

        @if(session('success'))
            <div class="alert-alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">User Details

                    <span class="btn btn-sm btn-primary float-right" id="open-edit-details-modal">Edit</span></div>

                <div class="card-body">
                    <h5>Name: {{$user->name}}</h5>
                    <h5>email: {{$user->email}}</h5>
                    <h5>Role: {{$user->role}}</h5>
                    <h5>active: {{$user->isActive == 1 ? 'yes': 'No'}}</h5>

                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="card">

            </div>

        </div>
    </div>

    {{--Modals--}}
    <div id="edit-details-modal" class="modal-content">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="card mt-5">
                    <div class="card-header"><h5>Edit the details for :{{$user->name}} <span class="float-right"
                                                                                             id="close-edit-details-modal"
                                                                                             style="cursor: pointer;
                                                                                             color: #ff0d21;
"><b>X</b></span>
                        </h5></div>

                    <div class="card-body">
                        <form action="{{route('admin.user.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            {{--using disabled to a void  change of values on the back end --}}
                            <input type="text" name="id" value="{{$user->id}}"  hidden>
                            <div class="form-group">
                                <label for="name">User name</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label for="email">User email</label>
                                <input type="text" class="form-control" name="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label for="role">User Role</label>
                                <select name="role" class="form-control">
                                    <option value="{{$user->role}}">{{ $user->role}}</option>
                                    <option value="user">User</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="isActive">is the user Active</label>
                                <select name="isActive" class="form control">
                                    <option value="1" {{$user->isActive ==1 ? 'default' : ''}}>Yes</option>
                                    <option value="0" {{$user->isActive ==0 ? 'default' : ''}}>No</option>
                                </select>
                            </div>
                            <button class="btn btn-primary btn-block">Update User Details</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin.layouts.scripts.scripts')
    <script src="{{asset('js/admin/user.js')}}"></script>
@endpush
@push('admin.layouts.styles')
    <link rel="stylesheet" href="{{asset('css/admin/user.css')}}">
@endpush
