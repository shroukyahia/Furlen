<!DOCTYPE html>
<html lang="en">

<head>
    <title>Responsive Sidebar</title>
    <link rel="stylesheet" href="{{asset('Frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/charts.min.css')}}">
</head>

<body>
    <div class="dashboard">
        @include('sidebar')
        @yield('admin')
        @include('profile')

    </div>


</body>

</html>
