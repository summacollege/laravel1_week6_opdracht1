<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GebruikersController extends Controller
{
    public function index(){
        $data = DB::table('gebruikers') 
        ->select('naam', 'woonplaats')   
        ->where('woonplaats', 'like',  'b%')   
        ->orderBy('woonplaats', 'asc') 
        ->orderBy('naam', 'asc') 
        ->get(); 
        return view('gebruikers.index',['data'=>$data]); 
    }
    public function create(){
        return view('gebruikers.create'); 
    }

    public function store(Request $request){
        $data = $request->all();
        DB::table('gebruikers')->insert([
            'nummer' => $request->nummer,
            'naam' => $request->naam,
            'woonplaats' => $request->woonplaats,
        ]);
        return redirect('/gebruikers');

    }
}