<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title', 'laravel roll Admin' )</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('admin.layouts.partials.style')
    @yield('styles')

  
</head>

<body>

    <div class="page-container">

     @include('admin.layouts.partials.sidebar')
  
        <div class="main-content">
  
     @include('admin.layouts.partials.header')
          
       
          @yield('admin-content')
        </div>
    
     @include('admin.layouts.partials.footer')
    </div>
    @include('admin.layouts.partials.js')
    @yield('scripts')
    
</body>

</html>