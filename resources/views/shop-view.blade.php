@extends('layouts.main')

@section('title',$title)

@section('content')
    <main>
<table>
    <tr>
            <td class="bod aliri">Code ::</td>
            <td><span>{{ $shop->code }}</span></td>
    </tr>
    <tr>        
            <td class="bod aliri">Name ::</td>
            <td><span>{{ $shop->name }}</span></td>
    </tr>
    <tr>
            <td class="bod aliri">Owner ::</td>
            <td><span>{{ $shop->owner }}</span></td>
    </tr>
    <tr>
            <td class="bod aliri">Location ::</td>
            <td><span>{{ $shop->latitude }} , {{ $shop->longitude }}</span></td>
    </tr>
    <tr>
            <td class="bod aliri top">Address ::</td>
            <td><pre class="pe">{{ $shop->address }}</pre></td>
    </tr>
</table>
    </main>
@endsection