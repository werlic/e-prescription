@include('layouts.sidebar')
<!-- Main content -->
<div class="main-content" id="panel">
  @include('layouts.navbar')
  <!-- Header -->
  @yield('header')
  <!-- Page content -->
  <div class="container-fluid mt--6">
    @yield('content')
    @include('layouts.footer')
  </div>
</div>