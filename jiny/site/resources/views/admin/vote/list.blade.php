<x-datatable>
    <x-data-table-thead>

        <th > {!! xWireLink('제목', "orderBy('title')") !!}</th>
        <th width='200'>종합</th>
        <th width='200'>횟수</th>
        <th width='200'>평균</th>
        <th width='200'>등록일자</th>
    </x-data-table-thead>

    @if(count($rows)>0)
    <tbody>
        @foreach ($rows as $item)
        <x-data-table-tr :item="$item" :selected="$selected">
            <td >
                {!! $popupEdit($item, $item->title) !!}
            </td>
            <td width='200'>{{$item->tot}}</td>
            <td width='200'>{{$item->cnt}}</td>
            <td width='200'></td>
            <td width='200'>{{$item->created_at}}</td>
        </x-data-table-tr>
        @endforeach
    </tbody>
    @endif
</x-datatable>

@if(count($rows) == 0 )
<div class="text-center">
    목록이 없습니다.
</div>
@endif
