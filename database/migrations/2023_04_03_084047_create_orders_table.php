<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained();
            $table->foreignId('branch_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('slot_id')->constrained();
            $table->integer('total_price');
            $table->string('midtrans_token', 255)->nullable();
            $table->enum('status', ['Pending', 'Processed', 'Completed', 'Canceled']);
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
