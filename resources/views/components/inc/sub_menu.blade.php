<?php
    $route = $route ?? '';
    $label = $label ?? '';
?>
<li>
    <a class="treeview-item" href="{{$route}}">
        <span class="submenu"> {{$label}}</span>
    </a>
</li>