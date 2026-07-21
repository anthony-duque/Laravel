
@props(['active'])
@props(['baseClass' => ''])

<button {{ $attributes }} @class([$baseClass, $active ? 'fw-bold fst-italic' : ''])>
    {{ $slot }}
</button>
