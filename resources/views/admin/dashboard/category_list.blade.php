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
                        <th>Category Name</th>
                        <th>Discription</th>
                        <th>Type</th>
                        <th>icon</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($data as $list)
                        <tr align="center">
                            <td>{{ $list->category_name }}</td>
                            <td>{{ $list->discription }}</td>
                            <td>{{ $list->type }}</td>
                            <td>{{ $list->icon }}</td>
                            
{{--                             
                            <td>
                                <img src="{{ asset('/doctorimage') }}/{{ $doclist->image }}" alt="" style="height: 100px; width:100px;border-radius:30%">
                            </td>
                             --}}
                            <td>
                                <a href="{{ url('/edit_category',$list->id) }}" class="btn btn-success" style="margin-bottom: 5px">Edit</a><br>
                                <a href="{{ url('/delete_category') }}/{{ $list->id }}" onclick="alert('Are You Sure..');" class="btn btn-danger">Delete</a>
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