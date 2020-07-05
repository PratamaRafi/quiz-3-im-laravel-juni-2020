<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
    public static function get_all() {
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function save($data) {
        $new_article = DB::table('articles')->insert($data);
        return $new_article;
    }

    public static function find_by_id($id){
        $articles = DB::table('articles')->where('id', $id)->first();
        return $articles;
    }

    public static function update($id, $request) {
        $articles = DB::table('articles')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            'slug' => $request["slug"],
                            'tag' => $request["tag"],
                        ]);
        return $articles;
    }

    public static function destroy($id) {
        $deleted = DB::table('articles')
                    ->where('id', $id)
                    ->delete();
        return $deleted;
    }
}