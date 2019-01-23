<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduBD</title>
    @include('backend.partials.style')
</head>
<body>
    <div id="wrapper">
        @include('backend.partials.nav')
        @yield('content')
        @include('backend.partials.body')   
    </div> <!-- /#wrapper -->
        @include('backend.partials.script')
        @include('backend.partials.footer')
</body>
</html>
