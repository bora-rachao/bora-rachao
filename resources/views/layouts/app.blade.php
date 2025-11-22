@extends('layouts.main')
@section('body')
    @include('partials.header')
    <main class="min-h-dvh">
        @yield('content')
    </main>
    @include('partials.footer')
@endsection
