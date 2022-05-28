<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md dark:bg-red-600 dark:hover:bg-red-700 dark:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>

        <span>Ajouter un film</span>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>
[14:48]
<div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
<h1 class="text-3xl text-center font-bold text-gray-900 mt-20 mb-10">Créer un film</h1>
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
              
          
                <label class="block text-sm font-bold text-gray-700" for="duree">
                  durée
                </label>
  
                <input
                  class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="int" name="duree" placeholder="duree" required />
              </div>
   

             <label class="block text-sm font-bold text-gray-700" for="date_de_sortie">
                date de sortie
              </label>

              <input
                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="date" name="date_de _sortie" placeholder="date_de_sortie" required /> 
      
          
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
    </div>
   </div>
    </div>
