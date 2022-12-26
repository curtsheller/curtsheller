@props([
    'textSize' => 'base',
    'type' => 'disc',
    'leading' => 'relaxed',
    'start' => '0'
])

<ul {{ $attributes->merge(['class' => "list-$type text-$textSize mt-4 ml-8 mb-4 leading-$leading"]) }}>
    {{ $slot }}
</ul>
