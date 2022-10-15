
    
    
@extends('users.master')
@section('content')

    <div class="container">
        <div class="row">
            <?php
                        
    // Auth::id();
    $user=Auth::user()->id;
    // $userimg=Auth::user()->image;
    
?>
    
    <div class="col-3 border border-info">
        <div class="row justify-content-center mt-3">

            <div class="w-75 h-75 m-2 border border primary">
                <div class="" style="height: 180px;padding:0px 23px">
                    
                    <img src="{{ asset('/imagefile') }}/{{$user_info->image}}" alt="" style="height: 180px; width:170px;border-radius:50%">
                        
                    
                    

                </div>
                <div>
                    
                    
                    @if ($user==$user_info->id)
                        <form action="{{ url('upload_img',$user) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img" class="form-control-md">
                        <button class="btn btn-info btn-block">Upload Photo</button>
                        </form>
                    @endif

                    
                        
                    

                    
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-3">
                <nav class="navbar navbar-expand menu-bar d-flex flex-column align-item-start">

                    <ul class="navbar-nav d-flex flex-column  w-100">
                        <li class="nav-item w-100">
                            <a href="{{ url('/about-user',$user_info->id) }}" class="nav-link menu-link text-light pl-4">About</a>
                            <a href="{{ url('/qualifications',$user_info->id) }}" class="nav-link menu-link text-light pl-4">Qualification</a>
                            <a href="" class="nav-link menu-link text-light pl-4">Details</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>
            <div class="col-md-9 border border-info">
                @if (session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                </div>
        
                @endif

                <div class="row">
                    
                    <div class="col-12 justfy-content-center">
                        <div class="card">
                            <div class="card-body">
                                @foreach ($user_quality as $info)
                                <a href="{{ url('edit_user_quality',$user_info->id) }}" class="btn btn-info">Edit Information</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <table>
                                    
                                        
                                    
                                    <tr>
                                        <th>Selected Working Field</th>
                                        <td>{{ $info['category'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Working Details</th>
                                        <td>{{ $info['work_details'] }}</td>
            
                                    </tr>
                                    <tr>
                                        <th>Pricing</th>
                                        <td>{{ $info['pricing'] }}</td>
            
                                    </tr>
                                    <tr>
                                        <th>Suitable work Locations</th>
                                        <td>{{ $info['location_to_work'] }}</td>
            
                                    </tr>
                                   
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection

