<!-- /offer-->
<section class="features-4">
		
    <div class="features4-block py-5">

        <div align="center" style="background-color: #F45D01; font-size:40px;color:whitesmoke;margin:10px;border-radius: 20px;">Home Care Services</div>
        <div class="container py-lg-5">
            <div class="features4-grids text-center row">

                {{-- offer/services  --}}
                @foreach ($data as $item)
                    <div class="col-lg-3 col-md-6 features4-grid">
                    <div class="features4-grid-inn">
                        
                            <span class="{{ $item->icon }}" aria-hidden="true"></span>
                            <h5><a href="{{ url('/category',$item->id) }}">{{ $item->category_name }}</a></h5>
                            <p>{{ $item->discription }}</p>
                        
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>
</section>


<section class="w3l-content-6">
    <div  style="background-color: #F45D01; font-size:40px;color:whitesmoke;margin:10px;border-radius: 20px;text-align:center">Urgent Services</div>
    <!-- /content-6-main-->
    <div class="content-6-mian">
        <div class="container" style="padding-bottom:8px;">
            
            <div class="features-top_sur d-grid">
                <div class="features-top-left_sur">
                    <span class="fa fa-plug"></span>
                    <h4><a href="services.html">Electrical work</a></h4>

                </div>
                <div class="features-top-left_sur">
                    <span class="fa fa-paint-brush"></span>
                    <h4><a href="services.html">Painting work</a></h4>

                </div>
                <div class="features-top-left_sur">
                    <span class="fa fa-bed"></span>
                    <h4><a href="services.html">Furniture shifting</a></h4>

                </div>
                <div class="features-top-left_sur">
                    <span class="fa fa-shield"></span>
                    <h4><a href="services.html">Lock Breaker</a></h4>

                </div>
                <div class="features-top-left_sur">
                    <span class="fa fa-paragraph"></span>
                    <h4><a href="services.html">Decoration</a></h4>

                </div>
                <div class="features-top-left_sur">
                    <span class="fa fa-unlink"></span>
                    <h4><a href="services.html">Plumbing</a></h4>

                </div>

                <div class="features-top-left_sur">
                    <span class="fa fa-unlink"></span>
                    <h4><a href="services.html">Cleaning</a></h4>

                </div>

                <div class="features-top-left_sur">
                    <span class="fa fa-unlink"></span>
                    <h4><a href="services.html">AC & Refregaretor</a></h4>

                </div>


            </div>

        </div>
    </div>
</section>