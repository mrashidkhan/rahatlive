<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('city', 100);
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->default('USA');
            $table->string('venue')->nullable();
            $table->dateTime('show_date');
            $table->time('doors_time')->nullable();
            $table->time('show_time')->nullable();
            $table->string('ticket_url', 500)->nullable();
            $table->string('city_image')->nullable();
            $table->enum('status', ['upcoming', 'announced', 'soldout', 'cancelled'])->default('announced');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();

            $table->index(['show_date', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
