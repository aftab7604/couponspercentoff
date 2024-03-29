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
        Schema::create('category_coupon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('coupon_id');
            $table->unsignedBiginteger('category_id');
            $table->timestamps();

            // $table->foreign('coupon_id')->references('id')
            // ->on('coupons')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')
            // ->on('categories')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_coupon');
    }
};
