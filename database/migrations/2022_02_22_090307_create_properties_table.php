<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Conner\Tagging\Taggable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('user_id');
            $table->string('unique_id');
            $table->string('source_url');
            $table->string('source');
            $table->string('title');
            $table->string('address');
            $table->string('region');
            $table->string('price');
            $table->text('custom_fields')->nullable();
            $table->text('tags')->nullable();
            $table->unsignedBigInteger('bedrooms')->default(0);
            $table->unsignedBigInteger('bathrooms')->default(0);
            $table->unsignedBigInteger('house_area')->nullable();
            $table->unsignedBigInteger('land_area')->nullable();
            $table->string('vendor')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('agent_phone')->nullable();
            $table->string('agent_email')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
