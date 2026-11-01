<?php
    $route = $route ?? '';
    $label = $label ?? '';
?>
<li class="mb-1">
    <a class="treeview-item" href="{{$route}}">
        <span class="submenu"> <i class="fa fa-circle-o" style="font-size: 10px"></i> &nbsp; {{$label}}</span>
    </a>
    <hr class="m-0 y-0"  />
</li>