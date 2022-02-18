<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
        @include('backend.layouts.partials._styles')
        @yield('styles')
  </head>
  <body>
    @include('backend.layouts.partials._header')
      <div class="container-fluid content_full">
          <div class="row">
            @include('backend.layouts.partials._sidebar')  
            <div class="col-md-10 admin-part pd0">
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="#">Dashboard</a></li>
                </ol>

                <div class="col-md-12">

                    @yield('content')
                    
                </div><!--col-md-12 end-->
              </div><!--admin-part end-->
            </div><!--row end-->
        </div><!--container-fluid end-->
        @include('backend.layouts.partials._footer')
        @include('backend.layouts.partials._script')
        @yield('scripts')
</body>
</html>