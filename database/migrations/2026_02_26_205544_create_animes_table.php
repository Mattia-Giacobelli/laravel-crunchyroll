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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();

            $table->string('original_name');
            $table->string('name');
            $table->text('plot');
            $table->string('cover');
            $table->foreignId('animation_studio_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('type_id')->default(1)->nullable()->constrained()->nullOnDelete();
            $table->smallInteger('episodes');
            $table->smallInteger('episodes_duration');
            $table->smallInteger('vote');
            $table->date('release_date');
            $table->date('end_date')->nullable();
            $table->boolean('completed');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
