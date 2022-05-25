<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\realisateurs;
use Illuminate\Http\Request;

class Filmscontroller extends Controller
{



  

    public function getall(){
        $films=films::with('realisateur')->get();
    

     return  view('crudfilm', [
         
         'films' => $films,
         
    
    ]);
}







public function add(Request $request)
{
   




    
   
if($request->isMethod('POST')){
    $path = $request->file('rec_photo')->store('affiches', 'public');
    


$input = $request->input();
$film = new Films();

$film->titre =$input['titre'];
$film->synopsis =$input['synopsis'];
$film->id_real =$input['réalisateur'];
$film->affiche=$path;

$film->save();
//redirection vers les livre
return redirect('crudfilm');
}
return  view('/addfilm');
}
}