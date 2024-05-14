<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{   private $tabPays= [
    ['id'=>1, 'nom'=> 'congo'],
    ['id'=>2, 'nom'=> 'france'],
    ['id'=>3, 'nom'=> 'italie'],
    ['id'=>4, 'nom'=> 'RDC'],
];
    public function hello(){
        return "hello word";
    }

    /*public function getCountries(){
        return response()->json($this->tabPays);
}*/
    /*public function showgetCountries($id){
        return response()->json($this->tabPays[$id]);
    }*/

    public function getCountries(){
        $pays= $this->tabPays;
        $title="Liste des pays";

        return view('pays', compact('pays','title' ));
}
public function showgetCountries($id){
    $pays =$this->tabPays[$id];

    return view('single', compact('pays'));
}

public function create(Request $request){
    return view('create');
}

public function store(Request $request){
    dd($request->method());
}



}