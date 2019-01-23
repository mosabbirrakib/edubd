<!DOCTYPE html>
<html>
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('frontend.pages.registration.partials.style')
</head>
<body>
  @include('frontend.pages.registration.partials.nav')
  @yield('content')
</body>
  @include('frontend.pages.registration.partials.footer')
</html>
