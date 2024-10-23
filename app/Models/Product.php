<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'qty',
        'price',
        'description',
        'delivery_id'  // Add delivery_id to fillable fields
    ];

    /**
     * Define the relationship: A product belongs to one delivery company.
     */
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
}
