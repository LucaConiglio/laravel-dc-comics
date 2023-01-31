@extends('layout.main')

<h1 class="text-center text-info py-5">questo é il create</h1>
<div class="text-center d-flex flex-column">
  <a href="{{ route('comics.index')}}">vai all'index</a>
  <a href="{{ route('app')}}">vai alla pagina iniziale</a>
</div>
   
@section('content')
  <h1>Nuovo Comic</h1>
  
  <form action="{{ route('comics.store') }}" method="POST">
    @csrf()

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
      <input type="text" class="form-control" name="title">
    </div>

    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="mb-3">
      <label class="form-label">Immagine di copertina</label>
      <input type="text" class="form-control" name="thumb">
    </div>

    <div class="mb-3">
      <label class="form-label">Prezzo</label>
      <input type="text" class="form-control" name="price">
    </div>

    <div class="mb-3">
      <label class="form-label">Series</label>
      <input type="text" class="form-control" name="series">
    </div>

    <div class="mb-3">
      <label class="form-label">type</label>
      <input type="text" class="form-control" name="type">
    </div>
    

    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Annulla</a>
    <button class="btn btn-primary">Salva</button>
  </form>

@endsection
