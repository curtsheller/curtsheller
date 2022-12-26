@props([
    'textSize' => 'base',
    'type' => 'decimal',
    'leading' => 'relaxed',
    'start' => '8'
])

<ol {{ $attributes->merge(['class' => "list-$type text-$textSize mt-4 ml-8 mb-4 leading-$leading"]) }} start="$start">
    {{ $slot }}
</ol>
