<?php

namespace Bibliophile;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable= ['imagepath','title','description','price'];
}
