
   @php
   $classes='border-2 border-teal rounded bg-teal-500 px-5'   
   @endphp
   
   
   <button {{$attributes->class([$classes])}}>
     {{$name}}
     <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
   </button>
     