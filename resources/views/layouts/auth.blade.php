@extends('layouts.main')
@section('body')
    <main class="min-h-dvh">
        @yield('content')
    </main>
    @include('partials.footer')
@endsection
