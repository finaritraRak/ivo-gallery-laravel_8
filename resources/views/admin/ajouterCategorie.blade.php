@extends('layouts.appAdmin')
@section('title')
    Ajouter catégorie
@endsection
@section('content')
    

                   
                     
                   

<div class=" relative shadow rounded-lg w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto">
<form class="w-full max-w-sm pt-6" method="get" action="/savecategory">
    {{ csrf_field() }}
     @if (Session::has('status'))
                       <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                          {{ Session::get('status') }}
                       </div>
                        
                    @endif

                    @if (count($errors) > 0)
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                       @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                    
                    @endif
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
       nom du category
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="category_name" type="text">
    </div>
  </div>
 
  
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Ajouter
      </button>
    </div>
  </div>
</form>
</div>                
@endsection

@section('scripts')
  
@endsection
