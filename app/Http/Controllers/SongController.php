<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function active(){
        $song = Song::where('status', 1)->get();
        return response()->json($song);
    }

    public function getSongsByCategory(Request $request){
        $id_category = $request->input('id_category');
        $songs = Song::where('id_category', $id_category)->get();
        return response()->json($songs);
    }

}
