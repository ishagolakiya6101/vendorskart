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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_code');
            $table->string('logo');
            $table->text('address');
            $table->unsignedBigInteger('contact_person');
            $table->foreign('contact_person')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('industry_id');
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
