@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    @include('items.have_items',['items',$have_items])
@endsection