@include('admin.backlayout.header')

@if(Route::currentRouteName() != 'back.auth')
    @include('admin.backlayout.navbar')
    @include('admin.backlayout.sidebar')
@endif

@yield('section')

@include('admin.backlayout.footer')