<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_order';

    protected $fillable = [
        'ID_supplier',
        'purchaseOrderDate',
        'purchaseTotal'
    ];

    public function supplier():BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
    /**
     * Metodo de relacion en laravel
     */
    public function inputOrders():HasMany
    {
        return $this->hasMany(InputOrder::class, 'ID_purchase_order');
    }


}
