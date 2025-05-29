@php
    dd($attributes->all()['class']);
@endphp

<div {{ $attributes }}>
    {{ $slot }}
</div>
