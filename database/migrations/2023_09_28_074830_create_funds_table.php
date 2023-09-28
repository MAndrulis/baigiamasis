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
        Schema::create('funds', function (Blueprint $table) {
            $table->id();
            $table->string('fund_number')->unique();
            $table->string('fund_date');

            $table->string('client_name');
            // $table->string('fund_status');
            $table->string('client_adress');
            $table->string('client_adress2')->nullable();
            $table->string('client_vat')->nullable();
            $table->string('client_country');

            $table->string('fund_amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funds');
    }
};
