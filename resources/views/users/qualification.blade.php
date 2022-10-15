
    
    
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
                                @foreach ($user_quality as $info)
                                <a href="{{ url('edit_user_quality',$info->id) }}" class="btn btn-info">Edit Information</a>
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

