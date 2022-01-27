<!DOCTYPE html>
<html lang="en">

<!-- Admin Head -->
@include('includes.admin.head')
<body data-sidebar="dark" style="background-color: #f8f8fb;">
    <div id="layout-wrapper">
            
        @include('includes.admin.header')

        @include('includes.admin.sidebar')
        <div class="main-content">
      
            @yield('content')

            @include('includes.admin.footer')
        </div>
                  
    </div>
    @include('includes.admin.script')
    
</body>

</html>
