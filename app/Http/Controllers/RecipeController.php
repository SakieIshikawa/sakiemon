<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

  // 追記
use App\Recipes;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        // $cond_title が空白でない場合は、記事を検索して取得する
        if ($cond_title != '') {
            $posts = Recipes::where('title', $cond_title).orderBy('updated_at', 'desc')->get();
        } else {
            $posts = Recipes::all()->sortByDesc('updated_at');
        }

      //  if (count($posts) > 0) {
      //      $headline = $posts->shift();
      //  } else {
      //      $headline = null;
      //  }
        $ing = $request->ing;
        $process = $request->process;

        //$ = Recipes::where('title', $cond_title).orderBy('updated_at', 'desc')->get();


   // recipe/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、 cond_title という変数を渡している
        return view('recipe.index', ['posts' => $posts, 'cond_title' => $cond_title, 'ing' => $ing, 'process' => $process]);
    }
}
