@extends('layout.app')


@section('main')
<body class="bg-black"> 
    
    <div class="flex flex-wrap m-4">
     @foreach ($films as $film)

   

    <div class="p-4 md:w-1/3">
        <div class="h-full rounded-xl shadow-cla-violate bg-gradient-to-r from-pink-50 to-red-50 overflow-hidden">
          <img class="lg:h-96 md:h-72 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{asset('storage/' . $film->affiche)}}" alt="blog">
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1" >{{$film->salle->nom}}</h2>
            <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{$film->titre}}</h1>
            <p class="leading-relaxed mb-3"> {{$film->synopsis}}.</p>
            <div class="flex items-center flex-wrap ">
              <button class="bg-gradient-to-r from-orange-300 to-amber-400 hover:scale-105 drop-shadow-md shadow-cla-violate px-4 py-1 rounded-lg">Learn more</button>
               
            </div>
        </div>
      </div>
    </div>

    @endforeach
</div>
</body>
        @endsection