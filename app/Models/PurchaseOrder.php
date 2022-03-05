<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_supplier',
        'id_product',
        'qty',
        'dpp',
        'total',
    ];

    // Relationship(s)
    public function suppliers()
    {
        return $this->hasMany('App\Models\Supplier', 'id_supplier');
    }

    public function products()
    {
        return $this->belongsTo('App\Models\Product', 'id_product');
    }
}
