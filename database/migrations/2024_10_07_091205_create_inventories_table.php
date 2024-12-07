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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->integer('category_id');
            $table->integer('supplier_id')->unsigned()->nullable()->after('category_id');
            $table->integer('quantity')->unsigned()->after('supplier_id');
            $table->string('unit')->nullable()->after('quantity');
            $table->decimal('price', 10, 2)->after('unit');
            $table->date('expiry_date')->nullable()->after('price');
            $table->text('description')->nullable()->after('expiry_date');
            $table->string('location')->nullable()->after('description');
            $table->timestamps();

            // Foreign key constraints (optional)
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
