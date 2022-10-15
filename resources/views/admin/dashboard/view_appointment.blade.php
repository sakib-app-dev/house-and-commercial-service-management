@extends('admin.master')
@section('content')
    <div class="container-fluid" style="padding-top:70px">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" align="center">Appointment Table</h4>
                    
                    
                    <table class="table">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Date</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Doctor</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Approve</th>
                            <th>Cancel</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($data as $appoint)
                            <tr>
                                <td>{{ $appoint->name }}</td>
                                <td>{{ $appoint->date }}</td>
                                <td>{{ $appoint->email }}</td>
                                <td>{{ $appoint->phone }}</td>
                                <td>{{ $appoint->doctor }}</td>
                                <td>{{ $appoint->massage }}</td>
                                <td>{{ $appoint->status }}</td>
                                <td><a href="{{ url('approve_appoint',$appoint->id) }}" class="btn btn-success">Approve</a></td>
                                <td><a href="{{ url('cancel_appoint',$appoint->id) }}" class="btn btn-danger">Cancel</a></td>
                                <td><a href="{{ url('send_email',$appoint->id) }}" class="btn btn-primary">Send Email</a></td>
                                
                            </tr>
                        @endforeach    
                            
                        
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

