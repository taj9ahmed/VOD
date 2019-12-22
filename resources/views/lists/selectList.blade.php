@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ action('List1Controller@index') }}" method='get'>
       <select size="10"  name="list_select"  id="" style='width:50%'>
                @forelse($lists["menus"] as $list)
                
                    <option value="{{ $list->id }}" class="">{{ $list->name }}</option>
                    
                        @empty
                            <p> Nothing to Display</p>
                        @endforelse
        </select>
        <input name="filmId" value="{{ $lists['filmId']}}">
        <div>
            
                <button name='' type="submit" class="btn btn-primary"> Add </button>
            </form>
        </div>
</div>
@endsection
<?php
        // if(array_key_exists('add2list', $_GET)) { 
        //     button1(); 
        // } 
        // else if(array_key_exists('button2', $_POST)) { 
        //     button2(); 
        // } 
        // function button1() { 
        //     dd( $lists);//..have to find film id from previous view
        //     // echo "This is Button1 that is selected"; 
        // } 
        // function button2() { 
        //     // {{ var_dump( $lists)}}
        //     // {{dd($lists)}}
//         {{dd($lists)}}
// {{dd($lists["filmId"])}}
        //     echo "This is Button2 that is selected"; 
        //     // {{ action('List1Controller@add2list($_get,$selected)') }}
        // } 
    ?> 
   