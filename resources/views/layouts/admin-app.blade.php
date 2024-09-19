@include('components.admin-header')

    <!-- leftbar-tab-menu -->
    @include('components.admin-sidebar')
    @include('components.admin-nav-bar')
    
    @yield('content')
 
  @include('components.admin-footer')           
