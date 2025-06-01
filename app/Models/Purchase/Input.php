<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Input extends Model
{
    protected $table = 'input';

    protected $fillable = [
        'inputName',
        'currentStock',
        'unitGrams',
    ];

    public function inputOrders(): HasMany
    {
        return $this->hasMany(InputOrder::class, 'ID_input');
    }

    public function convertUnit($unitMeasurement, $quantity)
    {
        try {
            switch ($unitMeasurement) {
                case 'kg':
                    return $quantity * 1000;
                case 'lb':
                    return $quantity * 453.593;
                case 'l':
                    return $quantity * 1000;
            }
        } catch (\Throwable $th) {
            throw new \Exception("Error: " . $th->getMessage());
        }
    }
}
