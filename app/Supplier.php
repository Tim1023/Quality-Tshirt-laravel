<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = ['name', 'slug', 'description', 'modelo'];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
