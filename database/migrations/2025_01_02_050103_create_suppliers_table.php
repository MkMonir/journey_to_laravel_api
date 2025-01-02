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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->string('supplier_id')->primary();
            $table->string('name');
            $table->string('email');
            $table->string('company_name');
            $table->string('phone');
            $table->string('phone_emergency')->nullable()->change();
            $table->string('address');
            $table->string('nid_number');
            $table->string('photo')->nullable()->change();
            $table->integer('total_due')->nullable()->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
