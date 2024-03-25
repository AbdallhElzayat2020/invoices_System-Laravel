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
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments("id");
            $table->string('invoice_number', 80);
            $table->date('invoice_Date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('product', 50);
            $table->string('section', 50);
            $table->string('discount', 50);
            $table->string('rate_vat', 50);
            $table->decimal('value_vat', 50);
            $table->decimal('total', 8, 2);
            $table->string('status', 50);
            $table->integer('value_status');
            $table->text('note')->nullable();
            $table->string('user', 50);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
