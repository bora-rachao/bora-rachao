@props([
    'type' => 'success',
    'message' => '',
])

@php
    $colors = [
        'success' => 'bg-lime-500 text-white shadow-lime-400/50',
        'error' => 'bg-red-600 text-white shadow-red-500/50',
        'info' => 'bg-cyan-500 text-white shadow-cyan-400/35',
        'warning' => 'bg-orange-500 text-black shadow-orange-400/50',
    ];

    $icons = [
        'success' => 'fa-solid fa-check-circle',
        'error' => 'fa-solid fa-circle-xmark',
        'info' => 'fa-solid fa-circle-info',
        'warning' => 'fa-solid fa-triangle-exclamation',
    ];
@endphp

<div class="toast flex items-center gap-3 fixed bottom-5 right-5 px-4 py-3 rounded-lg shadow-sm opacity-0 translate-y-4 transition-all duration-300 {{ $colors[$type] }} z-50"
    data-toast>

    <i class="{{ $icons[$type] }} text-xl"></i>

    <span class="font-medium">{{ $message }}</span>
</div>
