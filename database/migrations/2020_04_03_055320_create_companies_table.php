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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained();
            $table->string('name')->nullable()->default('bookly');
            $table->string('slug')->unique();
            $table->text('about_us')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable()->default('085123456789');
            $table->string('address')->nullable()->default('surabaya');
            $table->string('logo')->nullable()->default('/assets/images/logos/logo-4.png');
            $table->softDeletes();
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
        Schema::dropIfExists('company_profiles');
    }
};
