@props(['title', 'icon' => null, 'color' => '', 'href' => null])

@if ($href)
    <a href="{{ $href }}"
        {{ $attributes->class([
            "$color",
            'hover:shadow-md hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center gap-x-1.5 duration-300 ease-in-out',
        ]) }}>

        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif

        {{ $title }}
    </a>
@else
    <button type="submit"
        {{ $attributes->class([
            "$color",
            'hover:shadow-md hover:cursor-pointer text-white px-4 py-1.5 rounded-xl flex items-center gap-x-1.5 duration-300 ease-in-out',
        ]) }}>

        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif

        {{ $title }}
    </button>
@endif
