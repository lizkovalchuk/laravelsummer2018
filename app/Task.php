<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    // if your table isn't follwing convention, you'll need to override

   // protected $table = 'products';


    // you will need to override attributes if your primary key

  //  protected $primaryKey = 'id';


//we need to tell laravel to turn off two
//fields that automatically looked for.

public $timestamps = false;

//for mass assignment

protected $fillable = ['name', 'status'];


}
