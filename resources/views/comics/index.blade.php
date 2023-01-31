@extends('layout.main')

<div>
  <h1 class="text-warning text-center py-5">questo é l'index</h1>
  <div class="text-center">
    <div>
      <a class="my-3 btn btn-info" href="{{ route('comics.create')}}">Aggiungi un nuovo comic</a>
    </div>
    <div>
      <a class="my-3 btn btn-warning" href="{{ route('app')}}">vai alla pagina iniziale</a>
    </div>
</div>







@section('content')
  <h1>Lista Comics</h1>

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Cover</th>
        <th>Titolo</th>
        <th>Publico</th>
        <th>Stato</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{ $comic->id }}</td>
          <td><img src="{{ $comic->thumb }}" alt="" style="width: 60px"></td>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->public ? 'Si' : 'No' }}</td>
          <td>
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary"><i class="fas fa-pencil"></i>E</a>
            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info"><i class="fas fa-eye"></i>S</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

</div>