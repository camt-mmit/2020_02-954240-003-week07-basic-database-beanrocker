@extends('layouts.main')

@section('title',$title)

@section('content')

<table>
@foreach($products as $product)
<tr>
<th>
<a href="{{ route('product-view', [
'product' => $product->code,
]) }}">
{{ $product->code }}
</a>
</th>
<td>{{ $product->name }}</td>
</tr>
@endforeach
</table>

@endsection