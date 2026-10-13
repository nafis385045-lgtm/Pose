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

        $table->id();

        $table->foreignId('supplier_id');
        $table->decimal('total_price', 10, 2);
        $table->decimal('paid', 10, 2);
        $table->decimal('due', 10, 2);
        $table->decimal('discount', 10, 2);
        $table->decimal('transport_cost', 10, 2);
        $table->decimal('labour_cost', 10, 2);
        $table->json('payment_details');
        $table->string('invoice_no');
        $table->date('date');

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
