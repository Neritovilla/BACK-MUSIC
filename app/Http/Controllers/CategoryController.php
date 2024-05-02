<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Song;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*obtain all categories actives and inactives*/
    public function all(){
        $categories = Category::all();
        return response()->json($categories);
    }

    /*obtain all categories with status is 1 active */
    public function active(){
        $categories = Category::where('status', 1)->get();
        return response()->json($categories);
    }

    /*obtain a category with a specific id */
    public function getCategoryId(Request $request){
        $id_category = $request->input('id_category');
        $category = Category::where('id_category', $id_category)->get();
        return response()->json($category);
    }

    /*function for count number of categories and son with status active */
    public function count(){
        $songsCount = Song::where('status', true)->count();
        $activeCategoriesCount = Category::where('status', true)->count();
        // Retornar los valores como una lista
        return response()->json([
            'songsCount' => $songsCount,
            'activeCategoriesCount' => $activeCategoriesCount
        ]);
    }

    /*obtain categories and a number of songs with this category */
    public function categoryWithSong(){
        $categoriesWithSongCount = Category::select('category.*')
        ->selectRaw('COUNT(song.id_song) as song_count')
        ->leftJoin('song', 'category.id_category', '=', 'song.id_category')
        ->groupBy('category.id_category')
        ->get();
        return response()->json($categoriesWithSongCount);
    }

    /*Function for update name of category*/
    public function update(Request $request){
        $id_category = $request->input('id_category');
        $category = Category::find($id_category);
        $category->name = $request->input('name');
        $category->update();
        return response()->json(['status'=> true, 'message' => "Actualizado Correctamente"]);
    }

    /* function for update status in category*/
    public function updateStatus(Request $request){
        $id_category = $request->input('id_category');
        $category = Category::find($id_category);
        $category->status = $request->input('status');
        $category->update();

        if($request->input('status')  == 0){
            return response()->json(['status'=> true, 'message' => "Categoria Desactivada Correctamente"]);
        }else if($request->input('status')  == 1){
            return response()->json(['status'=> true, 'message' => "Categoria Activada Correctamente"]);
        }

    }


}
