<div style="width: 200px;  align-self: stretch; min-height: 100vh; background: #9ca3af;">
    <div class="d-flex flex-column h-100">
        {{-- Campo do logo--}}
        <div class="side-menu-header text-center"
             style="height: {{$attributes['height']}}; border-bottom: 2px solid rgba(0, 0, 0, 0.1);">
            <h2>Logo</h2>
        </div>
        {{-- Listagem de menus --}}
        <div class="menus flex-grow-1 flex-shrink-0" style="overflow: auto; max-height: 90vh">
            @foreach(range(0,30) as $menu)
                <div class="d-flex">
                    <div style="width: 50px; height: 50px"
                         class="d-flex justify-content-center align-items-center fs-5">
                        <i class="fa-solid fa-layer-group "></i>
                    </div>
                    <div class="flex-grow-1 d-flex  align-items-center"><b>Menu 1</b></div>
                </div>
            @endforeach
        </div>
    </div>
</div>
