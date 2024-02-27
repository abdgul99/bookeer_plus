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
        Schema::create('publisher_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('company_name')->nullable();
            $table->tinyInteger('editorial_support')->default(0);
            $table->tinyInteger('publication_support')->default(0);
            $table->string('cost')->nullable();
            $table->string('circulation')->nullable();
            $table->string('business_activities')->nullable();
            $table->string('capital')->nullable();
            $table->string('establishment_date')->nullable();
            $table->string('representative')->nullable();
            $table->text('company_history')->nullable();
            $table->text('representative_magazine')->nullable();
            $table->string('person_incharge')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->date('register_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publisher_detail');
    }
};