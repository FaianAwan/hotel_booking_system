<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      @include('admin.body')
        @include('admin.footer')
  </body>
</html>