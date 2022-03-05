<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'buy_price',
        'sell_price',
        'stock',
    ];

    // Relationship(s)
    public function purchaseOrder()
    {
        return $this->belongsTo('App\Models\PurchaseOrder', 'id_product');
    }

    public function salesOrder()
    {
        return $this->belongsTo('App\Models\SalesOrder', 'id_product');
    }
}
