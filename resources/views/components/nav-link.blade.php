@props(['active' => false])

<li class="menu-item ">
    <a class="hostie-dropdown-main-element {{$active ? 'active' : ''}}" {{$attributes}}>{{$slot}}</a>
</li>
