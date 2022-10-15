@extends('admin.dashboard.master')
@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="container" align="center" style="padding-top: 100px">
        
        
        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
                <button type="button" class="close" data-dismiss="alert">
                    x
                </button>
            </div>
    
        @endif
        
        <form action="{{ url('save_category') }}" method="POST" >
            @csrf
            <div style="padding: 15px;">
                <label for="">Category Name:</label>
                <input type="text" name="category_name" style="color: black" placeholder="Write Category Name..." required>
            </div>
            <div style="padding: 15px;">
                <label for="">Discription:</label>
                <input type="address" name="discription" style="color: black" placeholder="Write The Discription..." required>
            </div>
            <div style="padding: 15px;">
                <label for="">Type:</label>
                <select name="type" id="" style="color: black; width:200px;" required>
                    <option value="">--select--</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Urgent">Urgent</option>
                </select>
            </div>
            <div style="padding: 15px;">
                <label for="">Icon:</label>
                <input type="text" name="icon" style="color: black" placeholder="Icon name">
            
            <div style="padding: 15px;">
                <input type="submit" name="btn" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection