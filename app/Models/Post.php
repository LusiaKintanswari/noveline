<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'category_id', 'slug', 'body'];
    //biar bisa diisi lewat create, ga manual

    protected $guarded = ['id'];
    //ini kebalikan fillable, id gaboleh diisi lewat created, sisanya boleh


    public function category(){
        //nama methodnya = nama model yg berhubungan
        //1 postingan punya satu kategori
        return $this->belongsTo(Category::class);
    }
    public function user(){
        //nama methodnya = nama model yg berhubungan
        //1 postingan punya satu kategori
        return $this->belongsTo(User::class);
    }
}

