<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index() {
        $articles = ArtikelModel::get_all();
            return view('artikel.index', compact('articles'));
    }

    public function create() {
        return view('artikel.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $hasil = ArtikelModel::save($data);
        if($hasil){
            return redirect('/artikel');
        }
    }

    public function show($id){
        $articles = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('articles'));
     }

     public function edit($id) {
        $articles = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('articles'));
    }

    public function update($id, Request $request) {
        $articles = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $deleted = ArtikelModel::destroy($id);

        return redirect('/artikel');
    } 
}
