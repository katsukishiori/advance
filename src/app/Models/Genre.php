<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['genre_name'];

    // GenreモデルとShopモデルのリレーション
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

}
