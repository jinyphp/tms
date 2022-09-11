@push('css')
<style>
    body {
        margin:0%;
        padding: 0%;
        background-color: #ebeef0;
    }

    .wrapper {
        align-items: stretch;
        display: flex;
        width: 100%;
    }
</style>
@endpush

<div class="wrapper">
    {{-- 테마의 sidebar.blade.php 적용--}}
    <x-theme-sidebar>
        @theme('.menu')
        {{-- @theme(".menu_tree")--}}
    </x-theme-sidebar>

    {{-- 테마의 main.blade.php 적용--}}
    <x-theme-main>
        {{$slot}}
    </x-theme-main>
</div>
