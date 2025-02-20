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
        Schema::create('vinyles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('release_year');
            $table->string('label');
            $table->foreignIdFor(App\Models\Artist::class);
            $table->string('description');
            $table->string('preview');
            $table->date('date_add');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinyles');
    }
};
