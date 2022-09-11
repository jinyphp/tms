<style>
    .nav-link:hover {
        background-color: aquamarine;
    }
</style>
@php
    $menu = DB::table('docs_index')->get();
    //dd($menu);
@endphp

@foreach ($menu as $item)
    @if($item->header)
    <li class="nav-item">
        <span class="nav-subtitle">{{$item->title}}</span>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link active" href="{{$item->href}}">{{$item->title}}</a>
    </li>
    @endif
@endforeach
