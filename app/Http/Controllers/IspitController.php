<?php

namespace App\Http\Controllers;
use App\Models\Ispit;

use Illuminate\Http\Request;

class IspitController extends Controller
{
    public function index(){
        return Ispit::orderBy('vremeDatum', 'DESC')->get();
    }

    public function save(Request $request){
        $noviIspit = new Ispit();
        $noviIspit->predmet = $request->ispit['predmet'];
        $noviIspit->pismeno = $request->ispit['pismeno'];
        $noviIspit->vremeDatum = $request->ispit['vremeDatum'];
        $noviIspit->save();

        return $noviIspit;
    }

    public function edit(Request $request, $id){
        $ispit = Ispit::find($id);

        if($ispit){
            $ispit->vremeDatum = $request->ispit['vremeDatum'];
            $ispit->save();
            return $ispit;
        }

        return "Ispit ne postoji.";
        
    }

    public function remove($id){
        $ispit = Ispit::find($id);

        if($ispit){
            $ispit->delete();
            return 'Uspesno izbrisan ispit';
        }

        return 'Ispit nije nadjen.';
    }
}
