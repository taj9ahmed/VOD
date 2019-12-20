@extends('layouts.app')

@section('content')

    <form action="/lists/insertList" method='get'>

        <input name='name' type="list_name">
        <button type='submit'>Add New List</button>

    </form>


@endsection