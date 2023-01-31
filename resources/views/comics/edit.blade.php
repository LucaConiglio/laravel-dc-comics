@extends('layout.main')





@section('content')
  <h1>Edit di Comic</h1>

  
  <form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf()
    @method('PUT')

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>       
          @endforeach
        </ul>
      </div>
      @endif



    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <textarea name="content" cols="30" rows="5" class="form-control">{{ $comic->description }}</textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Immagine di copertina</label>
      <input type="text" class="form-control" name="cover_img" value="{{ $comic->thumb }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="text" class="form-control" name="price" value="{{$comic->price}}">
    </div>

    <div class="mb-3">
      <label class="form-label">Serie</label>
      <input type="text" class="form-control" name="series" value="{{$comic->series}}">
    </div>

    <div class="mb-3">
      <label class="form-label">Tipo</label>
      <input type="text" class="form-control" name="type" value="{{$comic->type}}">
    </div>
    
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
    <button class="btn btn-primary">Salva</button>
  </form>

@endsection