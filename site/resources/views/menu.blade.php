<nav class="navbar navbar-expand-lg navbar-light bg-light topMenu">
    <div class="collapse navbar-collapse">
        <span class="mr-auto"></span>
        <ul class="navbar-nav">
            @foreach($items as $menu_item)
                @if(count($menu_item->children) > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{{$loop->index}}" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $menu_item->title }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown{{$loop->index}}">
                            @foreach($menu_item->children as $child_item)
                                <a class="dropdown-item" href="@if($child_item->link()){{ $child_item->link() }}@else#@endif">{{ $child_item->title }}</a>
                            @endforeach
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="@if($menu_item->link()){{ $menu_item->link() }}@else#@endif">{{ $menu_item->title }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>