<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    protected $table = 'supplier';

    protected $fillable = [
        'name',
        'email',
        'addres',
        'phone'
    ];

    public function purchaseOrder():HasMany
    {
        return $this->hasMany(PurchaseOrder::class);
    }
}
