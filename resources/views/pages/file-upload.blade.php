@extends('layouts.app')
@section('title')
  profile Etudiant
@endsection
@section('content')

 
</div>
<br>
<div class="bg-white relative shadow rounded-lg w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto">
  <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
     {{ csrf_field() }}
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">
        Titre
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="titre" id="titre" type="text" placeholder="titre">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Description">
        Description
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Description" name="description" type="textarea" placeholder="Description">
     
    </div>

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
        category
      </label>


      <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="category" id="">
                                    <option value="">select category</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->category_name }}">{{ $categorie->category_name }}
                                        </option>
                                    @endforeach

      </select>








    </div>
     <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user" value="{{ Auth::user()->name }}" name="user" type="hidden">
     <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="file">
        Image
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="file" name="file" type="file">
     
    </div>
   
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Upload
      </button>
      @error('file')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
    </div>
  </form>
</div>
@endsection
