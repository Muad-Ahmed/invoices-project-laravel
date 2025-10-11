<!-- Title -->
<title> @yield("title") </title>
<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Cairo Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
<!-- Icons css -->
<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
<!--  Custom Scroll bar-->
<link href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/sidemenu.css')}}">
@yield('css')
<!--- Style css -->
<link href="{{URL::asset('assets/css-rtl/style.css')}}" rel="stylesheet">
<!--- Dark-mode css -->
<link href="{{URL::asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
<!---Skinmodes css-->
<link href="{{URL::asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet">
<!-- Custom Cairo Font CSS -->
<style>
    body, * {
        font-family: 'Cairo', 'Segoe UI', Tahoma, Arial, sans-serif !important;
    }
    
    [dir="rtl"], [lang="ar"], .arabic, .rtl {
        font-family: 'Cairo', 'Segoe UI', Tahoma, Arial, sans-serif !important;
        direction: rtl;
        text-align: right;
    }
    
    h1, h2, h3, h4, h5, h6, p, div, span, a, button, input, textarea, select {
        font-family: 'Cairo', 'Segoe UI', Tahoma, Arial, sans-serif !important;
    }
    
    .btn, .form-control, .nav-link, .dropdown-item {
        font-family: 'Cairo', 'Segoe UI', Tahoma, Arial, sans-serif !important;
    }
</style>