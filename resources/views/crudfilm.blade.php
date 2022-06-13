@extends('layout.app')





@section('main')
@include('component/addfilm')
 <body class="body_crud">
  <div class="main">
 
    <div class="container w-full">
        <div class="mb-4">
          <h1 class="titre_crud">CRUD-LE LUMIERE</h1>
    
          </div>npm 
        </div>
        <div class="flex flex-col shadow-xl">
          <div class=" sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="inline-block min-w-full  align-center  rounded-lg bg-white shadow-md shadow-white sm:rounded-lg">
              <table class="min-w-full">
               
                <thead>
  
                  <tr>
                   <th > 
                      ID</th>
                    <th>
                      Titre</th>
                    <th>
                      synopsis</th>
                      <th>
                        Réalisateur</th>
                    <th >
                      date de sortie</th>
                      <th>
                        durée
                      </th>
                      <th>
                        bande annonce
                      </th>
                      <th>version
                      </th>
                      <th>affiche

                      </th>
                      <th>csa                      
                      </th>
                      <th>Catégories                      
                      </th>
                    <th colspan="3">
                      Action</th>
                  </tr>
                </thead>
                @foreach ($films as $film)
                <tbody class="bg-white">
                  <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                      <div class="flex items-center">
                        <a href="/crudfilm/{{$film -> id}}">{{$film-> id}}</a>
                      </div>
      
                    </td>
      
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                      <div class="text-sm leading-5 text-gray-900"><a href="/crudfilm/{{$film -> id}}">{{$film->titre}}</a>
                      </div>
                    </td>
      
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                      <p>{{$film->synopsis}}</p>
                    </td>
      
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <a href="/crudfilm/{{$film->id_real}}">{{$film->realisateur->nom}}{{$film->realisateur->prenom}}</a>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                      <span>{{$film->date_de_sortie}}</span>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                      <span>{{$film->duree}}</span>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                      <span>{{$film->bande_annonce}}</span>
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                      <span>{{$film->version}}</span>
                    </td>
                    <td class=" whitespace-no-wrap border-b border-gray-200">
                      <img src="{{asset('storage/' . $film->affiche)}}" class="img-responsive width=200px" >
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                      <span>{{$film->csa}}</span>
                    </td>
                  <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                     <span>{{$film->categories}}</span>
                    </td> }}
    


                    <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                      <a href="/update/{{$film->id}}" target="_blank" class="text-indigo-600 hover:text-indigo-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                      </a>
      
                    <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                      <a href="/Read/{{$film -> id}}" target="_blank" class="text-gray-600 hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                      </a>
      
                    </td>
      
                    </td>
                    <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                      <a href="/showdelete/{{$film -> id}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                          fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg></a>
      
                    </td>
                  </tr>
                </tbody>
                  @endforeach
                </table>
            </div>
          </div>
    </div>
  </div>
</div>
        </body>
      

               @endsection