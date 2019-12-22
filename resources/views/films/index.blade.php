@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class='table-responsive'></div>
        <table class='table table-striped table-bordered table-hover' style='width:50%'>
            <thead >
                <tr >
                    <td hidden>film id</td>
                    <td>Film Name</td>
                    <td>Genre</td>
                    <td>Poster</td>
                    <td>Trailer</td>
                    <td>Year</td>
                    <td>List </td>
                </tr>
            </thead>
                <tbody>
                @forelse($films as $film)
                    <tr>
                        <td hidden>{{ $film->id }}</td>
                        <td><strong>{{ $film->name }}</strong></td>
                        <td>{{ $film->genre }}</td>
                        <td><img style='width:100px;hight:100px'src="{{ $film->poster }}"></img></td>
                        <td>
                            <iframe style='width:200px;hight:100px'src="{{ $film->trailer }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </td>                        
                        <td>{{ $film->year }}</td>
                        <td>
                            <span>
                                <form action="{{ action('List1Controller@add2List') }}" method='get'>
                                    @csrf
                                    <input hidden name="filmId" type="text" value="{{ $film->id }}">
                                    <button type="submit" class='btn btn-outline-danger'>Add </button>
                                </form>
                                <form action="/list/sub_list">
                                    @csrf
                                    <button type="submit" class='btn btn-outline-success'>Romove </button>
                                </form>
                            </span>
                        </td>
                    </tr>
                @empty
                        <p> Nothing to Display</p>
                @endforelse
                        
                </tbody>
        </table>
    
</div>
@endsection