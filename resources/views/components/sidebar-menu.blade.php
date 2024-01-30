@props([ 'name', 'icon', 'route' ])

<li
    class="
        sidebar-item
        {{request()->routeIs($route) ? 'active' : ''}}
    "
>
    <a
        href="{{route($route)}}"
        wire:navigate
        class='sidebar-link'
    >
        <i class="{{$icon}}"></i>
        <span>{{$name}}</span>
    </a>
</li>
