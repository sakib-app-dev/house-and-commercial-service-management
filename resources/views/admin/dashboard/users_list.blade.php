@extends('admin.dashboard.master')
@section('content')
<div class="container-fluid" style="padding-top:70px">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" align="center">Users List</h4>
               
                
                <table class="table">
                    <thead>
                    <tr align="center">
                        <th>User Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>image</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($data as $list)
                        <tr align="center">
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->phone }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->gender }}</td>
                            <td>{{ $list->present_address }}</td>
                            <td>image</td>
{{--                             
                            <td>
                                <img src="{{ asset('/doctorimage') }}/{{ $doclist->image }}" alt="" style="height: 100px; width:100px;border-radius:30%">
                            </td>
                             --}}
                            <td>
                                
                                @if ($list->approved=='Approved')
                                <a href="{{ url('/approve_user',$list->id) }}" class="btn btn-success" style="margin-bottom: 5px">{{ $list->approved }}</a><br>
                                @else 
                                <a href="{{ url('/approve_user',$list->id) }}" class="btn btn-warning" style="margin-bottom: 5px">{{ $list->approved }}</a><br>

                                @endif
                                <a href="{{ url('/delete_user') }}/{{ $list->id }}" onclick="alert('Are You Sure..');" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                        @endforeach
                    
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection