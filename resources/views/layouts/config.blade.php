@extends('layouts.main')
@section('body')
    @include('partials.header')
    <div class="container mx-auto px-4 mt-6 mb-[150px] grid lg:grid-cols-4 gap-10">
        <div class="lg:col-span-1">
            @include('partials.users.menu')
        </div>
        <main class="lg:col-span-3 p-7 rounded-xl border border-gray-200 shadow-sm">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
@endSection
