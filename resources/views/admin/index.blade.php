@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="container">
            {{-- search form here --}}
            @include('admin.search')
        </div>


        <div class="col-sm-12">
            {{--  leader board and HUD ---}}
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header">Active Employees</div>
                        <div class="card-body">
                            <h4 class="text-center">4</h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header">Current Sales Leader</div>
                        <div class="card-body">
                            <h4 class="text-center">John Leader</h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header">Sales for Month</div>
                        <div class="card-body">
                            <h4 class="text-center">5</h4>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-header">Total Sales Value</div>
                        <div class="card-body">
                            <h4 class="text-center">$42,089,23</h4>
                        </div>
                    </div>

                </div>
            </div>
            {{--End of leader and HUB --}}
            <div class="row mt-4">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">Unassigned prospects</div>
                        <ul class="list-group list-group-flush">
                            @for($i =0; $i <6;$i++)
                                <li class="list-group-item">
                                    Mr. Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                                </li>
                            @endfor

                            <li class="list-group-item">
                                <a href="#" class="btn btn-block btn-md btn-primary">view all Unassigned Leads</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">Recent Estimates</div>
                        <ul class="list-group list-group-flush">
                            @for($i = 0; $i < 6; $i++)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-sm-4">Mr propspects</div>
                                        <div class="col-sm-4">march 15 2019</div>
                                        <div class="col-sm-4">Value:$54,789.90
                                            <span class="float-right btn btn-sm btn-success">Details</span>
                                        </div>
                                    </div>
                                </li>
                            @endfor
                            <li class="list-group-item">
                                <a href="#" class="btn btn-block btn-md btn-primary">view all recent estimates</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection
