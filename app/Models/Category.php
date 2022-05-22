<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public function post(){
        //nama methodnya = nama model yg berhubungan
        //1 postingan punya byk post
        return $this->hasMany(Post::class);
    }
}
