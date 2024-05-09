<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',              
        'date_expiration', 
        'prix', 
        'categorie_id',             
        'image',       
    ];
    protected $table = 'fruit';
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

}
