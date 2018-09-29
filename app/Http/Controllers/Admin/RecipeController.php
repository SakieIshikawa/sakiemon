<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recipes;
use App\History;
use Carbon\Carbon;

class RecipeController extends Controller
{
  public function add()
  {
      return view('admin.recipe.create');
  }

  public function create(Request $request)
  {

      // Varidationを行う
      $this->validate($request, Recipes::$rules);
      $recipes = new Recipes;
      $form = $request->all();

      // formに画像があれば、保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $recipes->image_path = basename($path);
      } else {
        $recipes->image_path = null;
      }

      unset($form['_token']);
      unset($form['image']);
      // データベースに保存する
      $recipes->fill($form);
      $recipes->save();

      return redirect('admin/recipe/create');
  }

  // 以下を追記
  public function index(Request $request)
  {

      $cond_title = $request->cond_title;
      if ($cond_title != '') {
    // 検索されたら検索結果を取得する
          $posts = Recipes::where('title', $cond_title)->get();
      } else {
      // それ以外はすべてのレシピを取得する
          $posts = Recipes::all();
      }
      return view('admin.recipe.index', ['posts' => $posts, 'cond_title' => $cond_title]);
  }
  

  public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $recipes = Recipes::find($request->id);

        return view('admin.recipe.edit', ['recipes_form' => $recipes]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Recipes::$rules);
        // News Modelからデータを取得する
        $recipes = Recipes::find($request->id);
        // 送信されてきたフォームデータを格納する
        $recipes_form = $request->all();
        unset($recipes_form['_token']);

        // 該当するデータを上書きして保存する
        $recipes->fill($recipes_form)->save();
        $history = new History;
        $history->recipes_id = $recipes->id;
        $history->edited_at = Carbon::now();
        $history->save();

        return redirect('admin/recipe/');
    }

    public function delete(Request $request)
      {
          // 該当するNews Modelを取得
          $recipes = Recipes::find($request->id);
          // 削除する
          $recipes->delete();
          return redirect('admin/recipe/');
      }

  }
