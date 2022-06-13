<?php

namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\realisateurs;
use App\Models\salles;
use Illuminate\Http\Request;

class Filmscontroller extends Controller
{

    public function wel()
    {
        $films = films::with('realisateur')->get();


        return  view('welcome', [

            'films' => $films,


        ]);
    }

    public function getall()
    {
        $films = films::with('realisateur')->get();


        return  view('crudfilm', [

            'films' => $films,


        ]);
    }







    public function add(Request $request)
    {






        if ($request->isMethod('POST')) {
            $path = $request->file('rec_photo')->store('affiches', 'public');



            $input = $request->input();

            $film = new Films();

            $film->titre = $input['titre'];
            $film->synopsis = $input['synopsis'];
            $film->id_real = $input['réalisateur'];
            $film->duree = $input['duree'];
        

            $film->version = $input['version'];
            $film->csa = $input['csa'];
            $film->affiche = $path;

            $film->save();
            //redirection vers les livre
            return redirect('crudfilm');
        }
        return  view('/addfilm');
    }



    public function getOne($id)
    {
        $film = Films::find($id);
        $reals = realisateurs::all();
        $salles = salles::all();

        return  view('update', [

            'film' => $film,
            'realisateurs' => $reals,
            'salles' => $salles

        ]);
    }

    public function update(Request $request)
    {
        $path = $request->file('rec_photo')->store('affiches', 'public');



        $input = $request->input();
        $film = Films::find($input['id']);



        $film->titre = $input['titre'];
        $film->synopsis = $input['synopsis'];
        $film->id_real = $input['realisateur'];
        $film->duree = $input['durée'];
        $film->date_de_sortie = $input['date_de_sortie'];
        $film->version = $input['version'];
        $film->duree = $input['csa'];

        $film->affiche = $path;


        $film->save();
        //redirection vers les livre
        return redirect('/crudfilm');
    }


    public function show($id){
        $film=Films::find($id);
    
        return view('/Read',[
            'film' =>$film ,
        

            ]);
        }

    public function showdel($id)
    {
        $film = Films::find($id);

        return view('showdelete', [
            'film' => $film,


        ]);
    }


    public function delete(Request $request)
    {
        $film = Films::find($request->input('id'));
        $film->delete();
        return redirect('/crudfilm');
    }
}
