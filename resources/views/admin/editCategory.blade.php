@extends('layouts.appadmin')
@section('title')
    edit catégorie
@endsection
@section('content')
   
                    



<div class=" relative shadow rounded-lg w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto">
    @if (Session::has('status'))
                        <div class="alert alert-success">
                            {{ Session::get('status') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<form class="w-full max-w-sm pt-6"  class="cmxform" id="commentForm" method="POST" action="/editcategory/{{ $categories->id }}">
   @csrf
                        @method('PUT')
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
       nom du category
      </label>
    </div>
    <input type="hidden" value="{{ $categories->id }}" />
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="category_name" value="{{ $categories->category_name }}" type="text">
    </div>
  </div>
 
  
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" value="modifier">
        Modifier
      </button>
    </div>
  </div>
</form>
</div>













                  
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="admin/js/form-validation.js"></script>
    <script src="admin/js/bt-maxLength.js"></script> --}}
@endsection
