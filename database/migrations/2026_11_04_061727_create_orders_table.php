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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->comment('顧客名');
            $table->string('product_name')->comment('商品名');
            $table->integer('quantity')->comment('数量');
            $table->date('order_date')->comment('受注日');
            $table->boolean('has_arrival_date')->default(false)->comment('着日指定フラグ');
            $table->date('arrival_date')->nullable()->comment('着日');
            $table->date('shipping_date')->comment('出荷予定日');
            $table->integer('status')->default(0)->comment('1=未出荷, 2=出荷済');
            $table->string('target_month')->comment('対象月：YYYY-MM形式');
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
