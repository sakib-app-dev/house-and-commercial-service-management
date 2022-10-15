
@extends('users.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-3 border border-info">
                <div class="row justify-content-center mt-3">

                    <div class="card">
                        <div class="card-body ">
                            <a href="" class="">Photo</a>
                            
    
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-3">
                        <nav class="navbar navbar-expand menu-bar d-flex flex-column align-item-start">

                            <ul class="navbar-nav d-flex flex-column mt-5 w-100">
                                <li class="nav-item w-100">
                                    <a href="" class="nav-link menu-link text-light pl-4">About</a>
                                    <a href="" class="nav-link menu-link text-light pl-4">Qualification</a>
                                    <a href="" class="nav-link menu-link text-light pl-4">Details</a>
                                </li>
                            </ul>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-md-9 border border-info">
                <div class="row">
                    <div class="col-12 justfy-content-center">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ url('user_quality_update',$data->id) }}" method="POST">
                                    @csrf
                                    
                                    <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                                    <div class="form-group">
                                      <label for="name">Category</label>
                                      <input type="text" name="category" class="form-control"  value="{{ $data->category }}">
                                      
                                    </div>
                                    <div class="form-group">
                                      <label for="work_details">Work Details</label>
                                      <input type="text" name="work_details" class="form-control"  value="{{ $data->work_details }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="pricing">Pricing</label>
                                      <input type="text" name="pricing" class="form-control" id="pricing" value="{{ $data->pricing }}">
                                      
                                    </div>

                                    <div class="form-group">
                                      <label for="present_address">Suitable Working Location</label>
                                      <input type="address" name="location_to_work" class="form-control" id="location_to_work"  value="{{ $data->location_to_work }}">
                                      
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-info btn-block">Save</button>
                                  </form>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection