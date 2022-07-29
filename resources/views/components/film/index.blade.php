<div class="flex flex-wrap m-4 max-w-sm">
  
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <div class="p-2 mb-5 space-y-2 bg-slate-300  rounded shadow-md shadow-gray-600 ">
      {{-- IMAGE --}}
         {{$image}}

          <h2 class="font-bold text-white">{{$titre}}</h2>

          <p class="text-sm">{{$synopsis}}</p>

      <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1" >{{$nom}}</h2>
     
      <button class="'border-2 border-teal rounded bg-red-500 px-5">learn more </button>
      {{-- <p class="text-sm"{{$film->salle->nom}}></p> --}}
  
          <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
      </div> <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div>