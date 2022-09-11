<x-theme>
    <style>
        .jiny.center-middle {
            position: absolute;
            top:50%; left:50%;
            transform: translate(-50%,-50%);
        }
    </style>

    <div class="jiny center-middle" style="width:70%">
        @livewire('WireConfig', ['actions'=>$actions])
    </div>

</x-theme>
