<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\shoppingCart;


class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productRelation()
    {
        return $this->hasMany(shoppingCart::class);
    }

}