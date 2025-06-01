<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('input_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ID_purchase_order')->constrained('purchase_order')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('ID_input')->constrained('input')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('initialQuantity');
            $table->string('unitMeasurement',8);
            $table->double('unityPrice',10,3);
            $table->double('priceQuantity',10,3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_order');
    }
};
