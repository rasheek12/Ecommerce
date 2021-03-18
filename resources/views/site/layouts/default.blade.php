<!DOCTYPE html>
<html lang="en">

<head>

    @include('site.partials.meta')

</head>

<body>

    @include("site.partials.nav")

    <div class="container mx-auto py-16">
        @yield('content')
    </div>
</body>

</html>