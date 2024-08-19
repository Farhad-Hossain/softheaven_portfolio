@props([
    'route'=>'',
    'class'=>'',
    'text'=>''
])
<li {{ $attributes->merge(['class'=>$class]) }}>
    <a href="{{$route}}">
        {{$text}}
    </a>
</li>
