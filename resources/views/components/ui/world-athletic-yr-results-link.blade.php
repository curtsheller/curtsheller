<!-- http://www.iaaf.org/results/iaaf-world-championships-in-athletics/1997/6th-iaaf-world-championships-in-athletics-1274 -->
@props([
    'textSize' => 'sm',
    'type' => 'disc',
    'leading' => 'relaxed',
])

<ul {{ $attributes->merge(['class' => "list-$type text-$textSize mt-4 ml-8 mb-4 leading-$leading"]) }}>
    <li><a href="">@svg('list', 'text-grey-300 mr-1') Complete World Athletics Championship Results All Events: <span class="font-black">{{ $year }}</span> <x-ui.icons.link /></a></li>
</ul>
