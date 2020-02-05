<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layout.partials.head')
  </head>
  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      @include('layout.partials.sidebar')
      
      <!-- /#sidebar-wrapper -->
      @include('layout.partials.nav')
      
  @yield('content')
        
@include('layout.partials.footer')
      