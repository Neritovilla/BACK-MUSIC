<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /*obtain all songs with status active */
    public function active(){
        $song = Song::where('status', 1)->get();
        return response()->json($song);
    }

    /*obtain all songs with category specific*/
    public function getSongsByCategory(Request $request){
        $id_category = $request->input('id_category');
        $songs = Song::where('id_category', $id_category)->get();
        return response()->json($songs);
    }

}
