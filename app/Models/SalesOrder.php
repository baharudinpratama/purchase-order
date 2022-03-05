<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_customer',
        'id_product',
        'qty',
        'dpp',
        'total',
    ];

    // Relationship(s)
    public function customers()
    {
        return $this->hasMany('App\Models\Customer', 'id_customer');
    }

    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'id_product');
    }
}
