<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
        'title' => 'required',
        'point' => 'required',
        'ing' => 'required',
        'body' => 'required',
    );

  public function histories()
        {
        return $this->hasMany('App\History');

      }
}
