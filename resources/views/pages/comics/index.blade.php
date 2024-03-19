@extends('layouts.basic')

@section('title', 'Comics | Home')

@section('main')
    <main id="index-main">
        <h1 style="font-size: 70px">Fumetti</h1>
        <div id="card-container">
            @foreach ($comics as $item)
            <div>
                <h1>{{$item->title}}</h1>
                <p><strong>Src:</strong> {{$item->thumb}}</p>
                <p><strong>Description: </strong>{{$item->description}}</p>
                <p><strong>Price: </strong>{{$item->price}}$</p>
                <p><strong>Series: </strong>{{$item->series}}</p>
                <p><strong>Sale Date: </strong>{{$item->sale_date}}</p>
                <p><strong>Type: </strong>{{$item->type}}</p>
            </div> 
            @endforeach
        </div>
        <a href="{{ route('comics.create') }}">Crea fumetto</a>
    </main>
@endsection