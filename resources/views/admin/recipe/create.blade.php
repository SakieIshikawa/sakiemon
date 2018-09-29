@extends('layouts.app')
@section('title', 'レシピの投稿')

@section('content')
<body>
  <div class="make-left-content">
    <div class="make-container">
      <div class="make">
        <h2>レシピを作る&#127859;</h2>
        <form action="{{ action('Admin\RecipeController@create') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) >0)
          <ul>
            @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
            @endforeach
          </ul>
          @endif


      <div class="recipename">
        <label class="recipename" for="title">レシピ名</label>
        <div class="recipename2">
          <input type="text" class="recipename" name="title" value="" size="50" style="height: 50px;">
        </div>
      </div>


      <div class="point">
        <label class="point3" for="point">&#127775;この料理のポイント！</label>
        <div class="points">
          <textarea name="point" rows="4" cols="60"></textarea> <br>
        </div>
      </div>
      <!--      <div class="howtocook">
                                  <label class="howtocook1" for="body">作り方</label>
                                  <div class="howtocook2">
                              <textarea class="howtocook3" name="body" rows="13" cols="30"></textarea>
                              <a href="javascript: void(0);" onclick="plus();">＋手順を追加</a>
                          </div>
                    </div>    -->


      <div class="making">
        <table id="howtocook">
         <label class="howtocook1" for="body">作り方</label>
          <tr class="tr1">
            <th>1</th>
            <td id="td1"> <textarea name="body" rows="7" cols="50"></textarea> </td>
          </tr>
        </table> <a href="javascript: void(0);" onclick="plus2();">＋作り方を追加</a>
      </div>

      <div class="image">
        <label class="image1" for="title">画像</label>
        <div class="image2">
          <input type="file" class="imagefile" name="image">
        </div>
      </div>
    </div>

    <div class="make-right-content">
      <div class="ingredient">
        <table id="ingredient">
        <label class="ingredient1" for="ing">🥚材料　　　　　　　　🥄分量</label>
        <tr class="tr0">
          <td><input type="text" name="mtl_0[]"></td>
          <td><input type="text" name="ing_0[]"></td>
        </tr>
        <tr class="tr1">
          <td> <input type="text" name="mtl_1[]"></td>
          <td> <input type="text" name="ing_1[]"></td>
        </tr>

      </table> <a href="javascript: void(0);" onclick="plus();">＋add</a>
    </div>



    {{ csrf_field() }}
      <div class="send">
        <input type="submit" class="btn btn-primary" value="レシピを投稿します">
      </div>
    </form>


  </div>

</div>
    </div>
  @endsection
