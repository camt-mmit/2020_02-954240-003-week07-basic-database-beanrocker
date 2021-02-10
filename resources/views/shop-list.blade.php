@extends('layouts.main')

@section('title',$title)

@section('content')

<table>
<tr class="thtl">
<th>Code</th><th class="bd w1">Name</th><th class="w3">Owner</th>
</tr>
@foreach($shops as $shop)
<tr>
<th class="bd">
<a href="{{ route('shop-view', ['shop' => $shop->code,]) }}">
{{ $shop->code }}
</a>
</th>
<td class="bd">{{ $shop->name }}</td>
<td class="bd">{{ $shop->owner }}</td>
</tr>
@endforeach
</table>

@endsection