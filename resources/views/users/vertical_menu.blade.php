<?php
                        
    // Auth::id();
    $user=Auth::user()->id;
    // $userimg=Auth::user()->image;
    
?>
    
    <div class="col-3 border border-info">
        <div class="row justify-content-center mt-3">

            <div class="w-75 h-75 m-2 border border primary">
                <div class="" style="height: 180px;padding:0px 23px">
                    @foreach ($user_info as $info)
                    <img src="{{ asset('/imagefile') }}/{{ $info->image}}" alt="" style="height: 180px; width:170px;border-radius:50%">
                        
                    
                    

                </div>
                <div>
                    
                    
                    @if ($user==$info->id)
                        <form action="{{ url('upload_img',$user) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="img" class="form-control-md">
                        <button class="btn btn-info btn-block">Upload Photo</button>
                        </form>
                    @endif

                    
                        
                    @endforeach

                    
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-3">
                <nav class="navbar navbar-expand menu-bar d-flex flex-column align-item-start">

                    <ul class="navbar-nav d-flex flex-column  w-100">
                        <li class="nav-item w-100">
                            <a href="{{ url('/about-user') }}" class="nav-link menu-link text-light pl-4">About</a>
                            <a href="{{ url('/qualifications') }}" class="nav-link menu-link text-light pl-4">Qualification</a>
                            <a href="" class="nav-link menu-link text-light pl-4">Details</a>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>
    </div>