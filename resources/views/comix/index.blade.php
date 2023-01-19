@extends('layout.structure')
@section('title','index')
@section("main")

<table class="table">
    <thead>
      <tr>

        <th>Titolo</th>
        <th>Descrizione</th>
        <th>Prezzo</th>
        <th>data</th>
        <th>tipologia</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comixes as $elem)

        <tr>
          <td class="bg-blue-400 border-black border-2">{{$elem['title']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['description']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['price']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['series']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['sale_date']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['type']}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>


@endsection
