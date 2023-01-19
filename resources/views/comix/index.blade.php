@extends('layout.structure')
@section('title','index')
@section("main")
<button class="bg-green-500 text-black rounded-md p-2 mt-2 hover:bg-green-800 hover:text-white animate-pulse">
   <a href="{{route('comix.create')}}">Add</a>
</button>
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
          <td class="bg-blue-400 border-black border-2">
          <a href="{{route('comix.show',$elem->id)}}">{{$elem['title']}}</a>
        </td>
          <td class="bg-blue-400 border-black border-2">{{$elem['description']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['price']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['series']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['sale_date']}}</td>
          <td class="bg-blue-400 border-black border-2">{{$elem['type']}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>


{{$comixes->links('vendor.pagination.tailwind')}}

@endsection
