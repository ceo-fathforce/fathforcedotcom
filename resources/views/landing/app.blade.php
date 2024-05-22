<!DOCTYPE html>
<html lang="en">

@include('landing.layouts.header')
@include('landing.layouts.style')
@include('landing.layouts.plugins')

<body>
    @yield('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=6285161721727&text=Halo%20selamat%20datang%20di%20WhatsApp%20admin%20Fathforce" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    @include('landing.layouts.script')
</body>

</html>
