@extends('admin.layouts.app') @section('content')
    <div class="row">
        <button class="btn btn-success btn-sm">Add prospect</button>
    </div>
    <div class="row"> 
        @foreach($prospects as $prospect)
            <div class="col-sm-3 offset-md-2">
                <a href="{{route('admin.prospect',['id'=> $prospect->id])}}"style="text-decoration: none; color: black">
                    <div class="card mt-3">
                        <div class="card-header"> {{$prospect->name}} </div>
                        <div class="card-body">
                            <h6>Phone:{{$prospect->phone}}</h6>
                            <h6>Email:{{$prospect->email}}</h6>
                        </div>
                    </div>
                </a> 
         
             </div>
             @endforeach
         </div>
          {{--/.row --}}

    </div>
    <div class="row mt-3 ">
        <div class="col-md-6 offset-md-4">
            <div class="text-center" style="margin: 0 auto;"> 
                {{$prospects->links()}} </div>
        </div>
    </div>

         {{-- Modals --}}

        <div class="modal-style " id="add-prospects-modal">
            <div class="card ">
                <div class="card-header"><h5>Add new Prospects<span class="float-right" id="close-create-prospect-modal" style="cursor: pointer;color: red"><b>X</b></span></h5></div>
                <div class="card-body">
                    <form action="#">
                     @csrf
                     <div class="row">
                        <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>

                         <div class="col-sm-3">
                        <div class="form-group">
                            <label for="phone_2">Alternative Phone:</label>
                            <input type="text" class="form-control" name="phone_2">
                        </div>


                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address">
                        </div>

                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                    </div>


                        <div class="col-sm-3">
                        <div class="form-group">
                            <label for="provience_state">Provience State:</label>
                            <input type="text" class="form-control" name="provience_state">
                        </div>

                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" name="country">
                        </div>

                        <div class="form-group">
                            <label for="note">Note</label>
                            <textarea name="note" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-3">

                        <div class="form-group">
                            <label for="prospects_message">Prospects Message</label>
                            <input type="text" class="form-control" name="prospects_message">
                        </div> 

                        <div class="form-group">
                            <label for="assigned">Assigned</label>
                            <select name="assigned" id="" class="form-control">
                                <option value="0" default="unassigned">unassigned</option>
                                @foreach($user as $users)
                                  
                                  <option value="{{$users ->id}}">{{$users->name}}</option>
                                @endforeach
                            </select>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-block btn-primary">Add Prospect</button>
                    </form>



                @endsection

                {{-- we are including the scripts.blade.php  --}}
@push('admin.layouts.scripts.scripts')
    <script src="{{asset('js/admin/prospects.js')}}"></script>
@endpush

