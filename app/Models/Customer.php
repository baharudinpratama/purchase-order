<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
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
    public function salesOrder()
    {
        return $this->belongsTo('App\Models\SalesOrder', 'id_customer');
    }
}
