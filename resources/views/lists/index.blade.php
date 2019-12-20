@extends('layouts.app')

@section('content')


<div class="container">
    
    <div class='table-responsive'></div>
        <table class='table table-striped table-bordered table-hover' style='width:50%'>
            <thead>
                <tr>
                    <td>List Name</td>
                    <td>Owner</td>

                    <td style="width:200px">Options</td>
                </tr>
            </thead>
                <tbody>
                @forelse($lists as $list)
                    <tr>
                        <td><strong>{{ $list->name }}</strong></td>
                        <td>{{  $list->owner_id ?? \Auth::user()->id}}</td>
                        

                    </tr>
                @empty
                        <p> Nothing to Display</p>
                @endforelse
                        
                </tbody>
        </table>
    
</div>
@endsection