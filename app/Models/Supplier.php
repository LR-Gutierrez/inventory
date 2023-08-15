<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    
    public function businessManager()
    {
        return $this->belongsTo(BusinessManager::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
