@props(['name'])

@error($name)
    <div>
        <p {{ $attributes->class(['text-xs leading-4 text-red-500 -mt-1']) }}>
            {{ $message }}
        </p>
    </div>
@enderror
