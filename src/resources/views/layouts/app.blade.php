<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Codingtest</title>
    @yield('additional-meta')
    <!-- Bootstrap CSS -->
    {{ Html::style('assets/css/bootstrap.min.css') }}
    <!-- Datatable CSS -->
    {{ Html::style('assets/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('assets/css/responsive.dataTables.min.css') }}

    <!-- Additional CSS -->
    @yield('additional-css')
    {{ Html::style('assets/css/style.css') }}
    
    <!-- Base URL variable -->
    <script>
        var base_url = '{{ URL::to("/") }}';
    </script>
</head>
<body>
    <!-- Header content -->
    @include('layouts.header')

    <div class="container">
        <!-- Dynamic content -->
        @yield('content')

        <!-- Footer content -->
        @include('layouts.footer')

        <!-- Load scripts -->
        @include('layouts.scripts')
        @yield('additional-scripts')
    </div>
</body>
</html>