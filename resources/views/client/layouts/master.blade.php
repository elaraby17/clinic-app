<!DOCTYPE html>
<html lang="en">

@include('client.layouts.partials.head')

<body>
    <div class="page-wrapper">

        @include('client.layouts.partials.nav')

        @yield('content')
        
    </div>


    @include('client.layouts.partials.footer')

    @include('client.layouts.partials.script')

</body>

</html>
