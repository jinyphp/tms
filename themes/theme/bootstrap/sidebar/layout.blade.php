<div class="wrapper">
    <x-theme-sidebar>
        {{-- 메뉴모듈 출력 --}}
        @if(Module::has('Menus'))
            @livewire('menu-sidebar')
        @endif

    </x-theme-sidebar>

    <x-theme-main>
        {{$slot}}
    </x-theme-main>
</div>
