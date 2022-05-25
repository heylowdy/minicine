@extends('layout.app')



@section('main')

 <!-- Create Post -->

 <div>
    <div class="flex flex-col items-center min-h-screen pt-6 pb-10 sm:justify-center sm:pt-0 ">
      <div class="w-full px-16 py-10 mt-4 overflow-hidden bg-gray-400  shadow-md shadow-gray-400 rounded-lg lg:max-w-4xl">
        <div class="mb-4">
          <h1 class="titre_create">
          Ajouter un film
          </h1> 
        </div>
    
        <!-- message d'erreur comme pour le dd et vardump A FAIRE ABSOLUMENT -->
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 



    <!--  -----------------------   -->
        <div class="w-full px-6 py-4 bg-white rounded shadow-md shadow-white ring-1 ring-gray-900/10">
          <form method="POST" action="/add" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div>
              <label class="block text-sm font-bold text-gray-700 " for="réalisateur">réalisateur</label>
  
           <input type="text" name="réalisateur" placeholder="réalisateur" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-2 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-left focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"> 
              
    
               
                
        
            </div>

            <div>
      
              <label class="block text-sm font-bold text-gray-700" for="titre">
                Titre
              </label>

              <input
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" name="titre" placeholder="titre" required />
            </div>

            <!-- Description -->
            <div class="mt-4">
              <label class="block text-sm font-bold text-gray-700" for="synopsis">
                synopsis
              </label>
              <div class="mb-3">
              <textarea name="synopsis"class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                rows="4" placeholder="400"></textarea>
            </div>

    
               <div class="m-4">
                      <label class="inline-block mb-2 text-gray-500">Upload
                          Affiche(jpg,png,svg,jpeg)</label>
                      <div class="flex items-center justify-center w-full">
                          <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                              <div class="flex flex-col items-center justify-center pt-7">
                                  <svg xmlns="http://www.w3.org/2000/svg"
                                      class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                          d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                          clip-rule="evenodd" />
                                  </svg>
                                  <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                  </p>
                              </div>
                              <input type="file" class="opacity-0" />

                              <label class="label-image" for="votre-image">
                            
                                 <input type="file" class="post-img text-gray-400 " name="rec_photo" accept=".jpg, .jpeg" required>
                             </label>


                          </label>
                      </div>
                  </div>
                
            
                  <label class="block text-sm font-bold text-gray-700" for="titre">
                    durée
                  </label>
    
                  <input
                    class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="durée" placeholder="durée" required />
                </div>
     

                <label class="block text-sm font-bold text-gray-700" for="titre">
                  date de sortie
                </label>
  
                <input
                  class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="date" name="date_de _sortie" placeholder="date_de_sortie" required />
              </div>
        
              <div>
              <label class="block text-sm font-bold text-gray-700" for="titre">
                version
              </label>

              <input
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" name="version" placeholder="version" required />
            </div>
    
            <div>
            <label class="block text-sm font-bold text-gray-700" for="titre">
              csa
            </label>

            <input
              class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
              type="text" name="csa" placeholder="csa" required />
          </div>

            <div class="relative w-64 mt-4">
              <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                <option class="text-sm font-bold text-gray-700 ">Catégories</option>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
            </div>
           

            
            <div class="flex items-center justify-start mt-4 gap-x-2">
              <button type="submit"
                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                Save
              </button>
              <button type="submit"
                class="px-6 py-2 text-sm font-semibold text-white bg-red-600 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                Cancel
              </button>
            </div>
          </form>
        </div>
      


@endsection