<div style="padding:15px;border-right:2px solid #939393;height:100%;">
    <aside class="menu">
        @foreach ($menuStructure as $label => $menuItems)
            <p class="menu-label">{{$label}}</p>
            <ul class="menu-list">
                @foreach ($menuItems as $label => $menuItem)
                    <li>
                        <a 
                            href="
                            @if(isset($menuItem['link']) && $menuItem['link'] !== '')
                                {{route($menuItem['link'])}}
                            @else
                                #
                            @endif
                            "
                            @if($activeMenuItemRoute === ($menuItem['link'] ?? '') || in_array($activeMenuItemRoute, $menuItem['activeRoutes'] ?? []))
                                class="is-active"
                            @endif
                                wire:navigate
                            >
                            @if(isset($menuItem['icon']) && $menuItem['icon'] !== '')
                                <x-icon i="{{$menuItem['icon']}}" spe="2"/>
                            @endif
                            {{$label}}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </aside>
</div>