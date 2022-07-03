<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model {

    use HasFactory;
    //protected $fillable=['title','excerpt','body']; //fillable untuk mass assigment
    protected $guarded=['id']; // untuk menjaga aga field tersebut tidak boleh disii kebalikan dari fillable

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
