@extends('layout.app')


@section('main')
<body class="bg-black"> 

    <div >
     @foreach ($films as $film)
    
    {{-- <div class="p-4 md:w-1/3"> --}}
      {{-- <div class="text-sm text-red-600 font-semibold mx-auto max-w-4xl"> --}}
      
        {{-- </div> --}}
        <div > 
          <x-film.index :film="$film">
            {{-- IMAGE --}}
    <x-slot name="image">
     <img class="lg:max-w-lg md:h-72 object-cover object-center scale-100 transition-all duration-400 hover:scale-110" src="{{asset('storage/' . $film->affiche)}}" alt="blog">

    </x-slot>

    {{-- TITRE  --}}
<x-slot name="titre">

  {{$film->titre()}}
</x-slot>

{{-- SYNOPSIS --}}
<x-slot name="synopsis">
 {{$film->synopsis()}}
</x-slot>
{{-- SALLE --}}
<x-slot name="nom">
  {{$film->salle->nom}}

</x-slot>

      
          </x-film.index>
         
               {{-- <div class="p-6"> --}}
            {{-- <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{$film->titre}}</h1> --}}
            {{-- <p class="leading-relaxed mb-3"> {{$film->synopsis}}.</p> --}}
            {{-- <div class="flex items-center flex-wrap "> --}}
         
            </div>
        </div>
      </div>
    </div>

    @endforeach
</div>
   
              </body>
        @endsection