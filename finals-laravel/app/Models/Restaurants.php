<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function recipe() {
        return $this->belongsTo(Recipes::class, 'recipes_id');
    } 

    public function category() {
        return $this->belongsTo(Categories::class,'categories_id');
    }
}
