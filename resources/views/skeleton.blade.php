<!DOCTYPE html>
<html>

    @include('includes.head')

<body>

    @include('includes.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('includes.footer')
    @include('scripts.js')

    @yield('scripts')

</body>
</html>