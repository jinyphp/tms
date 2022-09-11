<div>
    {{-- loading 화면 처리 --}}
    <x-loading-indicator/>

    <!-- 팝업 데이터 수정창 -->
    @if ($popupInstall)

    <x-dialog-modal wire:model="popupInstall" maxWidth="2xl">

        <x-slot name="content">


            {{ $item['title'] }}

            {{--
            <img class="card-img-top" src="/images/{{$theme['image']}}" >

            <div class="card-title h5">
                {{ $theme['title'] }}
            </div>
            <p class="card-text">{{ $theme['subtitle'] }}</p>

            <table class="table table-sm">
                <tr>
                    <th width="150px">카테고리</th>
                    <td>{{$theme['category']}}</td>
                </tr>
                <tr>
                    <th width="150px">코드</th>
                    <td>{{$theme['code']}}</td>
                </tr>
                <tr>
                    <th width="150px">version</th>
                    <td>{{$theme['version']}}</td>
                </tr>
                <tr>
                    <th width="150px">css framwork</th>
                    <td>{{$theme['css']}}</td>
                </tr>
                <tr>
                    <th width="150px">price</th>
                    <td>{{$theme['price']}}</td>
                </tr>
            </table>

            <p class="card-text">{{ $theme['content'] }}</p>
            --}}


        </x-slot>

        <x-slot name="footer">

            <x-flex-between>
                <div></div>
                <div>
                    @if ($mode == 'uninstall')
                        <x-button secondary wire:click="popupInstallClose">닫기</x-button>
                        <x-button danger wire:click="remove">제거</x-button>
                    @else
                        <x-button secondary wire:click="popupInstallClose">닫기</x-button>
                        <x-button primary wire:click="download">설치</x-button>
                    @endif
                </div>
            </x-flex-between>

        </x-slot>
    </x-dialog-modal>

    @endif
</div>
