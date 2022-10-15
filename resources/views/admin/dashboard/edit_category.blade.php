

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    
    <link rel="stylesheet" href="{{ asset('/admin') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('/admin') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('/admin') }}/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{ asset('/admin') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('/admin') }}/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/admin') }}/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    
    <link rel="stylesheet" href="{{ asset('/admin') }}/assets//css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('/admin') }}/assets/images/favicon.png" />
    <style type="text/css">
        label{
            display:inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      
    
      @include('admin.dashboard.slidebar')
      
      
        
      {{-- @include('admin.menu') --}}
       
        
      <div class="container-fluid page-body-wrapper">
        @if (session()->has('msg'))
        <div class="alert alert-success">
            {{ session()->get('msg') }}
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
        </div>

        @endif


        <div class="container" align="center" style="padding-top: 100px">
            


            
            <form action="{{ url('save_edit_categoty',$data->id) }}" method="POST" >
                @csrf
                <div style="padding: 15px;">
                    <label for="">Category Name:</label>
                    <input type="text" name="category_name" style="color: black" value="{{ $data->category_name }}"  placeholder="Write Category Name..." required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Discription:</label>
                    <input type="address" name="discription" style="color: black" value="{{ $data->discription }}" placeholder="Write The Discription..." required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Type:</label>
                    <input type="text" name="type" value="{{ $data->type }}" style="color: black"  required>
                </div>
                <div style="padding: 15px;">
                    <label for="">Icon:</label>
                    <input type="text" name="icon" style="color: black" value="{{ $data->icon }}" placeholder="Icon name">
                
                <div style="padding: 15px;">
                    <input type="submit" name="btn" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
        
        
      
    </div>
    

    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="admin/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>


