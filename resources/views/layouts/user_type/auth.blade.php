@extends('layouts.app')

@include('layouts.navbars.auth.sidebar')


@include('layouts.navbars.auth.nav')
    <div class="container-fluid py-4">
        @yield('content')
        @include('layouts.footers.auth.footer')
    </div>

