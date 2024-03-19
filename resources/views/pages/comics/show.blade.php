@extends('layouts.basic')

@section('title', 'DC-Comics | Read Show')

@section('main')
    <main id="show-main">
        <h1>Complimenti! Hai creato la tua inserzione</h1>
        <div>
            <h2>{{$comic->title}}</h2>
            <p><strong>Src:</strong> {{$comic->thumb}}</p>
            <p><strong>Description: </strong>{{$comic->description}}</p>
            <p><strong>Price: </strong>{{$comic->price}}$</p>
            <p><strong>Series: </strong>{{$comic->series}}</p>
            <p><strong>Sale Date: </strong>{{$comic->sale_date}}</p>
            <p><strong>Type: </strong>{{$comic->type}}</p>
        </div>
        <a href="{{ route('comics.index') }}">Torna Alla Sezione Comics</a>
    </main>
@endsection