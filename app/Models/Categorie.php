<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'origine',               
    ];
    protected $table = 'categorie';
    public function fruit()
    {
        return $this->hasMany(Fruit::class);
    }
}
