@extends('admin.master')
@section('content')

<div class="container" style="padding-top:70px">
<form action="{{ url('sending_mail',$data->id) }}" method="POST">
    @csrf
        
        <div style="padding: 15px;">
            <label for="">Greeting:</label>
            <input type="text" name="greeting" required style="color: black" required>
        </div>  
        <div style="padding: 15px;">
            <label for="">Body:</label>
            <input type="text" name="body" required style="color: black" required>
        </div>  
        <div style="padding: 15px;">
            <label for="">Action Text:</label>
            <input type="text" name="action_text" required style="color: black" required>
        </div>  
        <div style="padding: 15px;">
            <label for="">Action URL:</label>
            <input type="text" name="action_url" required style="color: black" required>
        </div>  
        <div style="padding: 15px;">
            <label for="">End Part:</label>
            <input type="text" name="end_part" required style="color: black" required>
        </div>  
        
        
        
        <div style="padding: 15px;">
            <input type="submit" name="btn" class="btn btn-success">
        </div>
    





</form>
</div>
@endsection