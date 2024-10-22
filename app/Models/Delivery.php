<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'id_num'
    ];

    /**
     * Define the relationship: A delivery company has many products.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
