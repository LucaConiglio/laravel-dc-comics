@extends('layout.main')





@section('content')
  <h1>N {{$comic->id}}</h1>

  <div class="card">
    {{-- Se cover_img esiste, mostra un tag img, altrimenti nulla --}}
    @if ($comic->thumb)
      <img src="{{ $comic->thumb }}" alt="" class="card-img-top" style="width: 400px">
    @endif

    <div class="card-body">
      <div class="card-title"><strong>Titolo:</strong>{{ $comic->title }}</div>
      <p class="card-text"><strong>Descrizione:</strong>{{ $comic->description }}</p>
      <p class="card-text"><strong>Prezzo:</strong>{{ $comic->price }}</p>
      <p class="card-text"><strong>Serie:</strong>{{ $comic->series }}</p>
      <p class="card-text"><strong>Tipo:</strong>{{ $comic->type }}</p>
      <a class="btn btn-info my-3" href="{{ route('comics.index')}}">torna all'index</a>
    </div>

    <div>
       
      <a href="{{ route('comics.show', $comic->id-1) }}" class="btn btn-info">indietro</a>
      <a href="{{route('comics.show', $comic->id+1) }}" class="btn btn-info">avanti</a>
      
    </div>
  </div>

  

@endsection