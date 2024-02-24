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
        Schema::table('users', function (Blueprint $table) {

            $table->string('age')->nullable()->after('email_verified_at');
            $table->string('gender')->nullable()->after('age');
            $table->string('furigana')->nullable()->after('gender');
            $table->string('type')->nullable()->after('furigana');
            $table->string('profile_photo_path')->nullable()->after('type');
            $table->string('occupation')->nullable()->after('profile_photo_path');
            $table->string('area')->nullable()->after('occupation');
            $table->string('website')->nullable()->after('area');
            $table->string('sns')->nullable()->after('website');
            $table->text('comment')->nullable()->after('sns');
            $table->string('job')->nullable()->after('comment');
            $table->text('genres')->nullable()->after('job');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        });
    }
};