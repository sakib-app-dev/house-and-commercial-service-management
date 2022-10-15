
@extends('users.master')
@section('content')

    <div class="container">
        <div class="row">
            @include('users.vertical_menu')
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
                                @foreach ($user_info as $info)
                                <a href="{{ url('edit',$info->id) }}" class="btn btn-info">Edit Information</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <table>
                                    
                                        
                                    
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $info['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{ $info['phone'] }}</td>
            
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $info['email'] }}</td>
            
                                    </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>{{ $info['gender'] }}</td>
            
                                    </tr>
                                    <tr>
                                        <th>Present Address</th>
                                        <td>{{ $info['present_address'] }}</td>
            
                                    </tr>
                                    
            
                                    </tr>
                                        <th>permanent Address</th>
                                        <td>{{ $info['permanent_address'] }}</td>
                                    <tr>
                                        <th>Birthday</th>
                                        <td>{{ $info['birthday'] }}</td>
                                    </tr>
                                    <tr>
                                        <th>NID</th>
                                        <td>{{ $info['nid'] }}</td>
            
                                    </tr>
                                    <tr>
                                        <th>Marital Status</th>
                                        <td>{{ $info['marital_status'] }}</td>
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