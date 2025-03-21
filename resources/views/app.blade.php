<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <meta name="og:site_name" content=""/>
    <meta name="og:url" content=""/>
    <meta name="og:title" content=""/>
    <meta name="og:image" content=""/>
    <meta name="og:description" content=""/>


    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script src="{{asset('js/axios.min.js')}}"></script>
</head>

<body class="d-flex flex-column h-100">

@include('components.navbar')
@include('components.loader')
<div class="" id="content-div">
    @yield('content')
</div>

@include('components.footer')




<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
