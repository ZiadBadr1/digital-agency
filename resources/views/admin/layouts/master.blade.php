<!DOCTYPE html>

<html
        lang="en"
        class="light-style layout-menu-fixed"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="../assets/"
        data-template="vertical-menu-template-free"
>

@include('admin.layouts.head')
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('admin.layouts.aside')
        <!-- Layout container -->
        <div class="layout-page">

        @include('admin.layouts.navbar')
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                @yield('content')
                @include('admin.layouts.footer')
                <!-- / Content -->
            </div>
            <!-- Content wrapper -->
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
</body>
@include('admin.layouts.js')
</html>


