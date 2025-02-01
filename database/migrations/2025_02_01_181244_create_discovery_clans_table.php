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
        Schema::create('discovery_clans', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('tag');
            $table->string('invite')->nullable();
            $table->integer('member_count')->nullable();
            $table->integer('badge_id')->nullable();
            $table->string('badge_hash')->nullable();
            $table->timestamp('excluded_at')->nullable();
            $table->string('excluded_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discovery_clans');
    }
};
