@props(['message','errors'])

<div {{ $attributes->merge(['class' => $errors]) }}>
    {{ $message }}
</div>
