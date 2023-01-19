@extends('layout.structure')
@section('title','show')
@section("main")


    <h1 class="text-center text-2xl">{{$array_comix["title"]}}</h1>
    <article class="text-center p-5"> {{$array_comix["description"]}}</article>

  <button class="bg-blue-300 rounded-md p-2 my-10 hover:bg-blue-800 hover:text-white animate-pulse">
   <a href="{{route('comix.index')}}">return</a>
</button>



@endsection
