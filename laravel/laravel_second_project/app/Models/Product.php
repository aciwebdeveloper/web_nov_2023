<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['products', 'user_id', 'type', 'qty', 'price', 'name', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
