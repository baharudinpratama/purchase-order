<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
    ];

    // Relationship(s)
    public function purchaseOrder()
    {
        return $this->belongsTo('App\Models\PurchaseOrder', 'id_supplier');
    }
}
