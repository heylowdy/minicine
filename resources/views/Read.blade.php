@extends('layout.app')




@section('main')
<body class="body_crud">
    

<div>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-700 sm:justify-center sm:pt-0">
  
      <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-gray-400 shadow-md shadow-gray-400 rounded-lg lg:max-w-4xl">
  
        <div class="mb-4">
          <h1 class="font-serif text-3xl text-red-700 font-bold underline decoration-white">Show Film</h1>
        </div>
  
        <div class="w-full px-6 py-4 bg-white rounded shadow-md  shadow-white ring-1 ring-gray-900/10">
          <form method="POST" action="/Read/{{$film->id}}">
            <!-- Title -->
            <div>
              <h3 class="text-2xl  text-gray-700 font-semibold">{{$film->titre}}</h3>
              <div class="flex items-center mb-4 space-x-2">
                <span class="text-xs text-gray-500">{{$film->date_de_sortie}}</span><span class="text-xs text-gray-500">{{$film->realisateur->nom}}{{$film->realisateur->prenom}}</span>
                </span>
              </div>
              </div>
              <img src="{{asset('storage/' . $film->affiche)}}" class="img-responsive width=200px" >
              <p class="text-base text-gray-700">{{$film->synopsis}} </p>
             <p>{{$film->duree}}</p>
              <p>{{$film->version}}</p>
            <p>{{$film->csa}}</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection


 
    




</body>
</html>