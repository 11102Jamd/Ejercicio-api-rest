<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InputOrder extends Model
{
    protected $table = 'input_order';

    protected $fillable = [
        'ID_purchase_order',
        'ID_input',
        'initialQuantity',
        'unitMeasurement',
        'unityPrice',
        'priceQuantity',
    ];

    protected $attributes = [
        'initialQuantity' => 0,
        'unitMeasurement' => 'kg',
        'unityPrice' => 0,
        'priceQuantity' => 0,
    ];

    public function input(): BelongsTo
    {
        return $this->belongsTo(Input::class, 'ID_input');
    }

    public function purchaseOrder():BelongsTo
    {
        return $this->belongsTo(PurchaseOrder::class,'ID_purchase_order');
    }
}
