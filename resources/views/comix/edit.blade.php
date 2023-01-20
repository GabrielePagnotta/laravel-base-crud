@extends('layout.structure')
@section('title','show')
@section("main")


<div class="mt-5 md:col-span-2 md:mt-0">
      <form action="{{route('comix.update', $comix->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="overflow-hidden shadow sm:rounded-md">
          <div class="bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" value="{{$comix->title}}" id="first-name" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label  class="block text-sm font-medium text-gray-700">Description</label>
                <textarea type="text" name="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{$comix->description}}</textarea>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" name="price" id="price" value="{{$comix->price}}" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 ">
                <label for="series" class="block text-sm font-medium text-gray-700">series</label>
                <input type="text" name="series" id="series" value="{{$comix->series}}" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 ">
                <label for="series" class="block text-sm font-medium text-gray-700">Sale-date</label>
                <input type="text" name="sale_date" id="series" value="{{$comix->sale_date}}" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3 ">
                <label for="type" class="block text-sm font-medium text-gray-700">type</label>
                <input type="text" name="type" id="type" autocomplete="given-name" value="{{$comix->type}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>


          <div class=" px-4 py-3 text-right sm:px-6 animate-spin">
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


</div>



@endsection
