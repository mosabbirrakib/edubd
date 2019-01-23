<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduBD</title>
    @include('frontend.partials.style')
</head>
<body>
    <div id="wrapper">
        @include('frontend.partials.nav')
        @yield('content')
        @include('frontend.partials.body')   
    </div> <!-- /#wrapper -->
        @include('frontend.partials.script')
        @include('frontend.partials.footer')
</body>
</html>
