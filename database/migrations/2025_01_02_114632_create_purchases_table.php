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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->constrained("suppliers");
            $table->date('purchase_date');
            $table->text('note')->nullable();
            $table->decimal('subtotal');
            $table->decimal('labour_cost')->nullable();
            $table->decimal('transport_cost')->nullable();
            $table->decimal('hidden_commission')->nullable();
            $table->decimal('grand_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
