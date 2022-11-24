<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use Illuminate\Support\Facades\DB;
use Validator;

class PerfumeController extends Controller
{
    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view( "/perfumes", [
            "perfumes" => $perfumes
        ]);
    }

    public function newPerfume() {

        return view( "new_perfume" );
    }

    public function storePerfume( Request $request ) {

        $validator = Validator::make($request->all(), [
            "name"=>"required",
            "type"=>"required",
            "price"=>"required"
        ]);

        if ($validator->fails()) {
            //TODO: return custom error page with "back"button
            return ("Minden mező kitöltése kötelező!");
            
        }

        $perfume = new Perfume;

        $perfume->name = $request->name;
        $perfume->type = $request->type;
        $perfume->price = (int)$request->price;

        $perfume->save();

        return redirect( "/new-perfume" );
    }

    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );

        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request ) {

        // solution with querybuilder

        DB::table('perfumes')->where('id', $request->id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price
        ]);

        return redirect("/perfumes");

    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "/perfumes" );
    }
}