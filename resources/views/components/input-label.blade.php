{{-- @props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label> --}}

@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-500 dark:text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>
