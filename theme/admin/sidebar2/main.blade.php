<div class="main">
    {{-- 상대경로 --}}
    @theme(".main.header")

    <main class="content">
        <div class="content-body">
            {{$slot}}
        </div>
    </main>

    @theme(".main.footer")
</div>
