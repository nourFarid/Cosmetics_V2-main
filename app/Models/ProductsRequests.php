<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsRequests extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_id',
        'count'
    ];
    public function item()
    {
        return $this->hasOne(Item::class);
    }
}
