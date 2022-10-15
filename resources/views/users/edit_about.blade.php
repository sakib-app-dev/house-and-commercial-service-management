
@extends('users.master')
@section('content')

    <div class="container">
        <div class="row">
            
            </div>
            <div class="col-md-9 border border-info">
                <div class="row">
                  @include('users.vertical_menu')
                <div class="col-12 justfy-content-center">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                

                            
                                <form action="{{ url('save_user_info',$data->id) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                      <label for="name">Name</label>
                                      <input type="text" name="name" class="form-control" id="name" value="{{ $data->name }}">
                                      
                                    </div>
                                    <div class="form-group">
                                      <label for="phone">Phone</label>
                                      <input type="number" name="phone" class="form-control" id="phone" value="{{ $data->phone }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" name="email" class="form-control" id="email" value="{{ $data->email }}">
                                      
                                    </div>


                                    {{-- select --}}

                                    <div class="form-group">
                                      <label for="gender">Gender</label>
                                      <select name="gender" class="form-control form-select form-select-lg mb-3" aria-label=".form-select-lg example" value="{{ $data->gender }}">
                                        <option selected>Open this select menu</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                      <label for="present_address">Present Address</label>
                                      <input type="address" name="present_address" class="form-control" id="present_address"  value="{{ $data->present_address }}">
                                      
                                    </div>
                                    <div class="form-group">
                                      <label for="permanent_address">Permanent Address</label>
                                      <input type="address" name="permanent_address" class="form-control" id="present_address"  value="{{ $data->permanent_address }}">
                                      
                                    </div>
                                    <div class="form-group">
                                      <label for="birthday">Birthday</label>
                                      <input type="date" name="birthday" class="form-control" id="birthday" value="{{ $data->birthday }}">
                                    </div>
                                    {{-- select --}}
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Martial Status</label>
                                      
                                      <select name="marital_status" class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example" value="{{ $data->martial_status }}">
                                        <option selected>Open this select menu</option>
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                      </select>
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