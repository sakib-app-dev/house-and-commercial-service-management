@extends('users.master')
@section('content')
    
<section class="features-4">
		
    <div class="features4-block py-5">

        <div align="center" style="background-color: #F45D01; font-size:40px;color:whitesmoke;margin:10px;border-radius: 20px;">{{ $dt }}</div>
        <div class="container py-lg-5">
            <div class="features4-grids text-center row">

                {{-- offer/services  --}}
                {{-- @foreach ($cat as $item) --}}
                
                @foreach ($data as $item)
                    <div class="col-lg-3 col-md-6 features4-grid">
                    <div class="features4-grid-inn">
                        
                            <img src="{{ asset('/imagefile') }}/{{ $item->image }}" alt="" style="height: 135px; width:130px;border-radius:50%">
                            <hr style="border-block-color: blue">
                            <h5><a href="{{ url('/qualifications',$item->id) }}">{{ $item->name }}</a></h5>
                            <p>Price: {{ $item->pricing }} per Hour</p>
                            <p>( {{ $item->work_details }} )</p>
                            <p>Working Location: {{ $item->location_to_work }}</p>
                        {{-- @endforeach --}}
                            
                        
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
</section>

@endsection