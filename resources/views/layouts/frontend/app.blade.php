<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.frontend.inc.meta')

    @include('layouts.frontend.inc.style')

</head>

<body>

    @include('layouts.frontend.inc.header')

    @yield('content')
    
    @include('layouts.frontend.inc.footer')

</body>

</html>
