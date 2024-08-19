<?php

use App\Models\Day;
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
        Schema::create('stops', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Day::class)->constrained()->cascadeOnDelete();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('foods')->nullable();
            $table->boolean('is_completed')->default(false);
            $table->string('address');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 10, 8);
            $table->tinyInteger('rating', false, true)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stops', function (Blueprint $table) {
            $table->dropForeignIdFor(Day::class);
        });
        Schema::dropIfExists('stops');
    }
};
